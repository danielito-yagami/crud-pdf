<?php
include("../../include/conexion/conexion.php");

$consulta = "SELECT e.idPersona,e.nombre,e.apellidoP,e.apellidoM,e.telefono,g.genero from personas as e
inner join genero as g on(e.idgenero = g.idgenero) ORDER BY idPersona ASC";

$query4 = mysqli_query($conexion,$consulta);
?>



<!--parte en la consulta-->
<?php if (mysqli_num_rows($query4) > 0):?>
<?php  while($row4 = mysqli_fetch_assoc($query4)):?>
<tr>
<td><?php echo $row4['idPersona'];?></td>
<td><?php echo $row4['nombre'];?></td>
<td><?php echo $row4['apellidoP'];?></td>
<td><?php echo $row4['apellidoM'];?></td>
<td><?php echo $row4['telefono'];?></td>
<td><?php echo $row4['genero'];?></td>

</tr>
<?php endwhile;?>
<?php endif;?>



<div class="row justify-content-center">

<div class="col-7">

<h4 class="white text-center">Nuestros libros</h4>




</div>
</div>