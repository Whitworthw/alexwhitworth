<?php 
/**
 * Proper way to enqueue scripts and styles.
 */
function alex_scripts() {
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
wp_enqueue_style( 'fontawesome', get_template_directory_uri() . 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
wp_enqueue_script( 'tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'plugins.js', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'alex_scripts' );

// Hide menu registration
function register_alex_menus() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_alex_menus' );


/**
 * Add a parent CSS class for nav menu items.
 *
 * @param array  $items The menu items, sorted by each menu item's menu order.
 * @return array (maybe) modified parent CSS class.
 */
function wpdocs_add_menu_parent_class( $items ) {
    $parents = array();
 
    // Collect menu items with parents.
    foreach ( $items as $item ) {
        if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
            $parents[] = $item->menu_item_parent;
        }
    }
 
    // Add class.
    foreach ( $items as $item ) {
        if ( in_array( $item->ID, $parents ) ) {
            $item->classes[] = 'nav__drop';
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'wpdocs_add_menu_parent_class' );
// Add Classes
add_filter('nav_menu_css_class' , 'my_nav_special_class' , 10 , 2);
function my_nav_special_class($classes, $item){
  if ($item->menu_item_parent == 0) {
    $classes[] = 'nav__item nav__menu-item nav__mobile';
  }


    return $classes;
}
// Change Adds nav Drop-Down to the Sub menu UL
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"nav__drop-down\">\n";
  }
}

// Hide admin bar.
show_admin_bar( false );

// From PHP Docs
function print_r2($val){
        echo '<pre>';
        print_r($val);
        echo  '</pre>';
}

add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82492544-1', 'auto');
  ga('send', 'pageview');

</script>
<?php } 

?>
