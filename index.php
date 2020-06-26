<?php
    $connection = mysqli_connect('127.0.0.1', 'root', 'root', 'test_db');
    if ($connection == false) {
        echo 'Не удалось подключиться к БД';
        exit();
    }



?>

<form method="POST" action="./handle.php">
    <input type="text" placeholder="Ваш логин" name="login">
    <input type="text" placeholder="Ваш пароль" name="password">
    <hr>
    <input type="submit" value="Отправить">
</form>

<?php
    mysqli_close($connection);
?>