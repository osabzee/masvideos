<?php
/**
 * The Landing Page v2 Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package vodi
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php do_action( 'vodi_before_site' ); ?>

<div id="page" class="hfeed site">

    <?php do_action( 'vodi_before_header' ); ?>

	<header class="site-header">
        <div class="masthead">
    	    <div class="container-fluid">
                <div class="site-header__inner">
                    
                    <?php
                    /**
                     * Functions hooked into vodi_header_landing_v2 action
                     *
                     */
                    do_action( 'vodi_header_landing_v2' ); ?>
                </div>    
    	    </div>
        </div>    
    </header>

    <?php
    do_action( 'vodi_before_content' );
    ?>

    <div class="site-content">
        
        <div class="site-content__inner"> 