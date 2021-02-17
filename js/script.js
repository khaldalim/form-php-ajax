$(function(){

	$('#contact-form').submit(function(e){

		e.preventDefault();
		$('.comments').empty();
		var postdata = $('#contact-form').serialize();
		$.ajax({
			type: 'POST',
			url : 'php/contact.php',
			data: postdata,
			dataType : 'json',
			success: function(result){
				// alert("success");
				if (result.isSuccess) {
					
					$("#contact-form").append("<p class='thank-you'> votre message à bien été envoyé !</p>");
					$("#contact-form")[0].reset();
				}
				else{
					
					$("#firstname + .comments").html(result.firstnameError);
					$("#name + .comments").html(result.nameError);
					$("#email + .comments").html(result.emailError);
					$("#phone + .comments").html(result.phoneError);
					$("#message + .comments").html(result.messageError);
				}

			},
			error: function(ts){
				alert("non success");
				console.log(ts.responseText);
			}
		});

	})

})