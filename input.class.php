<?php
class input{
    function post($key){
        $val = $_POST[$key];
        return $val;
    }
}