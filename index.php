<?php get_header();

/* Template Name: О движении*/

?>

<main class="main">
	<!-- School Move -->
	<section class="move">
		<div class="container">
			<h1 class="move-title-1">Школа 38</h1>
			<h1 class="move-title-2">в движении первых</h1>
			<div class="move__content">
				<div class=" move__item move__first-photo">
					<img src="<?php bloginfo('template_url'); ?> /assets/img/move_photo_firstPage/be move.jpg" alt="about move our school">
				</div>
				<div class=" move__item move__second-photo">
					<img src="<?php bloginfo('template_url'); ?> /assets/img/move_photo_firstPage/letter.jpg" alt="about move our school">
				</div>
			</div>
		</div>
	</section>
	<!-- END School Move -->
	<!-- School news -->
	<section class="news">
		<div class="container">
			<h1 class="title-news"><?= get_category(14, ARRAY_A)['name'] ?></h1>
			<div class="news__content">
				<?php
				$posts = get_posts([
					'numberposts' => 3,
					'category_name' => 'news_rubrika_move-page',
					'orderby' => 'date',
					'order' => 'DESC',
					'post_type' => 'post',
					'suppress_filters' => true,
				]);
				foreach ($posts as $post) {
					setup_postdata($post);
				?>

					<div class="news__items items-news">
						<div class="news__img">
							<?php the_post_thumbnail('img_thumbnail2') ?>
						</div>
						<div class="news-sub-title news-sub-title-first">
							<?php the_title() ?>
						</div>
						<div class="news__description description-news">
							<?php the_content() ?>
						</div>
						<p class="news__more"><a class="news__more-link" href="http://rddm38/новости/#news2">Читать полностью</a></p>
					</div>
				<?php
				}
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
	<!-- END School news -->

	<!-- School projects -->
	<section class="projects">
		<div class="container">
			<h1 class="title-projects"><?= get_category(15, ARRAY_A)['name'] ?></h1>
			<div class="projects__content">
				<?php
				$posts = get_posts([
					'numberposts' => 3,
					'category_name' => 'project-active_rubrika_move-page',
					'orderby' => 'date',
					'order' => 'DESC',
					'post_type' => 'post',
					'suppress_filters' => true,
				]);
				foreach ($posts as $post) {
					setup_postdata($post);
				?>
					<div class="projects__items items-projects">
						<div class="projects__img">
							<?php the_post_thumbnail('img_thumbnail2') ?>
						</div>
						<div class="projects-sub-title projects-sub-title-first">
							<?php the_title() ?>
						</div>
						<div class="projects__description description-projects">
							<?php the_content() ?>
						</div>
						<p class="projects__more"><a class="projects__more-link" href="http://rddm38/проектные-активности/#active1">Читать полностью</a></p>
					</div>
				<?php
				}
				wp_reset_postdata();
				?>

			</div>
		</div>
	</section>
	<!-- END School projects -->
</main>

<?php get_footer(); ?>