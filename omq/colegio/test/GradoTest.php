-<<?php

require_once '../negocio/GradoNegocio.php';


print '</br>';
print 'Ingresar';
print '</br>';
$negocio = new GradoNegocio();
$negocio->insertar("6", "SEXTO SECUNDARIA",200.00);
print '</br>';
print 'Listar';
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {	
	print $row['id_grado'].' -- '. $row['nombre'].' -- '. $row['precio'].'</br>';
}


print '</br>';
print 'Obtener';
print '</br>';
$resultado = $negocio->obtener("6");
while($row = mysql_fetch_array($resultado)) {
	print $row['id_grado'].' -- '. $row['nombre'].' -- '. $row['precio'].'</br>';
}

print '</br>';
print 'Modificar';
$negocio->modificar(6, "SEXTO SECUNDARIA CAMBIO");
print '</br>';
$resultado = $negocio->obtener("6");
while($row = mysql_fetch_array($resultado)) {
	print $row['id_grado'].' -- '. $row['nombre'].' -- '. $row['precio'].'</br>';
}


print '</br>';
print 'Eliminar';
$negocio->eliminar(6);
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {
	print $row['id_grado'].' -- '. $row['nombre'].' -- '. $row['precio'].'</br>';
}

?>