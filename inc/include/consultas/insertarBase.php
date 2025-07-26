<?php 
include("../conexion/conexion.php");


$nombre = $_POST['nombre'];
$apellidoP = $_POST['apellidoP'];
$apellidoM = $_POST['apellidoM'];
$telefono = $_POST['telefono'];
$idGenero = $_POST['idGenero'];
$consultaID = "SELECT max(idPersona) as 'maximo' from personas";

$queryId = mysqli_query($conexion,$consultaID);

$id = mysqli_fetch_assoc($queryId);

$idx = $id['maximo'] + 1;


$insertar = "INSERT INTO personas(idPersona,nombre,apellidoP,apellidoM,idGenero,telefono)
VALUES('".$idx."','".$nombre."','".$apellidoP."','".$apellidoM."','".$idGenero."','".$telefono."') ";

$query = mysqli_query($conexion,$insertar);


if($query){


    echo 0;
}else {

    echo 1;
}


?>