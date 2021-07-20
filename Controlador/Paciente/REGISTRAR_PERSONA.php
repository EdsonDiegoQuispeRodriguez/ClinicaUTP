<?php
require_once('../../Modelo/Conexion/Conexion.php');
    $idPersona=mysqli_insert_id($conexion); 
    $idPersona=$_POST['idPersona'];
    $nombre=$_POST['nombre'];
    $AppP=$_POST['appP'];
    $AppM=$_POST['appM'];
    $nacimiento=$_POST['nacimiento'];
    $celular=$_POST['celular'];
    $tipodoc=$_POST['tipodoc'];
    $numdoc=$_POST['numdoc'];
    $correo_presonal=$_POST['correo_presonal'];
    $tipo=$_POST['tipo'];
    $direccion=$_POST['direccion'];
    $distrito=$_POST['distrito'];
    $provincia=$_POST['provincia'];
    $departamento=$_POST['departamento'];
    $pais=$_POST['pais'];
    $ocupacion=$_POST['ocupacion'];
    $correoValidacion=$_POST['correoValidacion'];
    $Contraseña=$_POST['Contraseña'];
    $tipoRol=$_POST['rol'];
    $idUsuario=mysqli_insert_id($conexion);
    $idRol=mysqli_insert_id($conexion);
	$insertar="INSERT INTO persona VALUES(
        '$idPersona',
        '$nombre',
        '$AppP',
        '$AppM',
        '$nacimiento',
        '$celular',
        '$tipodoc',
        '$numdoc',
        '$correo_presonal',
        '$tipo',
        '$direccion',
        '$distrito',
        '$provincia',
        '$departamento',
        '$pais',
        '$ocupacion')
        " ;


      if (mysqli_query($conexion,$insertar)){ 
          $ultimo_id = mysqli_insert_id($conexion); 

    }else{ 
        echo "La inserción no se realizó 1"; 
    }
    $insertar2="INSERT INTO usuario VALUES(
        '$idUsuario',
        '$correoValidacion',
        '$Contraseña',
        'Habilitado',
        '$ultimo_id')";
    if (mysqli_query($conexion,$insertar2)){ 
        $ultimo_id2 = mysqli_insert_id($conexion); 
    }else{ 
        echo "La inserción no se realizó 2"; 
    } 

    $insertar3="INSERT INTO rol VALUES(
        '$idRol',
        '$tipoRol',
        '',
        '$ultimo_id2'
        )";
            if (mysqli_query($conexion,$insertar3)){ 
                $ultimo_id3 = mysqli_insert_id($conexion); 
                header("location:paciente.php");
            }else{ 
                echo "La inserción no se realizó 3"; 
            } 
    
?>