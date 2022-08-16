<?php
	// Allow Featured Images
	add_theme_support( 'post-thumbnails' );

	// Remove admin bar
	add_action('get_header', 'remove_admin_login_header');
	function remove_admin_login_header() {
		remove_action('wp_head', '_admin_bar_bump_cb');
	};

	// Prevent HTTP Error when uploading images to the back office
	add_filter( 'wp_image_editors', 'change_graphic_lib' );
	function change_graphic_lib($array) {
		return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
	};

	function truncate($string, $length, $stopanywhere=false) {
	    //truncates a string to a certain char length, stopping on a word if not specified otherwise.
	    if (strlen($string) > $length) {
	        //limit hit!
	        $string = substr($string,0,($length -3));
	        if ($stopanywhere) {
	            //stop anywhere
	            $string .= '...';
	        } else{
	            //stop on a word.
	            $string = substr($string,0,strrpos($string,' ')).'&nbsp;&hellip;';
	        }
	    }
	    return $string;
	}

	function get_image_url($id, $size = 'full'){
		$att = wp_get_attachment_image_src( get_post_thumbnail_id($id), $size);
		if(empty($att)) {
			$o_ID = icl_object_id($id, 'post', false, 'pt-br');
			$att = wp_get_attachment_image_src( get_post_thumbnail_id($o_ID), $size);
		}
		return $att[0];
	}

	function get_cat_image_url($id, $size = 'medium'){
		$att = z_taxonomy_image_url($id, $size);
		if(empty($att)) {
			$o_ID = icl_object_id($id, 'post', false, 'pt-br');
			$att = z_taxonomy_image_url($o_ID, $size);
		}
		return $att;
	}

	function get_gallery($id){
		$gallery = json_decode(get_post_meta($id,'_rsw_gallery_images', true));
		if(empty($gallery)){
			$o_ID = icl_object_id($id, 'post', false, 'pt-br');
			$gallery =  json_decode(get_post_meta($o_ID,'_rsw_gallery_images', true));
		}
		return $gallery;
	}

	function prefix_send_email_to_admin() {
		/**
		 * At this point, $_GET/$_POST variable are available
		 *
		 * We can do our normal processing here
		 */

		// Sanitize the POST field
		// Generate email content
		// Send to appropriate email

		if(isset($_POST['action']) && $_POST['action'] == 'contact_form') {
			if(trim($_POST['name']) === '') {
				$nameError = 'Please enter your name.';
				$hasError = true;
			} else {
				$name = trim($_POST['name']);
			}

			if(trim($_POST['email']) === '')  {
				$emailError = 'Please enter your email address.';
				$hasError = true;
			} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
				$emailError = 'You entered an invalid email address.';
				$hasError = true;
			} else {
				$email = trim($_POST['email']);
			}

			if(trim($_POST['subject']) === '')  {
				$subjectError = 'Please enter a subject.';
				$hasError = true;
			} else {
				$subject = trim($_POST['subject']);
			}

			if(trim($_POST['message']) === '') {
				$contentError = 'Please write a message.';
				$hasError = true;
			} else {
				$message = trim($_POST['message']);
			}

			if(trim($_POST['tel']) !== '') {
				$tel = trim($_POST['tel']);
			} else {
				$tel = '';
			}


			if(!isset($hasError)) {
				$emailTo = get_option('tz_email');
				if (!isset($emailTo) || ($emailTo == '') ){
					$emailTo = get_option('admin_email');
				}
				$subject = 'France Panificação Contact - '.$subject;
				$body = "$message \n\nFrom: $name \nEmail: $email \nT.: $tel";
				$headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;

				wp_mail('contato@francepanificacao.com.br', $subject, $body, $headers);
				$emailSent = true;
				wp_redirect(get_page_link(get_page_by_path('contato')->ID).'?mailSent=1');
			}

		} else {
			echo 'par submitted';
		}
	}
	add_action('admin_post_nopriv_contact_form', 'prefix_send_email_to_admin');
	add_action('admin_post_contact_form', 'prefix_send_email_to_admin');

	function mamaduka_remove_metabox() {
		if ( ! current_user_can( 'edit_others_posts' ) )
			remove_meta_box( 'wpseo_meta', 'post', 'normal' );
	}
	add_action( 'add_meta_boxes', 'mamaduka_remove_metabox', 11 );

	function pietergoosen_theme_setup() {
		register_nav_menus( array( 
		  'header' => 'Header menu', 
		  'footer' => 'Footer menu' 
		) );
	   }
	  
	  add_action( 'after_setup_theme', 'pietergoosen_theme_setup' );