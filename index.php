<?php

session_start();

try {
    $url = "/";
    switch ($url){
        case '/':
            (new HomeController()) -> execute();
            break;
    }
}catch (Exception){

}