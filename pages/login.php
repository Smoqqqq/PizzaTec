<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="post">
                <h2>Se connecter</h2><br>
                <?php include "functions/login.php" ?>
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" class="form-control">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control"><br>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" name="login" value="Se connecter">
                </div>
            </form>
        </div>
    </div>
</div>