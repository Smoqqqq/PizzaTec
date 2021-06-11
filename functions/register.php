<?php

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = hash("sha256", $_POST['password'], false);
    $sql = "INSERT INTO users (id, email, password) VALUES (NULL, :email, :password)";
    $query = $dbh->prepare($sql);
    $query->bindParam(":email", $email, PDO::PARAM_STR);
    $query->bindParam(":password", $password, PDO::PARAM_STR);
    $query->execute();
    $data = $query->fetch(PDO::FETCH_OBJ);
    header("location: $routes[home]");
}
