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
    <?php $onePageQuery = new WP_Query(
    array(
        'posts_per_page' => 3,
        'category_name' => 'featured',
        'order' => 'ASC'
        )
    ); ?>
    <section class="feature-posts">
        <div class="container">
            <h2 class="title">Featured</h2>
            <?php if ( $onePageQuery->have_posts() ) : ?>
            <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
            <article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post-img">
                    <?php $imgURL = hackeryou_get_thumbnail_url($post);?>
                    <img src="<?php echo $imgURL ?>" alt="">
                </div>     
                <div class="inner-wrapper">
                    <p class="category"><?php the_category(', '); ?></p>
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                      <?php the_title(); ?></a>
                    </h2>
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </div><!-- inner-wrapper -->
            </article><!-- #post-## -->
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else:  ?>
                    [stuff that happens if there aren't any posts]
                    <?php endif; ?>
        </div> <!-- /.container -->
    </section>
</div><!-- main -->

<?php get_footer(); ?>