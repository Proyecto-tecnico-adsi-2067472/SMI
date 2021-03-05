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
                <b>C&oacute;digo</b>
                <div class="col-md-6">
                <input type="text" name="idMarca" value=<?php echo $registro['idMarca'];?> class="form-control"  placeholder="Codigo">
                </div>
            </div>

            <div class="form-group">
                <b>Nombre</b>
                <div class="col-md-6">
                <input type="text" name="nombreMarca" value="<?php echo $registro['nombreMarca'];?>" class="form-control" placeholder="Nombre">
                </div>
            </div>

            <div class="form-group">
                <b>Pa&iacute;s</b>
                <div class="col-md-6">
                <input type="text" name="paisMarca" value="<?php echo $registro['paisMarca'];?>" class="form-control" placeholder="Pais">
                </div>
            </div>
        
            &nbsp;
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <input type="hidden" name="idPer" value="<?php echo $registro['idMarca']; }?>">
                    <button type="submit" class="btn btn-primary">Actualizar Marca</button>
                </div>
             </div>
        </form>
	</div>
</div>