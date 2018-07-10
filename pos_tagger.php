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
            <h3 style="text-decoration: underline; color: tomato">PoS Tagger:-</h3>
            <div class="side">
                <p>As far as traditional grammar is concerned, words can be classified into their respective eight categories are called parts of speech (PoS); the verb, the noun, the pronoun, the adjective, the adverb, the adposition(preposition/post-position), the conjunction, and the interjection. It is well defined in traditional grammar that how the word is used in terms of lexical or syntactic category. Applied form of PoS categories in computational Linguistics is done through PoS-tagging especially by using algorithms which associate discrete terms, as well as hidden parts of speech, in accordance with a set of descriptive tags. In fact, the same word can be a noun in one sentence and a verb or adjective in another context. Tag is a context based PoS category marker assigned to a word or word form in the tagged training data in various syntactic context. Hence, assigning compatible PoS tag to a single word which is based on the fixed grammar specific definition as per its respective lexical function in traditional grammar, and syntactic context as per relationship with adjacent and related words in a phrase, sentence, or paragraph, is known as Part of Speech Tagging.</p>
            </div>
            <p><b>POS Tag Set for Indian Languages</b></p>
            <div class="tabl">
                <table>
                    <tr>
                        <td>
                            SI No.
                        </td>
                        <td>
                            Category
                        </td>
                        <td>
                            Tag Name
                        </td>
                        <td>
                            Example
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1.1
                        </td>
                        <td>
                            Noun
                        </td>
                        <td>
                            NN
                        </td>
                        <td>
                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1.2
                        </td>
                        <td>
                            NLoc
                        </td>
                        <td>
                            NST
                        </td>
                        <td>
                        
                        </td>
                    </tr>
                <tr>
                    <td>
                        2
                    </td>
                    <td>
                        Proper Noun
                    </td>
                    <td>
                        NNP
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        3.1
                    </td>
                    <td>
                        Pronoun
                    </td>
                    <td>
                        PRP
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        3.2
                    </td>
                    <td>
                        Demonstrative
                    </td>
                    <td>
                        DEM
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        4
                    </td>
                    <td>
                        Verb-finite
                    </td>
                    <td>
                        VM
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        5
                    </td>
                    <td>
                        Verb Aux
                    </td>
                    <td>
                        VAUX
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        6
                    </td>
                    <td>
                        Adjective
                    </td>
                    <td>
                        JJ
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        7
                    </td>
                    <td>
                        Adverb
                    </td>
                    <td>
                        RB
                    </td>
                    <td>
                        *Only manner adverb
                    </td>
                </tr>
                <tr>
                    <td>
                        8
                    </td>
                    <td>
                        Post position
                    </td>
                    <td>
                        PSP
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        9
                    </td>
                    <td>
                        Particles
                    </td>
                    <td>
                        RP
                    </td>
                    <td>
                        bhl, to, hl, jl, hA.N, na
                    </td>
                </tr>
                <tr>
                    <td>
                        10
                    </td>
                    <td>
                        Conjuncts
                    </td>
                    <td>
                        CC
                    </td>
                    <td>
                        bole (Bangla)
                    </td>
                </tr>
                <tr>
                    <td>
                        11
                    </td>
                    <td>
                        Question Words
                    </td>
                    <td>
                        WQ
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        12.1
                    </td>
                    <td>
                        Quantifiers
                    </td>
                    <td>
                        QF
                    </td>
                    <td>
                        bahut, tho.DA, kam (Hindi)
                    </td>
                </tr>
                <tr>
                    <td>
                        12.2
                    </td>
                    <td>
                        Cardinal
                    </td>
                    <td>
                        QC
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        12.3
                    </td>
                    <td>
                        Ordinal
                    </td>
                    <td>
                        QO
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        12.4
                    </td>
                    <td>
                        Classifier
                    </td>
                    <td>
                        CL
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        13
                    </td>
                    <td>
                        Intensifier
                    </td>
                    <td>
                        INTF
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        14
                    </td>
                    <td>
                        Interjection
                    </td>
                    <td>
                        INJ
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        15
                    </td>
                    <td>
                        Negation
                    </td>
                    <td>
                        NEG
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        16
                    </td>
                    <td>
                        Quotative
                    </td>
                    <td>
                        UT
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        17
                    </td>
                    <td>
                        Sym
                    </td>
                    <td>
                        SYM
                    </td>
                    <td>
                        ani (Telugu), endru (Tamil), bole/mAne (Bangla), mhaNaje (Marathi), mAne(Hindi)
                    </td>
                </tr>
                <tr>
                    <td>
                        18
                    </td>
                    <td>
                        Compounds
                    </td>
                    <td>
                        *C
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        19
                    </td>
                    <td>
                        Reduplicative
                    </td>
                    <td>
                        RDP
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        20
                    </td>
                    <td>
                        Echo
                    </td>
                    <td>
                        ECH
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        21
                    </td>
                    <td>
                        Unknown
                    </td>
                    <td>
                        UNK
                    </td>
                    <td>
                        
                    </td>
                </tr>
            </table>
            </div>
            <h2 style="text-align: center; text-decoration: underline">Tools:</h2>
        <h3 style="text-align: center;"><a href="http://nlprl.iitbhu.ac.in/bmmpostagger/" target="_blank">Bhojpuri, Maithili and Magahi</a></h3>
            <p>Presently, CSE, IIT (BHU) has developed PoS Tagger for less resource languages like Magahi, Maithili and Bhojpuri.</p>
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
