<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    function is_json($string) {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE) ? TRUE : FALSE;
    }
?>