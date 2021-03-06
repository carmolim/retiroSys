<?php require_once("conectarBD.php");?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" >
	
	<head>
		<title>Bom Retiro de Inverno - No Limite da Graça</title>
		<meta content='pt' http-equiv='content-language'/>
		<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<!--Scripts Necessários Para a Validação-->	
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>	
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../js/jquery.validate.js"></script>
		<!---->	
			
		<link rel="STYLESHEET" type="text/css" href="../css/global.css" />
		<link rel="STYLESHEET" type="text/css" href="../css/form.css" />

		<style>
		
			#content
			{	
				width: 565px;
				margin-top: 20%;
				margin-left: auto;
				margin-right: auto;
			}
			
			#inscricao
			{
				padding: 20px;
				float: left;	
				background: rgba(545, 255, 255, .2);
				height: 240px;
			}
			
			#form
			{
				background: rgb(255, 255, 255); /* Fall-back for browsers that don't support rgba */
				background: rgba(255, 255, 255, .2);
				padding: 20px;
				float: right;
				height: 240px;
			}
			
		</style>
		
		<!--Validação-->
		<script type="text/javascript">  
			$(document).ready(function(){
			  // Validação dos campos do formulário
			  $("#login").validate(
			  {
				rules: {
					username: 
					{
						required: true,
						email: true
					},	

					password:
					{
						required: true,
					}			  			  
				},
				
				messages:
				{			 
					username: 
					{
						required: 	" <br />É necessário informar um e-mail",
						email: 		" <br />Informe um e-mail válido"
					},		
					password:
					{
						required: 	" <br />Informe sua senha",
					}
				}
				
			  });			 
			});
		</script>			

		<!--Começo do Analytics-->
		<script type="text/javascript">
			var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-38536788-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();	
		</script>
		<!-- Fim do Analytics-->
	</head>
	
	<body>
	
	<?php DesconectarBanco();?>
	
	<div id="content">
		<div id="inscricao">
			<center>
				<h1>Inscreva-se</h1>
				<a href="inscricao.php"><img src="../img/snow_flake.png" alt="snow flake" width="150px"/></a>
				<br />
				
				<input onClick="parent.location='inscricao.php'" value="Inscreva-se" class="button">
			</center>
			
			<!-- <a href="inscricao.php" class="button">Inscreva - se!</a> -->
		</div>
		
		<div id="form">		
	
			<h1>Login</h1>		
			<form id='login' action=<?php echo $_SERVER['PHP_SELF']; ?> method='post' name='login'>
				<div>
					<br>
					<label for='username'>E-mail:</label>
					<br />
					<input type='text' name='username' id='username' maxlength="50"/><br /><br />
				</div>
				<div>
					<label for='password'>Senha:</label>
					<br />
					<input type='password' name='password' id='password' maxlength="50"/><br/>
				</div>
					<br />
					<input type="submit" name="submit" value="Entrar" class="button">
					<br /><br />
					<a href="esqueci_senha.php">Esqueci minha senha</a>
			</form>			
		</div>
	</div>	
	
	
	<?php
		ConectarBanco();
	        if(isset($_POST['submit'])) 
	        { 
	            $query_senha = "SELECT senha FROM Pessoa WHERE email = '".$_POST["username"]."'";
	            if (@mysql_result(mysql_query($query_senha),0) == $_POST["password"])
	            {   

	                if($_POST["username"] == 'admin@ibr.com.br')
	                {
	                	echo "<script>window.open(\"admin.php?permission=true\",'_self')</script>";	
	                }
	                else
	                {
	                	$query_login = "SELECT id_pessoa FROM Pessoa WHERE email = '".$_POST["username"]."'";
	                	$id = mysql_result(mysql_query($query_login),0) or die  ("PROBLEMA COM O SERVIDOR");
	                	echo "<script>window.open(\"update_inscricao.php?id=".$id."\",'_self')</script>";	                	
	            	}
	            }
	            else
	            {
	                echo "<script>alert(\"Ops! Usuário e Senha não conferem.\")</script>";
	            }
	        }
		DesconectarBanco();
	?>
	
	</body>

</html>
