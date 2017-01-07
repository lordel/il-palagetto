<!DOCTYPE html>
<!--
    Copyright 2017 Lorenzo Delcroix

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
-->
<html lang="it">
    <head>
        <meta charset="utf-8">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--Metadata for the website------------------------------------------->
        <meta name="keywords" content="agriturismo,
            appartamenti, bed, breakfast, camere, villa">
        <meta name="author"content="Lorenzo Delcroix">
        <meta name="description" content="Il Palagetto è un'antica casa in
            campagna da poco restaurata, ed a soli 3km dal centro di Firenze.
            A disposizione degli ospiti ci sono 3 camere con vista spettacolare
            ed uno spazioso appartamento. Produciamo e vendiamo olio extra
            vergine di ottima qualità.">
        <!--Variable allows for custom title in each page-->
        <title><?php echo $title; ?></title>

        <!--CSS---------------------------------------------------------------->
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"
            media="screen,projection"/>
        <!--Link to stylesheet-->
        <link href="css/style.css" type="text/css" rel="stylesheet"
            media="screen,projection">

        <!--Favicons----------------------------------------------------------->
        <!--Apple iphone icon-->
        <link rel="apple-touch-icon"
            href="img/favicon/apple-touch-icon-300x300.png">
        <!--Microsoft tile color and icon-->
        <meta name="msapplication-TileColor" content="#ffe57f">
        <meta name="msapplication-TileImage"
            content="img/favicon/mstile-144x144.png">
        <!--Browser favicon-->
        <link rel="icon" href="img/favicon.ico" sizes="32x32">
        <!-- Android 5.0+ Chrome Color-->
        <meta name="theme-color" content="#ffe57f">
    </head>

    <body class="amber lighten-5">
        <!--Javascript imports------------------------------------------------->
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript"
            src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <!--Import the required javascript files for materialize to work-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script src="js/init.js"></script>

        <!--Script for modal popup (used for news section), usign jQuery-->
        <script>
            $(document).ready(function(){
                /*The "href" attribute of .modal-trigger
                *must specify the modal ID that wants to be triggered
                */
                $('.modal').modal();
            });
        </script>

        <!--navigation bar----------------------------------------------------->
        <nav class="amber accent-1" role="navigation">
            <div class="nav-wrapper container">
                <!--Logo-->
                <a id="logo-container" href="#" class="brand-logo">
                    <object id="front-page-logo" type="image/svg+xml"
                    data="img/logo.svg" itemscope
                    itemtype="http://schema.org/LocalBusiness" itemprop="logo">
                        Logo cannot be displayed. Your browser does not
                        support SVG
                    </object>
                </a>
                <!--for regular desktop & tablet-->
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="#" class="waves-effect waves-light">
                            Camere
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-light">
                            Appartamento
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-light">
                            Listino
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-light">
                            Mappa
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-light">
                            Contatti
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-light">
                            Prenota
                        </a>
                    </li>
                </ul>

                <!--for mobile-->
                <ul id="nav-mobile" class="side-nav amber lighten-5">
                    <li>
                        <a href="#" class="waves-effect waves-yellow">
                            Camere
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-yellow">
                            Appartamento
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-yellow">
                            Listino
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-yellow">
                            Mappa
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-yellow">
                            Contatti
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-yellow">
                            Prenota
                        </a>
                    </li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse
    	            waves-effect waves-light">
                    <i class="mdi-navigation-menu"></i>
                </a>
            </div>
        </nav>

        <!--Content begin-->
        <div id="index-banner" class="parallax-container"
         style="margin-top:1.2px" itemscope itemtype="http://schema.org/LocalBusiness">
        <br><br>
        <div class="section no-pad-bot">
            <div class="container">

                <!--Header and text on top of the parallax image--> <h3 class="header
    		center light r" itemprop="legalname">Azienda Agricola Il Palagetto</h3>
                <div class="row center">
                    <h5 class="header col s12 light"><b itemprop="name">Il Palagetto</b>
                        <span itemprop="location">è situato a 3 km dal centro di
    		  Firenze.</span></h5>
                </div> <!--end of header and text on top of the parallax image-->

                <!--Button-->
                <div class="row center">
                    <a href="#" id="download-button" class="btn-large waves-effect
    		  waves-light amber accent-2">Prenota Ora!</a>
                </div> <!--End of button--> <br><br>

            </div>
        </div>

        <!--Parallax image-->
        <div class="parallax"><img
                src="img/index_parallax/facciata.jpg" alt="Facciata"></div>
            </div>
            <!--Content end-->

            <div class="container">
        <div class="section">

            <!--Sections with icons-->
            <div class="row">
                <!--1st section-->
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center black-text"><i
                                class="mdi-image-filter-hdr"></i></h2> <h5 class="center">Il
                        Palagetto</h5>
                        <p class="light">L’azienda agricola <b>Il
                            Palagetto</b> è situata a circa 3 km dal centro di Firenze,
                            nella zona sud-ovest della città. Caratterizzata da amenissime
                            colline e ridenti faggi, sparsi di grandiosi palazzi e ville
                            signorili, in guisa che qui ben si può dire con l’Ariosto:
                            <i>“Veder pien di tante ville i colli, par che terren ve le
                                germogli.”</i> (E. Repetti, Dizionario corografico della
                            Toscana, Milano 1855).
                        </p>
                    </div>
                </div>

                <!--2nd section-->
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center black-text"><i class="mdi-maps-pin-drop"></i></h2>
                        <h5 class="center">Location</h5>

                        <p class="light">I locali sono ampi e luminosi, con vista sulla
                            campagna circostante. La casa è, infatti,
                            circondata dai campi, pur essendo situata in prossimità della
                            città. <strong>Il centro storico è facilmente raggiungibile in
                                circa 10 minuti con l’autobus</strong>. <strong>La fermata
                                dell’autobus dista 200m da casa</strong>. Le auto possono essere
                            comodamente parcheggiate davanti all’ingresso.
                        </p>
                    </div>
                </div>

                <!--Third section-->
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center black-text"><i
                                class="mdi-maps-local-florist"></i></h2> <h5 class="center">I
                        Giardini</h5>

                        <p class="light">Al momento, per motivi logistici, <strong>è
                            possibile accedere al giardino o al
                            podere solo con la supervisione della nostra
                            responsabile</strong>. <br>Perciò, <strong>gli animali degli
                            ospiti non sono ammessi</strong>. Speriamo, tuttavia, di poter
                            accogliere i vostri amici a quattro zampe in futuro!
                        </p>
                    </div>
                </div>
            </div>

        </div>
        </div>
        <!--End sections with icons-->

        <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">Azienda a <b>conduzione
                        familiare</b></h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="img/index_parallax/facciata2.JPG"
                                   alt="Facciata"></div>
                               </div>

                               <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-action-announcement"></i></h3> <h4>Notizie</h4>
                    <!--call google docs iframe to display the news-->
                    <iframe
                            class="z-depth-2" seamless scrolling="no" frameborder="0"
                            style="width:100%; height:400px"
                            src="https://docs.google.com/document/d/1PE8ayfS_B0QCzycJIhjaFhgMXw-p7Cz9q9hon0pzTFE/pub?embedded=true">
                    </iframe> <!-- Modal Trigger --> <p><br><a target="_blank" class="
    		  waves-effect waves-light amber accent-2 btn"
                                                               href="#modal1">Più notizie</a></p>

                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                        <div class="modal-content"><h4>Notizie</h4> <!--call google
    					docs iframe to display the news, this time with scrollable
    					iframe-->
                            <iframe class="z-depth-2" frameborder="0"
                                    style="width:100%; height:200px;"
                                    src="https://docs.google.com/document/d/1PE8ayfS_B0QCzycJIhjaFhgMXw-p7Cz9q9hon0pzTFE/pub?embedded=true">
                            </iframe>
                        </div>
                    </div>
                    <!--End modal structure-->
                </div>
            </div>

        </div>
        </div>


        <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">Accesso <strong>al giardino e al
                        podere</strong>.</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="img/index_parallax/giardino.JPG"
                                   alt="Giardino"></div>
                               </div>

                               <!--Sections with icons-->
                               <div class="row">
        <h4 class="center">Immagini:</h4>
        <div class="col s6 m3">
            <img class="materialboxed responsive-img z-depth-1 hoverable"
                 data-caption="Facciata" src="img/index_imgs/salotto.JPG">
        </div>
        <div class="col s6 m3">
            <img class="materialboxed responsive-img z-depth-1 hoverable"
                 data-caption="Facciata" src="img/index_imgs/antica.JPG">
        </div>
        <div class="col s6 m3">
            <img class="materialboxed responsive-img z-depth-1 hoverable"
                 data-caption="Facciata" src="img/index_imgs/appartamento.JPG">
        </div>
        <div class="col s6 m3">
            <img class="materialboxed responsive-img z-depth-1 hoverable"
                 data-caption="Facciata" src="img/index_imgs/bellosguardo.JPG">
        </div>
        <div class="col s6 m3">
            <img class="materialboxed responsive-img z-depth-1 hoverable"
                 data-caption="Facciata" src="img/index_imgs/bellosguardo2.JPG">
        </div>
        <div class="col s6 m3">
            <img class="materialboxed responsive-img z-depth-1 hoverable"
                 data-caption="Facciata" src="img/index_imgs/colazione.JPG">
        </div>
        <div class="col s6 m3">
            <img class="materialboxed responsive-img z-depth-1 hoverable"
                 data-caption="Facciata" src="img/index_imgs/marignolle.JPG">
        </div>
        <div class="col s6 m3">
            <img class="materialboxed responsive-img z-depth-1 hoverable"
                 data-caption="Facciata" src="img/index_imgs/poccetti.JPG">
        </div>
        </div>
        <!--End sections with icons-->

        <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Siti Gemelli:</h5>
                    <p class="grey-text
    		  text-lighten-4">
                        <a href="http://libreriadelledonnefirenze.blogspot.it"
                           style="text-decoration:none; color:#FFF">Libreria Delle Donne
                            Firenze</a><br> <a href="http://www.theotherway.it"
                                               style="text-decoration:none; color:#FFF">The Other Way</a><br> <a
                            href="http://www.velavventura.com" style="text-decoration:none;
    		   color:#FFF">Velavventura</a>
                    </p>
                </div>
                <div class="col l3 s12">
                    <p class="white-text" itemscope
                       itemtype="http://schema.org/LocalBusiness"> Partita IVA: <span
                            itemprop="taxID">06372050481</span></p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container"> &copy; 2015 <a class="brown-text text-lighten-3"
                                                   href="#!">Lorenzo Delcroix</a> &nbsp; &nbsp;Logo a cura di &copy; 2013 <a
                    class="brown-text text-lighten-3" href="#!">Tanja Gastegger</a></div>
        </div>
        </footer>

        <!--cookies banner: -->
        <script id="cookiebanner"
            src="http://cookiebanner.eu/js/cookiebanner.min.js"
            close-text="Accetto" linkmsg="Più informazioni" data-message="Usiamo
    		  cookies per migliorare la tua esperiaza nelle nostre pagine.">
              </script>
    </body>
</html>
