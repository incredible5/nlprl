<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="icon" href="nlp.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="team.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="home.js"></script>
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
        <marquee style="background-color: rgba(30,144,155,0.3);" id="mar" onmouseover="javascript:stop()" onmouseout="javascript:start()"><a href="#" style="text-decoration: none; color: red; font-size: 20px">Latest News and Announcements</a></marquee>
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
        <div class="card">
            <img src="prof.jpg" />
            <h4>Dr. Anil Kumar Singh</h4>
            <h4>Associate Professor,  PI</h4>
            <h4><a href="mailto:aksingh.cse@iitbhu.ac.in" target="_blank">aksingh.cse@iitbhu.ac.in</a></h4>
            <h4>+91-542-230-7056</h4>
            <h4><strong>Qualification:</strong> M.Tech, PhD</h4>
            <h4><strong>Area of Interest:</strong> Natural Language Processing, Computational Linguistics, Information Retrieval</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Dr. Swasti Mishra</h4>
            <h4>Co - PI</h4>
            <h4><a href="mailto:swasti.linguist@iitbhu.ac.in" target="_blank">swasti.linguist@iitbhu.ac.in</a></h4>
            <h4>+91-8173071130</h4>
            <h4><strong>Qualification:</strong> M.A.(Linguistics), PhD</h4>
            <h4><strong>Remarks:</strong> Overseeing overall Project Development</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Dr. Sanket Kuamr Pathak</h4>
            <h4>NLP Consultant</h4>
            <h4><a href="mailto:sanketlck@gmail.com " target="_blank">sanketlck@gmail.com </a></h4>
            <h4>+91-9014513830</h4>
            <h4><strong>Qualification: </strong> M.A.(Linguistics), PhD</h4>
            <h4><strong>Remarks:</strong> Overseeing overall Machine Translation Development and Linguist Data Analysis</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Manish Mishra</h4>
            <h4>Sr. Language Engineer</h4>
            <h4><a href="mailto:manishmnlp@gmail.com" target="_blank">manishmnlp@gmail.com</a></h4>
            <h4>+91-9999558938</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Coordinating overall MT modules’ Development</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Nagaraju Vuppala</h4>
            <h4>Sr. Software Engineer</h4>
            <h4><a href="mailto:vpp.nagaraju1234@gmail.com" target="_blank">vpp.nagaraju1234@gmail.com</a></h4>
            <h4>+91-8106939370</h4>
            <h4><strong>Qualification: </strong> B.Tech (CSE)</h4>
            <h4><strong>Remarks:</strong> Overseeing overall Software Development and Data processing</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Rashid Ahmad</h4>
            <h4>Sr. Software Engineer</h4>
            <h4><a href="mailto:rashid101b@gmail.com" target="_blank">rashid101b@gmail.com</a></h4>
            <h4>+91-9966443729</h4>
            <h4><strong>Qualification: </strong> MCA, M.S (CSE), Pursuing Ph.D</h4>
            <h4><strong>Remarks:</strong> Overseeing overall Software Development and Deployment</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Manish Kumar Singh</h4>
            <h4>Project Associate</h4>
            <h4><a href="mailto:maneeshhsingh100@gmail.com" target="_blank">maneeshhsingh100@gmail.com</a></h4>
            <h4>+91-9696048981</h4>
            <h4><strong>Qualification: </strong> M.A.(Linguistics), Pursuing Ph.D</h4>
            <h4><strong>Remarks:</strong> Project Co-ordination and Linguistic Data Creation</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mrs. Gouri Sahoo</h4>
            <h4>Software Consultant</h4>
            <h4><a href="mailto:gourisahoo.cs@gmail.com" target="_blank">gourisahoo.cs@gmail.com</a></h4>
            <h4>+91-7989756683</h4>
            <h4><strong>Qualification: </strong> M.Sc (Computer Science)</h4>
            <h4><strong>Remarks:</strong> Software Installation</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Rajesh Kumar Mundotiya</h4>
            <h4>Research Scholar</h4>
            <h4><a href="mailto:rajeshkm.mundotiya@gmail.com" target="_blank">rajeshkm.mundotiya@gmail.com</a></h4>
            <h4>+91-8009567114</h4>
            <h4><strong>Qualification: </strong> M.Tech (CSE), Pursuing Ph.D</h4>
            <h4><strong>Remarks:</strong> NLP Software Installation,Integration and POS Development</h4>
        </div>
        <h1>Bhojpuri Language Group</h1>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Dr. Ashok Kumar</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:ashoklinguistics@gmail.com" target="_blank">ashoklinguistics@gmail.com</a></h4>
            <h4>+91-9415874763</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics), Ph.D</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation , Grammar Analysis and Overall Data Management of Bhojpuri</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Miss Archna Kumari</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:archnaisarchi@gmail.com" target="_blank">archnaisarchi@gmail.com</a></h4>
            <h4>+91-8090828703</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation , Grammar Analysis and Overall Data Management of Bhojpuri</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mrs. Aparna Shukla</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:aparna.shukla.1316@gmail.com" target="_blank">aparna.shukla.1316@gmail.com</a></h4>
            <h4>+91-8960259018</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation and Grammar Analysis</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mrs. Aparna Shukla</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:aparna.shukla.1316@gmail.com" target="_blank">aparna.shukla.1316@gmail.com</a></h4>
            <h4>+91-8960259018</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation and Grammar Analysis</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mrs. Aparna Shukla</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:aparna.shukla.1316@gmail.com" target="_blank">aparna.shukla.1316@gmail.com</a></h4>
            <h4>+91-8960259018</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation and Grammar Analysis</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Ajeet Singh</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:ajeet2910@gmail.com" target="_blank">ajeet2910@gmail.com</a></h4>
            <h4>+91-8604420107</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation and Grammar Analysis</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Ravi Ranjan</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:rranjan219@gmail.com" target="_blank">rranjan219@gmail.com</a></h4>
            <h4>+91-8318929662</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation and Grammar Analysis</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Anubhav Tripathi</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:anubhavbhu@gmail.com" target="_blank">anubhavbhu@gmail.com</a></h4>
            <h4>+91-7518230784</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics), Pursuing Ph.D</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <h1>Magahi Language Group</h1>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Shishir kumar</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:shishir2594@gmail.com" target="_blank">shishir2594@gmail.com</a></h4>
            <h4>+91-9793787534</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation, Grammar Analysis and Overall Data Management of Magahi</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Miss Rashmi Rani</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:rashmi.ranitiwari@gmail.com" target="_blank">rashmi.ranitiwari@gmail.com</a></h4>
            <h4>+91-7631654281</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Miss Anjali Rai</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:anjalirai2001@gmail.com" target="_blank">anjalirai2001@gmail.com</a></h4>
            <h4>+91-7800983995</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Ritesh Kumar</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:riteshkumarsingh990@gmail.com" target="_blank">riteshkumarsingh990@gmail.com</a></h4>
            <h4>+91-8544239961</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Manu Mashani</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:manu.mashani@gmail.com" target="_blank">manu.mashani@gmail.com</a></h4>
            <h4>+91-9695029644</h4>
            <h4><strong>Qualification: </strong> M.A. (Linguistics) Pursuing</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <h1>Maithili Language Group</h1>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Vineet Kumar Lal Das</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:vin.pin.lal.das@gmail.com" target="_blank">vin.pin.lal.das@gmail.com</a></h4>
            <h4>+91-8877443570</h4>
            <h4><strong>Qualification: </strong> M.A.(Maithili)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation, Grammar Analysis and Overall Data Management of Maithili</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Dr. Pankaj Kumar</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:pankajpriyanshu2020@gmail.com" target="_blank">pankajpriyanshu2020@gmail.com</a></h4>
            <h4>+91-8825149938</h4>
            <h4><strong>Qualification: </strong> M.A.(Maithili), Ph.D</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Shrawan Kumar</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:shrawan.bgp@gmail.com" target="_blank">shrawan.bgp@gmail.com</a></h4>
            <h4>+91-9852310860</h4>
            <h4><strong>Qualification: </strong> M.A.(Maithili)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Rahul Kumar Mishra</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:rahulmishra9938@gmail.com" target="_blank">rahulmishra9938@gmail.com</a></h4>
            <h4>+91-9470401159</h4>
            <h4><strong>Qualification: </strong> M.A.(Maithili)</h4>
            <h4><strong>Remarks:</strong> Linguistic Data Creation</h4>
        </div>
        <div class="card">
            <img src="nav.png" alt="Image not available" />
            <h4>Mr. Sunny Prakash</h4>
            <h4>Project Assistant</h4>
            <h4><a href="mailto:prakashsunny666@gmail.com" target="_blank">prakashsunny666@gmail.com</a></h4>
            <h4>+91-7388122666</h4>
            <h4><strong>Qualification: </strong> B.A.</h4>
            <h4><strong>Remarks:</strong> Project related Assistance</h4>
        </div>
        <br>
        <br>
        <div class="footer">
            <p>&copy Copyright: Chaitanya Maurya (2018 and Onwards). All rights reserved</p>
        </div>
        <script>
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
    </body>
</html>