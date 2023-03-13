<?php
    function cptui_register_my_cpts() {

        /**
         * Post Type: News.
         */
    
        $labels = [
            "name" => esc_html__( "News", "urban-charity" ),
            "singular_name" => esc_html__( "News", "urban-charity" ),
            "menu_name" => esc_html__( "News", "urban-charity" ),
            "all_items" => esc_html__( "All News", "urban-charity" ),
            "add_new" => esc_html__( "Add new News", "urban-charity" ),
            "add_new_item" => esc_html__( "Add New News", "urban-charity" ),
            "edit_item" => esc_html__( "Edit News", "urban-charity" ),
            "new_item" => esc_html__( "New News", "urban-charity" ),
            "view_item" => esc_html__( "View News", "urban-charity" ),
            "view_items" => esc_html__( "View News", "urban-charity" ),
            "item_updated" => esc_html__( "News Updated", "urban-charity" ),
        ];
    
        $args = [
            "label" => esc_html__( "News", "urban-charity" ),
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "publicly_queryable" => true,
            "show_ui" => true,
            "show_in_rest" => true,
            "rest_base" => "",
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "rest_namespace" => "wp/v2",
            "has_archive" => false,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "delete_with_user" => false,
            "exclude_from_search" => false,
            "capability_type" => "post",
            "map_meta_cap" => true,
            "hierarchical" => false,
            "can_export" => false,
            "rewrite" => [ "slug" => "news", "with_front" => true ],
            "query_var" => true,
            "supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "comments", "author" ],
            "show_in_graphql" => false,
        ];
    
        register_post_type( "news", $args );
    
        /**
         * Post Type: Volunteer Oportunities.
         */
    
        $labels = [
            "name" => esc_html__( "Volunteer Oportunities", "urban-charity" ),
            "singular_name" => esc_html__( "Volunteer Oportunity", "urban-charity" ),
            "menu_name" => esc_html__( "Volunteer Opportunities", "urban-charity" ),
            "all_items" => esc_html__( "All Opportunities", "urban-charity" ),
            "add_new" => esc_html__( "Add Opportunity", "urban-charity" ),
            "add_new_item" => esc_html__( "Add New Opportunity", "urban-charity" ),
            "edit_item" => esc_html__( "Edit Opportunity", "urban-charity" ),
            "new_item" => esc_html__( "New Opportunity", "urban-charity" ),
            "view_item" => esc_html__( "View Opportunity", "urban-charity" ),
            "view_items" => esc_html__( "View Opportunities", "urban-charity" ),
            "archives" => esc_html__( "Opportunity Archives", "urban-charity" ),
            "item_updated" => esc_html__( "Updated Opportunity", "urban-charity" ),
        ];
    
        $args = [
            "label" => esc_html__( "Volunteer Oportunities", "urban-charity" ),
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "publicly_queryable" => true,
            "show_ui" => true,
            "show_in_rest" => true,
            "rest_base" => "",
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "rest_namespace" => "wp/v2",
            "has_archive" => false,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "delete_with_user" => false,
            "exclude_from_search" => false,
            "capability_type" => "post",
            "map_meta_cap" => true,
            "hierarchical" => false,
            "can_export" => false,
            "rewrite" => [ "slug" => "oportunities", "with_front" => true ],
            "query_var" => true,
            "supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "comments", "author" ],
            "show_in_graphql" => false,
        ];
    
        register_post_type( "oportunities", $args );
    
        /**
         * Post Type: Impact Stories.
         */
    
        $labels = [
            "name" => esc_html__( "Impact Stories", "urban-charity" ),
            "singular_name" => esc_html__( "Impact Story", "urban-charity" ),
            "menu_name" => esc_html__( "Impact Stories", "urban-charity" ),
            "all_items" => esc_html__( "All Impact Stories", "urban-charity" ),
            "add_new" => esc_html__( "Add Impact Story", "urban-charity" ),
            "add_new_item" => esc_html__( "Add  New Impact Story", "urban-charity" ),
            "edit_item" => esc_html__( "Edit Impact Story", "urban-charity" ),
            "new_item" => esc_html__( "New Impact Story", "urban-charity" ),
            "view_item" => esc_html__( "View Impact Story", "urban-charity" ),
            "view_items" => esc_html__( "View Impact Stories", "urban-charity" ),
            "archives" => esc_html__( "Impact Story Archive", "urban-charity" ),
            "item_updated" => esc_html__( "Impact Story Updated", "urban-charity" ),
        ];
    
        $args = [
            "label" => esc_html__( "Impact Stories", "urban-charity" ),
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "publicly_queryable" => true,
            "show_ui" => true,
            "show_in_rest" => true,
            "rest_base" => "",
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "rest_namespace" => "wp/v2",
            "has_archive" => false,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "delete_with_user" => false,
            "exclude_from_search" => false,
            "capability_type" => "post",
            "map_meta_cap" => true,
            "hierarchical" => false,
            "can_export" => false,
            "rewrite" => [ "slug" => "story", "with_front" => true ],
            "query_var" => true,
            "supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "comments", "author" ],
            "show_in_graphql" => false,
        ];
    
        register_post_type( "story", $args );
    }
    
    add_action( 'init', 'cptui_register_my_cpts' );
    //test
    
?>