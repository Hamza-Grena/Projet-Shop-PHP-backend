<!-- Top Sale -->
<?php

shuffle($productData);

?>
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-size-20">Meilleure vente</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($productData as $item) { ?>
                <div class="item py-2 border rounded-2 bg-light">
                    <div class="product">
                        <a href="<?php printf('%s?id=%s', 'product.php', $item['id']); ?>">
                            <img src="<?php echo $item['image']; ?>" alt="product1" class="img-fluid">
                        </a>
                        <div class="text-center">
                            <h6>
                                <?php echo $item['name']; ?>
                            </h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>
                                    <?php echo $item['price'] ?? '0'; ?>
                                </span>DT
                            </div>
                            <form method="POST">
                                <input type="hidden" name="item_id" value="<?php echo $item['id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id"
                                    value="<?php echo $_COOKIE['user_id'] ?? 0 ?>">
                                <?php
                                if (in_array($item['id'], $cart->getCartId($cart->getCart($_COOKIE['user_id'] ?? 0)) ?? [])) {
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">Dans le panier</button>';
                                } else {
                                    //echo '<button type="submit" name="top_sale_submit" class="btn btn-info font-size-12">Ajouter au panier</button>';
                                    echo '<button type="submit" name="new_pc_submit" class="CartBtn">
                                                <span class="IconContainer"> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                                                </span>
                                                <p class="text">Add to cart</p>
                                            </button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
            } // closing foreach function 
            ?>
        </div>
        <!-- !owl carousel -->
    </div>
</section>
<!-- !Top Sale -->