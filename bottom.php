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
    #Set the right variables to disabled state for language switching buttons
    #and some language specific footer values
    switch ($lang) {
        case "it":
            $it_enable = "disabled";
            $de_enable = "";
            $en_enable = "";
            $linked_sites = "Siti Gemelli:";
            $iva = "Partita IVA:";
            break;
        case "de":
            $it_enable = "";
            $de_enable = "disabled";
            $en_enable = "";
            $linked_sites = "Befreundete Internetseiten:";
            $iva = "Mehrwertsteuernummer:";
            break;
        default:
            $it_enable = "";
            $de_enable = "";
            $en_enable = "disabled";
            $linked_sites = "Sister Websites:";
            $iva = "IVA Tax ID:";
            break;
    }
 ?>
 <!--Language selection buttons------------------------------------------------>
<div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large amber">
        <i class="material-icons">translate</i>
    </a>
    <ul>
        <li>
            <a class="btn-floating <?php echo $it_enable; ?>">
                <img src="img/lang_icons/it_icon.png" alt="IT"
                style="width: 40px;heigth:40px; left: -30px;">
            </a>
        </li>
        <li>
            <a class="btn-floating <?php echo $de_enable; ?>" href="de/index.php" hreflang="de">
                <img src="img/lang_icons/de_icon.png" alt="DE"
                style="width: 40px;heigth:40px; left: -30px;">
            </a>
        </li>
        <li>
            <a class="btn-floating <?php echo $en_enable; ?>" href="en/index.php" hreflang="en">
                <img src="img/lang_icons/en_icon.png" alt="EN"
                style="width: 40px;heigth:40px; left: -30px;">
            </a>
        </li>
    </ul>
</div>

<!--Footer--------------------------------------------------------------------->
<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col s12 l6">
                <h5 class="white-text"><?php echo $linked_sites; ?></h5>
                <p class="grey-text text-lighten-4">
                    <a href="http://libreriadelledonnefirenze.blogspot.it"
                        style="text-decoration:none; color:#FFF">
                        Libreria Delle Donne Firenze
                    </a>
                    <br>
                    <a href="http://www.theotherway.it"
                        style="text-decoration:none; color:#FFF">
                        The Other Way
                    </a>
                    <br>
                    <a href="http://www.velavventura.com"
                    style="text-decoration:none; color:#FFF">
                    Velavventura
                    </a>
                </p>
            </div>
            <div class="col s12 l3">
                <p class="white-text" itemscope
                    itemtype="http://schema.org/LocalBusiness">
                    <?php echo $iva; ?>
                    <span itemprop="taxID">06372050481</span>
                </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            &copy; 2017
            <a class="brown-text text-lighten-3" href="#!">
                Lorenzo Delcroix
            </a>
            , Logo &copy; 2013
            <a class="brown-text text-lighten-3" href="#NoLinkPresent">
                Tanja Gastegger
            </a>
        </div>
    </div>
</footer>

<!--Cookies banner------------------------------------------------------------->
<script id="cookiebanner" src="http://cookiebanner.eu/js/cookiebanner.min.js"
    close-text="Accetto" linkmsg="Più informazioni" data-message="Usiamo
	cookies per migliorare la tua esperiaza nelle nostre pagine.">
</script>
</body>
</html>
