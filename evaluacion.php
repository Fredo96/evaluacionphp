<?php

$nombre = "";
$apellido = "";
$sueldo = 0;
$descuento1 = 0;
$descuento2 = 0;
$descuento3 = 0;
$sueldo_total = 0;

if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sueldo = $_POST['sueldo'];

    $descuento1 = $sueldo * 0.09;
    $descuento2 = $sueldo * 0.07;

    if ($sueldo > 472) {


        $descuento3 = $sueldo * 0.10;
    }
    $sueldo_total = $sueldo - ($descuento1 + $descuento2 + $descuento3);
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion</title>
</head>

<body>

    <form action="evaluacion.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Escriba su nombre">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" placeholder="Escriba su Apellido">
        <label for="salario">Sueldo</label>
        <input type="num" id="sueldo" name="sueldo" placeholder="Escriba su salario">
        <button type="submit" name="enviar" id="enviar">Calcular el Salario</button>
    </form>
    <br>
    <table border="1">

        <caption>DATOS DEL SUELDO DE LOS EMPLEADOS</caption>
        <thead>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>SUELDO</th>
            <th>ISSS</th>
            <th>AFP</th>
            <th>RENTA</th>
            <th>SUELDO TOTAL</th>


        </thead>

        <tbody>

            <td> <?php echo $nombre; ?> </td>
            <td> <?php echo $apellido; ?> </td>
            <td> <?php echo $sueldo; ?> </td>
            <td> <?php echo $descuento1; ?> </td>
            <td> <?php echo $descuento2; ?> </td>
            <td> <?php echo $descuento3; ?> </td>
            <td> <?php echo $sueldo_total; ?> </td>

        </tbody>
    </table>
</body>

</html>