<?php

require_once '../negocio/MatriculaNegocio.php';


print '</br>';
print 'Ingresar';
print '</br>';
$negocio = new MatriculaNegocio();
$negocio->insertar("2011-02-01", 1,11,2);	 
print '</br>';
print 'Listar';
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {	
	print $row['id_matricula'].' -- '. $row['fecha_pago'].' -- '. $row['id_usuario'].' -- '. $row['id_grado'].' -- '. $row['id_grupo'].'</br>';
}


print '</br>';
print 'Obtener';
print '</br>';
$resultado = $negocio->obtener("10");
while($row = mysql_fetch_array($resultado)) {
	print $row['id_matricula'].' -- '. $row['fecha_pago'].' -- '. $row['id_usuario'].' -- '. $row['id_grado'].' -- '. $row['id_grupo'].'</br>';
}

print '</br>';
print 'Modificar';
$negocio->modificar(10, "1999-10-12");
print '</br>';
$resultado = $negocio->obtener("10");
while($row = mysql_fetch_array($resultado)) {
	print $row['id_matricula'].' -- '. $row['fecha_pago'].' -- '. $row['id_usuario'].' -- '. $row['id_grado'].' -- '. $row['id_grupo'].'</br>';
}


print '</br>';
print 'Eliminar';
$negocio->eliminar(10);
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {
	print $row['id_matricula'].' -- '. $row['fecha_pago'].' -- '. $row['id_usuario'].' -- '. $row['id_grado'].' -- '. $row['id_grupo'].'</br>';
}

?>