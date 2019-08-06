<?php

require_once 'functions.php';

$db = connect();

getData($db);

$plants = getData($db);

search($plants);
?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <title>Collectors App</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="normalize.css">
</head>
<body>
<section>
    <div class="search" >
        <form action="index.php" method="get">
            <input type="text" name="common_name">
            <input type="submit" value="Search">
        </form>
    </div>

<!--    <div class="input">-->
<!--        <form>-->
<!--            <input type="text"-->
<!--        </form>-->
<!--    </div>-->
</section>
</body>
</html>
