<?php $this->load->view('partials/header'); ?>
<?php $this->load->view('partials/navbar'); ?>
<body>
    <div class="container">
        <h1>Alta de materias</h1>
        <form action="<?php echo base_url();?>materias/agregar" method="POST">
            <div class="form-group">
                <label for="nombre">Materia</label>
                <input type="text" class="form-control" id="materia" name="materia">
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>

<?php $this->load->view('partials/footer'); ?>