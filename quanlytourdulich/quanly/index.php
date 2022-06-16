<!DOCTYPE html>
<html lang="en">
<?php  
    include("config/config.php");
    

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/font-icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <div class="hero">
        <!-- header -->
        <?php include("modules/header.php") ?>

        <div class="grid wide">
            <!-- container -->
            <?php include('modules/main.php') ?>
            <!-- footer -->
            <?php include('modules/footer.php') ?>
        </div>
    </div>
</body>

</html>