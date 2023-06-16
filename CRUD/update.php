<?php
include('connection.php');
$con = connection();

$id = $_GET['id'];

$sql= "SELECT * FROM usuarioshotel WHERE id='$id'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Editar usuario</title>
</head>
<body>
    <div class="users-form">
        <form action="edit_user.php" method="POST">
            <h1>Editar usuario</h1>
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre'] ?>">
        <input type="text" name="apellido" placeholder="Apellido" value="<?= $row['apellido'] ?>">
        <input type="number" name="cedula" placeholder="Cedula" value="<?= $row['cedula'] ?>">
        <input type="email" name="correo" placeholder="Correo" value="<?= $row['correo'] ?>">
        <input type="submit" value="Actualizar informacion">
        </form>
    </div>
    
</body>
</html>