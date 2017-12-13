<?php

function bst_widgets_init() {

  /*
  Sidebar Desktop (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Sidebar Desktop', 'bst-child' ),
    'id'              => 'sidebar-desktop-widget-area',
    'description'     => __( 'The sidebar desktop widget area', 'bst-child' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h3>',
    'after_title'     => '</h3>',
  ) );

  /*
  Sidebar Mobile (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Sidebar Mobile', 'bst-child' ),
    'id'              => 'sidebar-mobile-widget-area',
    'description'     => __( 'The sidebar mobile widget area', 'bst-child' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h3>',
    'after_title'     => '</h3>',
  ) );

  /*
  Footer (three widget areas)
   */
  register_sidebar( array(
    'name'            => __( 'Footer', 'bst' ),
    'id'              => 'footer-widget-area',
    'description'     => __( 'The footer widget area', 'bst' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm-4">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

}
add_action( 'widgets_init', 'bst_widgets_init' );
