<footer>
  <div class="container">
		<a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
		  <div class="logo">
		    <h1><?php bloginfo( 'name' ); ?></h1> 
		  </div>
		</a>
	  <div class="social-media-links">
	  	<?php wp_nav_menu( array(
	  	  'container' => false,
	  	  'theme_location' => 'social'
	  	)); ?>
	  </div><!-- social-media-links -->
	  <div class="footer-menu">
	      <?php wp_nav_menu( array(
	        'container' => false,
	        'theme_location' => 'footer'
	      )); ?>
	  </div>
	    <p>&copy; Kari Fairweather <?php echo date('Y'); ?></p>
	  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>