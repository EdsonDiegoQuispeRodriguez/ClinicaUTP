<?php
    require_once('../../Modelo/Conexion/Conexion.php');
    $idCita = $_GET['idCita'];
    $id=$_GET['idDoc'];
    $idPac=$_GET['idPac'];
    $talla=$_GET['talla'];
    $peso=$_GET['peso'];
    $Presion=$_GET['presion'];
    $temperatura=$_GET['temperatura'];
    $sintomas=$_GET['sintomas'];
    $detalle=$_GET['detalleatencion'];
    /*
    $descarte=$_GET['descarte'];
    $diagnostico=$_GET['diagnostico'];
    $tipotratamiento=$_GET['tipotratamiento'];
    $detallefinal=$_GET['detallefinal'];
    $fechain=$_GET['fechain'];
    $fechafint=$_GET['fechafint'];
    atenderCitaM($idCita,$id,$talla,$peso,$Presion,$temperatura,$sintomas,$detalle,$descarte,$diagnostico,$tipotratamiento,$detallefinal,$fechain,$fechafint);
    */
    atenderCitaM($idCita,$id,$idPac,$talla,$peso,$Presion,$temperatura,$sintomas,$detalle);
?>