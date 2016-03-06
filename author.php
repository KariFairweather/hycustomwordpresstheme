<?php get_header(); ?>

<div class="main">
    <div class="author-wrapper">
      <div class="inner-wrapper"><div class="author-img">
          <?php echo get_avatar( get_the_author_meta('user_email'), 150); ?>
        </div><!-- author-img -->
        <div class="author-info" id="author-info">
          <h1><?php the_author(); ?></h1>
          <p class="author-title">
            Contributing Author
          </p>
          <div id="author-description">
            <?php the_author_meta('description'); ?>
          </div>
            <div class="more">
              <a href="#" id="more"><i class="fa fa-ellipsis-h"></i></a>
            </div>
        </div><!-- author-info -->
        <div class="author-social">
          <p>Connect with <?php the_author(); ?></p>
          <nav>
              <?php wp_nav_menu( array(
                'container' => false,
                'theme_location' => 'author'
              )); ?>
          </nav>
        </div><!-- author-social --></div>
    </div><!-- wrapper -->
  <div class="container">
      <?php
        /* Queue the first post, that way we know who
         * the author is when we try to get their name,
         * URL, description, avatar, etc.
         */
        if ( have_posts() )
          the_post();
      ?>


      <?php
        // If a user has filled out their description, show a bio on their entries.
        if ( get_the_author_meta('description') ) : ?>

        <?php endif; ?>
        <section class="author-posts">
      	<?php
      		rewind_posts();
      		get_template_part('loop', 'author');
      	?>
        </section>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>