<?php
require_once 'model/conexion.php';

class Producto
{	
	Private $id;
    Private $nombre;
    Private $descripcion;
    Private $idMarca;
	Private $precio;
	Private $fechaVencimiento;
	
	public function Producto()
	{
		$this->conexion = Conexion::Conectar();
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function getDescripcion()
	{
		return $this->descripcion;
	}

	public function getIdMarca()
	{
		return $this->idMarca;
	}

	public function getPrecio()
	{
		return $this->precio;
	}

	public function getFechaVencimiento()
	{
		return $this->fechaVencimiento;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setNombre($newVal)
	{
		$this->nombre = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setDescripcion($newVal)
	{
		$this->descripcion = $newVal;
	}
	
	/**
	 * 
	 * @param newVal
	 */
	public function setIdMarca($newVal)
	{
		$this->idMarca = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setPrecio($newVal)
	{
		$this->precio = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setFechaVencimiento($newVal)
	{
		$this->fechaVencimiento = $newVal;
	}
		
	public function crearProducto($nombre,$descripcion,$fechaVencimiento)
	{
		$this->nombre=$nombre;
		$this->descripcion=$descripcion;
		$this->fechaVencimiento=$fechaVencimiento;
		$this->idMarca=$idMarca;
	}
	
	// public function agregarEmpleado()
	// {	
	// 	// $this->Conexion=Conectarse();
	// 	$sql="INSERT INTO personas(nombre,descripcion,idMarca,idRol,email,password,doc_id)
    //     values ('$this->nombre','$this->descripcion','$this->idMarca','$this->fechaVencimiento','$this->email',$this->password,'$this->identificacion')";
	// 	$resultado=$this->Conexion->query($sql);
	// 	return $resultado;	
	// }

	public function agregarEmpleado()
	{	
		// $md5password = md5($password);
		$consulta = $this->conexion->prepare("INSERT INTO personas(nombre,descripcion,idMarca,idRol,email,password,doc_id) VALUES (:nombre,:descripcion,:idMarca,:idRol,:email,:password,:doc_id)");
		$consulta->execute(['nombre' => $this->nombre,'descripcion' => $this->descripcion,'idMarca' => $this->idMarca,'idRol' => $this->fechaVencimiento,'email' => $this->email,'password' => $this->password,'doc_id' => $this->identificacion]);
		return $resultado;	
	}

	public function consultarEmpleadosPorId()
	{
		$consulta="SELECT * FROM personas, rol  where (personas.idRol=rol.idRol)";
		$resultado=$this->conexion->query($consulta);
		return $resultado;	
	}

	// public function consultarEmpleados()
	// {
	// 	$consulta="SELECT * FROM personas";
	// 	$resultado=$this->conexion->query($consulta);
	// 	return $resultado;	
	// }

	public function consultarProductos()
	{
		$consulta=$this->conexion->prepare("SELECT productos.idProd, productos.nombre, productos.descripcion, productos.idMarca, productos.precio, productos.fecha_ven, marcas.nombreMarca FROM productos JOIN marcas ON productos.idMarca = marcas.idMarca");
		$consulta->execute();
		while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
			$productos[]=$filas;
		}
		return $productos;	
	}
	
	
	public function consultarEmpleado($identificacion)
	{
		$consulta="SELECT * FROM personas where doc_id='$identificacion'";
		$resultado=$this->conexion->query($consulta);
		return $resultado;	
	}

}
?>