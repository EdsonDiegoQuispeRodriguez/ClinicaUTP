<?php
require_once('../Modelo/Conexion/Conexion.php');

function listarPendientesLab()
{
    
	if(isset($_REQUEST['BUSCAR'])){
		$valor = $_REQUEST['buscar'];
		return listarPendientesLaboratorio($valor);
	
	}
	else{
		return listarPendientesL();
	}
	

}

?>