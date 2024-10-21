<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="min">Desde</label>
            <input type="date" value="<?php echo date('Y-m-d');?>" name="desde" id="min">
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="hasta">Hasta</label>
            <input type="date" value="<?php echo date('Y-m-d');?>" name="hasta" id="hasta">
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <button type="submit" class="btn btn-danger">PDF</button>
        </div>
    </div>
</div>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover" >
            <thead class="thead-dark">
                <th>#</th>
                <th>Usuario</th>
                <th>Fecha Reserva</th>
                <th>Total</th>
            </thead>

        </table>

    </div>
</div>