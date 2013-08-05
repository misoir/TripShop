<?php

function redirect($url){
    if (!headers_sent()){
        header('Location: http://'. $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/' . $url);
    }
    else
    {
        die('Nie moge przekierować. Wysłano już nagłówki (wyjście).');
    }
}

?>
