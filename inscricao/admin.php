<?php require_once("conectarBD.php");?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
	<head>
	<title>Esqueci minha senha</title>
	
		<meta content='pt' http-equiv='content-language'/>
		<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	

		<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
		<link rel="STYLESHEET" type="text/css" href="../css/global.css" />		
		
		<style>		
			#content
			{	
				width: 1800px;
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
				padding: 30px;
			}
		</style>
		<script type="text/javascript">
			function ConfirmarPagamento()
			{

			}
		</script>	
	</head>
	<body>
		<div id="content">
			<div id="topo">
				<div id="logo"><img src="../img/snow_flake.png" alt="snow flake" width="250px"/></div>	
				<h1>NO LIMITE DA GRAÇA</h1>			
				<hr />			
			</div>			
		
			<div id="box">
				<?php 
					if (! isset($_GET['permission']))
					die ("SEM PERMISSÃO DE ACESSO");
				?>
				<table width="1600" border="1" cellpadding="4" cellspacing="10">
					<tr>
						<th>Nome</th>
						<th>e-mail</th>
						<th>Data de Nascimento</th>
						<th>RG</th>
						<th>CPF</th>
						<th>Celular</th>
						<th>Telefone</th>
						<th>Estado Civil</th>
						<th>Cidade</th>
						<th>igreja</th>
						<th>Carona?</th>
						<th>Vagas no veículo</th>
						<th>Forma de Pagamento</th>
						<th>Status do Pagamento</th>
					</tr>
					<?php
						$inscritos = $confirmados = 0;
						ConectarBanco(); 
						$result = mysql_query("SELECT * FROM Pessoa ORDER BY nome");

						while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
							if ($row["email"] != "admin@ibr.com.br")
							{
								$inscritos++;
								echo "<tr>";
								echo "<td>".$row["nome"]." ".$row["sobrenome"]."</td>";
								echo "<td>".$row["email"]."</td>";
								echo "<td>".$row["dia_nasc"]."/".$row["mes_nasc"]."/".$row["ano_nasc"]."</td>";
								echo "<td>".$row["rg"]."</td>";
								echo "<td>".$row["cpf"]."</td>";
								echo "<td>".$row["celular"]."</td>";
								echo "<td>".$row["telefone"]."</td>";
								echo "<td>".$row["estado_civil"]."</td>";
								echo "<td>".$row["cidade"]."-".$row["estado"]."</td>";
								echo "<td>".$row["igreja"]."</td>";
								//Carona
								if ($row["precisa_carona"] == 'S')
									echo "<td>Precisa</td>";
								else
									echo "<td>Não</td>";
								//Vagas no carro
								if ($row["vagas_carro"] != 0)
									echo "<td>".$row["vagas_carro"]." Vagas</td>";
								else if ($row["vagas_carro"] == 1)
									echo "<td>1 Vaga</td>";
								else echo "<td></td>";
								//Forma de pagamento
								if ($row["forma_pagamento"] == "dinheiro")
									echo "<td>Dinheiro</td>";
								else if ($row["forma_pagamento"] == "deposito_transferenc")
									echo "<td>Depósito/Transferência</td>";
								else echo "<td>PagSeguro</td>";

								if ($row["pag_efetuado"] == "NAO")
									echo "<td><button onclick=\"window.open('confirma_pagamento.php?id=".$row["id_pessoa"]."','_self')\">Confirmar Pagamento</button></td>";
								else
								{
									$confirmados++;
									echo "<td>Confirmado</td>";
								}
							    echo "</tr>";
							}
						}

						mysql_free_result($result);

						DesconectarBanco();
					?>
				</table>
				<br>
				<h1>Informações adicionais</h1>	
				<table width="350" border="1" cellpadding="4" cellspacing="10">
					<tr>
						<th>Inscritos</th>
						<th>Pagos</th>
						<th>Não Pagos</th>
						<th>Dinheiro em Caixa</th>
					</tr>
					<tr>
						<td><?php echo $inscritos;?></td>
						<td><?php echo $confirmados;?></td>
						<td><?php echo $inscritos-$confirmados;?></td>
						<td><?php echo "R$ ".number_format(($confirmados*270), 2, ',', '.');?></td>
					</tr>
				</table>

			</div>
			<div class="center">
				<br />bomretirodeinverno ©	
			</div>
		</div>		
	</body>	
</html>