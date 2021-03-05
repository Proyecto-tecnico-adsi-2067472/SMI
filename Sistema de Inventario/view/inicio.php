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
    <title>Home</title>
    <link rel="stylesheet" href=" css/estilos.css">
</head>
<body>

    <div id="divContenedor">
      <div id="divEncabezado"> <?php include "view/encabezado.php";?></div>
      <!-- <div id="">
        <h1>Bienvenido <?php echo $user->getNombre();  ?></h1>
      </div> -->
      <div id="divMenu">       
        <a href="index.php?view=controller/bienvenida.php">Inicio</a>
        <a href="index.php?view=controller/empleados.php">Usuarios</a>
        <a href="index.php?view=controller/productos.php">Productos</a>
        <a href="index.php?view=controller/marcas.php">Marcas</a>
        <a href="index.php?view=controller/proveedores.php">Proveedores</a>
        <a href="index.php?view=controller/reportes.php">Reportes</a>
      </div>
      <div id="divContenido">
        <?php include_once $view; ?>
      </div>
    </div>
    <!-- <div id="divPiePagina"> <?php include "view/piePagina.php";?></div>     -->
</div>
    
</body>
</html>