<?php get_header(); ?>
<div class="main-search">
	<section class="heading">
		<div class="search-results">
			<h1 class="results">Results for:</h1> 
			<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
				<input type="search" placeholder="<?php echo get_search_query(); ?>" name="s" id="s" >
			</form>
		</div><!-- search-results -->
	</section>
	<div class="container">

		<div class="content">
			<?php if ( have_posts() ) : ?>

				<?php get_template_part( 'loop', 'search' ); ?>

			<?php else : ?>

				<h2>Nothing Found</h2>
				<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
				<?php get_search_form(); ?>

			<?php endif; ?>
		</div> <!-- /.content -->

	</div><!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
