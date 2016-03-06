<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
	<div id="featured"> <?php query_posts('posts_per_page=1&cat=37'); ?> <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?><!-- CONTENT GOES HERE --> 
		<div class="post-feature-img">
			<?php $imgURL = hackeryou_get_thumbnail_url($post);?>
			<img src="<?php echo $imgURL ?>" alt="">
		</div><!-- post-feature-img -->
		<div class="overlay">
			<p class="category"><?php the_category(', '); ?></p>
			<h1>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>
			<?php the_excerpt(); ?>
			<p class="comment-number"><i class="fa fa-comment"></i><?php comments_number( '0','1', '%' ); ?></p>
		</div>
		<?php endwhile; ?> <?php wp_reset_query(); ?>
	</div><!--featured--> 
  <div class="container">
   	<section class="feature-posts">
        <h2 class="title">Featured</h2>
        <?php
                $onePageQuery = new WP_Query(
            array(
                    'posts_per_page' => 6,
                    'category_name' => 'featured',
                    'order' => 'ASC'
                    )
            ); ?>

            <?php if ( $onePageQuery->have_posts() ) : ?>

                <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

                    <section id="<?php echo $post->post_name; ?>">
                        <h5><?php the_title(); ?></h5>
                        <?php the_excerpt(); ?>
                        <?php the_post_thumbnail('medium'); ?>
                    </section>
                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php else:  ?>
                [stuff that happens if there aren't any posts]
            <?php endif; ?>
    </section>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>