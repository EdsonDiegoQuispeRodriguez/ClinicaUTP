<?php
require_once('../Modelo/Conexion/Conexion.php');

function listaPendientes()
{
    
	if(isset($_REQUEST['BUSCAR'])){
		$valor = $_REQUEST['buscar'];
		return listaPendientesEnfermera($valor);
	
	}
	else{
		return listaPendientesE();
	}
	

}

?>