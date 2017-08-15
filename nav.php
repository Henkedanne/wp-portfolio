<aside class="sidebar" >
	<nav class="nav-wrapper" role="navigation">
	 		
			<span id="logo"><h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>   </span>
				
			<div id="primary-list">
				<?php wp_nav_menu( array('theme_location' => 'primary_menu')); ?>
			</div>
			<div id="secondary-list">
				<?php wp_nav_menu( array('theme_location' => 'secondary_menu')); ?>
			</div>
	</nav> <!-- .nav-wrapper ends! -->
</aside>