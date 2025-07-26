<?php 
include("../conexion/conexion.php");

$id = $_POST['id'];

$consulta = "SELECT * FROM personas where idPersona=$id";

$query = mysqli_query($conexion,$consulta);


$row = mysqli_fetch_assoc($query);

$arreglo = [0,"","","",""];

$arreglo[0] = $row['idPersona'];
$arreglo[1] = $row['nombre'];
$arreglo[2] = $row['apellidoP'];
$arreglo[3] = $row['apellidoM'];
$arreglo[4] = $row['telefono'];
//Para enviar una cadena de datos
echo json_encode($arreglo);

?>