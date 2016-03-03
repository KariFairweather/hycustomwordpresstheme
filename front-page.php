<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">
	<div id="featured"> <?php query_posts('posts_per_page=1&cat=37'); ?> <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?><!-- CONTENT GOES HERE --> 
		<?php the_post_thumbnail('large')?>
		<div class="overlay">
			<p class="content-tag"><?php the_tags('Tags: ', ', ', '<br>'); ?><?php the_category(', '); ?></p>
			<h1>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>
			<p><?php the_excerpt(); ?></p>
			<p class="comment-number"><i class="fa fa-comment"></i><?php comments_number( '0','1', '%' ); ?></p>
		</div>
		<?php endwhile; ?> <?php wp_reset_query(); ?>
	</div><!--featured--> 
    <div class="content">
    	<?php get_template_part( 'loop', 'index' );	?> 
    </div> <!--/.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>