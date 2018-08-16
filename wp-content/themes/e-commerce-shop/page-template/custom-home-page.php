<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<?php /** slider section **/ ?>
				<?php
				// Get pages set in the customizer (if any)
				$pages = array();
				for ( $count = 1; $count <= 5; $count++ ) {
				$mod = intval( get_theme_mod( 'bb_ecommerce_store_slidersettings-page-' . $count ));
				if ( 'page-none-selected' != $mod ) {
				  $pages[] = $mod;
				}
				}
				if( !empty($pages) ) :
				  $args = array(
				    'posts_per_page' => 5,
				    'post_type' => 'page',
				    'post__in' => $pages,
				    'orderby' => 'post__in'
				  );
				  $query = new WP_Query( $args );
				  if ( $query->have_posts() ) :
				    $count = 1;
				    ?>
					<div class="slider-main">
				    	<div id="slider" class="nivoSlider">
					      <?php
					        $bb_ecommerce_store_n = 0;
							while ( $query->have_posts() ) : $query->the_post();
							  
							  $bb_ecommerce_store_n++;
							  $bb_ecommerce_store_slideno[] = $bb_ecommerce_store_n;
							  $bb_ecommerce_store_slidetitle[] = get_the_title();
							  $bb_ecommerce_store_slidelink[] = esc_url(get_permalink());
							  ?>
							    <img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $bb_ecommerce_store_n ); ?>" />
							  <?php
							$count++;
							endwhile;
					      ?>
					    </div>

					    <?php
					    $bb_ecommerce_store_k = 0;
				      	foreach( $bb_ecommerce_store_slideno as $bb_ecommerce_store_sln )
				      	{ ?>
					      <div id="slidecaption<?php echo esc_attr( $bb_ecommerce_store_sln ); ?>" class="nivo-html-caption">
					        <div class="slide-cap  ">
					          <div class="container">
					            <h2><?php echo esc_html($bb_ecommerce_store_slidetitle[$bb_ecommerce_store_k] ); ?></h2>
					            <a class="read-more" href="<?php echo esc_url($bb_ecommerce_store_slidelink[$bb_ecommerce_store_k] ); ?>"><?php esc_html_e( 'Learn More','e-commerce-shop' ); ?></a>
					          </div>
					        </div>
					      </div>
					        <?php $bb_ecommerce_store_k++;				    	
					    } ?>
					</div>
				    <?php else : ?>
				      <div class="header-no-slider"></div>
				    <?php
				  endif;
				endif;
			?>

			<?php do_action( 'bb_ecommerce_store_after_slider' ); ?>

			<section id="our-products">
			    <div class="text-center innerlightbox">
			        <?php if( get_theme_mod('bb_ecommerce_store_sec1_title') != ''){ ?>     
			            <h3><?php echo esc_html(get_theme_mod('bb_ecommerce_store_sec1_title',__('New Products','e-commerce-shop'))); ?></h3>
			        <?php }?>
			    </div>
				<?php $pages = array();
				for ( $count = 0; $count <= 0; $count++ ) {
					$mod = intval( get_theme_mod( 'bb_ecommerce_store_servicesettings-page-' . $count ));
					if ( 'page-none-selected' != $mod ) {
					  $pages[] = $mod;
					}
				}
				if( !empty($pages) ) :
				  $args = array(
				    'post_type' => 'page',
				    'post__in' => $pages,
				    'orderby' => 'post__in'
				  );
				  $query = new WP_Query( $args );
				  if ( $query->have_posts() ) :
				    $count = 0;
						while ( $query->have_posts() ) : $query->the_post(); ?>
						    <div class="row box-image text-center">
						        <p><?php the_content(); ?></p>
						        <div class="clearfix"></div>
						    </div>
						<?php $count++; endwhile; ?>
				  <?php else : ?>
				      <div class="no-postfound"></div>
				  <?php endif;
				endif;
				wp_reset_postdata();?>
			    <div class="clearfix"></div> 
			</section>
			<?php do_action( 'bb_ecommerce_store_after_productsec' ); ?>

			<section id="shop-now">
			    <div class="shopimage">
				    <?php if( get_theme_mod( 'ecommerce_shop_image')  != '') { ?>
			          	<img  src="<?php echo esc_url( get_theme_mod('ecommerce_shop_image',get_template_directory_uri().'/images/gift.jpg') ); ?>" alt="shop image">
			        <?php } ?>
			        <div class="shomain">
			        <?php if( get_theme_mod('ecommerce_shop_title') != ''){ ?>     
			            <h3><?php echo esc_html(get_theme_mod('ecommerce_shop_title',__('GIFTS FOR KIDS BIRTHDAY','e-commerce-shop'))); ?></h3>
			        <?php }?>
			        <?php if( get_theme_mod('ecommerce_shop_linkname') != ''){ ?>     
			        <a href="<?php echo esc_url(get_theme_mod('ecommerce_shop_link','#')); ?>"><p class="testparabt"><?php echo esc_html(get_theme_mod('ecommerce_shop_linkname',__('SHOP NOW','e-commerce-shop'))); ?></p></a>
				    </div>
				    <?php }?>
			    </div>
			</section>
		</div>
		<div class="col-md-3 static-sidebar">
			<div class="cathead"><i class="fas fa-bars"></i><span><?php echo esc_html('ALL CATEGORIES') ?></span></div>
			<div class="sidepro">
				<?php dynamic_sidebar('static-sidebar');?>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>

<?php get_footer(); ?>