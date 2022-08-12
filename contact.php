<?php
require "header.php"
?>
<form action="check.php" method="post" id="email form">
    <h2>Звязатися з нами</h2>
    <input type="email" name="email" placeholder="Введить ваш email"><br>
    <textarea name="massage" rows="3" cols="80" placeholder="Ваше повідомлення"></textarea><br>
    <button type="submit" id="submit">Відправити</button>
</form>
<?php
require "footer.php"
?>
