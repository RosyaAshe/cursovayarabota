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
    <form action="panel-edit-item-script-search.php" method="post" enctype="multipart/form-data"> 
        <label for="id">введите id товара</label><br>
        <input type="text" name="id" placeholder="id" required><br><br>

        <input type="submit" value="Найти">
    </form>
</body>
</html>