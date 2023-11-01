<?php

function classExample_sidebar_widgets()
{
    register_sidebar(
        array(
            'id' => 'primary-sidebar',
            'name' => 'Primary Sidebar',
            'description' => 'Sidebar for blog posts page',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">',
            'after_widget' => '</section>',
        )
    );

    register_sidebar(
        array(
            'id' => 'second-sidebar',
            'name' => 'Second Sidebar',
            'description' => 'Second Sidebar Desc',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">',
            'after_widget' => '</section>',
        )
    );

    register_sidebar(
        array(
            'id' => 'footer-1-sidebar',
            'name' => 'Footer 1 Sidebar',
            'description' => 'Footer 1 Sidebar ',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">',
            'after_widget' => '</section>',
        )
    );
    register_sidebar(
        array(
            'id' => 'footer-2-sidebar',
            'name' => 'Footer 2 Sidebar',
            'description' => 'Footer 2 Sidebar ',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">',
            'after_widget' => '</section>',
        )
    );
    register_sidebar(
        array(
            'id' => 'footer-3-sidebar',
            'name' => 'Footer 3 Sidebar',
            'description' => 'Footer 3 Sidebar ',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">',
            'after_widget' => '</section>',
        )
    );
    register_sidebar(
        array(
            'id' => 'footer-4-sidebar',
            'name' => 'Footer 4 Sidebar',
            'description' => 'Footer 4 Sidebar ',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">',
            'after_widget' => '</section>',
        )
    );
}

add_action('widgets_init', 'classExample_sidebar_widgets');
?>