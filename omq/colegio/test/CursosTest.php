-<<?php

require_once '../negocio/CursosNegocio.php';


print '</br>';
print 'Ingresar';
print '</br>';
$negocio = new CursosNegocio();
$negocio->insertar(16, "Literatura I", "3", "11");
print '</br>';
print 'Listar';
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {	
	print $row['id_cursos'].' -- '. $row['nombre'].' -- '. $row['detalle'].' -- '. $row['id_grado'].'</br>';
}


print '</br>';
print 'Obtener';
print '</br>';
$resultado = $negocio->obtener(16);
while($row = mysql_fetch_array($resultado)) {
	print $row['id_cursos'].' -- '. $row['nombre'].' -- '. $row['detalle'].' -- '. $row['id_grado'].'</br>';
}

print '</br>';
print 'Modificar';
$negocio->modificar(16, "Literatura I Cambio");
print '</br>';
$resultado = $negocio->obtener(16);
while($row = mysql_fetch_array($resultado)) {
	print $row['id_cursos'].' -- '. $row['nombre'].'</br>';
}


print '</br>';
print 'Eliminar';
$negocio->eliminar(16);
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {
	print $row['id_cursos'].' -- '. $row['nombre'].'</br>';
}

?>