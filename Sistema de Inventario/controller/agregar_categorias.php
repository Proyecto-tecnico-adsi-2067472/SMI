<div class="row">
	<div class="col-md-12">
	<h1 align="center">AGREGAR categoria</h1>
	<br>
	<form class="form-horizontal" method="post" action="index.php?view=controller/validar_nueva_categoria.php" role="form">

  <div class="form-group">
    <b>Nombre categoria*</b>
    <div class="col-md-6">
      <input type="text" name="nombre_categoria" required class="form-control" required placeholder="Nombre">
    </div>
  </div>

  <p>* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar categoria</button>
    </div>
  </div>
</form>
	</div>
</div>