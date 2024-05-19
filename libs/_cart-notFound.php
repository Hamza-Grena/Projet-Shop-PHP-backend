<!-- Shopping cart section  -->
<section id="cart" class="py-3 mb-5">
    <div class="container">
        <h5 class="font-size-20">
             Panier d'achat <span>
            <?php
// Vérifier si $_SESSION['logged'] est défini et égal à true
if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    // Vérifier si $_SESSION['user_id'] est défini
    if (isset($_SESSION['user_id'])) {
        // Appeler la méthode getAccount() de $acc avec les valeurs appropriées
        $accountInfo = $acc->getAccount($_SESSION['user_id'], 'user');
        // Vérifier si $accountInfo est défini et non nul
        if ($accountInfo !== null) {
            // Afficher le nom complet de l'utilisateur
            echo $accountInfo['fullname'];
        }
    }
} else {
    // Si l'utilisateur n'est pas connecté, afficher "Guest"
    echo 'Invité';
}
?>

                
            </span>
        </h5>
        <!--  shopping cart items -->
        <div class="row">
            <div class="col-sm-9">
                <!-- Empty Cart -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-12 text-center py-2">
                        <img src="./assets/empty_cart.png" alt="Empty Cart" class="img-fluid" style="height: 300px;">
                        <p class="font-size-16 text-black-50">Panier vide <br>Consulter nos PC😄</p>
                    </div>
                </div>
                <!-- .Empty Cart -->
            </div>
            <!-- subtotal section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12  text-success py-3">
                        <i class="fas fa-check"></i>
                        Votre commande est éligible à la livraison gratuite.
                    </h6>
                    <div class="border-top py-4">
                        <h5 class="font-size-20">
                            <p>Sous-total (0 article) :</p>
                            <p class="text-danger">
                                <span id="deal-price"> 0 </span>
                                <span><b>DT</b></span>
                            </p>
                        </h5>
                        <button type="submit" class="btn btn-warning mt-3" onclick="alert('En cours de dev ❤️!')">
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