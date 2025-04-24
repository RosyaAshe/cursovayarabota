<?php 

    session_start();
    $_SESSION['product_id'] = $id;
    require_once '../bd-connection.php';

    $id = $_POST['id'];

    $result = $conn->query("SELECT * from products WHERE id = '$id' ");

    if(($result-> num_rows) === 0){
        echo 'такой товар не найден';
    } else {
        setcookie('product_id', $id, time() + 3600, '/');
        while($row = $result->fetch_assoc()){
            include('edit-item-form.php');
        };
    }


?>