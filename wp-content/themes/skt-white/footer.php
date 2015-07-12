<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT White
 */
?>

<?php if( is_home() || is_front_page() ) { ?>
<section style="background-color:#ffffff;">
            	<div class="container"><h2><?php echo of_get_option('socialtitle',__('Ne gasesti si pe:','skt-white')) ; ?></h2>
                		
                        <div class="social-icons">
                            <h2 class="social-icons-h3">Irina:</h2>
                    <?php if( of_get_option('skype',true) !=  ''){ ?>
                        <a href="#" title="irina.magdici"><div class="skype icon"></div></a>
                    <?php } ?>        

                	<?php if( of_get_option('facebook',true) !=  ''){ ?>
                		<a target="_blank"  href="<?php echo esc_url(of_get_option('facebook','https://www.facebook.com/irina.magdici')); ?>"><div class="facebook icon"></div></a>
                    <?php } ?>
                    <!--<?php if( of_get_option('twitter',true) != '') { ?>
                        <a href="<?php echo esc_url(of_get_option('twitter','#')); ?>"><div class="twitt icon"></div></a>
                    <?php } ?>
                    <?php if( of_get_option('gplus',true) != ''){ ?>
                        <a href="<?php echo esc_url(of_get_option('gplus','#')); ?>"><div class="gplus icon"></div></a>
                   	<?php } ?>-->
                    <?php if( of_get_option('linkedin',true) != ''){ ?>
                    	<a target="_blank"  href="<?php echo esc_url(of_get_option('linkedin','https://ro.linkedin.com/in/irinamagdici')); ?>"><div class="linked icon"></div></a>
                    <?php } ?>
                   <!-- <?php if( of_get_option('pint',true) != ''){ ?>
                    	<a href="<?php echo esc_url(of_get_option('pint','#')); ?>"><div class="pinterest icon"></div></a>
                    <?php } ?>
                    <?php if( of_get_option('youtube',true) != ''){ ?>
                    	<a href="<?php echo esc_url(of_get_option('youtube','#')); ?>"><div class="youtube icon"></div></a>
                    <?php } ?>
                    <?php if( of_get_option('vimeo',true) != ''){ ?>
                    	<a href="<?php echo esc_url(of_get_option('vimeo','#')); ?>"><div class="vimeo icon"></div></a>
                    <?php } ?>
                    <?php if( of_get_option('rss',true) != ''){ ?>
                    	<a href="<?php echo esc_url(of_get_option('rss','#')); ?>"><div class="rss icon"></div></a>
                    <?php } ?>
                    <?php if( of_get_option('insta',true) != ''){ ?>
                    	<a href="<?php echo esc_url(of_get_option('insta','#')); ?>"><div class="instagram icon"></div></a>
                    <?php } ?>-->
                    </div><!-- social-icons -->
                    
                        <div class="social-icons">
                            <h2 class="social-icons-h3">Silviu:</h2>
                     <?php if( of_get_option('skype',true) !=  ''){ ?>
                        <a href="#" title="silviu.odobescu"><div class="skype icon"></div></a>
                    <?php } ?>  
                    <?php if( of_get_option('facebook',true) !=  ''){ ?>
                        <a  target="_blank" href="<?php echo esc_url(of_get_option('facebook','https://www.facebook.com/silviu.odobescu')); ?>"><div class="facebook icon"></div></a>
                    <?php } ?>
                    <?php if( of_get_option('twitter',true) != '') { ?>
                        <a  target="_blank" href="<?php echo esc_url(of_get_option('twitter','https://twitter.com/silviuodobescu')); ?>"><div class="twitt icon"></div></a>
                    <?php } ?>
                    <!--<?php if( of_get_option('gplus',true) != ''){ ?>
                        <a href="<?php echo esc_url(of_get_option('gplus','#')); ?>"><div class="gplus icon"></div></a>
                    <?php } ?>-->
                    <?php if( of_get_option('linkedin',true) != ''){ ?>
                        <a target="_blank" href="<?php echo esc_url(of_get_option('linkedin','https://ro.linkedin.com/in/silviuodobescu')); ?>"><div class="linked icon"></div></a>
                    <?php } ?>
                    <!--<?php if( of_get_option('pint',true) != ''){ ?>
                        <a href="<?php echo esc_url(of_get_option('pint','#')); ?>"><div class="pinterest icon"></div></a>
                    <?php } ?>
                    <?php if( of_get_option('youtube',true) != ''){ ?>
                        <a href="<?php echo esc_url(of_get_option('youtube','#')); ?>"><div class="youtube icon"></div></a>
                    <?php } ?>
                    <?php if( of_get_option('vimeo',true) != ''){ ?>
                        <a href="<?php echo esc_url(of_get_option('vimeo','#')); ?>"><div class="vimeo icon"></div></a>
                    <?php } ?>
                    <?php if( of_get_option('rss',true) != ''){ ?>
                        <a href="<?php echo esc_url(of_get_option('rss','#')); ?>"><div class="rss icon"></div></a>
                    <?php } ?>
                    <?php if( of_get_option('insta',true) != ''){ ?>
                        <a href="<?php echo esc_url(of_get_option('insta','#')); ?>"><div class="instagram icon"></div></a>
                    <?php } ?>-->
                    </div><!-- social-icons -->
                </div><!-- container --> 
</section>
<?php } ?>
 <div id="footer-wrapper">
    	<footer class="footer">
        	<div class="footer-col-1">
            	<h2><?php  echo of_get_option('footerabttitle',__('Despre Star Trek','skt-white')); ?></h2>
                <p><?php echo of_get_option('footerabttext',__('<p>Star Trek este un univers imaginar de factură <b>Science-Fiction</b> creat de Gene Roddenberry la mijlocul anilor 60.</p><br/><p>A devenit cunoscut și îndrăgit de toată lumea, prin personaje celebre ca Spock, Capitanul Kirk sau Capitanul Jean-Luc Picard.</p>','skt-white')); ?></p>
            </div>
             
            <div class="footer-col-1">
                <h2><?php  echo of_get_option('footerabttitle',__('Universul Star Trek','skt-white')); ?></h2>
                <p><?php echo of_get_option('footerabttext',__('Universul creat de Roddenberry descrie un viitor optimist în care omenirea, după ce a supraviețuit cu greu unui al treilea război mondial și după ce a descoperit zborul supraluminic, s-a unit cu alte specii de ființe raționale din Galaxie pentru a forma Federația Unită a Planetelor. ','skt-white')); ?></p>
          
            	<!--<h2><?php echo of_get_option('recenttitle',__('Recent Posts','skt-white')); ?></h2>
                <ul class="recent-post">
                	<?php $query =  new wp_query(array('posts_per_page'   => 2)); ?>
                    <?php  while( $query->have_posts() ) : $query->the_post(); ?>
                  	<li><a href="<?php esc_url(the_permalink()); ?>"><?php get_the_post_thumbnail( get_the_ID(), array(67,49) ); ?><?php the_excerpt(); ?><br />
                    <span><?php _e('Read more...','skt-white'); ?></span></a></li>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </ul>-->
            </div>

            
            <div class="footer-col-3">
            	<h2><?php echo of_get_option('addresstitle',__('RSVP','skt-white')); ?></h2>
                <p><?php echo of_get_option('address',__('Va rugam sa ne comunicati prezenta dumneavoastra pana in data de <b>16 Septembrie 2015</b>. Multumim frumos!','skt-white')) ; ?></p>
                <div class="phone-no">
                	<?php if( of_get_option('phone',true) != ''){ ?>
                		<p><strong><?php _e('Telefon - Silviu:','skt-white'); ?></strong><a href="tel:+40751427728"><?php  echo of_get_option('phone','+40751427728'); ?></a></p>
                   	<?php } ?>
                    <?php if( of_get_option('email',true) != '' ) { ?>
                    	<p><strong><?php _e('E-mail - Silviu:','skt-white'); ?></strong><a href="mailto:<?php echo sanitize_email(of_get_option('email','silviu.odobescu@gmail.com')); ?>"><?php echo of_get_option('email','silviu.odobescu@gmail.com'); ?></a></p>
                    <?php } ?>
                    <?php if( of_get_option('phone',true) != ''){ ?>
                        <p><strong><?php _e('Telefon - Irina:','skt-white'); ?></strong><a href="tel:+40745827789"><?php  echo of_get_option('phone','+40745827789'); ?></a></p>
                    <?php } ?>
                    <?php if( of_get_option('email',true) != '' ) { ?>
                        <p><strong><?php _e('E-mail - Irina:','skt-white'); ?></strong><a href="mailto:<?php echo sanitize_email(of_get_option('email','magdici.irina@gmail.com')); ?>"><?php echo of_get_option('email','magdici.irina@gmail.com'); ?></a></p>
                    <?php } ?>
                    
                </div>
            </div>
            <div class="clear"></div>
        </footer>
        
        <div class="copyright-wrapper">
        	<div class="copyright">
            	<div class="copyright-txt"><?php echo of_get_option('copytext',__('&copy; 2015 Irina Magdici & Silviu Odobescu','skt-white')); ?></div>
                <div class="design-by"><?php echo of_get_option('ftlink',__('Va asteptam!','skt-white')); ?></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
  
<?php wp_footer(); ?>

</body>
</html>