<?php
    require_once('../../Modelo/Conexion/Conexion.php');
    $id = $_GET["id"];
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
    $correoValidacion=$_POST['correoValidacion'];
    $Contraseña=$_POST['Contraseña'];
    $tipoEspecialidad=$_POST['especialidad'];
    //$arregloDias=$_POST['dia'];
    //$num = count($arregloDias);

    insertarDoctor($id,$nombre,$AppP,$AppM,$nacimiento,$celular,$tipodoc,$numdoc,$correo_presonal,$tipo,$direccion,
    $distrito,$provincia,$departamento,$pais,$correoValidacion,$Contraseña,$tipoEspecialidad);
?>