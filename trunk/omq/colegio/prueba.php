
<?php
// Clases Php
require_once("clases/PHPExcel.php");
require_once("clases/PHPExcel/Reader/Excel2007.php");
?>

<?php if ( isset ($_FILES['archivo']['tmp_name'])) {  
	$uploaddir = 'util/';         $uploadfile = $uploaddir. $_FILES['archivo']['name'];
	if (move_uploaded_file($_FILES['archivo']['tmp_name'], $uploadfile)){
		print 'archivo subido correctamente: <br>';
	}
	else {
		print 'Error, algo no anda bien.<br>';
	}
}
?>


<?php
// Cargando la hoja de cálculo excel
//creamos objeto para leer del excel
$objReader = new PHPExcel_Reader_Excel2007();
//cargamos el archivo excel(extensión *.xlsx)
$objPHPExcel = $objReader->load($uploadfile);
// Asignamos el excel activo
$objPHPExcel->setActiveSheetIndex(0);


//Obtenemos un listado de usuarios desde un archivo excel
$i=1; //Si existiera una fila con los títulos inicial $i=2
//Recorremos las filas del excel
while($objPHPExcel->getActiveSheet()->getCell("A".$i)->getValue() != '')
{
	$nombre = $objPHPExcel->getActiveSheet()->getCell("A".$i)->getValue();
	$email = $objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue();
	$telefono = $objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue();

	echo $nombre;
	echo "----";
	echo $email;
	echo "----";
	echo $telefono;
	echo "</br>";
	$i++;
}
?>