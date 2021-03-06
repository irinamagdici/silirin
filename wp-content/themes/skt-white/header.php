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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65450016-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-58LSLV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-58LSLV');</script>
<!-- End Google Tag Manager -->

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
