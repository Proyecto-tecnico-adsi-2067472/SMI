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

	public function setNombre($newVal)
	{
		$this->nombre = $newVal;
	}
	
	public function setDescripcion($newVal)
	{
		$this->descripcion = $newVal;
	}
	
	public function setIdMarca($newVal)
	{
		$this->idMarca = $newVal;
	}

	public function setPrecio($newVal)
	{
		$this->precio = $newVal;
	}

	public function setFechaVencimiento($newVal)
	{
		$this->fechaVencimiento = $newVal;
	}
	
	public function actualizarProducto($id,$nombre,$descripcion,$idMarca,$precio,$fecha_ven)
	{
		$consulta = $this->conexion->prepare("UPDATE productos SET idProd = ?, nombre = ?,descripcion = ?,idMarca = ?,precio = ?,fecha_ven = ? WHERE idProd = ?");
		$consulta->execute(array($id,$nombre,$descripcion,$idMarca,$precio,$fecha_ven,$id));
		if ($consulta) {
			return true;
		}else{
			return false;		
		}
	}

	public function agregarProducto($id,$nombre,$descripcion,$idMarca,$precio,$fecha_ven)
	{	
		$consulta = $this->conexion->prepare("INSERT INTO productos(idProd,nombre,descripcion,idMarca,precio,fecha_ven) VALUES (?,?,?,?,?,?)");
		$consulta->execute(array($id,$nombre,$descripcion,$idMarca,$precio,$fecha_ven));
		if ($consulta) {
			return true;
		}else{
			return false;		
		}	
	}

	public function consultarMarca($id){
		$consulta=$this->conexion->prepare("SELECT * FROM marcas WHERE idMarca = $id");
		$consulta->execute();
		return $consulta;
	}

	public function consultarMarcas()
	{
		$consulta=$this->conexion->prepare("SELECT * FROM marcas ");
		$consulta->execute();
		while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
			$Marcas[]=$filas;
		}
		return $Marcas;	
	}

	public function consultarProductos()
	{
		$consulta=$this->conexion->prepare("SELECT p.idProd, p.nombre, p.descripcion, p.precio, p.fecha_ven, m.nombreMarca FROM productos AS p JOIN marcas AS m ON p.idMarca = m.idMarca");
		$consulta->execute();
		while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
			$Productos[]=$filas;
		}
		return $Productos;	
	}
	
	public function consultarProducto($id)
	{
		$consulta=$this->conexion->prepare("SELECT p.idProd, p.nombre, p.descripcion, p.precio, p.fecha_ven, p.idMarca, m.nombreMarca FROM productos AS p JOIN marcas AS m ON p.idMarca = m.idMarca WHERE p.idProd = $id");
		$consulta->execute();
		return $consulta;	
	}

	// public function consultarProducto($id)
	// {
	// 	$consulta=$this->conexion->prepare("SELECT * FROM productos WHERE idProd=$id");
	// 	$consulta->execute();
	// 	return $consulta;	
	// }
}
?>