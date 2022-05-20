<?php $this->load->view('partials/header'); ?>
<?php $this->load->view('partials/navbar'); ?>
<body>
    <div class="container">
        <h1>Editar alumno</h1>
        <form action="<?php echo base_url();?>alumnos/editar" method="POST">
        <div class="form-group">
                <input hidden type="text" class="form-control" id="idAlumno" name="idAlumno" value="<?php echo $data->No_control_alumno ?>">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data->Nombre ?>">
            </div>
            <div class="form-group">
                <label for="apellidoP">Apellido Paterno</label>
                <input type="text" class="form-control" id="apellidoP" name="apellidoP" value="<?php echo $data->Apellido_P ?>">
            </div>
            <div class="form-group">
                <label for="apellidoM">Apellido Materno</label>
                <input type="text" class="form-control" id="apellidoM" name="apellidoM" value="<?php echo $data->Apellido_M ?>">
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $data->Correo ?>">
            </div>
            <div class="form-group">
                <label for="apellidoM">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $data->Telefono ?>">
            </div>
            <button type="submit" class="btn btn-success">Editar</button>
        </form>
    </div>

<?php $this->load->view('partials/footer'); ?>