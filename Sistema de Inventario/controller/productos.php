<?php
require_once "model/producto.php";
if (!isset($_SESSION['user']))
	header("location:index.php?x=2");	
	
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$_REQUEST['x']=0;

// $objConexion=Conectarse();

//$sql="select e.idEmpleado, e.empIdentificacion, e.empNombre, e.empCorreo, e.empFechaIngreso, //c.carNombre, c.carSueldo 
//from empleados e, cargos c 
//where (e.empCargo = c.idcargo)";
// $sql="select * from empleados, cargos  where (empleados.empCargo=cargos.idcargo)";

// $resultado = $objConexion->query($sql);
$productos = new Producto();
$resultado = $productos->consultarProductos();
?>




<h1 align="center"> LISTAR PRODUCTOS</h1>
<table width="89%" border="0" align="center">
  <tr align="center" bgcolor="#FFFF99">
    <td>Nombre</td>
    <td>Descripcion</td>
    <td>Marca</td>
    <td>Precio</td>
    <td>Fecha de Vencimiento</td>
    <td>Editar</td>
    <td>Eliminar</td>
  </tr>
  
  <?php
  //vamos agregar cada fila de la tabla de acuerdo al número de empleados de forma dinamica
  
//   while ($empleado = $resultado->fetch_object())
//   {
    foreach ($resultado as $registro) {
	?>
	<tr bgcolor="#CCCCFF">
        <td><?php  echo $registro['nombre'];  ?> </td>
        <td><?php  echo $registro['descripcion'];  ?></td>
        <td><?php  echo $registro['nombreMarca'];  ?></td>
        <td><?php  echo $registro['precio'];  ?></td>
        <td><?php  echo $registro['fecha_ven'];  ?></td>
        
        <td align="center"><a href="frmActualizarrEmpleado.php?idEmpleado=<?php echo $empleado->idEmpleado?>"><img src="../Imagenes/editar.jpg" 
        
        width="29" height="24" /></a></td>
        
        
        <td align="center"><a href="eliminarEmpleado.php?idEmpleado=<?php echo $empleado->idEmpleado?>"><img src="../Imagenes/eliminar.png" 
        
        width="29" height="24" /></a></td>
  	</tr>
  <?php
  }
  ?>
  
  
  
  
</table>
<p>
<?php
// if ($_REQUEST['x']==1)
// 	echo "Se ha actualizado el Empleado correctamente";
// if ($_REQUEST['x']==2)
// 	echo "Problemas al actualizar el Empleado";	
// if ($_REQUEST['x']==3)
// 	echo "Se ha eliminado el Empleado correctamente";
// if ($_REQUEST['x']==4)
// 	echo "Problemas al eliminar el Empleado";

?>