<div class="container-fluid header">
    <div class="row">
        <div class="col-md-4 sous-head">
            <i style="font-size: 40px;" class="fas fa-bars"></i>
            <a href="<?= $routes['menu'] ?>" class="button" style="margin-left: 80px">COMMANDER</a>
        </div>
        <div class="col-md-3 sous-head1">
            <a href="<?= $routes['home'] ?>" style="color: white; text-decoration: none">
                <div class="row titre-princ">
                    <h3 style="margin-right: 20px;">Pizza</h3>
                    <h3 style="color:  rgb(255,228,36);">Tec</h3>
                </div>
                <div class="row">
                    <h4 class="origin text-center">Original</h4>
                </div>
            </a>
        </div>
        <div class="col-md-5 sous-head">
            <i style="font-size: 45px;margin-right: 40px;" class="fab fa-instagram"></i>
            <i style="font-size: 45px;margin-right: 40px;" class="fab fa-youtube-square"></i>
            <i style="font-size: 45px;margin-right: 40px;" class="fab fa-facebook-square"></i>
            <?php if (!isset($_SESSION['isLogged'])) { ?>
                <a href="<?= $routes['login'] ?>" class="button" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px">connexion</a>
                <a href="<?= $routes['register'] ?>" class="button" style="border-top-left-radius: 0px; border-bottom-left-radius: 0px; margin-left: 0px">inscription</a>
            <?php } else { ?>
                <button class="button" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px"><?= $_SESSION['isLogged'] ?></button>
                <a href="<?= $routes['panier'] ?>" class="button" style="border-top-left-radius: 0px; border-bottom-left-radius: 0px; margin-left: 0px">panier</a>
            <?php } ?>
        </div>
    </div>
</div>