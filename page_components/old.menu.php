﻿<?php include('links.php') ?>
<!-- <?php include('lang-block.php'); ?> -->
<div class="menu">
	<div class="menu__item no-desktop menu__burger">
		<div class="burger">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="menu__item <?= $currentPage == 'sobre' ? 'active' : ''; ?> no-ipad"><a href="<?= $sobrePage ?>"><?= mb_strtoupper(__('Sobre', 'francepan')); ?></a></div>
	<div class="menu__item menu__cat <?= is_category() ? 'active' : is_single() ? 'active' : ''; ?> no-ipad">

		<ul>
			<li><a href="<?= $homePage ?>#produtos"><?= mb_strtoupper(__('Produtos', 'francepan')); ?></a></li>
			<?php
			$args = array(
				'orderby' => 'name',
				'order'   => 'ASC',
				'hide_empty' => false,
				// TODO - A enlever au cas où
				'parent'  => 0
			);
			$categories = get_categories($args);

			foreach($categories as $cat) {
				if($cat->name != 'Slider') {
					echo '<li><a href="' . get_category_link($cat->term_id) . '">' . mb_strtoupper($cat->name) . '</a></li>';
				}
			}
			?>


		</ul>
	</div>
	<div class="menu__item <?= $currentPage == 'servicos' ? 'active' : ''; ?> no-ipad"><a href="<?= $servicosPage ?>"><?= mb_strtoupper(__('Serviços', 'francepan')); ?></a></div>
	<div class="menu__item <?= $currentPage == 'escola' ? 'active' : ''; ?> no-ipad"><a href="<?= $escolaPage ?>"><?= mb_strtoupper(__('Escola', 'francepan')); ?></a></div>
	<div class="menu__item <?= $currentPage == 'parceiros' ? 'active' : ''; ?> no-ipad"><a href="<?= $parceirosPage ?>"><?= mb_strtoupper(__('Parceiros', 'francepan')); ?></a></div>
	<div class="menu__item <?= $currentPage == 'contato' ? 'active' : ''; ?> no-ipad"><a href="<?= $contatoPage ?>"><?= mb_strtoupper(__('Contatos', 'francepan')); ?></a></div>
	<div class="menu__item menu__logo"><a href="<?= is_home() ? $escolaPage : $homePage ?>">
			<div class="flip-container <?= is_home() ? '' : ($currentPage == 'escola' ? '' : 'hidden') ?>" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front <?= $currentPage == 'escola' ? 'escola' : ''; ?>">
						<!-- front content -->
<!--						<img src="--><?//= get_template_directory_uri(); ?><!--/assets/img/logos/logo-france-panificacao.svg" alt="">-->
					</div>
					<div class="back <?= $currentPage == 'escola' ? 'escola' : ''; ?>">
						<!-- back content -->
<!--						<img src="--><?//= get_template_directory_uri(); ?><!--/assets/img/logos/logo-adb.svg" alt="">-->
					</div>
				</div>
			</div>
			<img class="<?= is_home() ? 'hidden' : $currentPage == 'escola' ? 'hidden' : '' ?>" src="<?= get_template_directory_uri(); ?>/assets/img/logos/logo-france-panificacao.svg" alt="">
	</a></div>

	<div class="menu__item  no-ipad menu__item_newsletter"><a href="http://eepurl.com/cpC9gv" target="_blank"><?= mb_strtoupper(__('Newsletter', 'francepan')); ?></a></div>
<!--	<div class="menu__item menu__lang  no-iphone">-->
<!--		<img class="menu__lang_show" src="--><?php // echo get_template_directory_uri(); ?><!--/assets/img/icons/arrow-more.svg" alt="">-->
<!--		<ul>-->
<!--			--><?php //echo_lang_menu(); ?>
<!---->
<!--		</ul>-->
<!--	</div>-->

	<div class="menu__item menu__social menu__social_instagram no-iphone"><a href="https://www.instagram.com/francepanificacao/" target="_blank"><?= file_get_contents(get_template_directory_uri().'/assets/img/icons/instagram.svg'); ?></a></div>
	<div class="menu__item menu__social menu__social_facebook no-iphone"><a href="https://www.facebook.com/francepanificacao/" target="_blank"><?= file_get_contents(get_template_directory_uri().'/assets/img/icons/facebook.svg'); ?></a></div>
</div>

<div class="menu__mobile">
	<div class="menu__mobile_wrapper <?= $currentPage == 'escola' ? 'red' : ''; ?>">
		<div class="menu__burger">
			<div class="burger">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<a href="<?= $homePage; ?>"><h3 class="no-iphone"><?= mb_strtoupper(__('France Panificaçao', 'francepan')) ?></h3></a>
		<a class="menu__mobile_logolink <?= $currentPage != 'escola' ? '' : 'hidden' ?>" href="<?= $homePage ?>"><img class="menu__mobile_logo   iphone-only" src="<?= get_template_directory_uri(); ?>/assets/img/logos/logo-francepan-full.svg" alt=""></a>
		<a class="menu__mobile_logolink <?= $currentPage == 'escola' ? '' : 'hidden' ?>" href="<?= $escolaPage ?>"><img class="menu__mobile_logo   iphone-only" src="<?= get_template_directory_uri(); ?>/assets/img/logos/logo-adb-full.svg" alt=""></a>

		<div class="ipadMenu<?= $currentPage == 'sobre' ? ' active' : ''; ?> "><a href="<?= $sobrePage ?>"><?= mb_strtoupper(__('Sobre', 'francepan')) ?></a></div>
		<div class="ipadMenu ipadMenu__cat">

			<ul>
				<li class="ipadMenu__produtos_action <?= is_category() ? ' active' : is_single() ? ' active' : ''; ?>"><span><?= mb_strtoupper(__('Produtos', 'francepan')); ?></span></li>
				<?php
				$args = array(
					'orderby' => 'name',
					'order'   => 'ASC',
					'hide_empty' => false,
					// TODO - A enlever au cas où
					'parent'  => 0
				);
				$categories = get_categories($args);

				foreach($categories as $cat) {
					if($cat->name != 'Slider') {
						echo '<li '.(mb_strtoupper(single_cat_title('', false)) == mb_strtoupper($cat->name) ? 'class="active"' : '').'><a href="' . get_category_link($cat->term_id) . '">' . mb_strtoupper($cat->name) . '</a></li>';
					}
				}
				?>


			</ul>
		</div>
		<div class="ipadMenu<?= $currentPage == 'servicos' ? ' active' : ''; ?>"><a href="<?= $servicosPage ?>"><?= mb_strtoupper(__('Serviços', 'francepan')) ?></a></div>
		<div class="ipadMenu<?= $currentPage == 'escola' ? ' active' : ''; ?>"><a href="<?= $escolaPage ?>"><?= mb_strtoupper(__('Escola', 'francepan')) ?></a></div>
		<div class="ipadMenu<?= $currentPage == 'parceiros' ? ' active' : ''; ?>"><a href="<?= $parceirosPage ?>"><?= mb_strtoupper(__('Parceiros', 'francepan')) ?></a></div>
		<div class="ipadMenu<?= $currentPage == 'contato' ? ' active' : ''; ?>"><a href="<?= $contatoPage ?>"><?= mb_strtoupper(__('Contatos', 'francepan')) ?></a></div>

		<div class="ipadMenu"><a href="http://eepurl.com/cpC9gv" target="_blank"><?= mb_strtoupper(__('Newsletter', 'francepan')); ?></a></div>
<!--		<div class="ipadMenu menu__lang">-->
<!--			<img class="no-iphone menu__lang_show" src="--><?//= get_template_directory_uri(); ?><!--/assets/img/icons/arrow-more.svg" alt="">-->
<!--			<img class="iphone-only menu__lang_show" src="--><?//= get_template_directory_uri(); ?><!--/assets/img/icons/arrow-more-blue.svg" alt="">-->
<!--			<ul>-->
<!--				--><?php //echo_lang_menu(); ?>
<!---->
<!--			</ul>-->
<!--		</div>-->
		<div class="menu__mobile_social">
			<a class="blue" href="https://www.instagram.com/francepanificacao/"><?= file_get_contents(get_template_directory_uri().'/assets/img/icons/instagram.svg'); ?></a>
			<a class="red" href="https://www.facebook.com/francepanificacao/"><?= file_get_contents(get_template_directory_uri().'/assets/img/icons/facebook.svg'); ?></a>
		</div>
	</div>
</div>