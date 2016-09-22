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
				<li class="nav-item active hidden-xs-down">
					<span class="nav-link project__label-meta-2">
						<?php echo the_title();?>
					</span>
				</li>
			
				<li class="nav-item nav-label">
					<span class="project__label-meta nav-link"><span class="hidden-sm-up"><?php echo the_title();?></span></span>
				</li>
	<li class="nav-item pull-xs-right hidden-xs-down">
      <?php
$prev_post = get_previous_post();

if (!empty( $prev_post )): ?>
  <a class="btn btn-danger" href="<?php echo get_permalink( $prev_post->ID ); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i></a> 
<?php endif ?>
<?php
if (empty( $prev_post )): ?>
  <a class="btn btn-danger disabled" href="<?php echo get_permalink( $prev_post->ID ); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i></a> 
<?php endif ?>
</li>

	<li class="nav-item pull-xs-right hidden-xs-down">
<?php
$next_post = get_next_post();
if (!empty( $next_post )): ?>
  <a class="btn btn-danger" href="<?php echo get_permalink( $next_post->ID ); ?>"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
<?php endif ?>
<?php if (empty( $next_post )): ?>
  <a class="btn btn-danger disabled" href="<?php echo get_permalink( $next_post->ID ); ?>"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
<?php endif ?>
	</li>
			</ul>
	</div>
</nav>

