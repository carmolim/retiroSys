<?php
$inscrito = Augusto;

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
	            if (true)
	            {
	            	$formcontent .=
	            	
			            $inscrito.', você escolheu fazer o  pagamento para o Retiro de Inverno via depósito ou transferência bancária.<br>
		                <br>
		                Para fazer a transferência você deve utilizar o seguinte CNPJ: 79.080.602/0039-29. <br>
		                O beneficiado é União Sul Brasileira da Igreja Adventista do 7º dia. <br>
		                <br>
		                Os pagamentos devem ser realizados até o dia 13 de julho. <br>
		                <br>
		                Confira também nossa <a href="http://bomretirodeinverno.com.br/levar.html">página</a> informando o que você deve levar e o que você não deve.<br>
		                <br>
		               Obrigado!
	            	';
	            }


	            /*
	            // se vai pagar com depósito
	            else if (false)
	            {
	            	$formcontent .=
	            	
			            $inscrito->getNome();.', você escolheu fazer o  pagamento para o Retiro de Inverno via depósito ou transferência bancária.<br>
		                <br>
		                Para fazer a transferência você deve utilizar o seguinte CNPJ: 79.080.602/0039-29. <br>
		                O beneficiado é União Sul Brasileira da Igreja Adventista do 7º dia. <br>
		                <br>
		                Os pagamentos devem ser realizados até o dia 13 de julho. <br>
		                <br>
		                Confira também nossa <a href="http://bomretirodeinverno.com.br/levar.html">página</a> informando o que você deve levar e o que você não deve.<br>
		                <br>
		               Obrigado!
	            	';
	            	# code...
	            }

	            // se vai pagar com pagseguro
	            else
	            {
	            	$formcontent .=
	            	
			            $inscrito->getNome();.', você escolheu fazer o  pagamento para o Retiro de Inverno via depósito ou transferência bancária.<br>
		                <br>
		                Para fazer a transferência você deve utilizar o seguinte CNPJ: 79.080.602/0039-29. <br>
		                O beneficiado é União Sul Brasileira da Igreja Adventista do 7º dia. <br>
		                <br>
		                Os pagamentos devem ser realizados até o dia 13 de julho. <br>
		                <br>
		                Confira também nossa <a href="http://bomretirodeinverno.com.br/levar.html">página</a> informando o que você deve levar e o que você não deve.<br>
		                <br>
		               Obrigado!
	            	';
	            }
*/
	            $formcontent .= '
								        </font>
							           </p>
							          </td>
							        </tr>
							    </table>
							  </body>
							</html>';

				echo $formcontent;
				?>