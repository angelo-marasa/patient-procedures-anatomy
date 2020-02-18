<?php

/* Create custom category for Gutenberg blocks */
function ppa_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'patient-procedures-anatomy-blocks',
                'title' => __( 'Patient Procedures Anatomy Blocks', 'patient-procedures-anatomy-blocks' ),
            ),
        )
    );
}
add_filter( 'block_categories', 'ppa_block_category', 10, 2);



/*  Register custom block  - TEST MODULE */
function ppa_register_blocks() {
    acf_register_block(array(
        'name' => 'ppa-procedures',
        'title' => __('Procedures', 'kaleidico'),
        'render_template' => plugin_dir_path(__FILE__) . '/custom-blocks/procedures.php',
        'category' => 'patient-procedures-anatomy-blocks',
        'icon' => 'admin-users',
        'mode' => 'edit',
        'keywords' => array('procedures', 'anatomy', 'patient procedures anatomy')
    ));
}
add_action('acf/init', 'ppa_register_blocks' );