<?php

require_once '../negocio/UsuarioNegocio.php';


print '</br>';
print 'Ingresar';
print '</br>';
$negocio = new UsuarioNegocio();
$negocio->insertar("pepe","rodriguez","sanchez","2013-02-11","1123123");

print '</br>';
print 'Listar';
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {	
	print $row['id_usuario'].' -- '. $row['nombre1'].'</br>';
}


print '</br>';
print 'Obtener';
print '</br>';
$resultado = $negocio->obtener("1");
while($row = mysql_fetch_array($resultado)) {
	print $row['id_usuario'].' -- '. $row['nombre1'].'</br>';
}

print '</br>';
print 'Modificar';
$negocio->modificar(1, "federico");
print '</br>';


print '</br>';
print 'Eliminar';
$negocio->eliminar(2);
print '</br>';

?>