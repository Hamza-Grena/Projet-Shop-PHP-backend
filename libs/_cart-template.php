<!---Style delete button --->
<style>
button {
 width: 150px;
 height: 40px;
 cursor: pointer;
 display: flex;
 align-items: center;
 background: red;
 border: none;
 border-radius: 5px;
 box-shadow: 1px 1px 3px rgba(0,0,0,0.15);
 background: #e62222;
}

button, button span {
 transition: 200ms;
}

button .text {
 transform: translateX(35px);
 color: white;
 font-weight: bold;
}

button .icon {
 position: absolute;
 border-left: 1px solid #c41b1b;
 transform: translateX(110px);
 height: 40px;
 width: 40px;
 display: flex;
 align-items: center;
 justify-content: center;
}

button svg {
 width: 15px;
 fill: #eee;
}

button:hover {
 background: #ff3636;
}

button:hover .text {
 color: transparent;
}

button:hover .icon {
 width: 150px;
 border-left: none;
 transform: translateX(0);
}

button:focus {
 outline: none;
}

button:active .icon svg {
 transform: scale(0.8);
}
</style>
<!-- Shopping cart section  -->
<section id="cart" class="py-3 mb-5">
    <div class="container">
        <!---<h5 class="font-size-20">
            Panier <span>
                (/*<?php
                /*if ($_SESSION['logged'] == true) {
                    echo $acc->getAccount($_SESSION['user_id'], 'user')['fullname'];
                } else {
                    echo 'Guest';
                }*/
                ?>)
            </span>
        </h5> --->
        <!--  shopping cart items -->
        <div class="row">
            <div class="col-sm-9">
                <?php
                $products = $cart->getCart($_COOKIE['user_id'] ?? 0);
                $subTotal = [];
                foreach ($products as $productItems):
                    $item = $product->getProduct($productItems['item_id']);
                    ?>
                    <!-- cart item -->
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                            <img src="<?php echo $item['image']; ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="font-size-20">
                                <?php echo $item['name']; ?>
                            </h5>
                            <small>by
                                <?php echo $manage->getBrand($item['brand'])['brand']; ?>
                            </small>
                            <!-- product rating -->
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <a href="#" class="px-2 font-size-14">20,534 notes</a>
                            </div>
                            <!--  !product rating-->

                            <!-- product qty -->
                            <div class="qty d-flex pt-2">
                                <div class="d-flex w-25">
                                    <button class="qty-up border bg-light w-25"
                                        data-id="<?php echo $item['id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                    <input type="text" data-id="<?php echo $item['id'] ?? '0'; ?>"
                                        class="qty_input text-center border px-2 w-100 bg-light" disabled value="1"
                                        placeholder="1">
                                    <button data-id="<?php echo $item['id'] ?? '0'; ?>"
                                        class="qty-down border bg-light w-25"><i class="fas fa-angle-down"></i></button>
                                </div>

                                <form method="POST">
                                    <input type="hidden" value="<?php echo $item['id'] ?? 0; ?>" name="item_id">
                                    <!---<button type="submit" name="delete-cart-submit"
                                        class="btn text-danger px-3 border-right">Delete
                                    </button>--->
                                    <button type="submit" name="delete-cart-submit" class="noselect">
                                        <span class="text">Delete</span>
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path>
                                            </svg>
                                        </span>
                                </button>
                                </form>
                            </div>
                            <!-- !product qty -->
                        </div>
                        <div class="col-sm-2 text-right">
                            <div class="font-size-20 text-danger">
                                <span class="product_price" data-id="<?php echo $item['id'] ?? '0'; ?>">
                                    <?php
                                    $price = $item['price'] ?? 0;
                                    $subTotal[] = $price;
                                    echo $price;
                                    ?>
                                </span>DT
                            </div>
                        </div>
                    </div>
                    <!-- !cart item -->
                    <?php
                endforeach;
                ?>
            </div>
            <!-- subtotal section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12  text-success py-3">
                        <i class="fas fa-check"></i>
                        Votre commande est éligible à la livraison gratiute (> 300DT).
                    </h6>
                    <div class="border-top py-4">
                        <h5 class="font-size-20">
                            <p>Total (
                                <?php echo isset($subTotal) ? count($subTotal) : 0; ?> Produit) :
                            </p>
                            <p class="text-danger">
                                <span>DT</span>
                                <span id="deal-price">
                                    <?php echo isset($subTotal) ? $cart->getSum($subTotal) : 0; ?>
                                </span>
                            </p>
                        </h5>
                        <button id="btn" type="submit" class="btn btn-warning mt-3" onclick="alert('En cours de dev ❤️!')">
                        Procéder à l'achat
                    </button>
                    </div>
                </div>
            </div>
            <!-- !subtotal section-->
        </div>
        <!-- !shopping cart items -->
    </div>
</section>
<!-- !Shopping cart section  -->