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
                <div class="col-md-6 col-sm-6" >
                    <div class="footer-col">
                        <div class="navi">
	                        <div><?php
							// Pages Menu
							/*
							if ( has_nav_menu( 'footer-menu' ) ) :
								wp_nav_menu( array (
									'theme_location' => 'footer-menu',
									'container' => '',
									'container_class' => '',
									'menu_class' => '',
									'menu_id' => 'footer-menu',
									'depth' => 1
								));
								
							endif;*/
							//echo 'hello!';
							?></div>
							
							<div>
							<table>
							<tr >
							<td class="footer_louwe"><a href="https://cebubesthomes.com/find-an-agent">Find an Agent</a></td>
							<td class="footer_louwe"><a href="https://cebubesthomes.com/join-us">Join Us</a></td>
							<td class="footer_louwe"><a href="https://cebubesthomes.com/sell-your-properties">Sell your Properties</a></td>
							</tr>
							</table>
							<table>
							<tr>
							<td class="td_louwe"><ul style="color: white; text-decoration: underline;">
							<li><a href="https://cebubesthomes.com/property-type/buy-house/" style="text-decoration: underline;">House and Lot for Sale in Cebu</a></li><br />
							<li><a href="https://cebubesthomes.com/property-type/condo-for-sale-in-cebu
" style="text-decoration: underline;">Condo for Sale in Cebu</a>
</li><br />
							<li><a href="https://cebubesthomes.com/property-type/lot-only/
" style="text-decoration: underline;">Lot for Sale in Cebu
</a></li><br />
							
							</ul></td>
							<td class="td_louwe"><ul style="color: white; text-decoration: underline;">
							
							<li><a href="https://cebubesthomes.com/property-type/condo-rental/
" style="text-decoration: underline;">Condo for Rent in Cebu
</a></li><br />
							<li><a href="https://cebubesthomes.com/property-type/apartment-for-rent/
" style="text-decoration: underline;">Apartment for rent 
</a></li><br />
							<li><a href="https://cebubesthomes.com/property-type/house-for-rent
" style="text-decoration: underline;">House for rent 
</a></li><br />
							</ul></td>
							</tr>
							</table></div>
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

<!--para ni siya sa page count-->
<div id="page_counter" >
<?php /*

	$db_host = 'mysql.cebubesthomes.com'; // Server Name
$db_user = 'cebubesthomesdre'; // Username
$db_pass = 'jy-bVdKP'; // Password
$db_name = 'cebubesthomes_dream_pres'; // Database Name
	
	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	
	
	
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

//get existing value 
$sql ='select counter_value from pageviews where id = 1';
$query = mysqli_query($conn, $sql);

$value; //stores existing val
while ($row = mysqli_fetch_array($query))
		{
			 $value=  $row['counter_value'] +1; //increment existing to one 

			
		}
		


//update
$sql ='Update pageviews set counter_value='.$value.' where id=1';
$query = mysqli_query($conn, $sql);


//display
$sql ='select counter_value from pageviews where id = 1';
$query = mysqli_query($conn, $sql);

$value_final;
while ($row = mysqli_fetch_array($query))
		{
			 $value_final=  $row['counter_value'];//get value

			
		}
		


     
echo"Page Views: ".$value_final;

*/

 echo 'Total Site Views: '. do_shortcode("[srs_total_visitors]");
 
 
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-beta.2/lazyload.js"></script>
<script>
  
   

jQuery( document ).ready(function() {

  jQuery("img").addClass("lazyload");
  lazyload();
  console.log("naabot ni nga part");
   
});// end of document.ready


</script>


<!--my code-->
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk1')); </script>
<script>
FB.CustomerChat.show(shouldShowDialog: boolean);
</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="524338137706898"
  theme_color="#0084ff"
  logged_in_greeting="Welcome to Cebubesthomes! How may we help you find your dream home?"
  logged_out_greeting="Welcome to Cebubesthomes! How may we help you find your dream home?">
</div>

<!--end ni-->


<script>
//moswitch ni sa 'similar props' og 'contacts' 
jQuery(document).ready(function() { 
    if (jQuery(window).width() <=600 ) {
		jQuery( ".property-similer" ).insertAfter( ".widget-contact-agent" );
	    console.log("chuchuness");
	}// close if window width..
	
	});
</script>

<script>
//tig remove sa space before sa li 
jQuery("#features > ul > li:nth-child(2) > a > i").remove();//remove sa extra nga space before living room
jQuery("#features > ul > li:nth-child(3) > a > i").remove();
jQuery("#features > ul > li:nth-child(1) > a > i").remove();

jQuery("p.sub-heading").remove();

</script>
</body>
</html>