<?php /* Template Name: lms template */ 
wp_head();
?>
<div id="landing-page" style="background-color: black; 
/*height: 100vh;*/
color: white;">
<h2>Sample Title</h2>

<div id="landing-content">
<?php
/*
if (have_posts()):
  while (have_posts()) : the_post();
    the_content();
  endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;*/
?>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam enim urna, sollicitudin eu nisl feugiat, posuere finibus eros. Sed est diam, pellentesque quis suscipit non, pretium quis metus. Praesent mattis tristique orci. In mollis, dolor ac aliquam sollicitudin, leo ipsum bibendum nisi, vitae mattis mauris nunc at neque. Nam mollis ut lectus sit amet pellentesque. Vivamus a nulla at libero volutpat volutpat eget a nibh. In varius imperdiet bibendum. Curabitur vestibulum luctus finibus. Aliquam mattis mi sit amet mollis fringilla. Curabitur vel porttitor nisi. Mauris commodo gravida blandit. Nam viverra interdum nisl, ac laoreet enim. Nunc et felis porttitor, imperdiet arcu quis, pharetra leo. Nunc at felis et augue efficitur efficitur.
</p>

<div class="fixme" style="background-color: red;">Scroll here - sample div to menu</div>

<p>
In porttitor at ante vel elementum. Nulla maximus facilisis augue, eget ornare libero. Donec in odio turpis. Maecenas sed quam a erat ultrices malesuada. Fusce dignissim enim neque, a egestas nisi molestie vel. Morbi sit amet accumsan nisl. Suspendisse mattis vitae ante ac condimentum. Mauris auctor cursus lectus vel sollicitudin. Nam a sem id urna facilisis ultrices. Nunc arcu neque, pretium vel arcu non, consectetur eleifend justo. Praesent accumsan cursus vestibulum. Curabitur maximus bibendum odio sed ultricies. Donec quis velit eu velit ullamcorper porttitor pharetra mollis nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam molestie, metus ut pellentesque consequat, ipsum risus semper neque, eu gravida massa sapien eget erat.
</p>

<p>
Duis dictum, felis id imperdiet molestie, dui erat consectetur sem, tempor lacinia tortor dolor quis metus. Sed dignissim sollicitudin risus, sit amet lacinia sem eleifend sed. Vivamus enim odio, bibendum sed dignissim ut, imperdiet in turpis. Nam consectetur bibendum velit, non tempus leo. Etiam at eros quis tortor lobortis dapibus. Nullam varius nisl nibh, non varius purus efficitur sed. Praesent odio eros, laoreet a sapien ac, efficitur tempus leo. Quisque elementum pulvinar arcu, et eleifend massa accumsan commodo. In luctus dui sapien, in aliquam sem interdum eu. Curabitur at quam non dolor faucibus posuere at efficitur libero. Vivamus lectus justo, tincidunt ac fermentum in, sodales at arcu. Nullam nec ex sit amet erat vehicula sollicitudin. Vivamus ac ante leo. Curabitur elementum sapien nibh, ut luctus lacus semper sed. Nam id ante varius, auctor orci et, placerat magna. Morbi consectetur augue nec scelerisque ultrices.
</p>

<p>
Proin gravida urna vitae pulvinar convallis. Maecenas egestas dictum cursus. Curabitur bibendum leo nec nibh rhoncus, ac dapibus est vulputate. Cras laoreet felis ac scelerisque aliquam. Quisque hendrerit neque vel ipsum pulvinar vehicula. Mauris et nisi nec nisl malesuada finibus a sit amet nunc. Sed dolor lacus, eleifend in condimentum eu, tristique a augue.
</p>


<p>
Vivamus maximus suscipit ultrices. Sed laoreet, augue sit amet ornare euismod, tellus sem placerat erat, vel laoreet leo enim ut mauris. Nunc ut arcu non nibh rutrum blandit. Nam sed sagittis lacus. Phasellus sollicitudin nisl eu dictum tincidunt. Fusce varius sapien eu leo pellentesque lobortis. Aenean eu pellentesque elit. Nullam a dolor vitae magna suscipit ullamcorper.
</p>

</div>





<form style="background-color: black; color: white;" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="P7CET8KFMUFGC">
<table>
<tr><td><input type="hidden" name="on0" value="Choose a Real Estate Training"><span style="color: white;">Choose a Real Estate Training</span></td></tr><tr><td><select name="os0">
	<option value="Basic Real Estate Training">Basic Real Estate Training P500.00 PHP</option>
	<option value="Guide on Investing in Real Estate">Guide on Investing in Real Estate P500.00 PHP</option>
	<option value="Selling Real Estate Strategies">Selling Real Estate Strategies P500.00 PHP</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="PHP">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<a href="https://cebubesthomes.com">Back to main site</a>

<hr />
<div id="footer_landing">
 Sample footer
</div>
</div>

<?php
wp_footer();
?>