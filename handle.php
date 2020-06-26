<?php

include('includes/db.php');

$login = $_POST['login'];
$password = $_POST['password'];

echo "Ваш логин: " . $_POST['login'] . '<br>';
echo "Ваш pass: " . $_POST['password'];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if( mysqli_num_rows($count) == 0) {
    echo '<br>' . 'Вы не зареганы!';

} else {
    echo '<br>' . 'Привет, ' . $login . '!';
}