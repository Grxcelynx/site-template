<?php
/**
     * CUSTOM BLOCK PATTERN for Custom Cat
     * - Register Pattern Cat/Label
     * - Register Block Pattern
*/
register_block_pattern_category(
    'Custom Patterns',
    array(
        'label'     => __( 'Custom Patterns', 'flower-queen-template' )
    )
);
function custom_block_pattern_universal() {
    register_block_pattern(
        'flower-queen-template/pattern1',
        array(
            'title'       => __( 'Pattern One ', 'flower-queen-template' ),
            'description' => _x( 'Description here', 'flower-queen-template' ),
            'content'     => "",
            'categories'  => array( 'Custom Patterns' ),
        )
    );
}


add_action( 'init', 'custom_block_pattern_universal' );