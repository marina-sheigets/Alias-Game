
var buttonPlay=document.getElementById("startClock");
buttonPlay.onclick=function()
{
    document.getElementById("hideButton").style.display='none';
    document.getElementById("list_words").style.display='block';
    var counter = localStorage.getItem("time");
    setInterval(function() {
      counter--;
       if (counter >= 0) {
          span = document.getElementById("count");
          span.innerHTML = counter;
       }
       if (counter === 0) {
          alert('sorry, out of time');
          clearInterval(counter);
        }
      }, 1200);
}


$(document).ready(function()
{
    $('#startClock').click(function(e)
    {
        e.preventDefault();
        var amountPoints=localStorage.getItem('points');
        var resultTime=localStorage.getItem('time');
        var skip=localStorage.getItem('skip');
        var language=localStorage.getItem('language');

        $.ajax({
            type:"POST",
            url:"getDatasettings.php",
            data:{
                'amountPoints':amountPoints,
                'resultTime':resultTime,
                'skip':skip,
                'language':language
                
            },
            dataType: "text",
            success:function(res)
            {
                alert(res);
                
            }
        });
      
    });
});






