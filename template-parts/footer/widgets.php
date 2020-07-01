<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="container">
		<?php $footer_widg = carbon_get_theme_option('est_footer_widg');
			if ('show' == $footer_widg): ?>
				

			<div class="w3_footer_grids">
				<?php if (is_active_sidebar('footer-1')): ?>
				<div class="col-md-3 w3_footer_grid">
					 <?php dynamic_sidebar( 'footer-1' )?>
				</div>
				<?php endif; 
						if (is_active_sidebar('footer-2')): ?>
				<div class="col-md-3 w3_footer_grid">
					<?php dynamic_sidebar( 'footer-2' )?>
				</div>
				<?php endif; 
					if (is_active_sidebar('footer-3')): ?>
				<div class="col-md-3 w3_footer_grid">
					<?php dynamic_sidebar( 'footer-3' )?>
				</div>
				<?php endif; 
					if (is_active_sidebar('footer-4')): ?>
				<div class="col-md-3 w3_footer_grid">
					<?php dynamic_sidebar( 'footer-4' )?>
				</div>
				<?php endif; ?>
				<div class="clearfix"> </div>
			</div>
		
		</div>
		<?php endif; ?>