<div class="container">
    <br>
    <h1>Votre panier</h1>
    <?php

    $email = $_SESSION['isLogged'];

    $sql = "SELECT * FROM orders WHERE customer = :email";
    $query = $dbh->prepare($sql);
    $query->bindParam(":email", $email, PDO::PARAM_STR);
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_OBJ);

    foreach ($res as $data) { ?>

        <div class="col-md-4 col-sm-6">
            <h3 class="product-title" style="color: white"><?= $data->product ?></h3>
            <p class="product-desc" style="color: white"><?= $data->date ?></p>
            <div style="color: white; float: right" class="product-price"><?= $data->price ?> €</div><br>
        </div>

    <?php } ?>
</div>