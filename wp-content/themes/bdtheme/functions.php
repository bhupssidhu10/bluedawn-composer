<?php

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );



add_action( 'add_meta_boxes', 'add_custom_page_attributes_meta_box' );
function add_custom_page_attributes_meta_box(){
global $post;
    if ( 'page' != $post->post_type && post_type_supports($post->post_type, 'page-attributes') ) {
        add_meta_box( 'custompageparentdiv', __('Template'), 'custom_page_attributes_meta_box', NULL, 'side', 'core');
    }
}

function custom_page_attributes_meta_box($post) {
    $template = get_post_meta( $post->ID, '_wp_page_template', 1 ); ?>
    <select name="page_template" id="page_template">
        <?php $default_title = apply_filters( 'default_page_template_title',  __( 'Default Template' ), 'meta-box' ); ?>
        <option value="default"><?php echo esc_html( $default_title ); ?></option>
        <?php page_template_dropdown($template); ?>
    </select><?php
}

add_action( 'save_post', 'save_custom_page_attributes_meta_box' );
function save_custom_page_attributes_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;
    if ( ! empty( $_POST['page_template'] ) && get_post_type( $post_id ) != 'page' ) {
        update_post_meta( $post_id, '_wp_page_template', $_POST['page_template'] );
    }
}


add_theme_support('post-thumbnails');