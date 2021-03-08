<?php
require_once 'conexion.php';

class Proveedor
{	
	Private $id;
    Private $nombre;
    Private $apellido;
    Private $telefono;
	Private $email;
	Private $identificacion;	
	private $conexion;

	
	public function Proveedor()
	{
		$this->conexion = Conexion::Conectar();
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function getApellido()
	{
		return $this->apellido;
	}

	public function getTelefono()
	{
		return $this->telefono;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getIdentificacion()
	{
		return $this->identificacion;
	}

	public function setNombre($newVal)
	{
		$this->nombre = $newVal;
	}

	public function setApellido($newVal)
	{
		$this->apellido = $newVal;
	}
	
	public function setTelefono($newVal)
	{
		$this->telefono = $newVal;
	}

	public function setEmail($newVal)
	{
		$this->email = $newVal;
	}

	public function setIdentificacion($newVal)
	{
		$this->identificacion = $newVal;
	}

	
	public function actualizarProveedor($id,$nombre,$apellido,$telefono,$email)
	{
		$consulta = $this->conexion->prepare("UPDATE proveedores SET nombre = ?,apellido = ?,telefono = ?,email = ? WHERE id_proveedor = ?");
		$consulta->execute(array($nombre,$apellido,$telefono,$email,$id));
		if ($consulta) {
			return true;
		}else{
			return false;		
		}
	}

	public function agregarProveedor($nombre,$apellido,$telefono,$email,$identificacion)
	{	
		$consulta = $this->conexion->prepare("INSERT INTO proveedores(nombre,apellido,telefono,email,documentoId) VALUES (?,?,?,?,?)");
		$consulta->execute(array($nombre,$apellido,$telefono,$email,$identificacion));
		if ($consulta) {
			return true;
		}else{
			return false;		
		}	
	}

	// public function consultarProveedores()
	// {
	// 	$consulta=$this->conexion->prepare("SELECT * FROM proveedores ");
	// 	$consulta->execute();
	// 	while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
	// 		$proveedores[]=$filas;
	// 	}
	// 	return $proveedores;	
	// }

	public function consultarProveedores()
	{
		$consulta=$this->conexion->prepare("SELECT * FROM proveedores ");
		$consulta->execute();
		// while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
		// 	$proveedores[]=$filas;
		// }
		return $consulta;	
	}

	public function consultarProveedor($id)
	{
		$consulta=$this->conexion->prepare("SELECT * FROM proveedores WHERE id_proveedor=$id");
		$consulta->execute();
		return $consulta;	
	}

}
?>