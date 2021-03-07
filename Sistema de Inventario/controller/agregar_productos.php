<?php
    require_once "model/marca.php";
    require_once "model/producto.php";
    require_once "model/categoria.php";
    // $producto = new Producto();
    $marca = new Producto();
    $marcas = $marca->consultarMarcas();

    $categoria = new Categoria();
    $categorias = $categoria->consultarCategorias();
    
    // $resultado = $producto->consultarProducto($_GET["id"]);
    // foreach ($resultado as $registro) {
?>   

<div>
	<div>
	<h1 align="center">AGREGAR PRODUCTO</h1>
	<br>
	<form method="post" action="index.php?view=controller/validar_nuevo_producto.php">

    <div>
        <b>C&oacute;digo*</b>
        <div>
            <input type="text" name="id_producto" required placeholder="Codigo de Producto">
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
    <b>Precio Entrada*</b>
    <div >
      <input type="text" name="precio_entrada"  required placeholder="Precio de entrada">
    </div>
  </div>

  <div>
    <b>Precio Salida*</b>
    <div >
      <input type="text" name="precio_salida"  required placeholder="Precio de salida">
    </div>
  </div>

  <div>
      <b>Categoria*</b>
      <div>
          <select name="id_categoria" id="selectCargo">
                <?php foreach($categorias as $value){ ?>
                  <option value=<?php echo $value['id_categoria']; ?>><?php echo $value['nombre_categoria']; ?></option>
                <?php } ?>
          </select>
    </div>
  </div>

  <div>
      <b>Marca*</b>
      <div>
          <select name="id_marca" id="selectCargo">
                <?php foreach($marcas as $value){ ?>
                  <option value=<?php echo $value['id_marca']; ?>><?php echo $value['nombre_marca']; ?></option>
                <?php } ?>
          </select>
    </div>
  </div>

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
      <button type="submit">Agregar producto</button>
    </div>
  </div>
</form>
	</div>
</div>