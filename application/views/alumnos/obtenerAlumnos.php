<?php $this->load->view('partials/header'); ?>

<body>
<table class="table table-hover text-center">
  <thead>
    <tr>
      <th scope="col">Numero de control de alumno</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido paterno</th>
      <th scope="col">Apellido materno</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $dt) {?>
        <tr>
            <td scope="row"><?php echo $dt->No_control_alumno; ?></td>
            <td><?php echo $dt->Nombre; ?></td>
            <td><?php echo $dt->Apellido_P; ?></td>
            <td><?php echo $dt->Apellido_M; ?></td>
            <td><?php echo $dt->Correo; ?></td>
            <td><?php echo $dt->Telefono; ?></td>
            <td>
                <a href="<?php echo base_url('alumnos/obtenerAlumno/'.$dt->No_control_alumno) ?>" type="button" class="btn btn-primary">Editar</a>
                <a href="<?php echo base_url('alumnos/eliminar/'.$dt->No_control_alumno) ?>" type="button" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
    <?php }?>
  </tbody>
</table>
<?php $this->load->view('partials/footer'); ?>