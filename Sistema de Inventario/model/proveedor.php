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
	public function setApellido($newVal)
	{
		$this->apellido = $newVal;
	}
	
	/**
	 * 
	 * @param newVal
	 */
	public function setTelefono($newVal)
	{
		$this->telefono = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setEmail($newVal)
	{
		$this->email = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setIdentificacion($newVal)
	{
		$this->identificacion = $newVal;
	}

		
	public function crearProveedor($identificacion,$nombre,$apellido,$email,$telefono)
	{
		$this->identificacion=$identificacion;
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->email=$email;
		$this->telefono=$telefono;
	}
	
	// public function agregarProveedor()
	// {	
	// 	// $this->Conexion=Conectarse();
	// 	$sql="INSERT INTO personas(nombre,apellido,telefono,idRol,email,password,doc_id)
    //     values ('$this->nombre','$this->apellido','$this->Telefono','$this->cargo','$this->email',$this->password,'$this->identificacion')";
	// 	$resultado=$this->Conexion->query($sql);
	// 	return $resultado;	
	// }

	public function agregarProveedor()
	{	
		// $md5password = md5($password);
		$consulta = $this->conexion->prepare("INSERT INTO personas(nombre,apellido,telefono,email,password,identificacion) VALUES (:nombre,:apellido,:telefono,:idRol,:email,:password,:doc_id)");
		$consulta->execute(['nombre' => $this->nombre,'apellido' => $this->apellido,'telefono' => $this->telefono,'idRol' => $this->cargo,'email' => $this->email,'password' => $this->password,'doc_id' => $this->identificacion]);
		return $resultado;	
	}

	public function consultarProveedoresPorId()
	{
		$consulta="SELECT * FROM personas, rol  where (personas.idRol=rol.idRol)";
		$resultado=$this->conexion->query($consulta);
		return $resultado;	
	}

	// public function consultarProveedors()
	// {
	// 	$consulta="SELECT * FROM personas";
	// 	$resultado=$this->conexion->query($consulta);
	// 	return $resultado;	
	// }

	public function consultarProveedores()
	{
		$consulta=$this->conexion->prepare("SELECT * FROM proveedores");
		$consulta->execute();
		while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
			$Proveedors[]=$filas;
		}
		return $Proveedors;	
	}
	
	
	public function consultarProveedor($identificacion)
	{
		$consulta="SELECT * FROM personas where doc_id='$identificacion'";
		$resultado=$this->conexion->query($consulta);
		return $resultado;	
	}

}
?>