<?php
	$titulo = 'Esqueci minha senha'; 
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
				<br>
				Digite o seu e-mail para enviarmos uma nova senha:
				<br>
				<br>
				<form id="InscricaoForm" action="reset_senha.php" method="post" name="InscricaoForm">
					E-mail:
					<br>
					<input id="email" name="email" type="text" class="required" />
					<br>
					<br>
					<input class = "button" type="submit" value="Enviar">
				</form>
			</div>
		</div>		
	</body>

<?php require_once('rodape.php'); ?>

