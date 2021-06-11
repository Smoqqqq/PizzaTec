<?php 

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = hash("sha256", $_POST['password'], false);
    $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
    $query = $dbh->prepare($sql);
    $query->bindParam(":email", $email, PDO::PARAM_STR);
    $query->bindParam(":password", $password, PDO::PARAM_STR);
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_OBJ);

    if(isset($data->email)){
        echo "success";
    }else{
        echo "error";
    }
}