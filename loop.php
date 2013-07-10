<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row loop">
            <div class="column_5 margin-bottom margin-left">

                 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('featured', array('class' => 'responsive')); ?></a>
            </div>
            <div class="column_7 color  margin-bottom post">
	            <h1 class="loop_title text bold color theme"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
	            <h5 class="meta margin-bottom"><span class="icon calendar"></span> - <?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?> - <?php _e( 'Autor', 'html5blank' ); ?> <?php the_author_posts_link(); ?></h5>
                <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
            </div>
        </div>		
<!-- 		<?php edit_post_link(); ?> -->

		</div>
	</article>
	<!-- /article -->
	
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>