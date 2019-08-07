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

function processData(array $plants):string {
    $plantRow = '';
    foreach ($plants as $plant) {
        $plantRow .=
            '<div class="row"><ul><li>' .
            $plant['id'] . '</li><li>' .
            $plant['common_name'] . '</li><li>' .
            $plant['latin_name'] . '</li><li>' .
            $plant['identification_image'] . '</li><li>' .
            $plant['canopy_level'] . '</li><li>' .
            $plant['life_span'] . '</li></ul></div>';
    }
    return $plantRow;
}

function getImage($db) {
    $sql = $db->prepare('SELECT `identification_image` FROM `Plants`;');

    $sql->execute();

    $images = $sql->fetchAll();

    return $images;
}

function displayImage($images) {

    $plantImage = '';

    foreach($images as $image) {
        $plantImage .= '<img class ="sourceImage" src="' .  $image["identification_image"] . '">';
    }
    return $plantImage;
}



