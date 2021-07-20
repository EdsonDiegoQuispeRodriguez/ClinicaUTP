<?php
require_once('../Modelo/Conexion/Conexion.php');
$id = $_GET["id"];
$sql = mostrarEspecialidad();
$sql2 = mostrarDias();
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>AÑADIR USUARIO</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet" >	    
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" >	
</head>
<body>       
    <!-- CABECERA -->
	<?php 
      require_once('headerAdministrador.php');
    ?>	
    
<form class="form__reg" action="../Controlador/Administrador/REGISTRAR_DOCTOR.php?id=<?php echo $id;?>" method="POST" >
    <center><h1>AÑADIENDO NUEVO PERSONAL MEDICO</h1></center>
        <legend><h1>DATOS PERSONALES</h1></legend>  
            <p>NOMBRES</p>
            <input class="form-control" type="name" name="nombre" style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()" placeholder="INGRESE SU NOMBRE" required autofocus>
            <p>APELLIDO PATERNO</p>
            <input class="form-control" type="name" style="strtoupper" style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()" name="appP" placeholder="APELLIDO PATERNO" required autofocus>
            <p>APELLIDO MATERNO</p>
            <input class="form-control" type="name" name="appM" style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()" placeholder="APELLIDO MATERNO" required autofocus>
            <p>FECHA DE NACIMIENTO</p>
            <input class="form-control" type="date" name="nacimiento">
            <p>NUMERO DE CELULAR</p>
            <input class="form-control" type="number" name="celular" placeholder="NUMERO DE CELULAR" required autofocus>
            <p>TIPO DE DOCUMENTO DE IDENTIDAD</p>
            <select  class="form-select" name="tipodoc">
                <option>DNI</option>
                <option>Pasaporte</option>
                <option>Carnet de extranjeria</option>
                <option>Otros</option>
            </select>
            <p>NUMERO DE DOCUMENTO DE IDENTIDAD</p>
            <input class="form-control" type="number" name="numdoc" placeholder="NUMERO DE DOCUMENTO" required autofocus>
            <p>CORREO ELECTRONICO PERSONAL</p>
            <input class="form-control" type="email" name="correo_presonal" placeholder="CORREO ELECTRONICO" required autofocus>
            <p>GRUPO SANGUINEO</p>
            <select class="form-select" name="tipo">
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
            <input class="form-control" type="text" name="direccion" style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()"  placeholder="DIRECCION, SI ES EXTRANJERO COLOQUE(-)" required autofocus>
            <p>DISTRITO </p>
            <input class="form-control" type="text" name="distrito" placeholder="DISTRITO, SI ES EXTRANJERO COLOQUE(-)" required autofocus>
            <p>PROVINCIA</p>
            <input class="form-control" type="text" name="provincia" placeholder="PROVINCIA, SI ES EXTRANJERO COLOQUE(-)" required autofocus>
            <p>DEPARTAMENTO</p>
            <input class="form-control" type="text" name="departamento" placeholder="DEPARTAMENTO, SI ES EXTRANJERO COLOQUE(-)" required autofocus>
            <p>PAIS</p>
            <input class="form-control" type="text" name="pais" placeholder="PAIS" required autofocus>
        <legend><h1>DATOS DE USUARIO</h1></legend>
            <p>USUARIO(CORREO ELECTRONICO)</p>
            <input class="form-control" type="email" widht name="correoValidacion" placeholder="CORREO ELECTRONICO" required autofocus>
            <p>CONTRASEÑA</p>
            <input class="form-control" type="password" name="Contraseña" placeholder="CONTRASEÑA" required autofocus>
            <p>ROL</p>
            <select>
            <option>
            </option>
            </select>
        <legend><h1>ESPECIALIDAD</h1></legend>
            <p>ESPECIALIDAD</p>
            <select name="especialidad">
                <?php
                    while($esp = mysqli_fetch_array($sql)){
                ?>
                    <option value="<?php echo $esp['idEspecialidad']?>"><?php echo $esp['Nombre_Especialidad']?></option>
                <?php } ?>
            </select>
        <center><fieldset  id="Datos_Horario">
        <legend><h1>DATOS DE HORARIO</h1></legend>
            <?php
                    while($esp2 = mysqli_fetch_array($sql2)){
            ?>
            <br>
            <label><input type="checkbox" name="dia[]" class="form-check-input"/><?php echo $esp2['Dia']?></label>
                <select name="turno">
                    <?php
                        $sql3 = mostrarTurnos();
                        while($esp3 = mysqli_fetch_array($sql3)){
                    ?>
                    <option class="form-select" value="<?php echo $esp3['idTurno']?>"><?php echo $esp3['TipoTurno']?></option>
                    <?php } mysqli_free_result($sql3);?>
                </select><br>
                
            <?php } ?>
    </fieldset><br><br>
</form>    
<div class="d-grid gap-2">
    <input type="submit" class="btn btn-primary" value="REGISTRAR">
    </div> 
    </body>
    <br>
	<?php 
    require_once('footer.php');
    ?>
</html>