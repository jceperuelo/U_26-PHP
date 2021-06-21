<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    $numero =$_REQUEST['numero'];
    if ($numero <=0){
        echo 'inserte numero valido';
    }else{
        echo 'el numero '.$numero.' está formado por '.cuenta($numero).' digitos.';
    }
    function cuenta($n){
        $cuenta=1;
        while ($n >= 10) {
           $cuenta++;
           $n= $n/10;
        }
        return $cuenta;
    }

?>
    
</body>
</html>