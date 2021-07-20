<?php
require_once('../Modelo/Conexion/Conexion.php');

function listarPendientesFarm()
{
    
	if(isset($_REQUEST['BUSCAR'])){
		$valor = $_REQUEST['buscar'];
		return listarPendientesFarmacia($valor);
	
	}
	else{
		return listarPendientesF();
	}
	

}

?>