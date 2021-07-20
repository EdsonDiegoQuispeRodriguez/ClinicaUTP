<?php
	include("../../Modelo/conexion.php");
    $id= $_GET["id"];
    $idCita = $_GET["idCita"];
    $update="UPDATE cita 
    set Estado='Cancelado'
    where idCita = $idCita";


    if (mysqli_query($conexion,$update)){        
			header ("location:../../historialcitaspaciente.php?id=$id");
  
    }else{ 
          echo "La inserción no se realizó 1"; 
          echo mysqli_error($conexion);
    }
?>