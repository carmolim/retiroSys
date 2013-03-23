<?php require_once("conectarBD.php");?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
    <head>
    <title>Bom Retiro de Inverno -  No Limite da Graça</title>
    	<meta content='pt' http-equiv='content-language'/>
    	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link rel="STYLESHEET" type="text/css" href="../css/global.css" />
        
    </head>
    
    <body>
        <?php
            ConectarBanco();

            include("Pessoa.php");

            $inscrito = new Pessoa();

            /*
                em que fazer a verificação do email para ver se ele já não foi cadastrado
                no do ano passado foi feito assim:

                $sql = "SELECT id_inscricao, email FROM inscricao WHERE email = '".$_POST['email']."'";
                $result = mysql_query($sql);
                $existe = (mysql_num_rows($result) > 0);
        
            
                 // se o email ainda não foi cadastrado...  
                if (!$existe)
                {}
            */                    


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
        				"0)";
        	echo $query;
        				
        	@mysql_query($query) or die  ("Nao foi possivel executar a QUERY");
        	
        	DesconectarBanco();

            // EMAIL PARA OS RESPONSÁVEIS

            // corpo da mensagem
            $formcontent = "Nome do inscrito: $inscrito->getNome $inscrito->getSobrenome \n Celular: $inscrito->getCelular \n Telefone: $inscrito->getTelefone \n  Forma de pagamento:??";
            // pessoas que não receber os emails
            $recipient = "carmolim@gmail.com, muri.o.alves@gmail.com, kaminskao@hotmail.com, lu.degraf@hotmail.com";
            // assunto do email
            $subject = "Mais um inscrito...";
            //cabeçalho do email
            $mailheader = "From: $inscrito->getEmail \r\n";
            // método do PHP para enviar o email
            mail($recipient, $subject, $formcontent, $mailheader) or die("Error!"); 

            // EMAIL PARA O INSCRITO

            // corpo da mensagem
            $formcontent = "teste";
            // destinatário
            $recipient = $inscrito->getEmail;
            // assunto
            $subject = "Bom Retiro de Inverno - Inscrição"; 
            // remetente
            $mailheader = "From: Jovens Bom Retiro <bomret.jovens@gmail.com>\r\n";      
            // cabeçalho do email
            $mailheader .= "MIME-Version: 1.0\r\n";
            $mailheader .= "Content-Type: text/html; charset=UTF-8\r\n";
            mail($recipient, $subject, $content, $mailheader) or die("Error!");
        ?>
    </body>
</html>
