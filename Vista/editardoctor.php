<?php
include('../Modelo/Conexion/Conexion.php');
    $idDoctor=$_GET["idDoctor"];
    $id=$_GET["idAdmin"];
    $citas = "SELECT persona.idPersona,rol.Tipo,persona.Numero_Documento,persona.Nombre,especialidad.Nombre_Especialidad,usuario.Correo,usuario.Contraseña,usuario.Estado  
    from persona inner join usuario 
    on persona.idPersona=usuario.idPersona
    inner join rol 
    on usuario.idRol=rol.idRol
    left join especialidad
    on usuario.idEspecialidad =especialidad.idEspecialidad
    where  persona.idPersona=$idDoctor
    ";
    $resultado =mysqli_query($conexion,$citas);
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>ADMINISTRAR DOCTOR</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">	  
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>  
</head>
<body>       
    <?php 
      require_once('headerAdministrador.php');
    ?>	
    
<div>
<form action="../Controlador/Administrador/updatedoctor.php" method="POST" >}
<div class="table-responsive">
        <table class="table">
                <thead class="text-center">
                        <tr class="bg-success">
                                <th class="text-white"> N° DOCUMENTO </th>
                                <th class="text-white"> NOMBRE </th>
                                <th class="text-white"> ROL </th>
                                <th class="text-white"> ESPECIALIDAD </th>
                                <th class="text-white"> CORREO </th>
                                <th class="text-white"> CONTRASEÑA </th>
                                <th class="text-white"> ESTADO </th>

                        </tr>
                </thead>
                <tbody>
                        <?php while ($row = mysqli_fetch_assoc($resultado)){ ?>

                            <tr style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                            <input type="hidden" class="text-center" style="border: 0;"  name="idPersona" value="<?php echo $row["idPersona"];?>">
                            <input type="hidden"  class="text-center" style="border: 0;" name="idAdmin" value="<?php echo $id;?>">
                            <td><input class="text-center" style="border: 0;" name="Numero_Documento" value="<?php echo $row["Numero_Documento"];?>"></td>
                            <td><input class="text-center" style="border: 0;" name="Nombre" value="<?php echo $row["Nombre"];?>"></td>
                            <td><input class="text-center" style="border: 0;" name="Tipo" value="<?php echo $row["Tipo"];?>"></td>
                            <td><input class="text-center" style="border: 0;" name="Nombre_Especialidad" value="<?php echo $row["Nombre_Especialidad"];?>"></td>
                            <td><input class="text-center" style="border: 0;" name="Correo" value="<?php echo $row["Correo"];?>"></td>
                            <td><input class="text-center" style="border: 0;" name="Contraseña" value="<?php echo $row["Contraseña"];?>"></td>
                            <td><input class="text-center" style="border: 0;" name="Estado" value="<?php echo $row["Estado"];?>"></td>    
                            </tr>

                        <?php } mysqli_free_result($resultado);?>
                </tbody>
        </table>
</div>
</body>
<br>
    <script>
        function alerta()
        {
            var respuesta = confirm("ESTAS SEGURO DE MODIFICAR ESTOS DATOS");
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
        <input class="btn__submit" type="submit" onclick="return alerta()" value="GUARDAR CAMBIOS">           
    </div>
        </form >

    </body>
    <br>
    <?php 
    require_once('footer.php');
    ?>

</html>