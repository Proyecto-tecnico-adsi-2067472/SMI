<?php
    require_once "model/proveedor.php";
    $proveedor = new Proveedor();
    $consulta = $proveedor->actualizarProveedor($_REQUEST['id_proveedor'],$_REQUEST['nombre'],$_REQUEST['apellido'],$_REQUEST['telefono'],$_REQUEST['email']);
    if ($consulta == true) {
        echo'<script type="text/javascript">    alert("Proveedor Actualizado con Exito!");  window.location.href="http://localhost:8012/inventario/index.php?view=controller/proveedores.php"  </script>';
    }
?>