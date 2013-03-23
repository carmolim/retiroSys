<?php
	$titulo = 'Esqueci minha senha';
	$extras = '
	<!--Scripts Necessários Para a Validação-->	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>	
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../js/jquery.validate.js"></script>
	<!---->	

	<!--Validação-->
		<script type="text/javascript">  
			$(document).ready(function(){
			  // Validação dos campos do formulário
			  $("#esqueciSenha").validate(
			  {
				rules: {
					email: 
					{
						required: true,
						email: true
					},
				},
				
				messages:
				{			 
					email: 
					{
						required: 	" <br />É necessário informar um e-mail",
						email: 		" <br />Informe um e-mail válido"
					},		
					
				}
				
			  });			 
			});
		</script>';			

	require_once('topo.php');

	/*
		fazer a validação do email
	*/
?>

	<body>
		<div id="content">
			<div id="topo">
				<div id="logo"><img src="../img/snow_flake.png" alt="snow flake" width="250px"/></div>	
				<h1>NO LIMITE DA GRAÇA</h1>			
				<hr />			
			</div>	
			<div id="box">
				<h1> Recuperação de senha</h1>
				<br />
				Digite o seu e-mail para enviarmos uma nova senha:
				<br>
				<br>
				<form id="esqueciSenha" action="reset_senha.php" method="post" name="esqueciSenha">
					E-mail:
					<br />
					<input id="email" name="email" type="text" />
					<br />
					<br />
					<input class = "button" type="submit" value="Enviar">
				</form>
			</div>
		</div>		
	</body>

<?php require_once('rodape.php'); ?>

