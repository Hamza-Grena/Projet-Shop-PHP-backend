<!-- start register -->
<section class="register">
    <div class="main py-3">
        <!-- sign up -->
        <form method="POST" class="form" id="sign-up">
            <h3 class="heading">S'inscrire</h3>
            <p class="desc">Inscrivez-vous pour recevoir nos offres dès maintenant !</p>
            <div class="row" style="width: 800px;">
                <div class="col">
                    <div class="form-group">
                        <label for="fullname" class="form-label">Nom et prénom (*)</label>
                        <input id="fullname" name="fullname" type="text" rules="required" placeholder="Entrez votre nom"
                            class="form-control">
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="username" class="form-label">Nom d'utilisateur (*)</label>
                        <input id="username" name="username" type="text" rules="required|min:3|max:10"
                            placeholder="Choisissez le nom de votre compte" class="form-control">
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Mot de passe (*)</label>
                        <input id="password" name="password" type="password" rules="required|min:3"
                            placeholder="Entrer le mot de passe" class="form-control">
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirmez le mot de passe (*)</label>
                        <input id="password_confirmation" name="password_confirmation"
                            rules="required|confirm:#password" placeholder="Entrer le mot de passe" type="password"
                            class="form-control">
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">Téléphone (*)</label>
                        <input id="phone" name="phone" type="number" rules="required|min:5|max:10"
                            placeholder="Entrez votre numéro de téléphone" class="form-control">
                        <span class="form-message"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="avatar" class="form-label">Avatar</label>
                        <input id="avatar" name="avatar" type="file" class="form-radio-control">
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email (*)</label>
                        <input id="email" name="email" type="text" rules="required|email"
                            placeholder="Entrez l'e-mail d'inscription" class="form-control">
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="city" class="form-label">Ville (*)</label>
                        <select id="city" rules="required" name="city" class="form-control">
                            <option value="">-- Choisissez la ville --</option>
                            <option value="Ariana">Ariana</option>
                            <option value="Béja">Béja </option>
                            <option value="Ben Arous">Ben Arous</option>
                            <option value="Bizerte">Bizerte</option>
                            <option value="Gabès">Gabès</option>
                            <option value="Gafsa">Gafsa</option>
                            <option value="Jendouba">Jendouba</option>
                            <option value="Kairouan">Kairouan</option>
                            <option value="Kasserine">Kasserine</option>
                            <option value="Kébili">Kébili</option>
                            <option value="Le Kef">Le Kef</option>
                            <option value="Mahdia">Mahdia</option>
                            <option value="Manouba">Manouba</option>
                            <option value="Médenine">Médenine</option>
                            <option value="Monastir">Monastir</option>
                            <option value="Nabeul">Nabeul</option>
                            <option value="Sfax">Sfax</option>
                            <option value="Sidi Bouzid">Sidi Bouzid</option>
                            <option value="Siliana">Siliana</option>
                            <option value="Sousse">Sousse</option>
                            <option value="Tataouine">Tataouine</option>
                            <option value="Tozeur">Tozeur</option>
                            <option value="Tunis">Tunis (Capitale)</option>
                            <option value="Zaghouan">Zaghouan</option>
                        </select>
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Genre (*)</label>
                        <div class="form-radio-control">
                            <div>
                                <input name="gender" type="radio" rules="checkone:gender" value="Mâle"
                                    class="form-radio">Mâle
                            </div>
                            <div>
                                <input name="gender" type="radio" rules="checkone:gender" value="Femelle"
                                    class="form-radio">Femelle
                            </div>
                        </div>
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="address" class="form-label">Adresse</label>
                        <input id="address" name="address" type="text" placeholder="Entrez votre adresse"
                            class="form-control">
                        <span class="form-message"></span>
                    </div>
                </div>
            </div>

            <button class="form-submit" type="submit" name="register-submit">S'inscrire</button>
            <p class="desc">Vous avez déjà un compte? <a href="./login.html">Se connecter</a></p>
        </form>

    </div>
</section>
<!-- !start register -->