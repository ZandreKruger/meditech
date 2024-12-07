<?php
/**
 * Header HTML2 Options
 *
 * @package CoderPlace
 */

namespace CoderPlace;

use Base\Theme_Customizer;
use function Base\webapp;

$settings = array(
	'header_html2_tabs' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'header_html2',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'coderplace-core' ),
				'target' => 'header_html2',
			),
			'design' => array(
				'label'  => __( 'Design', 'coderplace-core' ),
				'target' => 'header_html2_design',
			),
			'active' => 'general',
		),
	),
	'header_html2_tabs_design' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'header_html2_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'coderplace-core' ),
				'target' => 'header_html2',
			),
			'design' => array(
				'label'  => __( 'Design', 'coderplace-core' ),
				'target' => 'header_html2_design',
			),
			'active' => 'design',
		),
	),
	'header_html2_content' => array(
		'control_type' => 'base_editor_control',
		'sanitize'     => 'wp_kses_post',
		'section'      => 'header_html2',
		'priority'     => 4,
		'default'      => webapp()->default( 'header_html2_content' ),
		'partial'      => array(
			'selector'            => '.header-html2',
			'container_inclusive' => true,
			'render_callback'     => 'CoderPlace\header_html2',
		),
		'input_attrs'  => array(
			'id' => 'header_html2',
		),
	),
	'header_html2_wpautop' => array(
		'control_type' => 'base_switch_control',
		'section'      => 'header_html2',
		'default'      => webapp()->default( 'header_html2_wpautop' ),
		'label'        => esc_html__( 'Automatically Add Paragraphs', 'coderplace-core' ),
		'partial'      => array(
			'selector'            => '.header-html2',
			'container_inclusive' => true,
			'render_callback'     => 'CoderPlace\header_html2',
		),
	),
	'header_html2_typography' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'header_html2_design',
		'label'        => esc_html__( 'Font', 'coderplace-core' ),
		'default'      => webapp()->default( 'header_html2_typography' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '#main-header .header-html2',
				'pattern'  => array(
					'desktop' => '$',
					'tablet'  => '$',
					'mobile'  => '$',
				),
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id' => 'header_html2_typography',
		),
	),
	'header_html2_link_style' => array(
		'control_type' => 'base_select_control',
		'section'      => 'header_html2_design',
		'default'      => webapp()->default( 'header_html2_link_style' ),
		'label'        => esc_html__( 'Link Style', 'coderplace-core' ),
		'input_attrs'  => array(
			'options' => array(
				'normal' => array(
					'name' => __( 'Underline', 'coderplace-core' ),
				),
				'plain' => array(
					'name' => __( 'No Underline', 'coderplace-core' ),
				),
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '#main-header .header-html2',
				'pattern'  => 'inner-link-style-$',
				'key'      => '',
			),
		),
	),
	'header_html2_link_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'header_html2_design',
		'label'        => esc_html__( 'Link Colors', 'coderplace-core' ),
		'default'      => webapp()->default( 'header_html2_link_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-html2 a',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-html2 a:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Initial Color', 'coderplace-core' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Hover Color', 'coderplace-core' ),
					'palette' => true,
				),
			),
		),
	),
	'header_html2_margin' => array(
		'control_type' => 'base_measure_control',
		'section'      => 'header_html2_design',
		'priority'     => 10,
		'default'      => webapp()->default( 'header_html2_margin' ),
		'label'        => esc_html__( 'Margin', 'coderplace-core' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-html2',
				'property' => 'margin',
				'pattern'  => '$',
				'key'      => 'measure',
			),
		),
		'input_attrs'  => array(
			'responsive' => false,
		),
	),
	'transparent_header_html2_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'transparent_header_design',
		'label'        => esc_html__( 'HTML2 Colors', 'coderplace-core' ),
		'default'      => webapp()->default( 'transparent_header_html2_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .header-html2,.mobile-transparent-header .mobile-html2',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .header-html2 a, .mobile-transparent-header .mobile-html2 a',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'link',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .header-html2 a:hover, .mobile-transparent-header .mobile-html2 a:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Color', 'coderplace-core' ),
					'palette' => true,
				),
				'link' => array(
					'tooltip' => __( 'Link Color', 'coderplace-core' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Link Hover', 'coderplace-core' ),
					'palette' => true,
				),
			),
		),
	),
);

Theme_Customizer::add_settings( $settings );

