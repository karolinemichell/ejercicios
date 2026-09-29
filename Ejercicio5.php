<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<body>
     <h2>CALCULO DE EJERCICIO 5</h2> <br> <hr>

     <form action="Ejercicio5.php" method="post">
        <label for="num1">Ingrese Base del rectangulo:</label> <br>
        <input type="number" name="txtnumero1" id="numero1"> <br>
        <label for="num2">Ingrese Altura del rectangulo:</label> <br>
        <input type="number" name="txtnumero2" id="numero2"> <br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST)) {

        $base = $_POST['txtnumero1'];
        $altura = $_POST['txtnumero2'];

        $superficie = $base * $altura;
        $perimetro = 2 * ($base + $altura); 
        
        echo "La superficie del rectángulo es: " . $superficie . "<br>";
        echo "El perímetro del rectángulo es: " . $perimetro . "<br>";
    }
?>
</body>
</html>