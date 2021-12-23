

  function showAmountPoints() {
    var rng=document.getElementById('firstRange'); //rng - это Input
    var p=document.getElementById('one'); // p - абзац
    p.innerHTML=rng.value;
}

function showAmountTime() {
    var rng=document.getElementById('secondRange'); //rng - это Input
    var p=document.getElementById('second'); // p - абзац
    p.innerHTML=rng.value;
}


var buttonPlay=document.getElementById("play");
buttonPlay.onclick=function()
{
    
    var amountPoints=document.getElementById("firstRange").value;
    var resultTime=document.getElementById("secondRange").value;
    var skip=document.getElementById("switch").checked;
    var language=document.getElementById("language").value;

    localStorage.setItem("points",amountPoints);
    localStorage.setItem("time",resultTime);
    localStorage.setItem("skip",skip);
    localStorage.setItem("language",language);
    document.location.href = "game.php";
}


$(document).ready(function()
{
    $('form').submit(function(e)
    {
        e.preventDefault();
        var amountPoints=$('#firstRange').val();
        var resultTime=$('#secondRange').val();
        if($('#switch').is(':checked')){
            var skip=true;
        }
        else{
            var skip=false;
        }
        var language=$('#language').val();

        $.ajax({
            type:"POST",
            url:"getDatasettings.php",
            data:{
                'amountPoints':amountPoints,
                'resultTime':resultTime,
                'skip':skip,
                'language':language,
            },
            dataType: "text",
            success:function()
            {
                
                
            }
        });
      
    });
});







