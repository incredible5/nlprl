function subCheck()
{   
	if(!((document.getElementById("name").value.match(/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/))))
	{
		alert("Invalid username!");
		document.getElementById("name").value = "";
		document.getElementById("name").style.borderColor = "red";
		retvalue = false;
	}
	else
		document.getElementById("name").style.borderColor = "initial";
	if(!document.getElementById("email").value.match(/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/))
	{
		alert("Invalid email Id!");
		document.getElementById("email").value = "";
		document.getElementById("email").style.borderColor = "red";
		retvalue = false;
	}
	else
		document.getElementById("email").style.borderColor = "initial";
	return retvalue;
}