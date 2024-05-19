<!-- start login -->
<section class="login">
    <div class="main py-3">
        <!-- log in -->
        <form method="POST" class="form" id="sign-in">
            <?php if ($_SESSION['logged'] == true) { echo 'ID de session :<mark>'.session_id().'</mark>'; ?>
                <h3>
                    Content de te revoir,
                    <span>
                        <?php echo $acc->getAccount($_COOKIE['user_id'])['username'] ?>!
                    </span>
                </h3>
                <img src="assets/avatar/<?php echo $acc->getAccount($_COOKIE['user_id'], 'user')['avatar'] ?>" alt="avatar"
                    class="rounded-circle my-3" style="width: 120px;height: 120px;" />
                <h5 class="mb-2">
                    <strong>
                        <?php echo $acc->getAccount($_COOKIE['user_id'], 'user')['fullname'] ?>
                    </strong>
                </h5>
                <p class="mb-2">
                    <span>Monnaie: </span>
                    <strong class="text-danger">
                        <?php echo $acc->getAccount($_COOKIE['user_id'], 'user')['money'] ?>
                        DT
                    </strong>
                </p>
                <button class="form-submit" type="submit" name="logout-submit">Se déconnecter</button>
            <?php } else { ?>
                <h3 class="heading">Se connecter</h3>
                <p class="desc">Connectez-vous pour profiter d'offres exclusives pour vous !</p>
                <div class="row" style="width: 400px;">
                    <div class="col">
                        <div class="form-group">
                            <label for="username" class="form-label">Nom d'utilisateur (*)</label>
                            <input id="username" name="username" type="text" rules="required|min:3|max:10"
                                placeholder="Entrez votre nom d'utilisateur" class="form-control">
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Mot de passe (*)</label>
                            <input id="password" name="password" type="password" rules="required|min:3"
                                placeholder="Entrer le mot de passe" class="form-control">
                            <span class="form-message"></span>
                        </div>
                    </div>
                </div>


                <button class="form-submit" type="submit" name="login-submit">Se connecter</button>
                <p class="desc">Vous n'avez pas de compte ?<a href="./register.php">S'inscrire</a></p>
            <?php } ?>
        </form>

    </div>
</section>
<!-- !start login -->