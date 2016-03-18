<?php

function isPar($num)
{
	if($num % 2 == 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function conexDB($servidor, $us, $cla, $bd)
{
	if(mysql_connect($servidor, $us, $cla))
	{
		mysql_select_db($bd);
		return "Ok<br>";
	}
	else
	{
		return "Error en connect: ".mysql_error()."<br>";
	}
}

?>