<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php 
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
			$thumb_url = $thumb_url_array[0];
?>
<!-- Banner -->
<div id="single-jumbo" class="jumbotron jumbotron-fluid" style="
background: url('<?php echo (types_render_field( 'project-banner-image', array('output' => 'raw') )); ?>') no-repeat center center; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
">
	<div class="container">
		<h1 class="display-3"><?php the_title(); ?></h1><br>

		<?php 
			$terms = get_the_terms( $post->ID, 'demonstrated-ability' );

			if ( $terms && ! is_wp_error( $terms ) ) :

		   $abilities = array();

		   foreach ( $terms as $term ) {
		      $abilities[] = $term->name;
		   }

		   $abilities = join( ", ", $abilities );

		   ?>

		   <p class="lead"><span><?php echo $abilities; ?></span></p>

		<?php endif; ?>

	</div>
</div>
<!-- Content -->
<div class="container portfolio-container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col">
			<img src="<?php echo(types_render_field( 'project-preview-image', array('output' => 'raw') )); ?>" width="100%">
		</div>
		<div class="col-xs-12 col-sm-6 col">
			<h2 class="display-4"><?php echo(types_render_field( 'project-title', array('output' => 'raw') )); ?></h2>
			<p class="lead"><?php echo(types_render_field( 'project-description', array('output' => 'raw') )); ?>
			</p>
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php
// Portfolio images are set up as a child post type. This displays the posts.
$child_posts = types_child_posts("project-image");
foreach ($child_posts as $child_post) {
  $image_label 	= $child_post->fields['project-image-label'];
  $image_url 	= $child_post->fields['project-image'];?>
	<div id="<?php echo $child_post->post_name;?>" class="single-portfolio__image">
		<div class="container content-container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<p class="lead project-label"><?php echo $image_label; ?></p>
				</div>
				<div class="col-xs-12 col-sm-6">
					<img src="<?php echo esc_url($image_url); ?>" width="100%">
				</div>
			</div>
		</div>
	</div>
<?php }?>

<?php endwhile; ?>

<?php get_footer(); ?>