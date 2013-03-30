<?php
	require_once("conectarBD.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
	<head>
	<title>Inscrição Efetuada</title>
	
		<meta content='pt' http-equiv='content-language'/>
		<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	

		<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
		<link rel="STYLESHEET" type="text/css" href="../css/global.css" />
		
		<style>		
			#content
			{	
				width: 565px;
				margin-left: auto;
				margin-right: auto;
			}
			
			#topo
			{
				text-align: center;
			}
			
			#box
			{
				background: rgb(255, 255, 255); /* Fall-back for browsers that don't support rgba */
				background: rgba(255, 255, 255, .2);
				padding: 20px;
			}
		</style>	
	</head>
	<body>
		<div id="content">
			<div id="topo">
				<div id="logo"><a href="../index.html"><img src="../img/snow_flake.png" alt="snow flake" width="250px"/></a></div>	
				<h1>NO LIMITE DA GRAÇA</h1>			
				<hr />			
			</div>			
		
			<div id="box">
				<?php
					$nome = $_GET['nome'];
		    		echo $nome.', sua inscrição foi realizada com sucesso. Enviamos um email informando como proceder como pagamento.
		    		   Caso precise fazer alguma atualização em seu cadastro utilize seu e-mail e senha para login<br/><br/>
		    		   Veja <a href="../levar.html">aqui</a> o que você precisa levar para o acampamento.';
		    		?>
			</div>
			<div class="center">
				<br />bomretirodeinverno ©	
			</div>
		</div>		
	</body>	
</html>