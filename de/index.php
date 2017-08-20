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
<?php $title = 'Il Palagetto'; $lang = "de"; include __DIR__.'/top.php'; ?>
<!--TODO: check and edit all Scema information-->

<!--First area of the page, with parallax and image---------------------------->
<div id="index-banner" class="parallax-container" style="margin-top:1.2px"
    itemscope itemtype="http://schema.org/LocalBusiness">
    <br>
    <br>
    <div class="section no-pad-bot">
        <div class="container">
            <!--Header and text on top of the parallax image-->
            <h3 class="header center light r" itemprop="legalname">
                Agrarturismus Il Palagetto
            </h3>
            <div class="row center">
                <h5 class="header col s12 light">
                    <b itemprop="name">Il Palagetto</b>
                    <span itemprop="location">nur 3km vom Zentrum von Florenz entfernt.</span>
                </h5>
            </div>
            <!--Button-->
            <div class="row center">
                <a href="<?php echo $folder; ?>book.php" id="download-button" class="btn-large waves-effect
                waves-light amber accent-2">Jetzt buchen!</a>
            </div>
            <br>
            <br>
        </div>
    </div>

    <!--Parallax image-->
    <div class="parallax">
        <img src="img/index_parallax/facciata.jpg" alt="Frontansicht">
    </div>
</div>

<!--Second area of the page, with icons---------------------------------------->
<div class="container">
    <div class="section">
        <div class="row">
            <!--1st section-->
            <div class="col s12 m4">
                <!--Icon block defines area with icon and text paragraph-->
                <div class="icon-block">
                    <h2 class="center black-text">
                        <i class="medium material-icons">home</i>
                    </h2>
                    <h5 class="center">Il Palagetto</h5>
                    <p class="light">Der Agrarturismus <b>Il Palagetto</b> liegt 4 km süd-westlich vom Zentrum von Florenz entfernt. Das Stadviertel ist gekennzeichnet von reichlichen Buchenbäumen und wunderschönen Hügeln, die mit herrlichen Palästen und Villen übersät sind.
                    </p>
                </div>
            </div>

            <!--2nd section-->
            <div class="col s12 m4">
                <!--Icon block defines area with icon and text paragraph-->
                <div class="icon-block">
                    <h2 class="center black-text">
                        <i class="medium material-icons">place</i>
                    </h2>
                    <h5 class="center">Zona</h5>
                    <p class="light">Die Räume sind groß und hell mit Aussicht auf die schöne Landschaft. Das Haus ist, in der Tat, umgeben von Feldern obwohl die Stadt ganz in der Nähe liegt. <strong>Das Stadtzentrum ist mit dem Bus einfach in 10min zu erreichen.</strong>.
                         <strong>Die nächste Bushaltestelle ist nur 300m vom Haus entfernt.</strong>. Autos können bequem vor dem Agrartourismus geparkt werden.
                    </p>
                </div>
            </div>

            <!--3rd section-->
            <div class="col s12 m4">
                <!--Icon block defines area with icon and text paragraph-->
                <div class="icon-block">
                    <h2 class="center black-text">
                        <i class="medium material-icons">local_florist</i>
                    </h2>
                    <h5 class="center">Der Garten</h5>
                    <p class="light">Im Augenblick ist der
 <strong>Zugang zum Garten oder zum Olivenhain</strong> aus logistischen Gründen nur in Begleitung unserer Managerin möglich.
                        <br>
                        Deshalb sind, <strong>die Haustiere unserer Gäste momentan nicht zugelassen.</strong>. Wir hoffen jedoch in naher Zukunft in der Lage zu sein die vierbeinigen Freunde bei uns aufnehmen zu können!
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<!--Third area of the page, with parallax and image---------------------------->
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light"><b>Familienunternehmen</b>
                </h5>
            </div>
        </div>
    </div>
    <div class="parallax">
        <img src="img/index_parallax/facciata2.jpg" alt="Frontansicht">
    </div>
</div>

<!--Fourth area of the page with news section---------------------------------->
<div class="container">
    <!--TODO:possibly remove section as news are not updated often enough, maybe replace with Facebook feed-->
    <div class="section">
        <div class="row">
            <div class="col s12 center">
                <h2 class="black-text">
                    <i class="medium material-icons">announcement</i>
                </h2>
                <h4>News</h4>
                <!--call google docs iframe to display the news-->
                <iframe
                    class="z-depth-2" seamless scrolling="no" frameborder="0"
                    style="width:100%; height:400px"
                    src="https://docs.google.com/document/d/1PE8ayfS_B0QCzycJIhjaFhgMXw-p7Cz9q9hon0pzTFE/pub?embedded=true">
                </iframe>

                <!--Modal trigger to call for card with more news-->
                <p>
                    <br>
                    <a target="_blank" class="btn waves-effect waves-light amber
                        accent-2" href="#modal1">Mehr news</a>
                </p>

                <!--Modal structure to show when trigger executes-->
                <div id="modal1" class="modal bottom-sheet">
                    <div class="modal-content">
                        <h4>News</h4>
                        <!--call google docs iframe to display the news, this
                        time with scrollable iframe-->
                        <iframe class="z-depth-2" frameborder="0"
                            style="width:100%; height:200px;"
                            src="https://docs.google.com/document/d/1PE8ayfS_B0QCzycJIhjaFhgMXw-p7Cz9q9hon0pzTFE/pub?embedded=true">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Fifth area of the page, with parallax and image---------------------------->
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">Zugang <strong>zum Garten und Olivenhain</strong>.
                </h5>
            </div>
        </div>
    </div>
    <div class="parallax">
        <img src="img/index_parallax/giardino.jpg" alt="Garten">
    </div>
</div>

<!--Sixth area of the page, with images---------------------------------------->
<div class="row">
    <h4 class="center">Photos:</h4>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Wohnzimmer" src="img/index_imgs/salotto.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Garten im Jahr 1700" src="img/index_imgs/antica.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Appartement Krisar" src="img/index_imgs/appartamento.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Zimmer Bellosguardo" src="img/index_imgs/bellosguardo.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Zimmer Bellosguardo" src="img/index_imgs/bellosguardo2.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Tisch im Frühstücksraum" src="img/index_imgs/colazione.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Zimmer Marignolle" src="img/index_imgs/marignolle.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Zimmer Poccetti" src="img/index_imgs/poccetti.jpg">
    </div>
</div>
<?php include __DIR__.'/bottom.php'; ?>
