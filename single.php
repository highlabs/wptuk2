<?php get_header(); ?>
	
	<!-- section -->
	<section role="main" class="row padding">
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('column_8'); ?>>
						<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('post_featured'); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
<!-- post title -->
			<h2 class="text bold color theme">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->
			
			<!-- post details -->
			<h5 class=" margin-bottom">
			<span class="icon tag"> </span><span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author text bold color theme"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			</h5>

			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>
						
			<p class="text normal margin-top"><span class="icon tags"> <?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
						
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			
			<?php comments_template(); ?>
			
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- article -->
		<article>
			
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			
		</article>
		<!-- /article -->
	
	<?php endif; ?>
	<?php get_sidebar(); ?>

	</section>
	<!-- /section -->
	

<?php get_footer(); ?>