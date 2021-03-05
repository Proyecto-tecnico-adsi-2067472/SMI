<?php
require_once "model/producto.php";
if (!isset($_SESSION['user'])){
	header("location:index.php?");
}
	
extract ($_REQUEST);
if (!isset($_REQUEST['x'])) {
  $_REQUEST['x']=0; 
}
	
$producto = new Producto();
$resultado = $producto->consultarProductos();
?>

<h1 align="center"> LISTAR PRODUCTOS</h1>
<a href="index.php?view=controller/agregar_productos.php" class="add-btn"> Nuevo producto</a>
<table class="table">
  <tr>
    <th>C&oacute;digo</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Marca</th>
    <th>Precio</th>
    <th>Fecha de Vencimiento</th>
    <th></th>
  </tr>
  <?php
    foreach ($resultado as $registro) {
	?>
	<tr>
  <td><?php  echo $registro['idProd'];  ?> </td>
  <td><?php  echo $registro['nombre'];  ?> </td>
  <td><?php  echo $registro['descripcion'];  ?></td>
  <td><?php  echo $registro['nombreMarca'];  ?></td>
  <td><?php  echo $registro['precio'];  ?></td>
  <td><?php  echo $registro['fecha_ven'];  ?></td>
    <td align="center"><a href="index.php?view=controller/editar_productos.php&id=<?php echo $registro['idProd']?>"class="edit-btn">Editar</a></td>
  </tr>
  <?php  }  ?>
</table>
