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
<?php $title = 'Il Palagetto - Listino'; $lang = 'it'; include '../top.php'; ?>
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br>
    <br>
    <h1 class="header center orange-text">Listino</h1>
  </div>
</div>

<div class="container">
    <div class="section center">
        <h1>Prezzi Camere</h1>
        <!--TODO: switch to responsive materialize table-->
            <table width="98%" border="1" cellspacing="2" cellpadding="5" bgcolor="#FFFFEC">
              <tr>
                <td height="50">Bassa Stagione: Ott - Apr</td>
                <td>€30*</td>
              </tr>
              <tr>
                <td height="50">Alta Stagione: Mag - Set</td>
                <td>€40*</td>
              </tr>
            </table>
            <h1>Prezzi Camere Per Bambini</h1>
            <table width="98%" border="1" cellspacing="2" cellpadding="5" bgcolor="#FFFFEC">
              <tr>
                <td height="50">0 - 6 Anni</td>
                <td>€0*</td>
                </tr>
              <tr>
                <td height="50">7 - 12 Anni</td>
                <td>€25*</td>
                </tr>
            </table>
            <h6>*Prezzo a persona per notte. I bambini (fino a sei anni) che dormono in camera con i genitori non pagano.</h6>
            <h1>Prezzi Appartamento Krisar</h1>
            <table width="98%" border="1" cellspacing="2" cellpadding="5" bgcolor="#FFFFEC">
              <tr>
                <td>&nbsp;</td>
                <td>A notte</td>
                <td>A Settimana</td>
              </tr>
              <tr>
                <td>Ott - Apr</td>
                <td>€70**</td>
                <td>€450**</td>
              </tr>
              <tr>
                <td>Mag - Set</td>
                <td>€80**</td>
                <td>€500**</td>
              </tr>
            </table>
            <h6>**Prezzo per alloggio</h6>
    </div>
</div>
<?php include '../bottom.php'; ?>
