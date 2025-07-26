<?php

include("./inc/include/conexion/conexion.php");

include("./inc/include/consultas/consultas.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Proyecto final</title>

</head>
<body class="fondo">
<br><br>
<div class="row justify-content-center">


<div class="col-10 fondoStyle2 sombra redondo">

<h1 class="text-center sombra-fuente blanco fuente2">Proyecto final</h1>
<h2 class="text-center sombra-fuente blanco fuente2">App que inserta, actualiza, borrar y hace consultas con documentos pdf</h2>
<h3 class="text-center sombra-fuente verde fuente4">Alumno Cortes Vaca Daniel</h3>
<div class=" row justify-content-left">
<div class="col-6">
<button id="volver" class="btn btn-dark game">Volver al portafolio</button>    
</div>    
</div>
</div>

</div>

<br><br>
<div id="container"class="row justify-content-center">

<div class="col-8 fondoStyleN">

<h1 class="text-center fuente2 blanco sombra redondo sombra-fuente">Selecciona la operacion a la base de datos</h1>
<br>
<br>
<!--Parte de los botones de seleccion-->
<?php include("./inc/templates/header/barra.php");?>
<!--fin de botones de seleccion-->
<br>
<br>
<!---Actualizacion --->
<?php include("./inc/templates/body/actualizar.php");?>
<!--fin de actualizacion -->


<!--Insertar datos --->
<?php include("./inc/templates/body/insertar.php");?>
<!-- fin insertar-->

<!--Insertar datos --->
<?php include("./inc/templates/body/borrar.php");?>
<!-- fin insertar-->


<!--consultar datos --->
<br><br><br>
<div class="row justify-content-center" id="consulta">
<div class="col-8">

<table class="table table-dark sombra">
<caption class="fuente1 rojo">Base de datos</caption>
<thead>


<td>id</td>
<td>Nombre</td>
<td>Apellido Paterno</td>
<td>Apellido Materno</td>
<td>Telefono</td>
<td>Genero</td>


</thead>

<tbody id="tablaConsulta">
</tbody>


</table>
</div>
</div>
<!-- fin consulta-->
<br><br><br><br>
<button id="pdfX"class="game">Mostrar pdf</button>
<iframe id="pdf"
    title="Inline Frame Example"
    width="100%"
    height="800"
    src="https://www.w3schools.com">
</iframe>

</div>

</div>



</body>
<script src="./js/Jquery.js"></script>
<script src="./js/seleccion.js"></script>
<script src="./js/actualizar.js"></script>
<script src="./js/actualizarX.js"></script>
<script src="./js/insertar.js"></script>
<script src="./js/borrar.js"></script>
<script src="./js/pdf.js"></script>
<script>

$("#volver").on('click',(e)=>{

    e.preventDefault();

    window.location.replace("https://daxdev.helioho.st/")

})


</script>
</html>