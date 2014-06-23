<?php
/**
 * Plugin Name: JetPack Development Mode
 * Plugin URI:  http://wordpress.stackexchange.com/a/144317/26350
 * Description: A Wordpress Plugin to allow you to run Jetpack for Wordpress behind a firewall or on a local development site where remote activation is not possible.
 * Author: Cody Mays
 * Author URI: http://www.codymays.net
 * Version:     1.0.0
 */

if(in_array( 'jetpack/jetpack.php', get_option( 'active_plugins', array() ) ))
{
        add_filter( 'jetpack_development_mode', '__return_true' );
}

