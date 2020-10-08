<?php

    $host = "localhost";
    $user = "root";
    $psw = "";
    $db = "gametest";

    $msqli = new mysqli($host, $user, $psw, $db);

    if($msqli->connect_error){
        echo "Error on DB conection ".$msqli->connect_errno . " " . $msqli->connect_error;
    }else{
        echo "Sucessfull connected";
    }

?>