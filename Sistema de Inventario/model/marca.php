<?php
require_once 'model/conexion.php';

class Marca
{	
	Private $id;
    Private $nombreMarca;
    Private $paisMarca;	
	private $conexion;

	
	public function Marca()
	{
		$this->conexion = Conexion::Conectar();
	}

	public function getnombreMarca()
	{
		return $this->nombreMarca;
	}

	public function getpaisMarca()
	{
		return $this->paisMarca;
	}

	public function setnombreMarca($newVal)
	{
		$this->nombreMarca = $newVal;
	}

	public function setpaisMarca($newVal)
	{
		$this->paisMarca = $newVal;
	}
	
	public function actualizarMarca($id,$nombreMarca,$paisMarca)
	{
		$consulta = $this->conexion->prepare("UPDATE marcas SET idMarca = ?, nombreMarca = ?, paisMarca = ? WHERE idMarca = ?");
		$consulta->execute(array($id,$nombreMarca,$paisMarca,$id));
		if ($consulta) {
			return true;
		}else{
			return false;		
		}
	}

	public function agregarMarca($id,$nombreMarca,$paisMarca)
	{	
		$consulta = $this->conexion->prepare("INSERT INTO marcas(idMarca,nombreMarca,paisMarca) VALUES (?,?,?)");
		$consulta->execute(array($id,$nombreMarca,$paisMarca));
		if ($consulta) {
			return true;
		}else{
			return false;		
		}	
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

	public function consultarMarca($id)
	{
		$consulta=$this->conexion->prepare("SELECT * FROM marcas WHERE idMarca = $id");
		$consulta->execute();
		return $consulta;	
	}

}
?>