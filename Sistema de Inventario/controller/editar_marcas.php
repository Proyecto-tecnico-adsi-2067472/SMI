<?php
    require_once "model/marca.php";
    $marca = new Marca();
    $resultado = $marca->consultarmarca($_GET["id"]);
    // $resultado = $marca->consultarmarcas();
    foreach ($resultado as $registro) {
?>    
<div class="row">
	<div class="col-md-12">
	    <h1 align="center">EDITAR MARCA</h1>
	    <br>
	    <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=controller/actualizar_marcas.php">
            <div class="form-group">
                <b>Nombre</b>
                <div class="col-md-6">
                <input type="text" name="nombre_marca" value="<?php echo $registro['nombre_marca'];?>" class="form-control" placeholder="Nombre">
                </div>
            </div>

            <div class="form-group">
                <b>Pa&iacute;s</b>
                <div class="col-md-6">
                <input type="text" name="pais_marca" value="<?php echo $registro['pais_marca'];?>" class="form-control" placeholder="Pais">
                </div>
            </div>
        
            &nbsp;
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <input type="hidden" name="id_marca" value="<?php echo $registro['id_marca']; }?>">
                    <button type="submit" class="btn btn-primary">Actualizar Marca</button>
                </div>
             </div>
        </form>
	</div>
</div>