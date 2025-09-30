 // Script jQuery 
$(document).ready(function() {
            $('#esconder').click(function() {
                $('#minhadiv').hide();      
                $('#esconder').hide();
                 $('#mostrar').show();
                });

            $('#mostrar').click(function () {
                $('#minhadiv').show(); // Mostra a div
                $('#esconder').show();
                $('#mostrar').hide();
              
            });    


           
});


var today = new Date();
 var dayName = new Array ("Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado");
var monName = new Array ("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Agosto","Setembro", "Outubro", "Novembro", "Dezembro");

var formattedDate =   dayName[today.getDay()] + ", " + today.getDate() + " de " + monName[today.getMonth()] + " de " + today.getFullYear(); 

document.getElementById("mostra_data").innerText = formattedDate;

// atualiza a hora.

$(document).ready(function(){
  function Atualiza_hora() {
    var agora = new Date();
    var horaFormatada = agora.toLocaleString();
    $("#hora").text(horaFormatada);

    console.log( agora );
}

  
  Atualiza_hora(); // Chama a função para exibir a hora imediatamente
  setInterval(Atualiza_hora, 1000); // Atualiza a hora a cada segundo
});

