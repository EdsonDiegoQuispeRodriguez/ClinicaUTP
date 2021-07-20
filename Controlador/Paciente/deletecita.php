<?php
    require_once('../../Modelo/Conexion/Conexion.php');
    $id= $_GET["id"];
    $idCita = $_GET["idCita"];
    updatePaciente($idCita,$id);

?>