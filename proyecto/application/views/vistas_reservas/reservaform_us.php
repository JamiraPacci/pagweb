<!-- reserva_form.html -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Formulario de Reserva</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form id="formReserva" method="POST" action="/reservas/guardar">
            <div class="card-body">
              <div class="form-group">
                <label for="nombreCliente">Nombre del Cliente</label>
                <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" placeholder="Ingrese nombre del cliente" required>
              </div>
              <div class="form-group">
                <label for="disfraz">Disfraz</label>
                <select class="form-control" id="disfraz" name="disfraz" required>
                  <option value="">Seleccione un disfraz</option>
                  <option value="disfraz1">Disfraz 1</option>
                  <option value="disfraz2">Disfraz 2</option>
                  <!-- Añade más opciones aquí -->
                </select>
              </div>
              <div class="form-group">
                <label for="fechaReserva">Fecha de Reserva</label>
                <input type="date" class="form-control" id="fechaReserva" name="fechaReserva" required>
              </div>
              <div class="form-group">
                <label for="duracionReserva">Duración (días)</label>
                <input type="number" class="form-control" id="duracionReserva" name="duracionReserva" min="1" required>
              </div>
              <div class="form-group">
                <label for="observaciones">Observaciones</label>
                <textarea class="form-control" id="observaciones" name="observaciones" rows="3" placeholder="Escribe observaciones adicionales"></textarea>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Reservar</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
