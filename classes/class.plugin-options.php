<?php

/**
 * WordPress Plugin Sample Options
 *
 * @author Joydev Pal
 */
if ( !class_exists('Jp_Plugin_Options' ) ):

class Jp_Plugin_Options {

    private $settings_api;
    private $demo_options;

    function __construct() {
        $this->settings_api = new Jp_Plugin_Options_API;
        $this->demo_options = new Build_Plugin_Options;

        add_action( 'admin_init', array($this, 'admin_init') );
        add_action( 'admin_menu', array($this, 'admin_menu') );
    }

    function admin_init() {

        //set the settings
        $this->settings_api->set_sections( $this->get_settings_sections() );
        $this->settings_api->set_fields( $this->get_settings_fields() );

        //initialize settings
        $this->settings_api->admin_init();
    }

    function admin_menu() {
        add_options_page( 'Plugin Options', 'Plugin Options', 'delete_posts', 'sample_plugin_options', array($this, 'plugin_page') );
    }

    function get_settings_sections() {
        $sections = $this->demo_options->jp_get_sections();
        return $sections;
    }

    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    function get_settings_fields() {
        $settings_fields = $this->demo_options->jp_get_settings_fields();
        return $settings_fields;
    }

    function plugin_page() {
        echo '<div class="wrap">';

        $this->settings_api->show_navigation();
        $this->settings_api->show_forms();

        echo '</div>';
    }

    /**
     * Get all the pages
     *
     * @return array page names with key value pairs
     */
    function get_pages() {
        $pages = get_pages();
        $pages_options = array();
        if ( $pages ) {
            foreach ($pages as $page) {
                $pages_options[$page->ID] = $page->post_title;
            }
        }

        return $pages_options;
    }

}
endif;
