<?php $this->load->view('partials/header'); ?>
<?php $this->load->view('partials/navbar'); ?>
<body>
<table class="table table-hover text-center">
  <thead>
    <tr>
      <th scope="col">ID Matería</th>
      <th scope="col">Matería</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $dt) {?>
        <tr>
            <td scope="row"><?php echo $dt->id_materia; ?></td>
            <td><?php echo $dt->Materia; ?></td>
            <td>
                <a href="<?php echo base_url('materias/obtenerMateria/'.$dt->id_materia) ?>" type="button" class="btn btn-primary">Editar</a>
                <a href="<?php echo base_url('materias/eliminar/'.$dt->id_materia) ?>" type="button" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
    <?php }?>
  </tbody>
</table>
<?php $this->load->view('partials/footer'); ?>