<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>
	<article id="post-0" class="post error404 not-found">
		<h2 class="entry-title">Not Found</h2>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->
<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="wrapper">
			<div class="post-img">
				<?php $imgURL = hackeryou_get_thumbnail_url($post);?>
				<img src="<?php echo $imgURL ?>" alt="">
			</div>
			<div class="inner-wrapper">
				<header class="post-header">
					<p class="category"><?php the_category(', '); ?></p>
					<h2 class="entry-title">
			       		<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
			          <?php the_title(); ?></a>
					</h2>
				</header>
				<main class="post-excerpt">
					<?php the_excerpt(); ?>
					<?php wp_link_pages( array(
						  'before' => '<div class="page-link"> Pages:',
						  'after' => '</div>'
					)); ?>	
				</main><!-- .entry-content -->
				<footer class="footer-post">
					<p class="comment-number">
						<i class="fa fa-comment"></i>
						<?php comments_number( '0','1', '%' ); ?>
					</p>
				</footer>
			</div>
		</div>
	</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
