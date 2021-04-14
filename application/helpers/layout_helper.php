<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (! function_exists('add_assets')) {
    function add_assets($pos, $params) {
        $ci = &get_instance();
        if(!is_array($params)){$params = array($params);}
        $ci->config->set_item($pos, $params);
        return;
    }
}

if (! function_exists('header_assets')) {
    function header_assets($str='') {
        $ci = &get_instance();
        $headers = $ci->config->item('header');
        if(isset($headers) && !empty($headers)) {
            foreach($headers as $item) { 
                $str .= $item."\n";
            }
        }
        echo $str;
    }
}

if (! function_exists('footer_assets')) {
    function footer_assets($str='') {
        $ci = &get_instance();
        $footers = $ci->config->item('footer');
        if(isset($footers) && !empty($footers)) {
            foreach($footers as $item) {
                $str .= $item."\n";
            }
        }
        echo $str;
    }
}