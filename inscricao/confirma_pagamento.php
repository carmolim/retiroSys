<?php require_once("conectarBD.php");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>Confirmação de Pagamento</title>

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
                <div id="logo"><img src="../img/snow_flake.png" alt="snow flake" width="250px"/></div>  
                <h1>NO LIMITE DA GRAÇA</h1>         
                <hr />          
            </div>          
        
            <div id="box">
                <?php
                    ConectarBanco();
                    $id = $_GET['id'];
                    echo "Aguarde...";
                    $query = "UPDATE Pessoa SET pag_efetuado = 'SIM' WHERE id_pessoa =".$id;
                    echo $query;
                    mysql_query($query) or die ("ERRO NO BANCO DE DADOS");
                    echo "<script>window.open(\"admin.php\",'_self')</script>";
                    DesconectarBanco();
                ?>
            </div>
            <div class="center">
                <br />bomretirodeinverno ©  
            </div>
        </div>      
    </body> 
</html>