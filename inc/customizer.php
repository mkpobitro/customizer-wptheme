<?php

function cust_customize_register($wp_customize){
/**
 * Service Section
 */
	$wp_customize->add_section( 'cust_service', array(
		'title'		=> __( 'Services','customizer' ),
		'priority'	=> '40',
		'active_callback'	=> function(){
			return is_page_template('page-templates/landing.php');
		}
	) );
	//Service heading
	$wp_customize->add_setting( 'cust_service_heading', array(
		'default'	=> __('Our Mission Statement', 'customizer'),
		'transport'	=> 'postMessage', // refresh
		// 'type'		=> 'option', // default: theme_mod
	));
	$wp_customize->add_control( 'cust_service_heading_ctrl', array(
		'label'		=> __('Service Heading Title', 'customizer'),
		'type'		=> 'text',
		'section'	=> 'cust_service',
		'settings'	=> 'cust_service_heading',
	) );

	//Service Sub heading
	$wp_customize->add_setting( 'cust_service_subheading', array(
		'default'	=> __('', 'customizer'),
		'transport'	=> 'refresh', // postMessage
		// 'type'		=> 'option', // default: theme_mod
	));
	$wp_customize->add_control( 'cust_service_subheading_ctrl', array(
		'label'		=> __('Service Sub Heading', 'customizer'),
		'type'		=> 'textarea',
		'section'	=> 'cust_service',
		'settings'	=> 'cust_service_subheading',
		'active_callback'	=> 'display_service_subheading',
		// 'active_callback'	=> 	function(){
		// 	if(get_theme_mod('cust_service_display_subheading',1)){
		// 		return true;
		// 	}
		// }
	) );

	function display_service_subheading(){
		if(get_theme_mod('cust_service_display_subheading',1)){
			return true;
		}
	}

	//Service Sub heading Display
	$wp_customize->add_setting( 'cust_service_display_subheading', array(
		'default'	=> 1,
		'transport'	=> 'refresh', // postMessage
		// 'type'		=> 'option', // default: theme_mod
	));
	$wp_customize->add_control( 'cust_service_display_subheading_ctrl', array(
		'label'		=> __('Display Service Sub Heading', 'customizer'),
		'type'		=> 'checkbox',
		'section'	=> 'cust_service',
		'settings'	=> 'cust_service_display_subheading',
	) );

	//Service Color
	$wp_customize->add_setting( 'cust_service_icon_color', array(
		'default'	=> '#dd2d6a',
		'transport'	=> 'postMessage', //refresh
		// 'type'		=> 'option', // default: theme_mod
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'cust_service_icon_color_ctrl', array(
		'label'		=> __('Color Icon', 'customizer'),
		'section'	=> 'cust_service',
		'settings'	=> 'cust_service_icon_color',
	) ));

	
	//Service Number Rows
	$wp_customize->add_setting( 'cust_service_number_row', array(
		'default'	=> 'col-md-4',
		'transport'	=> 'refresh', // postMessage
		// 'type'		=> 'option', // default: theme_mod
	));
	$wp_customize->add_control( 'cust_service_number_row_ctrl', array(
		'label'		=> __('Service Column Row', 'customizer'),
		'section'	=> 'cust_service',
		'settings'	=> 'cust_service_number_row',
		'type'		=> 'select',
		'choices'	=> array(
			'col-md-4'	=> __('3 in Each Row', 'customizer'),
			'col-md-6'	=> __('2 in Each Row', 'customizer'),
		)
	) );





/**
 * About Page Section
 */

	$wp_customize->add_section( 'cust_about', array(
		'title'		=> __( 'About Page','customizer' ),
		'priority'	=> '40',
		'active_callback'	=> function(){
			// if()is_page_template( 'page-templates/about.php' ){
			// 	return true;
			// }
			return is_page_template('page-templates/about.php');
		}
	) );
	//Service heading
	$wp_customize->add_setting( 'cust_about_heading', array(
		'default'	=> __('About Page Heading', 'customizer'), 
		'transport'	=> 'refresh', // refresh
		// 'type'		=> 'option', // default: theme_mod
	));
	$wp_customize->add_control( 'cust_service_heading_ctrl', array(
		'label'		=> __('About Heading Title', 'customizer'),
		'type'		=> 'text',
		'section'	=> 'cust_about',
		'settings'	=> 'cust_about_heading',
	) );






/**
 * Others Demo Section
 */

	 $wp_customize->add_section( 'cust_demo', array(
		 'title'	=> __( 'Other Demo Section', 'customizer' ),
		 'priority'	=> '40',
	 ) );

	//radio
	$wp_customize->add_setting( 'cust_demo_radio', array(
		'default'	=> 'choice-2',
		'transport'	=> 'refresh', // postMessage
		// 'type'		=> 'option', // default: theme_mod
	));
	$wp_customize->add_control( 'cust_demo_radio_ctrl', array(
		'label'		=> __('Radio Button', 'customizer'),
		'type'		=> 'radio',
		'section'	=> 'cust_demo',
		'settings'	=> 'cust_demo_radio',
		'choices'	=> array(
			'choice-1'	=> __( 'Choice 1', 'customizer' ),
			'choice-2'	=> __( 'Choice 2', 'customizer' ),
			'choice-3'	=> __( 'Choice 3', 'customizer' ),
			'choice-4'	=> __( 'Choice 4', 'customizer' ),
		),
	) );

	
	//select
	$wp_customize->add_setting( 'cust_demo_select', array(
		'default'	=> 'select-3',
		'transport'	=> 'refresh', // postMessage
		// 'type'		=> 'option', // default: theme_mod
	));
	$wp_customize->add_control( 'cust_demo_select_ctrl', array(
		'label'		=> __('Select Button', 'customizer'),
		'type'		=> 'select',
		'section'	=> 'cust_demo',
		'settings'	=> 'cust_demo_select',
		'choices'	=> array(
			'select-1'	=> __( 'Select 1', 'customizer' ),
			'select-2'	=> __( 'Select 2', 'customizer' ),
			'select-3'	=> __( 'Select 3', 'customizer' ),
			'select-4'	=> __( 'Select 4', 'customizer' ),
		),
	) );


	//dropdown pages
	$wp_customize->add_setting( 'cust_demo_dropdown_pages', array(
		'default'	=> 'select-3',
		'transport'	=> 'refresh', // postMessage
		// 'type'		=> 'option', // default: theme_mod
	));
	$wp_customize->add_control( 'cust_demo_dropdown_pages_ctrl', array(
		'label'		=> __('Available Pages', 'customizer'),
		'type'		=> 'dropdown-pages',
		'section'	=> 'cust_demo',
		'settings'	=> 'cust_demo_dropdown_pages',
		'allow_addition'	=> true,
	) );



	//number
	$wp_customize->add_setting( 'cust_demo_number', array(
		'default'	=> '12',
		'transport'	=> 'refresh', // postMessage
		// 'type'		=> 'option', // default: theme_mod
	));
	$wp_customize->add_control( 'cust_demo_number_ctrl', array(
		'label'		=> __('Number(10 - 22)', 'customizer'),
		'type'		=> 'number',
		'section'	=> 'cust_demo',
		'settings'	=> 'cust_demo_number',
		'input_attrs'=> array(
			'min'	=> 10,
			'max'	=> 22,
			'step'	=> 2,
		)
	) );


	//number
	$wp_customize->add_setting( 'cust_demo_range', array(
		'default'	=> '',
		'transport'	=> 'refresh', // postMessage
		// 'type'		=> 'option', // default: theme_mod
	));
	$wp_customize->add_control( 'cust_demo_range_ctrl', array(
		'label'		=> __('Range', 'customizer'),
		'type'		=> 'range',
		'section'	=> 'cust_demo',
		'settings'	=> 'cust_demo_range',
		
	) );


	//search
	$wp_customize->add_setting( 'cust_demo_search', array(
		'default'	=> __('Hello', 'customizer'),
		'transport'	=> 'refresh', // postMessage
		// 'type'		=> 'option', // default: theme_mod
	));
	$wp_customize->add_control( 'cust_demo_search_ctrl', array(
		'label'		=> __('Search', 'customizer'),
		'type'		=> 'search',
		'section'	=> 'cust_demo',
		'settings'	=> 'cust_demo_search',
		
	) );


	//week
	$wp_customize->add_setting( 'cust_demo_week', array(
		'default'	=> __('', 'customizer'),
		'transport'	=> 'refresh', // postMessage
		// 'type'		=> 'option', // default: theme_mod
	));
	$wp_customize->add_control( 'cust_demo_week_ctrl', array(
		'label'		=> __('Week', 'customizer'),
		'type'		=> 'week',
		'section'	=> 'cust_demo',
		'settings'	=> 'cust_demo_week',
		
	) );


	//time
	$wp_customize->add_setting( 'cust_demo_time', array(
		'default'	=> __('', 'customizer'),
		'transport'	=> 'refresh', // postMessage
		// 'type'		=> 'option', // default: theme_mod
	));
	$wp_customize->add_control( 'cust_demo_time_ctrl', array(
		'label'		=> __('Time', 'customizer'),
		'type'		=> 'time',
		'section'	=> 'cust_demo',
		'settings'	=> 'cust_demo_time',
		
	) );

}
add_action( 'customize_register', 'cust_customize_register' );