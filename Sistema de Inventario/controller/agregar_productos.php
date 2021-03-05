<?php
    require_once "model/marca.php";
    require_once "model/producto.php";
    // $producto = new Producto();
    $marca = new Producto();
    $marcas = $marca->consultarMarcas();
    // $resultado = $producto->consultarProducto($_GET["id"]);
    // foreach ($resultado as $registro) {
?>   

<div>
	<div>
	<h1 align="center">AGREGAR PRODUCTO</h1>
	<br>
	<form method="post" action="index.php?view=controller/validar_nuevo_producto.php">

    <div>
        <b>C&oacute;digo</b>
        <div>
            <input type="text" name="idProd" required placeholder="Codigo de Producto">
        </div>
    </div>

  <div>
    <b>Nombre*</b>
    <div >
      <input type="text" name="nombre" required placeholder="Nombre">
    </div>
  </div>

  <div>
    <b>Descripcion</b>
    <div >
      <input type="text" name="descripcion" placeholder="descripcion">
    </div>
  </div>

  <div>
      <b>Marca</b>
      <div>
          <select name="idMarca" id="selectCargo">
                <?php foreach($marcas as $value){ ?>
                  <option value=<?php echo $value['idMarca']; ?>><?php echo $value['nombreMarca']; ?></option>
                <?php } ?>
          </select>
    </div>
  </div>

  <div>
    <b>Precio*</b>
    <div >
      <input type="text" name="precio"  required placeholder="Precio">
    </div>
  </div>

    <div>
        <b>Fecha de Vencimiento</b>
        <div>
            <input type="date" name="fecha_ven" placeholder="2021/01/31">
        </div>
    </div>

  <p>* Campos obligatorios</p>

  <div>
    <div>
      <button type="submit">Agregar producto</button>
    </div>
  </div>
</form>
	</div>
</div>