            "use strict";
            // var  inp = document.getElementById("radio");
            // inp.addEventListener(("keydown"),function(event){
            //     this.event.preventDefault();
            //     if(keyCode === 13)
            //     {
            //         document.getElementById("r1").click();
            //     }
            // });
            // window.addEventListener('keydown',function(e){if(e.keyIdentifier == 'U+000A' || e.keyIdentifier == 'ENTER' || e.keyCode == 13){e.preventDefault(); return false;}},true);
            function signCheck()
            {
                var match = false;
                var pattern = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                var Username = document.getElementById("email").value;
                if(Username.match(pattern) != null)
                {
                    match = true;
                }
                else
                    alert("Enter valid email!");
                return match;
            }
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
                        case "mob": document.getElementById("mob").value = pair[1];
                                        break;
                        default: alert("No valid Previous details found!");
                    }
                }
            }
            function subCheck()
            {   
                var retvalue = true;
                var customObject = {};
                if(confirm("Are you sure you want to submit?"))
                    retvalue = true;
                else
                    return false;
                if(!(document.getElementById("name").value.match(/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/)))
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
                    alert("Invalid user Id!");
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
                if(!(document.getElementById("mob").value.match(/^[6-9]\d{9}$/)))
                {
                    alert("Invalid mobile number!");
                    document.getElementById("mob").value = "";
                    document.getElementById("mob").style.borderColor = "red";
                    retvalue = false;
                }
                else
                {
                    document.cookie = "mob=" + document.getElementById("mob").value;
                    document.getElementById("mob").style.borderColor = "initial";
                }
                return retvalue;
            }