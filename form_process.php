<?php
$login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

if (mb_strlen($login) > 30) {
    echo 'Недопустимая длина логина (не больше 30 символов)';
    exit();
} else if (mb_strlen($email) > 30) {
    echo 'Недопустимая длина email (не больше 30 символов)';
    exit();
} else if (mb_strlen($pass) > 20) {
    echo 'Недопустимая длина пароля (не больше 20 символов)';
    exit();
}

$mysql = new mysqli('localhost', 'root', 'root', 'newdb');
$mysql->query("INSERT INTO `users` (`id`, `login` ,`email` ,`password`) 
VALUES (NULL,  '$login',  '$email',  '$pass')");

$mysql->close();

header('Location: /');

?>