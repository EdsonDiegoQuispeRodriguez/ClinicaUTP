<?php
require_once('../Modelo/Conexion/Conexion.php');

function listarAtendidos($id)
{
    
	if(isset($_REQUEST['BUSCAR'])){
		$valor = $_REQUEST['buscar'];
		return listarAtendidosMedico($id,$valor);
	
	}
	else{
		return listarAtendidosM($id);
	}
	

}

?>