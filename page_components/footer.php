<?php include('links.php') ?>
<?php
	$stickyFooter = array('parceiros', 'sobre', 'servicos', 'contato');
?>

<style>
	.button_whats {
		position: fixed;
		z-index: 999;
		bottom: 35px;
		right: 15px;
		display: flex;
		align-items: center;
	}

	.button_whats a .normal {
		z-index: 1;
		opacity: 1;
	}

	.button_whats a img {
		width: 48px;
		height: 48px;
	}

	.button_whats a .hover_wt {
		z-index: -1;
		position: absolute;
		left: -111px;
		opacity: 0;
	}
</style>


<div class="button_whats">
	<a href="https://api.whatsapp.com/send?phone=5511983936491&amp;text=Olá%2C%20gostaria%20de%20um%20atendimento" target="_blanc">
		<img class="normal" src="<?= get_template_directory_uri(); ?>/assets/img/icons/whatsapp.png" alt="" />
	</a>
</div>

<div class="footer <?= in_array($currentPage, $stickyFooter) ? 'footer_sticky' : '' ?> <?= $currentPage == 'sobre' ? 'footer__sticky_sobre' : '' ?>">
	<div class="footer__wrapper">
		<div class="footer__item footerText">
			<div class="footer__menu_item <?= (is_category() ? 'active' : is_single()) ? 'active' : ''; ?>"><a href="<?= $homePage ?>#produtos"><?= mb_strtoupper(__('Produtos', 'francepan')); ?></a></div>
			<div class="footer__menu_item <?= $currentPage == 'servicos' ? 'active' : ''; ?>"><a href="<?= $servicosPage ?>"><?= mb_strtoupper(__('Serviços', 'francepan')); ?></a></div>
			<div class="footer__menu_item <?= $currentPage == 'escola' ? 'active' : ''; ?>"><a href="<? $escolaPage ?>"><?= mb_strtoupper(__('Escola', 'francepan')); ?></a></div>

		</div>
		<div class="footer__item footerText">
			<div class="footer__menu_item <?= $currentPage == 'parceiros' ? 'active' : ''; ?>"><a href="<?= $parceirosPage ?>"><?= mb_strtoupper(__('Parceiros', 'francepan')); ?></a></div>
			<div class="footer__menu_item <?= $currentPage == 'sobre' ? 'active' : ''; ?>"><a href="<?= $sobrePage ?>"><?= mb_strtoupper(__('Sobre', 'francepan')); ?></a></div>
			<div class="footer__menu_item <?= $currentPage == 'contato' ? 'active' : ''; ?>"><a href="<?= $contatoPage ?>"><?= mb_strtoupper(__('Contatos', 'francepan')); ?></a></div>
		</div>
		<div class="footer__item footerText">
			<a href="mailto:contato@francepanificacao.com.br">contato@francepanificacao.com.br</a><br>
			T: (11) 2369-0887<br><br>

			Rua Adib Miguel Haddad 69<br>
			Vila Firmiano Pinto<br>
			04125-210 Sao Paulo
		</div>

		<div class="clear"></div>

	</div>


</div>