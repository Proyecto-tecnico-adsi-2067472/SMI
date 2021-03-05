<div class="row">
	<div class="col-md-12">
	<h1 align="center">AGREGAR MARCA</h1>
	<br>
	<form class="form-horizontal" method="post" action="index.php?view=controller/validar_nueva_marca.php" role="form">

  <div class="form-group">
    <b>C&oacute;digo*</b>
    <div class="col-md-6">
      <input type="text" name="idMarca" class="form-control" required placeholder="Codigo">
    </div>
  </div>

  <div class="form-group">
    <b>Nombre Marca*</b>
    <div class="col-md-6">
      <input type="text" name="nombreMarca" required class="form-control" required placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <b>Pa&iacute;s Marca</b>
    <div class="col-md-6">
      <input type="text" name="paisMarca" class="form-control" placeholder="Pais">
    </div>
  </div>

  <p>* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar marca</button>
    </div>
  </div>
</form>
	</div>
</div>