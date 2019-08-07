<?php

require_once 'functions.php';

$db = connect();

getData($db);

$plants = getData($db);

$plantTable = getHeadings($plants) . getTableBody($plants);

//echo processData($plants);

//$images = getImage($db);
//$plantImageArray = displayImage($images);
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
    <div>
        <table class="table">
            <?php echo $plantTable ?>
        </table>
    </div>
    <!--    <div class="images">--><?php //echo $plantImageArray ?><!--</div>-->
</section>
</body>
</html>
