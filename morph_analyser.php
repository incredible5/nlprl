<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="icon" href="nlp.jpg" type="image/x-icon">
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
            <h3 style="text-decoration: underline; color: tomato">Morphological Analyser:-</h3>
            <div class="side">
                <p>Morphology is the linguistic study of words, their internal structure and partially the meaning of the contained morphemes. Morphological analysis involves identification of a word's stem/root from a word-form and providing grammatical information of a word along with its suffixes. A morphological analyzer is a program that analyzes the morphology of an input word. It uses rules to identify the root and grammatical features of given words. It splits a given word into it's root, lexical category, gender, number, person, case, case marker or tense aspect modality(TAM), suffix and other required grammatical features.</p>
            </div>
            <p>Thus, to provide grammatical information of a word or word form in terms of root and affixes, there are three principal approaches for morphological analyser are being used. First, is "Item and Arranage Approach", also known as "Morpheme Based Morphological Analyser", second, "Item-and-Process Approach", basically known as "Lexeme-Based Morphological Analyser", and finally third, currently very famous approach among NLP/MT group is "Word-and-Paradigm Approach", primerily known as "Word-Based Morphological Analyser". <br> <b>Note : Features explanation of a word</b><br> 1. root : Root of the word (e.g. ladZake word has root ladZakA) <br> 2. cat : Category of the word (e.g. Noun=n, Pronoun=pn, Adjective=adj, verb=v, adverb=adv post-position=psp and avvya=avy) <br> 3. gen : Gender of the word (e.g. Masculine=m, Feminine=f, Neuter=n, mf , mn , fn, and any) <br> 4. num : Number of the word (e.g. Singular=sg, Plural=pl, dual, and any ) <br> 5. per : Person of the word (e.g. 1st Person=1, 2nd Person=2, 3rd Person=3, and any)  <br> 6. case : Case of the word (e.g. direct=d, oblique=o and any) <br> 7. tam : Case marker for noun or Tense Aspect Mood(TAM) for verb of the word <br> 8. suff : Suffix of the word <br> agr_gen: Agreeing gender of the following noun <br> agr_num: Agreeing number of the following noun <br> agr_cas: Agreeing case of the following noun <br> emph: Emphatic "hI" feature of the word <br> emph1: Emphatic "BI" feature of the word <br> hon: Honorofic feature of the word <br> derive_root: Derived root <br> derive_lcat: Derived lexical category <br> derive_gen: Derived gender <br> derive_suff: Derived suffix <br> rednt: Redunt suffix of a noun <br> Asp= Aspectual property of a verb <br> Presently, CSE, IIT (BHU) has developed Morphological Analyzer for less resource languages like Magahi, Maithili and Bhojpuri.</p>
        </div>
        <h2 style="text-align: center; text-decoration: underline">Tools:</h2>
        <h3 style="text-align: center;"><a href="http://nlprl.iitbhu.ac.in/bmmmorph/" target="_blank">Bhojpuri, Maithili and Magahi</a></h3>
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
