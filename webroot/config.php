<?php
/**
 * Config-file for Deus. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Deus paths.
 *
 */
define('DEUS_INSTALL_PATH', __DIR__ . '/..');
define('DEUS_THEME_PATH', DEUS_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(DEUS_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Deus variable.
 *
 */
$deus = array();
 
 /**
 * Theme related settings.
 *
 */
$deus['stylesheet'] = 'css/style.css';
$deus['favicon']    = 'favicon.ico';
 
/**
 * Site wide settings.
 *
 */
$deus['lang']         = 'sv';
$deus['title_append'] = ' | Deus en webbtemplate';

