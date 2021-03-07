<div>
	<div>
	<h1 align="center">AGREGAR PROVEEDOR</h1>
	<br>
	<form method="post" action="index.php?view=controller/validar_nuevo_proveedor.php">

  <div>
    <b>Nombre*</b>
    <div >
      <input type="text" name="nombre" required placeholder="Nombre">
    </div>
  </div>

  <div>
    <b>Apellido*</b>
    <div >
      <input type="text" name="apellido" required placeholder="Apellido">
    </div>
  </div>

  <div>
    <b>Telefono</b>
    <div>
      <input type="text" name="telefono" placeholder="Telefono">
    </div>
  </div>

  <div>
    <b>Correo</b>
    <div >
      <input type="text" name="email" placeholder="Email">
    </div>
  </div>

  <div>
    <b>Documento de Identidad*</b>
    <div >
      <input type="text" name="documentoId" required placeholder="Documento de Identidad">
    </div>
  </div>

  <p>* Campos obligatorios</p>

  <div>
    <div>
      <button type="submit" class="btn btn-primary">Agregar proveedor</button>
    </div>
  </div>
</form>
	</div>
</div>