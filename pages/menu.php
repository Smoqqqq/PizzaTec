<div class="container">
    <br>
    <h1>Notre menu</h1>
    <?php if (isset($_GET['order-success'])) { ?>
        <div class="alert alert-success" role="alert">
            Article ajouté au panier
        </div>
    <?php } ?>
    <br>
    <div class="row">
        <?php

        if (isset($_GET['order'])) {
            $id = $_GET['order'];

            $sql = "SELECT * FROM menu WHERE id = :id";
            $query = $dbh->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            $query->execute();
            $data = $query->fetch(PDO::FETCH_OBJ);

            $price = $data->price;
            $customer = $_SESSION['isLogged'];
            $date = date("d/m/Y");

            $sql = "INSERT INTO orders (id, product, price, customer, date) VALUES (NULL, :product, :price, :customer, :date)";
            $query = $dbh->prepare($sql);
            $query->bindParam(":product", $id, PDO::PARAM_INT);
            $query->bindParam(":price", $price, PDO::PARAM_STR);
            $query->bindParam(":customer", $customer, PDO::PARAM_STR);
            $query->bindParam(":date", $date, PDO::PARAM_STR);
            $query->execute();

            header("location: $routes[menu]?order-success=1");
        }

        $sql = "SELECT * FROM menu";
        $query = $dbh->prepare($sql);
        $query->execute();
        $res = $query->fetchAll(PDO::FETCH_OBJ);

        foreach ($res as $data) { ?>

            <div class="col-md-4 col-sm-6">
                <div class="produit" style="position: relative; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/<?= $data->img ?>); padding: 30px; background-size: cover; background-position: center">
                    <h3 class="product-title" style="color: white"><?= $data->product ?></h3>
                    <p class="product-desc" style="color: white"><?= $data->description ?></p>
                    <p class="product-ingredients" style="color: white">Ingrédients : <?= $data->ingredients ?></p>
                    <div style="color: white; float: right" class="product-price"><?= $data->price ?> €</div><br>
                    <a href="<?= $routes['menu'] ?>?order=<?= $data->id ?>" class="button" style="position: absolute; bottom: 15px;left: 50%; transform: translateX(-50%)">Commander</a>
                </div>
            </div>

        <?php } ?>
    </div><br><br>
</div>