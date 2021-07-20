<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>ENFERMERA CUENTA</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
</head>
<body>       
	<!-- CABECERA -->
    <?php 
      require_once('Cabecera.php');
    ?>		
    <body>
        <div class="container">
            <div class="form__top">
                <h2><span>LOGUEO DE LA ENFERMERA</span></h2>
            </div>		
            <br>
            <form class="form__reg" action="" method="POST">
                <input class="input" type="email" name="correoValidacion" placeholder="INGRESE SU CORREO" required autofocus>
                <input class="input" type="password" name="Contraseña" placeholder="INGRESE SU CONTRASENA" required autofocus>
                <div class="btn__form">
                    <a href="gestionEnfermera.php"><input class="btn__submit" type="button" value="INICIAR SESION"></a>
                    <input class="btn__reset" type="reset" value="LIMPIAR">	
                </div>
    </body>
    <footer  class="f">
        <center><p>           
            @2021 Clinica de salud UTP</p></center>
    </footer>

</html>