<?php
function Conectarse(){
$servidor="localhost";
$basededatos="";
$usuario="";
$clave="";
$cn=mysql_connect($servidor,$usuario,$clave) or die (mysql_error());
mysql_select_db($basededatos ,$cn) or die("Error seleccionando la Base de datos");
mysql_query ("SET NAMES 'utf8'");
return $cn;
}

