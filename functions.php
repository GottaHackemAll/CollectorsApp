<?php
require_once 'db.php';

$db = connect();

/***
 *
 * function connects to database
 *
 * @param PDO $db
 * @return array
 */

function getData(PDO $db): array
{
    $sql = $db->prepare('SELECT `id`, `common_name`, `latin_name`,  `canopy_level`, `life_span` FROM `Plants`;');

    $sql->execute();

    $plants = $sql->fetchAll();

    return $plants;
}

/***
 *
 * function checks if the data retrieved from db is
 * an indexed array and arranges it in to a list
 * within a div that can be displayed
 *
 * @param array $plants
 * @return string
 */

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

/***
 *
 * function retrieves an array of images from the db
 *
 * @param PDO $db
 * @return array
 */

function getImage(PDO $db): array
{
    $sql = $db->prepare('SELECT `identification_image` FROM `Plants`;');

    $sql->execute();

    $images = $sql->fetchAll();

    return $images;
}

/***
 *
 * function checks if data retrieved from the db is
 * an indexed array and wraps it in a div that can
 * be displayed
 *
 * @param array $images
 * @return string
 */

function displayImage(array $images): string {

    if (array_keys($images) !== range(0, count($images) - 1))
    return false;


    $plantImage = '';

    foreach ($images as $image) {
        $plantImage .= '<div><img class ="sourceImage" src="' . $image["identification_image"] . '"></div>';
    }
    return $plantImage;
}

/***
 *
 * function retrieves an array if id's from the database
 *
 * @param PDO $db
 * @return array
 */

function getID(PDO $db)
{
    $sql = $db->prepare('SELECT `id` FROM `Plants` GROUP BY `id` ASC;');

    $sql->execute();

    $ids = $sql->fetchAll();

    return $ids;
}

/***
 *
 * function checks if data retrieved from db is
 * an indexed array and wraps it so that it can be displayed
 *
 * @param array $ids
 * @return string
 */

function displayID(array $ids): string {

    if (array_keys($ids) !== range(0, count($ids) - 1))
        return false;

    $plantId = '';

    foreach ($ids as $id) {
        $plantId .= '<p>' . $id["id"] . '</p>';
    }
    return $plantId;
}

