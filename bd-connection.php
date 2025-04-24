<?php
    //$host = 'MySQl-5.7';
    //$host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'shop_db';

    $conn = new mysqli($host, $user, $password, $database);

    if($conn->connect_error){
        die("Ошибка подключения". $conn->connect_error);
    }
?>