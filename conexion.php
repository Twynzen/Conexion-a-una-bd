<?php

function conectar(){
  $user="root";
  $pass="";
  $server = "localhost";
  $db="nombredelabasededatos";
  $con=mssql_connect($server, $user, $pass) or die
  ("Error al conectar a la base dedatos". mysql_error());
  mysql_select_db($db, $con);

  return $con;
}


?>
