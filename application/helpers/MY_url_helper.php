<?php
if (!function_exists('base_url')) {
    function base_url($uri = '') {
        $CI =& get_instance();
        return $CI->config->base_url($uri);
    }
}
