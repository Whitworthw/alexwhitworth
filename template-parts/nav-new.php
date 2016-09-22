
<?php 
wp_nav_menu( array(
    'menu'            => 'Header Menu',
    'container'       => 'nav',
    'container_class' => 'nav__container',
    'items_wrap'      => '
                          <div class="nav_bg">
                          <ul class="nav__bar container">
                            <li class="nav__item nav__logo">
                              <a href="/">
                                <img src="http://www.logoicstudios.com/wp-content/uploads/2015/01/logo-white.png" class="nav__logo-img"><span>Logoic </span>
                              </a>
                            </li>
                            <!-- Mobile Menu Button -->
                            <li class="nav__item nav__navicon nav__mobile-button">
                              <a href="#">
                                <i class="fa fa-bars"></i>
                              </a>
                            </li>
                            <!-- Phone -->
                            <li class="nav__item nav__phone nav__mobile-button">
                              <a href="tel:+14843805550">
                                <i class="fa fa-phone"></i>
                                <span class="nav__phone-number">484.380.5550</span>
                              </a>
                            </li>
                            %3$s
                          </ul>
                          </div>
    '
    ) );
?>