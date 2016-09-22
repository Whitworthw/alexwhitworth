<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<section class="container page-content">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 offset-md-3">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php get_footer(); ?>