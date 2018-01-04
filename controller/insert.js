$(document).ready(function() {

  $("#insert").submit(function(event) {
		event.preventDefault();

    var formulaire = {
		"pseudo": $("#pseudo").val(),
    "lat": $("#lat").val(),
    "lng": $("#lng").val(),
    "adresse": $("#adresse").val(),
    "han": $("#han").val(),
    "pay": $("#pay").val(),
		"ville" : $("#ville").val(),
		"msg" : $("#msg").val()

		}


    $.ajax({

            url: "http://localhost/poop_time_v2/insertV",
            type : 'POST',
            dataType: 'json',
            data : formulaire,

            success: function(success){
              console.log(success);
            if(success.pseudo && success.adresse && success.han && success.pay && success.ville && success.msg){

              $("#insert").html("");
              $("#insert").append("<div class='container'><div class='row'><div class='col s12 center-align'><h4>Toilette ajouté!</h4></div></div></div>");

            }

              if(!success.ville){
                $('#ville').css('border', "1px red solid");
              }else {
                  $('#ville').css('border', "1px green solid");
              }

              if(!success.pseudo){
                $('#pseudo').css('border', "1px red solid");
              }else {
                  $('#pseudo').css('border', "1px green solid");
              }

              if(!success.adresse){
                $('#adresse').css('border', "1px red solid");
              }else {
                  $('#adresse').css('border', "1px green solid");
              }

              if(!success.msg){
                $('#msg').css('border', "1px red solid");
              }else {
                  $('#msg').css('border', "1px green solid");
              }

            },

            error: function(){
                console.log('REQUETE AJAX DEAD       ');
            },

        });

  });


})
