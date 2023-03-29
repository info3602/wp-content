<?php 
    add_action('rest_api_init','charitySearch');

    function charitySearch(){
        register_rest_route("charitable/v1",'all',array(
            'methods'=>WP_REST_SERVER::READABLE,
            'callback'=> 'get_custom_posts'
        ));
    }

    function get_custom_posts( $request ) {
        $params = $request->get_params();
        $search_query = isset( $params['search'] ) ? $params['search'] : '';
        $args = array(
            'post_type' => array( 'page', 'story','news','opportunities'),
            's' => $search_query,
        );
        $query = new WP_Query($args);
        $posts = array();
        while ($query->have_posts()) {
            $query->the_post();
            $post_data = array(
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'permalink' => get_permalink(),
            );
            array_push($posts, $post_data);
        }   
        wp_reset_postdata();   
        return rest_ensure_response($posts);
    }
    


 
?>