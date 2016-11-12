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
   $variable = str_replace('(', '<span class="post_count"> ', $variable);
   $variable = str_replace(')', ' </span>', $variable);
   return $variable;
}
add_filter('wp_list_categories','categories_postcount_filter');



 ?>