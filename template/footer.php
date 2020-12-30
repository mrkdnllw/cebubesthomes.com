<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content.
 *
 * @package Houzez
 * @since Houzez 1.0
 */
$copy_rights = houzez_option('copy_rights');
global $houzez_local;
?>

<?php if ( houzez_is_footer() ) { ?>

    <?php if( houzez_container_needed() ) { ?>
    </div> <!--.container Start in header-->
    <?php } ?>
</div> <!--Start in header end #section-body-->

<?php get_template_part('template-parts/scroll-to-top'); ?>

<!--start footer section-->
<footer id="footer-section">
    
    <?php get_template_part('template-parts/footer'); ?>

    <div class="footer-bottom">

    	<div class="container">
            <div class="row">
                <?php if( !empty($copy_rights) ) { ?>
                <div class="col-md-3 col-sm-3">
                    <div class="footer-col">
                        <p><?php echo ( $copy_rights ); ?></p>
                    </div>
                </div>
                <?php } ?>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-col">
                        <div class="navi">
	                        <?php
							// Pages Menu
							if ( has_nav_menu( 'footer-menu' ) ) :
								wp_nav_menu( array (
									'theme_location' => 'footer-menu',
									'container' => '',
									'container_class' => '',
									'menu_class' => '',
									'menu_id' => 'footer-menu',
									'depth' => 1
								));
								
							endif;
							//echo 'hello!';
							?>
						</div>

                    </div>
                </div>
                <?php if( houzez_option('social-footer') != '0' ) {
                 if( houzez_option('fs-facebook') != '' || houzez_option('fs-twitter') != '' || houzez_option('fs-linkedin') != '' || houzez_option('fs-googleplus') != '' || houzez_option('fs-instagram') != '' || houzez_option('fs-pinterest') != '' ) { ?>
                <div class="col-md-3 col-sm-3">
                    <div class="footer-col foot-social" >
                        <p style="margin-top: -10px;">
                            <?php //echo $houzez_local['follow_us']; ?>
							<?php echo 'FOLLOW US'?>
                           
                            <?php if( houzez_option('fs-facebook') != '' ){ ?>
					        	<a target="_blank" href="<?php echo esc_url(houzez_option('fs-facebook')); ?>" style="font-size: 30px;"><i class="fa fa-facebook-square"  ></i></a>
					        <?php } ?>

					        <?php if( houzez_option('fs-twitter') != '' ){ ?>
					            <a target="_blank" href="<?php echo esc_url(houzez_option('fs-twitter')); ?>"><i class="fa fa-twitter-square"></i></a>
					        <?php } ?>

					        <?php if( houzez_option('fs-linkedin') != '' ){ ?>
					            <a target="_blank" href="<?php echo esc_url(houzez_option('fs-linkedin')); ?>"><i class="fa fa-linkedin-square"></i></a>
					        <?php } ?>

					        <?php if( houzez_option('fs-googleplus') != '' ){ ?>
					            <a target="_blank" href="<?php echo esc_url(houzez_option('fs-googleplus')); ?>"><i class="fa fa-google-plus-square"></i></a>
					        <?php } ?>

					        <?php if( houzez_option('fs-instagram') != '' ){ ?>
					            <a target="_blank" href="<?php echo esc_url(houzez_option('fs-instagram')); ?>" style="font-size: 30px;"><i class="fa fa-instagram" ></i></a>
					        <?php } ?>

					        <?php if( houzez_option('fs-pinterest') != '' ){ ?>
					            <a target="_blank" href="<?php echo esc_url(houzez_option('fs-pinterest')); ?>"><i class="fa fa-pinterest"></i></a>
					        <?php } ?>

					        <?php if( houzez_option('fs-yelp') != '' ){ ?>
                                <a target="_blank" href="<?php echo esc_url(houzez_option('fs-yelp')); ?>"><i class="fa fa-yelp"></i></a>
                            <?php } ?>
                            <?php if( houzez_option('fs-youtube') != '' ){ ?>
                                <a target="_blank" href="<?php echo esc_url(houzez_option('fs-youtube')); ?>" style="font-size: 30px;" ><i class="fa fa-youtube" ></i></a>
                            <?php } ?>
                        </p>
                    </div>
                </div>
                <?php }
                } ?>

            </div>
        </div>

    </div><!-- End footer bottom -->

</footer>
<!--end footer section-->
<?php } else { // End splash template if ?>
    </div> <!--Start in header end #section-body-->
<?php } ?>

<?php wp_footer(); ?>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="524338137706898">
</div>
</body>
</html>