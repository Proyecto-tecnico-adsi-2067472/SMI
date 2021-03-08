<?php
    require_once "model/producto.php";
    // $producto = new Producto();
    $producto = new Producto();
    $productos = $producto->mostrarProductos();

    // $categoria = new Categoria();
    // $categorias = $categoria->consultarCategorias();
    
    // $resultado = $producto->consultarProducto($_GET["id"]);
    // foreach ($resultado as $registro) {
?>   

<div>
	<div>
	<h1 align="center">AGREGAR SALIDA</h1>
	<br>
	<form method="post" action="index.php?view=controller/validar_nueva_salida.php">

    <div>
      <b>Producto*</b>
      <div>
          <select name="id_producto" id="selectCargo">
                <?php foreach($productos as $value){ ?>
                  <option value=<?php echo $value['id_producto']; ?>><?php echo $value['nombre']; ?></option>
                <?php } ?>
          </select>
    </div>
  </div>

  <div>
    <b>Cantidad*</b>
    <div >
      <input type="text" name="cantidad" placeholder="cantidad" required>
    </div>
  </div>

  <!-- <div>
    <b>Total</b>
    <div >
      <input type="text" name="total"  required placeholder="Precio de salida">
    </div>
  </div> -->

    <div>
        <b>Fecha de Venta*</b>
        <div>
            <input type="date" name="fecha" placeholder="2021/01/31" required>
        </div>
    </div>
    <input type="hidden" name="movimiento" value='salida'>
  <!-- <div>
      <b>Activo</b>
      <div>
          <input type="checkbox" name="estado">
    </div>
  </div> -->
    <!-- <div>
        <b>Fecha de Vencimiento</b>
        <div>
            <input type="date" name="fecha_ven" placeholder="2021/01/31">
        </div>
    </div> -->

  <p>* Campos obligatorios</p>

  <div>
    <div>
      <button type="submit">Agregar Salida</button>
    </div>
  </div>
</form>
	</div>
</div>