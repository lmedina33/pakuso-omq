<?php

require_once '../negocio/RolNegocio.php';


print '</br>';
print 'Ingresar';
print '</br>';
$negocio = new RolNegocio();
$negocio->insertar("prueba", "Rol de Prueba");
print '</br>';
print 'Listar';
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {	
	print $row['rol_nombre'].' -- '. $row['descripcion'].'</br>';
}


print '</br>';
print 'Obtener';
print '</br>';
$resultado = $negocio->obtener("prueba");
while($row = mysql_fetch_array($resultado)) {	
	print $row['rol_nombre'].' -- '. $row['descripcion'].'</br>';
}

print '</br>';
print 'Modificar';
print '</br>';
$negocio->modificar("prueba", "Modificando Prueba");
print '</br>';
$resultado = $negocio->obtener("prueba");
while($row = mysql_fetch_array($resultado)) {
	print $row['rol_nombre'].' -- '. $row['descripcion'].'</br>';
}


print '</br>';
print 'Eliminar';
$negocio->eliminar("prueba");
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {
	print $row['rol_nombre'].' -- '. $row['descripcion'].'</br>';
}

?>