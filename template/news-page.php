<?php get_header();

/* Template Name: Новости*/

?>

<main class="main">
	<!-- Block News-page -->
	<section class="news-page">
		<div class="container">
			<div class="news-page-content">
				<?php
				$posts = get_posts([
					'numberposts' => -1,
					'category_name' => 'news_page',
					'orderby' => 'date',
					'order' => 'DESC',
					'post_type' => 'post',
					'suppress_filters' => true,
				]);
				foreach ($posts as $post) {
					setup_postdata($post);
				?>
					<div class="news-page__item">
						<h1 id="news2" class="news-page__item-title news-page__item-title-center"> <?php the_title() ?> </h1>
						<div class="news-page__item-img">
							<?php the_post_thumbnail('img_thumbnail1') ?>
						</div>
						<div class="news-page__description">
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
	<!-- END Block News-page -->
</main>

<?php get_footer(); ?>