<?php
remove_action( 'widgets_init', 'twentythirteen_widgets_init' );
function grayconstruction_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area', 'twentythirteen' ),
		'id'            => 'sidebar-main',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'twentythirteen' ),
		'before_widget' => '<div class="sidebar"><div id="%1$s" class="widget sidebar_item %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'grayconstruction_widgets_init' );