<?php /*
Plugin Name: Patient Procedure Anatomy
Plugin URI: http://plugin.dev
Description: This plugin is a custom built plugin for Deca Health. This is a plugin that displays the anatomy and allows users to select different areas to see a list of procedures.
Version: 1.0.0
Author: Angelo Marasa
Author URI: http://plugin.dev
License: GPL2
*/
function our_team_add_js_and_css_to_head() {
    echo '<link rel="stylesheet" type="text/css" href="'.plugin_dir_url( __FILE__ ).'assets/our-team-style.css">';
}
add_action('wp_head', 'our_team_add_js_and_css_to_head');

//custom updates
//$this_file = __FILE__;
//$update_check = "https://kaleidico.com/plugins-versions/patient-procedures-anatomy/version.txt";
//require_once('updater.php');

include( plugin_dir_path( __FILE__ ) . '/functions.php');
include( plugin_dir_path( __FILE__ ) . '/settings.php');
include( plugin_dir_path( __FILE__ ) . '/short_codes.php');
?>