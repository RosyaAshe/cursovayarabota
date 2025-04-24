

<h1>изменение товара</h1>
    <form action="panel-edit-query.php" method="post" enctype="multipart/form-data"> 
        <label for="name"><?= $row['name'] ?></label><br>
        <input type="text" name="name" placeholder="Введите название товара" required><br><br>

        <label for="maker"><?= $row['maker'] ?></label><br>
        <input type="text" name="maker" placeholder="Введите имя производителя" required><br><br>

        <label for="price"><?= $row['price'] ?></label><br>
        <input type="text" name="price" placeholder="Введите цену" required><br><br>

        <label for="type"><?= $row['type'] ?></label><br>
        <input type="text" name="type" placeholder="Тип товара" required><br><br>

        <label for="image"><?= $row['image_url'] ?></label><br>
        <input type="file" name="image" accept="image/*" required><br><br>

        <input type="submit" value="изменить">
    </form>