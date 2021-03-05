<?php
    require_once "model/proveedor.php";
    $proveedor = new Proveedor();
    $consulta = $proveedor->agregarProveedor($_REQUEST['nombre'],$_REQUEST['apellido'],$_REQUEST['telefono'],$_REQUEST['email'],$_REQUEST['documento']);
    if ($consulta == true) {
        echo'<script type="text/javascript">    alert("Proveedor Insertado con Exito!");  window.location.href="http://localhost:8012/inventario/index.php?view=controller/proveedores.php"  </script>';
    }
?>