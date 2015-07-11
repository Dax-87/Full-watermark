<?php
// Field Array
$font_setting_meta_fields = array(
	
	array(
		'label'=> __('Image sizes', 'mnbaa_watermark'),
		'desc'  => '',
		'name'    => 'img_sizes[]',
		'type'  => 'checkbox'
		),
    
);

$img_upload_setting_meta_fields = array(
	array(
		'label'  => __('Immagine', 'mnbaa_watermark'),
		'desc'  => 'A description for the field.',
		'name'    => 'image',
		'type'  => 'image'
	)
	,array(
			'label' => __('Rotazione immagine', 'mnbaa_watermark'),
			'desc' => __('Inserire il valore dell\'angolo di rotazione', 'mnbaa_watermark'),
			'type' => 'text',
			'name' => 'img_rotation'
			
		),
    array(
        'label' => __('Trasparenza immagine', 'mnbaa_watermark'),
        'desc' => '',
        'type' => 'select',
        'name' => 'img_opicity',
    ),
    array(
        'label' => __('Posizione immagine', 'mnbaa_watermark'),
        'desc' => __('Posizione del watermark', 'mnbaa_watermark'),
        'type' => 'select',
        'name' => 'img_position',
		'options' => array (
            'one' => array (
                'label' => __('top', 'mnbaa_watermark'),
                'value' => 'top'
            ),
            'two' => array (
                'label' =>  __('bottom', 'mnbaa_watermark'),
                'value' => 'bottom'
            ),
            'three' => array (
                'label' =>  __('top left', 'mnbaa_watermark'),
                'value' => 'bottom left'
            ),
            'four' => array (
                'label' =>  __('bottom left', 'mnbaa_watermark'),
                'value' => 'bottom left'
            )
        )
    ),
    array(
        'label' => __('Dimensione Immagine', 'mnbaa_watermark'),
        'desc' => __('dimensione immagine', 'mnbaa_watermark'),
        'type' => 'select',
        'name' => 'img_size',
		'options' => array (
            'one' => array (
                'label' => '1/4',
                'value' => '4'
            ),
            'two' => array (
                'label' =>  '1/3',
                'value' => '3'
            ),
            'three' => array (
                'label' =>  '1/2',
                'value' => '2'
            ),
            'fourth' => array (
                'label' =>  __('Dimensione reale', 'mnbaa_watermark'),
                'value' => '1'
            )
        )
    ),array(
			'label' => __('Distanza orizzontale', 'mnbaa_watermark'),
			'desc' => '',
			'type' => 'text',
			'name' => 'img_destance_x'
			
	),array(
			'label' => __('Distanza verticale', 'mnbaa_watermark'),
			'desc' => '',
			'type' => 'text',
			'name' => 'img_padding'
			
		)
);
		
		$img_upload_setting_1_meta_fields = array(
	array(
		'label'  => __('Immagine', 'mnbaa_watermark'),
		'desc'  => 'A description for the field.',
		'name'    => 'image',
		'type'  => 'image'
	)
	,array(
			'label' => __('Rotazione immagine', 'mnbaa_watermark'),
			'desc' => __('Inserire il valore dell\'angolo di rotazione', 'mnbaa_watermark'),
			'type' => 'text',
			'name' => 'img_rotation'
			
		),
    array(
        'label' => __('Trasparenza immagine', 'mnbaa_watermark'),
        'desc' => '',
        'type' => 'select',
        'name' => 'img_opicity',
    ),
    array(
        'label' => __('Posizione immagine', 'mnbaa_watermark'),
        'desc' => __('Posizione del watermark', 'mnbaa_watermark'),
        'type' => 'select',
        'name' => 'img_position',
		'options' => array (
            'one' => array (
                'label' => __('top', 'mnbaa_watermark'),
                'value' => 'top'
            ),
            'two' => array (
                'label' =>  __('bottom', 'mnbaa_watermark'),
                'value' => 'bottom'
            ),
            'three' => array (
                'label' =>  __('top left', 'mnbaa_watermark'),
                'value' => 'bottom left'
            ),
            'four' => array (
                'label' =>  __('bottom left', 'mnbaa_watermark'),
                'value' => 'bottom left'
            )
        )
    ),
    array(
        'label' => __('Dimensione Immagine', 'mnbaa_watermark'),
        'desc' => __('dimensione immagine', 'mnbaa_watermark'),
        'type' => 'select',
        'name' => 'img_size',
		'options' => array (
            'one' => array (
                'label' => '1/4',
                'value' => '4'
            ),
            'two' => array (
                'label' =>  '1/3',
                'value' => '3'
            ),
            'three' => array (
                'label' =>  '1/2',
                'value' => '2'
            ),
            'fourth' => array (
                'label' =>  __('Dimensione reale', 'mnbaa_watermark'),
                'value' => '1'
            )
        )
    ),array(
			'label' => __('Distanza orizzontale', 'mnbaa_watermark'),
			'desc' => '',
			'type' => 'text',
			'name' => 'img_destance_x'
			
	),array(
			'label' => __('Distanza verticale', 'mnbaa_watermark'),
			'desc' => '',
			'type' => 'text',
			'name' => 'img_padding'
			
		)
);


?>