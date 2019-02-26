<?php

/**
 * Demo Plugin Options
 */

class Build_Plugin_Options {

    public function jp_get_sections() {
        return array(
            array(
                'id'    => 'basic_options',
                'title' => __( 'Basic Settings', 'spo' )
            ),
            array(
                'id'    => 'advanced_options',
                'title' => __( 'Advanced Settings', 'spo' )
            )
        );
    }

    public function jp_get_settings_fields() {
        return array(
            'basic_options' => array(
                array(
                    'name'              => 'text_val',
                    'label'             => __( 'Text Input', 'spo' ),
                    'desc'              => __( 'Text input description', 'spo' ),
                    'placeholder'       => __( 'Text Input placeholder', 'spo' ),
                    'type'              => 'text',
                    'default'           => 'Title',
                    'sanitize_callback' => 'sanitize_text_field'
                ),
                array(
                    'name'              => 'number_input',
                    'label'             => __( 'Number Input', 'spo' ),
                    'desc'              => __( 'Number field with validation callback `floatval`', 'spo' ),
                    'placeholder'       => __( '1.99', 'spo' ),
                    'min'               => 0,
                    'max'               => 100,
                    'step'              => '0.01',
                    'type'              => 'number',
                    'default'           => 'Title',
                    'sanitize_callback' => 'floatval'
                ),
                array(
                    'name'        => 'textarea',
                    'label'       => __( 'Textarea Input', 'spo' ),
                    'desc'        => __( 'Textarea description', 'spo' ),
                    'placeholder' => __( 'Textarea placeholder', 'spo' ),
                    'type'        => 'textarea'
                ),
                array(
                    'name'        => 'html',
                    'desc'        => __( 'HTML area description. You can use any <strong>bold</strong> or other HTML elements.', 'spo' ),
                    'type'        => 'html'
                ),
                array(
                    'name'  => 'checkbox',
                    'label' => __( 'Checkbox', 'spo' ),
                    'desc'  => __( 'Checkbox Label', 'spo' ),
                    'type'  => 'checkbox'
                ),
                array(
                    'name'    => 'radio',
                    'label'   => __( 'Radio Button', 'spo' ),
                    'desc'    => __( 'A radio button', 'spo' ),
                    'type'    => 'radio',
                    'options' => array(
                        'yes' => 'Yes',
                        'no'  => 'No'
                    )
                ),
                array(
                    'name'    => 'selectbox',
                    'label'   => __( 'A Dropdown', 'spo' ),
                    'desc'    => __( 'Dropdown description', 'spo' ),
                    'type'    => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => 'Yes',
                        'no'  => 'No'
                    )
                ),
                array(
                    'name'    => 'password',
                    'label'   => __( 'Password', 'spo' ),
                    'desc'    => __( 'Password description', 'spo' ),
                    'type'    => 'password',
                    'default' => ''
                ),
                array(
                    'name'    => 'file',
                    'label'   => __( 'File', 'spo' ),
                    'desc'    => __( 'File description', 'spo' ),
                    'type'    => 'file',
                    'default' => '',
                    'options' => array(
                        'button_label' => 'Choose Image'
                    )
                )
            ),
            'advanced_options' => array(
                array(
                    'name'    => 'color',
                    'label'   => __( 'Color', 'spo' ),
                    'desc'    => __( 'Color description', 'spo' ),
                    'type'    => 'color',
                    'default' => ''
                ),
                array(
                    'name'    => 'password',
                    'label'   => __( 'Password', 'spo' ),
                    'desc'    => __( 'Password description', 'spo' ),
                    'type'    => 'password',
                    'default' => ''
                ),
                array(
                    'name'    => 'wysiwyg',
                    'label'   => __( 'Advanced Editor', 'spo' ),
                    'desc'    => __( 'WP_Editor description', 'spo' ),
                    'type'    => 'wysiwyg',
                    'default' => ''
                ),
                array(
                    'name'    => 'multicheck',
                    'label'   => __( 'Multile checkbox', 'spo' ),
                    'desc'    => __( 'Multi checkbox description', 'spo' ),
                    'type'    => 'multicheck',
                    'default' => array('one' => 'one', 'four' => 'four'),
                    'options' => array(
                        'one'   => 'One',
                        'two'   => 'Two',
                        'three' => 'Three',
                        'four'  => 'Four'
                    )
                ),
            )
        );
        // end of the plugin settings field

    }
}