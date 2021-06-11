<?php include "config/router.php" ?>

<?php session_start(); ?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $conf_title ?></title>
    <meta name="keywords" content="<?php echo $conf_keywords ?>">
    <meta name="description" content="<?php echo $conf_description ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php include "modules/navbar.php"; ?>

    <div id="content-wrap">
        <?php include $page ?>
    </div>

    <?php include "javascript-bottom.php"; ?>

</body>

</html>