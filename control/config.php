<?php 
    $db_host = "localhost";
    $db_port = "3306";
    $db_user = "dbedwin";
    $db_pass = "Manpre10.";
    $db_name = "dbmanpre1";

    $link = "mysql:host=".$db_host.":".$db_port.";dbname=".$db_name.";";
    
    try {
        $conn = new PDO($link,$db_user,$db_pass);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        die("Error: ".$e->getMessage());
    }

?>