<?php
    $id = $_GET["id"];
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>VISUALIZAR HISTORIAL</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
</head>
<body>       
	<!-- CABECERA -->
    <?php 
        require_once('headerDoctor.php');
    ?>
    
    <body>
        <div class="container">
            <div class="form__top">
                <h2><span>HISTORIAL DEL PACIENTE</span></h2>
            </div>		
            <br>
            <form class="form__reg" action="../Controlador/Medico/ver2.php" method="POST">
                <input class="input" type="number" name="Numero_Documento" placeholder="INGRESE DNI DEL PACIENTE" required autofocus>
                <input class="input"  type="hidden" name="id" value="<?php echo $id;?>">
                <div class="btn__form">
                    <input class="btn__submit" type="submit" value="INGRESAR">
                    <input class="btn__reset" type="reset" value="LIMPIAR">	
                </div>
                </form>
                
    </body>
    <footer  class="f">
        <center><p>           
            @2021 Clinica de salud UTP</p></center>
    </footer>

</html>