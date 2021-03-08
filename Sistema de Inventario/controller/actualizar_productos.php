<?php
    require_once "model/producto.php";
    $producto = new Producto();
    $consulta = $producto->actualizarProducto($_REQUEST['id_producto'],$_REQUEST['nombre'],$_REQUEST['descripcion'],$_REQUEST['precio_entrada'],$_REQUEST['precio_salida'],$_REQUEST['id_categoria'],$_REQUEST['id_marca'],$_REQUEST['id_estado']);
    if ($consulta == true) {
        echo'<script type="text/javascript">    alert("Producto Actualizado con Exito!");  window.location.href="http://localhost:8012/inventario/index.php?view=controller/productos.php"  </script>';
    }
?>