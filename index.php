<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Bom Retiro de Inverno</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">		

		<meta property="fb:admins" content="1063748681"/>
		<meta property="og:title" content="Bom Retiro de Inverno"/>
		<meta property="og:type" content="cause"/>
		<meta property="og:url" content="http://www.bomretirodeinverno.com.br/"/>
		<meta property="og:image" content="http://www.bomretirodeinverno.com.br/img/logo-fb.png"/>
		<meta property="og:site_name" content="Bom Retiro de Inverno"/>
		<meta property="og:description" content="Do dia 29/05 ao 02/06 acontecerá a segunda edição do Bom Retiro de Inverno, com a presença do Pr. Joni Roger de Oliveira e do Grupo 7MUS, dirigido por Jader Santos cuidando do nosso louvor! Com certeza será um Bom Retiro! :)"/>
		<meta http-equiv="Content-Style-Type" content="text/css" />	

		<link rel="STYLESHEET" type="text/css" href="css/jquery.countdown.css" />	  	
        <link rel="STYLESHEET" type="text/css" href="css/form.css" />
        <link rel="STYLESHEET" type="text/css" href="css/global.css" />
        <link rel="STYLESHEET" type="text/css" href="css/orbit-1.2.3.css" />

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.countdown.js"></script>
		<script type="text/javascript" src="js/jquery.validate.js"></script>	
		<script type="text/javascript" src="js/jquery.orbit-1.2.3.min.js" ></script>


		<style type="text/css">

			#site
			{
				width:960px; 
				margin-left: auto;
				margin-right: auto;	
				margin-top: 18px;		
			}

			#header
			{	
				padding: 30px;				
				margin-bottom: 18px;
				text-align: center;
			}

			#navbar
			{				
				float: left;
				margin-bottom: 18px;
			}

			#navbar .navButton
			{	
				color: white;		
				text-transform: uppercase;
				padding: 10px;
				float: left;
				margin-right: 9px;
				background: #ccc;
				background-color: rgba(51, 81, 119, 0.5);	
				cursor: pointer;
				display: inline-block;

				-o-transition:.5s;
				-ms-transition:.5s;
				-moz-transition:.5s;
				-webkit-transition:.5s;
				/* ...and now for the proper property */
				transition:.5s;
			}				

			#navbar .navButton:hover
			{	
				background: #c6c6c6;
				background-color: rgba(51, 81, 119, 0.7);	
			}

			#paginas
			{
				width:900px; 
				background: #ccc; /* Fall-back for browsers that don't support rgba */
				background: rgba(255, 255, 255, .2);
				padding: 30px;
				float: left;				
			}		

			#contato, #inscricao, #programacao
			{
				display: none;
			}

			.page-content
			{
				margin-top: 18px;
			}
			
			#inscricao .col-1
			{
				width: 460px;
				margin-right:60px;
			}
			
			.col
			{				
				margin-right:20px;
				margin-bottom: 18px;
				float: left;				
			}

			.col-1
			{
				width:260px;
				margin-right:60px;
				float: left;
			}

			.col-2
			{
				width:260px;
				margin-right:60px;
				float: left;
			}
			
			.col-3
			{
				width:260px;
				float: left;
			}
			
			.inscrevase
			{
				margin-right: 20px;
				color: white;
				display: inline-block;
				background: #ccc;
				background-color: rgba(51, 81, 119, 0.5);	
				text-align: center;
				padding: 10px;
				text-transform: uppercase;
				cursor: pointer;
			}			
		</style>

		<script type="text/javascript">
			$(document).ready(function()
			{
				// seleciona os botoes no topo
				$('#navbar .navButton').click(function()
				{
					// seleciona a página que foi clicada
					var paginaAparecendo = $('#' + $(this).attr("value"));

					// seleciona todas as páginas que não estão aparecendo e da um fadeOut
					$('#paginas .pagina').not(paginaAparecendo).fadeOut();

					// espera a outras páginas desaparecerem completamente antes de aparecer
					paginaAparecendo.delay(400).fadeIn();					
				});
			});  			
		</script>

		<!--Começo do Analytics-->
		<script type="text/javascript">
			var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-38536788-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();	
		</script>
		<!-- Fim do Analytics-->
		
		<!--Contagem regressiva-->		
		<script type="text/javascript">
			$(function ()
			{
				var retiro = new Date(2013, 4, 29);
				$('#defaultCountdown').countdown({until: retiro, format: 'ODHMS', layout: 'Falta: {on} {ol}, {dn} {dl}, {hn} {hl} e {mn} {ml}'});
			});
		</script>
		<!--fim do contador-->

		<!--Validação-->
		<script type="text/javascript">  
			$(document).ready(function(){
			  // Validação dos campos do formulário
			  $("#login").validate(
			  {
				rules:
				{
					username: 
					{
						required: true,
						email: true
					},	

					password:
					{
						required: true
					}			  			  
				},
				
				messages:
				{			 
					username: 
					{
						required: 	" <br />É necessário informar um e-mail",
						email: 		" <br />Informe um e-mail válido"
					},	

					password:
					{
						required: 	" <br />Informe sua senha"
					}
				}				
			  });			 
			});
		</script>

		<!-- orbit begin -->
		<script type="text/javascript">
		     $(window).load(function() {
		         $('#featured').orbit({
		          		});
		     });
		</script>
		<!-- orbit end -->		
	</head>
	<body>
		<!--XFBML Facebook-->
		<div id="fb-root"></div>
		<script>
			(function(d, s, id)
			{
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'))
		</script>
		<!--XFBML Facebook-->

		<div id="site">
			<div id="header">
				<img src="img/limite.png" alt="No Limite da Graça" />
			</div>

			<div id="navbar">
				<div class="navButton" value="home">Home</div>
				<div class="navButton" value="programacao">Programação</div>
				<div class="navButton" value="inscricao">Inscrição</div>
				<div class="navButton" value="contato">Contato</div>					
			</div>	
			
			<div id="defaultCountdown"></div>		
			<a href="/inscricao/inscricao.php" class="inscrevase">Inscreva-se!</a>
			<div class="fb-like" data-href="https://www.facebook.com/BomRetiroDeInverno" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>	
			

			<div id="paginas">
				<div id="home" class="pagina">

					<div id="featured">						
			          	<img src="img/slide/7mus.jpg"/>			          	
			          	<img src="img/slide/joni.jpg"/>
			          	<img src="img/slide/castelinho.jpg"/>			         	
			        </div>

			        <div class="page-content">
			        	<div class="col-1">
							<h3>Único feriado do ano!</h3>
							<p>
								Que tal passar o feriado de Corpus Christi num castelo?	A segunda edição do nosso retiro de inverno está cheia de novidades e você não pode perder!
							</p>
							<p>
								Neste ano de 2013 teremos 5 dias de programação, com muita comida, amizade, comunhão com Deus e um tanto de frio, para nos unir nesse clima cristão e aquecer os nossos corações com muito amor.
							</p>					   
						</div>
						          
						<div class="col-2">
							<h3>Castelli di Palma</h3>
							<p>
								O <a href="https://www.facebook.com/BomRetiroDeInverno" target="_blank">Bom Retiro de Inverno</a> 2013 vai acontecer dos dias <a href="https://www.facebook.com/events/138217659685176/" target="_blank">29/05 à 02/06</a>.
								Para dirigir a nossa programação, contamos com a participação de
								convidados muito especiais! Teremos a presença do <a href="https://www.facebook.com/joniroger.oliveira" target="_blank">Pr. Joni Roger</a>,
								que estará cuidando da parte espiritual do nosso encontro, e o <a href="https://www.facebook.com/grupo7mus" target="_blank">Grupo 7MUS</a>, dirigido por <a href="https://www.facebook.com/jader.d.santos" target="_blank">Jader Santos</a>, que você já conhece, né? Então não vou falar nada...
							</p>

							<p>
								O Acampamento será realizado no <a href="http://www.castellidipalma.com.br/" target="_blank"> Castelli di Palma</a>, ou o famoso ‘Castelinho’, em Bocaiúva do Sul que fica mais ou menos 30km do centro de Curitiba.
							</p>
						</div>
						                
						<div class="col-3"> 
						  <h3>Caraca! Um Castelo!?</h3>
						  <p>
						    	Tem piscina aquecida, campo de futebol, mesa de sinuca, quadra poliesportiva, quadras de areia, trilha ecológica, chalés (não, não precisa ficar em barraca!!!) e uma comidinha delícia! Você não vai perder uma dessas, né?
						  </p>
						  <p>
						   		Você pode ter tudo isso por apenas R$ 270. Faça sua <a href="inscricao/inscricao.php">inscrição</a> e escolha a forma de pagamento que você preferir, depósito, transferência ou PagSeguro.
						  </p>
						</div>
					</div>
				</div>
				<!-- fim da home -->

				<div id="programacao" class="pagina">
					<div style="float: left;">
						 	Nossa programação está tão boa que está difícil de encaixar aqui! Volte em breve para conferir...
						 	<br>
						 	<br>
						 	<br>
					</div>
				
					<div class="col" style="clear: both;">
					  <h3>Quarta 19/05</h3>
					<!--   <ul class="list1">
					   		<li><span>16:00</span> - Chegada</li>
					   		<li><span>19:00</span> - Janta</li>
					    	<li><span>20:30</span> - Mensagem - Pr. Joni</li>
					    	<li><span>23:30</span> - Dormir</li>
					  </ul> -->
					</div>

					<div class="col">
					  <h3>Quinta 30/05</h3>
					 <!--  <ul>
						  <li><span>07:30</span> - Desjejum</li>
						  <li><span>09:00</span> - Mensagem - Pr. Joni</li>
						  <li><span>10:00</span> - Esportes</li>
						  <li><span>12:15</span> - Almoço</li>
						  <li><span>13:15</span> - Livre </li>
						  <li><span>15:00</span> - Encerramento</li>
						  <li><span>16:00</span> - Lanche</li>
						  <li><span>17:15</span> - Livre </li>
						  <li><span>19:00</span> - Saída</li>
					  </ul> -->
					</div>

					<div class="col">
					  <h3>Sexta 31/05</h3>
					 <!--  <ul>
					    <li><span>07:30</span> - Desjejum</li>
					    <li><span>09:00</span> - Mensagem - Pr. Joni</li>
					    <li><span>10:00</span> - Esportes</li>
					    <li><span>12:15</span> - Almoço</li>
					    <li><span>13:15</span> - Livre </li>
					    <li><span>15:00</span> - Encerramento</li>
					    <li><span>16:00</span> - Lanche</li>
					    <li><span>17:15</span> - Livre </li>
					    <li><span>19:00</span> - Saída</li>
					  </ul> -->
					</div>
					
					<div class="col">
					  <h3>Sábado 01/06</h3>
					 <!--  <ul>
						  <li><span>07:30</span> - Desjejum</li>
						  <li><span>09:15</span> - Culto - Pr. Joni</li>
						  <li><span>10:45</span> - Escola Sabatina</li>
						  <li><span>12:15</span> - Almoço</li>
						  <li><span>13:15</span> - Livre </li>
						  <li><span>16:00</span> - J.A.</li>
						  <li><span>19:00</span> - Festa .N.E.R.D.</li>
						  <li><span>21:00</span> - Livre</li>
						  <li><span>22:00</span> - Lanche</li>
						  <li><span>00:00</span> - Dormir</li>					
					  </ul> -->
					</div>
					
					<div class="col">
					  <h3>Domingo 02/06</h3>
					 <!--  <ul>
						   <li><span>07:30</span> - Desjejum</li>
						   <li><span>09:00</span> - Mensagem - Pr. Joni</li>
						   <li><span>10:00</span> - Esportes</li>
						   <li><span>12:15</span> - Almoço</li>
						   <li><span>13:15</span> - Livre </li>
						   <li><span>15:00</span> - Encerramento</li>
						   <li><span>16:00</span> - Lanche</li>
						   <li><span>17:15</span> - Livre </li>
						   <li><span>19:00</span> - Saída</li>
					  </ul> -->
					</div>

					
				</div>
				<!-- fim da programaçao -->

				<div id="inscricao" class="pagina">
					 <div class="col-1">
					  <h3>Faça sua inscrição</h3>
					  <p>
					    Você pode fazer agora mesmo a sua inscrição e seu pagamento aqui no site. Para fazer sua inscrição clique no botão abaixo. Caso tenha alguma dúvida vá até a página de contato para obter mais informações.
					  </p>					  
					  <p>
					    Se você já fez sua inscrição e quer fazer alguma alteração, ou verificar como está a situação do seu pagamento, por favor faça o login ao lado.
					  </p>					 
					   </br>
					   <input onClick="parent.location='inscricao/inscricao.php'" value="Inscreva-se" class="button">
					  
					</div>

					<div class="col-2">					  	
					  	<h3>Login</h3>		
						<form id="login" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post" name="login">
							<div>
								<label for="username">E-mail:</label>
								<br />
								<input type="text" name="username" id="username" maxlength="50"/><br /><br />
							</div>
							<div>
								<label for="password">Senha:</label>
								<br />
								<input type="password" name="password" id="password" maxlength="50"/><br/>
							</div>
								<br />
								<input type="submit" name="submit" value="Entrar" class="button">
								
								<a href="inscricao/esqueci_senha.php"> Esqueci minha senha</a>
						</form>			
					</div>
				</div>
				<!-- fim da inscricao -->

				<div id="contato" class="pagina">
					  
					<iframe width="900" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps/ms?msa=0&amp;msid=206585737064468343896.0004bd93415213cffaf4f&amp;ie=UTF8&amp;t=h&amp;ll=-25.222656,-49.152027&amp;spn=0.002426,0.009645&amp;z=17&amp;output=embed"></iframe>
			        <div class="page-content">
				        <div class="col-1">
						  <h3>Localização</h3>
						  <p>
						  		Se você não foi no ano passado, ou não sem lembra de como chegar lá, não se preocupe, aqui em cima tem um mapa para você!
						  		O "castelinho" fica em Bocaiúva do Sul cerca de uns 30 km do centro de Curitiba.
						  </p>
						  
						  <p>
						  		Se você é uma pessoa tecnológica, você pode baixar arquivo de sua preferência e transferir para o seu GPS ou então clique <a href="https://maps.google.com.br/maps/ms?msa=0&msid=206585737064468343896.0004bd93415213cffaf4f&ie=UTF8&t=h&ll=-25.221278,-49.151019&spn=0.002427,0.009656&z=17&vpsrc=6&iwloc=0004bd9343d83d819d50c&f=d&daddr=Ch%C3%A1cara+da+Ben%C3%A7%C3%A3o+%40-25.222658,-49.152025"> aqui</a> para abrir com o seu smartphone.
						  </p>
						  	<a href="https://bitly.com/castelinho_gpx">
						  		<img src="img/gpx.png" alt="gpx" width="36" height="36" />
						  	</a>
						  	<a href="https://bitly.com/castelinho_kml">
						  		<img src="img/kml.png" width="36" height="36" alt="kml" longdesc="http://pt.wikipedia.org/wiki/Keyhole_Markup_Language" />
						  	</a>
						</div>

						<div class="col-2">          
						  <h3>Financeiro</h3>
						  <p>
						  		Caso tenha alguma problema com a inscrição, ou tenha qualquer dúvida a respeito do acampamento entre em contato com: 
						  </p>						 
						  <p>
							    <a class="nome" href="http://www.facebook.com/gabriel.kaminski.5" target="_blank">Gabriel Kaminski</a>
							    <br />
							    <a href="mailto:kaminskao@hotmail.com?subject=Contato Acampamento">kaminskao@hotmail.com</a>
							    <br />
							    <span class="phone">41 8416.2559</span><br />
						  </p>						  
						  <p>
							    <a href="http://www.facebook.com/muri.o.alves" target="_blank">Murilo Alves</a><br />
							    <a href="mailto:muri.o.alves@gmail.com?subject=Contato Acampamento">muri.o.alves@gmail.com</a> <br />
							    <span class="phone">41 9664.3486</span>
						  </p>						  
						</div>

						<div class="col-3">
						  <h3>Inscrições</h3>					  

						  	 <p>
							    <a href="http://www.facebook.com/luana.degraf">Luana Degraf</a>
							    <br />
							    <a href="mailto:lu.degraf@hotmail.com?subject=Contato Acampamento">lu.degraf@hotmail.com</a>
							    <br />
							    41 8411.7217	
						  </p>
						  <p>
							    <a href="http://www.facebook.com/carmolim" target="_blank">Augusto Carmo</a>
							    <br />
							    <a href="mailto:carmolim@gmail.com?subject=Contato Acampamento">carmolim@gmail.com</a>
							    <br />
							   	41 9968.6287
							    <a href="mailto:carmolim@gmail.com?subject=Contato Acampamento"></a>
						  </p>

					
						</div>
			        </div>  
				</div>
				<!-- fim do contato -->
			</div>
			<!-- fim das páginas -->			
		</div>
			<div class="center">
				bomretirodeinverno ©				
			</div>				
		</div>
		<!-- fim do site -->		
	</body>
</html>

<?php
	require_once("inscricao/conectarBD.php");

	ConectarBanco();
        if(isset($_POST['submit'])) 
        { 
            $query_senha = "SELECT senha FROM Pessoa WHERE email = '".$_POST["username"]."'";
            if (@mysql_result(mysql_query($query_senha),0) == $_POST["password"])
            {   

                if($_POST["username"] == 'admin@ibr.com.br')
                {
                	echo "<script>window.open(\"inscricao/admin.php?permission=true\",'_self')</script>";	
                }
                else
                {
                	$query_login = "SELECT id_pessoa FROM Pessoa WHERE email = '".$_POST["username"]."'";
                	$id = mysql_result(mysql_query($query_login),0) or die  ("PROBLEMA COM O SERVIDOR");
                	echo "<script>window.open(\"inscricao/update_inscricao.php?id=".$id."\",'_self')</script>";	                	
            	}
            }
            else
            {
                echo "<script>alert(\"Ops! Usuário e Senha não conferem.\")</script>";
            }
        }
	DesconectarBanco();
?>

