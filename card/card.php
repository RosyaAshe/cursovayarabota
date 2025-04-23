<li class="card">
    <div class="card__inner">
        <img src="<?= $row['image_url'] ?>" alt="" class="card__image" width="229">
        <div class="card__stats">
            <h3 class="card__name"><?= $row['name']?></h3>
            <span class="card__price">
                <?=  $row['price']?>
            </span>
        </div>
        <div class="card__actions">
            <button class="card__in-cart card__btn"><img src="../images/cart.svg" alt=""></button>
            <button class="card__hart  card__btn" ><img src="../images/hart.svg" alt=""></button>
        </div>
    </div>
    <img src="../images/card-star.svg" alt="" class="card__star1 card__star">
    <img src="../images/card-star.svg" alt="" class="card__star2 card__star">
</li>