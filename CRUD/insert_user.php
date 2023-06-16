<?php 
include('connection.php');  
$con = connection();

$sql="insert into usuarioshotel values('','$_POST[nombre]','$_POST[apellido]','$_POST[cedula]','$_POST[sexo]','$_POST[fecha]','$_POST[correo]','$_POST[pais]',1)";
if (mysqli_query($con,$sql)){

    Header("location: create.php");
}
?>