<?php

require_once '../negocio/NotasNegocio.php';


print '</br>';
print 'Ingresar';
print '</br>';
$negocio = new NotasNegocio();
$negocio->insertar(10,1,1,10.00,1.00,1.00,11.00,15.00,15.00,11.00);
print '</br>';
print 'Listar';
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {	
	print $row['id_cursos'].' -- '. $row['id_usuario'].' -- '. $row['id_bimestre'].' -- '. $row['cuaderno'].' -- '. $row['oral'].' -- '. $row['comportamiento'].' -- '. $row['ex_mensual'].' -- '. $row['ex_bimestral'].' -- '. $row['exposicion'].' -- '. $row['nota_final'].'</br>';
}


print '</br>';
print 'Obtener';
print '</br>';
$resultado = $negocio->obtener(10,1,1);
while($row = mysql_fetch_array($resultado)) {
	print $row['id_cursos'].' -- '. $row['id_usuario'].' -- '. $row['id_bimestre'].' -- '. $row['cuaderno'].' -- '. $row['oral'].' -- '. $row['comportamiento'].' -- '. $row['ex_mensual'].' -- '. $row['ex_bimestral'].' -- '. $row['exposicion'].' -- '. $row['nota_final'].'</br>';
}

print '</br>';
print 'Modificar';
$negocio->modificar(10,1,1,19.99);
print '</br>';
$resultado = $negocio->obtener(10,1,1);
while($row = mysql_fetch_array($resultado)) {
	print $row['id_cursos'].' -- '. $row['id_usuario'].' -- '. $row['id_bimestre'].' -- '. $row['cuaderno'].' -- '. $row['oral'].' -- '. $row['comportamiento'].' -- '. $row['ex_mensual'].' -- '. $row['ex_bimestral'].' -- '. $row['exposicion'].' -- '. $row['nota_final'].'</br>';
}


print '</br>';
print 'Eliminar';
$negocio->eliminar(10,1,1);
print '</br>';
$resultado = $negocio->listar();
while($row = mysql_fetch_array($resultado)) {
	print $row['id_cursos'].' -- '. $row['id_usuario'].' -- '. $row['id_bimestre'].' -- '. $row['cuaderno'].' -- '. $row['oral'].' -- '. $row['comportamiento'].' -- '. $row['ex_mensual'].' -- '. $row['ex_bimestral'].' -- '. $row['exposicion'].' -- '. $row['nota_final'].'</br>';
}

?>