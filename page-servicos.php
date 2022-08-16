<?php
/*
Template Name: Servicos template
*/

?>

<?php get_header(); ?>
<?php include_once('page_components/menu.php'); ?>

<div class="wrapper servicos">

	<div class="wrapper__title">
		<div class="wrapper__title_content">
			<h1><?= mb_strtoupper(__('Nossos Serviços', 'services')); ?></h1>
			<div class="wrapper__title_citation titleTextBold">
				<?= __('“Nosso objetivo focar no sucesso do empreendimento e acompanhar cada empresa em adequação com a sua configuração e com a sua ambição”', 'services'); ?>
				<?= __('“Para garantir o melhor desempenho nos seus clientes e disponibilizar todas as ferramentas necessárias para prosperidade do negócio, a France Panificação oferece um painel de acompanhamentos adaptados a cada perfil e um atendimento a longo prazo.”', 'services'); ?>
			</div>
		</div>
<!--		<div class="wrapper__title_bg"></div>-->
		<img class="wrapper__title_bgimg no-ipad" src="<?= get_template_directory_uri(); ?>/assets/img/header_servicos.jpg" alt="">
		<img class="wrapper__title_bgimg no-desktop" src="<?= get_template_directory_uri(); ?>/assets/img/header_servicos_ipad.jpg" alt="">
	</div>

	<div class="wrapper__content">
		<div class="servicos__intro">
			<img class="servicos__intro_img" src="<?= get_template_directory_uri(); ?>/assets/img/page_servicos.jpg" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
			<div class="servicos__intro_text titleTextBold">
				<span><?= __('Serviço de consultoria:', 'services'); ?></span>
				<ul>
					<li><?= __('Adequação do ambiente de produção', 'services'); ?></li>
					<li><?= __('Formação técnica dos padeiros no estabelecimento', 'services'); ?></li>
					<li><?= __('Definição de gama de produtos e processos em acordo com a capacidade de produção', 'services'); ?></li>
				</ul>
			</div>
		</div>
		<div style="margin: 50px 0 50px 0;" class="servicos__intro" id="intensivo__btn_home">
			<img style="left: 0" class="servicos__intro_img" src="<?= get_template_directory_uri(); ?>/assets/img/intensivo-new-2.jpeg" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
			<div style="right: 0 !important; left: 60% !important;" class="servicos__intro_text titleTextBold">
				<span><?= __('Intensivo em panificação na escola Ateliê do Boulanger:', 'services'); ?></span>
				<ul>
					<li><?= __('Integrar o padeiro ao nosso Ateliê em tempo integral', 'services'); ?></li>
					<li><?= __('Assimilar as técnicas e conhecimentos num período de 1 a 3 meses', 'services'); ?></li>
					<li><?= __('Reproduzir diaramente os produtos no tempo estabelecido e com qualidade em um ambiente de produção', 'services'); ?></li>
				</ul>
			</div>
		</div>
		<div style="margin-bottom: 90px;" class="servicos__intro">
			<img class="servicos__intro_img" src="<?= get_template_directory_uri(); ?>/assets/img/intensivo-vendas.jpg" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
			<div class="servicos__intro_text titleTextBold">
				<span><?= __('Intensivo em vendas:', 'services'); ?></span>
				<ul>
					<li><?= __('Formação adequada para a sua responsável das vendas, mas podendo ser adapta para qualquer tipo de perfil de atendente.', 'services'); ?></li>
					<li><?= __('Ciclo de logística de abastecimento dos produtos', 'services'); ?></li>
					<li><?= __('Apresentação e comunicação dos produtos', 'services'); ?></li>
					<li><?= __('Atendimento ao cliente, argumentário de vendas', 'services'); ?></li>
					<li><?= __('Organização e repartição das tarefas', 'services'); ?></li>
				</ul>
			</div>
		</div>

	</div>

</div>

<?php include_once('page_components/footer.php'); ?>
<?php get_footer(); ?>