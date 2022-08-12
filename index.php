<?php
require "header.php"
?>
<div class="d-flex">
<?php
for($i=0;$i<5;$i++):
    ?>
<div class="sector">
    <h2>Тип відпочинку</h2>
    <img src="img/<?php echo ($i+1)?>.jpg" alt="Тип відпочинку">
    <form action="info.php">
    <button type="submit" name="info button" id="info">Подробиці</button>
</form>
</div>
  <?php endfor?>

</div>

<?php
require "footer.php"
?>
