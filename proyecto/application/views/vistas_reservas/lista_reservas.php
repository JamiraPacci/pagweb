
<section class="content">
    <div class="container-fluid">
        <!--seccion de la ´planilla de disfraces -->
        <div class="row">
          <div class="col-12">

                <h1>Gestión de Reservas</h1>

                <?php echo form_open_multipart('reservas/agregar_res'); ?>
                <button type="submit" name="buton2" class="btn btn-primary">Crear nueva reserva</button>
                <?php echo form_close(); ?>

                <?php echo form_open_multipart('reservas/listapdf'); ?>
                <button type="submit" name="buton2" class="btn btn-success">Lista PDF</button>
                <?php echo form_close(); ?>

                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Disfraz</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Total</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Observacion</th>
                        <th scope="col">Fecha</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                      $contador=1;
                          foreach($lisreservas->result() as $row)
                        {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $indice; ?></th>
                        <td><?php echo $row->id_usuarios; ?></td>
                        <td><?php echo $row->id_disfraz; ?></td>
                        <td><?php echo $row->cantidad_reserva; ?></td>
                        <td><?php echo $row->descripcion_reserva; ?></td>
                        <td><?php echo $row->observacion_reserva; ?></td>
                        <td><?php echo $row->fecha_reserva; ?></td>
                        
                        <td>
                            <?php
                                echo form_open_multipart("reservas/modificar_res");
                            ?>
                            <input type="hidden" name="id_reserva" value="<?php echo $row->id_reserva; ?>">
                            <input type="submit" name="buttony" value="Modificar" class="btn btn-success">
                            <?php
                                echo form_close();
                            ?>				
                        </td>
                        <td>
                            <?php
                                echo form_open_multipart("reservas/eliminarbd_res");
                            ?>
                            <input type="hidden" name="id_reserva" value="<?php echo $row->id_disfraz; ?>">
                            <button type="submit" name="buttonx" value="Eliminar" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta reserva?');">Eliminar</button>
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
</section>

  
  