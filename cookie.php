<?php
$login=$_POST['login'];
$password=$_POST['password'];
if(trim($login)!=''&& trim($password)!='') {
    setcookie('user', 'true', time() + 1800, '/');
    header('location:index.php');
}
else
    echo ('Заповніть всі поля');
