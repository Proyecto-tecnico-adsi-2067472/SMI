<?php
    require_once "model/movimiento.php";
    require_once "model/producto.php";
    $movimiento = new Movimiento();
    $producto = new Producto();
    $productos = $producto->mostrarProducto($_REQUEST['id_producto']);
    foreach($productos as $value){
        $precio = $value['precio_salida'];
        $cantidad_actual = $value['cantidad'];
    }
    $total = $precio * $_REQUEST['cantidad'];
    if ($_REQUEST['cantidad'] <= $cantidad_actual){
        $consulta = $movimiento->agregarMovimiento($_REQUEST['id_producto'],$_REQUEST['cantidad'],$total,$_REQUEST['fecha'],$_REQUEST['movimiento']);
        if ($consulta == true) {
            $cantidad_nueva = $cantidad_actual - $_REQUEST['cantidad'];
            $actualizar = $producto->actualizarCantidad($_REQUEST['id_producto'],$cantidad_nueva);
            echo'<script type="text/javascript">    alert("Salida de Productos Insertada con Exito!");  window.location.href="http://localhost:8012/inventario/index.php?view=controller/salidas.php"  </script>';
        }
    }else{
        echo'<script type="text/javascript">    alert("Error la cantidad actual del producto es menor a la cantidad que intenta vender!");  window.location.href="http://localhost:8012/inventario/index.php?view=controller/salidas.php"  </script>';
    }
?>