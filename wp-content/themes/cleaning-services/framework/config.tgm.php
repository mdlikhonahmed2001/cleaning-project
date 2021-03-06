<?php
/*
 * TGM
 */

add_action('tgmpa_register', 'cleaning_services_register_required_plugins');

function cleaning_services_register_required_plugins() {


    $plugins = array(
        array(
            'name' => esc_html__('WPBakery Visual Composer', 'cleaning-services'),
            'slug' => 'js_composer', // The plugin slug (typically the folder name)
            'source' => get_template_directory() . '/framework/plugins/js_composer.zip', // The plugin source
            'required' => true, // If false, the plugin is only 'recommended' instead of required    
            'version' => '5.4.5',   
            'force_activation' => false, 
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
        ),
        array(
            'name' => esc_html__('Cleaning Services Core', 'cleaning-services'),
            'slug' => 'cleaning_services-core',
            'source' => get_template_directory() . '/framework/plugins/cleaning-services-core.zip', 
            'version' => '1.3', 
            'required' => true,           
            'force_activation' => false, 
            'force_deactivation' => false, 
            'external_url' => '', 
        ),
        array(
            'name' => esc_html__('Cleaning Services Demo Installer', 'cleaning-services'), // The plugin name
            'slug' => 'cleaning-services-demo-installer', // The plugin slug (typically the folder name)
            'source' => get_template_directory() . '/framework/plugins/cleaning-services-demo-installer.zip', // The plugin source
            'version' => '1.2', // E.g. 1.0.0. If set, the active
            'required' => true, // If false, the plugin is only 'recommended' instead of required            
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name' => esc_html__('Woocommerce', 'cleaning-services'), // The plugin name
            'slug' => 'woocommerce', // The plugin slug (typically the folder name)            
            'required' => true, // If false, the plugin is only 'recommended' instead of required
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' => '', // If set, overrides default API URL and points to an external URL
        ),
         array(
            'name' => esc_html__('Redux Framework', 'cleaning-services'), // The plugin name
            'slug' => 'redux-framework', // The plugin slug (typically the folder name)
            'required' => true, // If false, the plugin is only 'recommended' instead of required            
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name' => esc_html__('Meta Box', 'cleaning-services'), // The plugin name
            'slug' => 'meta-box', // The plugin slug (typically the folder name)
            'required' => true, // If false, the plugin is only 'recommended' instead of required            
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name' => esc_html__('Contact Form 7', 'cleaning-services'), // The plugin name
            'slug' => 'contact-form-7', // The plugin slug (typically the folder name)
            'required' => true, // If false, the plugin is only 'recommended' instead of required
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name' => esc_html__('Regenerate Thumbnails', 'cleaning-services'), // The plugin name
            'slug' => 'regenerate-thumbnails', // The plugin slug (typically the folder name)            
            'required' => false, // If false, the plugin is only 'recommended' instead of required
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name' => esc_html__('Yoast SEO', 'cleaning-services'), // The plugin name
            'slug' => 'wordpress-seo', // The plugin slug (typically the folder name)            
            'required' => false, // If false, the plugin is only 'recommended' instead of required
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' => '', // If set, overrides default API URL and points to an external URL
        ),
    );



    // Change this to your theme text domain, used for internationalising strings

    $config = array(
        'domain' => 'cleaning-services', // Text domain - likely want to be the same as your theme.
        'default_path' => '', // Default absolute path to pre-packaged plugins
        'parent_slug' => 'themes.php',
        'menu' => 'install-required-plugins', // Menu slug
        'has_notices' => true, // Show admin notices or not
        'is_automatic' => false, // Automatically activate plugins after installation or not
        'message' => '', // Message to output right before the plugins table
        'strings' => array(
            'page_title' => esc_html__('Install Required Plugins', 'cleaning-services'),
            'menu_title' => esc_html__('Install Plugins', 'cleaning-services'),
            'installing' => esc_html__('Installing Plugin: %s', 'cleaning-services'), // %1$s = plugin name
            'oops' => esc_html__('Something went wrong with the plugin API.', 'cleaning-services'),
            'notice_can_install_required' => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'cleaning-services'), // %1$s = plugin name(s)
            'notice_can_install_recommended' => _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'cleaning-services'), // %1$s = plugin name(s)
            'notice_cannot_install' => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'cleaning-services'), // %1$s = plugin name(s)
            'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'cleaning-services'), // %1$s = plugin name(s)
            'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'cleaning-services'), // %1$s = plugin name(s)
            'notice_cannot_activate' => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'cleaning-services'), // %1$s = plugin name(s)
            'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'cleaning-services'), // %1$s = plugin name(s)
            'notice_cannot_update' => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'cleaning-services'), // %1$s = plugin name(s)
            'install_link' => _n_noop('Begin installing plugin', 'Begin installing plugins', 'cleaning-services'),
            'activate_link' => _n_noop('Activate installed plugin', 'Activate installed plugins', 'cleaning-services'),
            'return' => esc_html__('Return to Required Plugins Installer', 'cleaning-services'),
            'plugin_activated' => esc_html__('Plugin activated successfully.', 'cleaning-services'),
            'complete' => esc_html__('All plugins installed and activated successfully. %s', 'cleaning-services'), // %1$s = dashboard link
            'nag_type' => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
        )
    );

    tgmpa($plugins, $config);
}
