<?php
    require_once("conectarBD.php");
    require_once("Pessoa.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
	
	<head>
	
	<title>Bom Retiro de Inverno 2013</title>
	
		<meta content='pt' http-equiv='content-language'/>
		<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!--Scripts Necessários Para a Validação-->	
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>	
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../js/jquery.validate.js"></script>
		<!---->	
		<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
		<link rel="STYLESHEET" type="text/css" href="../css/global.css" />
		<link rel="STYLESHEET" type="text/css" href="../css/form.css" />
		
		<style>		
			#content
			{	
				width: 550px;
				margin-top: 100px;
				margin-left: auto;
				margin-right: auto;
				padding: 20px;
				background: rgba(255, 255, 255, .2);
			}						
		</style>

		<!-- script para mudar a cor de fundo quando o radio button é selecionado-->
		<script type="text/javascript">
			 			 			
			function styleToggle(b)
			{
				for (var i = 0; i< b.form.length; i++)
				{
					if (b.form[i].name == b.name)
					{	
						b.form[i].parentNode.style.background = b.form[i].checked? '#fff' : '';
					}
				}
			} 				
		</script>
	
		
		
		<!--Scripts com uma nova funcao do validate notEqaul-->	
		<script type="text/javascript">  	
		jQuery.validator.addMethod("notEqual", function(value, element, param) {
		  return this.optional(element) || value != param;
		}, "Campo obrigatório");
		</script>	
		<!---->	
	
		<!--Validação-->
		<script type="text/javascript">  
			$(document).ready(function(){
			  // Validação dos campos do formulário
			  $("#InscricaoForm").validate(
			  {
				rules: {
				
					fname:
					{
						required: true,
						minlength: 2,
					},
					lname:
					{
						required: true,
						minlength: 2,
					},
					email: 
					{
						required: true,
						email: true
					},
					email_conf:
					{
						required: true,
						email: true,
						equalTo: "#email"
					},	
					senha:
					{
						required: true,
						minlength: 5,
					},
					senha_conf:
					{
						required: true,
						minlength: 5,
						equalTo: "#senha"
					},
					sexo: 
					{
						notEqual: "sexo"
					},
					
					rg: "required",
	
					cpf: "required",
					
					celular: "required"	
				  			  
				},
				
				messages:
				{			 
		   
					fname:
					{
						required: 	" <br />Coloque seu nome",
						minlength: 	" <br />Seu nome deve ter mais de duas letras"
					},
	
					lname:
					{
						required: 	" <br />Coloque seu sobrenome",
						minlength: 	" <br />Seu sobrenome deve ter mais de duas letras"
					},	
					email: 
					{
						required: 	" <br />É necessário informar um e-mail",
						email: 		" <br />Informe um e-mail válido"
					},
					email_conf: 
					{
						required: 	" <br />É necessário confirmar seu e-mail",
						email: 		" <br />Informe um e-mail válido",
						equalTo: 	" <br />Informe o mesmo e-mail informado anteriormente"
					},		
					senha:
					{
						required: 	" <br />Informe uma senha",
						minlength: 	" <br />Sua senha deve ter pelo menos 5 caracteres"
					},
	
					senha_conf:
					{
						required: 	" <br />Informe a senha novamente",
						minlength: 	" <br />Sua senha deve ter pelo menos 5 caracteres",
						equalTo: 	" <br />Informe a mesma senha informada anteriormente"
					},
					sexo:
					{
						notEqual:	 "<br />Campo sexo é obrigatório"
					},
					rg:
					{
						required: 	" <br />Informe seu R.G.",
					},
	
					cpf:
					{
						required: 	" <br />Informe seu C.P.F.",
					},
					celular:
					{
						required: 	" <br />Precisamos do seu contato"
					},
				}
				
			  });			 
			});
		</script>	
	
	</head>
	
	<body>
		<div id='content'>
		
		<form id="InscricaoForm" action=<?php echo $_SERVER['PHP_SELF']; ?> method="post" name="InscricaoForm">
			<fieldset>
				<legend>Identificação</legend>
				<table width="560" cellpadding="4" cellspacing="10">
					<tr>
						<td width="237"><label for="fname">Nome</label></td>
						<td width="319"><input id="fname" name="fname" type="text" class="required" /></td>
					</tr>
					<tr>
					  <td><label for="lname">Sobrenome</label></td>
					  <td><input id="lname" name="lname" type="text" class="required" /></td>
					</tr>
					<tr>
					  <td><label for="email">E-mail</label></td>
					  <td><input id="email" name="email" type="text" class="required" /></td>
					</tr>
					<tr>
					  <td><label for="email_conf">Confirme o E-mail</label></td>
					  <td><input id="email_conf" name="email_conf" type="text" class="required" /></td>
					</tr>
					<tr>
					  <td><label for="senha">Senha</label></td>
					  <td><input id="senha" name="senha" type="password" class="required" /></td>
					</tr>	
					<tr>
					  <td><label for="senha_conf">Confirme a Senha</label></td>
					  <td><input id="senha_conf" name="senha_conf" type="password" class="required" /></td>
					</tr>
		 			<tr>
						<td><label for="sexo">Sexo</label></td>
						<td>
							<select name="sexo" id="sexo" class="required">
							  <option value="sexo">Escolha...</option>	
							  <option value="Masculino">Masculino</option>
							  <option value="Feminino">Feminino</option>
							</select>
						</td>
					</tr>
					<tr>
					  <td><label for="aniversario_dia">Data de Nascimento</label></td>
					  <td>
						<select name="dianasc" id="dianasc" class="required">
							<option value="-1">Dia:</option>	 						
							<?php
							
								$mes = 1;	   							
								while($mes <= 31 )
									{
											echo "<option value='".$mes."'>".$mes."</option>";
										$mes++;
									}
							?>
			  			</select>
			  			
						<select name="mesnasc" id="mesnasc" class="required">
							<option value="-1">Mês:</option>
							<option value="1">Janeiro</option>
							<option value="2">Fevereiro</option>
							<option value="3">Março</option>
							<option value="4">Abril</option>
							<option value="5">Maio</option>
							<option value="6">Junho</option>
							<option value="7">Julho</option>
							<option value="8">Agosto</option>
							<option value="9">Setembro</option>
							<option value="10">Outubro</option>
							<option value="11">Novembro</option>
							<option value="12">Dezembro</option>
						</select>
						
						<select name="anonasc" id="anonasc" class="required">
							 <option value="-1" selected>Ano:</option>
							<?php
							
								$ano = 1960;
								while($ano <= 2013 )
								{
									echo "<option value='".$ano."'>".$ano."</option>";
									$ano++;
								}
							?>				
						</select>				
					  </td>
		  			</tr>	
					<tr>
					  <td><label for="rg">RG</label></td>
					  <td><input id="rg" name="rg" type="text" class="required" /></td>
					</tr>
					<tr>
					  <td><label for="cpf">CPF</label></td>
					  <td><input id="cpf" name="cpf" type="text" class="required" /></td>
					</tr>		  		
				</table>
			</fieldset>
			
			<fieldset>			
			<legend>Outras informações</legend>
			<table width="560" cellpadding="4" cellspacing="10">
				<tr>
					<td width="237"><label for="celular">Celular</label></td>
					<td width="319"><input id="celular" name="celular" type="text" class="required" /></td>
				</tr>
		
				<tr>
					<td><label for="telefone">Telefone</label></td>
					<td><input id="telefone" name="telefone" type="text"/></td>
				</tr>
		
				<tr>
					<td><label for="profissao">Profissão</label></td>
					<td><input id="profissao" name="profissao" type="text" /></td>
				</tr>
		
				<tr>
					<td><label for="estado_civil">Estado Civil</label></td>
					<td>
						<select id="estado_civil" name="estado_civil" style="width:150px;">
							<option value="Solteiro" selected>Solteiro</option>
							<option value="Casado">Casado</option>
						</select>
					</td>
				</tr>
		
				<tr>
					<td><label for="cidade">Cidade</label></td>
					<td><input id="cidade" name="cidade" type="text" /></td>
				</tr>
				
				<tr>
					<td><label for="estado">Estado</label></td>
					<td>
						<select id="estado" name="estado" style="width:150px;">
							<option value="XX">Selecione o Estado</option> 
							<option value="AC">Acre</option> 
							<option value="AL">Alagoas</option> 
							<option value="AM">Amazonas</option> 
							<option value="AP">Amapá</option> 
							<option value="BA">Bahia</option> 
							<option value="CE">Ceará</option> 
							<option value="DF">Distrito Federal</option> 
							<option value="ES">Espírito Santo</option> 
							<option value="GO">Goiás</option> 
							<option value="MA">Maranhão</option> 
							<option value="MT">Mato Grosso</option> 
							<option value="MS">Mato Grosso do Sul</option> 
							<option value="MG">Minas Gerais</option> 
							<option value="PA">Pará</option> 
							<option value="PB">Paraíba</option> 
							<option value="PR">Paraná</option> 
							<option value="PE">Pernambuco</option> 
							<option value="PI">Piauí</option> 
							<option value="RJ">Rio de Janeiro</option> 
							<option value="RN">Rio Grande do Norte</option> 
							<option value="RO">Rondônia</option> 
							<option value="RS">Rio Grande do Sul</option> 
							<option value="RR">Roraima</option> 
							<option value="SC">Santa Catarina</option> 
							<option value="SE">Sergipe</option> 
							<option value="SP">São Paulo</option> 
							<option value="TO">Tocantins</option> 
						</select>
					</td>
				</tr>
		
				<tr>			 
					<td><label for="adventista">Adventista?</label></td>
					<td>
						<label><input type="radio" name="adventista" id="sim" value="Sim" checked="checked" /> Sim</label>
						<label><input type="radio" name="adventista" id="nao" value="Nao" /> Não</label>
					</td>
				</tr>  
		
				<tr>
					<td><label for="igreja">Igreja</label></td>
					<td><input id="igreja" name="igreja" type="text" /></td>
				</tr>
		
			</table>	
			</fieldset>
			
			<fieldset>
				<legend>Saúde</legend>
				<table width="560" cellpadding="4" cellspacing="10">
				<tr>
				  <td width="237"><label for="emergencia_contato">Contato para Emergência</label></td>
				  <td width="319"><input id="emergencia_contato" name="emergencia_contato" type="text" /></td>
				</tr>
				<tr>
				  <td><label for="emergencia_telefone">Telefone para Emergência</label></td>
				  <td><input id="emergencia_telefone" name="emergencia_telefone" type="text" /></td>
				</tr>
				<tr>
				  <td><label for="doenca">Alguma Doença Preexistente</label></td>
				  <td><input id="doenca" name="doenca" type="text" /></td>
				</tr>
				<tr>
				  <td><label for="alergia">Alguma Alergia</label></td>
				  <td><input id="alergia" name="alergia" type="text" /></td>
				</tr>
				<tr>
				  <td><label for="cuidado_especial">Algum Cuidado Especial</label></td>
				  <td><input id="cuidado_especial" name="cuidado_especial" type="text" /></td>
				</tr>
				</table>
			</fieldset>
			
			<fieldset>			
				<legend>Transporte</legend>
				<table width="560" cellpadding="4" cellspacing="10">
				<tr>
				  <td width="237"><label for="precisa_carona">Precisa de Carona?</label></td>
				  <td width="319">
				  	<label><input id="sim" name="precisa_carona" type="radio" value="Sim" checked="checked"/>Sim</label>
					<label><input id="nao" name="precisa_carona" type="radio" value="Nao"/>Não</label>	
				  </td>
				</tr>
				<tr>
					<td><label for="vagas">Vagas no veículo</label></td>
					<td>
						<select id="vagas" name="vagas" style="width:150px;">
							<option value= 0 selected>Vagas...</option>
							<option value= 1>1 Vaga</option>
							<option value= 2>2 Vagas</option>
							<option value= 3>3 Vagas</option>
							<option value= 4>4 Vagas</option>
							<option value= 5>5 Vagas</option>
		                    <option value= 6>6 Vagas</option>
						</select>
					</td>	
				</tr>
				</table>
			</fieldset>
			<fieldset>
                <legend>Forma de Pagamento</legend>
                 Depósitos e transferências devem ser feitas para a seguinte conta: <br />
                 HSBC Ag. 0054-0 Cc. 08874-71 CNPJ. 79.080.602/0039-29  
                 <br />
                 <br />
                 É obrigatório o envio do comprovante de depósito ou transferência para o seguinte email: <br />
                 
                 <a href="mailto: muri.o.alves@gmail.com?Subject=Comprovante%20de%20pagamento">muri.o.alves@gmail.com</a>
                      <br />
                      <br />
                     Escolha uma das formas de pagamento a seguir:</p>
                  <table width="560" border="0" cellpadding="6" cellspacing="10">
                    <tr>
                      <td width="304" class="opcao">
                        <label>
                            <br />
                            <input name="forma_pagto" type="radio" id="dinheiro" value="dinheiro" checked="checked" onclick="styleToggle(this)"/>
                            <br />
                            Dinheiro <br />
                            R$ 270,00
                            <br />
                            <br />
                        </label>
                      </td>
                      
                      <td width="297" class="opcao">
                        <label>
                            <br />
                            <input name="forma_pagto" type="radio" id="deposito_transferencia" value="deposito_transferencia" onclick="styleToggle(this)"/>
                            <br />
                            Depósito ou
                            Transferência<br />
                            R$ 270,00  
                            <br />
                            <br /> 
                        </label>
                      </td>
                      <td width="297" class="opcao">
                        <label>
                            <br />
                            <input name="forma_pagto" type="radio" id="pagseguro" value="pagseguro" onclick="styleToggle(this)"/>
                            <br />
                            PagSeguro R$ 300,00*
                            <br />
                            até 10x
                            <br />
                            <br />
                        </label>
                    </td>
                    </tr>
                  </table>  
        </fieldset>
		<br>
		<input type="submit" name="submit" value="Enviar" class="button">
		</form>
		</div>


	<?php
		ConectarBanco();
		if(isset($_POST['submit'])) 
		{
			ConectarBanco();

			$query = "SELECT email FROM Pessoa WHERE email = '".$_POST["email"]."'";

			if (mysql_num_rows(mysql_query($query)) > 0)
			{
				echo "<script>window.open(\"email_existe.php\",'_self')</script>";	
			}
			else
			{	


	            $inscrito = new Pessoa();                 

	            // identificação
	            ////////////////   
	            $inscrito->setNome($_POST["fname"]);
	            $inscrito->setSobrenome($_POST["lname"]); 
	            $inscrito->setEmail($_POST["email"]);  
	            $inscrito->setSenha($_POST["senha"]);                   
	            $inscrito->setSexo($_POST["sexo"]);                        
	            $inscrito->setDiaNasc($_POST["dianasc"]);             
	            $inscrito->setMesNasc($_POST["mesnasc"]);             
	            $inscrito->setAnoNasc($_POST["anonasc"]);  
	            $inscrito->setRG($_POST["rg"]); 
	            $inscrito->setCPF($_POST["cpf"]);             

	            //Outras informações
	            ////////////////////
	            $inscrito->setCelular($_POST["celular"]);
	            $inscrito->setTelefone($_POST["telefone"]);
	            $inscrito->setProfissao($_POST["profissao"]);
	            $inscrito->setEstadoCivil($_POST["estado_civil"]);
	            $inscrito->setCidade($_POST["cidade"]);
	            $inscrito->setEstado($_POST["estado"]);
	            $inscrito->setAdventista($_POST["adventista"]);
	            $inscrito->setIgreja($_POST["igreja"]);
	        	
	            //saúde
	            ///////
	            $inscrito->setContatoEmergencia($_POST["emergencia_contato"]);
	            $inscrito->setTelefoneContato($_POST["emergencia_telefone"]);
	            $inscrito->setDoenca($_POST["doenca"]);
	            $inscrito->setAlergia($_POST["alergia"]);
	            $inscrito->setCuidado($_POST["cuidado_especial"]);

	            // locomoção
	            $inscrito->setPrecisaCarona($_POST["precisa_carona"]);
	            $inscrito->setVagas($_POST["vagas"]);
	            //hora de saida
	            ////////////
	        	$inscrito->setFormaPagamento($_POST["forma_pagto"]);
	        	$inscrito->setpagEfetuado("NAO");

	            $query = "INSERT INTO Pessoa VALUES (".
	        				"'',".
	        				"'".mysql_real_escape_string($inscrito->getNome($_POST["fname"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getSobrenome($_POST["lname"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getEmail($_POST["email"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getSenha($_POST["senha"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getSexo($_POST["sexo"]))."',".
	        				    mysql_real_escape_string($inscrito->getDiaNasc($_POST["dianasc"])).",".
	        				    mysql_real_escape_string($inscrito->getMesNasc($_POST["mesnasc"])).",".
	        				    mysql_real_escape_string($inscrito->getAnoNasc($_POST["anonasc"])).",".
	        				"'".mysql_real_escape_string($inscrito->getRG($_POST["rg"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getCPF($_POST["cpf"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getCelular($_POST["celular"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getTelefone($_POST["telefone"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getProfissao($_POST["profissao"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getEstadoCivil($_POST["estado_civil"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getCidade($_POST["cidade"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getEstado($_POST["estado"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getAdventista($_POST["adventista"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getIgreja($_POST["igreja"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getContatoEmergencia($_POST["emergencia_contato"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getTelefoneContato($_POST["emergencia_telefone"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getDoenca($_POST["doenca"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getAlergia($_POST["alergia"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getCuidado($_POST["cuidado_especial"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getPrecisaCarona($_POST["precisa_carona"]))."',".
	        				    mysql_real_escape_string($inscrito->getVagas($_POST["vagas"])).",".
	        				"'',".
	        				"0, ".
	        				"'".mysql_real_escape_string($inscrito->getFormaPagamento($_POST["forma_pagto"]))."',".
	        				"'".mysql_real_escape_string($inscrito->getpagEfetuado())."',".
	        				"null".
	        				")";
	        	echo $query;
	        				
	        	mysql_query($query) or die  ("\nNao foi possivel executar a QUERY");
	        	
	        	DesconectarBanco();


	            // EMAIL PARA OS RESPONSÁVEIS

	            // corpo da mensagem
	            $formcontent = "Nome do inscrito: ".$inscrito->getNome()." ".$inscrito->getSobrenome()." \n Celular: ".$inscrito->getCelular()." \n Telefone: ".$inscrito->getTelefone()." \n  Forma de pagamento:??";
	            //echo $formcontent;
	            // pessoas que não receber os emails
	            $recipient = "carmolim@gmail.com, jonatashille@gmail.com";
	            // assunto do email
	            $subject = "Mais um inscrito...";
	            //cabeçalho do email
	            $mailheader = "From: ".$inscrito->getEmail();
	            // método do PHP para enviar o email
	            mail($recipient, $subject, $formcontent, $mailheader) or die("Erro no envio para os responsáveis"); 
	            

	            // EMAIL PARA O INSCRITO

	            $formcontent =
	            '
		            <html>
					  <head>
					  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
					  </head>

					  <body bgcolor="#FFFFFF">

					    <table width="650px" border="0" cellspacing="20" cellpadding="0" background="http://bomretirodeinverno.com.br/img/background.jpg" style="padding:10px">
					      <tr>
					        <td>
					          <a href="http://bomretirodeinverno.com.br/" alt="Site: http://bomretirodeinverno.com.br/">
					            <img src="http://bomretirodeinverno.com.br/emkt/img/no-limite.png" alt="No Limite da Graça" width="350">
					          </a> 
					        </td>
					          <td>
					            <a href="https://www.facebook.com/jovensibr" alt="Facebook: Jovens Bom Retiro">
					              <img src="http://bomretirodeinverno.com.br/emkt/img/jovensIBR.gif" alt="Jovens Bom Retiro" width="71" height="71">
					            </a>
					          </td>
					        </tr>
					        <tr>
					          <td colspan="2"> 
					            <br />
					            <hr style="margin-top:-20px">
					            <p>
					              <br>
					              <font face="sans-serif, Helvetiva, Arial" color="#fff" size="2">
				';

	            
               
              

	            // se vai pagar com dinheiro
	            if ($inscrito->getFormaPagamento()=="dinheiro")
	            {
	            	$formcontent .=
	            	
			            $inscrito->getNome();.',  seu cadastro foi feito com sucesso, agora só falta dar continuidade ao pagamento.
			            <br>Para pagar em dinheiro você deve procurar o nosso responsável financeiro na
			            <a href="http://maps.google.com/maps/place?q=igreja+adventista+Curitiba+-+PR,+Brasil&hl=en&cid=2667252350756669069" target="_blank">Igreja do Bom Retiro</a>.<br><br>

			            <a href=\"http://www.facebook.com/gabriel.kaminski.5\">Gabriel Kaminski</a>
						<br>
						kaminskao[at]hotmail.com
						<br>
						41 8416.2559
						<br>
						<br>
			            Lembramos que o pagamento deverá ser feito até o dia 17 de maio.
			            <br>
						Confira nossa <a href="http://bomretirodeinverno.com.br/levar.html">página</a> informando o que você deve levar e o que você não deve.<br>
		                <br>
		               	Obrigado!	
	            	';
	            }
	            // se vai pagar com depósito
	            else if ($inscrito->getFormaPagamento()=="deposito_transferencia")
	            {
	            	$formcontent .=
	            	
			            $inscrito->getNome();.', seu cadastro foi feito com sucesso, agora só falta dar continuidade ao pagamento.<br>
			            Faça seu depósito ou transferência para essa conta: HSBC Ag. 0054-0 Cc. 08874-71 CNPJ. 79.080.602/0039-29,<br>
			            o beneficiado é União Sul Brasileira da Igreja Adventista do 7º dia. <br>
			            Depois envie um comprovante para: kaminskao[at]hotmail.com.
			            <br>
			            Lembramos que o pagamento deverá ser feito até o dia 17 de maio.
			            <br>
		                Confira nossa <a href="http://bomretirodeinverno.com.br/levar.html">página</a> informando o que você deve levar e o que você não deve.<br>
		                <br>
		               	Obrigado!
	            	';
	            	# code...
	            }

	            // se vai pagar com pagseguro
	            else
	            {
	            	$formcontent .=
	            	
			            $inscrito->getNome();.', seu cadastro foi feito com sucesso, agora só falta dar continuidade ao pagamento. <br> Clique no botão do PagSeguro para prosseguir com o pagamento.
			            Quermos lembrar que o pagamento pelo PagSeguro inclui apenas as taxas de administração, ainda serão adicionados os juros do parcelamento <br><br>

						<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
						<form target="pagseguro" action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post">
							<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
							<input type="hidden" name="code" value="4A075401EFEFF91224810F95EF3E6A71" />
							<input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/99x61-comprar-azul-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
						</form>
						<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
						<br>
						<br>
						O pagamento utilizando o PagSeguro deverá ser feito até o dia 8 de maio.
						<br>
	            		Confira nossa <a href="http://bomretirodeinverno.com.br/levar.html">página</a> informando o que você deve levar e o que você não deve.<br>
		                <br>
		               	Obrigado!
	            	';
	            }

	            $formcontent .=
	            '
					        </font>
				           </p>
				          </td>
				        </tr>
				    </table>
				  </body>
				</html>
							';

				
               
	            // destinatário
	            $recipient = $inscrito->getEmail();
	            // assunto
	            $subject = "Bom Retiro de Inverno - Inscrição"; 
	            // remetente
	            $mailheader = "From: Jovens Bom Retiro <bomret.jovens@gmail.com>\r\n";      
	            // cabeçalho do email
	            $mailheader .= "MIME-Version: 1.0\r\n";
	            $mailheader .= "Content-Type: text/html; charset=UTF-8\r\n";

	            mail($recipient, $subject, $formcontent, $mailheader) or die("Erro no envio para o inscrito");

	            echo "<script>window.open(\"inscrito_sucesso.php?nome=".$inscrito->getNome()."\",'_self')</script>"; 
	        }
        }
	?>
	</body>
</html>
