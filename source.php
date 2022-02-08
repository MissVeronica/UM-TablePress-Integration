<?php

add_filter( 'um_user_profile_tabs', 'add_tab_links_in_profile', 10, 1 );
add_action( 'um_profile_content_tablepress_default', 'profile_content_tablepress_default' , 10, 1 );

function add_tab_links_in_profile( $tabs ) {

    global $current_user;
   
    if( $current_user->ID == um_profile_id() ) {

        $tabs['tablepress'] = array( 
                    'name'            => __( 'TablePress', 'ultimate-member' ), 
                    'icon'            => 'um-faicon-users',
                    'custom'          => true, 
                    'default_privacy' => 3 );
    }

    return $tabs;
}

function profile_content_tablepress_default( $args ) {

    global $current_user;
   
    if( $current_user->ID == um_profile_id() ) {

        $tab_id = um_user( 'tablepress_id' );
        if( $tab_id ) {
            echo do_shortcode( "[table id = {$tab_id} /]" );
        }
    }
}
