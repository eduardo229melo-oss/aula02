<!DOCTYPE html>
<html>
<body>
<form method= "get">
numero1: <input type= "number" name = "n1"> <br>
numero2: <input type= "number" name = "n2"> <br>
<input type ="submit" value = "calcular" >
</form>
<?php
 if(isset($_GET["n1"]) && isset($_GET["n2"])) {
    $n1= $_GET["n1"];
    $n2= $_GET["n2"];
    $soma = $n1 + $n2;
    echo "A soma entre $n1 e $n2 é:$soma";
 
 }
 ?>
</html>
</body>