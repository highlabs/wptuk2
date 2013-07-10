<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
	
	<!-- section -->
	<section role="main" class="padding bck">
		
		<?php get_template_part('loop'); ?>
	</section>

		<?php get_template_part('pagination'); ?>
	
	<!-- /section -->
<?php get_footer(); ?>