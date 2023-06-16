<?php
include('connection.php');
$con = connection();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];

$sql="UPDATE usuarioshotel SET nombre='$nombre', apellido='$apellido', cedula='$cedula', correo='$correo' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: create.php");
};
?>