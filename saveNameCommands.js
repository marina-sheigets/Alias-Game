
var buttonNext=document.getElementById("next");
buttonNext.onclick=function()
{

  //  if(document.getElementById("command1").value !=="" && document.getElementById("command2").value!==""
    var command1=document.getElementById("command1").value;
    var command2=document.getElementById("command2").value;

    localStorage.setItem("command1",command1);
    localStorage.setItem("command2",command2);

}
