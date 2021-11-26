<?php
   include 'conection.php';
	
	$id_estado = $_POST['Id_Estado'];
	$queryM = "SELECT * FROM Municipios WHERE Id_Estado = '$id_estado'";
	$resultadoM = $conect->query($queryM);
	$html= "<option value='0'>Seleccionar Municipio</option>";
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['Id_Municipios']."'>".$rowM['NombreM']."</option>";
	}
	echo $html;
?>