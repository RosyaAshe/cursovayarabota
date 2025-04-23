<?php 

    require_once '../bd-connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>добавление товара</h1>
    <form action="panel-add-item-script.php" method="post" enctype="multipart/form-data"> 
        <label for="name">Название продукта:</label><br>
        <input type="text" name="name" placeholder="Введите название товара" required><br><br>

        <label for="maker">Производитель:</label><br>
        <input type="text" name="maker" placeholder="Введите имя производителя" required><br><br>

        <label for="price">Цена:</label><br>
        <input type="text" name="price" placeholder="Введите цену" required><br><br>

        <label for="type">Тип:</label><br>
        <input type="text" name="type" placeholder="Тип товара" required><br><br>

        <label for="image">Выберите изображение:</label><br>
        <input type="file" name="image" accept="image/*" required><br><br>

        <input type="submit" value="Добавить товар">
    </form>
</body>
</html>