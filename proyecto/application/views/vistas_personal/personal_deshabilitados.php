<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Planilla Administradores Deshabilitados</h1>

      <?php echo form_open_multipart('tienda/personal'); ?>
        <button type="submit" name="buton2" class="btn dark-mode">VER HABILITADOS</button>
      <?php echo form_close(); ?>

      <div class="b-example-divider"></div>


      <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nombre</th>
            <th scope="col">Primer Apellido</th>
            <th scope="col">Segundo Apellido</th>
            <th scope="col">C.I.</th>
            <th scope="col">Telefono</th>
            <th scope="col">Observaciones</th>
            <th scope="col">Habilitar</th>

          </tr>
        </thead>
        <tbody>
          <?php
            $contador=1;
            foreach($empleados->result() as $row)
          {
          ?>
          <tr>
            <th scope="row"><?php echo $contador; ?></th>
            <td><?php echo $contador; ?></td>
            <td><?php echo $row->nombre_personal; ?></td>
            <td><?php echo $row->apellido1_personal; ?></td>
            <td><?php echo $row->apellido2_personal; ?></td>
            <td><?php echo $row->ci_personal; ?></td>
            <td><?php echo $row->telefono_personal; ?></td>
            <td><?php echo $row->adicional_personal; ?></td>
            <td>
              <?php echo form_open_multipart("tienda/habilitarbd");?>
              <input type="hidden" name="idpersonal" value="<?php echo $row->id_personal; ?>">
              <input type="submit" name="buttonz" value="Habilitar" class="btn dark-model">
              <?php echo form_close();?>
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
