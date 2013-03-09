<?php

require_once '../negocio/BoletinNegocio.php';


print '</br>';
print 'Ingresar';
print '</br>';
$negocio = new BoletinNegocio();
$negocio->insertar("Evento 1", "Nuevo evento el dia 1 de febreo como se puede visualizar en la siguiente imagen", "img/evento1.jpg");
print '</br>';
print 'Listar';
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {	
	print $row['id_boletin'].' -- '. $row['titulo'].' -- '. $row['comentario'].' -- '. $row['imagen'].'</br>';
}


print '</br>';
print 'Obtener';
print '</br>';
$resultado = $negocio->obtener("1");
while($row = mysql_fetch_array($resultado)) {
	print $row['id_boletin'].' -- '. $row['titulo'].'</br>';
}

print '</br>';
print 'Modificar';
$negocio->modificar(1, "Evento Nuevo");
print '</br>';
$resultado = $negocio->obtener("1");
while($row = mysql_fetch_array($resultado)) {
	print $row['id_boletin'].' -- '. $row['titulo'].'</br>';
}


print '</br>';
print 'Eliminar';
$negocio->eliminar(1);
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {
	print $row['id_boletin'].' -- '. $row['titulo'].' -- '. $row['comentario'].' -- '. $row['imagen'].'</br>';
}

?>