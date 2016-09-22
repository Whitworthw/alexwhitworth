
<?php 
wp_nav_menu( array(
    'menu'            => 'Main Menu',
    'container'       => 'nav',
    'container_class' => 'nav__container',
    'items_wrap'      => '
                          <div class="nav_bg">
                          <ul class="nav__bar container">
                            <li class="nav__item nav__logo">
                              <a href="/">
                                WAW
                              </a>
                            </li>
                            <!-- Mobile Menu Button -->
                            <li class="nav__item nav__navicon nav__mobile-button">
                              <a href="#">
                                <i class="fa fa-bars"></i>
                              </a>
                            </li>
                            %3$s
                          </ul>
                          </div>
    ',
    'walker'          => new My_Walker_Nav_Menu()
    ) );
?>