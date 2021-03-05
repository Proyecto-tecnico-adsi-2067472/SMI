<?php
require_once "model/proveedor.php";
if (!isset($_SESSION['user'])){
	header("location:index.php?");	
}

extract ($_REQUEST);
if (!isset($_REQUEST['x'])){
	$_REQUEST['x']=0;
}

$proveedor = new Proveedor();
$resultado = $proveedor->consultarProveedores();
?>

<h1 align="center"> LISTAR PROVEEDORES</h1>
<a href="index.php?view=controller/agregar_proveedores.php" class="add-btn"> Nuevo Proveedor</a>
<table class="table">
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>telefono</th>
    <th>Correo</th>
    <th>Identificaci&oacute;n</th>
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
        <td><?php echo $registro['documento']; ?></td>
        <td align="center"><a href="index.php?view=controller/editar_proveedores.php&id=<?php echo $registro['idProveedor']?>"class="edit-btn">Editar</a></td>
  	</tr>
  <?php  }  ?>
</table>