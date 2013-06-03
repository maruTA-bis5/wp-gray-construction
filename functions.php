<?php

function grayconstruction_setup() {
	add_theme_support( 'post-thumbnail' );
	set_post_thumbnail_size( 150, 150 );
}
add_action( 'after_setup_theme', 'grayconstruction_setup' );

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

function grayconstruction_entry_date( $echo = true ) {
  $date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark">%3$s</a></span>',
    esc_url( get_permalink() ),
    esc_attr( sprintf( 'Permalink to %s', the_title_attribute( 'echo=0' ) ) ),
    esc_html( sprintf( '%1$s', get_the_date() ) )
	);

	if ( $echo )
		echo $date;

	return $date;
}
