<?php
require_once('../Modelo/Conexion/Conexion.php');


function listarDoctor()
{
	if(isset($_REQUEST['BUSCAR'])){
		$valor = $_REQUEST['buscar'];
		return listarDoctorAdmin($valor);
	
	}
	else{
		return listarDoctorA();
	}
	

}

?>