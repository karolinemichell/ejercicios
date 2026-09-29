<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <h2>CALCULO DE EJERCICIO 2</h2> <br> <hr>
    <form action="Ejercicio2.php" method="post">
        <label for="num1">Ingrese un número:</label> <br>
        <input type="number" name="txtnumero1" id="numero1"> <br>
        <label for="num2">Ingrese otro número:</label> <br>
        <input type="number" name="txtnumero2" id="numero2"> <br>

        <input type="submit" value="Calcular">
    </form>

    <?php
        if (isset($_POST)) {

            $num1 = $_POST['txtnumero1'];
            $num2 = $_POST['txtnumero2'];
        
            $result = ((($num1 + $num2)) ** 2) / 3;

            print("El resultado de la operacion es: " . $result);

            }
    ?>

</body>
</html>