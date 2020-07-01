<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="w3l_logo">
<h1>
	<?php	$header_logic = carbon_get_theme_option('est_header_logic');
			if (!is_front_page() && !is_home())  echo '<a href="' .  home_url('/') . '">'; 
			else  echo '<a href="">';  ?>
	<?php 
		if ($header_logic=='yes'):
			$logo_id = carbon_get_theme_option('est_header_logo');
			$logo = $logo_id ? wp_get_attachment_image_src($logo_id, 'full') : '';
		?>
		<img src="<?php echo $logo[0];?>" width="<?php echo $logo[1];?>" height="<?php echo $logo[2];?>" alt="">

	<?php
		elseif ($header_logic=='no'): 
			$site_name = carbon_get_theme_option('est_header_site_name') ? carbon_get_theme_option('est_header_site_name') : get_bloginfo('name');
			$site_desc = carbon_get_theme_option('est_header_site_desc') ? carbon_get_theme_option('est_header_site_desc') : get_bloginfo('description');

			echo  $site_name;
		?>
		<span><?php echo $site_desc?></span>
	<?php

	endif?>

	<?php echo '</a>'; ?>
</h1>
</div>