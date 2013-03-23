<?php
	function ConectarBanco()
	{
		$host = "localhost";
		$username = "host";
		$password = "";
		$database = "test";
		
		mysql_connect($host,$username,$password);
		mysql_select_db($database) or die ("Não foi possível conectar ao servidor de Banco de Dados");
	}
	
	function DesconectarBanco()
	{
		@mysql_close();
	}
?>
