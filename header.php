<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
			
		<!-- css + javascript -->
		<?php wp_head(); ?>
		<script>
		!function(){
			// configure legacy, retina, touch requirements @ conditionizr.com
			conditionizr()
		}()
		</script>
	</head>
<body <?php body_class(); ?>>	
			<!-- header -->					
			<!-- nav -->
			    <header id="navbar" class="bck color">
			        <div class="row text center">
			            <nav  data-tuktuk="menu" class="column_12 padding text bold">
			                <h2 class="column_3"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
							<?php    
							    $defaults = array(
							    'theme_location'  => 'header-menu',
							    'container'       => 'nav', 
							    'container_class' => 'menu', 
							    'echo'            => false,
							    'fallback_cb'     => false,
							    'items_wrap'      => '%3$s',
							    'depth'           => 0
							    );
							    echo strip_tags(wp_nav_menu( $defaults ), '<nav><a>');
							?>
			            </nav>
			        </div>
			    </header>

			<!-- /header -->