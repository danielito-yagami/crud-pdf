<div class="row justify-content-center" id="delete">
<div class="col-7 sombra redondo borde">
<h2 class="fuente4 text-center blanco sombra-fuente">Borrar un registro</h2>
<br><br>
<form action="" class="form-group">
<select name="" id="idBorrar" class="form-select form-select-lg text-center fuente4">
<option value="default">--Selecciona el id a borrar--</option>   
<?php if (mysqli_num_rows($query3) > 0):?>
<?php  while($row3 = mysqli_fetch_assoc($query3)):?>

<option value="<?php echo $row3['idPersona'];?>"><?php echo $row3['idPersona'] ;?></option>    

<?php endwhile;?>
<?php endif;?>   

</select>
<hr> 
<br>   
<button id="borrarB"class="game"type="submit">Borrar registro</button>
</form>
<br><br>
</div>
</div>