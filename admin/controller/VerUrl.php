<?php
class VerUrl{
    function trocar_url($url){
        if(empty($url)){
            $url = "secoes/cadComida.php";
        } else {
            $url = "secoes/$url.php";
        }
        include_once($url);
    }
}