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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45184022-1', 'auto');
  ga('send', 'pageview');

</script>
<?php
    switch ($lang) {
        case 'it':
            $keywords = "agriturismo, appartamenti, bed, breakfast, camere,
                villa, fattoria";
            $description = "Il Palagetto è un'antica casa in campagna da poco
                restaurata, ed  a soli 3km dal centro di Firenze. A disposizione
                 degli ospiti ci sono 3 camere con vista spettacolare ed uno
                spazioso appartamento. Produciamo e vendiamo olio extra vergine
                di ottima qualità.";
            $rooms = "Camere";
            $apartment = "Appartamento";
            $prices = "Listino";
            $location = "Dove Siamo";
            $contacts = "Contatti";
            $book = "Prenota";
            $folder = "/it/";
            $index_folder = "/";
            break;
        case 'de':
            $keywords = "agritourismus, wohnung, appartement, bed, breakfast,
                zimmer, bauernhaus, bauernhof, garten";
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
            $folder = "/de/";
            $index_folder = "/de/";
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
            $folder = "/en/";
            $index_folder = "/en/";
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
        <meta name="keywords" content=<?php echo $keywords; ?>>
        <meta name="author"content="Lorenzo Delcroix">
        <meta name="description" content=<?php echo $description; ?>>
        <!--Variable allows for custom title in each page-->
        <title><?php echo $title; ?></title>

        <!--CSS---------------------------------------------------------------->
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"
            media="screen,projection"/>
        <!--Link to stylesheets-->
        <link href="/css/style.css" type="text/css" rel="stylesheet"
            media="screen,projection">
        <link rel='stylesheet' href='../css/fullcalendar.css' type="text/css">

        <!--Favicons----------------------------------------------------------->
        <!--Apple iphone icon-->
        <link rel="apple-touch-icon"
            href="/img/favicon/apple-touch-icon-300x300.png">
        <!--Microsoft tile color and icon-->
        <meta name="msapplication-TileColor" content="#ffe57f">
        <meta name="msapplication-TileImage"
            content="/img/favicon/mstile-144x144.png">
        <!--Browser favicon-->
        <link rel="icon" href="/img/favicon.ico" sizes="32x32">
        <!-- Android 5.0+ Chrome Color-->
        <meta name="theme-color" content="#ffe57f">
    </head>

    <body class="amber lighten-5">
        <!--Javascript imports------------------------------------------------->
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript"
            src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <!--Import the required javascript files for materialize to work-->
        <script type="text/javascript" src="/js/materialize.min.js"></script>
        <script src="/js/init.js"></script>

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
                <a href="<?php echo $index_folder; ?>index.php"
                    id="logo-container" class="brand-logo">
                    <object id="front-page-logo" type="image/svg+xml"
                    data="/img/logo.svg" itemscope
                    itemtype="http://schema.org/LocalBusiness" itemprop="logo">
                        Logo cannot be displayed. Your browser does not
                        support SVG!
                    </object>
                </a>

                <!--for regular desktop & tablet------------------------------->
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="<?php echo $folder; ?>rooms.php"
                            class="waves-effect waves-light">
                            <?php echo $rooms; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $folder; ?>apartment.php"
                            class="waves-effect waves-light">
                            <?php echo $apartment; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $folder; ?>prices.php"
                            class="waves-effect waves-light">
                            <?php echo  $prices; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $folder; ?>location.php"
                            class="waves-effect waves-light">
                            <?php echo $location; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $folder; ?>contacts.php"
                            class="waves-effect waves-light">
                            <?php echo $contacts; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $folder; ?>book.php"
                            class="waves-effect waves-light">
                            <?php echo $book; ?>
                        </a>
                    </li>
                </ul>

                <!--for mobile------------------------------------------------->
                <ul id="nav-mobile" class="side-nav amber lighten-5">
                    <li>
                        <a href="<?php echo $folder; ?>rooms.php"
                            class="waves-effect waves-yellow">
                            <?php echo $rooms; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $folder; ?>apartment.php"
                            class="waves-effect waves-yellow">
                            <?php echo $apartment; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $folder; ?>prices.php"
                            class="waves-effect waves-yellow">
                            <?php echo $prices; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $folder; ?>location.php"
                            class="waves-effect waves-yellow">
                            <?php echo $location; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $folder; ?>contacts.php"
                            class="waves-effect waves-yellow">
                            <?php echo $contacts; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $folder; ?>book.php"
                            class="waves-effect waves-yellow">
                            <?php echo $book; ?>
                        </a>
                    </li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse
    	            waves-effect waves-light">
                    <i class="black-text material-icons">menu</i>
                </a>
            </div>
        </nav>
