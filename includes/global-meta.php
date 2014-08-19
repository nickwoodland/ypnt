<?php
function cmb_header_metaboxes( array $meta_boxes ) {

    $prefix = "_header_";

    $fields =   array(

                    array( 
                        'name' => 'Subtitle',
                        'id' => $prefix . 'subtitle',
                        'type' => 'text',
                        'cols' => 12,
                    ),

            );


    $meta_boxes[] = array(
        'id' => $prefix.'meta', //used just for storage
        'title' => 'Header',
        'pages'      => array( 'page' ), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // show field names on the left
        'fields' => $fields
    );

    $prefix = '_cta_banner_';

    $fields =   array(

                array( 
                    'name' => 'Display?',
                    'id' => $prefix . 'display',
                    'type' => 'checkbox',
                    'cols' => 6,
                ),

                array( 
                    'name' => 'Colour?',
                    'id' => $prefix . 'colour',
                    'type' => 'radio',
                    'cols' => 6,
                    'options' => array( 
                        'yp' => 'Yes Please', 
                        'nt' => 'No Thanks'
                    ),
                ),


                array( 
                    'name' => 'Text',
                    'id' => $prefix . 'text',
                    'type' => 'text',
                    'cols' => 12,
                ),

                array( 
                    'name' => 'Button Text',
                    'id' => $prefix . 'button_text',
                    'type' => 'text',
                    'cols' => 6,
                ),

                array( 
                    'name' => 'Button Link',
                    'id' => $prefix . 'link',
                    'type' => 'text',
                    'cols' => 6,
                ),

        );


    $meta_boxes[] = array(
        'id' => $prefix.'meta', //used just for storage
        'title' => 'CTA Banner',
        'pages'      => array( 'page' ), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // show field names on the left
        'fields' => $fields
    );


    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'cmb_header_metaboxes' );
?>