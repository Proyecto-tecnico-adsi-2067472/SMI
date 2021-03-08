<?php
if (!isset($_SESSION['user'])){
	header("location:index.php?");
}
	
extract ($_REQUEST);
if (!isset($_REQUEST['x'])) {
  $_REQUEST['x']=0; 
}

?>

<h1 align="center"> Movimientos</h1>
<div id="main">
    <div id="d1"><a href="index.php?view=controller/entradas.php" class="inv-btn">Entradas</a></div>
    <div id="d2"><a href="index.php?view=controller/salidas.php" class="inv-btn">Salidas</a></div>
</div>
