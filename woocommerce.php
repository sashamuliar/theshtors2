
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title> 
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/shop.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.min.css">
<?php wp_head(); ?>	
</head>
<body>
	<div class="test_wrapper" id="test_wrapper">
		<div class="page_wrapper" id="page">
			<div class="container_box">
				<div class="header-wrapper">
					<header>
						<div class="row">
							<div class="col-12 col-sm-12">
								<div class="logo f-left">
									<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name') ?></a>
								</div>
								<div class="hamb f-right" id="hamb">
									<a id="hamburger-icon" class="hamburger-icon" href="#" title="Menu">
									  <span class="line line-1"></span>
									  <span class="line line-2"></span>
									  <span class="line line-3"></span>
									</a>
								</div>
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
						<div class="col-12">
							<div id="mainTitle">
								
							</div>
							<div class="categories">
								<ul id="categories-list">
									
								</ul>
							</div>
						</div>
						<div class="col-2 col-mid-3 f-left">
							<aside>
								<ul>
					  				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : endif; ?>
								</ul>
							</aside>
						</div>	
						<div class="col-10 col-mid-9 f-left">
							<div class="main-title-wrap">
								<?php woocommerce_content(); ?>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				
				<div class="clear"></div>
					<!-- content part - end -->		
				<footer>
					<div class="row">
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<p class="copy">Theshtors Limited Corporation™® All rights reserved. Copyright 2016.</p>
						<?php wp_footer(); ?>
					</div>
				</footer>
			</div>
			<div class="darkness" id="darkness"></div>
			<div class="side_btn">
				<div class="little">
					<a id="arrow-icon" class="arrow-icon" href="#" title="Menu">
						<span class="arrow-line line-1"></span>
						<span class="arrow-line line-2"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="side-mobile">
		<aside>
			<ul>
		  		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : endif; ?>
		  	</ul>
		</aside>
	</div>
	<div class="menu-mobile">
		<?php wp_nav_menu(array('theme_location' => 'nav_menu')) ?>
	</div>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
</body>
</html>		