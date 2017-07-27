<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Gabriel Moraes Portfolio</title>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, width=device-width"/>
	<meta name="description" content="Meu primeiro site com o intuito de aprendizado e testar novas habilidades">
	<meta name="keywords" content="gabriel,moraes,portfolio,primeiro,aprendizado,portifólio,000,web,host">
	<link href="img/favicon.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"> 
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px|Space+Mono" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<section  class="nav">
		<nav  class="nav_bar">
			<ul>
				<li><a href="#Inicio">Home</a></li>
				<li><a href="#Sobre">Sobre</a></li>
				<li><a href="#Formacao">Formação</a></li>
				<li><a href="#Contato">Contato</a></li>
			</ul>
		</nav>
	</section>
	<div class="fundo_header">
		<header id="Inicio" class="header">
			<h1>Gabriel Moraes Baptista</h1>
			<div class="container-image">
				<img src="img/IMG_3341.png" alt="Minha foto" >
			</div>

		</header>
	</div>
	<section id="Sobre" class="Sobre_mim">
		<div class="container-sobre">
			<h2>Sobre</h2>
			<p>Nascido em Sorocaba, 18 anos.</p>
			<p>Iniciante na área de TI, mas com muita vontade para aprender</p>
			<p>Aprendendo a área de Desenvolvimento Web </p>
		</div>
		<div id="var"></div>
		<div id="current"></div>
		<div id="previous"></div>
	</section>
	<div class="back">
		<section id="Formacao" class="Formacao_pessoal">
			<div class="container-formacao">
				<h2>Formação</h2>
				<ul>
					<li><h3>Técnico em Mecatrônica</h3>

						<p class="sub">Senai<br>(2015/2016)</p></li>

						<li><h3>Inglês Avançado</h3>

							<p class="sub">Curso Particular<br>(2013/2017)</p></li>

							<li><h3>Cursando Análise e Desenvolvimento de Sistemas</h3>

								<p class="sub">Fatec<br>(Início em 01/17)</p></li>


							</ul>
						</div>
					</section>
				</div>

				<section  class="Meu_contato">
					<section class="container_contato">

						<div class="container-fontawesome">
							<ul>
								<li><a href="https://www.linkedin.com/in/gabriel-m-6b9229122/" target="_blank"><span class="fa fa-linkedin-square fa-3x" aria-hidden="true"></span></a></li>
								<li><a href="https://www.instagram.com/gah_moraes98/?hl=pt-br" target="_blank"><span class="fa fa-instagram fa-3x" aria-hidden="true"></span></a></li>
								<li><a href="https://github.com/Gabriel-Moraes350" target="_blank"><span class="fa fa-github-square fa-3x" aria-hidden="true"></span>
									<li><a href="https://www.facebook.com/gabriel.moraes.9026040" target="_blank"><span class="fa fa-facebook-square fa-3x" aria-hidden="true"></span></a></li>
								</ul>
							</div>
						</section>
					</section>
					<section class="learning">
						<h2>Aprendendo<br>...</h2>
						<div class="skills">
							<ul>
								<li><img src="img/HTML5_logo.svg" alt="logo_Html"></li>
								<li><img src="img/css3.svg" alt="logo_css3"></li>
								<li><img src="img/Boostrap_logo.svg" alt="bootstrap_logo"></li>
								<li><img src="img/JavaScript_logo.svg" alt="js_logo"></li>
							</ul>
						</div>


					</section>
					<div class="mail">
						<ul>
							<li>
								<a href="mailto:gabriel.m.baptista@gmail.com" target="_blank"><span class="fa fa-envelope fa-3x" aria-hidden="true"></span></a>
								<p>gabriel.m.baptista@gmail.com</p>

							</li>
							<li>
								<a href="tel:15997721801" target="_blank"><span class="fa fa-phone fa-3x" aria-hidden="true"></span></a>
								<p>(15)997721801</p>

							</li>
						</ul>
					</div>
					<div id="Contato" class="form-container">
						<div id="fundo_contato">
							<h2>Contato</h2>
							<div class="form" >
								<form  id="form_contato" name="formail" action="" method="POST">
									<div id="thanks"></div>
									<p><input type="text" name="nome" id="nome" placeholder="Nome" maxlength="50"><br><h4 id="valNome"></h4></p>
									<p><input type="email" name="email" id="email"  placeholder="Email" maxlength="50" autocomplete="on"><br><h4 id="valEmail"></h4></p>
									<p><textarea  placeholder="Mensagem" maxlength="500" id="textArea" name="message"></textarea><br><h4 id="valText"></h4></p>
									<p><button type="submit"  name="send" id="enviar" value="Enviar">Enviar <span class="fa fa-arrow-right" aria-hidden="true"></span></button></p>
								</form>
							</div>
						</div>
					</div>

					<footer class="footer">
						<h2>Code by</h2>
						<h3>Gabriel Moraes Baptista</h3>
					</footer>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
					<script type="text/javascript">
						$(document).ready(function() {
				//nav bar
				var previousScroll = 0,
				headerDistance = $('.nav').height();
				$(window).scroll(function () {
					var currentScroll = $(this).scrollTop();
					if (currentScroll > headerDistance) {
						if (currentScroll > previousScroll) {
							$('.nav').slideUp('fast');
						} else {
							$('.nav').slideDown();
						}
					} else {
						$('.nav').slideDown();
					}
					previousScroll = currentScroll;
				});
				//validation form

				//email
				function validateEmail(email) {
					var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
					return re.test(email);
				}
				var emailVal = false;
				function validate() {
					
					$("#valEmail").text("");
					var email = $("#email").val();
					if (validateEmail(email)) {
						$("#valEmail").html( " Email válido :)");
						$("#valEmail").css({"color": "#03ad0e",'font-size': '1em'});
						emailVal = true;
					} else {
						$("#valEmail").html("\""+email+"\"  não é válido :( <br> Digite um email válido");
						$("#valEmail").css({"color": "red",'font-size': '1em'});
						emailVal = false;
					}
					return emailVal;
				}
				$("#email").on("input", validate);


				//name
				
				var name = false;
				var text = false;
				$("#enviar").on("click", function(){
					var textName = $("#nome").val();
					var textArea = $("#textArea").val();
					var textEmail = $("#email").val();
					
					var email = $("#valEmail").val();
					if(textName == ""){
						$("#valNome").text("Por favor digite seu nome");
						$("#valNome").css({
							'color': 'red',
							'font-size': '1em'
						});
						name = true;
					}
					else{
						name = false;
						$("#valNome").text("");
					}
					
					if (textEmail =="" ){

						$("#valEmail").text("Digite um email");
						$("#valEmail").css({'color':'red','font-size':'1em'});
						

					}
					if(textArea == ""){
						$("#valText").text("Por favor digite uma mensagem");
						$("#valText").css({
							'color': 'red',
							'font-size': '1em'
						});
						text = true;

					}
					else{
						text = false;
						$("#valText").text("");
					}
					if(emailVal==true && text==false && name == false){
						$("#thanks").html("<h3>Muito Obrigado<br>Pelo e-mail<h3>");
						$("#thanks").css({
							'color': '#03ad0e',
							'font-size': '1.5em'
						});
						setTimeout(function(){
							
							$("#form_contato").submit();
						},1500);}
					
					return false;
					
				});


				
				

			});
			
		</script>
		<?php
		ini_set('default_charset','UTF-8');

		if (!empty($_POST)){
			$name = $_POST['nome'];
			$message = $_POST['message'];


			$email_subject = "Novo email do site";
			$email_body = "Voce recebeu um email do usuario $name.\n".
			"A mensagem é:\n $message\n\n\n".


		$to = "gabriel.m.baptista@gmail.com";//<== update the email address
		
		
		$headers = "Content-Type: text/plain; charset=UTF-8";
		$headers .= "From: moraesportfolio";
		$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
		if ($email) {
			$headers .= "\r\nVindo de: $email";
		}
		
		
		//Send the email!
		mail($to,$email_subject,$email_body,$headers);

		//done. redirect to thank-you page.
		


		// Function to validate against any email injection attempts
		
	}

?> 

	</body>
	</html>