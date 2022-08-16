<?php get_header(); ?>

<?php

global $post;

//	$args = array(
//		'posts_per_page'   => -1,
//		'post_type'        => 'category',
//		'post_status'      => 'publish',
//		'orderby'		   => 'menu_order',
//		'order' 		   => 'ASC'
//	);
//	$categories = get_posts($args);

$argsCategories = array(
	'orderby'    => 'name',
	'order'      => 'ASC',
	'hide_empty' => false,
	'include'    => [2, 3, 6],
	'parent'     => 0
	// TODO - A enlever au cas où
);
$categoriesSection = get_categories($argsCategories);

$argsSlides = array(
	'post_type'			=> 'post',
	'category'		    => 10,
	'orderby'			=> 'menu_order',
	'order'				=> 'DESC',
	'post_status'		=> 'publish',
	'posts_per_page'   	=> 3
);
$slides = get_posts($argsSlides);

$argsServicos = array(
	'post_type'			=> 'post',
	'category'			=> 11,
	'orderby'			=> 'menu_order',
	'order'				=> 'DESC',
	'post_status'		=> 'publish',
	'posts_per_page'   	=> 3
);
$servicos = get_posts($argsServicos);

$args = array(
	'post_type'			=> 'highlights',
	'orderby'			=> 'menu_order',
	'order'				=> 'DESC',
	'post_status'		=> 'publish',
	'posts_per_page'   	=> 3,
	'suppress_filters' => 0
);
$highlights = get_posts($args);
?>

<?php include_once('page_components/menu.php'); ?>

<div class="wrapper home">
	<div class="home__intro">
		<div class="home__intro_infos no-iphone">
			<a href="<?= get_home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/logos/logo-france-panificacao-small.svg" alt=""></a>
			<a href="http://ateliedoboulanger.com.br/" target="_blank"><img src="<?= get_template_directory_uri(); ?>/assets/img/logos/logo-adb-small.svg" alt=""></a>
			<div class="home__intro__infos_text"><?= mb_strtoupper(__('Produtos franceses selecionados', 'home')); ?></div>
		</div>
		<div class="home__intro_swiper">
			<!-- Swiper -->
			<h1 class="swiper-title"></h1>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php
					foreach ($slides as $slide) {
						$url = get_post_meta($slide->ID, 'slider_url', true);
					?>
						<div class="swiper-slide" data-title="<?= mb_strtoupper($slide->post_title) ?>" style="background-image: url('<?= get_image_url($slide->ID) ?>');">

							<!--									<img class="swiper-gradient" src="geturi/assets/img/icons/gradient.png" alt="">-->
							<!-- <a href="<?= $url ?>" target="_blank"><div class="button1 swiper-button <?= $url == '' ? 'hidden' : '' ?>"><?= mb_strtoupper(__('Descobrir', 'home')) ?></div></a> -->
						</div>

					<?php
					}
					?>

				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination no-iphone"></div>

			</div>
			<div class="swiper-button-next no-iphone"></div>
		</div>
	</div>

	<div class="home__main" id="produtos">

		<div class="home__categories">
			<h5 class="blue"><?= mb_strtoupper(__('Produtos', 'home')); ?><span></span></h5>
			<div class="home__categories_intro titleTextBold">
				<?= __('France Panificação se compromete em fornecer produtos de alta qualidade selecionados pelos nossos padeiros.', 'home'); ?>
			</div>

			<?php foreach ($categoriesSection as $category) : ?>
				<?php if ($category->slug != 'slider' && $category->slug != 'servicos') : ?>

					<div class="home__categories_item">
						<div class="home__categories_itemwrapper" style="background-image: url('<?= get_cat_image_url($category->term_id); ?>');">
							<div class="home__categorie_item_content">
								<h3><?= mb_strtoupper($category->name); ?></h3>
								<div class="home__categorie_item_desc titleText"><?= $category->description ?></div>
								<a href="<?= get_category_link($category->term_id) ?>">
									<div class="button1"><?= mb_strtoupper(__('Descobrir', 'home')); ?></div>
									<div class="button1"><?= mb_strtoupper(__('Descobrir', 'home')); ?></div>
								</a>

							</div>
							<img class="home__categories_item_gradient" src="<?= get_template_directory_uri(); ?>/assets/img/icons/gradient.png" alt="">
						</div>
					</div>

				<?php endif; ?>
			<?php endforeach; ?>

			<div class="clear"></div>
		</div>


		<div class="servicos">
			<h5 class="blue"><?= mb_strtoupper(__('Serviços', 'home')); ?><span></span></h5>
			<!-- <div class="servicos__item titleTextBold servicos__item_objectivos">
					<?= __('Nosso Objetivo', 'home'); ?>:
					<?= __('Acompanhar cada empresa em seu processo de desenvolvimento para confecção de um produto único, inovador de alta qualidade.', 'home'); ?>
					<span class="contentText">—  (J. Paulin)</span>
				</div> -->
			<div class="clear"></div>
			<!-- <div class="servicos__item titleText">
					<?= __('<strong>Serviços de consultoria</strong> ', 'home'); ?><br>
					<?= __('O suporte é concedido aos nossos clientes seguindo o “Savoir Faire” francês, seja na organização da produção em sua padaria ou com as tecnicas de panificação.', 'home'); ?><br><br>
				</div>
				<div class="servicos__item titleText">
					<?= __('<strong>Acompanhamento</strong> ', 'home'); ?><br>
					<?= __('Trata se de um acompanhamento personalizado, que envolve a seleção / indicação de materiais e equipamentos específicos, diversos tipos de treinamento até a degustação com a clientela final. Criando assim elos de verdadeiros parceiros no desenvolvimento de seus negócios.', 'francepan'); ?>
				</div> -->


			<?php foreach ($servicos as $key => $servico) {
				$link = get_permalink($servico->ID) ?>

				<div class="home__categories_item">

					<div class="home__categories_itemwrapper" style="background-image: url('<?= get_the_post_thumbnail_url($servico->ID) ?>');">

						<div class="home__categorie_item_content">
							<h3><?= mb_strtoupper($servico->post_name); ?></h3>
							<div class="home__categorie_item_desc titleText"><?= $servico->content ?></div>

							<?php if ($servico->post_name === 'consultoria') { ?>
								<a href="<?= $servicosPage ?>">
								<?php } elseif ($servico->post_name === 'escola') { ?>
									<a target="_blanck" href="http://ateliedoboulanger.com.br/">
									<?php } else { ?>
										<a href="<?= $servicosPage . '#intensivo__btn_home' ?>">
										<?php } ?>
										<div class="button1"><?= mb_strtoupper(__('Descobrir', 'home')); ?></div>
										</a>

						</div>
						<img style="padding-left: 0!important;" class="home__categories_item_gradient" src="<?= get_template_directory_uri(); ?>/assets/img/icons/gradient.png" alt="">
					</div>

				</div>


			<?php } ?>


			<div class="clear"></div>
		</div>

		<!-- <div class="highlights">
				<div class="highlights__background"></div>
				<div class="highlights__content">
					<?php
					// foreach($highlights as $key => $highlight) {
					// 	$postID = $highlight->ID;
					// 	$post_info = get_post($postID);
					// 	$content_post = $post_info->post_content;
					// 	$image = get_image_url($postID, 'full');
					// 	$facebook = get_post_meta($postID,'facebook_highlight', true);
					// 	$title = $facebook ? strip_tags($content_post) : get_the_title($postID);
					?>
								<div class="highlights__item">
									<img src="<?= $image ?>" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
									<h4 class="blue"><?= $title ?></h4> 
									<div class="titleText">
										<?= $facebook ? 'Seguidores no Facebook' : strip_tags($content_post) ?>
										<?= $facebook ? '<a href="https://www.facebook.com/francepanificacao" target="_blank" class="facebook_heart" ><img src="' . get_template_directory_uri() . '/assets/img/icons/heart.svg" alt=""></a>' : '' ?>
									</div>
								</div>
							<?php
							// 	if($key == 0) echo '<div class="highlights__separator left"></div>';
							// 	else if($key == 1) echo '<div class="highlights__separator right"></div>';
							// }
							?>
				</div>
			</div> -->

		<div class="newsletter">
			<!-- <div class="newsletter__form">
					<h3><?= mb_strtoupper(__('Newsletter', 'home')); ?></h3>

					<div class="newsletter__form_text"><?= __('Receba nossas novidades atravéa da newsletter !', 'home'); ?></div>

					<a href="http://eepurl.com/cpC9gv" target="_blank"><div class="button1 button1_newsletter button"><?= __('Inscreva-se', 'home'); ?> </div></a>

				</div> -->
			<div id="map"></div>

			<div class="clear"></div>
		</div>

	</div>
</div>

<?php include_once('page_components/footer.php'); ?>

<?php get_footer(); ?>