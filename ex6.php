<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        numero1: <input type="number" name="n1"> <br>
        numero2: <input type="number" name="n2"> <br>
        <input type="submit" value="calcular">
    </form>
    <?php
    if (isset($_GET["n1"]) && isset($_GET["n2"])) {
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        if ($n1 > $n2) {
            echo ("o numero maior é:$n1 ");
        } else echo ("o numero maior é : $n2 ");
    }
    ?>

</html>
</body>