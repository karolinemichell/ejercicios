<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>
</head>
<body>
    <h2>CALCULO DE EJERCICIO 7</h2> <br> <hr>

    <form action="Ejercicio7.php" method="post">
        <label for="num1">Ingrese Base del Triangulo:</label> <br>
        <input type="number" name="txtnum1" id="numero1"> <br>
        <label for="num2">Ingrese Altura del Triangulo:</label> <br>
        <input type="number" name="txtnum2" id="numero2"> <br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST)&& !empty($_POST)) {
        
        $base = $_POST['txtnum1'];
        $altura = $_POST['txtnum2'];

        $superficie = ($base * $altura) / 2;
        
        echo ("La superficie del triangulo es: " . $superficie . "<br>");
       
    }
    ?>

</body>
</html>