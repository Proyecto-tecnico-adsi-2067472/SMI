<?php
    require_once "model/marca.php";
    require_once "model/producto.php";
    $producto = new Producto();
    $marca = new Producto();
    $marcas = $marca->consultarMarcas();
    $resultado = $producto->consultarProducto($_GET["id"]);
    foreach ($resultado as $registro) {
?>    
<div>
	<div>
	    <h1 align="center">EDITAR PRODUCTO</h1>
	    <br>
	    <form  method="post"  action="index.php?view=controller/actualizar_productos.php">

            <div>
                <b>C&oacute;digo</b>
                <div>
                    <input type="text" name="idProd" value=<?php echo $registro['idProd'];?>   placeholder="Nombre">
                </div>
            </div>

            <div>
                <b>Nombre</b>
                <div>
                <input type="text" name="nombre" value=<?php echo $registro['nombre'];?>   placeholder="Nombre">
                </div>
            </div>

            <div>
                <b>Descripci&oacute;n</b>
                <div>
                <input type="text" name="descripcion" value="<?php echo $registro['descripcion'];?>" placeholder="descripcion">
                </div>
            </div>

            <div>
              <b>Marca</b>
              <div >
                  <select name="idMarca" id="selectCargo">
                  <option value=<?php echo $registro['idMarca']; ?>><?php echo $registro['nombreMarca']; ?></option>
                        <?php foreach($marcas as $value){ ?>
                          <option value=<?php echo $value['idMarca']; ?>><?php echo $value['nombreMarca']; ?></option>
                        <?php } ?>
                  </select>
              </div>
            </div>
            
            <div>
                <b>Precio</b>
                <div>
                <input type="text" name="precio" value="<?php echo $registro['precio'];?>" placeholder="precio">
                </div>
            </div>

            <div>
                <b>Fecha de Vencimiento</b>
                <div>
                <input type="date" name="fecha_ven" value="<?php echo $registro['fecha_ven'];?>" placeholder="2021/01/31">
                </div>
            </div>
            &nbsp;
            <div>
                <div>
                    <input type="hidden" name="idProd" value="<?php echo $registro['idProd']; }?>">
                    <button type="submit" >Actualizar producto</button>
                </div>
             </div>
        </form>
	</div>
</div>