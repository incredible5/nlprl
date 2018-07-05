function getCookies()
            {
                var cooks = document.cookie.split(";");
                var pair = [];
                for(var i = 0; i < cooks.length; i++)
                {
                    pair = cooks[i].split("=");
                    pair[0] = pair[0].trim();
                    switch (pair[0])
                    {
                        case "name": document.getElementById("name").value = pair[1];
                                        break;
                        case "email": document.getElementById("email").value = pair[1];
                                        break;
                        case "newpasswd1": document.getElementById("newpasswd1").value = pair[1];
                                        break;
                        case "newpasswd2": document.getElementById("newpasswd2").value = pair[1];
                                        break;
                        default: alert("No valid Previous details found!");
                    }
                }
            }
            function subCheck()
            {   
                var retvalue = true;
                if(confirm("Are you sure you want to submit?"))
                    retvalue = true;
                else
                    return false;
                if(!((document.getElementById("name").value.match(/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/))))
                {
                    alert("Invalid username!");
                    document.getElementById("name").value = "";
                    document.getElementById("name").style.borderColor = "red";
                    retvalue = false;
                }
                else
                {
                    document.cookie = "name=" + document.getElementById("name").value;
                    document.getElementById("name").style.borderColor = "initial";
                }
                if(!document.getElementById("email").value.match(/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/))
                {
                    alert("Invalid email Id!");
                    document.getElementById("email").value = "";
                    document.getElementById("email").style.borderColor = "red";
                    retvalue = false;
                }
                else
                {
                    document.cookie = "email=" + document.getElementById("email").value;
                    document.getElementById("email").style.borderColor = "initial";
                }
                if(document.getElementById("newpasswd1").value == "")
                {
                    document.getElementById("newpasswd1").style.borderColor = "red";
                }
                if(document.getElementById("newpasswd2").value == "" )
                {
                    document.getElementById("newpasswd2").style.borderColor = "red";
                }
                if(document.getElementById("newpasswd1").value != document.getElementById("newpasswd2").value)
                {
                    document.getElementById("newpasswd2").style.borderColor = "red";
                    alert("Passwords did not match!");
                    retvalue = false;
                }
                else
                {
                    document.cookie = "newpasswd1=" + document.getElementById("newpasswd1").value;
                    document.cookie = "newpasswd2=" + document.getElementById("newpasswd2").value;
                    document.getElementById("newpasswd1").style.borderColor = "initial";
                    document.getElementById("newpasswd2").style.borderColor = "initial";
                }
                return retvalue;
            }