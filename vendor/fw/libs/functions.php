<?php

function debug($arr, $die = false){
    echo "<pre>";
    var_dump($arr);
    echo '</pre>';
    if($die)
        die;
}

function redirect($http = false){
    if($http){
        $redirect = $http;
    }else{
        $redirect = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '/';
    }
    header("Location: $redirect");
    exit;
}

function h($str){
    return htmlspecialchars($str,ENT_QUOTES);
}

function __($key){
    echo fw\core\base\Lang::get($key);
}