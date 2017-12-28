<?php get_header(); ?>

	<div id="content">

		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) :

				if ( is_home() ) {
					get_template_part( 'parts/content', 'post-filter-bar' );
				}

				while ( have_posts() ) : the_post(); ?>

				<?php

				if ( is_home() ) {
					get_template_part( 'parts/loop', 'archive-grid' );
				} else {
					get_template_part( 'parts/loop', 'front-page' );
				}
				
				?>

			<?php endwhile;

			if ( is_home() ) {
				start_page_navi();
				get_template_part( 'parts/content', 'post-filter-bar' );
			}

			endif; ?>

		</main> <!-- end #main -->

	</div> <!-- end #content -->

<?php get_footer(); ?>