<?php
$categories = get_categories( array(
    'orderby' => 'name',
    'parent'  => 0,
    'exclude' => 14
) );
 ?>
<nav id="sub-navbar" class="navbar navbar-light bg-faded">
	<div class="container">
			<ul class="nav navbar-nav">
				<li class="nav-item active">
					<span class="nav-link">Filter:</span>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo get_post_type_archive_link( 'projects' ); ?>">All</a>
				</li>
 <?php
foreach ( $categories as $category ) {?>

	<li class="nav-item">
		<a class="nav-link" href="<?php echo esc_url( get_category_link( $category->term_id ) );?>"><?php echo esc_html( $category->name ); ?></a>
	</li>
 
<?php }

?>
			</ul>
	</div>
</nav>
