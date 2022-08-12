<?php
require "header.php"
?>
<div class="text">
    <h1>На цій сторінці ви зможете почитати про нас.</h1>
    <p class="text">Станом на зараз цей сайт не наповнився информацією, можливо в майбутьньому він буде доробленний.</p>
    <button id="onclick"></button>
</div>
<script>
 document.querySelector("#onclick").onclick=function (){
     alert('Вітаю, ви знайшли пасхалку, ви молодець!!!')
 }
</script>
<?php
require "footer.php"
?>
