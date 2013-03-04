-<<?php

require_once '../negocio/GrupoNegocio.php';


print '</br>';
print 'Ingresar';
print '</br>';
$negocio = new GrupoNegocio();
$negocio->insertar("4", "C");
print '</br>';
print 'Listar';
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {	
	print $row['id_grupo'].' -- '. $row['nombre'].'</br>';
}


print '</br>';
print 'Obtener';
print '</br>';
$resultado = $negocio->obtener("4");
while($row = mysql_fetch_array($resultado)) {
	print $row['id_grupo'].' -- '. $row['nombre'].'</br>';
}

print '</br>';
print 'Modificar';
$negocio->modificar(4, "D");
print '</br>';
$resultado = $negocio->obtener("4");
while($row = mysql_fetch_array($resultado)) {
	print $row['id_grupo'].' -- '. $row['nombre'].'</br>';
}


print '</br>';
print 'Eliminar';
$negocio->eliminar(4);
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {
	print $row['id_grupo'].' -- '. $row['nombre'].'</br>';
}

?>