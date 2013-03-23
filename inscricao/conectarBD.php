<?php
	function ConectarBanco()
	{
		$host = "localhost";
<<<<<<< HEAD
		$username = "root";
		$password = "root";
=======
		$username = "host";
		$password = "";
>>>>>>> origin/desenv
		$database = "test";
		
		mysql_connect($host,$username,$password);
		mysql_select_db($database) or die ("Não foi possível conectar ao servidor de Banco de Dados");
	}
	
	function DesconectarBanco()
	{
		@mysql_close();
	}
?>
