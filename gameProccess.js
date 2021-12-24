
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
            document.getElementById("hide").style.display='inline';
            document.getElementById("list_words").style.display='none';
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
        var language=localStorage.getItem('language');
        if(language=="English")
        {
            language="eng";
        }
        else{
            language="ru";
        }
        

        $.ajax({
            type:"POST",
            url:"getDatasettings.php",
            data:{
                'amountPoints':amountPoints,                
                'language':language
                
            },
            dataType: "text",
            success:function(res)
            {
                $('#word').html(res);
                
            }
        });
      
    });
});




$(document).ready(function()
{
    $('#skip').click(function(e)
    {
        e.preventDefault();
        var skip=localStorage.getItem('skip');
        var language=localStorage.getItem('language');
        var name_command=$('#name_command').html();
        var prev_word=$('#word').html();
        if(language=="English")
        {
            language="eng";
        }
        else{
            language="ru";
        }

        $.ajax({
            type:"POST",
            url:"setWhenSkip.php",
            data:{
                'skip':skip,
                'language':language,
                'name_command':name_command,
                'prev_word':prev_word,
            },
            dataType: "text",
            success:function(res)
            {
                
                $('#word').html(res);
                
            }
        });
      
    });
});

$(document).ready(function()
{
    $('#guess').click(function(e)
    {
        e.preventDefault();
        var language=localStorage.getItem('language');
        var name_command=$('#name_command').html();
        var prev_word=$('#word').html();
        if(language=="English")
        {
            language="eng";
        }
        else{
            language="ru";
        }

        $.ajax({
            type:"POST",
            url:"setWhenGuess.php",
            data:{
                'language':language,
                'name_command':name_command,
                'prev_word':prev_word,
            },
            dataType: "text",
            success:function(res)
            {
                
                $('#word').html(res);
                
            }
        });
      
    });
});











