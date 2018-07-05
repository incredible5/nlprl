function stop()
{
    document.getElementById("mar").setAttribute("scrollamount","0");
}
function start()
{
    document.getElementById("mar").setAttribute("scrollamount","initial");
}
function dropShow(x)
{
	if(document.getElementById(x).style.display == "block")
		document.getElementById(x).style.display = "none";
	else
    {
    	closeAll();
    	document.getElementById(x).style.display = "block";
    }
}
window.onclick = function(event)
{
	if(!(event.target.matches('.lex') || event.target.matches('.tool')))
        closeAll();
}
function closeAll()
{
	document.getElementById("Lexical").style.display = "none";
	document.getElementById("Tools").style.display = "none";
}