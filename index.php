<?php

require_once 'functions.php';

$db = connect();

getData($db);

$plants = getData($db);

$images = getImage($db);

$plantImageArray = displayImage($images);

$ids = getID($db);
$id = displayID($ids);

?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <title>Collectors App</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="normalize.css">
</head>
<!--<body  background="images/vine-wall.jpg">-->
<body>
<div class="wrapper">
    <section>
        <div class="table">
            <div>
                <ul class="heading">
                    <li>ID</li>
                    <li>Common Name</li>
                    <li>Latin Name</li>
                    <li>Canopy Level</li>
                    <li>Life Span</li>
                </ul>
            </div>
                <?php echo processData($plants) ?>
        </div>
    </section>
    <section>
        <div class="images">
            <?php
                    echo $id;
                  echo $plantImageArray;
                    ?>

        </div>
    </section>
</div>
</body>
</html>
