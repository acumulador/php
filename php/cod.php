<?php
include('funciones.php');

$PHP_edIni = $_POST['txtEdIni'];
$PHP_edFin = $_POST['txtEdFin'];

conexDB('localhost', 'root', '', 'aprede');

$textQuery = "SELECT * FROM tblNombres WHERE edad BETWEEN ".$PHP_edIni." AND ".$PHP_edFin;

//if($_POST['chOrder'] == 1)
if(!empty($_POST['chOrder']))
{
	$textQuery .= " ORDER BY edad";
}

$query = mysql_query($textQuery);

if(!$query)
{
	echo "<br>Error en query ".mysql_error();
}

$HTML = "";
$HTML .= "<table border='1' width='90%'>";
	$HTML .= "<tr>";
		$HTML .= "<td>NOMBRE</td>";
		$HTML .= "<td>EDAD</td>";
	$HTML .= "</tr>";
while ($fila = mysql_fetch_array($query))
{
	$HTML .= "<tr>";
		$HTML .= "<td>".utf8_encode($fila['nombre'])."</td>";
		$HTML .= "<td>".utf8_encode($fila['edad'])."</td>";
	$HTML .= "</tr>";
}
$HTML .= "</table>";

echo $HTML;
?>