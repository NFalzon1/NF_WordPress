<?php 

function classExample_assets(){
    wp_enqueue_style(
        'classExample-stylesheet',
        get_template_directory_url().'/assets/css/style.css',
        array(),
        '1.0.0',
        'all'
    );

    wp_enqueue_style(
        'classExample-stylesheet',
        get_template_directory_url().'/assets/css/wpcore.css',
        array(),
        '1.0.0',
        'all'
    );

    wp_enqueue_style(
        'classExample-stylesheet',
        get_template_directory_url().'/assets/css/bootstrap.css',
        array(),
        '1.0.0',
        'all'
    ); //add the bootstrap css file in the folder

    wp_enqueue_script(
        'classExample_bs_script',
        get_template_directory_url().'/assets/js/bootstrap.js',
        array(),
        '1.0.0',
        true
    );

    wp_enqueue_script('jquery');


    }
    add_action('wp_enqueue_scripts','classExample_assets');

?>