<?php 

include("../conexion/conexion.php");


$id = $_POST['id'];

$consulta = "SELECT * FROM personas where idPersona=$id";

$query2 = mysqli_query($conexion,$consulta);

$dat = mysqli_fetch_assoc($query2);

$nombre = $dat['nombre'];
$aP = $dat['apellidoP'];
$aM = $dat['apellidoM'];
$tel = $dat['telefono'];
$idx = $dat['idPersona'];


$borrar = "DELETE FROM personas where idPersona=$id";

$query = mysqli_query($conexion,$borrar);

echo $idx." ".$nombre." ".$aP." ".$aM." ".$tel;


?>