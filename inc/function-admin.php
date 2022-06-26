<?php
 /**
 * @package CT_Custom
 */

 //  =======================
//   THEME ADMIN PAGE
//   =======================

function ct_custom_add_admin_page() {
    add_menu_page( 'Theme Settings', 'Coalition', 'manage_options', 'theme_settings', 'ct_custom_theme_create_page_callback', get_template_directory_uri().'/img/coalition-icon.png', 110 );

    // Activate Custom Theme Settings
    add_action( 'admin_init', 'ct_custom_theme_custom_settings' );
}

add_action( 'admin_menu', 'ct_custom_add_admin_page' );

function ct_custom_theme_create_page_callback() { ?>

    <h1>Theme Settings</h1>

    <?php settings_errors(); ?>

    <form action="options.php" method="post" class="ct_custom-theme-setting-form">
        <?php settings_fields( 'ct_custom_theme_general_settings' ); ?>
        <?php do_settings_sections( 'theme_settings' ); ?>
        <?php submit_button(); ?>
    </form>

<?php }

// Theme Settings Page
function ct_custom_theme_custom_settings() {
    register_setting( 'ct_custom_theme_general_settings', 'logo' );
    register_setting( 'ct_custom_theme_general_settings', 'phone_number' );
    register_setting( 'ct_custom_theme_general_settings', 'address_information' );
    register_setting( 'ct_custom_theme_general_settings', 'fax_number' );
    register_setting( 'ct_custom_theme_general_settings', 'facebook_link' );
    register_setting( 'ct_custom_theme_general_settings', 'instagram_link' );
    register_setting( 'ct_custom_theme_general_settings', 'youtube_link' );
    register_setting( 'ct_custom_theme_general_settings', 'linkedin_link' );
    register_setting( 'ct_custom_theme_general_settings', 'twitter_link' );

    add_settings_section( 'ct_custom-general-settings', 'General Information', null, 'theme_settings' );
    add_settings_section( 'ct_custom-social-links', 'Social Media Links', null, 'theme_settings' );

    add_settings_field( 'logo', 'Logo', 'ct_custom_logo_callback', 'theme_settings', 'ct_custom-general-settings' );
    add_settings_field( 'phone-number', 'Phone Number', 'ct_custom_phone_number_callback', 'theme_settings', 'ct_custom-general-settings' );
    add_settings_field( 'address-information', 'Address Information', 'ct_custom_address_information_callback', 'theme_settings', 'ct_custom-general-settings' );
    add_settings_field( 'fax-number', 'Fax Number', 'ct_custom_fax_number_callback', 'theme_settings', 'ct_custom-general-settings' );
    add_settings_field( 'facebook-link', 'Facebook Link', 'ct_custom_facebook_link_callback', 'theme_settings', 'ct_custom-social-links' );
    add_settings_field( 'instagram-link', 'Instagram Link', 'ct_custom_instagram_link_callback', 'theme_settings', 'ct_custom-social-links' );
    add_settings_field( 'youtube-link', 'YouTube Link', 'ct_custom_youtube_link_callback', 'theme_settings', 'ct_custom-social-links' );
    add_settings_field( 'linkedin-link', 'LinkedIn Link', 'ct_custom_linkedin_link_callback', 'theme_settings', 'ct_custom-social-links' );
    add_settings_field( 'twitter-link', 'Twitter Link', 'ct_custom_twitter_link_callback', 'theme_settings', 'ct_custom-social-links' );
}

function ct_custom_logo_callback() {
    $logo = esc_attr(get_option( 'logo' ));
    $html = '<input type="button" class="button button-secondary" value="Upload Logo" id="upload-logo" />
    <input type="hidden" id="logo" name="logo" value="'.$logo.'"/>';

    if ( $logo ) {
        $html .= '<img width="auto" height="40px" src="'.$logo.'" alt="Logo" />';
    }

    echo $html;
}

function ct_custom_phone_number_callback() {
    $phoneNumber = esc_attr( get_option( 'phone_number' ) );
    echo '<input type="tel" name="phone_number" value="'.$phoneNumber.'" placeholder="123-4567-8901">';
}

function ct_custom_address_information_callback() {
    $addressInformation = esc_attr( get_option( 'address_information' ) );
    echo '<textarea name="address_information" placeholder="535 La Planta Street">'.$addressInformation.'</textarea>';
}

function ct_custom_fax_number_callback() {
    $faxNumber = esc_attr( get_option( 'fax_number' ) );
    echo '<input type="tel" name="fax_number" value="'.$faxNumber.'" placeholder="123-4567-8901">';
}

function ct_custom_facebook_link_callback() {
    $facebook = esc_attr(get_option( 'facebook_link' ));
    echo '<input type="text" name="facebook_link" value="'.$facebook.'" placeholder="Facebook URL">';
}

function ct_custom_instagram_link_callback() {
    $instagram = esc_attr(get_option( 'instagram_link' ));
    echo '<input type="text" name="instagram_link" value="'.$instagram.'" placeholder="Instagram URL">';
}

function ct_custom_youtube_link_callback() {
    $youtube = esc_attr(get_option( 'youtube_link' ));
    echo '<input type="text" name="youtube_link" value="'.$youtube.'" placeholder="YouTube URL">';
}

function ct_custom_linkedin_link_callback() {
    $linkedin = esc_attr(get_option( 'linkedin_link' ));
    echo '<input type="text" name="linkedin_link" value="'.$linkedin.'" placeholder="LinkedIn URL">';
}

function ct_custom_twitter_link_callback() {
    $twitter = esc_attr(get_option( 'twitter_link' ));
    echo '<input type="text" name="twitter_link" value="'.$twitter.'" placeholder="Twitter URL">';
}