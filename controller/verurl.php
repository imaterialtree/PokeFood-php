<?php
class VerUrl{
    function trocar_url($url){
        if(empty($url)){
            $url = "secoes/home.php";
        } else if(str_starts_with($url, "a-")){
            $url = "admin/".mb_substr($url, 2).".php";
        } else {
            $url = "secoes/$url.php";
        }
        include_once($url);
    }
}