<?php /*
Plugin Name: Patient Procedure Anatomy
Plugin URI: http://plugin.dev
Description: This plugin is a custom built plugin for Deca Health. This is a plugin that displays the anatomy and allows users to select different areas to see a list of procedures.
Version: 1.0.0
Author: Angelo Marasa
Author URI: http://plugin.dev
License: GPL2
*/



function kal_ppa_add_js_and_css_to_head() {
    echo '<link rel="stylesheet" type="text/css" href="'.plugin_dir_url( __FILE__ ).'scss/patient-procedures-anatomy.css">';
    echo '<link rel="stylesheet" type="text/css" href="'.plugin_dir_url( __FILE__ ).'scss/modal-video.min.css">';
}
add_action('wp_head', 'kal_ppa_add_js_and_css_to_head');

function kal_ppa_add_js_to_footer() {
    echo '<script src="'.plugin_dir_url( __FILE__ ).'js/jquery-modal-video.min.js"></script>';
    echo '<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>';
    ?>
    <script>
        jQuery(".js-modal-btn").modalVideo();

        jQuery(".anatomy-list-card").matchHeight();
        jQuery(".anatomy-list-card-title").matchHeight();

        almComplete = function(alm){
            jQuery(".anatomy-list-card").matchHeight();
            jQuery(".anatomy-list-card-title").matchHeight();
        };
    </script>
<?php
}
add_action('wp_footer', 'kal_ppa_add_js_to_footer');


include( plugin_dir_path( __FILE__ ) . '/functions.php');
include( plugin_dir_path( __FILE__ ) . '/settings.php');
include( plugin_dir_path( __FILE__ ) . '/short_codes.php');
include( plugin_dir_path( __FILE__ ) . '/gutenberg.php');
include( plugin_dir_path( __FILE__ ) . '/bc.php');
include( plugin_dir_path( __FILE__ ) . '/acf/loader.php');
?>