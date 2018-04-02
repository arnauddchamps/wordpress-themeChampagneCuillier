<?php

//===================================================================================
//=================== CHARGEMENT DES SCRIPTS
//===================================================================================
define('ADCUILLIER_VERSION', '1.0.2');

//chargement dans le front-end

function adcuillier_scripts() {
    //chargement des styles
    wp_enqueue_style( 'adcuillier_bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), ADCUILLIER_VERSION , 'all' );
    wp_enqueue_style( 'adcuillier_custom', get_template_directory_uri() . '/style.css', array('adcuillier_bootstrap-core'), ADCUILLIER_VERSION , 'all' );
    //chargement des scripts
    wp_enqueue_script( 'adcuillier_script', get_template_directory_uri() . '/js/adcuillier.js', array('jquery'), ADCUILLIER_VERSION , true );
    

} //fin function adcuillier_scripts

add_action('wp_enqueue_scripts', 'adcuillier_scripts');


//chargement dans l'admin
function adcuillier_admin_scripts() {
    //chargement des styles
    wp_enqueue_style('bootstrap-adm-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), ADCUILLIER_VERSION );

}//fin de la function
add_action('admin_init', 'adcuillier_admin_scripts');


//===================================================================================
//=================== UTILITAIRES
//===================================================================================

function adcuillier_setup() {
    //support des vignettes
    add_theme_support( 'post-thumbnails' );
    //enlève générateur de version
    remove_action('wp_head', 'wp_generator');

}//fin de la function adcuillier_setup

add_action('after_setup_theme', 'adcuillier_setup');