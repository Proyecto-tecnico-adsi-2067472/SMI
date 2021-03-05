<?php
    require_once "model/empleado.php";
    $empleado = new Empleado();
    $consulta = $empleado->agregarEmpleado($_REQUEST['nombre'],$_REQUEST['apellido'],$_REQUEST['telefono'],$_REQUEST['cargo'],$_REQUEST['email'],$_REQUEST['password'],$_REQUEST['doc_id']);
    if ($consulta == true) {
        echo'<script type="text/javascript">    alert("Empleado Insertado con Exito!");  window.location.href="http://localhost:8012/inventario/index.php?view=controller/empleados.php"  </script>';
    }
?>