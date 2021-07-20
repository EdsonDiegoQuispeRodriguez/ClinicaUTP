<?php
session_start();
require_once('../Modelo/Conexion/Conexion.php');


function debug( $value )
{
	echo '<pre>';
	var_dump($value);
	echo '</pre>';
}
function availability( $is_available )
{
  if( $is_available  )
                {
                  echo 'Si';
                }else
                {
                  echo 'No';
                }
}


function mostrarPacientes(){
  return run_query();
}
function say_year()
{
  return date('Y');
}