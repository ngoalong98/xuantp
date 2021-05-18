<?php
require get_theme_file_path('includes/widget/list-cat-post.php');

/**
 * Register widgets
 *
 * @return void
 * @since 1.0
 */
add_action( 'widgets_init', 'x_register_widgets' );
function x_register_widgets()
{
	register_widget( 'Get_category_post' );
}
