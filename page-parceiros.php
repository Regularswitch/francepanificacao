<?php
/*
Template Name: Parceiros template
*/

?>
<?php get_header(); ?>
<?php include_once('page_components/menu.php'); ?>

	<div class="wrapper parceiros">
		<div class="wrapper__title">
			<div class="wrapper__title_content">
				<h1><?= mb_strtoupper(__('Nossos Parceiros', 'francepan')); ?></h1>

			</div>
<!--			<div class="wrapper__title_bg"></div>-->
			<img class="wrapper__title_bgimg no-ipad" src="<?= get_template_directory_uri(); ?>/assets/img/header_parceiros.jpg" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
			<img class="wrapper__title_bgimg no-desktop" src="<?= get_template_directory_uri(); ?>/assets/img/header_parceiros_ipad.jpg" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">


		</div>

		<div class="wrapper__content parceiros__flex">

			<?php

			$args = array(
				'post_type'			=> 'posts_parceiros',
				'orderby'			=> 'menu_order',
				'order'				=> 'DESC',
				'post_status'		=> 'publish',
				'posts_per_page'   	=> -1
			);
			$parceiros = get_posts($args);
			foreach($parceiros as $parceiro) {
				$url = get_post_meta($parceiro->ID,'slider_url', true);
				echo '<div class="parceiros__items">
						<a href="'.$url.'" target="_blank">
							<img src="'.get_image_url($parceiro->ID).'" alt="">
						</a>
						<div class="parceiros__items_content contentText">
							'.strip_tags($parceiro->post_content).'
						</div>
					</div>';

			}

			?>

		</div>


	</div>

<?php include_once('page_components/footer.php'); ?>
<?php get_footer(); ?>