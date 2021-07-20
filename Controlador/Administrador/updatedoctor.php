<?php  
    include('../../Modelo/Conexion/Conexion.php');
        $id = $_POST['idAdmin'];
        $idPersona = $_POST['idPersona'];
        $Numero_Documento = $_POST['Numero_Documento'];
        $Tipo = $_POST['Tipo'];
        $Nombre = $_POST['Nombre'];
        $Nombre_Especialidad = $_POST['Nombre_Especialidad'];
        $Correo = $_POST['Correo'];
        $Contraseña = $_POST['Contraseña'];
        $Estado = $_POST['Estado'];
		$sentencia ="UPDATE persona inner join usuario
        on persona.idPersona = usuario.idPersona
        inner join rol 
        on usuario.idRol = rol.idRol
        left join especialidad
        on usuario.idEspecialidad = especialidad.idEspecialidad
        set persona.Nombre='$Nombre',
        persona.Numero_Documento = '$Numero_Documento',
        rol.Tipo = '$Tipo',
        especialidad.Nombre_Especialidad ='$Nombre_Especialidad',
        usuario.Correo ='$Correo',
        usuario.Contraseña = '$Contraseña',
        usuario.Estado='$Estado'
        where persona.idPersona ='$idPersona'";
	   if (mysqli_query($conexion,$sentencia)){ 
            
            header("location:../../Vista/listadoctor2.php?id=$id");
  
      }else{ 
           echo('Todo incorrecto');
      }
?>