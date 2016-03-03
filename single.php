<?php get_header(); ?>

<article class="single-post">
  <div class="container">
    <div class="post-feature-img">
      <?php the_post_thumbnail('large')?>
    </div>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="single-post-header">
              <div class="wrapper">
                <div class="article-header_author">
                  <div class="inner-wrapper">
                    <div class="author-profile-img">
                      <?php echo get_avatar( get_the_author_meta( 'ID' ), 200); ?>
                    </div>
                    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><h5><?php the_author(); ?></h5></a>
                    <p class="author-role">Contributing Writer</p>
                  </div><!-- inner-wrapper -->
                </div><!-- article-header_author -->
                <div class="post-feature-title">
                  <p class="category"><?php the_category(', '); ?></p>
                  <h1 class="entry-title"><?php the_title(); ?></h1>
                  <p class="entry-meta"><?php hackeryou_posted_on(); ?></p>
                  <p class="comment-number"><i class="fa fa-comment"></i><?php comments_number( '0','1', '%' ); ?></p>
                  <p class="tags"><?php the_tags('Tags: ', ', ', '<br>'); ?></p>
                </div>
              </div><!-- wrapper -->
          </header><!-- single-post-header  -->
          
          <main class="content">
              <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages(array(
                  'before' => '<div class="page-link"> Pages: ',
                  'after' => '</div>'
                )); ?>
              </div><!-- .entry-content -->
              <!-- <div class="entry-utility">
                <?php hackeryou_posted_in(); ?>
                <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
              </div> --><!-- .entry-utility -->
          </main><!-- content -->
        </div><!-- #post-## -->

        <footer class="single-post-footer">
          <p class="tags"><?php the_tags('Tags: ', ', ', '<br>'); ?></p>
          <div id="nav-below" class="navigation">
            <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
            <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
          </div><!-- #nav-below -->
          <?php comments_template( '', true ); ?>
        </footer>

      <?php endwhile; // end of the loop. ?>

  </div> <!-- /.container -->
</article> <!-- /.single-post -->

<?php get_footer(); ?>