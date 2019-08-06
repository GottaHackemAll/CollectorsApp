<?php

function connect()
{

    $db = new PDO(
        'mysql:host=192.168.20.20; dbname=Project2',
        'root',
        '');

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);

    return $db;

}