<?php

include("../conexion/conexion.php");


$nombre = $_POST['nombre'];
$apellidoP = $_POST['apellidoP'];
$apellidoM = $_POST['apellidoM'];
$telefono = $_POST['telefono'];
$id = $_POST['id'];

$actualizar = "UPDATE personas set nombre='$nombre',apellidoP='$apellidoP',apellidoM='$apellidoM',telefono='$telefono' where idPersona=$id";

$query = mysqli_query($conexion,$actualizar);

//para mandar errores

if($query){

echo 0;

}else {


echo 1;
}


?>