<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>Farmacia CUENTA </title>
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
                <h2><span>LOGUEO DE LA ADMINISTRADOR DE FARMACIA</span></h2>
            </div>		
            <form class="form__reg" action="Controlador"  method="POST">
                <input class="input" type="email" name="correoValidacion"  placeholder="INGRESE SU CORREO" required autofocus>
                <input class="input" type="password" name="Contraseña"  placeholder="INGRESE SU CONTRASENA" required autofocus>
                <div class="btn__form">
                <a href="gestionfar.php"><input type="button" class="btn__submit" value="INICIAR SESION"></a>   
                    <input class="btn__reset" type="reset" value="LIMPIAR">	
                    
                </div>
                </form>
        </div>
    </body>
    <footer  class="f">
        <center><p>           
            @2021 Clinica de salud UTP</p></center>
    </footer>

</html>