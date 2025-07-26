<div id="update"class="row justify-content-center">
<div class="col-7 sombra borde redondo">
<h2 class="fuente4 text-center blanco sombra-fuente">Actualizar un registro</h2>
<br><br>
<form class="form-group"action="" method="post">
<select id="idA" class="form-select form-select-lg text-center fuente4"name="opcion" id="opcion">
<option value="default">--Selecciona el id a actualizar--</option>   
<?php if (mysqli_num_rows($query) > 0):?>
<?php  while($row = mysqli_fetch_assoc($query)):?>

<option value="<?php echo $row['idPersona'];?>"><?php echo $row['idPersona'] ;?></option>    

<?php endwhile;?>
<?php endif;?>   
</select>
<br>
<br>
<label class="fuente4 amarillo sombra-fuente"for="nombre" >Nombre:</label><br>
<input class="form-control fuente4 verde"type="text" name="nombreA" id="nombreA" class="form-group" placeholder="Escribe tu nombre" required><br>
<label class="fuente4 amarillo sombra-fuente"for="apellidoP">Apellido Materno:</label><br>
<input class="form-control fuente4 verde"type="text" name="apA" id="apA" class="form-group" placeholder="Escribe tu apellido paterno" required><br>
<label class="fuente4 amarillo sombra-fuente"for="apellidoM" >Apellido Paterno:</label><br>
<input class="form-control fuente4 verde"type="text" name="amA" id="amA" class="form-group" placeholder="Escribe tu apellido materno" required><br>
<label class="fuente4 amarillo sombra-fuente"for="telefono" >Telefono:</label><br>
<input class="form-control fuente4 verde"type="text" name="telA" id="telA" class="form-group" placeholder="Escribe tu telefono" required><br>
<button id="actualizarB"class="game"type="submit">Actualizar registro</button>
</form>
<br><br>
</div>

</div>