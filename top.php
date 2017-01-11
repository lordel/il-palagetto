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
<?php
    #TODO: finish changing the names based on language
    switch ($lang) {
        case 'it':
            $keywords = "agriturismo, appartamenti, bed, breakfast, camere,
                villa, fattoria";
            $description = "";
            $rooms = "Camere";
            $apartment = "Appartamento";
            $prices = "Listino";
            $location = "Dove Siamo";
            $contacts = "Contatti";
            $book = "Prenota";
            break;
        case 'de':
            #TODO: add german keywords
            $keywords = "";
            $description = "Il Palagetto ist ein vor kurzem restauriertes altes
                Landhaus. Den Gästen stehen 3 Zimmer mit herrlicher Aussicht und
                 ein geräumiges Appartement zur Verfügung. Wir produzieren Öl
                von ausgezeichneter Qualtität.";
            $rooms = "Zimmer";
            $apartment = "Appartement";
            $prices = "Preise";
            $location = "Anreise";
            $contacts = "Kontakt";
            $book = "Buchen";
            break;
        default:
            $keywords = "agritourism, apartment, bed, breakfast, rooms,
            farmhouse, farm, garden";
            $description = "Il Palagetto is an ancient countryside farmhouse
                that was recently restored. It is only 3Km from Florence’s city
                center. Our guests have the choice of staying in any of 3
                bedrooms with amazing view or in our spacious apartment. We
                produce and sell extra-virgin olive oil of great quality.";
            $rooms = "Rooms";
            $apartment = "Apartment";
            $prices = "Prices";
            $location = "Location";
            $contacts = "Contact Us";
            $book = "Book Now";
            break;
    }
 ?>
<html lang=<?php echo $lang; ?>>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0,
            maximum-scale=1.0"/>
        <!--Metadata for the website------------------------------------------->
        <meta name="keywords" content=<?php echo $keywords ?>>
        <meta name="author"content="Lorenzo Delcroix">
        <meta name="description" content=<?php echo $description ?>>
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
                        support SVG!
                    </object>
                </a>

                <!--for regular desktop & tablet------------------------------->
                <!--TODO: add links to the right pages-->
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="#" class="waves-effect waves-light">
                            <?php echo $rooms ?>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-light">
                            <?php echo $apartment ?>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-light">
                            <?php echo  $prices ?>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-light">
                            <?php echo $location ?>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-light">
                            <?php echo $contacts ?>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-light">
                            <?php echo $book ?>
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
                    <i class="black-text material-icons">menu</i>
                </a>
            </div>
        </nav>
