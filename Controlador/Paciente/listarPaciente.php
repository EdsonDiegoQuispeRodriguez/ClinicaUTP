<?php
require_once('../Modelo/Conexion/Conexion.php');


function listarPaciente()
{
	if(isset($_REQUEST['BUSCAR'])){
		$valor = $_REQUEST['buscar'];
		return listarPacienteAdmin($valor);
	
	}
	else{
		return listarPacienteA();
	}
	

}

?>