<?php
    require_once "model/categoria.php";
    $categoria = new Categoria();
    $consulta = $categoria->actualizarCategoria($_REQUEST['id_categoria'],$_REQUEST['nombre_categoria']);
    if ($consulta == true) {
        echo'<script type="text/javascript">    alert("Categoria Actualizada con Exito!");  window.location.href="http://localhost:8012/inventario/index.php?view=controller/categorias.php"  </script>';
    }
?>