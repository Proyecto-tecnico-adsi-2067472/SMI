<?php
    require_once "model/empleado.php";
    $empleado = new Empleado();
    $resultado = $empleado->consultarEmpleado($_GET["id"]);
    // $resultado = $empleado->consultarEmpleados();
    foreach ($resultado as $registro) {
?>    
<div class="row">
	<div class="col-md-12">
	    <h1 align="center">EDITAR EMPLEADO</h1>
	    <br>
	    <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=controller/actualizar_empleados.php">
            <div class="form-group">
                <b>Nombre</b>
                <div class="col-md-6">
                <input type="text" name="nombre" value=<?php echo $registro['nombre'];?> class="form-control" id="name" placeholder="Nombre">
                </div>
            </div>

            <div class="form-group">
                <b>Apellido</b>
                <div class="col-md-6">
                <input type="text" name="apellido" value="<?php echo $registro['apellido'];?>" class="form-control" id="lastname" placeholder="Apellido">
                </div>
            </div>

            <div class="form-group">
                <b>Telefono</b>
                <div class="col-md-6">
                <input type="text" name="telefono" value="<?php echo $registro['telefono'];?>" class="form-control" id="resultadoname" placeholder="Telefono">
                </div>
            </div>
            <div class="form-group">
                <b>Email</b>
                <div class="col-md-6">
                <input type="text" name="email" value="<?php echo $registro['email'];?>" class="form-control" id="email" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <b>Documento de Identidad</b>
                <div class="col-md-6">
                <input type="text" name="doc_id" value="<?php echo $registro['doc_id']; ?>" class="form-control" id="email" placeholder="Documento de Identidad">
                </div>
            </div>
            &nbsp;
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <input type="hidden" name="idPer" value="<?php echo $registro['idPer']; }?>">
                    <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
                </div>
             </div>
        </form>
	</div>
</div>