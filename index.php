<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">
    
	<div id="featured"> <?php query_posts('cat=37'); ?> <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?><!-- CONTENT GOES HERE --> 
		<?php endwhile; ?> <?php wp_reset_query(); ?>

	</div><!--featured--> 

    <div class="content">
    	<?php get_template_part( 'loop', 'index' );	?> 
    </div> <!--/.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>