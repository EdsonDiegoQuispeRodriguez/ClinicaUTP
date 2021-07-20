<?php
require_once('../Modelo/Conexion/Conexion.php');

function listarPendientes($id)
{
    
	if(isset($_REQUEST['BUSCAR'])){
		$valor = $_REQUEST['buscar'];
		return listarPendientesMedico($id,$valor);
	
	}
	else{
		return listarPendientesM($id);
	}
	

}

?>