<?php require_once("conectarBD.php");?>

<?php

    ConectarBanco();

    include("Pessoa.php");
    $inscrito = new Pessoa();
    $inscrito->setId_pessoa($_GET['id']);
    
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
    ////////////////////
    
    //saúde
    ///////
    $inscrito->setContatoEmergencia($_POST["emergencia_contato"]);
    $inscrito->setTelefoneContato($_POST["emergencia_telefone"]);
    $inscrito->setDoenca($_POST["doenca"]);
    $inscrito->setAlergia($_POST["alergia"]);
    $inscrito->setCuidado($_POST["cuidado_especial"]);
    ///////
    // locomoção
    $inscrito->setPrecisaCarona($_POST["precisa_carona"]);
    $inscrito->setVagas($_POST["vagas"]);
    //hora de saida
    ////////////
    //Forma de Pagamento
    $inscrito->setFormaPagamento($_POST["forma_pagto"]);

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
                "vagas_carro=".mysql_real_escape_string($inscrito->getVagas()).",".
                "forma_pagamento='".mysql_real_escape_string($inscrito->getFormaPagamento())."'".
                " WHERE id_pessoa = ".mysql_real_escape_string($inscrito->getId_pessoa());
                
    @mysql_query($query) or die ("ERRO NO BANCO DE DADOS");
    
    DesconectarBanco();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
    <head>
    <title>Atualização de Cadastro - Bom Retiro de Inverno</title>

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
                <div id="logo"> <a href="../index.html"><img src="../img/snow_flake.png" alt="snow flake" width="250px"/></a></div>  
                <h1>NO LIMITE DA GRAÇA</h1>         
                <hr />          
            </div>          
        
            <div id="box">
                <?php
                    echo $inscrito->getNome().'<center>, seus dados foram alterados com sucesso.</center>';
                ?>
            </div>
            <div class="center">
                <br />bomretirodeinverno ©  
            </div>
        </div>      
    </body> 
</html>
