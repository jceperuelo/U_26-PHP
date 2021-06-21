<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php
    $numero =$_REQUEST['numero'];
   if ($numero%2 !=0 and $numero%3 !=0 and $numero%5 !=0 and $numero%7){
    echo 'El número '.$numero.' es primo.';
   }
    else echo 'El número '.$numero.' no es primo.';
?>

</body>
</html>