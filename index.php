<!DOCTYPE html>
<html>
<head>
	<title>Profesores</title>
	<style>
	  table{
		  border:1px solid grey;
		  width:100%;
	  }
	  tr,td,th{
		  border:1px solid grey;
	  }
	</style>
</head>
<body>
<h1>Datos de profesores, Santo Tomás.</h1>
<?php
require_once 'PHPExcel/Classes/PHPExcel.php';
$archivo = "planilla.xlsx";
$inputFileType = PHPExcel_IOFactory::identify($archivo);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($archivo);
$sheet = $objPHPExcel->getSheet(0); 
$highestRow = $sheet->getHighestRow(); 
$highestColumn = $sheet->getHighestColumn();
?>
<table>
 <thead>
   <tr>
     <th>Ciudad</th>
	 <th>Asignatura</th>
	 <th>Profesor</th>
   </tr>
 </thead>
 <tbody>
<?php
for ($row = 2; $row <= $highestRow; $row++){ 
		// echo $sheet->getCell("A".$row)->getValue()." - ";
		// echo $sheet->getCell("B".$row)->getValue()." - ";
		// echo $sheet->getCell("C".$row)->getValue();
		if($sheet->getCell("G".$row)->getValue() == "La Serena")
		{
	    echo "<tr>";
		echo "<td>".$sheet->getCell("G".$row)->getValue()."</td>";
		echo "<td>".$sheet->getCell("K".$row)->getValue()."</td>";
		echo "<td>".$sheet->getCell("O".$row)->getValue()."</td>";
		echo "</tr>";
		}
		
		
}
?>
</tbody>
</table>
</body>
</html>
