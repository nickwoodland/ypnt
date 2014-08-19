<?php/*

function cmb_header_image_metaboxes( array $meta_boxes ) {

    $prefix = "_header_";

    $fields =   array(

                    array( 
                        'name' => 'Image',
                        'id' => $prefix . 'image',
                        'type' => 'image',
                        'cols' => 12,
                    ),

            );


    $meta_boxes[] = array(
        'id' => $prefix.'meta', //used just for storage
        'title' => 'Header Image',
        'pages'      => array( 'page' ), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // show field names on the left
        'fields' => $fields
    );

    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'cmb_header_image_metaboxes' );*/
?>