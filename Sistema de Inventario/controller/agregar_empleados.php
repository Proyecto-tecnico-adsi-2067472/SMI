<?php
    require_once "model/empleado.php";
    $empleado = new Empleado();
    $cargo = $empleado->mostrarCargos();
?>   

<div class="row">
	<div class="col-md-12">
	<h1 align="center">AGREGAR EMPLEADO</h1>
	<br>
	<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=controller/validar_nuevo_empleado.php" role="form">

  <div class="form-group">
    <b>Nombre*</b>
    <div class="col-md-6">
      <input type="text" name="nombre" class="form-control" required placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <b>Apellido*</b>
    <div class="col-md-6">
      <input type="text" name="apellido" required class="form-control" required placeholder="Apellido">
    </div>
  </div>

  <div class="form-group">
    <b>Telefono</b>
    <div class="col-md-6">
      <input type="text" name="telefono" class="form-control" placeholder="Telefono">
    </div>
  </div>

  <div class="form-group">
    <b>Cargo*</b>
    <div class="col-md-6">
        <select name="cargo" id="selectCargo">
            <!-- <option value="">Elige un valor</option> -->
              <?php foreach($cargo as $registro){ ?>
                <option value="<?php echo $registro['idRol']; ?>"><?php echo $registro['descRol']; ?></option>
              <?php } ?>
        </select>
    </div>
  </div>

  <div class="form-group">
    <b>Email*</b>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" required placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <b>Contrase&ntilde;a*</b>
    <div class="col-md-6">
      <input type="password" name="password" class="form-control" required placeholder="Contrase&ntilde;a">
    </div>
  </div>

  <div class="form-group">
    <b>Documento de Identidad*</b>
    <div class="col-md-6">
      <input type="text" name="doc_id" class="form-control" required placeholder="Documento de Identidad">
    </div>
  </div>

  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Empleado</button>
    </div>
  </div>
</form>
	</div>
</div>