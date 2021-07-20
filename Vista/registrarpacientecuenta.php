<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>AÑADIR PACIENTE</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet" >	    
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" >
</head>

<body>       
    <!-- CABECERA -->
    <?php 
        require_once('Cabecera.php');
    ?>
<form class="form__reg" action="Controlador/Paciente/REGISTRAR_PERSONA.php" method="POST">
<center><h1>AÑADIENDO PACIENTES</h1></center>
    <legend><h1>DATOS PERSONALES</h1></legend>  
        <p>NOMBRE</p>
        <input  class="form-control" type="name" name="nombre" style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()" placeholder="INGRESE SU NOMBRE" required autofocus>
        <p>APELLIDO PATERNO</p>
        <input  class="form-control" type="name" name="appP" style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()" placeholder="APELLIDO PATERNO" required autofocus>
        <p>APELLIDO MATERNO</p>
        <input  class="form-control" type="name" name="appM" style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()" placeholder="APELLIDO MATERNO" required autofocus>
        <p>FECHA DE NACIMIENTO</p>
        <input  class="form-control" type="date" name="nacimiento" required autofocus>
        <p>NUMERO DE CELULAR</p>
        <input  class="form-control" type="number" name="celular" placeholder="NUMERO DE CELULAR" required autofocus>
        <p>TIPO DE DOCUMENTO DE IDENTIDAD</p>
        <select name="tipodoc" class="form-select">
            <option>DNI</option>
            <option>PASAPORTE</option>
            <option>CARNET DE EXTRANJERIA</option>
            <option>OTROS</option>
        </select>
        <p>NUMERO DE DOCUMENTO DE IDENTIDAD</p>
        <input  class="form-control" type="number" name="numdoc" placeholder="NUMERO DE DOCUMENTO" required autofocus>
        <p>CORREO ELECTRONICO PERSONAL</p>
        <input  class="form-control" type="email" name="correo_presonal" placeholder="CORREO ELECTRONICO" required autofocus>
        <p>GRUPO SANGUINEO</p>
        <select name="tipo" class="form-select">
            <option>A+</option>
            <option>B+</option>
            <option>O+</option>
            <option>AB+</option>
            <option>A-</option>
            <option>B-</option>
            <option>O-</option>
            <option>AB-</option>
        </select>
        <p>DIRECCION</p>
        <input class="input" type="text" name="direccion" style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()" placeholder="DIRECCION, SI ES EXTRANJERO COLOQUE(-)">
        <p>PAIS</p>
        <select name="departamento" class="form-select">
            <option>PERU</option>
            </select>
            <p>DEPARTAMENTO</p>
        <select name="departamento" class="form-select">
            <option>AREQUIPA</option>
            </select>
            <p>PROVINCIA</p>
        <select name="provincia" class="form-select">
            <option>AREQUIPA</option>
            </select>
            <p>DISTRITO </p>
        <select name="distrito" class="form-select">
            <option>CERRO COLORADO</option>
            <option>PAUCARPATA</option>
            <option>HUNTER</option>
            <option>CERCADO</option>
            <option>YANAHUARA</option>
            <option>CAYMA</option>
            </select>
        <p>OCUPACION</p>
        <input  class="form-control" type="text" name="ocupacion" placeholder="OCUPACION" style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()" required autofocus>
        <legend><h1>DATOS DE USUARIO</h1></legend>  
        <p>USUARIO(CORREO ELECTRONICO)</p>
        <input  class="form-control" type="email" name="correoValidacion" placeholder="CORREO ELECTRONICO" required autofocus>
        <p>CONTRASEÑA</p>
        <input  class="form-control" type="password" name="Contraseña" placeholder="CORREO ELECTRONICO" required autofocus>
</select>
<div class="d-grid gap-2">
    <input type="submit" class="btn btn-primary" value="REGISTRAR">
    </div> 
    </body>
    </form>
    <br>

    <br>
	<?php 
    require_once('footer.php');
    ?>

</html>