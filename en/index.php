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
                    <p class="light">
                        <b>Il Palagetto</b> farmhouse and agritourism is
                        located 3km from the Florence center, in the
                        south-west area of the city. The area is characterized
                        by a copious amount of beech trees and wonderful hills,
                        strewn with magnificent palaces and ancient mansions.
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
                    <h5 class="center">Location</h5>
                    <p class="light">The premises are spacious and full of light
                        , with a magnificent view on the surrounding countryside
                        . Fields, in fact, surround the house, although it is
                        situated in the near proximity of the city. <b>
                        The historical center of Florence is easily reachable
                        in 10 minutes by bus, and the closest bus stop is only
                        200m (218 yards) from the agritourism</b>. Cars
                        may be easily parked in front of the main entrance.
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
                    <h5 class="center">The Gardens</h5>
                    <p class="light">At the moment, for logistical reasons,
                        access to the garden or to the main farm area
                        <b>is only allowed under our manager's
                        supervision</b>. At the moment, <b>guests’
                        pets are not admitted</b>. We hope, however, to be
                        able to welcome your four-legged friends in the near
                        future!
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
                <h5 class="header col s12 light">Family owned and operated
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
                        accent-2" href="#modal1">More News</a>
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
                <h5 class="header col s12 light">
                    Access to the <b>garden and to the main farm area</b>
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
    <h4 class="center">Images:</h4>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Living room" src="/img/index_imgs/salotto.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Picture from 1700" src="/img/index_imgs/antica.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Apartment" src="/img/index_imgs/appartamento.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Bellosguardo room" src="/img/index_imgs/bellosguardo.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Bellosguardo room" src="/img/index_imgs/bellosguardo2.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Breakfast table" src="/img/index_imgs/colazione.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Marignolle room" src="/img/index_imgs/marignolle.jpg">
    </div>
    <div class="col s6 m3">
        <img class="materialboxed responsive-img z-depth-1 hoverable"
            data-caption="Poccetti room" src="/img/index_imgs/poccetti.jpg">
    </div>
</div>
<?php include __DIR__.'../../bottom.php'; ?>
