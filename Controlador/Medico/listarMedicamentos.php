<?php
require_once('../Modelo/Conexion/Conexion.php');

function listarMed($id)
{
    
	if(isset($_REQUEST['BUSCAR'])){
		$valor = $_REQUEST['buscar'];
		return listarMedicamentosMedico($id,$valor);
	
	}
	else{
		return listarMedM($id);
	}
	

}

?>