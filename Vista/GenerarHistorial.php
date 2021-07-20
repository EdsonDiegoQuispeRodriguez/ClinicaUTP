<?php
    $id = $_GET["id"];
    $idPac = $_GET["idPac"];
    $idCita = $_GET["idCita"];
    //Controlador/Medico/ATENCION.php --->listaatendidos.php
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>AÑADIR ATENCION</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
</head>
<body>       
    <!-- CABECERA -->
	<?php 
    require_once('headerDoctor.php');
    ?>
    
<form class="form__reg" action="../Controlador/Medico/ATENCION.php">  
    <fieldset  id="datos_personales">
        <legend><h1>Ingrese datos</h1></legend>    
        <p>Talla</p>
        <input class="input"  type="hidden" name="idCita" value="<?php echo $idCita;?>">
        <input class="input"  type="hidden" name="idDoc" value="<?php echo $id;?>">
        <input class="input"  type="hidden" name="idPac" value="<?php echo $idPac;?>">
        <input class="input" size="170" type="name" name="talla" placeholder="TALLA EN CM" required autofocus>
        <p>Peso</p>
        <input class="input" size="170" type="name" name="peso" placeholder="PESO EN KG" required autofocus>
        <p>Presion Arterial</p>
        <input class="input" size="170" type="name" name="presion" placeholder="PRESION" required autofocus>
        <p>Temperatura</p>
        <input class="input" size="170" type="name" name="temperatura" placeholder="TEMPERATURA EN GRADOS CELCIUS" required autofocus>
        <p>Sintomas</p>
        <input class="input" size="170" type="name" name="sintomas" placeholder="EXPRESE SUS SINTOMAS" required autofocus>
        <p>Detalle de la atencion</p>
        <input class="input" size="170" type="text" name="detalleatencion"placeholder="DETALLE DE ATENCION" required autofocus>
    </fieldset><br><br><br>
    <!-- 
    <fieldset  id="diagnostico">
        <legend><h1>Diagnostico</h1></legend>  
        <p>Descarte</p>
        <input class="input" size="170" type="text" name="descarte"placeholder="DESCARTE" autofocus>
        <p>Diagnostico</p>
        <input class="input" size="170" type="text" name="diagnostico"placeholder="DIAGNOSTICO" autofocus>
    </fieldset><br><br><br>
    -->
    <div class="btn__form">
        <input class="btn__submit" type="submit" value="REGISTRAR">
</div>
    </body>
    <br>
    <br>
    <br>
    <footer  class="f">
        <center><p>           
            @2021 Clinica de salud UTP</p></center>
    </footer>

</html>