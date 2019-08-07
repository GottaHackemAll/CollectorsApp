<?php

require_once 'functions.php';

$db = connect();

getData($db);

$plants = getData($db);

$images = getImage($db);

$plantImageArray = displayImage($images);

?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <title>Collectors App</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="normalize.css">
</head>
<body background="images/vine-wall.jpg">
<section class="container">
    <h1>TABLE</h1>
    <div class="table">
            <?php echo processData($plants) ?>
    </div>
</section>
<section>
    <div class="images">
        <?php echo $plantImageArray ?>
    </div>
</section>
</body>
</html>
