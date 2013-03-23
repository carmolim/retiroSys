<?php require_once("conectarBD.php");?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" >
	
	<head>
		<title>Bom Retiro de Inverno -  No Limite da Graça</title>
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
			
			#login
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
		
	</head>
	
	<body>
	
	<?php DesconectarBanco();?>
	
	<div id="content">
		<div id="inscricao">
			<h1>Inscrição</h1>
			<a href="inscricao.php"><img src="../img/snow_flake.png" alt="snow flake" width="150px"/></a>
			<br />
			<a href="inscricao.php">Inscreva - se!</a>
		</div>
		
		<div id="login">		
	
			<h1>Login</h1>		
			<form action=<?php echo $_SERVER['PHP_SELF']; ?> method='post' name='login'>
				<div>
					<label for='username' >E-mail:</label>
					<br />
					<input type='text' name='username' id='username' maxlength="50" /><br/><br />
				</div>
				<div>
					<label for='password'>Senha:</label>
					<br />
					<input type='password' name='password' id='password' maxlength="50" /><br/>
				</div>
					<br />
					<input class="button" type="submit" name="submit" value="Entrar">
					<br /><br />
					<a href='reset_senha.php'>Esqueci minha senha</a>
			</form>			
		</div>
	</div>	
	
	
	<?php
        @session_start();
        
		ConectarBanco();
	        if(isset($_POST['submit'])) 
	        { 
	            include("Pessoa.php");
	            
	            $query_senha = "SELECT senha FROM Pessoa WHERE email = '".$_POST["username"]."'";
	            if (@mysql_result(mysql_query($query_senha),0) == $_POST["password"])
	            {
	                $query_login = "SELECT id_pessoa FROM Pessoa WHERE email = '".$_POST["username"]."'";
	                $id_pessoa = mysql_result(mysql_query($query_login),0) or die  ("PROBLEMA");
	                
	                $inscrito = new Pessoa();
	                $inscrito->setId_pessoa($id_pessoa);
	                $_SESSION['inscrito_obj'] = $inscrito;
	                echo "<script>window.open(\"update_inscricao.php\",'_self')</script>";
	            }
	            
	            else
	            {
	                echo "<script>alert(\"Ops! Usuário e Senha não conferem\")</script>";
	            }
	        }
		DesconectarBanco();
	?>
	
	</body>

</html>
