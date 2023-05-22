<?php
setcookie('login', 'Maria da Penha', time() + (60 * 3), "/");
?>
<html>
  <body>
    <?php 
    if (!isset($_COOKIE['login'])) {
        echo "Cookie não encontrado";
    } else {
        echo "Cookie 'login' foi encontrado: ";
        echo $_COOKIE['login'];
    } ?>
  </body>
</html>