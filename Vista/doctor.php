<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>DOCTOR CUENTA</title>
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
                <h2><span>LOGUEO DEL MEDICO</span></h2>
            </div>		
            <br>
            <form class="form__reg" action="../Controlador/Medico/validardoctor.php" method="POST">
                <input class="input" type="email" name="correoValidacion" placeholder="INGRESE SU CORREO" required autofocus>
                <input class="input" type="password" name="Contraseña" placeholder="INGRESE SU CONTRASENA" required autofocus>
                <div class="btn__form">
                    <input class="btn__submit" type="submit" value="INICIAR SESION">
                    <input class="btn__reset" type="reset" value="LIMPIAR">	
                </div>
    </body>

</html>