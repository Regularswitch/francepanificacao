<?php get_header(); ?>
<?php include_once('page_components/menu.php'); ?>
	<style>
	    .button1 a {
	       text-decoration: none;
	       color: #313131;
	    }
	    .button1 a:hover {
	       color: #fff;
	    }
	</style>
	<div class="wrapper single">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php
			$postID = get_the_ID();
			$categories = get_the_category($postID);
			$category = '';
			if(!empty($categories)) {
				$category = strtolower($categories[0]->name);
			}

			$image_gallery     = get_gallery($postID);
			$post_categories   = wp_get_post_categories($postID);
			$label 			   = get_post_meta($postID,'label', true);
			$label_quality     = get_post_meta($postID,'label_qualite', true);
			$valeurEnergetique = get_post_meta($postID,'valeur_energetique', true);
			$matiereGrasse 	   = get_post_meta($postID,'matiere_grasse', true);
			$glucides 		   = get_post_meta($postID,'glucides', true);
			$proteines 		   = get_post_meta($postID,'proteines', true);
			$sel 			   = get_post_meta($postID,'sel', true);
			$w 				   = get_post_meta($postID,'w', true);
			$pl 		       = get_post_meta($postID,'pl', true);

//			$associatedProducts = get_post_meta($postID,'associated_products', true);
			$metas    		    = get_post_meta($postID);
			$associatedProducts = unserialize($metas['associated_products'][0]);
		?>

				<div class="single__slider">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php
								foreach ($image_gallery as $image) {
									$url = $image->sizes->full->url;
									$alt = get_the_title().' | France Panificação | ';

									echo '<div class="swiper-slide"><img src="'.$url.'" class="swiper-lazy" alt="'.$alt.'" /></div>';
								}
							?>

						</div>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>

					</div>
				</div>

				<div class="single__infos">
					<h2><?= mb_strtoupper(get_the_title()); ?></h2>

					<?php
					if($label_quality != '') {
						echo '<h6>';

						foreach( $label_quality as $key => $label_name ) {
							echo ucfirst($label_name);
							if($key < count($label_quality ) - 1) {
								echo ' / ';
							}
						}
						echo '</h6>';
					}
					?>

					<div class="contentText"><?= the_content(); ?></div>

					<div class="single__table <?= $category ?> <?= ($category == strtolower('farinhas francesas') || $category == strtolower('FRENCH FLOURS')) ? '' : 'hidden' ?>">
						<table>
							<th colspan="2"><h6 class="bold"><?= mb_strtoupper(__('Pour 100g', 'francepan')); ?></h6></th>
							<tr >
								<td><?= __('Energia', 'francepan'); ?></td>
								<td><?= $valeurEnergetique ?></td>
							</tr>
							<tr>
								<td><?= __('Gorduras totais', 'francepan'); ?></td>
								<td><?= $matiereGrasse ?></td>
							</tr>
							<tr>
								<td><?= __('Ácidos graxos saturados', 'francepan'); ?></td>
								<td><?= $glucides ?></td>
							</tr>
							<tr>
								<td><?= __('Açúcar', 'francepan'); ?></td>
								<td><?= $proteines ?></td>
							</tr>
							<tr>
								<td><?= __('Sal', 'francepan'); ?></td>
								<td><?= $sel ?></td>
							</tr>
							<tr <?= $w == '' ? 'class="hidden"' : '' ?>>
								<td><?= __('W', 'francepan'); ?></td>
								<td><?= $w ?></td>
							</tr>
							<tr <?= $pl == '' ? 'class="hidden"' : '' ?>>
								<td><?= __('P/L', 'francepan'); ?></td>
								<td><?= $pl ?></td>
							</tr>
						</table>
					</div>

					<div class="button1"><a href="mailto:contato@francepanificacao.com.br"><?= mb_strtoupper(__('Solicite um orçamento', 'francepan')); ?></a></div>
				</div>

				<div class="clear"></div>


		<?php endwhile; ?>
	<?php endif; ?>


	</div>

	<?php
//		$categoryID = get_cat_ID($postID);
//		$args = array(
//			'posts_per_page'   => 3,
//			'cat'			   => $categoryID,
//			'orderby'          => 'date',
//			'order'            => 'DESC',
//			'post_status'      => 'publish',
//			'suppress_filters' => true
//		);
//		$otherPosts = get_posts( $args );
	?>
	<?php if(isset($associatedProducts) && $associatedProducts != '' ) { ?>
	<div class="single__others">
		<h2 class="firstline"><?= mb_strtoupper(__('Outros Produtos', 'francepan')); ?></h2>
		<?php

			foreach($associatedProducts as $otherPostID) {
				$otherPost = get_post($otherPostID);
				$label = get_post_meta($otherPostID,'label', true);
				$label_quality = get_post_meta($otherPostID,'label_qualite', true);

//				if($otherPostID != $postID) {


				?>
				<div class="single__others_item">
					<a href="<?= get_permalink($otherPostID); ?>">
						<div class="single__others_itemtitle">
							<h3><?= mb_strtoupper(get_the_title($otherPostID)); ?></h3>

							<?php
//							if($label_quality != '') {
//								echo '<h3 class="regular">';
//
//								foreach( $label_quality as $key => $label_name ) {
//									echo ucfirst($label_name);
//									if($key < count($label_quality ) - 1) {
//										echo ' / ';
//									}
//								}
//								echo '</h3>';
//							}
							?>
						</div>
					</a>
					<a href="<?= get_permalink($otherPostID); ?>">
<!--						<img class="single__others_item_gradient" src="/assets/img/icons/gradient-up.png" alt="">-->
						<img width="400" height="250" src="<?= get_image_url($otherPostID, 'full'); ?>" alt="">
						<div class="item_title">
							<img class="category__image_bagatelle <?= $label_quality[0] == 'Bagatelle' ? 'show' : '' ?>" src="<?= get_template_directory_uri(); ?>/assets/img/logos/logo-bagatelle.png" alt="">
						</div>
					</a>
				</div>

				<?php
//				}
			}


		?>
		<div class="clear"></div>
	</div>
	<?php } ?>
<?php include_once('page_components/popup.php'); ?>
<?php include_once('page_components/footer.php'); ?>
<?php get_footer(); ?>