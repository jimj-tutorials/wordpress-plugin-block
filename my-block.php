<?php
/**
 * Plugin Name: My Block
 */

add_action( 'init', function() {
    register_block_type(
        plugin_dir_path( __FILE__ ) . 'build/my-block'
    );
} );