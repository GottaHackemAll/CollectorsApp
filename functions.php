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

function search($db)
{
    if (isset($_GET['common_name'])) {

//        $sql = $db->prepare('SELECT `common_name` FROM `Plants` WHERE `common_name` =' . $_GET['common_name'] . ';');
//        $sql->execute();
//        $check = $sql->fetch();


            $plant = $_GET['common_name'];

            $sql = $db->prepare('SELECT * FROM `Plants` WHERE `common_name`=:cn;');

            $sql->bindParam(
                ':cn',
                $plant,
                PDO::PARAM_INT);

            $sql->execute();

            $result = $sql->fetch();

            return $result;


//         else {
//            echo 'common_name doesn\'t match';
//        }
    } else {
        echo 'what';
    }
}