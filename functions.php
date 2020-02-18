<?php

require 'plugin-update-checker-4.8.1/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/angelo-marasa/patient-procedures-anatomy/',
    __FILE__,
    'patient-procedures-anatomy'
);

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('your-token-here');

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');



function create_patient_procedures_cpt() {
    // Register Anatomy Area taxonomy for Patient Procedure Post Type
    register_taxonomy(
        'anatomy_area',
        'ppa-cpt',
        array(
            'labels' => array(
                'name' => 'Anatomy Areas',
                'add_new_item' => 'Add New Anatomy Area',
                'new_item_name' => "New Anatomy Area"
            ),
            'show_in_rest'  => true,
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'show_admin_column' => true
        )
    );

    // Register Patient Procedure Post Type
    register_post_type( 'ppa-cpt', array(
        'labels' => array(
            'name' => 'Patient Procedures',
            'singular_name' => 'Patient Procedure',
            'menu_name' => 'Patient Procedures'
        ),
        'description' => 'Patient Procedures',
        'public' => true,
        'rewrite' => array('slug' => 'patient-procedures'),
        'show_in_menu' => true,
        'menu_position' => 5,
        'has_archive' => false,
        'show_in_rest'  => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'taxonomies' => array('anatomy_area'),
    ));
}

// Call Custom post type and taxonomy
add_action( 'init', 'create_patient_procedures_cpt', 0 );

function load_ppa_cpt_template( $template ) {
    global $post;

    if ( 'ppa-cpt' === $post->post_type && locate_template( array( 'single-ppa-cpt.php' ) ) !== $template ) {
        return plugin_dir_path( __FILE__ ) . 'single-ppa-cpt.php';
    }

    return $template;
}

add_filter( 'single_template', 'load_ppa_cpt_template' );




add_filter( 'theme_page_templates', 'add_procedures_start_page_template_to_dropdown' );

function add_procedures_start_page_template_to_dropdown( $templates )
{
    $templates[plugin_dir_path( __FILE__ ) . 'templates/procedures-start-page.php'] = __( 'Procedures Start Page', 'procedure-start-tpl' );
    return $templates;
}


add_filter( 'template_include', 'change_procedures_start_page_template', 99 );

function change_procedures_start_page_template( $template )
{
    if(is_page())
    {
        $meta = get_post_meta( get_the_ID() );

        if(!empty($meta['_wp_page_template'][0]) && $meta['_wp_page_template'][0] != $template)
        {
            $template = $meta['_wp_page_template'][0];
        }
    } else if(is_single()) {

        $fileTemplate = plugin_dir_path( __FILE__ ) . 'templates/procedures-start-page.php';
        if(file_exists($fileTemplate))
        {
            $template = $fileTemplate;
        }
    }

    return $template;
}


add_filter( 'theme_page_templates', 'add_procedures_list_page_template_to_dropdown' );

function add_procedures_list_page_template_to_dropdown( $templates )
{
    $templates[plugin_dir_path( __FILE__ ) . 'templates/procedures-list-page.php'] = __( 'Procedures List Page', 'procedure-list-tpl' );
    return $templates;
}


add_filter( 'template_include', 'change_procedures_list_page_template', 99 );

function change_procedures_list_page_template( $template )
{
    if(is_page())
    {
        $meta = get_post_meta( get_the_ID() );

        if(!empty($meta['_wp_page_template'][0]) && $meta['_wp_page_template'][0] != $template)
        {
            $template = $meta['_wp_page_template'][0];
        }
    } else if(is_single()) {

        $fileTemplate = plugin_dir_path( __FILE__ ) . 'templates/procedures-list-page.php';
        if(file_exists($fileTemplate))
        {
            $template = $fileTemplate;
        }
    }

    return $template;
}


add_filter( 'theme_page_templates', 'add_procedures_category_page_template_to_dropdown' );

function add_procedures_category_page_template_to_dropdown( $templates )
{
    $templates[plugin_dir_path( __FILE__ ) . 'templates/procedures-category-page.php'] = __( 'Procedures Category Page', 'procedure-category-tpl' );
    return $templates;
}


add_filter( 'template_include', 'change_procedures_category_page_template', 99 );

function change_procedures_category_page_template( $template )
{
    if(is_page())
    {
        $meta = get_post_meta( get_the_ID() );

        if(!empty($meta['_wp_page_template'][0]) && $meta['_wp_page_template'][0] != $template)
        {
            $template = $meta['_wp_page_template'][0];
        }
    } else if(is_single()) {

        $fileTemplate = plugin_dir_path( __FILE__ ) . 'templates/procedures-category-page.php';
        if(file_exists($fileTemplate))
        {
            $template = $fileTemplate;
        }
    }

    return $template;
}