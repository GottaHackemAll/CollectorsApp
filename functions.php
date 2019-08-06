<?php
require_once 'db.php';

$db = connect();

function getData($db) {
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);

    $sql = $db->prepare('SELECT `id`, `common_name`, `latin_name`, `identification_image`, `canopy_level`, `life_span` FROM `Plants`;');

    $sql->execute();

    $plants = $sql->fetchAll();

    return $plants;
}

$plants = getData($db);

function processData($plants) {
    $plantRow = '';
    foreach ($plants as $plant) {
        $plantRow .= '<div class="plant">' . $plant['id'] . $plant['common_name'] . $plant['latin_name'] . $plant['identification_image'] . $plant['canopy_level'] . $plant['life_span'];
    }
    return $plantRow;
}