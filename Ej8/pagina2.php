<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    $numero =$_REQUEST['numero'];
    $string = " ";
    while ($numero >= 1) {
     $string .= $numero%2;
     $numero = $numero/2;
    }  
    //strrev — Invierte una string//
    echo strrev($string);
  

?>
    
</body>
</html>