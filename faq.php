<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="nlp.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="faq.css">
        <script type="text/javascript" src="home.js"></script>
        <script type="text/javascript" src="faq.js"></script>
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
                <h3><a href="https://iitbhu.ac.in/" target="_blank" style="text-decoration: none">IIT BHU</a></h3>
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
        <marquee style="background-color: rgba(30,144,155,0.3);" id="mar" onmouseover="stop()" onmouseout="start()"><a href="#" style="text-decoration: none; color: red; font-size: 20px">Latest News and Announcements</a></marquee>
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
        <br>
        <br>
        <div class="homep">
            <h1 style="color: tomato; text-align: center">Frequently Asked Questions</h1>
            <div class="side">
                <button class="accordion">Section 1</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Section 2</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Section 3</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Section 2</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Section 2</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Section 2</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;
            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight){
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    } 
                });
            }
            var status = 0;
            var navbar = document.getElementById("navbar");
            var width = screen.width;
            if(screen.width <= width)
            {
                document.getElementById("hamburger").addEventListener("click",function() {
                    if(status == 0)
                    {
                        navbar.classList.add("dis");
                        status += 1;
                    }
                    else
                    {
                        navbar.classList.remove("dis");
                        status -= 1;
                    } 
                });
            }
        </script>
        <br>
        <br>
        <div class="footer">
            <p>&copy Copyright: Chaitanya Maurya (2018 and Onwards). All rights reserved</p>
        </div>
    </body>
</html>