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

</section>
</body>
</html>
