<?php

function connect() {
       $db = new PDO(
        'mysql:host=192.168.20.20; dbname=Project2',
        'root',
        '');
        return $db;
}