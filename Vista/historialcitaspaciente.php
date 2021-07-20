<?php
    require_once('../Controlador/Paciente/citasPaciente.php');
    $id = $_GET["id"];
    $sql = citasPaciente($id);
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd>
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>HISTORIAL CITAS PACIENTE</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link href="css/estiloscita.css" rel="stylesheet" type="text/css"/>
</head>
<body>       
    <!-- CABECERA -->
    <?php 
        require_once('headerPaciente.php');
    ?>	 
    
<div class="table-responsive">
        <table class="table">
                <thead class="text-center">
                        <tr class="bg-success">
                                <th class="text-white"> MEDICO </th>
                                <th class="text-white"> ESPECIALIDAD </th>
                                <th class="text-white"> PRECIO </th>
                                <th class="text-white"> DIA|HORA PROGRAMADA </th>
                                <th class="text-white"> ESTADO </th>
                                <th class="text-white"> ACCION </th>

                        </tr>
                </thead>
                <script>
        function alerta()
        {
            var respuesta = confirm("Estas seguro de cancelar esta cita");
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
                <tbody>
                        <?php while ($row = mysqli_fetch_assoc($sql)){ ?>

                        <tr style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                                <td style="text-align: center;"><?php echo $row["Nombre"] ?></td>
                                <td style="text-align: center;"><?php echo $row["Nombre_Especialidad"]; ?></td>
                                <td style="text-align: center;"><?php echo $row["Precio"]; ?></td>
                                <td style=" text-align: center;"><?php echo $row["Fecha"]; ?></td>
                                <td style=" text-align: center;"><?php echo $row["Estado"]; ?></td>
                                <td style=" text-align: center;"><a href="../Controlador/Paciente/deletecita.php?idCita=<?php echo $row["idCita"];?>&id=<?php echo $id;?>"  onclick="return alerta()" ><center>Cancelar</center></a></td>
                        </tr>
                        <?php } mysqli_free_result($sql);?>
                </tbody>
        </table>
</div>    
</body>    
    <br>
	<?php 
    require_once('footer.php');
    ?>

</html>