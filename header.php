<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title> 
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.min.css">
<?php wp_head(); ?>	
</head>
<body>
	<div class="page_wrapper">
		<div class="header-wrapper">
			<header>
				<div class="row">
					<div class="col-12">
						<div class="logo f-left"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name') ?></a></div>
						<div class="tools f-right">
							<ul>
								<li><a href="#" class="search"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#" class="wish"><i class="fa fa-heart-o" aria-hidden="true"></i><span class="tools_num">0</span></a></li>
								<li><a href="<?php bloginfo('url'); ?>/shop/cart" class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="tools_num"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a></li>
							</ul>
						</div>
						<?php wp_nav_menu(array('theme_location' => 'nav_menu')) ?>
						<div class="clear"></div>
					</div>
				</div>
			</header>
		</div>
		<!-- content part-->
		<div class="content">
			<div class="row">
				<div class="main-title-wrap">	
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>

					<?php else: ?>

					<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- content part - end -->		
		