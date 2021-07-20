<?php
    $idDA = $_GET["idDA"];
    $idExamen = $_GET["idExamen"];
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
    require_once('headerLaboratorio.php');
    ?>
    
<form class="form__reg" action="../Controlador/Laboratorio/atender.php" method="POST">  
    <fieldset  id="datos_personales">
        <legend><h1>Ingrese datos de Analisis</h1></legend>    
        <h4>Detalle de la atencion</h4>
        <input type="hidden" value='<?php echo $idDA?>' name ="id" >
        <input type="hidden" value='<?php echo $idExamen?>' name ="idExamen" >
        <center><textarea id="w3review" name="detalle" rows="10" cols="150"></textarea></center>
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