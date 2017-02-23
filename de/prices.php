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
<?php $title = 'Il Palagetto - Listino'; $lang = 'it'; include __DIR__.'/../top.php'; ?>
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <h1 class="header center orange-text">Listino</h1>
  </div>
</div>

<div class="container">
    <div class="section center">
        <h5>Prezzi Camere</h5>
        <table bgcolor="#FFFFEE" class="responsive-table z-depth-2">
            <thead>
              <tr>
                  <th>Bassa Stagione: Ott - Apr</th>
                  <th>Alta Stagione: Mag - Set</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>€30*</td>
                <td>€40*</td>
              </tr>
            </tbody>
        </table>

        <h5>Prezzi Camere Per Bambini</h5>
        <table bgcolor="#FFFFEE" class="responsive-table z-depth-2">
            <thead>
              <tr>
                  <th>0 - 6 Anni</th>
                  <th>7 - 12 Anni</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>€0*</td>
                <td>€25*</td>
              </tr>
            </tbody>
        </table>

        <h6>
            *Prezzo a persona per notte. I bambini (fino a sei anni) che
            dormono in camera con i genitori non pagano.
        </h6>

        <h5>Prezzi Appartamento Krisar</h5>
        <table bgcolor="#FFFFEE" class="responsive-table z-depth-2">
            <thead>
              <tr>
                  <th></th>
                  <th>Ott - Apr</th>
                  <th>Mag - Set</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>A notte</td>
                <td>€70**</td>
                <td>€80**</td>
              </tr>
              <tr>
                <td>A settimana</td>
                <td>€450**</td>
                <td>€500**</td>
              </tr>
            </tbody>
        </table>
        <h6>**Prezzo per alloggio</h6>
    </div>
</div>
<?php include __DIR__.'/../bottom.php'; ?>
