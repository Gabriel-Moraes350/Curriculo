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
				/*$("#thanks").html("<h3>Muito Obrigado<br>Pelo e-mail<h3>");
				$("#thanks").css({
					'color': '#03ad0e',
					'font-size': '1.5em'
				});*/
				$("#openModal").css('display','flex');
				$("#close").on('click',function(){
					setTimeout(function(){

						$("#form_contato").submit();
					},500);

				});
				$(document).click(function(event) {
					if(!$(event.target).closest('.modal-content').length) $("#form_contato").submit();
					
				});


				
				
			}
			
			return false;
			
		});
		
		
		

	});
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	$(".hover").hover(function() {
		$(this).removeClass('hover');

	}, function() {
		$(this).addClass('hover');
	});
	$(".submitHover").hover(function() {
		$(this).removeClass('submitHover');

	}, function() {
		$(this).addClass('submitHover');
	});

	

	$(".back").css('background-image','url("img/fogo.jpg")');
	




}
else{
	
	$(".fundo_header").css('background-image','url("https://source.unsplash.com/random?dark")');
	$(".form-container").css('background-image', 'url("https://source.unsplash.com/random")');
	$(".back").css('background-attachment', 'fixed');
	$(".fundo_header").css('background-attachment', 'fixed');
	$(".form-container").css('background-attachment', 'fixed');

}
