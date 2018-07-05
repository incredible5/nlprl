<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="nlp.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="projects.css">
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
        <marquee style="background-color: rgba(30,144,155,0.3);" id="mar" onmouseover="stop()" onmouseout="start()"><a href="#" style="text-decoration: none; color: red; font-size: 20px">Latest News and Announcements</a></marquee>
        <div class="vertnav">
            <ul>
                <li>
                    <a href="#/">FAQ</a>
                </li>
                <li>
                    <a href="#/">Contact us</a>
                </li>
                <li>
                    <a href="admlog.php">Admin</a>
                </li>
            </ul>
        </div>
        <br>
        <br>
        <div class="homep">
            <h3 style="text-decoration: underline; color: tomato">Corpus:-</h3>
            <div class="side">
                <p>Corpus Linguistics is a relatively new approach, emerged in 1960s and that was a right time to apply corpus theory in to language sciences. Presently, it is seen as the study of linguistic phenomena through large collections of machine readable texts i.e. corpora. Computer corpora are widely used to study grammar, lexicons, discourses, language variations, etc. Corpus study addresses a great variety of linguistic issues ranging from monolingual research of one language to contrastive studies involving many different languages of the world.</p>
            </div>
            <p>Collection of linguistic data from different genres come under the study of corpora. Languages' corpora collected from various regions and genres may be in compiled form or written texts or transcribed texts or in recorded speech. The primary purpose of a corpus collection is to verify existing and novel hypothesis about languages. For instance, to reach out at the decision that how particular sound, word and constructions vary within a language and among the languages. Apart from such practical usage, it deals with the principles and practice of corpora usage in terms of language study.</p>
            <p><b>Classification of corpus</b></p>
            <ol>
                <li>Annotated corpus: It is a kind of linguistic information repository because through concrete grammar annotation explicit information about text can be retrieved.</li>
                <li>Comparable corpus: It is aimed to compare corpora from languages.</li>
                <li>Monitor corpus: It is continuous collection of texts, used for lexicography purpose and primarily it is used to examine language changes and constant growth rate in new vocabularies.</li>
                <li>Monolingual corpus: It is small collections of individual text from single language.</li>
                <li>Parallel corpus: It is a collection of multilingual corpus where texts of one language and their corresponding translations of other languages are given as per grammar unit like phrase by phrase and sentence by sentence.</li>
                <li>Reference corpus: It is a collection of relevant information’s or facts in the form of spoken, written, formal and informal languages especially to represent various social and situational strata.</li>
                <li>Spoken corpus: It is a type of corpus that contains texts of spoken languages in the recorded or written forms.</li>
                <li>Raw corpus: It is a collection of unannotated/raw text.</li>
                <li>Speech corpus: It is a collection of audio recordings of spoken languages. Usually, to avoid pronunciation related confusions, all speech corpora may have supportive files containing transcriptions of the spoken words during recording.<br>It can be of two types
                    <ul>
                        <li>Read Speech (i.e. broadcast news, number sequences or words, readings of books etc.)</li>
                        <li>Spontaneous Speech (i.e. conversations or dialogs between two or more people, incidents or story narration by someone, guidance like explaining a route on a map, appointment/ Meeting related fixed conversation style)</li>
                    </ul>
                </li>
            </ol>
            <p>Presently, CSE, IIT (BHU) has developed monolingual corpus for less resource languages like Magahi, Maithili and Bhojpuri.</p>
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