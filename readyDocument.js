document.addEventListener("DOMContentLoaded", function() {
        var resultOfTime=localStorage.getItem("time");
        document.getElementById('count').innerHTML=resultOfTime;

        var name_command1=localStorage.getItem("command1");
        document.getElementById('name_command').innerHTML=name_command1;

  });

  

