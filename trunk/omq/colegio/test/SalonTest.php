<?php

require_once '../negocio/SalonNegocio.php';


print '</br>';
print 'Ingresar';
print '</br>';
$negocio = new SalonNegocio();
$negocio->insertar(16, 7, 3, "federico");
print '</br>';
print 'Listar';
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {	
	print $row['id_salon'].' -- '. $row['id_usuario'].' -- '. $row['id_cursos'].' -- '. $row['id_usuario'].'</br>';
}


print '</br>';
print 'Obtener';
print '</br>';
$resultado = $negocio->obtener(16);
while($row = mysql_fetch_array($resultado)) {
	print $row['id_salon'].' -- '. $row['id_usuario'].' -- '. $row['id_cursos'].' -- '. $row['id_usuario'].'</br>';
}

print '</br>';
print 'Modificar';
$negocio->modificar(16, 2);
print '</br>';
$resultado = $negocio->obtener("16");
while($row = mysql_fetch_array($resultado)) {
	print $row['id_salon'].' -- '. $row['id_usuario'].' -- '. $row['id_cursos'].' -- '. $row['id_usuario'].'</br>';
}


print '</br>';
print 'Eliminar';
$negocio->eliminar(16);
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {
	print $row['id_salon'].' -- '. $row['id_usuario'].' -- '. $row['id_cursos'].' -- '. $row['id_usuario'].'</br>';
}

?>