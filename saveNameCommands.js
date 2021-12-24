
var buttonNext=document.getElementById("next");
buttonNext.onclick=function()
{

    var command1=document.getElementById("command1").value;
    var command2=document.getElementById("command2").value;
    var command3=document.getElementById("command1").value;
    localStorage.setItem("command1",command1);
    localStorage.setItem("command2",command2);
    localStorage.setItem("command3",command3);
}
