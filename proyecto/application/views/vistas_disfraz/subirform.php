<br><br>
<h1>Agregar Imagen de Disfraz</h1>
<br>

<?php
echo form_open_multipart("tienda/subir_img_dis");
?>

<input type="hidden" class="form-control" name="id_disfraz" value="<?php echo $id_disfraz?>" required>
<input type="file" name="userfile">
<button type="submit" class="btn btn-success">Agregar Disfraz</button>
	
<?php
echo form_close();
?>