<?php
  /****************************************************************************
  Theme setup
   ****************************************************************************/
  function wpmu_theme_setup() {

    // translation
    load_theme_textdomain( 'wpmu', get_stylesheet_directory() . '/languages' );
    // post formats
    add_theme_support( 'post_formats' );
    // Post thumbnails or featured images
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
    // RSS feed links to head
    add_theme_support( 'automatic-feed-links' );
    // navigation menu
    register_nav_menus( array(
      'primary' => __( 'Primary Navigation', 'wpmu' )
    ) );
  }
  add_action( 'after_setup_theme', 'wpmu_theme_setup' );


  add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('main-style',get_stylesheet_directory_uri() . '/style.css');
  }, 99);

  // Prevent WP from adding <p> tags on pages
  function disable_wp_auto_p( $content ) {
    if ( is_singular( 'page' ) ) {
      remove_filter( 'the_content', 'wpautop' );
      remove_filter( 'the_excerpt', 'wpautop' );
    }
    return $content;
  }
  add_filter( 'the_content', 'disable_wp_auto_p', 0 );

  function wpbsearchform( $form ) {
 
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </div>
    </form>';
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" class="mainSearch" aria-label="Site Search" aria-hidden="true">
               <div class="form-group">
                 <label for="sitesearch">Site Search</label>
                 <input id="sitesearch" type="search" Title="search" value="' . get_search_query() . '" class="form-control" tabindex="-1">
                 <button type="submit" id="searchsubmit" tabindex="-1" class="d-inline-block d-lg-none" value="'. esc_attr__('Search') .'"><span class="sr-only">Submit Search</span></button>
               </div>
             </form>';
 
    return $form;
}
