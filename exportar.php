<?php
$categoria2 = $_GET["hid_categoria"];
list($valor,$name)=explode('-',$categoria2);
if($valor!=0){
header('Content-Type: application/octet-stream');
header("Content-Disposition: attachment; filename= $name.csv");
header('Pragma: no-cache');
include("conexion.php");
Conectarse();
if($valor=="1"){
$sql="SELECT reg.`fecha_registro`, reg.`correo`,reg.`nombre`,reg.`apellido`,reg.`telefono`,reg.`contado` , reg.`credito`,  reg.cont_mail as comunicacion_correo , reg.cont_telefono as comunicacion_telefono, ciu.descripcion as ciudad ,conc.descripcion as taller, reg.automatico , reg.manual
     FROM `registro_mazda_cx5` as reg 
left join ciudad_cx5 as ciu on (reg.`ciudad` = ciu.id_ciudad) 
left join talleres_cx5 as conc on (reg.`taller` = conc.id_concesionario)
ORDER BY reg.fecha_registro DESC";
   
}else if($valor=="2"){
$sql="SELECT reg.fecha,reg.Nombre,reg.Apellido,reg.Telefono,reg.Correo,ciu.descripcion,conc.descripcion
FROM `registro_mazda` as reg inner join ciudad as ciu on (reg.Ciudad =
ciu.id_ciudad) inner join concesionario as conc on (reg.Ciudad =
conc.id_concesionario)";

}else if($valor=="3"){ 
$sql="SELECT rmg.nombre,rmg.apellido,rmg.telefono,rmg.mail,cg.descripcion,rmg.modelo,a.descripcion, t.descripcion , rmg.fecha FROM `registro_mazda_garantia` as rmg inner join ciudad_garantia as cg on (cg.id_ciudad = rmg.ciudad) inner join anio_garantia a on (a.id_anio = rmg.anio) left join talleres_garantia_mazda as t on (t.id_concesionario = rmg.taller)";
}else {
    return 0;
}
echo $rs = mysql_query($sql,$cn);
# M'soft style data retrieval with binds
//$rs = $DB->Execute($sql);
$var = rs2csv($rs);
print rs2csv($rs);
}
//print $var;