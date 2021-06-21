<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

  function verificarClaves($cla1, $cla2)
  {
    if ($cla1 != $cla2)
      echo "Las claves ingresadas son distintas";
  }

  verificarClaves($_REQUEST['clave1'], $_REQUEST['clave2']);

?>
  <h2>Se verificaron las claves ingresadas.</h2>
    
</body>
</html>