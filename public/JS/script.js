 // Script jQuery 

 // aba de comentários
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


let today = new Date();
let dayName = new Array ("Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado");
let monName = new Array ("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Agosto","Setembro", "Outubro", "Novembro", "Dezembro");

let formattedDate =   dayName[today.getDay()] + ", " + today.getDate() + " de " + monName[today.getMonth()] + " de " + today.getFullYear(); 

document.getElementById("mostra_data").innerText = formattedDate;


