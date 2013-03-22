<?php
	function ConectarBanco()
	{
		$host = "mysql12.000webhost.com";
		$username = "a2650519_retiro";
		$password = "ibribr*76";
		$database = "a2650519_retiro";
		
		mysql_connect($host,$username,$password);
		mysql_select_db($database) or die ("Não foi possível conectar ao servidor de Banco de Dados");
	}
	
	function DesconectarBanco()
	{
		@mysql_close();
	}
?>
