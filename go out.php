<?php
if($_COOKIE['user']=='true') {
    setcookie('user', 'true', time() - 1800, '/');
    header('location:index.php');
}
