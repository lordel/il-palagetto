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
<?php $title = 'Il Palagetto'; $lang = "en"; include __DIR__.'../../top.php'; ?>
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
                Azienda Agricola Il Palagetto
            </h3>
            <div class="row center">
                <h5 class="header col s12 light">
                    <b itemprop="name">Il Palagetto</b>
                    <span itemprop="location">is situated 3 km from the center
                        of Florence.</span>
                </h5>
            </div>
            <!--Button-->
            <div class="row center">
                <a href="<?php echo $folder; ?>book.php" id="download-button" class="btn-large waves-effect
                waves-light amber accent-2">Book Now!</a>
            </div>
            <br>
            <br>
        </div>
    </div>

    <!--Parallax image-->
    <div class="parallax">
        <img src="/img/index_parallax/facciata.jpg" alt="Facciata">
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
                    <p class="light">L’azienda agricola <b>Il Palagetto</b> è
                        situata a circa 3 km dal centro di Firenze,
                        nella zona sud-ovest della città. Caratterizzata da
                        amenissime colline e ridenti faggi, sparsi di grandiosi
                        palazzi e ville signorili, in guisa che qui ben si può
                        dire con l’Ariosto: <i>“Veder pien di tante ville i
                        colli, par che terren ve le germogli.”</i> (E. Repetti,
                        Dizionario corografico della Toscana, Milano 1855).
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
                    <p class="light">I locali sono ampi e luminosi, con vista
                        sulla campagna circostante. La casa è, infatti,
                        circondata dai campi, pur essendo situata in prossimità
                        della città. <strong>Il centro storico è facilmente
                        raggiungibile in circa 10 minuti con l’autobus</strong>.
                         <strong>La fermata dell’autobus dista circa 200m da
                        casa</strong>. Le auto possono essere comodamente
                        parcheggiate davanti all’ingresso.
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
                    <h5 class="center">I Giardini</h5>
                    <p class="light">Al momento, per motivi logistici, <strong>è
                        possibile accedere al giardino o al podere</strong> solo
                         con la supervisione della nostra responsabile.
                        <br>
                        Perciò, <strong>gli animali degli ospiti non sono
                        ammessi</strong>. Speriamo, tuttavia, di poter
                        accogliere i vostri amici a quattro zampe in futuro!
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
                <h5 class="header col s12 light">Azienda a <b>conduzione
                    familiare</b>
                </h5>
            </div>
        </div>
    </div>
    <div class="parallax">
        <img src="/img/index_parallax/facciata2.jpg" alt="Facciata">
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
                <h4>Notizie</h4>
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
                        accent-2" href="#modal1">Più notizie</a>
                </p>

                <!--Modal structure to show when trigger executes-->
                <div id="modal1" class="modal bottom-sheet">
                    <div class="modal-content">
                        <h4>Notizie</h4>
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
                <h5 class="header col s12 light">Accesso <strong>al giardino e
                    al podere</strong>.
                </h5>
            </div>
        </div>
    </div>
    <div class="parallax">
        <img src="/img/index_parallax/giardino.jpg" alt="Giardino">
    </div>
</div>

<!--Sixth area of the page, with images---------------------------------------->
<div class="row">
    <!--TODO: check all the captions for the images -->
    <!--TODO: check sizing for images-->
    <h4 class="center">Immagini:</h4>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Facciata" src="/img/index_imgs/salotto.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Facciata" src="/img/index_imgs/antica.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Facciata" src="/img/index_imgs/appartamento.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Facciata" src="/img/index_imgs/bellosguardo.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Facciata" src="/img/index_imgs/bellosguardo2.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Facciata" src="/img/index_imgs/colazione.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Facciata" src="/img/index_imgs/marignolle.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Facciata" src="/img/index_imgs/poccetti.jpg">
    </div>
</div>
<?php include __DIR__.'../../bottom.php'; ?>
