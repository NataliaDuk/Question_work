<?php
$bd=mysqli_connect('localhost', 'root', 'root', 'registration');
if (isset($_POST['']))
    if (isset($_POST['submit'])){
        $username=mysqli_real_escape_string($bd, trim($_POST['username']));
        $password1=mysqli_real_escape_string($bd, trim($_POST['password1']));
        $password2=mysqli_real_escape_string($bd, trim($_POST['password2']));
        if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2))   {
        $query = "SELECT * FROM 'signup' WHERE username = '$username'";
        $data = mysqli_query($bd, $query);
        if(mysqli_num_rows($data) == 0) {
            $query="INSERT INTO 'signup' (username, password) VALUES ('$username', '$password1')";
mysqli_query($bd, $query);
echo 'Вы зарегистрированы';
mysqli_close($bd);
exit();

        }
        else {
        echo 'Логин уже существует';
        }
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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"></form>
<label for="username">Введите Ваш логин</label>
<input type="text" name="username">
<label for="password">Введите Ваш пароль</label>
<input type="text" name="password1">
<label for="password">Повторите Ваш пароль еще раз</label>
<input type="text" name="password2">
<button name="submit">Вход</button>
</body>
</html>