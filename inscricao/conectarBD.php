<?php
	function ConectarBanco()
	{
		$host = "localhost";
		$username = "root";
		$password = "root";
		$database = "test";
		
		@mysql_connect($host,$username,$password);
		mysql_select_db($database) or die ("Não foi possível conectar ao servidor de Banco de Dados");
	}
	
	function DesconectarBanco()
	{
		@mysql_close();
	}
?>
