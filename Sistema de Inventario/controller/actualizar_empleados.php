<?php
    require_once "model/empleado.php";
    $empleado = new Empleado();
    $consulta = $empleado->actualizarEmpleado($_REQUEST['idPer'],$_REQUEST['nombre'],$_REQUEST['apellido'],$_REQUEST['telefono'],$_REQUEST['email'],$_REQUEST['doc_id']);
    if ($consulta == true) {
        echo'<script type="text/javascript">    alert("Empleado Actualizado con Exito!");  window.location.href="http://localhost:8012/inventario/index.php?view=controller/empleados.php"  </script>';
    }
?>