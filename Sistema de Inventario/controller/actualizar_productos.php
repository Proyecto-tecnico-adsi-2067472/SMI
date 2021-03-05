<?php
    require_once "model/producto.php";
    $producto = new Producto();
    $consulta = $producto->actualizarProducto($_REQUEST['idProd'],$_REQUEST['nombre'],$_REQUEST['descripcion'],$_REQUEST['idMarca'],$_REQUEST['precio'],$_REQUEST['fecha_ven']);
    if ($consulta == true) {
        echo'<script type="text/javascript">    alert("Producto Actualizado con Exito!");  window.location.href="http://localhost:8012/inventario/index.php?view=controller/productos.php"  </script>';
    }
?>