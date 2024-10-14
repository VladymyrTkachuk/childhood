<?php

add_action('wp_enqueue_scripts', 'childhood_scripts');


// add_filter('wp_kses_allowed_html', 'acf_add_allowed_iframe_tag, 10, 2');
// function acf_add_allowed_iframe_tag( $tags, $context ) {
//         if ($context === 'acf') {
//             $tags['iframe'] = array(
//                 'src'             => true,
//                 'height'          => true,
//                 'width'           => true,
//                 'frameborder'     => true,
//                 'allowfullscreen' => true,
//             );
            
//             return $tags;
//         }

// }

// add_filter( 'wp_kses_allowed_html', 'acf_add_allowed_iframe_tag', 10, 2 );
// function acf_add_allowed_iframe_tag( $tags, $context ) {
//     if ( $context === 'post' ) {
//         $tags['iframe'] = array(
//             'src'             => true,
//             'height'          => true,
//             'width'           => true,
//             'frameborder'     => true,
//             'allowfullscreen' => true,
//         );
//     }

//     return $tags;
// }



function childhood_scripts() {
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );

    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );



function permitir_iframes_en_descripciones_de_categoria( $allowedposttags ) {
    $allowedposttags['iframe'] = array(
        'src' => array(),
        'width' => array(),
        'height' => array(),
        'frameborder' => array(),
        'allowfullscreen' => array(),
    );

    return $allowedposttags;
}
add_filter( 'wp_kses_allowed_html', 'permitir_iframes_en_descripciones_de_categoria', 10, 1 );


// // add_action('wp_enqueue_scripts', 'childhood_styles');

// function custom_wpkses_post_tags( $tags, $context ) {

// 	if ( 'post' === $context ) {
// 		$tags['iframe'] = array(
// 			'src'             => true,
// 			'height'          => true,
// 			'width'           => true,
// 			'frameborder'     => true,
// 			'allowfullscreen' => true,
// 		);
// 	}

// 	return $tags;
// }

// add_filter( 'wp_kses_allowed_html', 'custom_wpkses_post_tags', 10, 2 );

// add_action('wp_enqueue_scripts', 'childhood_scripts');

// function childhood_styles () {
//     wp_enqueue_style('childhood_style', get_stylesheet_uri());
//     // wp_enqueue_style('header_style', get_template_directory_uri() . '/assets/styles/main.min.css');
//     // wp_enqueue_style('animate_style', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');

// };

// function childhood_scripts () {
//     wp_enqueue_script('childhood_scripts', get_template_directory_uri() . '/assets/js/main.min.js',
//     array(), null, true);

// };
// add_theme_support( 'custom-logo' );

?>