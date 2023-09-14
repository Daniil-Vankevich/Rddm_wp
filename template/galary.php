<?php get_header();

/* Template Name: Галерея*/

?>
<main class="main">
	<!-- Galary Block -->
	<section class="galary">
		<div class="container">
			<h1 class="galary-title"> Галерея </h1>
			<div class="galary-description description-galary">
				Представляем вашему вниманию фотоотчёт из жизни нашей школы
			</div>
			<?php
			$posts = get_posts([
				'numberposts' => -1,
				'category_name' => 'galary_page',
				'orderby' => 'date',
				'order' => 'DESC',
				'post_type' => 'post',
				'suppress_filters' => true,
			]);
			foreach ($posts as $post) {
				setup_postdata($post);
			?>
				<div class="galary__img">
					<?php the_post_thumbnail('img_thumbnail1') ?>
				</div>
			<?php
			}
			wp_reset_postdata();
			?>
		</div>
	</section>
	<!-- End Galary Block -->
</main>

<?php get_footer(); ?>