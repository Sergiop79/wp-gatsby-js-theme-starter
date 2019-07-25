<?php
add_theme_support( 'custom-logo' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

// Automatic rebuild gatsby site on netlify whe update WordPress

// add_action( 'save_post', 'gatsby_netlify_rebuild' );
// function gatsby_netlify_rebuild() {
//     $netlify_web_hook_url = 'https://api.netlify.com/build_hooks/YOUR_BUILD_HOOK_URL';
//     wp_remote_post( $netlify_web_hook_url );
// }