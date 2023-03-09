<?php
/*
Template Name: Contato template
*/

?>

<?php get_header(); ?>
<?php include_once('page_components/menu.php'); ?>

	<div class="wrapper contato">
		<div class="wrapper__title">

			<div class="wrapper__title_content">
				<h1><?= mb_strtoupper(__('Contato', 'contato')); ?></h1>

			</div>
<!--			<div class="wrapper__title_bg"></div>-->
			<img class="wrapper__title_bgimg no-ipad" src="<?= get_template_directory_uri(); ?>/assets/img/header_parceiros.jpg" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
			<img class="wrapper__title_bgimg no-desktop" src="<?= get_template_directory_uri(); ?>/assets/img/header_parceiros_ipad.jpg" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
		</div>

		<div class="wrapper__content">
			<div class="contato__content">
				<div class="formSuccess titleTextBold"><?= __('Seu email foi enviado com sucesso.<br>Entraremos em contato o mais breve possivel !', 'contato') ?></div>
				<div class="formError titleTextBold"><?= __('Seu email não foi enviado. Por favor, tente de novo mais tarde.', 'contato') ?></div>
					<?php echo do_shortcode('[contact-form-7 id="1360" title="Contato"]'); ?>				
			</div>
			<div class="contato__content">
				<div id="map"></div>
			</div>
			<div class="clear"></div>
		</div>
        
		<div class="wrapper__content" id="form-curriculo">
			<div class="info__form-curriculo">
				<h2><?= mb_strtoupper(__('Trabalhe Conosco', 'contato')); ?></h2>
				<p><?= __('Venha fazer parte da nossa equipe, garantimos novos desafios e desenvolvimento profissional. Faça parte da nossa equipe!</p>
				<p>Cadastre seu currículo e boa sorte!', 'contato'); ?></p>
			</div>
			<div class="contato__content">
				<?php echo do_shortcode('[contact-form-7 id="1120" title="Curriculo"]'); ?>
			</div>
			<div class="contato__content">
				<img src="<?= get_template_directory_uri(); ?>/assets/img/La-Boulange.png" alt="La-Boulange">
			</div>
			<div class="clear"></div>
		</div>

	</div>

<?php include_once('page_components/footer.php'); ?>
<?php get_footer(); ?>