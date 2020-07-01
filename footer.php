<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eStore
 */

?>
</div> <!-- content -->


<?php 
		/**
		 * est_footer_parts hook.
		 *
		 * @hooked estore_footer_newsletter - 10
		 * @hooked estore_footer_wrapper_start - 15
		 * @hooked estore_footer_widgets - 20
		 * @hooked estore_footer_copyright - 30
		 * @hooked estore_footer_wrapper_end - 35
	
		 *
	 */
 
	do_action('est_footer_parts'); ?>



<?php wp_footer(); ?>

</body>
</html>
