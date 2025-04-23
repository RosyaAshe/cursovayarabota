<?php
    require_once 'bd-connection.php';
    $sql = 'SELECT id, name, price, image_url from sell';
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include 'fonts.php';
    ?>
    <link rel="stylesheet" href="main-page/hero.css">
    <link rel="stylesheet" href="main-styles.css">
    <link rel="stylesheet" href="card\card.css">
    <link rel="stylesheet" href="container.css">
    <title>Lumiere Beauty</title>
</head>
<body>
    <header>
        <?php 
            include 'header\header.php';
        ?>
    </header>
    <main>
        <div class="main__content">
            <section class="hero">
                <div class="hero__container">
                    <div class="hero__slider">
                        <img class="hero__slider-image" src="/images/hero__slider-images/Group83.png" alt="">
                    </div>
                    <div class="hero__slog">
                        <span class="hero__slogitem-medium">СИЯЕМ</span>
                        <span class="hero__slogitem-samll">ВМЕСТЕ</span>
                        <span class="hero__slogitem-large">LUMIERE BEAUTY</span>
                        <img src="images\Star 1.svg" alt="" class="hero__slog-star">
                        <img src="images\Star 1.svg" alt="" class="hero__slog-star">
                        <img src="images\Star 1.svg" alt="" class="hero__slog-star">
                    </div>
                    <div class="hero__text">
                        <p class="hero__intro-text">
                        Место, где красота встречается с&nbsp;элегантностью и&nbsp;вниманием к&nbsp;деталям. Мы&nbsp;предлагаем уникальные косметические продукты, которые подчеркивают вашу естественную красоту и&nbsp;помогают вам чувствовать себя уверенно каждый день.
                        </p>
                        <img src="images\Star 1.svg" alt="" class="hero__intro-text-star">
                        <img src="images\Star 1.svg" alt="" class="hero__intro-text-star">
                    </div>
                    <div class="hero__catalog">
                        <div class="hero__catalog-wrapper">
                            <a href="" class="hero__catalog-link">
                                <span>каталог</span>
                                <div class="hero__catalog-link-images">
                                    <img alt="" class="hero__catalog-star" src="images\Star 4.svg">
                                    <img alt="" class="hero__catalog-star-goup1" src="images\Star 4.svg">
                                    <img alt="" class="hero__catalog-star-goup2" src="images\Star 4.svg">
                                    <img alt="" class="hero__catalog-star-goup3" src="images\Star 4.svg">
                                    <img alt="" class="hero__catalog-star-goup4" src="images\Star 4.svg">
                                </div>
                            </a>
                        </div>
                        <div class="hero__catalog-goup-text">
                            Найдется все
                        </div>    
                    </div>
                </div>
            </section>
            <div class="container">
                <section class="sell">
                    <h2 class="sell__title">ПОПУЛЯРНО</h2>
                    <ul class="sell__items-list">
                        <?php
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    include 'card\card.php';
                                }
                            }
                        ?>  
                    </ul>
                </section>
            </div>
            
        </div>
        
    </main>
</body>
</html>