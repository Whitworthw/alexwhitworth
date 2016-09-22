      <nav id="sub-navbar-bottom" class="navbar navbar-light bg-faded hidden-sm-up">
  <div class="container">
      <ul class="nav navbar-nav">
  <li class="nav-item to-top">
    <!-- all your content here -->
 
  <a href="#0" class="cd-top btn btn-danger">Top</a>
 
  <!-- link to scripts here -->

  </li>

  <li class="nav-item pull-xs-right">
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
    <li class="nav-item pull-xs-right">
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