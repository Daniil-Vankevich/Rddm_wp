<?php get_header();

/* Template Name: Проектные активности*/

?>

<main class="main">
	<!-- Block Projects Active -->
	<section class="projects-active">
		<div class="container">
			<div class="projects-active-content">
				<?php
				$posts = get_posts([
					'numberposts' => -1,
					'category_name' => 'project-active_page',
					'orderby' => 'date',
					'order' => 'DESC',
					'post_type' => 'post',
					'suppress_filters' => true,
				]);
				foreach ($posts as $post) {
					setup_postdata($post);
				?>
					<div class="projects-active__item">
						<h1 id="active1" class="projects-active__item-title"> <?php the_title() ?></h1>
						<div class="projects-active__item-img">
							<?php the_post_thumbnail('img_thumbnail1') ?>
						</div>
						<div class="projects-active__description">
							<?php the_content() ?>
						</div>
						<div class="description__projects-active">
						</div>
					</div>
				<?php
				}
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
	<!-- END Block Projects Active -->
</main>

<?php get_footer(); ?>