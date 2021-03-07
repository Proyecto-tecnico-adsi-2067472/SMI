<?php
    require_once "model/categoria.php";
    $categoria = new Categoria();
    $resultado = $categoria->consultarCategoria($_GET["id"]);
    // $resultado = $categoria->consultarcategorias();
    foreach ($resultado as $registro) {
?>    
<div class="row">
	<div class="col-md-12">
	    <h1 align="center">EDITAR CATEGORIA</h1>
	    <br>
	    <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=controller/actualizar_categorias.php">

            <div class="form-group">
                <b>Nombre</b>
                <div class="col-md-6">
                <input type="text" name="nombre_categoria" value="<?php echo $registro['nombre_categoria'];?>" class="form-control" placeholder="Nombre de la categoria">
                </div>
            </div>

            &nbsp;
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <input type="hidden" name="id_categoria" value="<?php echo $registro['id_categoria']; }?>">
                    <button type="submit" class="btn btn-primary">Actualizar categoria</button>
                </div>
             </div>
        </form>
	</div>
</div>