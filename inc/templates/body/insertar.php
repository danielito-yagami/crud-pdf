<div id="insert"class="row justify-content-center">

<div class="col-7 sombra redondo borde">

<h2 class="fuente4 blanco text-center">Insertar un registro</h2>
<form action="" method="post" class="form-group">
<label class="fuente4 amarillo sombra-fuente"for="nombre" >Nombre:</label><br>
<input class="form-control fuente4 verde"type="text" name="nombreI" id="nombreI" class="form-group" placeholder="Escribe tu nombre" required><br>
<label class="fuente4 amarillo sombra-fuente"for="apellidoP">Apellido Paterno:</label><br>
<input class="form-control fuente4 verde"type="text" name="apI" id="apI" class="form-group" placeholder="Escribe tu apellido paterno" required><br>
<label class="fuente4 amarillo sombra-fuente"for="apellidoM" >Apellido Materno:</label><br>
<input class="form-control fuente4 verde"type="text" name="amI" id="amI" class="form-group" placeholder="Escribe tu apellido materno" required><br>
<label class="fuente4 amarillo sombra-fuente"for="telefono" >Telefono:</label><br>
<input class="form-control fuente4 verde"type="text" name="telI" id="telI" class="form-group" placeholder="Escribe tu telefono" required><br>
<label class="fuente4 amarillo sombra-fuente"for="genero" >Genero:</label><br>
<select name="opciongenero" id="opciongenero" class="form-select form-select-lg fuente4">
<option value="default2">Selecciona tu genero</option>
<?php if (mysqli_num_rows($query2) > 0):?>
<?php  while($row2 = mysqli_fetch_assoc($query2)):?>

<option value="<?php echo $row2['idGenero'];?>"><?php echo $row2['genero'] ;?></option>    

<?php endwhile;?>
<?php endif;?>   
</select>
<br><br>
<button id="insertarB"class="game"type="submit">Insertar registro</button>
</form>
<br><br>
</div>

</div>