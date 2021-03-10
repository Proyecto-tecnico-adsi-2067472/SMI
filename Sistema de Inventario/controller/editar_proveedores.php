<?php
    require_once "model/proveedor.php";
    $proveedor = new Proveedor();
    $resultado = $proveedor->consultarProveedor($_GET["id"]);
    foreach ($resultado as $registro) {
?>    
<div>
	<div>
	    <h1 align="center">EDITAR PROVEEDOR</h1>
	    <br>
	    <form  method="post"  action="index.php?view=controller/actualizar_proveedores.php">
            <div>
                <b>Nombre</b>
                <div>
                <input type="text" name="nombre" value=<?php echo $registro['nombre'];?>   placeholder="Nombre">
                </div>
            </div>

            <div>
                <b>Apellido</b>
                <div>
                <input type="text" name="apellido" value="<?php echo $registro['apellido'];?>" placeholder="Apellido">
                </div>
            </div>

            <div>
                <b>Telefono</b>
                <div>
                <input type="text" name="telefono" value="<?php echo $registro['telefono'];?>" placeholder="Telefono">
                </div>
            </div>
            
            <div>
                <b>Email</b>
                <div>
                <input type="text" name="email" value="<?php echo $registro['email'];?>" placeholder="Email">
                </div>
            </div>
            &nbsp;
            <div>
                <div>
                    <input type="hidden" name="id_proveedor" value="<?php echo $registro['id_proveedor']; }?>">
                    <button type="submit" class="add-form">Actualizar Proveedor</button>
                </div>
             </div>
        </form>
	</div>
</div>