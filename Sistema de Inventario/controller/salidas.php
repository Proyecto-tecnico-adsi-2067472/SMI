<?php
require_once "model/movimiento.php";
if (!isset($_SESSION['user'])){
	header("location:index.php?");
}
	
extract ($_REQUEST);
if (!isset($_REQUEST['x'])) {
  $_REQUEST['x']=0; 
}
	
$movimiento = new Movimiento();
$resultado = $movimiento->consultarSalidas();
// var_dump($resultado);
?>

<h1 align="center"> LISTAR SALIDAS</h1>
<a href="index.php?view=controller/agregar_salidas.php" class="add-btn"> Nueva Salida</a>
<table class="table">
  <tr>
    <th>C&oacute;digo</th>
    <th>Producto</th>
    <th>Cantidad</th>
    <th>Total</th>
    <!-- <th>Responsable</th> -->
    <th>Fecha</th>
  </tr>
  <?php
    foreach ($resultado as $registro) {
	?>
	<tr>
  <td><?php  echo $registro['id_movimiento'];  ?> </td>
  <td><?php  echo $registro['nombre'];  ?> </td>
  <td><?php  echo $registro['cantidad'];  ?></td>
  <td><?php  echo $registro['total'];  ?></td>
  <td><?php  echo $registro['fecha'];  ?></td>
  <!-- <td><?php  echo $registro['nombre'];  ?></td> -->
    <!-- <td align="center"><a href="index.php?view=controller/editar_salidas.php&id=<?php echo $registro['id_producto']?>"class="edit-btn">Editar</a></td> -->
  </tr>
  <?php  }  ?>
</table>
