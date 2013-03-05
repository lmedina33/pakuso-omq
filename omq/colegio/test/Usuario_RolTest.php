<?php

require_once '../negocio/Usuario_rolNegocio.php';


print '</br>';
print 'Ingresar';
print '</br>';
$negocio = new Usuario_rolNegocio();
$negocio->insertar("profesor", 1);
print '</br>';
print 'Listar';
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {	
	print $row['rol_nombre'].' -- '. $row['id_usuario'].'</br>';
}


print '</br>';
print 'Obtener';
print '</br>';
$resultado = $negocio->obtener(1);
while($row = mysql_fetch_array($resultado)) {
	print $row['rol_nombre'].' -- '. $row['id_usuario'].'</br>';
}

print '</br>';
print 'Modificar';
$negocio->modificar("profesor", 5);
print '</br>';
$resultado = $negocio->obtener(5);
while($row = mysql_fetch_array($resultado)) {
	print $row['rol_nombre'].' -- '. $row['id_usuario'].'</br>';
}


print '</br>';
print 'Eliminar';
$negocio->eliminar($id_usuario);
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {
	print $row['rol_nombre'].' -- '. $row['id_usuario'].'</br>';
}

?>