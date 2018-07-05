<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="nlp.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="stylesheet" type="text/css" href="download.css">
        <script type="text/javascript" src="home.js"></script>
        <script type="text/javascript" src="form.js"></script>
	</head>
	<body>
		<div class="header">
            <img src="malviya_ji.jpg"/>
        <div class="webname">
            <a href="index.html"><h1 style="color: rgb(0, 0, 128, 0.9)">Natural Language and Processing Research Lab</h1>
            <h3 style="color: rgb(70, 70, 70)">Department of Computer Science and Engg.</h3>
            <h3 style="color: rgb(70, 70, 70)">Indian Institute of Technology (BHU), Varanasi</h3></a>
        </div>
        <div class="iitlink">
                <h3><a href="https://iitbhu.ac.in/" target="_blank" style="text-decoration: none" title="Go to IIT BHU">IIT BHU</a></h3>
        </div>
        </div>
        <br>
        <br>
        <div class="hamburger" id="hamburger">
            <img src="hamburger.png" onclick="dropShow('navbar')" />
        </div>
        <div class="hornav" id="navbar">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="projects.php">Projects</a>
                </li>
                <li>
                    <div class="drop">
                    <a href="javascript:void(0)" class="lex" onclick="dropShow('Lexical')">Lexical Resources<i class="arrow down"></i></a>
                    <div class="dropcon" id="Lexical">
                        <ul>
                            <li>
                                <a href="dictionary.php">Machine Readable Dictionary</a>
                            </li>
                            <li>
                                <a href="corpus.php">Corpus</a>
                            </li>
                            <li>
                                <a href="#/">POS Tagged Corpus</a>
                            </li>
                            <li>
                                <a href="#/">Chunked Corpus</a>
                            </li>
                    </ul>
                    </div>
                    </div>
                </li>
                <li>
                    <div class="drop">
                    <a href="javascript:void(0)" class="tool" onclick="dropShow('Tools')">Tools<i class="arrow down"></i></a>
                    <div class="dropcon" id="Tools">
                        <ul>
                            <li>
                                <a href="pos_tagger.php">POS Tagger</a>
                            </li>
                            <li>
                                <a href="http://nlprl.iitbhu.ac.in/bmmshallowparser/">Chunker</a>
                            </li>
                            <li>
                                <a href="morph_analyser.php">Morph Tools</a>
                            </li>
                            <li>
                                <a href="mt_system.php">MT Systems</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </li>
                <li>
                    <a href="#/">Research</a>
                </li>
                <li>
                    <a href="download.php">Downloads</a>
                </li>
                <li>
                    <a href="#/">Events</a>
                </li>
                <li>
                    <a href="team.php">Teams</a>
                </li>
            </ul>
        </div>
        <br>
        <div class="vertnav">
            <ul>
                <li>
                    <a href="faq.php">FAQ</a>
                </li>
                <li>
                    <a href="contact.php">Contact us</a>
                </li>
                <li>
                    <a href="admlog.php">Admin</a>
                </li>
            </ul>
        </div>
        <div class="logout" id="logout">
            <form action="login.php?value=logout" method="POST">
                <input type="submit" value="logout">
            </form>
        </div>
        <div class="sign" id="sign">
            <form action="login.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <span class="oent">User Id:</span>
                        </td>
                        <td>
                             <input type="email" id="email" name="email" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="oent">Password: </span>
                        </td>
                        <td>
                            <input type="password" id="passwd" name="passwd" required/>
                        </td>
                    </tr>
                </table>
                        <button type="submit" onclick="javascript:return signCheck()"><span class="oent">Sign In</span></button>
            </form>
            <a href="sign.php" class="forgot">Forgot Password?</a>
            <h1 style="text-align: center; color: rgb(20,100,214); margin-bottom: 0; border-bottom: 1px solid rgb(20,100,214)">OR</h1>
            <a href="register.php"><div class="reg-link">Register</div></a>
        </div>


        <div class="container" id="container">
        </div>
        <br>
        <br>
        <script>
            window.onload = function()
            {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function()
                {
                    if(this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById("container").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "load.php", true);
                xhttp.send();
            }
            function my(x)
            {
                window.location.assign('file.php?download_file='+x);
            }
        </script>
        <div class="footer">
            <p>&copy Copyright: Chaitanya Maurya (2018 and Onwards). All rights reserved</p>
        </div>
	</body>
</html>
<?php
    if(isset($_SESSION["user"]))
    {
        echo "<script>
                document.getElementById('sign').style.display = 'none';
                document.getElementById('logout').style.display = 'block';
              </script>";
    }
?>