<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css">
    <title>Подорожі</title>
</head>
<body>
<header>
    <div class="header">
        <a href="index.php" class="href"><h3>tur.com</h3></a>
        <a class="href" href="contact.php">Контакти</a>
        <a class="href" href="about.php">Про нас</a>
        <?php
        if(@$_COOKIE['user'] == 'true'):
        ?>
        <a id="login button" href="cabinet.php">Особистий кабінет</a>
        <?php else: ?>
        <a id="login button" href="login.php">Увійти</a>
        <?php endif; ?>
        <hr>
    </div>
</header>
