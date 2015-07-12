<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package SKT White
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( (of_get_option('innerpageslider', true) != 'hide') || is_home() || is_front_page() ) { ?>
	<div class="slider-main">
    <?php $slide_title = '<h1>>>> NE CASATORIM <<<</h1><hr/><br/><h2>SILVIU  SI  IRINA</h2><br/><h3><span class=grey>Casatoria Religioasa:</span> Sambata, 3 octombrie 2015, orele 17:00 <br/> la Catedrala Romano-Catolica din Iasi "Sfanta Maria Regina"</h3><br/><h3><span class=grey>Petrecerea:</span> Restaurant IDEO Pacurari, incepand cu orele 20:00</h3>'; ?>
            <div class="top-bar">
                <?php echo of_get_option( 'header_title', $slide_title ); ?>
            </div><!-- top-bar -->
            <a href="<?php echo esc_url(get_site_url().'/#services'); ?>" class="arrow-down"></a>
    <div id="slider" class="nivoSlider">
       <?php

			$default_images = array(
				1 => array(
					'slide_image' => get_template_directory_uri()."/images/slides/slider1.jpg",
				),
				2 => array(
					'slide_image' => get_template_directory_uri()."/images/slides/slider6.jpg",
				),
				3 => array(
					'slide_image' => get_template_directory_uri()."/images/slides/slider4.jpg",
				),
                4 => array(
                    'slide_image' => get_template_directory_uri()."/images/slides/slider7.jpg",
                )
			); 
			for ($i=1; $i<5; $i++) {
				if( of_get_option('slide'.$i,true) != '') { 
				?>
                	<img src="<?php echo of_get_option('slide'.$i,$default_images[$i]['slide_image']); ?>"  />
				<?php }
			}
               ?>
    </div><!-- slider -->
    </div><!-- slider-main -->
<?php } ?>

<div class="header">
            		<div class="header-inner">
                    		<div class="logo">
                            		<a href="<?php echo esc_url( home_url('/')); ?>">
                                    	<?php if( of_get_option( 'logo', true ) != '' ) { ; ?>
                                        	<?php if( of_get_option('logo',true) == 1 ) { ?>
                                            	<h1 style="font-family: 'roddenberrybold_italic',verdana;"><?php bloginfo('name'); ?></h1>
                                            <?php } else { ?>
 	                                       <img src="<?php echo esc_url( of_get_option( 'logo', true )); ?>" / >
                                        <?php } } else { ?>
    	                                    <h1  style="font-family: 'roddenberrybold_italic',verdana;"><?php bloginfo('name'); ?></h1>
                                        <?php } ?>
                                        <!-- <p><?php bloginfo('description'); ?></p> -->
                                    </a>
                             </div><!-- logo -->
                            <div class="toggle">
                            <a class="toggleMenu" href="#"><?php _e('Menu','skt-white'); ?></a>
                            </div><!-- toggle -->
                            <div class="nav">
								<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
                            </div><!-- nav --><div class="clear"></div>
                    </div><!-- header-inner -->
            </div><!-- header -->
      <div class="main-container">
         <?php if( function_exists('is_woocommerce') && is_woocommerce() ) { ?>
		 	<div class="content-area">
                <div class="middle-align content_sidebar">
                	<div id="sitemain" class="site-main">
         <?php } ?>