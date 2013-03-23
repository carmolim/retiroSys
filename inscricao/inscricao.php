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
		<link rel="STYLESHEET" type="text/css" href="../css/global.css" />
		<link rel="STYLESHEET" type="text/css" href="../css/form.css" />
		
		<style>		
			#content
			{	
				width: 700px;
				margin-top: 100px;
				margin-left: auto;
				margin-right: auto;
			}						
		</style>
		
		
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
		
		<form id="InscricaoForm" action="valida_inscricao.php" method="post" name="InscricaoForm">
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
			<table width="580" cellpadding="4" cellspacing="10">
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
				<table width="580" cellpadding="4" cellspacing="10">
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
				<table width="580" cellpadding="4" cellspacing="10">
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
			<br>
			<input type="submit" value="Enviar">
		</form>
		</div>
	</body>

</html>
