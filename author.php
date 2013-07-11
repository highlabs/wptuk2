<?php get_header(); ?>
	<!-- bio -->

	<!-- /bio -->
	<!-- section -->
	<section role="main" class="row">
	
	<div id="sobre" class="row bck avatar_about">
	        <?php
		        $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
		    ?>
            <div class="column_3 padding">
                <?php echo get_avatar($curauth->ID, 250); ?>
            </div>
            <div class="column_9 padding">
                <h1 class="text bold color theme "><?php echo $curauth->user_nicename; ?></h1>
                <h5 class="text normal italic"><?php echo $curauth->nickname; ?></h5>
                <h6 class="text justify margin-bottom"><?php echo $curauth->user_description; ?></h6>
                <span class="icon laptop"></span> <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a>
            </div>
    </div>
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
	</section>

		<?php get_template_part('pagination'); ?>
	
<?php get_footer(); ?>