<?php

function cmb_homepage_metaboxes( array $meta_boxes ) {

    $prefix = "fp_";

    $fields =   array(

                    array( 
                        'name' => 'NT Content',
                        'id' => $prefix . 'nt',
                        'type' => 'wysiwyg',
                        'cols' => 6,
                    ),

                    array( 
                        'name' => 'YP Content',
                        'id' => $prefix . 'yp',
                        'type' => 'wysiwyg',
                        'cols' => 6,
                    ),

                    array( 
                        'name' => 'Goal Content',
                        'id' => $prefix . 'goal',
                        'type' => 'wysiwyg',
                        'cols' => 12,
                    ),

            );


    $meta_boxes[] = array(
        'id' => $prefix.'meta', //used just for storage
        'title' => 'Front Page custom content',
        'pages'      => array( 'page' ), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // show field names on the left
        'show_on'    => array( 'key' => 'id', 'value' => '4' ), // Specific post IDs to display this metabox
        'fields' => $fields
    );

    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'cmb_homepage_metaboxes' );
?>