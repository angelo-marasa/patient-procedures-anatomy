<?php
// create custom plugin settings menu
add_action('admin_menu', 'kal_patient_procedures_anatomy_create_menu');

function kal_patient_procedures_anatomy_create_menu() {
//--create new top-level menu
    add_menu_page('Patient Procedures Anatomy', 'Patient Procedures Anatomy', 'administrator', __FILE__, 'kal_patient_procedures_anatomy_settings_page' ,  plugins_url('/images/icon.svg', __FILE__) );
//--call register settings function
    add_action( 'admin_init', 'register_patient_procedures_anatomy_settings' );
}

function register_patient_procedures_anatomy_settings() {
//register our settings
    register_setting( 'kal-patient-procedures-anatomy-settings-group', 'kal-ppa-start-page' );
    register_setting( 'kal-patient-procedures-anatomy-settings-group', 'kal-ppa-head-and-neck' );
    register_setting( 'kal-patient-procedures-anatomy-settings-group', 'kal-ppa-shoulder' );
    register_setting( 'kal-patient-procedures-anatomy-settings-group', 'kal-ppa-abdomen' );
    register_setting( 'kal-patient-procedures-anatomy-settings-group', 'kal-ppa-upper-back' );
    register_setting( 'kal-patient-procedures-anatomy-settings-group', 'kal-ppa-arms-and-hands' );
    register_setting( 'kal-patient-procedures-anatomy-settings-group', 'kal-ppa-hips' );
    register_setting( 'kal-patient-procedures-anatomy-settings-group', 'kal-ppa-legs' );
    register_setting( 'kal-patient-procedures-anatomy-settings-group', 'kal-ppa-lower-back' );
    register_setting( 'kal-patient-procedures-anatomy-settings-group', 'kal-ppa-foot' );
}


function kal_patient_procedures_anatomy_settings_page() {?>
    <div class="wrap">
        <h1>Patient Procedures Anatomy Settings</h1>
        <form method="post" action="options.php" enctype="multipart/form-data">
            <?php settings_fields( 'kal-patient-procedures-anatomy-settings-group' ); ?>
            <?php do_settings_sections( 'kal-patient-procedures-anatomy-settings-group' ); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Procedure Start Page</th>
                    <td><input type="text" name="kal-ppa-start-page"
                               value="<?php echo esc_attr( get_option('kal-ppa-start-page') ); ?>"
                               placeholder="/procedures/" />
                    </td>
                    <span class="small">Please use only the slug portion after the .com. See placeholder text as an example.</span>
                </tr>
                <tr valign="top">
                    <th scope="row">Head and Neck</th>
                    <td><input type="text" name="kal-ppa-head-and-neck"
                               value="<?php echo esc_attr( get_option('kal-ppa-head-and-neck') ); ?>"
                               placeholder="/procedures/head-and-neck" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Shoulder</th>
                    <td><input type="text" name="kal-ppa-shoulder"
                               value="<?php echo esc_attr( get_option('kal-ppa-shoulder') ); ?>"
                               placeholder="/procedures/shoulder" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Abdomen</th>
                    <td><input type="text" name="kal-ppa-abdomen"
                               value="<?php echo esc_attr( get_option('kal-ppa-abdomen') ); ?>"
                               placeholder="/procedures/abdomen" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Upper Back</th>
                    <td><input type="text" name="kal-ppa-upper-back"
                               value="<?php echo esc_attr( get_option('kal-ppa-upper-back') ); ?>"
                               placeholder="/procedures/upper-back" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Arms and Hands</th>
                    <td><input type="text" name="kal-ppa-arms-and-hands"
                               value="<?php echo esc_attr( get_option('kal-ppa-arms-and-hands') ); ?>"
                               placeholder="/procedures/arms-and-hands" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Hips</th>
                    <td><input type="text" name="kal-ppa-hips"
                               value="<?php echo esc_attr( get_option('kal-ppa-hips') ); ?>"
                               placeholder="/procedures/hips" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Legs</th>
                    <td><input type="text" name="kal-ppa-legs"
                               value="<?php echo esc_attr( get_option('kal-ppa-legs') ); ?>"
                               placeholder="/procedures/legs" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Lower Back</th>
                    <td><input type="text" name="kal-ppa-lower-back"
                               value="<?php echo esc_attr( get_option('kal-ppa-lower-back') ); ?>"
                               placeholder="/procedures/lower-back" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Foot</th>
                    <td><input type="text" name="kal-ppa-foot"
                               value="<?php echo esc_attr( get_option('kal-ppa-foot') ); ?>"
                               placeholder="/procedures/foot" />
                    </td>
                </tr>
            </table>
            <?php submit_button('Save Settings'); ?>
        </form>
    </div>
<?php }

?>