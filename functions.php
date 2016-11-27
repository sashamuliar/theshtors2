<?php 





/*
menu
*/
register_nav_menus(array(
		'nav_menu' => 'Навігація',
		'sub_menu' => 'Підменю',
	));


/*
widgets
*/
if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<span class="widgettitle">',
    'after_title' => '</span>',
  ));
};



/*
remove parenthes*/
function categories_postcount_filter ($variable) {
   $variable = str_replace('(', '', $variable);
   $variable = str_replace(')', '', $variable);
   return $variable;
}
add_filter('wp_list_categories','categories_postcount_filter');

/*add_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );*/
/*remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
*/
 ?>