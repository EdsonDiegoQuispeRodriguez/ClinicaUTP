<?php
    $id=$_GET["id"];
    include("Modelo/conexion.php");
    $mostrar = "select c.idCita,p.Nombre,e.Nombre_Especialidad,c.Precio,concat(C.Fecha_Programada,' | ',C.Hora_Programada) as Fecha,c.Estado
    from cita C inner join persona P 
    on C.CodDoctor = P.idPersona
    inner join usuario U
    on P.idPersona=U.idPersona
    inner join rol R
    on U.idUsuario = R.IdUsuario
    inner join especialidad E
    on R.idRol = E.idRol
    where R.Tipo = 'MEDICO' and c.CodPaciente=$id";
?>