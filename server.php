<?php
    include("dbConnection.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];
    $pswd = $_POST['pswd'];

    $selectQuery = "SELECT * FROM user";

    $insertQuery = "INSERT INTO user(name, email, description, pswd)
        VALUES('$name','$email','$desc','$pswd')";

    if($name && $email && $pswd){
        $insertConn = $msqli->query($insertQuery) or die($msqli->error);
    }
    $selectConn = $msqli->query($selectQuery) or die($msqli->error);

    var_dump($selectConn);
?>