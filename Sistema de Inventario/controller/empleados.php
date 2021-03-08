<?php
require_once "model/empleado.php";
if (!isset($_SESSION['user'])){
	header("location:index.php?");
}
	
extract ($_REQUEST);
if (!isset($_REQUEST['x'])) {
  $_REQUEST['x']=0; 
}
	
$empleado = new Empleado();
$resultado = $empleado->consultarEmpleados();
?>

<h1 align="center"> LISTAR EMPLEADOS</h1>
<a href="index.php?view=controller/agregar_empleados.php" class="add-btn"> Nuevo Empleado</a>
<table class="table">
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>telefono</th>
    <th>Correo</th>
    <th>Identificacion</th>
    <th>Cargo</th>
    <th>Estado</th>
    <th></th>
  </tr>
  <?php
    foreach ($resultado as $registro) {
	?>
	<tr>
    <td><?php echo $registro['nombre']; ?> </td>
    <td><?php echo $registro['apellido']; ?></td>
    <td><?php echo $registro['telefono']; ?></td>
    <td><?php echo $registro['email']; ?></td>
    <td><?php echo $registro['documentoId']; ?></td>
    <td><?php echo $registro['nombre_rol']; ?></td>
    <td><?php echo $registro['nombre_estado']; ?></td>
    <td align="center"><a href="index.php?view=controller/editar_empleados.php&id=<?php echo $registro['id_persona']?>"class="edit-btn">Editar</a></td>
  </tr>
  <?php  }  ?>
</table>
