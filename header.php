<?php
global $houzez_options, $houzez_local;
$houzez_local = houzez_get_localization();
/**
 * @package Houzez
 * @since Houzez 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	
	
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	      <script>
	  //code nako
	  function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}

var global = this;
var min = 0;
var max = 0;
         $(function() {
            $( "#slider-3" ).slider({
               range:true,
               min: 1,
               max: 50000000,
               values: [ 10000, 50000000 ],
               slide: function( event, ui ) {
				   
                  $( "#price" ).val( "₱" + formatNumber(ui.values[ 0 ]) + " - ₱" + formatNumber(ui.values[ 1 ]) );
				  global.min = $( "#slider-3" ).slider( "values", 0 );
				  global.max = $( "#slider-3" ).slider( "values", 1 );
				  //console.clear();
				  console.log(global.min);
				  console.log(global.max);
               }
            });
            $( "#price" ).val( "₱" + $( "#slider-3" ).slider( "values", 0 ) +
               " - ₱" + $("#slider-3" ).slider( "values", 1 ) );
			   
			 
         });
		 
		 
		 
		 
      </script>
</head>


<body <?php body_class(); ?>>
<div id="fb-root"></div>

<?php get_template_part( 'inc/header/login-register-popup' ); ?>
<?php if ( !is_page_template( 'template/template-splash.php' ) ) { ?>

<?php
$houzez_header_style = houzez_option('header_style');
if( empty($houzez_header_style)) {
	$houzez_header_style = '1';
}
get_template_part( 'inc/header/header', $houzez_header_style );?>

<?php
$search_enable = houzez_option('main-search-enable');
$search_position = houzez_option('search_position');
$search_pages = houzez_option('search_pages');

if( houzez_search_needed() ) {
	$adv_search_enable = get_post_meta($post->ID, 'fave_adv_search_enable', true);
	$adv_search = get_post_meta($post->ID, 'fave_adv_search', true);
	$adv_search_pos = get_post_meta($post->ID, 'fave_adv_search_pos', true);
}

if( isset( $_GET['search_pos'] ) ) {
	$search_enable = 1;
	$search_position = $_GET['search_pos'];
}
//put code here for search 

?>
<div id="search_form_louwe" style="font-style: Roboto; font-weight:100; background-color: #004274; color:rgb(149, 149, 149);">
<div class="forflex">
<div class="xmas_update" style="font-family: 'Open Sans', sans-serif;font-weight: bold;
        font-size: 28px;
        color: white;">Find Your Dream Home</div>
<span class="span_louwe" style="color: white; font-size: 1.4em;">Search</span>

<select id="dropdown1_louwe" style="color: black; border-radius: 3px; font-size: 1.1em; padding: 10px">
  <option value="lot-only">Lot</option>
  <option value="condo-for-sale-in-cebu">Condo</option>
  <option value="buy-house">House</option>
  
</select>
<span class="span_louwe" style="color: white; font-size: 1.4em; font-weight: 100">in</span>

  <input type="text" id="inputtext_louwe"  placeholder="location" style="
	font-size: 1.1em;
	padding: 10px;
	border-radius: 5px;
	color: black;
	margin-top: 10px;
	width:350px;
  ">
<!--code was removed here-->
	  
 
 <button id="button_louwe" type="button" onclick="search_louwe()" style="margin-top: 10px; color: black;">Search Property</button>
 </div><!--end div named forflex-->
 </div><!--end of search_form_louwe-->
<script>

function search_louwe(){

var dd = $("#dropdown1_louwe").val();
var keyword = $('#inputtext_louwe').val();
global = this;
	var theUrl = "https://cebubesthomes.com/advanced-search/?keyword="+keyword+"&type="+dd+"&min-price="+global.min+"&max-price="+global.max;
	//var theUrl = "https://cebubesthomes.com";
	
	console.log(theUrl);
	window.location.href = theUrl;
	
	//iredirect ang site to theUrl
	console.log("niwork");
    
}// close fun search_louwe.. 
</script>

<?php
if ( is_page_template( 'template/property-listings-map.php' ) ) { $section_body .= 'houzez-body-half '; }
if( houzez_is_landing_page() ) { $section_body .='landing-page';}
?>

<div id="section-body" class="<?php echo esc_attr( $section_body ); ?>">

	<?php
		get_template_part( 'template-parts/page-headers/page-header' );

		if( houzez_search_needed() ) {
			if ((!empty($adv_search_enable) && $adv_search_enable != 'global')) {
				if ($adv_search_pos == 'under_banner') {
					if ($adv_search == 'show' || $adv_search == 'hide_show') {
						get_template_part('template-parts/advanced-search', 'undermenu');
					}
				}
			} else {
				if (!is_home() && !is_singular('post')) {
					if ($search_enable != 0 && $search_position == 'under_banner') {
						if ($search_pages == 'only_home') {
							if (is_front_page()) {
								get_template_part('template-parts/advanced-search', 'undermenu');
							}
						} elseif ($search_pages == 'all_pages') {
							get_template_part('template-parts/advanced-search', 'undermenu');

						} elseif ($search_pages == 'only_innerpages') {
							if (!is_front_page()) {
								get_template_part('template-parts/advanced-search', 'undermenu');
							}
						}
					}
				}
			}
		}
	?>

	<?php if( houzez_container_needed() ) { ?>
	<div class="container">
	<?php } ?>

<?php } // End splash template if  ?>

<?php
	$disable_compare = houzez_option('disable_compare');
	if( $disable_compare != 0 ) {
		get_template_part('template-parts/compare-panel');
	}
	?>