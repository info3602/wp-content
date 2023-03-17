<?php
    function register_custom_types() {

        /**
         * Post Type: News.
         */
    
        $labels = [
            "name" =>  "News",
            "singular_name" => "News",
            "menu_name" => "News",
            "all_items" => "All News",
            "add_new" => "Add new News",
            "add_new_item" => "Add New News",
            "edit_item" =>  "Edit News",
            "new_item" =>  "New News", 
            "view_item" =>  "View News", 
            "view_items" => "View News", 
            "item_updated" => "News Updated",
        ];
    
        $args = [
            "label" =>  "News",
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "rewrite" => [ "slug" => "news", "with_front" => true ],
            "supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "comments", "author" ],
          
        ];
    
        register_post_type( "news", $args );
    
        /**
         * Post Type: Volunteer Oportunities.
         */
    
        $labels = [
            "name" => "Volunteer Oportunities", 
            "singular_name" => "Volunteer Oportunity", 
            "menu_name" => "Volunteer Opportunities", 
            "all_items" => "All Opportunities", 
            "add_new" => "Add Opportunity", 
            "add_new_item" => "Add New Opportunity", 
            "edit_item" => "Edit Opportunity", 
            "new_item" => "New Opportunity", 
            "view_item" => "View Opportunity", 
            "view_items" => "View Opportunities", 
            "archives" => "Opportunity Archives", 
            "item_updated" => "Updated Opportunity", 
        ];
    
        $args = [
            "label" => "Volunteer Oportunities", 
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "show_ui" => true,
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "has_archive" => false,

            "rewrite" => [ "slug" => "oportunities", "with_front" => true ],
            "query_var" => true,
            "supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "comments", "author" ],
            
        ];
    
        register_post_type( "oportunities", $args );
    
        /**
         * Post Type: Impact Stories.
         */
    
        $labels = [
            "name" => "Impact Stories", 
            "singular_name" => "Impact Story", 
            "menu_name" => "Impact Stories", 
            "all_items" => "All Impact Stories", 
            "add_new" => "Add Impact Story", 
            "add_new_item" => "Add  New Impact Story", 
            "edit_item" => "Edit Impact Story", 
            "new_item" => "New Impact Story", 
            "view_item" => "View Impact Story", 
            "view_items" => "View Impact Stories", 
            "archives" => "Impact Story Archive", 
            "item_updated" => "Impact Story Updated", 
        ];
    
        $args = [
            "label" => "Impact Stories", 
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "show_ui" => true,
            "rest_namespace" => "wp/v2",
            "has_archive" => false,
            "rewrite" => [ "slug" => "story", "with_front" => true ],
            "supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "comments", "author" ],
        ];
    
        register_post_type( "story", $args );
    }
    
    add_action( 'init', 'register_custom_types' );

    
?>