<?php
require_once 'db.php';

$db = connect();

function getData(PDO $db): array
{
    $sql = $db->prepare('SELECT `id`, `common_name`, `latin_name`,  `canopy_level`, `life_span` FROM `Plants`;');

    $sql->execute();

    $plants = $sql->fetchAll();

    return $plants;
}

function processData(array $plants): string
{

    if (array_keys($plants) !== range(0, count($plants) - 1)) {
        return false;
    }

    $plantRow = '';
    foreach ($plants as $plant) {
        $plantRow .=
            '<div class="row"><ul><li>'
            . $plant['id'] . '</li><li>'
            . $plant['common_name'] . '</li><li>'
            . $plant['latin_name'] . '</li><li>'
            . $plant['canopy_level'] . '</li><li>'
            . $plant['life_span'] . '</li></ul></div>';
    }
    return $plantRow;
}


function getImage(PDO $db): array
{
    $sql = $db->prepare('SELECT `identification_image` FROM `Plants`;');

    $sql->execute();

    $images = $sql->fetchAll();

    return $images;
}

function displayImage(array $images): string {

    if (array_keys($images) !== range(0, count($images) - 1))
    return false;


    $plantImage = '';

    foreach ($images as $image) {
        $plantImage .= '<div><img class ="sourceImage" src="' . $image["identification_image"] . '"></div>';
    }
    return $plantImage;
}

function getID(PDO $db)
{
    $sql = $db->prepare('SELECT `id` FROM `Plants` GROUP BY `id` ASC;');

    $sql->execute();

    $ids = $sql->fetchAll();

    return $ids;
}

function displayID(array $ids): string {

    if (array_keys($ids) !== range(0, count($ids) - 1))
        return false;

    $plantId = '';

    foreach ($ids as $id) {
        $plantId .= '<p>' . $id["id"] . '</p>';
    }
    return $plantId;
}

