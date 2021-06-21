<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $radio=0;
    $base=0;
    $altura=0;
    $lado=0;

    $operacion = $_REQUEST['operacion'];
    $radio =$_REQUEST['radio'];
    $base=$_REQUEST['base'];
    $altura=$_REQUEST['altura'];
    $lado=$_REQUEST['lado'];

    switch ($operacion) {
        case 1:
            echo 'Área del circulo: '.( $radio*$radio)*pi();
            break;
        case 2:
            echo 'Área del triangulo: '.( $base*$altura)/2;
            break;
        case 3:
            echo 'Área del cuadrado: '.($lado*$lado);
            break;
        
    }
?>
    
</body>
</html>