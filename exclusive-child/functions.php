<?php

/** since we have a child theme -- WordPress figures it shouldn't load the parent file's. <br />
If you want to load the parent file's stylesheet -- enqueue it.

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_template_directory_uri() . '/slideshow/style.css' );

}
*/

//require_once( get_stylesheet_directory() . '/header.php' );


/** MORE FUNCTIONS BELOW THIS LINE ----------------------------
 * Register an addid widget area.
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
*/
 function exclusive_child_widgets_init() {
	 register_sidebar(array(

            'name' => __('Secondary Widget Area', 'wd_exclusive_child'),
            'id' => 'sidebar-2',
            'description' => __('The secondary widget area', 'wd_exclusive_child'),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}


//Register sidebars by running exclusive_widgets_init() on the widgets_init hook.

add_action('widgets_init', 'exclusive_child_widgets_init'); 
/**
 * more specialized stuff
 *
 */


?>