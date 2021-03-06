<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php if (is_singular('projects')) {
      echo "<style>
              body {
                margin-bottom:75px !important;
              }
            </style>"; 
    }?>
    <?php wp_head(); ?>
  </head>
  <body>
  <header <?php if (is_archive('projects') || is_singular('projects') ) { echo 'class="projects"';}?>>
        <?php include 'template-parts/nav-main.php'; ?>
    <?php if (is_archive('projects')) { get_template_part('template-parts/nav', 'sub');} ?>
    <?php if (is_singular('projects')) { get_template_part('template-parts/nav', 'single');} ?>
    

  </header>

  <?php 
    global $post;
    $post_slug=$post->post_name;
?>
<main id="<?php echo $post_slug;?>">