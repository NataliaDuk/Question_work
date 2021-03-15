<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    if (!empty($username) && !empty($password1) && !empty($password2) && $password1 == $password2) {

        $mysql= new mysqli("127.0.0.1", "root", "root", "registration", 3306);
        $mysql->query("INSERT INTO `signup`(`username`, `password`) VALUES ('$username', '$password2')");
        $mysql->close();

        header("Location: test.php");

    }
    else {
        echo 'Все поля должны быть заполнены';
    }
}


?>