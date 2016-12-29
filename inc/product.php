<?php
// Register Custom Post Type
function custom_post_type_brite_product() {

  $labels = array(
    'name'                  => _x( 'Brite Products', 'Brite Product General Name', 'brite' ),
    'singular_name'         => _x( 'Brite Product', 'Brite Product Singular Name', 'brite' ),
    'menu_name'             => __( 'Brite Product', 'brite' ),
    'name_admin_bar'        => __( 'Brite Product', 'brite' ),
    'archives'              => __( 'Item Archives', 'brite' ),
    'attributes'            => __( 'Item Attributes', 'brite' ),
    'parent_item_colon'     => __( 'Parent Item:', 'brite' ),
    'all_items'             => __( 'All Items', 'brite' ),
    'add_new_item'          => __( 'Add New Item', 'brite' ),
    'add_new'               => __( 'Add New', 'brite' ),
    'new_item'              => __( 'New Item', 'brite' ),
    'edit_item'             => __( 'Edit Item', 'brite' ),
    'update_item'           => __( 'Update Item', 'brite' ),
    'view_item'             => __( 'View Item', 'brite' ),
    'view_items'            => __( 'View Items', 'brite' ),
    'search_items'          => __( 'Search Item', 'brite' ),
    'not_found'             => __( 'Not found', 'brite' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'brite' ),
    'featured_image'        => __( 'Featured Image', 'brite' ),
    'set_featured_image'    => __( 'Set featured image', 'brite' ),
    'remove_featured_image' => __( 'Remove featured image', 'brite' ),
    'use_featured_image'    => __( 'Use as featured image', 'brite' ),
    'insert_into_item'      => __( 'Insert into item', 'brite' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'brite' ),
    'items_list'            => __( 'Items list', 'brite' ),
    'items_list_navigation' => __( 'Items list navigation', 'brite' ),
    'filter_items_list'     => __( 'Filter items list', 'brite' ),
  );
  $args = array(
    'label'                 => __( 'Brite Product', 'brite' ),
    'description'           => __( 'Post Type Description', 'brite' ),
    'labels'                => $labels,
    'supports'              => array( ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,    
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
  );
  register_post_type( 'brite_product', $args );

}
add_action( 'init', 'custom_post_type_brite_product', 0 );

// Register Custom Taxonomy
function custom_taxonomy_brite_product() {

  $labels = array(
    'name'                       => _x( 'Brite Product Categories', 'Brite Product Category General Name', 'brite' ),
    'singular_name'              => _x( 'Brite Product Category', 'Brite Product Category Singular Name', 'brite' ),
    'menu_name'                  => __( 'Brite Product Category', 'brite' ),
    'all_items'                  => __( 'All Items', 'brite' ),
    'parent_item'                => __( 'Parent Item', 'brite' ),
    'parent_item_colon'          => __( 'Parent Item:', 'brite' ),
    'new_item_name'              => __( 'New Item Name', 'brite' ),
    'add_new_item'               => __( 'Add New Item', 'brite' ),
    'edit_item'                  => __( 'Edit Item', 'brite' ),
    'update_item'                => __( 'Update Item', 'brite' ),
    'view_item'                  => __( 'View Item', 'brite' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'brite' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'brite' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'brite' ),
    'popular_items'              => __( 'Popular Items', 'brite' ),
    'search_items'               => __( 'Search Items', 'brite' ),
    'not_found'                  => __( 'Not Found', 'brite' ),
    'no_terms'                   => __( 'No items', 'brite' ),
    'items_list'                 => __( 'Items list', 'brite' ),
    'items_list_navigation'      => __( 'Items list navigation', 'brite' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'brite_product_category', array( 'brite_product' ), $args );

  $labels = array(
    'name'                       => _x( 'Brite Product Surface', 'Brite Product Type General Name', 'brite' ),
    'singular_name'              => _x( 'Brite Product Surface', 'Brite Product Type Singular Name', 'brite' ),
    'menu_name'                  => __( 'Brite Product Surface', 'brite' ),
    'all_items'                  => __( 'All Items', 'brite' ),
    'parent_item'                => __( 'Parent Item', 'brite' ),
    'parent_item_colon'          => __( 'Parent Item:', 'brite' ),
    'new_item_name'              => __( 'New Item Name', 'brite' ),
    'add_new_item'               => __( 'Add New Item', 'brite' ),
    'edit_item'                  => __( 'Edit Item', 'brite' ),
    'update_item'                => __( 'Update Item', 'brite' ),
    'view_item'                  => __( 'View Item', 'brite' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'brite' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'brite' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'brite' ),
    'popular_items'              => __( 'Popular Items', 'brite' ),
    'search_items'               => __( 'Search Items', 'brite' ),
    'not_found'                  => __( 'Not Found', 'brite' ),
    'no_terms'                   => __( 'No items', 'brite' ),
    'items_list'                 => __( 'Items list', 'brite' ),
    'items_list_navigation'      => __( 'Items list navigation', 'brite' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'brite_product_surface', array( 'brite_product' ), $args );

  $labels = array(
    'name'                       => _x( 'Brite Product Color', 'Brite Product Category General Name', 'brite' ),
    'singular_name'              => _x( 'Brite Product Color', 'Brite Product Category Singular Name', 'brite' ),
    'menu_name'                  => __( 'Brite Product Color', 'brite' ),
    'all_items'                  => __( 'All Items', 'brite' ),
    'parent_item'                => __( 'Parent Item', 'brite' ),
    'parent_item_colon'          => __( 'Parent Item:', 'brite' ),
    'new_item_name'              => __( 'New Item Name', 'brite' ),
    'add_new_item'               => __( 'Add New Item', 'brite' ),
    'edit_item'                  => __( 'Edit Item', 'brite' ),
    'update_item'                => __( 'Update Item', 'brite' ),
    'view_item'                  => __( 'View Item', 'brite' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'brite' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'brite' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'brite' ),
    'popular_items'              => __( 'Popular Items', 'brite' ),
    'search_items'               => __( 'Search Items', 'brite' ),
    'not_found'                  => __( 'Not Found', 'brite' ),
    'no_terms'                   => __( 'No items', 'brite' ),
    'items_list'                 => __( 'Items list', 'brite' ),
    'items_list_navigation'      => __( 'Items list navigation', 'brite' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'brite_product_color', array( 'brite_product' ), $args );

  $labels = array(
    'name'                       => _x( 'Brite Product Width', 'Brite Product Category General Name', 'brite' ),
    'singular_name'              => _x( 'Brite Product Width', 'Brite Product Category Singular Name', 'brite' ),
    'menu_name'                  => __( 'Brite Product Width', 'brite' ),
    'all_items'                  => __( 'All Items', 'brite' ),
    'parent_item'                => __( 'Parent Item', 'brite' ),
    'parent_item_colon'          => __( 'Parent Item:', 'brite' ),
    'new_item_name'              => __( 'New Item Name', 'brite' ),
    'add_new_item'               => __( 'Add New Item', 'brite' ),
    'edit_item'                  => __( 'Edit Item', 'brite' ),
    'update_item'                => __( 'Update Item', 'brite' ),
    'view_item'                  => __( 'View Item', 'brite' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'brite' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'brite' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'brite' ),
    'popular_items'              => __( 'Popular Items', 'brite' ),
    'search_items'               => __( 'Search Items', 'brite' ),
    'not_found'                  => __( 'Not Found', 'brite' ),
    'no_terms'                   => __( 'No items', 'brite' ),
    'items_list'                 => __( 'Items list', 'brite' ),
    'items_list_navigation'      => __( 'Items list navigation', 'brite' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'brite_product_width', array( 'brite_product' ), $args );

}
add_action( 'init', 'custom_taxonomy_brite_product', 0 );


function get_products($taxonomyname=null, $term_id=null){

  $args = array(
    'posts_per_page'   => 5,
    'offset'           => 0,
    'category'         => '',
    'category_name'    => '',
    'orderby'          => 'date',
    'order'            => 'DESC',
    'include'          => '',
    'exclude'          => '',
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => 'brite_product',
    'post_mime_type'   => '',
    'post_parent'      => '',
    'author'     => '',
    'author_name'    => '',
    'post_status'      => 'publish',
    'suppress_filters' => true 
  );

  if(is_null($taxonomyname)){

  }else{
    $args['tax_query'] = array(
            array(
                'taxonomy' => $taxonomyname,
                'field' => 'term_id',
                'terms' => $term_id,
            )
      );
  }
  return get_posts( $args );


}



function get_product_terms($taxname){
  $terms = get_terms( array(
    'taxonomy' => $taxname,
    'hide_empty' => false,
  ) );
  return $terms;
}

function get_width_name($id){
$term_list = wp_get_post_terms($id, 'brite_product_width', array("fields" => "all"));
return $term_list[0]->name;
}

?>