<?php
require_once 'model/conexion.php';

class Movimiento
{	
	Private $id;
    Private $nombre;
    Private $descripcion;
    Private $id_marca;
	Private $precio_entrada;
	Private $fechaVencimiento;
	
	public function Movimiento()
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

	public function getid_marca()
	{
		return $this->id_marca;
	}

	public function getprecio_entrada()
	{
		return $this->precio_entrada;
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
	
	public function setid_marca($newVal)
	{
		$this->id_marca = $newVal;
	}

	public function setprecio_entrada($newVal)
	{
		$this->precio_entrada = $newVal;
	}

	public function setFechaVencimiento($newVal)
	{
		$this->fechaVencimiento = $newVal;
	}
	
	public function actualizarMovimiento($id_producto,$cantidad,$fecha,$id_persona,$movimiento)
	{
		$consulta = $this->conexion->prepare("UPDATE movimientos SET nombre = ?,descripcion = ?,precio_entrada = ?,precio_salida = ?,id_categoria = ?,id_marca = ?,id_estado = ? WHERE id_movimiento = ?");
		$consulta->execute(array($nombre,$descripcion,$precio_entrada,$precio_salida,$id_categoria,$id_marca,$id_estado,$id));
		if ($consulta) {
			return true;
		}else{
			return false;		
		}
	}

	public function agregarMovimiento($id_producto,$cantidad,$total,$fecha,$movimiento)
	{	
		$consulta = $this->conexion->prepare("INSERT INTO movimientos(id_producto,cantidad,total,fecha,movimiento) VALUES (?,?,?,?,?)");
		$consulta->execute(array($id_producto,$cantidad,$total,$fecha,$movimiento));
		if ($consulta) {
			return true;
		}else{
			return false;		
		}	
	}
	
	public function consultarMovimientos()
	{
		$consulta=$this->conexion->prepare("SELECT m.id_movimiento, p.nombre, m.cantidad, m.total ,m.fecha , pe.nombre, m.movimiento FROM movimientos AS m JOIN productos AS p ON m.id_producto = p.id_producto JOIN personas AS pe ON m.id_persona = pe.id_persona");
		$consulta->execute();
		// while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
		// 	$Movimientos[]=$filas;
		// }
		return $consulta;	
	}

    public function consultarEntradas()
	{
		$consulta=$this->conexion->prepare("SELECT m.id_movimiento, p.nombre, m.cantidad, m.total ,m.fecha , m.movimiento FROM movimientos AS m JOIN productos AS p ON m.id_producto = p.id_producto WHERE movimiento = 'entrada'");
		$consulta->execute();
		// while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
		// 	$Movimientos[]=$filas;
		// }
		return $consulta;	
	}

    public function consultarSalidas()
	{
		$consulta=$this->conexion->prepare("SELECT m.id_movimiento, p.nombre, m.cantidad, m.total ,m.fecha , m.movimiento FROM movimientos AS m JOIN productos AS p ON m.id_producto = p.id_producto WHERE movimiento = 'salida'");
		$consulta->execute();
		// while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
		// 	$Movimientos[]=$filas;
		// }
		return $consulta;	
	}

	// public function consultarMovimiento($id)
	// {
	// 	$consulta=$this->conexion->prepare("SELECT p.id_movimiento, p.nombre, p.descripcion, p.precio_entrada,p.precio_salida, p.id_marca, m.nombre_marca,p.id_categoria, p.id_estado, c.nombre_categoria,e.nombre_estado FROM Movimientos AS p JOIN marcas AS m ON p.id_marca = m.id_marca JOIN categorias AS c ON p.id_categoria = c.id_categoria JOIN estado AS e ON p.id_estado = e.id_estado WHERE p.id_movimiento = $id");
	// 	$consulta->execute();
	// 	return $consulta;	
	// }

	// public function consultarMovimiento($id)
	// {
	// 	$consulta=$this->conexion->prepare("SELECT * FROM Movimientos WHERE id_movimiento=$id");
	// 	$consulta->execute();
	// 	return $consulta;	
	// }
}
?>