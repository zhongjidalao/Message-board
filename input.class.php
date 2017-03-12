<?php
class input{
    function post($key){
        if(isset($_POST[$key]) === false){
            return false;
        }
        $val = $_POST[$key];
        return $val;
    }
    function get($key){
        if(isset($_GET[$key]) === false){
            return false;
        }
        $val = $_GET[$key];
        return $val;
    }
}