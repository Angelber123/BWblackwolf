<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo2.png">
    <title>Black Wolf</title>
</head>
<body>


<img style="width: 680px; height: 650px; margin-left: 650px; display: flex;" src="imagenes/exterior.jpg" alt="">

<img style="width: 130px; height: 98px; margin-left: 230px; margin-top: -625px; margin-bottom: 15px; display: flex;" src="imagenes/logo.jpg" alt="" importance="logo">

<h2 style="margin-top: 140px; display: flex;"> Hotel Black Wolf, un servicio</h2>
<h2>global para todo el mundo</h2>
<h2>rapido, seguro, y divertido.</h2>
    
</body>
</html>
<?php
include "conex.php";
$sql="insert into usuarioshotel values('','$_POST[nombre]','$_POST[apellido]','$_POST[cedula]','$_POST[sexo]','$_POST[fecha]','$_POST[correo]','$_POST[pais]',1)";
if (mysqli_query($c,$sql)) {
    echo "SE HA REGISTRADO EXITOSAMENTE, DEBERA CANCELAR UNA VEZ EN EL HOTEL";
}else {
    echo "ha fallado";
}
?>
<br>
<a style="text-decoration: none; margin-left: 20px; font-size: 20px; color: yellow;" href="registro.html">ir al inicio</a>

