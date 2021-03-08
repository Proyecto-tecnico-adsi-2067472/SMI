<?php
require_once "model/categoria.php";
if (!isset($_SESSION['user'])){
	header("location:index.php?");
}
	
extract ($_REQUEST);
if (!isset($_REQUEST['x'])) {
  $_REQUEST['x']=0; 
}
	
$categoria = new Categoria();
$resultado = $categoria->consultarcategorias();
?>

<h1 align="center"> LISTAR CATEGORIAS</h1>
<a href="index.php?view=controller/agregar_categorias.php" class="add-btn"> Ingresar Categoria</a>
<table class="table">
  <tr>
    <th>C&oacute;digo</th>
    <th>Nombre</th>
    <th></th>
  </tr>
  <?php
    foreach ($resultado as $registro) {
	?>
	<tr>
    <td><?php echo $registro['id_categoria']; ?> </td>
    <td><?php echo $registro['nombre_categoria']; ?></td>
    <td align="center"><a href="index.php?view=controller/editar_categorias.php&id=<?php echo $registro['id_categoria']?>"class="edit-btn">Editar</a></td>
  </tr>
  <?php  }  ?>
</table>
