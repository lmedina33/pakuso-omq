<?php

require_once '../negocio/UsuarioNegocio.php';


print '</br>';
print 'Ingresar';
$negocio = new UsuarioNegocio();
$negocio->insertar("pepe","rodriguez","sanchez","2013-02-11","1023123");

print '</br>';
print 'Listar';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {	
	print $row['id_usuario'].' -- '. $row['nombre1'].'</br>';
}


print '</br>';
print 'Obtener';


print '</br>';
print 'Modificar';


print '</br>';
print 'Eliminar';

?>