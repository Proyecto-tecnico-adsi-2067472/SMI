<?php
    require_once "model/marca.php";
    $marca = new marca();
    $consulta = $marca->agregarMarca($_REQUEST['id_marca'],$_REQUEST['nombre_marca'],$_REQUEST['pais_marca']);
    if ($consulta == true) {
        echo'<script type="text/javascript">    alert("Marca Agregada con Exito!");  window.location.href="http://localhost:8012/inventario/index.php?view=controller/marcas.php"  </script>';
    }
?>