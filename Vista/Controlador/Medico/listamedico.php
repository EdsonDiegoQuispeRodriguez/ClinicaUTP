<?php
include('Modelo/conexion.php');
    $citas = "Select persona.idPersona,persona.Numero_Documento,persona.Nombre,especialidad.Nombre_Especialidad,usuario.Correo,usuario.Contraseña,usuario.Estado  
    from persona inner join usuario 
    on persona.idPersona=usuario.idPersona
    inner join rol 
    on usuario.idUsuario=rol.idUsuario
    inner join especialidad
    on rol.idRol =especialidad.idRol
    where rol.Tipo='MEDICO'
    ";
    ?>