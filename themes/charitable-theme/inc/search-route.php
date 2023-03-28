<?php 
    add_action('rest_api_init','charitySearch');

    function charitySearch(){
        register_rest_route("charitable/v1",'search',array(
            'methods'=>WP_REST_SERVER::READABLE,
            'callback'=> 'charitableSearchResults'
        ));
    }

    function charitableSearchResults(){
        return "Hello World :)";
    }


 
?>