<?php
    require_once '../bd-connection.php';
    $sql = 'SELECT id, name, price, image_url FROM products';
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=q, initial-scale=1.0">
    <?php
        include '../fonts.php';
    ?>
    <link rel="stylesheet" href="../univers-styles.css">
    <link rel="stylesheet" href="catalog.css">
    
    <title>Document</title>
</head>
<body>
    <header>
        <?php 
            include '../header/header.php';
        ?>
    </header>
    <main class="main__content">
        <div class="page-content">
            <div class="filter">
                    <span class="filter__title"> Фильтр</span>

                    <ul class="filter__categosies">
                        <li class="filter__category">
                            <button class="filter__category-title" data-path='one'>
                                <span class="filter__category-title-text">Тип</span>
                                <img src="/images/Vector 4.svg" alt="" class="filter__cathegory-arrow" width="15" height="5">
                            </button>
                            <ul class="filter__params" data-target='one'>
                                <li class="filter__param">
                                    <input name='' id='ch' type="checkbox" class="filter__param-check" hidden>
                                    <label for='ch' class="filter__param-name"></label>
                                    <span>Уходовая</span>
                                </li>
                                <li class="filter__param">
                                    <input name='' id='ch1' type="checkbox" class="filter__param-check" hidden>
                                    <label for='ch1' class="filter__param-name"></label>
                                    <span>Декоратианя</span>
                                </li>
                                <li class="filter__param">
                                    <input name='' id='ch2' type="checkbox" class="filter__param-check" hidden>
                                    <label for='ch2' class="filter__param-name"></label>
                                    <span>Для тела</span>
                                </li>
                            </ul>
                            
                        </li>
                        <li class="filter__category">
                            <button class="filter__category-title" data-path='two'>
                                <span class="filter__category-title-text">Производитель</span>
                                <img src="/images/Vector 4.svg" alt="" class="filter__cathegory-arrow" width="15" height="5">
                            </button>
                            <ul class="filter__params" data-target='two'>
                                <li class="filter__param">
                                    <input name='' id='' type="checkbox" class="filter__param-check" hidden>
                                    <label for='' class="filter__param-name"></label>
                                    <span></span>
                                </li>
                            </ul>
                            
                        </li>
                    </ul>
                    <button class="filter__apply-btn">Применить</button>
                </div>
                
               <script src="../scripts/drop-filter.js"></script>

        
                
           
                <div class="catalog">
                    <div class="searching">
                        <input type='text' class="searching__place" placeholder="Поиск по товарам">
                        <button class="serching__btn" id="search">
                            Поиск
                        </button>
                    </div>
                    <ul class="catalog__list">
                        <?php
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    include '../card/card.php';
                                }
                            }
                        ?>
                    </ul>
                </div>
            
        </div>
    </main>
   
</body>
</html>
