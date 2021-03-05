<?php
require_once 'model/conexion.php';

class Empleado
{	
	Private $id;
    Private $nombre;
    Private $apellido;
    Private $telefono;
	Private $cargo;
	Private $email;
    Private $password;
	Private $identificacion;	
	private $conexion;

	
	public function Empleado()
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

	public function getCargo()
	{
		return $this->cargo;
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

	public function setCargo($newVal)
	{
		$this->cargo = $newVal;
	}

	public function setEmail($newVal)
	{
		$this->email = $newVal;
	}

	public function setIdentificacion($newVal)
	{
		$this->identificacion = $newVal;
	}
	
	public function actualizarEmpleado($id,$nombre,$apellido,$telefono,$email,$identificacion)
	{
		$consulta = $this->conexion->prepare("UPDATE personas SET nombre = ?,apellido = ?,telefono = ?,email = ?,doc_id = ? WHERE idPer = ?");
		$consulta->execute(array($nombre,$apellido,$telefono,$email,$identificacion,$id));
		if ($consulta) {
			return true;
		}else{
			return false;		
		}
	}

	public function mostrarCargos()
	{
		$consulta=$this->conexion->prepare("SELECT * FROM Rol");
		$consulta->execute();
		return $consulta;	
	}


	public function agregarEmpleado($nombre,$apellido,$telefono,$cargo,$email,$password,$identificacion)
	{	
		$consulta = $this->conexion->prepare("INSERT INTO personas(nombre,apellido,telefono,idRol,email,password,doc_id) VALUES (?,?,?,?,?,?,?)");
		$consulta->execute(array($nombre,$apellido,$telefono,$cargo,$email,$password,$identificacion));
		if ($consulta) {
			return true;
		}else{
			return false;		
		}	
	}

	public function consultarEmpleados()
	{
		$consulta=$this->conexion->prepare("SELECT p.idPer, p.nombre, p.apellido, p.telefono, p.email, p.doc_id, r.descRol FROM personas AS p JOIN rol AS r ON p.idRol = r.idRol");
		$consulta->execute();
		while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
			$empleados[]=$filas;
		}
		return $empleados;	
	}

	public function consultarEmpleado($id)
	{
		$consulta=$this->conexion->prepare("SELECT * FROM personas WHERE idPer=$id");
		$consulta->execute();
		return $consulta;	
	}

}
?>