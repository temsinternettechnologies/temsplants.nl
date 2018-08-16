<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package E-commerce Shop
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','e-commerce-shop'); ?></a></div>


<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="top-contact col-md-3 col-xs-12 col-sm-4">
        <?php if( get_theme_mod( 'bb_ecommerce_store_contact','' ) != '') { ?>
          <span class="call"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('bb_ecommerce_store_contact',__('(518) 356-5373','e-commerce-shop') )); ?></span>
         <?php } ?>
      </div>
      <div class="top-contact col-md-3 col-xs-12 col-sm-4">
        <?php if( get_theme_mod( 'bb_ecommerce_store_email','' ) != '') { ?>
          <span class="email"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('bb_ecommerce_store_email',__('support@123.com','e-commerce-shop')) ); ?></span>
        <?php } ?>
      </div>
      <div class="social-media col-md-6 col-sm-4 col-xs-12">
        <?php if( get_theme_mod( 'bb_ecommerce_store_youtube_url','' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'bb_ecommerce_store_youtube_url','' ) ); ?>"><i class="fab fa-youtube" aria-hidden="true"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'bb_ecommerce_store_facebook_url','' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'bb_ecommerce_store_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'bb_ecommerce_store_twitter_url','' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'bb_ecommerce_store_twitter_url','' ) ); ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'bb_ecommerce_store_rss_url','' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'bb_ecommerce_store_rss_url','' ) ); ?>"><i class="fas fa-rss" aria-hidden="true"></i></a>
        <?php } ?>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="logo">
          <?php bb_ecommerce_store_the_custom_logo(); ?>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

          <?php
          $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) : ?>
              <p class="site-description"><?php echo esc_html( $description ); ?></p>
          <?php endif; ?>
        </div>
  	    <div class="clearfix"></div>
      </div>
      <div class="side_search col-md-6 col-sm-6">
        <div class="responsive_search">
        </div>
        <div class="search_form">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="nav">
		<div class="container">
      <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
		</div>
  </div><!-- nav -->
  <div class="clear"></div>
</div><!-- aligner -->