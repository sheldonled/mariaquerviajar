<?php

if (function_exists('register_sidebar'))
{
  register_sidebar(array(  
    'name' => 'Sidebar',  
    'id'   => 'sidebar',  
    'description'   => 'Widgets para a sidebar',  
    'before_widget' => '<section id="%1$s" class="widget %2$s">',  
    'after_widget'  => '</section>',  
    'before_title'  => '<h4>',  
    'after_title'   => '</h4>' 
  ));
}
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );

function get_widget_data($sidebar_id) {
  global $wp_registered_widgets;
	$output = [];
	$widget_ids = wp_get_sidebars_widgets()[$sidebar_id];
	
	if( !$widget_ids ) {
		return [];
	}
	
	foreach( $widget_ids as $id ) {
		$option_name = $wp_registered_widgets[$id]['callback'][0]->option_name;
		$key = $wp_registered_widgets[$id]['params'][0]['number'];
		$widget_data = get_option($option_name);
		
		$output[] = (object) $widget_data[$key];
	}
	
	return $output;
}

?>