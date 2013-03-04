-<<?php

require_once '../negocio/BimestreNegocio.php';


print '</br>';
print 'Ingresar';
print '</br>';
$negocio = new BimestreNegocio();
$negocio->insertar("5", "Quinto");
print '</br>';
print 'Listar';
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {	
	print $row['id_bimestre'].' -- '. $row['nombre'].'</br>';
}


print '</br>';
print 'Obtener';
print '</br>';
$resultado = $negocio->obtener("5");
while($row = mysql_fetch_array($resultado)) {
	print $row['id_bimestre'].' -- '. $row['nombre'].'</br>';
}

print '</br>';
print 'Modificar';
$negocio->modificar(5, "Quinto A");
print '</br>';
$resultado = $negocio->obtener("5");
while($row = mysql_fetch_array($resultado)) {
	print $row['id_bimestre'].' -- '. $row['nombre'].'</br>';
}


print '</br>';
print 'Eliminar';
$negocio->eliminar(5);
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {
	print $row['id_bimestre'].' -- '. $row['nombre'].'</br>';
}

?>