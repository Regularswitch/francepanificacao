<?php
/*
Template Name: Sobre template
*/

?>
<?php get_header(); ?>
<?php include_once('page_components/menu.php'); ?>

	<div class="wrapper sobre">

		<img class="sobre_map no-iphone" src="<?= get_template_directory_uri(); ?>/assets/img/sobre-map.png" alt="">

		<div class="wrapper__title">

			<div class="wrapper__title_content">
				<h1><?= mb_strtoupper(__('France Panificação', 'sobre')); ?></h1>
				<div class="wrapper__title_citation titleTextBold">
					<!-- <?= __('“A Panificação na França é quase sagrada, porque o pão representa a amizade e o amor que compartilhamos com entes queridos e amigos em todos os momentos da vida.”', 'sobre'); ?> -->
				</div>
			</div>
<!--			<div class="wrapper__title_bg bg_blue"></div>-->
			<img class="wrapper__title_bgimg no-ipad" src="<?= get_template_directory_uri(); ?>/assets/img/header_sobre.jpg" alt="">
			<img class="wrapper__title_bgimg no-desktop" src="<?= get_template_directory_uri(); ?>/assets/img/header_sobre_ipad.jpg" alt="">
		</div>

		<div class="wrapper__content">
			<img class="sobre__picture" src="<?= get_template_directory_uri(); ?>/assets/img/page_sobre.jpg" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
			<img class="sobre__picture_gradient" src="<?= get_template_directory_uri(); ?>/assets/img/sobre_gradient.png" alt="">
			<div class="sobre__box">
				<div class="sobre__box_left titleTextBold">
					<h4 style="color: white"><?= __('FRANCE <br> PANIFICAÇÃO', 'sobre'); ?></h4>
				</div>
				<div class="sobre__box_right contentText">
					<p><?= __('A France Panificação iniciou as suas atividades em 2013. A ideia nasceu da vontade de trazer para o Brasil o melhor da panificação francesa e para isso trazer a seleção das melhores farinhas para desenvolver produtos com técnicas artesanais, oferecendo produtos saudáveis, livres de aditivos químicos ou melhoradores. 
', 'sobre') ?></p>
					<p><?= __('Com o desenvolvimento da atividade e necessidade dos nossos clientes para formar padeiros com essas técnicas e processos próprios para tirar todo o proveito dessas farinhas, foi desenvolvido o Ateliê Do Boulanger em 2017, escola onde se formam os futuros padeiros Brasileiros tanto profissional quanto amador, mas também onde elaboramos as intervenções a ser desempenhadas no nossos clientes.
', 'sobre') ?></p>
					<p><?= __('Para completar a nossa oferta e oferecer a visão completa da cadeia desde a produção até a venda, resolvemos em 2019 criar a La Boulange, loja destinada em apresentar para os nossos clientes ferramentas para alavancar as vendas.
', 'sobre') ?></p>
					<p><?= __('Iniciamos em 2020 uma nova etapa, abraçando a era digital, disponibilizando vídeos online no Ateliê 2.0 afim de atender o público que não tem a possibilidade e disponibilidade de se deslocar até nossa escola.
', 'sobre') ?></p>
				</div>
				<div class="clear no-iphone"></div>
			</div>

			<div class="sobre__highlights">
				<div class="sobre__highlights_items">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/icons/sobre_1.png" alt="">
					<h4><?= __('Tradição', 'sobre'); ?></h4>
					<div class="contentText">
						<?= __('Respeitamos e incentivamos as técnicas de produção do <strong>Moinho francês familiar e independente</strong>, que traz consigo um olhar primoroso sob a qualidade do trigo cultivado na França.É fundamental que o trigo se desenvolva de acordo com o método da produção tradicional para manter suas propriedades físicas e nutritivas.', 'sobre'); ?>
					</div>
				</div>
				<div class="sobre__highlights_items">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/icons/sobre_2.png" alt="">
					<h4><?= __('Sustentabilidade', 'sobre'); ?></h4>
					<div class="contentText">
						<?= __('Nossas farinhas são produzidas com trigo <strong>CRC (Cultura Sustentável Controlada)</strong>, selo que visa à preservação da saúde do consumidor, ao respeito ao meio ambiente, à biodiversidade e à qualidade da panificação artesanal. São certificadas pelo Ministério da Agricultura francesa.', 'sobre'); ?>
					</div>
				</div>
				<div class="sobre__highlights_items">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/icons/sobre_3.png" alt="">
					<h4><?= __('Serviços', 'sobre'); ?></h4>
					<div class="contentText">
						<?= __('Realizamos consultoria especializada e personalizada a fim de levar ao cliente <strong>uma experiência completa</strong> no ramo da panificação. Para isso, acompanhamos cada cliente criteriosamente em seu desenvolvimento.', 'sobre'); ?>
					</div>
				</div>
				<div class="clear"></div>
			</div>

			<div class="sobre__crc">
				<div class="sobre__crc_title">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/logos/logo-crc2.png" alt="">
					<h5><?= mb_strtoupper(__('O Selo CRC', 'sobre')); ?><span></span></h5>
					<div class="clear"></div>
				</div>
				<div class="sobre__crc_content">
					<div class="sobre__crc_content_text">
						<div class="contentTextBold blue">
							<?= __('No início, este selo foi criado para a alimentação infantil e preservar antes de tudo a saúde do consumidor. 
							É a garantia que os trigos foram produzidos respeitando o meio ambiente e a biodiversidade. Escolha de sementes adaptadas, selecionadas pela qualidade 
							para a panificação artesanal. Este trigo é produzido segundo um caderno de especificações rigoroso:', 'sobre'); ?>
						</div>
						<img class="iphone-only" src="<?= get_template_directory_uri(); ?>/assets/img/page_sobre23.jpg" alt="">
						<div class="contentText"> 
							<?= __('. Grãos com teor de <strong>contaminantes reduzidos</strong>.<br>• 
										<strong>Campos protegidos</strong> de qualquer fonte de poluição.
										<br>• Armazenamento <strong>100% sem pesticidas</strong> ou outras 
										fontes químicas.', 'sobre'); ?>
						</div>
						<div class="contentText">
							<?= __('. Campos protegidos de qualquer fonte de poluição: 
								das grandes estradas, das fábricas, aeroportos', 'sobre'); ?>
						</div>
						<div class="contentText">
							<?= __('Os grãos serão armazenados sem pesticidas. A garantia do respeito das exigências CRC é verificada por um plano de controles
						 	e análises rigorosas a través de um órgão de certificação independente.', 'sobre'); ?>
						</div>
						
						<div class="contentText">
							<?= __('O RESPEITO AO CONSUMIDOR É NOSSA PRIORIDADE, A QUALIDADE O 
							NOSSO FOCO', 'sobre'); ?>
						</div>

						<a href="http://lebledenoscampagnes.fr/" target="_blank"><div class="button1 border"><?= mb_strtoupper(__('Saiba Mais', 'sobre')) ?></div></a>
						
					</div>

					<div class="sobre__crc_content_image">
						<img class="no-iphone" src="<?= get_template_directory_uri(); ?>/assets/img/page_sobre23.jpg" alt="France Panificação – São Paulo Brasil – Importação de Farinha – Padeiro Artesanal">
						<div class="sobre__crc_logos">
							<div class="logo_item">
								<img src="<?= get_template_directory_uri(); ?>/assets/img/logos/logo-ministere-agriculture.jpg" alt="">
								<div>100% <br><?= __('Frances', 'sobre'); ?></div>
							</div>
							<div class="logo_item">
								<img src="<?= get_template_directory_uri(); ?>/assets/img/logos/produitcertifie.png" alt="">
								<div>100% <br><?= __('Certificado', 'sobre'); ?></div>
							</div>
							<div class="logo_item">
								<img src="<?= get_template_directory_uri(); ?>/assets/img/logos/lebledenoscampagnes.png" alt="">
								<div>100% <br><?= __('Responsavel', 'sobre'); ?></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- <div class="sobre__crc_title sobre_labelrouge_title">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/logos/logo-labelrouge.jpg" alt="">
					<h5><?= mb_strtoupper(__('O Selo Label Rouge', 'sobre')); ?><span></span></h5>
					<div class="clear"></div>
				</div>
				<div class="sobre__crc_content sobre_labelrouge_content">
					<div class="sobre__crc_content_text">
						<div class="contentText" style="line-height: 24px;"> <?= __('O selo Label Rouge (selo oficial do ministério da agricultura da França) que garante ao consumidor que o produto possui uma qualidade, diante de produtos da mesma categoria.', 'sobre'); ?></div>

					</div>
				</div>
				<div class="sobre__crc_content">
					<div class="sobre__crc_content_text">
						<a href="http://www.labelrouge.fr/" target="_blank"><div class="button1 border redhover"><?= mb_strtoupper(__('Saiba Mais', 'sobre')) ?></div></a>
					</div>
				</div> -->
			</div>

		</div>
	</div>

<?php include_once('page_components/footer.php'); ?>
<?php get_footer(); ?>