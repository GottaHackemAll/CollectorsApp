<?php
require_once 'db.php';

$db = connect();

function getData($db)
{
    $sql = $db->prepare('SELECT `id`, `common_name`, `latin_name`, `identification_image`, `canopy_level`, `life_span` FROM `Plants`;');

    $sql->execute();

    $plants = $sql->fetchAll();

    return $plants;
}

function processData($plants)
{
    $plantRow = '';
    foreach ($plants as $plant) {
        $plantRow .= '<div class="plant">' . $plant['id'] . $plant['common_name'] . $plant['latin_name'] . $plant['identification_image'] . $plant['canopy_level'] . $plant['life_span'];
    }
    return $plantRow;
}

function getImage($db) {
    $sql = $db->prepare('SELECT `identification_image` FROM `Plants`;');

    $sql->execute();

    $images = $sql->fetchAll();

    return $images;
}

function displayImage($images)
{

    $plantImage = '';

    foreach($images as $image) {
        $plantImage .= '<img src="' .  $image["identification_image"] . '">';
    }
    return $plantImage;
}



