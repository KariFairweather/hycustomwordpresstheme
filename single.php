<?php get_header(); ?>

<article class="single-post">
  <div class="post-feature-img">
    <?php $imgURL = hackeryou_get_thumbnail_url($post);?>
    <img src="<?php echo $imgURL ?>" alt="">
  </div><!-- post-feature-img -->
  <div class="container">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="single-post-header">
              <div class="wrapper">
                <div class="article-header_author">
                  <div class="inner-wrapper">
                    <div class="author-profile-img">
                      <?php echo get_avatar( get_the_author_meta( 'ID' ), 150); ?>
                    </div>
                    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
                      <h5><?php the_author(); ?></h5>
                    </a>
                    <p class="author-role">Contributing Writer</p>
                    <div class="share-post-links">
                      <p class="share">Share:</p>
                      <?php wp_nav_menu( array(
                        'container' => false,
                        'theme_location' => 'share'
                      )); ?>
                    </div><!-- social-post-links -->
                  </div><!-- inner-wrapper -->
                </div><!-- article-header_author -->
                <div class="post-feature-title">
                  <p class="category"><?php the_category(', '); ?></p>
                  <h1 class="entry-title"><?php the_title(); ?></h1>
                  <h6><?php the_subtitle(); ?></h6>
                  <p class="entry-meta"><?php hackeryou_posted_on(); ?></p>
                  <p class="comment-number"><i class="fa fa-comment"></i><?php comments_number( '0','1', '%' ); ?></p>
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
          <div class="author">
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
              <h5><span class"author">By </span><?php the_author(); ?></h5>
            </a>
          </div>
          <div class="share-post-links">
            <span class="share">Share: </span>
            <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'share'
            )); ?>
          </div><!-- social-post-links --> 
          <p class="tags"><span class="tags">Tags:</span><?php the_tags( ' ', ', ',' '); ?></p>
          <p class="comment-number"><i class="fa fa-comment"></i><?php comments_number('Comments (0)', 'Comment (1)', 'Comments %'); ?></p>
          <!-- <div id="nav-below" class="navigation">
          <div id="cooler-nav" class="navigation">
            <?php $prevPost = get_previous_post(true);
            if($prevPost) {?>
            <div class="nav-box previous">
            <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) );?>
            <?php previous_post_link('%link',"$prevthumbnail  <p>%title</p>", TRUE); ?>
            </div>

            <?php } $nextPost = get_next_post(true);
            if($nextPost) { ?>
            <div class="nav-box next" style="float:right;">
            <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100) ); } ?>
            <?php next_post_link('%link',"$nextthumbnail  <p>%title</p>", TRUE); ?>
          </div>
          <?php  ?>
          </div><!--#cooler-nav div -->
            <!-- <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
            <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p> -->
          </div><!-- #nav-below -->
        </footer>

      <?php endwhile; // end of the loop. ?>

  </div> <!-- /.container -->
</article> <!-- /.single-post -->

<?php get_footer(); ?>