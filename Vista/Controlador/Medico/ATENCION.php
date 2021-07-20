<?php
	include('../../Modelo/conexion.php');
    $idCita = $_GET['idCita'];
    $id=$_GET['idDoc'];
    $idAtencion=mysqli_insert_id($conexion); 
    $idDetalle_Atencion=mysqli_insert_id($conexion); 
    $talla=$_GET['talla'];
    $peso=$_GET['peso'];
    $Presion=$_GET['presion'];
    $temperatura=$_GET['temperatura'];
    $sintomas=$_GET['sintomas'];
    $detalle=$_GET['detalleatencion'];
    $descarte=$_GET['descarte'];
    $diagnostico=$_GET['diagnostico'];
    $tipotratamiento=$_GET['tipotratamiento'];
    $detallefinal=$_GET['detallefinal'];
    $fechain=$_GET['fechain'];
    $fechafint=$_GET['fechafint'];
	

    $sql ="SELECT cita.CodPaciente
    from cita inner join persona
    on cita.CodPaciente=persona.idPersona
    where cita.idCita=$idCita AND cita.Estado='Habilitado'";
    $resultado3 =mysqli_query($conexion,$sql);
    $Paciente=null;
    while($row=mysqli_fetch_assoc($resultado3)) {
        $Paciente=$row["CodPaciente"];
    }
    $insertar="INSERT INTO atencion VALUES(
        '$idAtencion',
        '$talla',
        '$peso',
        '$Presion',
        '$temperatura',
        '$sintomas',
        '$detalle',
        '$Paciente')
        " ;
    if (mysqli_query($conexion,$insertar)){ 
        $ultimo_id33 = mysqli_insert_id($conexion); 

    }else{ 
      echo "La inserción no se realizó 1"; 
      echo mysqli_error($conexion);
    }
    $inserta2="INSERT INTO detalle_atencion VALUES(
        '$idDetalle_Atencion',
        '',
        '',
        '',
        '',
        '',
        '',
        '$ultimo_id33')
        " ;
    $update2="UPDATE cita
    set Estado = 'Atendido'
    where idCita=$idCita";
    
    if (mysqli_query($conexion,$inserta2)){ 
    $ultimo_id34 = mysqli_insert_id($conexion); 
    

    }else{ 
        echo "La inserción no se realizó 1"; 
        echo mysqli_error($conexion);
    }
    if (mysqli_query($conexion,$update2)){ 
        $ultimo_id35 = mysqli_insert_id($conexion); 
        header("location:../../pendientes.php?id=$id");

    }else{ 
        echo "La inserción no se realizó 1"; 
        echo mysqli_error($conexion);
    }
?>