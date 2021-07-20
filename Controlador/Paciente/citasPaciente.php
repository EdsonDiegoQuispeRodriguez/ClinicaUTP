<?php
require_once('../Modelo/Conexion/Conexion.php');

function citasPaciente($id)
{
    return citasPacienteP($id);
	/*if(isset($_REQUEST['BUSCAR'])){
		$valor = $_REQUEST['buscar'];
		return listarDoctorAdmin($valor);
	
	}
	else{
		return listarDoctorA();
	}
	*/

}

?>