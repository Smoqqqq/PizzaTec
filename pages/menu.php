<div class="container">
    <br>
    <h1>Notre menu</h1>
    <br>
    <div class="row">
        <?php

        $sql = "SELECT * FROM menu";
        $query = $dbh->prepare($sql);
        $query->execute();
        $res = $query->fetchAll(PDO::FETCH_OBJ);

        foreach ($res as $data) { ?>

            <div class="col-md-4 col-sm-6">
                <div style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/<?= $data->img ?>); padding: 30px; background-size: cover; background-position: center">
                    <h3 class="product-title" style="color: white"><?= $data->product ?></h3>
                    <p class="product-desc" style="color: white"><?= $data->description ?></p>
                    <p class="product-ingredients" style="color: white">Ingrédients : <?= $data->ingredients ?></p>
                    <div style="color: white; float: right" class="product-price"><?= $data->price ?> €</div><br>
                    <a href="<?= $routes['menu'] ?>?order=<?= $data->id ?>" class="button">Commander</a>
                </div>
            </div>

        <?php } ?>
    </div>
</div>