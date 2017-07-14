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
            	<div class="container"><h2>Ne gasesti si pe:</h2>
                		
                        <div class="social-icons">
                            <h2 class="social-icons-h3">Irina:</h2>
                    
                        <a href="#" title="irina.magdici"><div class="skype icon"></div></a>
                      

                	
                		<a target="_blank"  href="https://www.facebook.com/irina.magdici"><div class="facebook icon"></div></a>
                    
                    <!--<?php if( of_get_option('twitter',true) != '') { ?>
                        <a href="<?php echo esc_url(of_get_option('twitter','#')); ?>"><div class="twitt icon"></div></a>
                    <?php } ?>
                    <?php if( of_get_option('gplus',true) != ''){ ?>
                        <a href="<?php echo esc_url(of_get_option('gplus','#')); ?>"><div class="gplus icon"></div></a>
                   	<?php } ?>-->
                    
                    	<a target="_blank"  href="https://ro.linkedin.com/in/irinamagdici"><div class="linked icon"></div></a>
          
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
                    
                        <a href="#" title="silviu.odobescu"><div class="skype icon"></div></a>
                 
                    
                        <a  target="_blank" href="https://www.facebook.com/silviu.odobescu"><div class="facebook icon"></div></a>
                    
                        <a  target="_blank" href="https://twitter.com/silviuodobescu"><div class="twitt icon"></div></a>
                   
                    <!--<?php if( of_get_option('gplus',true) != ''){ ?>
                        <a href="<?php echo esc_url(of_get_option('gplus','#')); ?>"><div class="gplus icon"></div></a>
                    <?php } ?>-->
                   
                        <a target="_blank" href="https://ro.linkedin.com/in/silviuodobescu"><div class="linked icon"></div></a>
            
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
            	<h2>Despre Star Trek</h2>
                <p>Star Trek este un univers imaginar de factură <b>Science-Fiction</b> creat de Gene Roddenberry la mijlocul anilor 60.</p><br/><p>A devenit cunoscut și îndrăgit de toată lumea, prin personaje celebre ca Spock, Capitanul Kirk sau Capitanul Jean-Luc Picard.</p>
            </div>
             
            <div class="footer-col-1">
                <h2>Universul Star Trek</h2>
                <p>Universul creat de Roddenberry descrie un viitor optimist în care omenirea, după ce a supraviețuit cu greu unui al treilea război mondial și după ce a descoperit zborul supraluminic, s-a unit cu alte specii de ființe raționale din Galaxie pentru a forma Federația Unită a Planetelor.</p>
          
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
            	<h2>RSVP</h2>
                <p>Va rugam sa ne comunicati prezenta dumneavoastra pana in data de <b>16 Septembrie 2015</b>. Multumim frumos!</p>
                <div class="phone-no">
                	
                		<p><strong><?php _e('Telefon - Silviu:','skt-white'); ?></strong><a href="tel:+40751427728">+40751427728</a></p>
                   
                    	<p><strong><?php _e('E-mail - Silviu:','skt-white'); ?></strong><a href="mailto:silviu.odobescu@gmail.com">silviu.odobescu@gmail.com</a></p>
                   
                        <p><strong><?php _e('Telefon - Irina:','skt-white'); ?></strong><a href="tel:+40745827789">+40745827789</a></p>
                    
                        <p><strong><?php _e('E-mail - Irina:','skt-white'); ?></strong><a href="mailto:magdici.irina@gmail.com">magdici.irina@gmail.com</a></p>
                    
                    
                </div>
            </div>
            <div class="clear"></div>
        </footer>
        
        <div class="copyright-wrapper">
        	<div class="copyright">
            	<div class="copyright-txt">&copy; 2015 Irina Magdici & Silviu Odobescu</div>
                <div class="design-by">Va asteptam!</div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
  
<?php wp_footer(); ?>

</body>
</html>