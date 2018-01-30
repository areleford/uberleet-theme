<?php

function uber_navigation_menu() {
    register_nav_menu('my-custom-menu', __('My Custom Menu'));
}
add_action('init', 'uber_navigation_menu');