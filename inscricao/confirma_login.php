<?php
	require_once("conectarBD.php");
	
	
	// username and password sent from form 
	$usuario=$_POST['username']; 
	$senha=$_POST['password']; 
	
	// To protect MySQL injection (more detail about MySQL injection)
	$usuario = stripslashes($usuario);
	$senha = stripslashes($senha);
	$usuario = mysql_real_escape_string($usuario);
	$senha = mysql_real_escape_string($senha);
	$query_senha = "SELECT AES_DECRYPT(senha,'PASS') FROM Pessoa WHERE email = '".$usuario."'";
	
	$result=mysql_query($sql);
	
	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);
	
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1)
	{
	
		// Register $myusername, $mypassword and redirect to file "login_success.php"
		session_start();  
		$_SESSION['usuario'] = $usuario; 
		$_SESSION['senha'] = $senha;  
		header("location:login_success.php");
	}
	
	else
	{
		echo "Wrong Username or Password";
	}
?>
