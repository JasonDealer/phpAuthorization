<?php 
    $connection = mysqli_connect('127.0.0.1', 'root', 'root', 'test_db');
    if ($connection == false) {
        echo 'Не удалось подключиться к БД';
        exit();
    }