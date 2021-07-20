<?php
    require_once('../../Modelo/Conexion/Conexion.php');
    $TIPO = $_POST['TIPO'];
    $ID = $_POST['ID'];
    $MEDICAMENTO = $_POST['MEDICAMENTO'];
    $sql2 = listarMedicamentosM();
    $numeroSql = mysqli_num_rows($sql2);
    $CANTIDAD=$_POST['CANTIDAD'];
    $FECHAINI=$_POST['FECHAINI'];
    $FECHAFIN=$_POST['FECHAFIN'];
    $DETALLE=$_POST['DETALLE'];
    $IDCITA = $_POST['IDCITA'];
    /*
    echo "$ID <br>";
    echo "$IDCITA <br>";
    echo "$MEDICAMENTO <br>";
    echo "$TIPO <br>";
    echo "$CANTIDAD <br>";
    echo "$FECHAINI <br>";
    echo "$FECHAFIN <br>";
    echo "$DETALLE <br>";
    */




    registrarTratamiento($ID,$IDCITA,$MEDICAMENTO,$TIPO,$CANTIDAD,$FECHAINI,$FECHAFIN,$DETALLE);



    /*
    $descarte=$_GET['descarte'];
    $diagnostico=$_GET['diagnostico'];
    $tipotratamiento=$_GET['tipotratamiento'];
    $detallefinal=$_GET['detallefinal'];
    $fechain=$_GET['fechain'];
    $fechafint=$_GET['fechafint'];
    atenderCitaM($idCita,$id,$talla,$peso,$Presion,$temperatura,$sintomas,$detalle,$descarte,$diagnostico,$tipotratamiento,$detallefinal,$fechain,$fechafint);
    */
    //atenderCitaM($idCita,$id,$idPac,$talla,$peso,$Presion,$temperatura,$sintomas,$detalle);
?>