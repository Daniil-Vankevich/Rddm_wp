<?php get_header();

/* Template Name: Хронология*/

?>

<main class="main">
	<!-- Block сhronology -->
	<section class="сhronology">
		<div class="container">
			<div class="сhronology-content">
				<?php
				$posts = get_posts([
					'numberposts' => -1,
					'categoryname' => 'chronology_posts',
					'orderby' => 'date',
					'order' => 'DESC',
					'post_type' => 'post',
					'suppress_filter' => true,
				]);
				foreach ($posts as $post) {
					setup_postdata($post);
				?>
					<div class="сhronology__item">
						<h1 class="сhronology__item-title"> <?php the_title() ?></h1>
						<div class="news-page__item-img">
							<?php the_post_thumbnail('img_thumbnail1') ?>
						</div>
						<div class="сhronology__description">
							<?php the_content() ?>
						</div>
					</div>
				<?php
				}
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
	<!-- END Block сhronology -->
</main>
<!-- block footer -->
<?php get_footer(); ?>