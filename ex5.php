<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method= "get">
numero1: <input type= "number" name = "num"> <br>
<input type ="submit" value = "calcular" >
</form>
<?php
if(isset($_GET["num"])){

    $num = $_GET["num"];

    if ($num % 2==0){
        echo "o numero $num é par";
    } else {
        echo "o numero $num é impar";
    }
} 
?> 
</body>
</html>