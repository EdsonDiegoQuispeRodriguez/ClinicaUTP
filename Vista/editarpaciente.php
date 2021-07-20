<?php
       include('../Modelo/Conexion/Conexion.php');
       $idPaciente=$_GET["idPaciente"];
       $id=$_GET["idAdmin"];
       $citas = "SELECT persona.idPersona,persona.Numero_Documento,persona.Nombre,persona.Celular,usuario.Correo,usuario.Contraseña,usuario.Estado  
       from persona inner join usuario 
       on persona.idPersona=usuario.idPersona
       inner join rol 
       on usuario.idRol=rol.idRol
       where rol.Tipo='PACIENTE' AND  persona.idPersona=$idPaciente
       ";
       $resultado =mysqli_query($conexion,$citas);
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>ADMINISTRAR PACIENTES</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link href="css/css2.css" rel="stylesheet" type="text/css"/>
</head>
<body>       
    <!-- CABECERA -->
	<?php 
      require_once('headerAdministrador.php');
    ?>	
    
<form action="Controlador/Administrador/updatepaciente.php" method="POST" >
<div class="container-table2" > 
        <div class="table__title2">DATOS DEL PACIENTE</div>
        <div class="table__header">Num de documento</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Numero celular</div>
        <div class="table__header">Correo</div>
        <div class="table__header">Contraseña</div>
        <div class="table__header">Estado</div>
        <?php 
        
        while($row=mysqli_fetch_assoc($resultado)) { ?>
        <input type="hidden"  class="table__item"  name="idPersona" value="<?php echo $row["idPersona"];?>">
        <input type="hidden"  class="table__item"  name="idAdmin" value="<?php echo $id;?>">
        <input class="table__item" name="Numero_Documento" value="<?php echo $row["Numero_Documento"];?>">
        <input class="table__item" name="Nombre" value="<?php echo $row["Nombre"];?>">

        <input class="table__item" name="Celular" value="<?php echo $row["Celular"];?>">

        <input class="table__item" name="Correo" value="<?php echo $row["Correo"];?>">

        <input class="table__item" name="Contraseña" value="<?php echo $row["Contraseña"];?>">

        <input class="table__item" name="Estado" value="<?php echo $row["Estado"];?>">
        <?php } mysqli_free_result($resultado);?>
        
    </div>
    <script>
        function alerta2()
        {
            var respuesta = confirm("Estas seguro de modificar datos");
            if(respuesta==true)
            {
                return true;
            }
            else if(respuesta==false)
            {
                return false ;

            }
        }
    </script>
    <div class="btn__form">
        <input class="btn__submit" type="submit" onclick="return alerta2()" value="GUARDAR CAMBIOS">       
    </div>
        </form >

    </body>
    <br>
    <footer  class="f">
        <center><p>           
            @2021 Clinica de salud UTP</p></center>
    </footer>

</html>