<?php 

    require_once '../bd-connection.php';

    $name = $_POST['name'];
    $type = $_POST['type'];
    $image = $_POST['image'];
    $maker = $_POST['maker'];
    $price = str_replace(',', '.', $_POST['price']);

    $images_dir = '../images';

    if(!is_dir($images_dir)){
        mkdir($images_dir, 0777, true);
    }

    $sql = "SELECT * FROM products WHERE name = '$name'";
    $sql = $conn->query($sql);
    $sql = $sql->fetch_assoc();
    if($sql['name'] === $name && $sql['maker'] === $maker){
        echo 'такой товар существует';
    } else {
        if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK){
            $tmpPath = $_FILES['image']['tmp_name'];
            $filename = $_FILES['image']['name'];
            $targetPath = '../images/'. $filename;

            if(move_uploaded_file($tmpPath, $targetPath)){
                echo 'файл успешно сохранен';
                $sql = "INSERT INTO products (name,price,type, image_url) VALUES('$name', '$price', '$type', '$targetPath')";
                $conn->query($sql);
            }
        }

    
    }

?>