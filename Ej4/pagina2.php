<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

    $valorMinimo = $_REQUEST['vMin'];
    $valorMaximo = $_REQUEST['vMax'];
    $numero = $_REQUEST['numero'];
    for ($i=0; $i <$numero ; $i++) { 
        echo random($valorMinimo,$valorMaximo);
    }
    
    function random($vMin,$vMax){
      echo rand($vMin,$vMax)."<br>";
    }
?>  
</body>
</html>