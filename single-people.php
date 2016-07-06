<?php get_header(); ?>
<div class="row sidebar_bg radius10" id="page">
	<div class="large-9 large-push-3 columns wrapper radius-left offset-topgutter">	
		<main class="content">
			<?php
				if (has_term('faculty', 'role') == true ) {
					locate_template('parts-faculty.php', true, false); } else {
					locate_template('parts-jobmarket.php', true, false); } 
			 ?>	
		</main>
	</div>	<!-- End main content (left) section -->
<?php locate_template('parts-sidebar-nav.php', true, false); ?>
</div> <!-- End #landing -->
<?php get_footer(); ?>