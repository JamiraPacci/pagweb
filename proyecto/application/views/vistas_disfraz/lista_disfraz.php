    <div class="container">
      <!--seccion de la ´planilla de disfraces -->
      <div class="row">
        <div class="col-12">
          <div class="card-header dark-model" >

            <?php echo form_open_multipart('tienda/agregar_dis'); ?>
              <button type="submit" name="buton2" class="btn dark-mode">AGREGAR DISFRAZ</button>
            <?php echo form_close(); ?>

              <h2>Planilla Disfraces Disponibles</h2>
              
            <?php echo form_open_multipart('tienda/deshabilitados_dis'); ?>
              <button type="submit" name="buton2" class="btn dark-mode">VER. DESHABILITADOS</button>
            <?php echo form_close(); ?>
            
          </div> 
          <div class="card-body table-responsive p-0">                         
            <table class="table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th scope="col">Imagen</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Color</th>
                  <th scope="col">Talla</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Ingreso</th>
                  <th scope="col">Modificar</th>
                  <th scope="col">Deshabilitar</th>
                  <th scope="col">Eliminar</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $contador=1;
                  foreach($disfraz->result() as $row)
                  {
              ?>
                <tr>
                  <th scope="row"><?php echo $contador; ?></th>
                  <td>
                  <?php
                    $img=$row->img_disfraz;
                      //si imagen en la base de datos es vacio
                      if ($img=="") 
                      {
                        ?>
                          <img src="<?php echo base_url();?>/uploads/disfraz/imagen.jpg" width="80px" height="100">
                        <?php
                              
                      }
                      //cargar de la base de datos
                      else{
                        ?>
                          <img src="<?php echo base_url();?>uploads/disfraz/<?php echo $img;?>" width="80px" height="100">
                        <?php
                      }
                  ?>
                  </td>
                      <!--td>
                        <//?php
                          echo form_open_multipart("tienda/subir_img");
                        ?>
                        <input type="hidden" name="id_disfraz" value="<//?php echo $row->id_disfraz; ?>">
                        <button type="submit" class="btn btn-info">Subir</button>
                        <//?php
                          echo form_close();
                        ?>
                      </td-->
                  <td><?php echo $row->categoria; ?></td>
                  <td><?php echo $row->nombre_disfraz; ?></td>
                  <td><?php echo $row->color; ?></td>
                  <td><?php echo $row->talla; ?></td>
                  <td><?php echo $row->precio; ?></td>
                  <td><?php echo $row->cantidad; ?></td>
                  <td><?php echo $row->estado; ?></td>
                  <td><?php echo $row->descripcion; ?></td>
                  <td><?php echo formatearFecha($row->fecha_registro_disfraz); ?></td>
                  <td>
                  <?php echo form_open_multipart("tienda/modificar_dis");?>
                  <input type="hidden" name="id_disfraz" value="<?php echo $row->id_disfraz; ?>">
                  <input type="submit" name="buttony" value="Modificar" class="btn btn-success">
                  <?php echo form_close();?>				
			            </td>

                  <td>
                  <?php
                    echo form_open_multipart("tienda/deshabilitarbd_dis");
                  ?>
                  <input type="hidden" name="id_disfraz" value="<?php echo $row->id_disfraz; ?>">
                  <input type="submit" name="buttonz" value="Deshabilitar" class="btn btn-warning">
                  <?php
                    echo form_close();
                  ?>
			            </td>

                  <td>
                  <?php
                    echo form_open_multipart("tienda/eliminarbd_dis");
                  ?>
                  <input type="hidden" name="id_disfraz" value="<?php echo $row->id_disfraz; ?>">
                  <input type="submit" name="buttonx" value="Eliminar" class="btn btn-danger">
                  <?php
                    echo form_close();
                  ?>
                  </td>
                </tr>
                <?php
                $contador++;
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


   