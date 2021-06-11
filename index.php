<?php include "config/router.php" ?>

<?php session_start(); ?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $conf_title ?></title>
    <meta name="keywords" content="<?php echo $conf_keywords ?>">
    <meta name="theme-color" content="#0056b3">
    <meta name="description" content="<?php echo $conf_description ?>">
    <link rel="stylesheet" href="ressources/css/bootstrapLight.css">
    <?php if(strpos($slug, "dmin_") < 1) { ?><link rel="stylesheet" href="ressources/css/global.css"> <?php } ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php include "modules/navbar.php"; ?>

    <div id="content-wrap">
        <?php include $page ?>
    </div>

    <?php include "javascript-bottom.php"; ?>

</body>

</html>