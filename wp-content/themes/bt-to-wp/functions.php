<?php

    function b2w_theme_style(){

        wp_enqueue_style('bootstrap_css',get_template_directory_uri().'/css/bootstrap.min.css');

        wp_enqueue_style('style_css',get_template_directory_uri().'/style.css');

    }

    add_action('wp_enqueue_scripts','b2w_theme_style');

    function b2w_theme_js(){

        wp_enqueue_style('bootstrap_js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'',true);

        wp_enqueue_style('jqBootstrapValidation_js',get_template_directory_uri().'/js/jqBootstrapValidation.js',array('jquery'),'',true);

        wp_enqueue_style('contact_me_js',get_template_directory_uri().'/js/contact_me.js',array('jquery'),'',true);

        wp_enqueue_style('freelancer_js',get_template_directory_uri().'/js/freelancer.js',array('jquery'),'',true);

    }

    add_action('wp_enqueue_scripts','b2w_theme_js');

?>