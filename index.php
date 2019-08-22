<?php
  $get = isset($_GET['pagina'])?$_GET['pagina']:'';

  require 'libs/funcs.php';
  require 'libs/configs.php';
  require 'template/header.php';

  navega($get);
?>
