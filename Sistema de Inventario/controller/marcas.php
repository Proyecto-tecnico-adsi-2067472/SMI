<?php
require_once "model/marca.php";
if (!isset($_SESSION['user'])){
	header("location:index.php?");
}
	
extract ($_REQUEST);
if (!isset($_REQUEST['x'])) {
  $_REQUEST['x']=0; 
}
	
$marca = new Marca();
$resultado = $marca->consultarMarcas();
?>

<h1 align="center"> LISTAR MARCAS</h1>
<a href="index.php?view=controller/agregar_marcas.php" class="add-btn"> Ingresar Marca</a>
<table class="table">
  <tr>
    <th>C&oacute;digo</th>
    <th>Nombre</th>
    <th>Pa&iacute;s</th>
    <th></th>
  </tr>
  <?php
    foreach ($resultado as $registro) {
	?>
	<tr>
    <td><?php echo $registro['idMarca']; ?> </td>
    <td><?php echo $registro['nombreMarca']; ?></td>
    <td><?php echo $registro['paisMarca']; ?></td>
    <td align="center"><a href="index.php?view=controller/editar_marcas.php&id=<?php echo $registro['idMarca']?>"class="edit-btn">Editar</a></td>
  </tr>
  <?php  }  ?>
</table>
