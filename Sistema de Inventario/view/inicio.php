<?php
  extract ($_REQUEST);
  if (!isset($_SESSION['user'])){
	  header("location:index.php");
  }
  if (!isset($_REQUEST['view'])){
	  $view="controller/bienvenida.php";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Inventario</title>
    <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href=" css/estilos.css">
    <script>$(document).ready(function(){
            $('.submenu-toggle').click(function () {
              $(this).parent().children('ul.submenu').toggle(200);
            });
            $('.submenu-toggle').click();
          });
    </script>
</head>
<body>

    <div id="divContenedor">
      <div id="divEncabezado"> <?php include "view/encabezado.php";?></div>
      <div id="divMenu">       
        <a href="index.php?view=controller/bienvenida.php">Inicio</a>
        <a href="index.php?view=controller/empleados.php">Empleados</a>
        <a href="index.php?view=controller/productos.php">Productos</a>
        <a href="index.php?view=controller/marcas.php">Marcas</a>
        <a href="index.php?view=controller/categorias.php">Categorias</a>
        <a href="#" class="submenu-toggle">
          <span>Movimientos</span>
        </a>
        <ul class="nav submenu">
          <li><a href="index.php?view=controller/entradas.php">Entradas</a> </li>
          <li><a href="index.php?view=controller/salidas.php">Salidas</a> </li>
        </ul>
        <a href="index.php?view=controller/proveedores.php">Proveedores</a>
      </div>
      <div id="divContenido">
        <?php include_once $view; ?>
      </div>
    </div>
    <!-- <div id="divPiePagina"> <?php include "view/piePagina.php";?></div>     -->
</div>
</body>
</html>