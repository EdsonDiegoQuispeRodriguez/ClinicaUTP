<?php
    include('Controlador/Medico/historialcita.php');
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>HISTORIAL CITAS</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link href="css/estilosHistorial.css" rel="stylesheet" type="text/css"/>
</head>
<body>       
    <!-- CABECERA -->
    <?php 
        require_once('headerDoctor.php');
    ?>
    


<div class="container-add-HC">
    <h2 class="container__title-HC">DATOS PERSONALES</h2>
    <div class="container__form-HC">
        <?php $resultado2 =mysqli_query($conexion,$mostrar);
            
        while($row=mysqli_fetch_assoc($resultado2)) { ?>
        <label for="" class="container__label-HC">DNI</label>
        <input type="text" class="container__input-HC" value="<?php echo $row["Numero_Documento"];?>" disabled>
        <label for="" class="container__label-HC">FECHA DE NACIMIENTO</label>
        <input type="text" class="container__input-HC" value="<?php echo $row["Fecha_Nacimiento"];?>" disabled>
        <label for="" class="container__label-HC">NOMBRES</label>
        <input type="text" class="container__input-HC" value="<?php echo $row["Nombre"];?>" disabled>
        <label for="" class="container__label-HC">GRUPO SANGUINEO</label>
        <input type="text" class="container__input-HC" value="<?php echo $row["Grupo_Sanguineo"];?>" disabled>
        <label for="" class="container__label-HC">APELLIDO PATERNO</label>
        <input type="text" class="container__input-HC" value="<?php echo $row["Apellido_Paterno"];?>" disabled>
        <label for="" class="container__label-HC">CELULAR</label>
        <input type="text" class="container__input-HC" value="<?php echo $row["Celular"];?>" disabled>
        <label for="" class="container__label-HC">APELLIDO MATERNO</label>
        <input type="text" class="container__input-HC" value="<?php echo $row["Apellido_Materno"];?>" disabled>
        <label for="" class="container__label-HC">OCUPACION</label>
        <input type="text" class="container__input-HC" value="<?php echo $row["Ocupacion"];?>" disabled>
        <label for="" class="container__label-HC">CORREO ELECTRONICO PERSONAL</label>
        <input type="text" class="container__input-HC" value="<?php echo $row["Correo_Electronico"];?>" disabled>
        <?php break;} mysqli_free_result($resultado2);?>
    </div>
</div>


<?php $resultado2 =mysqli_query($conexion,$mostrar);
while($row=mysqli_fetch_assoc($resultado2)) { ?>
<div class="container-add-HC">
    <h2 class="container__title-comand">HISTORIAL CLINICO</h2>
    <div class="container__form-HC">
        <label for="" class="container__label-HC">ID ATENCION</label>
        <input type="text" class="container__input-corto" value="<?php echo $row["IdAtencion"];?>" disabled>
        <label for="" class="container__label-HC">FECHA</label>
        <input type="text" class="container__input-corto" value="<?php echo $row["Fecha_Nacimiento"];?>" disabled>
        <label for="" class="container__label-HC">TALLA</label>
        <input type="text" class="container__input-corto" value="<?php echo $row["Talla"];?>" disabled>
        <label for="" class="container__label-HC">PESO</label>
        <input type="text" class="container__input-corto" value="<?php echo $row["Peso"];?>" disabled>
        <label for="" class="container__label-HC">PRESION ARTERIAL</label>
        <input type="text" class="container__input-corto" value="<?php echo $row["Presion_Arterial"];?>" disabled>
        <label for="" class="container__label-HC">TEMPERATURA</label>
        <input type="text" class="container__input-corto" value="<?php echo $row["Temperatura"];?>" disabled>
        <label for="" class="container__label-HC">SINTOMAS</label>
        <input type="text" class="container__input-comand" value="<?php echo $row["Sintomas"];?>" disabled>
        <label for="" class="container__label-HC">DETALLES DE SINTOMAS</label>
        <input type="text" class="container__input-comand" value="<?php echo $row["Detalles"];?>" disabled>
        <label for="" class="container__label-HC">DESCARTE</label>
        <input type="text" class="container__input-comand" value="<?php echo $row["Descarte"];?>" disabled>
        <label for="" class="container__label-HC">DIAGNOSTICO</label>
        <input type="text" class="container__input-comand" value="<?php echo $row["Diagnostico"];?>" disabled>
        <label for="" class="container__label-HC">TIPO TRATAMIENTO</label>
        <input type="text" class="container__input-comand" value="<?php echo $row["Tipo_Tratamiento"];?>" disabled>
        <label for="" class="container__label-HC">DETALLES DE TRATAMIENTO</label>
        <input type="text" class="container__input-comand" value="<?php echo $row["Detalle"];?>" disabled>
        <label for="" class="container__label-HC">FECHA INICIO</label>
        <input type="text" class="container__input-comand" value="<?php echo $row["Fecha_Inicio"];?>" disabled>
        <label for="" class="container__label-HC">FECHA FIN</label>
        <input type="text" class="container__input-comand" value="<?php echo $row["Fecha_Fin"]  ;?>" disabled>
        
    </div>
</div>
<?php } mysqli_free_result($resultado2);?>
    <!--<div >
        <div class="container-table-verhistorial" align="center">
            <div class="table__title-verhistorial">HISTORIAL CLINICO</div>
            <div class="table__header">DNI</div>
            <div class="table__header">Medico</div>
            <div class="table__header">Especialidad</div>
            <div class="table__header">Precio</div>
            <div class="table__header">Dia|Hora programada</div>
            <div class="table__header">Estado</div>
            <div class="table__header">Operacion</div>
            <?php $resultado2 =mysqli_query($conexion,$mostrar);
            
            while($row=mysqli_fetch_assoc($resultado2)) { ?>
            <div class="table__item2"><?php echo $row["idCita"];?></div>
            <div class="table__item2"><?php echo $row["Nombre"];?></div>
            <div class="table__item2"><?php echo $row["Nombre_Especialidad"];?></div>
            <div class="table__item2"><?php echo $row["Precio"];?></div>
            <div class="table__item2"><?php echo $row["Fecha"];?></div>
            <div class="table__item2"><?php echo $row["Estado"];?></div>
                <a href="deletecita.php?idCita=<?php echo $row["idCita"];?>&id=<?php echo $id;?>" class="container__submit"><center>Cancelar</center></a>
            <?php } mysqli_free_result($resultado2);?>
        </div>
    </div>
    A.Talla,A.Peso, A.Precion_Arterial,A.Temperatura,A.Sintomas,A.Detalle,DA.Descarte,DA.Diagnostico,DA.Tipo_Tratamiento,DA.Detalle,DA.Fecha_Inicio,DA.Fecha_Fin
    -->
    <div class="btn__form">
        <a href="ver.php?id=<?php echo $id;?>" class="btn__submit" type="button" value="GUARDAR"><center> SALIR</center> </a>           
    </div>
    </body>
    <br>
    <footer  class="f">
        <center><p>           
            @2021 Clinica de salud UTP</p></center>
    </footer>

</html>