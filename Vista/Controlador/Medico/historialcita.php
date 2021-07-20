<?php
    $id=$_GET["id"];
    $num=$_GET["num"];
    include("Modelo/conexion.php");
    $mostrar = "SELECT *
    FROM persona P inner join atencion A
    on P.idPersona = A.IdPersona
    INNER JOIN detalle_atencion DA
    ON A.IdAtencion = DA.IdAtencion
    where P.Numero_Documento=$num
    ORDER by A.IdAtencion DESC";
?>