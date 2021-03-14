<?php
$mysql= new mysqli("127.0.0.1", "root", "root", "registration", 3306);
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    if (!empty($username) && !empty($password1) && !empty($password2) && $password1 == $password2) {

        $mysql->query("SELECT * FROM `signup` WHERE `username`='$username' and `password`='$password2'");
        $mysql->close();
        header("Location: test.php");
        echo 'Вы зарегистрированы';
        exit();


            }
            else {
                echo 'Все поля должны быть заполнены';
            }
        }


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Question</title>
</head>
<body>
<form method="post" action="?">
<label>Введите Ваш логин</label>
<input type="text" name="username">
<label for="password">Введите Ваш пароль</label>
<input type="password" name="password1">
<label for="password">Повторите Ваш пароль еще раз</label>
<input type="password" name="password2">
<button name="submit">Вход
</form>
<a href=""

</body>
</html>