<?php
/** 
 * Header
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package maggie
 */
global $maggie;

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="line-preloader"></div>
    </div>
    <header class="header-area">
        <div class="crose-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <nav class="classy-navbar justify-content-between" id="croseNav">
                        <a href="<?php echo esc_url(home_url()); ?>" class="nav-brand"><img src="<?php echo get_template_directory_uri(); ?>/img/logo3.png" alt="" /></a>

                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <div class="classy-menu">
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <div class="classynav">
                                <?php
                                    $maggie_menu = wp_nav_menu( array(
                                        'theme_location' => 'mainmenu',
                                        'echo'           => false
                                    ) );
                                    $maggie_menu = str_replace("menu-item-has-children","menu-item-has-children dropdown",$maggie_menu);
                                    echo wp_kses_post($maggie_menu);
                                ?>

                                <div id="header-search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                                <a href="join.html" class="btn crose-btn header-btn">Registration</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="search-form-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="searchForm">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Enter keywords &amp; hit enter..." />
                                    <button type="submit" class="d-none"></button>
                                </form>
                                <div class="close-icon" id="searchCloseIcon">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
