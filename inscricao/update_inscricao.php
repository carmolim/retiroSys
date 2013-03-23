<?php
    require_once("conectarBD.php");
    require_once("Pessoa.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
    <head>
        <title>Atualizar Cadastro</title>

        <meta content='pt' http-equiv='content-language'/>
        <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!--Scripts Necessários Para a Validação-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>	
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/jquery.validate.js"></script>
        <!---->
        
        <link rel="STYLESHEET" type="text/css" href="../css/global.css" />

        <!--Validação-->
        <script type="text/javascript">
            $(document).ready(function() {
                // Validação dos campos do formulário
                $("#updateForm").validate(
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
                                rg: "required",
                                cpf: "required",
                                celular: "required"

                            },
                            messages:
                                    {
                                        fname:
                                                {
                                                    required: " <br />Coloque seu nome",
                                                    minlength: " <br />Seu nome deve ter mais de duas letras"
                                                },
                                        lname:
                                                {
                                                    required: " <br />Coloque seu sobrenome",
                                                    minlength: " <br />Seu sobrenome deve ter mais de duas letras"
                                                },
                                        email:
                                                {
                                                    required: " <br />É necessário informar um e-mail",
                                                    email: " <br />Informe um e-mail válido"
                                                },
                                        senha:
                                                {
                                                    required: " <br />Informe uma senha",
                                                    minlength: " <br />Sua senha deve ter pelo menos 5 caracteres"
                                                },
                                        senha_conf:
                                                {
                                                    required: " <br />Informe a senha novamente",
                                                    minlength: " <br />Sua senha deve ter pelo menos 5 caracteres",
                                                    equalTo: " <br />Informe a mesma senha informada anteriormente"
                                                },
                                        rg:
                                                {
                                                    required: " <br />Informe seu R.G.",
                                                },
                                        cpf:
                                                {
                                                    required: " <br />Informe seu C.P.F.",
                                                },
                                        celular:
                                                {
                                                    required: " <br />Precisamos do seu contato"
                                                },

                                        senha_conf:
                                        {
                                                required: 	" <br />Informe a senha novamente",
                                                minlength: 	" <br />Sua senha deve ter pelo menos 5 caracteres",
                                                equalTo: 	" <br />Informe a mesma senha informada anteriormente"
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
<?php
@session_start();

    ConectarBanco();

    /* $query_senha = "SELECT senha FROM Pessoa WHERE email = '".$_POST["username"]."'";
      if (@mysql_result(mysql_query($query_senha),0) == $_POST["password"])
      $query_login = "SELECT id_pessoa FROM Pessoa WHERE email = '".$_POST["username"]."'";
      else
      die ("SENHA USUARIO ERRADO");

      $id_pessoa = mysql_result(mysql_query($query_login),0) or die  ("PROBLEMA"); */

    //include("Pessoa.php");

    $inscrito = $_SESSION['inscrito_obj'];

    echo $inscrito->getId_pessoa();

    $query = "SELECT * FROM Pessoa WHERE id_pessoa = '$inscrito->getId_pessoa()'";

    $result = mysql_fetch_assoc(mysql_query($query)) or die("Nao foi possivel executar a QUERY");

    // identificação
    ////////////////   
    $inscrito->setNome($result["nome"]);
    $inscrito->setSobrenome($result["sobrenome"]);
    $inscrito->setEmail($result["email"]);
    $inscrito->setSenha($result["senha"]);
    $inscrito->setSexo($result["sexo"]);
    $inscrito->setDiaNasc($result["dia_nasc"]);
    $inscrito->setMesNasc($result["mes_nasc"]);
    $inscrito->setAnoNasc($result["ano_nasc"]);
    $inscrito->setRG($result["rg"]);
    $inscrito->setCPF($result["cpf"]);
    ////////////////////
    //Outras informações
    ////////////////////
    $inscrito->setCelular($result["celular"]);
    $inscrito->setTelefone($result["telefone"]);
    $inscrito->setProfissao($result["profissao"]);
    $inscrito->setEstadoCivil($result["estado_civil"]);
    $inscrito->setCidade($result["cidade"]);
    $inscrito->setEstado($result["estado"]);
    $inscrito->setAdventista($result["adventista"]);
    $inscrito->setIgreja($result["igreja"]);
    ////////////////////
    //saúde
    ///////
    $inscrito->setContatoEmergencia($result["contato_emergencia"]);
    $inscrito->setTelefoneContato($result["telefone_contato"]);
    $inscrito->setDoenca($result["doenca"]);
    $inscrito->setAlergia($result["alergia"]);
    $inscrito->setCuidado($result["cuidado"]);
    //////*/
    // locomoção
    $inscrito->setPrecisaCarona($result["precisa_carona"]);
    $inscrito->setVagas($result["vagas_carro"]);
    //hora de saida
    ////////////
    $_SESSION['inscrito_obj'] = $inscrito;
    DesconectarBanco();
?>

    <div id='update'>
        <form id="updateForm" action="valida_update.php" method="post" name="updateForm">
            <fieldset>
                <legend>Identificação</legend>
                <table width="580" cellpadding="4" cellspacing="10">
                    <tr>
                        <td width="237"><label for="fname">Nome</label></td>
                        <td width="319"><input id="fname" name="fname" value=<?php echo "'" . $inscrito->getNome() . "'"; ?> type="text" class="required" /></td>
                    </tr>
                    <tr>
                        <td><label for="lname">Sobrenome</label></td>
                        <td><input id="lname" name="lname" value=<?php echo "'" . $inscrito->getSobrenome() . "'"; ?> type="text" class="required" /></td>
                    </tr>
                    <tr>
                        <td><label for="email">E-mail</label></td>
                        <td><input id="email" name="email" value=<?php echo "'" . $inscrito->getEmail() . "'"; ?> type="text" class="required" readonly/></td>
                    </tr>
                    <tr>
                        <td><label for="senha">Senha</label></td>
                        <td><input id="senha" name="senha" value=<?php echo "'" . $inscrito->getSenha() . "'"; ?> type="password" class="required" /></td>
                    </tr>	
                    <tr>
                        <td><label for="senha_conf">Confirme a Senha</label></td>
                        <td><input id="senha_conf" name="senha_conf" value=<?php echo "'" . $inscrito->getSenha() . "'"; ?> type="password" class="required" /></td>
                    </tr>
                    <tr>
                        <td><label for="sexo">Sexo</label></td>
                        <td>
                            <select name="sexo" id="sexo" class="required">
                                <option value="Masculino" <?php if ($inscrito->getSexo() == "Masculino") echo "SELECTED"; ?>>Masculino</option>
                                <option value="Feminino" <?php if ($inscrito->getSexo() == "Feminino") echo "SELECTED"; ?>>Feminino</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="aniversario_dia">Data de Nascimento</label></td>
                        <td>
                            <select name="dianasc" id="dianasc" class="required">
                                <option value="-1">Dia:</option>	 						
                                <?php
                                $dia = 1;
                                while ($dia <= 31) {
                                    if ($inscrito->getDiaNasc() == $dia)
                                        echo "<option value='" . $dia . "' SELECTED>" . $dia . "</option>";
                                    else
                                        echo "<option value='" . $dia . "'>" . $dia . "</option>";
                                    $dia++;
                                }
                                ?>
                            </select>

                            <select name="mesnasc" id="mesnasc" class="required">
                                <option value="-1">Mês:</option>
                                <option value="1"  <?php if ($inscrito->getMesNasc() == 1) echo "SELECTED"; ?>>Janeiro</option>
                                <option value="2"  <?php if ($inscrito->getMesNasc() == 2) echo "SELECTED"; ?>>Fevereiro</option>
                                <option value="3"  <?php if ($inscrito->getMesNasc() == 3) echo "SELECTED"; ?>>Março</option>
                                <option value="4"  <?php if ($inscrito->getMesNasc() == 4) echo "SELECTED"; ?>>Abril</option>
                                <option value="5"  <?php if ($inscrito->getMesNasc() == 5) echo "SELECTED"; ?>>Maio</option>
                                <option value="6"  <?php if ($inscrito->getMesNasc() == 6) echo "SELECTED"; ?>>Junho</option>
                                <option value="7"  <?php if ($inscrito->getMesNasc() == 7) echo "SELECTED"; ?>>Julho</option>
                                <option value="8"  <?php if ($inscrito->getMesNasc() == 8) echo "SELECTED"; ?>>Agosto</option>
                                <option value="9"  <?php if ($inscrito->getMesNasc() == 9) echo "SELECTED"; ?>>Setembro</option>
                                <option value="10" <?php if ($inscrito->getMesNasc() == 10) echo "SELECTED"; ?>>Outubro</option>
                                <option value="11" <?php if ($inscrito->getMesNasc() == 11) echo "SELECTED"; ?>>Novembro</option>
                                <option value="12" <?php if ($inscrito->getMesNasc() == 12) echo "SELECTED"; ?>>Dezembro</option>
                            </select>

                            <select name="anonasc" id="anonasc" class="required">
                                <option value="-1" selected>Ano:</option>
                                <?php
                                $ano = 1960;
                                while ($ano <= 2013) {
                                    if ($inscrito->getAnoNasc() == $ano)
                                        echo "<option value='" . $ano . "' SELECTED>" . $ano . "</option>";
                                    else
                                        echo "<option value='" . $ano . "'>" . $ano . "</option>";
                                    $ano++;
                                }
                                ?>				
                            </select>				
                        </td>
                    </tr>	
                    <tr>
                        <td><label for="rg">RG</label></td>
                        <td><input id="rg" name="rg" value=<?php echo "'" . $inscrito->getRG() . "'"; ?> type="text" class="required" /></td>
                    </tr>
                    <tr>
                        <td><label for="cpf">CPF</label></td>
                        <td><input id="cpf" name="cpf" value=<?php echo "'" . $inscrito->getCPF() . "'"; ?> type="text" class="required" /></td>
                    </tr>		  		
                </table>
            </fieldset>

            <fieldset id='outras'>
                <legend>Outras informações</legend>
                <table width="580" cellpadding="4" cellspacing="10">
                    <tr>
                        <td width="237"><label for="celular">Celular</label></td>
                        <td width="319"><input id="celular" name="celular" value=<?php echo "'" . $inscrito->getCelular() . "'"; ?> type="text" class="required" /></td>
                    </tr>

                    <tr>
                        <td><label for="telefone">Telefone</label></td>
                        <td><input id="telefone" name="telefone" value=<?php echo "'" . $inscrito->getTelefone() . "'"; ?> type="text"/></td>
                    </tr>

                    <tr>
                        <td><label for="profissao">Profissão</label></td>
                        <td><input id="profissao" name="profissao" value=<?php echo "'" . $inscrito->getProfissao() . "'"; ?> type="text" /></td>
                    </tr>

                    <tr>
                        <td><label for="estado_civil">Estado Civil</label></td>
                        <td>
                            <select id="estado_civil" name="estado_civil" style="width:150px;">
                                <option value="Solteiro" <?php if ($inscrito->getEstadoCivil() == "Solteiro") echo "SELECTED"; ?>>Solteiro</option>
                                <option value="Casado" <?php if ($inscrito->getEstadoCivil() == "Casado") echo "SELECTED"; ?>>Casado</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="cidade">Cidade</label></td>
                        <td><input id="cidade" name="cidade" value=<?php echo "'" . $inscrito->getCidade() . "'"; ?> type="text" /></td>
                    </tr>

                    <tr>
                        <td><label for="estado">Estado</label></td>
                        <td>
                            <select id="estado" name="estado" style="width:150px;">
                                <option value="XX">Selecione o Estado</option> 
                                <option value="AC" <?php if ($inscrito->getEstado() == "AC") echo "SELECTED"; ?>>Acre</option> 
                                <option value="AL" <?php if ($inscrito->getEstado() == "AL") echo "SELECTED"; ?>>Alagoas</option> 
                                <option value="AM" <?php if ($inscrito->getEstado() == "AM") echo "SELECTED"; ?>>Amazonas</option> 
                                <option value="AP" <?php if ($inscrito->getEstado() == "AP") echo "SELECTED"; ?>>Amapá</option> 
                                <option value="BA" <?php if ($inscrito->getEstado() == "BA") echo "SELECTED"; ?>>Bahia</option> 
                                <option value="CE" <?php if ($inscrito->getEstado() == "CE") echo "SELECTED"; ?>>Ceará</option> 
                                <option value="DF" <?php if ($inscrito->getEstado() == "DF") echo "SELECTED"; ?>>Distrito Federal</option> 
                                <option value="ES" <?php if ($inscrito->getEstado() == "ES") echo "SELECTED"; ?>>Espírito Santo</option> 
                                <option value="GO" <?php if ($inscrito->getEstado() == "GO") echo "SELECTED"; ?>>Goiás</option> 
                                <option value="MA" <?php if ($inscrito->getEstado() == "MA") echo "SELECTED"; ?>>Maranhão</option> 
                                <option value="MT" <?php if ($inscrito->getEstado() == "MT") echo "SELECTED"; ?>>Mato Grosso</option> 
                                <option value="MS" <?php if ($inscrito->getEstado() == "MS") echo "SELECTED"; ?>>Mato Grosso do Sul</option> 
                                <option value="MG" <?php if ($inscrito->getEstado() == "MG") echo "SELECTED"; ?>>Minas Gerais</option> 
                                <option value="PA" <?php if ($inscrito->getEstado() == "PA") echo "SELECTED"; ?>>Pará</option> 
                                <option value="PB" <?php if ($inscrito->getEstado() == "PB") echo "SELECTED"; ?>>Paraíba</option> 
                                <option value="PR" <?php if ($inscrito->getEstado() == "PR") echo "SELECTED"; ?>>Paraná</option> 
                                <option value="PE" <?php if ($inscrito->getEstado() == "PE") echo "SELECTED"; ?>>Pernambuco</option> 
                                <option value="PI" <?php if ($inscrito->getEstado() == "PI") echo "SELECTED"; ?>>Piauí</option> 
                                <option value="RJ" <?php if ($inscrito->getEstado() == "RJ") echo "SELECTED"; ?>>Rio de Janeiro</option> 
                                <option value="RN" <?php if ($inscrito->getEstado() == "RN") echo "SELECTED"; ?>>Rio Grande do Norte</option> 
                                <option value="RO" <?php if ($inscrito->getEstado() == "RO") echo "SELECTED"; ?>>Rondônia</option> 
                                <option value="RS" <?php if ($inscrito->getEstado() == "RS") echo "SELECTED"; ?>>Rio Grande do Sul</option> 
                                <option value="RR" <?php if ($inscrito->getEstado() == "RR") echo "SELECTED"; ?>>Roraima</option> 
                                <option value="SC" <?php if ($inscrito->getEstado() == "SC") echo "SELECTED"; ?>>Santa Catarina</option> 
                                <option value="SE" <?php if ($inscrito->getEstado() == "SE") echo "SELECTED"; ?>>Sergipe</option> 
                                <option value="SP" <?php if ($inscrito->getEstado() == "SP") echo "SELECTED"; ?>>São Paulo</option> 
                                <option value="TO" <?php if ($inscrito->getEstado() == "TO") echo "SELECTED"; ?>>Tocantins</option> 
                            </select>
                        </td>
                    </tr>

                    <tr>			 
                        <td><label for="adventista">Adventista?</label></td>
                        <td>
                            <?php
                            if ($inscrito->getAdventista() == "S") {
                                echo "<label><input type=\"radio\" name=\"adventista\" id=\"sim\" value=\"S\" checked=\"checked\" /> Sim</label>
						      <label><input type=\"radio\" name=\"adventista\" id=\"nao\" value=\"N\" /> Não</label>";
                            }
                            else
                                echo "<label><input type=\"radio\" name=\"adventista\" id=\"sim\" value=\"S\" /> Sim</label>
						      <label><input type=\"radio\" name=\"adventista\" id=\"nao\" value=\"N\" checked=\"checked\" /> Não</label>";
                            ?>
                        </td>
                    </tr>  

                    <tr>
                        <td><label for="igreja">Igreja</label></td>
                        <td><input id="igreja" name="igreja" value=<?php echo "'" . $inscrito->getIgreja() . "'"; ?> type="text" /></td>
                    </tr>

                </table>	
            </fieldset>

            <fieldset id='saude'>
                <legend>Saúde</legend>
                <table width="580" cellpadding="4" cellspacing="10">
                    <tr>
                        <td width="237"><label for="emergencia_contato">Contato para Emergência</label></td>
                        <td width="319"><input id="emergencia_contato" name="emergencia_contato" value=<?php echo "'" . $inscrito->getContatoEmergencia() . "'"; ?> type="text" /></td>
                    </tr>
                    <tr>
                        <td><label for="emergencia_telefone">Telefone para Emergência</label></td>
                        <td><input id="emergencia_telefone" name="emergencia_telefone" value=<?php echo "'" . $inscrito->getTelefoneContato() . "'"; ?>  type="text" /></td>
                    </tr>
                    <tr>
                        <td><label for="doenca">Alguma Doença Preexistente</label></td>
                        <td><input id="doenca" name="doenca" value=<?php echo "'" . $inscrito->getDoenca() . "'"; ?> type="text" /></td>
                    </tr>
                    <tr>
                        <td><label for="alergia">Alguma Alergia</label></td>
                        <td><input id="alergia" name="alergia" value=<?php echo "'" . $inscrito->getAlergia() . "'"; ?> type="text" /></td>
                    </tr>
                    <tr>
                        <td><label for="cuidado_especial">Algum Cuidado Especial</label></td>
                        <td><input id="cuidado_especial" name="cuidado_especial" value=<?php echo "'" . $inscrito->getCuidado() . "'"; ?> type="text" /></td>
                    </tr>
                </table>
            </fieldset>

            <fieldset id='transporte'>
                <legend>Transporte</legend>
                <table width="580" cellpadding="4" cellspacing="10">
                    <tr>
                        <td width="237"><label for="precisa_carona">Precisa de Carona?</label></td>
                        <td width="319">
                            <?php
                            if ($inscrito->getPrecisaCarona() == 'S')
                                echo "<label><input id=\"sim\" name=\"precisa_carona\" type=\"radio\" value=\"Sim\" checked=\"checked\"/>Sim</label>
						  <label><input id=\"nao\" name=\"precisa_carona\" type=\"radio\" value=\"Nao\"/>Não</label>";
                            else
                                echo "<label><input id=\"sim\" name=\"precisa_carona\" type=\"radio\" value=\"Sim\" checked=\"checked\"/>Sim</label>
						  <label><input id=\"nao\" name=\"precisa_carona\" type=\"radio\" value=\"Nao\"/ checked=\"checked\">Não</label>";
                            ?>
                        </td>	
                        </td>
                    </tr>
                    <tr>
                        <td><label for="vagas">Vagas</label></td>
                        <td>
                            <select id="vagas" name="vagas" style="width:150px;">
                                <option value= 0 <?php if ($inscrito->getVagas() == 0) echo "SELECTED"; ?>>Vagas...</option>
                                <option value= 1 <?php if ($inscrito->getVagas() == 1) echo "SELECTED"; ?>>1 Vaga</option>
                                <option value= 2 <?php if ($inscrito->getVagas() == 2) echo "SELECTED"; ?>>2 Vagas</option>
                                <option value= 3 <?php if ($inscrito->getVagas() == 3) echo "SELECTED"; ?>>3 Vagas</option>
                                <option value= 4 <?php if ($inscrito->getVagas() == 4) echo "SELECTED"; ?>>4 Vagas</option>
                                <option value= 5 <?php if ($inscrito->getVagas() == 5) echo "SELECTED"; ?>>5 Vagas</option>
                                <option value= 6 <?php if ($inscrito->getVagas() == 6) echo "SELECTED"; ?>>6 Vagas</option>
                            </select>
                        </td>	
                    </tr>
                </table>
            </fieldset>

            <br>
                <input type="submit" value="Atualizar">
                    </form>
                    </div>
                    </html>
