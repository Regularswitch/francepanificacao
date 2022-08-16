<?php get_header(); ?>
<?php
$categoryID = get_cat_id(single_cat_title("",false));
//$categoryName = get_the_category_by_ID($categoryID);
$categoryName = single_cat_title('', false);

$args = array(
	'posts_per_page'   => -1,
	'category'		   => $categoryID,
	'orderby'          => 'date',
	'order'            => 'DESC',
	'post_status'      => 'publish',
	'suppress_filters' => true
);
$posts = get_posts( $args );
?>
<?php include_once('page_components/menu.php'); ?>
<style>
.btn_category-catalago {
    margin-top: 1rem; 
    width: 50%;
}

.btn_category-catalago a {
    text-decoration: none;
    color: #fff;
}

.btn_category-catalago a:hover {
    color: #0E45DE;
}

.btn_category-comprar {
    position: absolute; 
    bottom: 0;
}

@media only screen and (max-width: 767px) {
    .btn_category-catalago {
        width: 70% !important;
        margin-top: 5rem;
    }   
    .btn_category-comprar {
        bottom: 110px;
    }
}

@media only screen and (max-width: 1125px) {
    .btn_category-catalago {
        width: 70% !important;
        margin-top: 4rem;
    }   
    .btn_category-comprar {
        bottom: 50px;
    }
}


.btn_category {
    padding: .2rem 1rem;
    background-color: #0E45DE;
    border: 1px solid #0E45DE;
    cursor: pointer;
    font-family: BrandonBold,serif;
    font-size: 20px;
    line-height: 40px;
    text-align: center;
    transition: all .3s ease-out;
    color: #fff;
}
.btn_category:hover {
    background-color: #fff;
    color: #0E45DE;
    border-color: #0E45DE;
    transition: background-color .3s ease-out,color .3s ease-out,borde-color .3s ease-out;
}
</style>
	<div class="wrapper categories">

<!--		<div class="bgColor"></div>-->
		<div class="category__intro wrapper__title">
			<div class="wrapper__title_content">
				<h1 class="category__intro_title"><?= mb_strtoupper($categoryName) ?></h1>
					<?php if($categoryID === 6){  ?>
						<div class="btn_category openComprar category__mais btn_category-comprar"><?= mb_strtoupper(__('Comprar', 'francepan')); ?></div>
					<?php } ?>
				<div class="category__intro_citation titleTextBold">
					<?php
						if($categoryName == 'Produtos Panibois') {
							echo 'Preparar • Assar • Servir<br>
									<span class="contentText">O inventor do cozimento em forma de madeira</span>';
						} elseif($categoryName == 'PANIBOIS PRODUCTS'){
							echo 'Prepare • Bake • Serve<br>
									<span class="contentText">The inventor of the wood-fired cooking</span>';
						} else {
							echo strip_tags(category_description());
							if($categoryName == 'Utensílios') {
						    echo '<div class="btn_category btn_category-catalago"><a href="https://www.francepanificacao.com.br/wp-content/themes/rsw-francepan/assets/pdf/CATALOGUE-SCARITECH-PT-2022-l.pdf" target="_blank">' . mb_strtoupper(__('catálogo SCARITECH' , 'francepan')) . '</a></div>';
						    echo '<span class="contentText">*Consulte disponibilidade</span>';
							}
						}
					?>
					
				</div>
				<div class="clear"></div>
			</div>
<!--			<div class="wrapper__title_bg"></div>-->
			<?php
				if($categoryName == 'Farinhas Francesas') {
					echo '<img class="wrapper__title_bgimg no-ipad" src="' . get_template_directory_uri() . '/assets/img/header_farinhas.jpg" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
							<img class="wrapper__title_bgimg no-desktop" src="' . get_template_directory_uri() . '/assets/img/header_farinhas_ipad.jpg" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">';
				} else if($categoryName == 'Produtos Panibois') {
					echo '<img class="wrapper__title_bgimg no-ipad" src="' . get_template_directory_uri() . '/assets/img/header_panibois.jpg" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
							<img class="wrapper__title_bgimg no-desktop" src="' . get_template_directory_uri() . '/assets/img/header_panibois_ipad.jpg" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">';
				} else {
					echo '<img class="wrapper__title_bgimg no-ipad" src="' . get_template_directory_uri() . '/assets/img/header_panibois.jpg" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
							<img class="wrapper__title_bgimg no-desktop" src="' . get_template_directory_uri() . '/assets/img/header_panibois_ipad.jpg" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">';
				}
			?>

		</div>
		<div class="category__wrapper categories">
			<?php
				foreach($posts as $post) {
					$postID = $post->ID;
	//				$label = get_post_meta($postID,'label', true);
					$label_quality = get_post_meta($postID,'label_qualite', true);
//					$pattern = '/(.*)(?:-)?/';'
//					$text = 'Este modelo serve perfeitamente o famoso panetone de Natal. Voce pode utilizar lo nos mais diversos tipos de receitas: preparo de saladas, massas, bolos, brioches açucarados… -Di';
					$text = strip_tags($post->post_content);
//					$pattern = '#(.*)( -[A-Z](.*)){1,}#i';
//					$matches = preg_replace($pattern, '$1', $text);

//					preg_match($pattern, strip_tags($post->post_content), $matches);
//					$matches = preg_split($pattern, strip_tags($post->post_content));
			?>
					<?php if($categoryName == 'Farinhas Francesas' || $categoryName ==  'FRENCH FLOURS' || $categoryName == 'Produtos Panibois' || $categoryName == 'PANIBOIS PRODUCTS') {?>
						<div class="category">
							<a href="<?= get_permalink( $postID ) ?>">
								<div class="category__image">
									<img class="category__image_main" width="400" height="250" src="<?= get_image_url($postID, 'medium'); ?>" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
<!-- 									<img class="category__image_bagatelle <?= $label_quality[0] == 'Bagatelle' ? 'show' : '' ?>" src="<?= get_template_directory_uri(); ?>/assets/img/logos/logo-bagatelle.png" alt=""> -->
									<div class="category__gradient"></div>
								</div>
							</a>
							<div class="category__content_large">
								<h3><?= mb_strtoupper(the_title()); ?></h3>
								<div class="category__content_text contentText"><?= $text ?>

								</div>
								<?php
									if($label_quality != '') {
										echo '<div class="category__content_label contentTextBold">';

										foreach( $label_quality as $key => $label ) {
											echo ucfirst($label);
											if($key < count($label_quality ) - 1) {
												echo ' / ';
											}
										}
										echo '</div>';
									} else {
										echo '<div class="category__content_label_empty"></div>';
									}
								?>

								<a href="<?=  get_permalink( $postID ) ?>" class="category__mais"><div class="button1"><?= mb_strtoupper(__('Saiba Mais', 'francepan')); ?></div></a>

								<div class="clear"></div>
							</div>
						</div>
					<?php }else{ ?>
						<div class="category">
							<div class="category__image">
								<img class="category__image_main" width="400" height="250" src="<?= get_image_url($postID, 'medium'); ?>" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
								<!-- <img class="category__image_bagatelle <?= $label_quality[0] == 'Bagatelle' ? 'show' : '' ?>" src="<?= get_template_directory_uri(); ?>/assets/img/logos/logo-bagatelle.png" alt=""> -->
								<div class="category__gradient"></div>
							</div>
							
							 <div class="category__content_large"> 
								 <h3 style="text-transform: uppercase;"><?= mb_strtoupper(the_title()); ?></h3> 
								 <div class="category__content_text contentText"><?= $text ?></div>
								
								<?php
									if($label_quality != '') {
										echo '<div class="category__content_label contentTextBold">';

										foreach( $label_quality as $key => $label ) {
											echo ucfirst($label);
											if($key < count($label_quality ) - 1) {
												echo ' / ';
											}
										}
										echo '</div>';
									} else {
										echo '';
									}
								?>

								<!-- <div class="button1 openComprar category__mais"><?= mb_strtoupper(__('Comprar', 'francepan')); ?></div> -->
								
								 <div class="clear"></div> 
							</div>
						</div>
					<?php } ?>

				<?php

				}
			?>


			<!-- <div class="category__extra no-iphone">
				<img class="category__extra_simple" src="<?= get_template_directory_uri(); ?>/assets/img/cat-extra-1.png" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
				<img class="category__extra_double" src="<?= get_template_directory_uri(); ?>/assets/img/cat-extra-2.png" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
			</div> -->


			<div class="clear"></div>


		</div>

	</div>
<?php include_once('page_components/popup.php'); ?>
<?php include_once('page_components/footer.php'); ?>

<?php get_footer(); ?>