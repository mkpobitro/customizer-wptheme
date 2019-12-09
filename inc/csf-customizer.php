<?php 

function csf_customizer_options($options){

    $options[] = array(
        'name'      =>  'customizer_csf_section1',
        'title'     =>  __( 'Codestar Demo', 'customizer' ),
        'settings'  =>  array(
            'name'      => 'about-heading',
            'default'   => __( 'Demo Heading', 'customizer' ),
            'control'   => array(
                'label'     => __( 'About Heading', 'customizer' ),
                'type'      => 'text',
            ),
        ),
    );

    return $options;
}
add_filter( 'cs_customize_options', 'csf_customizer_options' );


