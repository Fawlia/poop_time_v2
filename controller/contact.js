$(document).ready(function() {
	
	$("form").submit(function(event) {
		event.preventDefault();
		
		var formulaire = {
		"pseudo": $("#pseudo").val(),
		"email" : $("#email").val(),
		"ville" : $("#ville").val(),
		"msg" : $("#msg").val()
		
		}
		
		
		$.ajax({
            url: "/poop_time_v2/verif",
            type : 'POST',
            dataType: 'json',
            data : formulaire, 
			
            success: function(success){
			
				
				if(success.pseudo == ""){
						$('#pseudo').css('border', "1px green solid");
					}else{
						$('#pseudo').css('border', "1px red solid");
					}
				
				if(success.msg == ""){
						$('#msg').css('border', "1px green solid");
					}else{
						$('#msg').css('border', "1px red solid");
					}
				
				if(success.email == ""){
						$('#email').css('border', "1px green solid");
					}else{
						$('#email').css('border', "1px red solid");
					}
				
				if(success.ville == ""){
						$('#ville').css('border', "1px green solid");
					}else{
						$('#ville').css('border', "1px red solid");
					}
				
				
            },
            
            error: function(){
                console.log('REQUETE AJAX DEAD       ');
            },
            
        });
		
	});
	
});
	