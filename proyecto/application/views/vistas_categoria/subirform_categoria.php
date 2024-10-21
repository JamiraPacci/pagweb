<br><br>
<h1>Cambiar Imagen de Categoria</h1>
<br>

<?php
echo form_open_multipart("disfraz/subir_img_categoria");
?>

<input type="hidden" class="form-control" name="id_categoria" value="<?php echo $id_categoria?>" required>
<input type="file" name="userfile">
<button type="submit" class="btn btn-success">Guardar Cambios</button>
	
<?php
echo form_close();
?>