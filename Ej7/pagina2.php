<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    $numero =$_REQUEST['numero'];
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    echo'El factorial de '.$numero.' es : '. $factorial; 

?>
    
</body>
</html>