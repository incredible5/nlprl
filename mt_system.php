<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="nlp.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="projects.css">
        <link rel="stylesheet" type="text/css" href="pos_tagger.css">
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
                    <a href="team.php">Team</a>
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
            <h3 style="text-decoration: underline; color: tomato">Machine Translation Systems:-</h3>
            <div class="side">
                <p><b>Translation Process</b>
                    Machine translation is a subfield of Artificial Intelligence. It is an application of computers which does the task of translating texts from one natural (human) language to another, without human involvement.
                </p>
            </div>
            <p>To process any translation (whether human or automated), objective is that the meaning of a source language must be fully restored in the target language after translation. <br> It can simply be described in terms of human translation: <br> I- Decoding the meaning of the source text; and <br> II- Re-encoding this meaning in the target language <br> Behind this process a complex cognitive process lies. To decode the meaning of the source text translator must interpret and analyze all the linguistic features of the source text and same complex knowledge he repeats to re-encode the meaning in the target language. <br> Natural languages are highly complex for MT because words and sentence may have multiple meanings and readings respectively. The most remarkable thing is that certain grammatical features and cultural aspects might not exist in another language.</p>
            <p><b>Types of Machine Translation Approach</b> <br> MT systems can be classified according to their core methodology in to two types: <br> 1- Corpus-based approach/Data driven approach <br> 2- Rule-based machine translation approach/Knowledge-Based Machine approach/Classical Approach <br> Under the corpus-based approach the knowledge is automatically extracted by analysing translation examples from a parallel corpus built by human experts. Statistical Machine Translation and Example-based Machine Translation Approach are sub types of this approach. <br> In the rule-based approach, human experts specify a set of rules to describe the translation process, because an enormous amount of input from human experts is required. It is remarkable that, combination of the features of these two MT approaches resulting in to the Hybrid Machine Translation Approach.   <br> Rules based machine approach in general describes-machine translation systems based on linguistic information about source and target languages basically retrieved from bilingual dictionaries and grammars covering the main semantic, morphological, and syntactic regularities of each language respectively. <br> Presently, CSE, IIT (BHU) has developed three Machine Translation Systems viz. Magahi-Hindi, Maithili-Hindi and Bhojpuri-Hindi. These MT systems are based on transfer based approach.</p>
        </div>
        <h2 style="text-align: center; text-decoration: underline">Tools:</h2>
        <h3 style="text-align: center;"><a href="http://nlprl.iitbhu.ac.in/sampark-bmm/" target="_blank">Bhojpuri, Maithili and Magahi → Hindi</a></h3>
        <h3 style="text-align: center;"><a href="http://nlprl.iitbhu.ac.in/sampark-hpu/" target="_blank">Hindi ↔ Punjabi, Hindi ↔ Urdu</a></h3>
        <h3 style="text-align: center;"><a href="http://nlprl.iitbhu.ac.in/anusaaraka/" target="_blank">English → Hindi</a></h3>
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
