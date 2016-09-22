<div class="navbar">
  <ul class="nav navbar-nav">
    <li class="nav-item">
      <?php
$prev_post = get_previous_post();
if (!empty( $prev_post )): ?>
  <a class="btn btn-danger" href="<?php echo $prev_post->guid ?>"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
<?php endif ?>
    </li>
    <li class="nav-item">
            <?php
$next_post = get_next_post();
if (!empty( $next_post )): ?>
  <a class="btn btn-danger" href="<?php echo $next_post->guid ?>"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
<?php endif ?>
    </li>
  </ul>
</div>

