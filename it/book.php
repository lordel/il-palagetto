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
<?php $title = 'Il Palagetto - Prenota'; $lang = 'it'; include __DIR__.'/../top.php'; ?>
<script src='/js/fullcalendar/moment.min.js'></script>
<script src='/js/fullcalendar/fullcalendar.js'></script>
<script type='text/javascript' src='/js/fullcalendar/gcal.js'></script>
<script src='/js/fullcalendar/lang-all.js'></script>
<script>
	$(document).ready(function() {

		$('#calendar').fullCalendar({
			aspectRatio: .9,
			lang: 'it',
			handleWindowResize: true,
			header: {
				left: ' prev,  today',
				center: 'title',
				right: 'next '
			},
			googleCalendarApiKey: 'AIzaSyDBnlIKHgqtx8EqjhIRhuEIqk4bvF0P-7A',
			eventSources: [
 				// Appartamento Krisar
				{
                googleCalendarId: '5ofhp2fjue9m6uafaiedvauhak@group.calendar.google.com',
				backgroundColor: '#ad2d2d',
				borderColor: '#ad2d2d',
				textColor: '#FFFFFF'
            },

           		// Bellosguardo
				{
                googleCalendarId: 's7em8etmcldtmnob4usi3r4g1c@group.calendar.google.com',
				backgroundColor: '#e0c240',
				borderColor: '#e0c240',
				textColor: '#FFFFFF'
            },
            	// Marignolle
				{
                googleCalendarId: '5ppdpmmcj2u52sucu34ubeelv0@group.calendar.google.com',
				backgroundColor: '#536ca6',
				borderColor: '#536ca6',
				textColor: '#FFFFFF'
            },

			// Poccetti
				{
                googleCalendarId: '9f9t4e3pr9omub7brh8vbvakm8@group.calendar.google.com',
				backgroundColor: '#7ec225',
				borderColor: '#7ec225',
				textColor: '#FFFFFF'
            }
        ],
			eventClick: function(event) {
				// opens events in a popup window
				window.open(event.url, 'gcalevent', 'width=700,height=600');
				return false;
			},

			loading: function(bool) {
				$('#loading').toggle(bool);
			}

		});

	});

</script>

<div class="container">
	<h1 class="header center orange-text">Prenota Subito!</h1>
    <div class="section black-text center">
        <i class="material-icons medium">shopping_cart</i>
		<p>
			Il calendario illustra i giorni <b>non</b> disponibili per le
			prenotazioni con i seguenti colori:
		</p>
        <div class="center" style="background-color: #536ca6; width: 100%;
			height: auto; color: #FFF; margin-bottom: 5px">
			Camera "Marignolle"
		</div>
        <div class="center" style="background-color: #e0c240; width: 100%;
			height: auto; color: #FFF; margin-bottom: 5px">
			Camera "Bellosguardo"
		</div>
        <div class="center" style="background-color: #7ec225; width: 100%;
			height: auto; color: #FFF; margin-bottom: 15px">
			Camera "Poccetti"
		</div>
        <div class="center" style="background-color: #ad2d2d; width: 100%;
			height: auto; color: #FFF">
			Appartamento "Krisar"
		</div>
		<p>
			<b>Prenotate subito!</b> Godete delle nostre offerte! Cercheremo
			di <u>considerare ogni vostra richiesta</u> aggiuntiva:
			prenotazioni personalizzate in diretto contatto con la nostra
			responsabile. (solo per prenotazioni per email o per telefono).
			Per prenotare vi preghiamo di contattarci per
			<a href="mailto:booking@il-palagetto.com?subject=Prenotazione">
				email
			</a>
			 o per
			<a href="/it/contacts.php">
				telefono.
			</a>
		</p>
    </div>
</div>

<!--Calendar------------------------------------------------------------------->
<div class="section no-pad-bot">
    <div class="container">
        <div id='calendar' class="z-depth-3 card"></div>
    </div>
</div>
<div class="section">
	<div class="container center">
		<p>
			In alternativa, potete prenotare attraverso il sito booking.com
			Per prenotare tramite Booking.com basta cliccare sul pulsante in
			 basso.
		</p>
		<a href="http://www.booking.com/hotel/it/agriturismo-il-palagetto.html?aid=330843;lang=it">
			<img src="http://aff.bstatic.com/images/affiliate/330843/booknow_it.gif" style="border: 0;" />
		</a>
	</div>
</div>
<?php include __DIR__.'/../bottom.php'; ?>
