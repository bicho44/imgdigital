<?php
/**
 * The Template for displaying all single posts.
 *
 * @package IMG Digital v1
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main col-md-8" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php imgdigital_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

        <?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>