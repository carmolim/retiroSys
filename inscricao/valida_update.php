<?php require_once("conectarBD.php");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>Valida Atualização</title>

	<meta content='pt' http-equiv='content-language'/>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
	
<?php
@session_start();

    ConectarBanco();

    include("Pessoa.php");
    
    $inscrito = $_SESSION['inscrito_obj'];
    
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

    printf("Nome: %s <br>",$inscrito->getNome());
    printf("Sobrenome: %s <br>",$inscrito->getSobrenome()); 
    printf("E-mail: %s <br>", $inscrito->getEmail()); 
    printf("Senha: %d <br>",$inscrito->getSenha()); 
    printf("Sexo: %s <br>",$inscrito->getSexo()); 
    printf("Data de Nascimento: %d/%d/%d <br>",$inscrito->getDiaNasc(),$inscrito->getMesNasc(),$inscrito->getAnoNasc()); 
    printf("RG: %s <br>",$inscrito->getRG()); 
    printf("CPF: %s <br>",$inscrito->getCPF()); 
    ////////////////////


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

    printf("Celular: %s<br>",$inscrito->getCelular());
    printf("Telefone: %s<br>",$inscrito->getTelefone());
    printf("Profissão: %s<br>",$inscrito->getProfissao());
    printf("Estado Civil: %s<br>",$inscrito->getEstadoCivil());
    printf("Cidade: %s<br>",$inscrito->getCidade());
    printf("Estado: %s<br>",$inscrito->getEstado());
    printf("Adventista?: %s<br>",$inscrito->getAdventista());
    printf("Igreja: %s<br>",$inscrito->getIgreja());
    ////////////////////
	
    //saúde
    ///////
    $inscrito->setContatoEmergencia($_POST["emergencia_contato"]);
    $inscrito->setTelefoneContato($_POST["emergencia_telefone"]);
    $inscrito->setDoenca($_POST["doenca"]);
    $inscrito->setAlergia($_POST["alergia"]);
    $inscrito->setCuidado($_POST["cuidado_especial"]);

    printf("Contato de Emergência: %s<br>",$inscrito->getContatoEmergencia());
    printf("Telefone do Contato: %s<br>",$inscrito->getTelefoneContato());
    printf("Doenca: %s<br>",$inscrito->getDoenca());
    printf("Alergia: %s<br>",$inscrito->getAlergia());
    printf("Cuidados Especiais: %s<br>",$inscrito->getCuidado());
    ///////
    // locomoção
    $inscrito->setPrecisaCarona($_POST["precisa_carona"]);
    $inscrito->setVagas($_POST["vagas"]);
    //hora de saida
    ////////////
     $query = "UPDATE Pessoa SET ".
				"nome='".mysql_real_escape_string($inscrito->getNome())."',".
				"sobrenome='".mysql_real_escape_string($inscrito->getSobrenome())."',".
				"senha = '".mysql_real_escape_string($inscrito->getSenha())."',".
				"sexo= '".mysql_real_escape_string($inscrito->getSexo())."',".
				"dia_nasc = ".mysql_real_escape_string($inscrito->getDiaNasc()).",".
				"mes_nasc = ".mysql_real_escape_string($inscrito->getMesNasc()).",".
				"ano_nasc = ".mysql_real_escape_string($inscrito->getAnoNasc()).",".
				"rg='".mysql_real_escape_string($inscrito->getRG())."',".
				"cpf='".mysql_real_escape_string($inscrito->getCPF())."',".
				"celular='".mysql_real_escape_string($inscrito->getCelular())."',".
				"telefone='".mysql_real_escape_string($inscrito->getTelefone())."',".
				"profissao='".mysql_real_escape_string($inscrito->getProfissao())."',".
				"estado_civil='".mysql_real_escape_string($inscrito->getEstadoCivil())."',".
				"cidade='".mysql_real_escape_string($inscrito->getCidade())."',".
				"estado='".mysql_real_escape_string($inscrito->getEstado())."',".
				"adventista='".mysql_real_escape_string($inscrito->getAdventista())."',".
				"igreja='".mysql_real_escape_string($inscrito->getIgreja())."',".
				"contato_emergencia='".mysql_real_escape_string($inscrito->getContatoEmergencia())."',".
				"telefone_contato='".mysql_real_escape_string($inscrito->getTelefoneContato())."',".
				"doenca='".mysql_real_escape_string($inscrito->getDoenca())."',".
				"alergia='".mysql_real_escape_string($inscrito->getAlergia())."',".
				"cuidado='".mysql_real_escape_string($inscrito->getCuidado())."',".
				"precisa_carona='".mysql_real_escape_string($inscrito->getPrecisaCarona())."',".
				"vagas_carro=".mysql_real_escape_string($inscrito->getVagas()).
                                " WHERE id_pessoa = ".mysql_real_escape_string($inscrito->getId_pessoa());
	echo $query;
				
	@mysql_query($query) or die ("Nao foi possivel executar a QUERY");
	
	DesconectarBanco();
?>
</head>
</html>
