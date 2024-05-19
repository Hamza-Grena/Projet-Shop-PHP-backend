<!-- start product -->
<?php
$id = $_GET['id'] ?? 1;
foreach ($product->getData() as $item):
    if ($item['id'] == $id):
        ?>
        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['image']; ?>" alt="product" class="img-fluid">
                        <div class="pt-4 font-size-16">
                            <div class="col">
                                <button type="submit" class="btn btn-success form-control"
                                    onclick="alert('En cours de dev !')">Procéder à l'achat</button>
                            </div>
                            <div class="col">
                                <form method="POST">
                                    <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo $_COOKIE['user_id'] ?? 0 ?>">
                                    <?php
                                    if (in_array($item['id'], $cart->getCartId($cart->getCart($_COOKIE['user_id'] ?? 0)) ?? [])) {
                                        echo '<button type="submit" disabled class="btn btn-success form-control">Dans le pannier</button>';
                                    } else {
                                        echo '<button type="submit" name="buy_product_submit" class="btn btn-warning form-control">Ajouter au pannier</button>';
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-size-20">
                            <?php echo $item['name']; ?>
                        </h5>
                        <small>by
                            <?php echo $manage->getBrand($item['brand'])['brand']; ?>
                        </small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-size-14">20,534 notes | Plus de 1000 questions répondues</a>
                        </div>
                        <hr class="m-0">

                        <!--- product price -->
                        <table class="my-3 font-size-14">
                            <tr>
                                <td>M.R.P:</td>
                                <td><strike>162.00 DT</strike></td>
                            </tr>
                            <tr>
                                <td>Prix de la transaction :</td>
                                <td class="font-size-20 text-danger">
                                    <span>
                                        <?php echo $item['price'] ?? 0; ?>
                                    </span>
                                    DT
                                </td>
                                <td>
                                    <span class="font-size-12">&nbsp;&nbsp;Toutes taxes comprises</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Vous sauvegardez:</td>
                                <td><span class="font-size-16 text-danger">152.00 DT</span></td>
                            </tr>
                        </table>
                        <!-- !product price -->

                        <!-- #policy -->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center me-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-size-12">5 jours <br> Remplacement</a>
                                </div>
                                <div class="return text-center me-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck  border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-size-12">À propos <br>Notre</a>
                                </div>
                                <div class="return text-center me-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-size-12">1 an <br>garantie</a>
                                </div>
                            </div>
                        </div>
                        <!-- !policy -->
                        <hr>
                        <!-- order-details -->
                        <div id="order-details" class="d-flex flex-column">
                            <small>Livraison avant : 29 avril - 1er juin</small>
                            <small>Vendu par <a href="#">Électronique quotidienne </a>(4,5 sur 5 | 18 198 notes)</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Livrer au client -
                                424201</small>
                        </div>
                        <!-- !order-details -->
                        <div class="row align-items-center">
                            <div class="col-6">
                                <!-- color -->
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6>Color:</h6>
                                        <div class="p-2 color-yellow-bg rounded-circle">
                                            <button class="btn font-size-14"></button>
                                        </div>
                                        <div class="p-2 color-primary-bg rounded-circle">
                                            <button class="btn font-size-14"></button>
                                        </div>
                                        <div class="p-2 color-second-bg rounded-circle">
                                            <button class="btn font-size-14"></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- !color -->
                            </div>
                            <div class="col-6">
                                <!-- product qty section -->
                                <div class="qty d-flex">
                                    <h6>Quantité</h6>
                                    <div class="px-4 d-flex">
                                        <button class="qty-up border bg-light w-25" data-id="pro1"><i
                                                class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1"
                                            class="qty_input text-center border px-2 w-50" disabled value="1"
                                            placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light w-25"><i
                                                class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                                <!-- !product qty section -->
                            </div>
                        </div>
                        <!-- size -->
                        <div class="size my-3">
                            <h6>Carte graphique :</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="border p-2">
                                    <button type="button" class="btn p-0 font-size-14">RTX 3050 TI</button>
                                </div>
                                <div class="border p-2">
                                    <button type="button" class="btn p-0 font-size-14">RTX 3060 TI SUPER</button>
                                </div>
                                <div class="border p-2">
                                    <button type="button" class="btn p-0 font-size-14">RTX 3080</button>
                                </div>
                                <div class="border p-2">
                                    <button type="button" class="btn p-0 font-size-14">GTX 1650 SUPER</button>
                                </div>
                            </div>
                        </div>
                        <!-- !size -->
                    </div>
                    <div class="col-12">
                        <h6>Description du produit</h6>
                        <hr>
                        <p class="font-size-14">
                         <b>TEST MODE</b>
                        </p>
                        <p class="font-size-14">
                        <b>No descipt about this product</b>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- !start product -->
        <?php
    endif;
endforeach;
?>