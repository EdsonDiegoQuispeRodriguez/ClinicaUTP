<?php
    require_once('../../Modelo/Conexion/Conexion.php');
    $detalle=$_POST['detalle'];
    $id=$_POST['id'];
    $idExamen=$_POST['idExamen'];

    $sql= "SELECT * FROM examen_atencion
    where idDetalle_Atencion = $id and idExamen = $idExamen";
    $resultado=$conexion->query($sql);
    if($resultado->num_rows > 0)
    {
        $sql2="UPDATE examen_atencion 
        set Detalle =  '$detalle',
        Estado = 'ATENDIDO'
        where idDetalle_Atencion = $id and idExamen = $idExamen";
        $resultado2=$conexion->query($sql2);
        header("location:../../Vista/adminlab.php");
    }else{
    }

?>