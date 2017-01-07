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
                <a id="logo-container" href="index.php" class="brand-logo">
                    <object id="front-page-logo" type="image/svg+xml"
                    data="img/logo.svg" itemscope
                    itemtype="http://schema.org/LocalBusiness" itemprop="logo">
                        Logo cannot be displayed. Your browser does not
                        support SVG
                    </object>
                </a>
                
                <!--for regular desktop & tablet------------------------------->
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

                <!--for mobile------------------------------------------------->
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
