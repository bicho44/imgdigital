<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package IMG Digital v1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- AI -->
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding container">
            <?php
            /* @TODO Definir la opción del Logo Posiblemente algún check previo */
            if (get_option('imgd_logo')!="") {
                $logo = "<img src='".get_option('imgd_logo')."' alt='".bloginfo( 'name' )."'>";
            } else { ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="site-description hidden-xs"><?php bloginfo( 'description' ); ?></h2>
            <?php } ?>
		</div><!-- end site-branding -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php if (!isset($logo)){ ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                <?php } else {
                    echo $logo;
                } ?>
            </div>
            <?php
            wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
            <!-- /.navbar-collapse -->
        </nav>
        </div><!-- end container navbar -->
	</header><!-- #masthead -->
    <?php if(!is_front_page()){?>
        <div id="content" class="site-content container">
    <?php } ?>