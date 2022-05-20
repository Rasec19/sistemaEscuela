<?php $this->load->view('partials/header'); ?>
<?php $this->load->view('partials/navbar'); ?>
<body>
    <div class="container">
        <h1>Editar matería</h1>
        <form action="<?php echo base_url();?>materias/editar" method="POST">
            <div class="form-group">
                <input hidden type="text" class="form-control" id="idMateria" name="idMateria" value="<?php echo $data->id_materia ?>">
            </div>
            <div class="form-group">
                <label for="materia">Matería</label>
                <input type="text" class="form-control" id="materia" name="materia" value="<?php echo $data->Materia ?>">
            </div>
            <button type="submit" class="btn btn-success">Editar</button>
        </form>
    </div>

<?php $this->load->view('partials/footer'); ?>