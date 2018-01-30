<?php
  add_action('wp_head', 'enqueue_style');

  function enqueue_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
  }
?>
