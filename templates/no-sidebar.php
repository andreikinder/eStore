<?php
/**
 *Template Name: Полная ширина
  
  
  
 */ 

 
get_header();
?>
	<div class="container single">
		<main id="primary" class="site-main">
			<div class="w3ls_mobiles_grids">
				<div class="col-md-12 w3ls_mobiles_grid_left">
				<?php
					while ( have_posts() ) : the_post(); 
						if (is_order_received_page()	): ?>
					<div class="row">
						<div class="col-md-5 col-md-offset-3"> 
				<?php endif; ?>
			
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header><!-- .entry-header -->

						<?php estore_post_thumbnail(); ?>

						<div class="entry-content">
							<?php the_content();						?>
						</div><!-- .entry-content -->

		 
					</article><!-- #post-<?php the_ID(); ?> -->
				<?php
					endwhile; // End of the loop.

					if (is_order_received_page()): ?>
						 </div>
						 </div>
					<?php endif;  
				?>

				
				</div><!-- /.col-md-12 -->
			</main><!-- #main -->
 
			<div class="clearfix"> </div>
		</div> 

	</div>


<?php

get_footer();
