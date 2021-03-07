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
// var_dump($resultado);
?>

<h1 align="center"> LISTAR PRODUCTOS</h1>
<a href="index.php?view=controller/agregar_productos.php" class="add-btn"> Nuevo producto</a>
<table class="table">
  <tr>
    <th>C&oacute;digo</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Cantidad</th>
    <th>Precio Entrada</th>
    <th>Precio Salida</th>
    <th>Categoria</th>
    <th>Marca</th>
    <th>Fecha Registro</th>
    <th>Estado</th>
    <th></th>
  </tr>
  <?php
    foreach ($resultado as $registro) {
	?>
	<tr>
  <td><?php  echo $registro['id_producto'];  ?> </td>
  <td><?php  echo $registro['nombre'];  ?> </td>
  <td><?php  echo $registro['descripcion'];  ?></td>
  <td><?php  echo $registro['cantidad'];  ?></td>
  <td><?php  echo $registro['precio_entrada'];  ?></td>
  <td><?php  echo $registro['precio_salida'];  ?></td>
  <td><?php  echo $registro['nombre_categoria'];  ?></td>
  <td><?php  echo $registro['nombre_marca'];  ?></td>
  <td><?php  echo $registro['fecha_registro'];  ?></td>
  <td><?php  echo $registro['nombre_estado'];  ?></td>
    <td align="center"><a href="index.php?view=controller/editar_productos.php&id=<?php echo $registro['id_producto']?>"class="edit-btn">Editar</a></td>
  </tr>
  <?php  }  ?>
</table>
