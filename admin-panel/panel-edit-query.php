

<?php 
        require_once '../bd-connection.php';
        $name = $_POST['name'];
        $price = $_POST['price'];
        $maker = $_POST['maker'];
        $type = $_POST['type'];
        $image = $_FILES['image']['name'];
        $tmpPath = $_FILES['image']['tmp_name'];
        $targetPath = '../images/'.$image;
        $id = $_COOKIE['product_id'];
        if(move_uploaded_file($tmpPath,$targetPath)){
            $sql = "UPDATE products SET name = '$name', type = '$type', image_url = '$targetPath', price = '$price', maker = '$maker' WHERE id = '$id'";
            if($result = $conn->query($sql)){
                echo 'данные успешно изменены';
                setcookie('product_id', '', time() - 3600, '/');
            }
            
        } else {
            echo 'ошибка обновления данных';
        }
?>