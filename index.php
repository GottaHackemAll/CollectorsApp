<?php

$db = new PDO(
    'mysql:host=192.168.20.20; dbname=Project2',
    'root',
    '');

$db->setAttribute(
    PDO::ATTR_DEFAULT_FETCH_MODE,
    PDO::FETCH_ASSOC);

    $sql = $db->prepare('SELECT * FROM `Plants`;');

    $sql->execute();

    $plants = $sql->fetchAll();

    function returnPlant($plant) {
            return $plant['id'] . ' - ' . $plant['common_name'] . ' - ' . $plant['latin_name'] . ' - ' . $plant['identification_image'] . ' - ' . $plant['canopy_level'] . ' - ' . $plant['life_span'];

    }

    function displayAll($plants) {
        foreach ($plants as $plant) {
            echo returnPlant($plant);
            echo '<br>';
        }
    }

    displayAll($plants);

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

</body>
</html>
