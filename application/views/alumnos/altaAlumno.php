<?php $this->load->view('partials/header'); ?>
<?php $this->load->view('partials/navbar'); ?>
<body>
    <div class="container">
        <h1>Alta de alumnos</h1>
        <form action="<?php echo base_url();?>alumnos/agregar" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="apellidoP">Apellido Paterno</label>
                <input type="text" class="form-control" id="apellidoP" name="apellidoP">
            </div>
            <div class="form-group">
                <label for="apellidoM">Apellido Materno</label>
                <input type="text" class="form-control" id="apellidoM" name="apellidoM">
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo">
            </div>
            <div class="form-group">
                <label for="apellidoM">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono">
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>

<?php $this->load->view('partials/footer'); ?>