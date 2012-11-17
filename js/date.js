loadInfo();    // charge la fonction une première fois puis
               // avec le setInterval toutes les 10 min
var i;
i =  setTimeout("loadInfo()", 600000);

function loadInfo(){
  $.ajax({  
    url: "./resources/includes/date.php", 
    success: function(msg){     
              if(document.getElementById("timeArea"))          
              document.getElementById("timeArea").innerHTML = msg ; 
              } 
  }); 
}




      