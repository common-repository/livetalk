<?php

/*
 * Add link to plugin configuration on admin
*/

if ( is_admin() ) {
  add_action( 'admin_menu', 'ltk_admin_menu_item' );
  add_action( 'admin_init', 'ltk_register_settings' );
} 

function ltk_admin_menu_item() {
  add_menu_page(
    'LiveTalk',
    'LiveTalk',
    'administrator',
    __FILE__,
    'ltk_Livetalk_Page'
  );
}

// register input in the whitelist
function ltk_register_settings() {
  register_setting( 'ltk-group', 'ltk_token' );
}


/*
 * Add livetalk snippet to all pages
 */

add_action( 'wp_head', 'ltk_add_livetalk_snippet' );

function ltk_add_livetalk_snippet() {
  $token = get_option('ltk_token');
  if (strlen($token) > 0) {
    wp_enqueue_script(
      'LivetalkChatbot',
      "https://app.livetalk.com.br/client/lib/{$token}/livetalk.min.js"
    );
  }
}

/*
 * Show settings page
 */

function ltk_Livetalk_Page() {
  require_once plugin_dir_path(__FILE__) . 'ltk-page.php';
}