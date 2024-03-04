<?php
class VerUrl{
    function trocar_url($url){
        if(empty($url)){
            $url = "secoes/home.php";
        } else if(str_starts_with($url, "a-")){
            if ($url == "a-login") {
                $url = "admin/index.php";
            } else {
                $url = "admin/secoes".mb_substr($url, 2).".php";
            }
        } else {
            $url = "secoes/$url.php";
        }
        include_once($url);
    }
}