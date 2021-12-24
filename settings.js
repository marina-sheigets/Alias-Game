

function showAmountTime() {
    var rng=document.getElementById('secondRange'); //rng - это Input
    var p=document.getElementById('second'); // p - абзац
    p.innerHTML=rng.value;
}


var buttonPlay=document.getElementById("play");
buttonPlay.onclick=function()
{
    
    
    var resultTime=document.getElementById("secondRange").value;
    var skip=document.getElementById("switch").checked;
    var language=document.getElementById("language").value;

   
    localStorage.setItem("time",resultTime);
    localStorage.setItem("skip",skip);
    localStorage.setItem("language",language);
    document.location.href = "game.php";
}









