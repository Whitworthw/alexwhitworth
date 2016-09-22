<?php
$categories = get_categories( array(
    'orderby' => 'name',
    'parent'  => 0
) );
 ?>
<div class="container">
	<div class="row">
		<div class="col-xs-8">
 <?php
foreach ( $categories as $category ) {?>
			<a href="<?php echo esc_url( get_category_link( $category->term_id ) );?>" class="btn btn-primary btn-xl display-4"><?php echo esc_html( $category->name ); ?> Portfolio</a><br>
 
<?php }

?>
		</div>
	</div>
</div>