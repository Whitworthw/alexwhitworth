<?php get_header(); ?>
<div id="portfolio" class="clearfix">

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		//

	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];

?>
	<div class="col-xs-12 col-sm-6 col-md-4 portfolio__item" style="
background: url('<?php echo esc_url($thumb_url)?>') no-repeat center center; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
">

		<div class="portfolio__meta">
			<div class="container">
				<div class="col-xs-12 portfolio__column">
					<h3><?php the_title();?></h3> <br>
					<a href="<?php the_permalink(); ?>" class="btn btn-danger" title="<?php the_title_attribute(); ?>">View 
										<?php
						$cats = get_the_terms($post->ID,'project-type');
						$cat_name = $cats[0]->name;
						echo $cat_name;
					?>	</a>
				</div>
			</div>
		</div>
	</div>

<?php
	} // end while
} // end if

?>
	<div class="col-xs-12 col-md-4 portfolio__item portfolio__item end-block">
		<div class="container">
			<div class="col-xs-12 fin">
				<h3 class="display-4">Fin.</h3>
				<p class="lead">
				At least for now. I'm always working on new projects, so be sure to check back soon!
				</p>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>