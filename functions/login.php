<?php 

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $sql = "SELECT * FROM users WHERE email = :email";
    $query = $dbh->prepare($sql);
    $query->bindParam(":email", $email, PDO::PARAM_STR);
    $query->execute();
}