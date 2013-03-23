<?php
	require_once("conectarBD.php");
	require_once("Pessoa.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
	<head>
	<title>Esqueci minha senha</title>
	
		<meta content='pt' http-equiv='content-language'/>
		<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		
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

		<?php

			ConectarBanco();
		 	
		 	$inscrito = new Pessoa();
			
			$recebeEmail = $_POST["email"];		
    		
    		$query = "SELECT * FROM Pessoa WHERE email = '$recebeEmail'";    		

   			$result = mysql_fetch_assoc(mysql_query($query)) /*or die ("Nao foi possivel executar a QUERY")*/; 

   			$existe = (mysql_num_rows($result) > 0);

   			$inscrito->setId_pessoa($result["id_pessoa"]);
   			$inscrito->setNome($result["nome"]);
   			$inscrito->setEmail($result["email"]);

   			DesconectarBanco();
        ?>

		<div id="content">
			<div id="topo">
				<div id="logo"><img src="../img/snow_flake.png" alt="snow flake" width="250px"/></div>	
				<h1>NO LIMITE DA GRAÇA</h1>			
				<hr />			
			</div>			
		
			<div id="box">

				<?php
					// se o email foi encontrado no banco de dados...
					if ($existe)
					{
						// imprime o nome do inscrito
						echo $inscrito->getNome();
						echo ', acambamos de enviar uma nova senha para o seu e-mail.
						O e-mail deve estar chegando em breve, caso não receba o email entre dê mais uma tentandinha,
						ou entre em contato com o <a href="mailto:carmolim@gmail.com?subject=Bom&Retiro%20de%20Inverno&body=Senha%20perdida%20do%20$incrito->getNome%20$inscrito->getSobrenome">Augusto Carmo</a>.';
					}				
					// se o email não existe...						
					else
					{
						echo 'O seu email não foi encontrado, gostaria de fazer sua <a href="inscricao.php">inscrição?</a>';
					}						
				?>
			</div>	

			<div class="center">
				<br />bomretirodeinverno ©	
			</div>
		</div>

		<?php
			// se o email existe...
			if ($existe)
			{
				// gera uma senha com 6 caracteres usando letras maiusculas e minusculas
				$senha = geraSenha(6);

				ConectarBanco();

				$id = $inscrito->getId_pessoa();

				// pq tem que estar escrito dessa forma?
				$query = "UPDATE `test`.`Pessoa` SET `senha` = '$senha' WHERE `Pessoa`.`id_pessoa` ='$id'";

				//echo $query;
					
				@mysql_query($query) or die  ("Nao foi possivel executar a QUERY");
		
				DesconectarBanco();
				
				// EMAIL PARA OS RESPONSÁVEIS
				
				// corpo da mensagem
				$formcontent = "Essa é sua nova senha: $senha";
				
				// pessoas que não receber os emails
				$recipient = $inscrito->getEmail();			
				
				// assunto do email
				$subject = "Bom Retiro de Inverno - Sua nova senha";
				
				// remetente
				$mailheader = "From: Jovens Bom Retiro <bomret.jovens@gmail.com>\r\n";	

				// cabeçalho do email
				$mailheader .= "MIME-Version: 1.0\r\n";
				$mailheader .= "Content-Type: text/html; charset=UTF-8\r\n";

				mail($recipient, $subject, $content, $mailheader) or die("Erro no envio do email com a senha.");					
			}				 
			
			// função que gera senha
			function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false)
			{
				// Caracteres de cada tipo
				$lmin = 'abcdefghijklmnopqrstuvwxyz';
				$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$num = '1234567890';
				$simb = '!@#$%*-';
				
				// Variáveis internas
				$retorno = '';
				$caracteres = '';
				
				// Agrupamos todos os caracteres que poderão ser utilizados
				$caracteres .= $lmin;
				if ($maiusculas) $caracteres .= $lmai;
				if ($numeros) $caracteres .= $num;
				if ($simbolos) $caracteres .= $simb;
				
				// Calculamos o total de caracteres possíveis
				$len = strlen($caracteres);
				
				for ($n = 1; $n <= $tamanho; $n++)
				{
					// Criamos um número aleatório de 1 até $len para pegar um dos caracteres
					$rand = mt_rand(1, $len);
					// Concatenamos um dos caracteres na variável $retorno
					$retorno .= $caracteres[$rand-1];
				}
				
				return $retorno;
			}		
		?>						
	</body>	
</html>
