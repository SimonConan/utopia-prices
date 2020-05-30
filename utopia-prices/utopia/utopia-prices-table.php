<?php

    add_shortcode('UTOPIA_Prices', 'utopia_prices');

    function utopia_prices() {

        // Register style sheet.
        add_action( 'wp_enqueue_scripts', 'register_utopia_prices_styles' );
        do_action( 'wp_enqueue_scripts');

        ob_start();
        include UTOPIA_PLUGIN_PATH . "utopia/assets/template.html";
        return ob_get_clean();

    }

    function register_utopia_prices_styles() {
        wp_register_style( 'utopia-prices', UTOPIA_PLUGIN_URL . '/utopia/assets/css/main.css' );
        wp_enqueue_style( 'utopia-prices' );
    }
  