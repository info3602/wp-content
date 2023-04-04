<?php
function register_custom_types()
{

    /**
     * Post Type: News.
     */

    $labels = [
        "name" => "News",
        "singular_name" => "News",
        "menu_name" => "News",
        "all_items" => "All News",
        "add_new" => "Add new News",
        "add_new_item" => "Add New News",
        "edit_item" => "Edit News",
        "new_item" => "New News",
        "view_item" => "View News",
        "view_items" => "View News",
        "item_updated" => "News Updated",
    ];

    $args = [
        "label" => "News",
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "has_archive" => true,
        "show_in_rest" => true,
        "rewrite" => ["slug" => "news", "with_front" => true],
        "supports" => ['thumbnail', "title", "editor", "excerpt", "custom-fields", "comments", "author"],
        "menu_icon" => "dashicons-admin-site",
        "capability_type" => "News",
        "map_meta_cap" => true,
    ];

    register_post_type("news", $args);

    /**
     * Post Type: Volunteer Oportunities.
     */

    $labels = [
        "name" => "Volunteer Opportunities",
        "singular_name" => "Volunteer Opportunity",
        "menu_name" => "Volunteer Opportunities",
        "all_items" => "All Opportunities",
        "add_new" => "Add Opportunity",
        "add_new_item" => "Add New Opportunity",
        "edit_item" => "Edit Opportunity",
        "new_item" => "New Opportunity",
        "view_item" => "View Opportunity",
        "view_items" => "View Opportunities",
        "item_updated" => "Updated Opportunity",
    ];

    $args = [
        "label" => "Volunteer Opportunities",
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => true,
        "show_in_rest" => true,
        "rewrite" => ["slug" => "opportunities", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "editor", "thumbnail", "excerpt", "custom-fields", "comments", "author"],
        "menu_icon" => "dashicons-heart",
        "capability_type" => "Opportunities",
        "map_meta_cap" => true,
    ];

    register_post_type("opportunities", $args);

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
        "item_updated" => "Impact Story Updated",
    ];

    $args = [
        "label" => "Impact Stories",
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "has_archive" => true,
        "show_in_rest" => true,
        "rewrite" => ["slug" => "story", "with_front" => true],
        "supports" => ["title", "editor", "thumbnail", "excerpt", "custom-fields", "comments", "author"],
        "menu_icon" => "dashicons-format-quote",
        "capability_type" => "Stories",
        "map_meta_cap" => true,
    ];

    register_post_type("story", $args);


    /**
     * Post Type: Donation
     */

    $labels = [
        "name" => "Donations",
        "singular_name" => "Donation",
        "menu_name" => "Donations",
        "all_items" => "All Donations",
        "add_new_item" => "Add New Donation",
        "edit_item" => "Edit Donation",
        "new_item" => "New Donation",
        "view_item" => "View Donation",
        "view_items" => "View Donations",
        "item_updated" => "Donation Updated"

    ];

    $args = [
        "label" => "Donations",
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "has_archive" => true,
        "show_in_rest" => true,
        "supports" => ['title', 'custom-fields'],
        "rewrite" => ['slug' => 'donations', 'with-front' => true],
        "menu_icon" => "dashicons-money-alt",
        "capability_type" => "Donations",
        "map_meta_cap" => true,
    ];

    register_post_type("donations", $args);


    /**
     * Post Type: Message
     */

    $labels = [
        "name" => "Messages",
        "singular_name" => "Message",
        "menu_name" => "Messages",
        "all_items" => "All Messages",
        "add_new_item" => "Add New Message",
        "edit_item" => "Edit Message",
        "new_item" => "New Message",
        "view_item" => "View Message",
        "view_items" => "View Messages",
        "item_updated" => "Message Updated"

    ];

    $args = [
        "label" => "Messages",
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_in_rest" => true,
        "has_archive" => true,
        "supports" => ['title', 'custom-fields'],
        "rewrite" => ['slug' => 'messages', 'with-front' => true],
        "menu_icon" => "dashicons-format-status",
        "capability_type" => "Messages",
        "map_meta_cap" => true,
    ];

    register_post_type("messages", $args);
}

add_action('init', 'register_custom_types');


?>