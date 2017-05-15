<?php
header('Content-Type: text/html; charset=utf-8');

ob_start('ob_gzhandler');

$if_modified_since = '';
if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])) {
	$if_modified_since = preg_replace('/;.*$/', '', $_SERVER['HTTP_IF_MODIFIED_SINCE']);
}

$mtime = filemtime($_SERVER['SCRIPT_FILENAME']);
$gmdate_mod = gmdate('D, d M Y H:i:s', $mtime) . ' GMT';

if ($if_modified_since == $gmdate_mod) {
	header('HTTP/1.0 304 Not Modified');
	exit;
}

header('Last-Modified: ' . $gmdate_mod);

?><!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="author" content="molily">
<meta name="viewport" content="width=device-width">
<title>Die Sterne Fanseite / Tourtermine</title>
<link rel="author" href="mailto:zapperlott@gmail.com" title="E-Mail an den Autor senden">
<link rel="start" type="text/html" href="./" title="Startseite">
<link rel="prev" type="text/html" href="./">
<link rel="next" type="text/html" href="biografie">
<link rel="stylesheet" href="sterne.css">
</head>
<body>

<p id="logo"><a href="./" title="Zur Startseite/Aktuelles"><img src="logo.png" width="280" height="48" alt="Die Sterne"></a></p>

<div id="navibox">

<p id="skip"><a href="#inhalt">Navigation überspringen, direkt zum Hauptinhalt.</a></p>

<h2 id="navigation">Navigation</h2>

<ul>
<li><a href="./">Aktuelles</a></li>
<li><strong title="diese Seite betrachtest du gerade">Tourtermine</strong></li>
<li><a href="biografie">Biografie</a></li>
<li><a href="diskografie">Diskografie</a></li>
<li><a href="lyrics">Liedtexte</a></li>
<li><a href="links">Links</a></li>
<li><a href="kontakt">Kontakt</a></li>
</ul>

<h2 id="inhaltsverzeichnis">Inhalt</h2>

<ol>
<li><a href="#termine2011">Konzerte ’11</a></li>
<li><a href="#termine2010">Konzerte ’10</a></li>
<li><a href="#termine2009">Konzerte ’09</a></li>
<li><a href="#termine2008">Konzerte ’08</a></li>
<li><a href="#termine2007">Konzerte ’07</a></li>
<li><a href="#termine2006">Konzerte ’06</a></li>
<li><a href="#termine2005">Konzerte ’05</a></li>
<li><a href="#termine2004">Konzerte ’04</a></li>
<li><a href="#termine2003">Konzerte ’03</a></li>
<li><a href="#termine2002">Konzerte ’02</a></li>
</ol>

</div>

<div id="inhalt"><div id="inhalt-wrapper">

<h1>Die Sterne on Tour – Termine, Fotos und Berichte von Sterne-Konzerten</h1>

<p>Falls du Links zu <strong>Fotos</strong> oder <strong>Konzertberichten</strong> hast oder selbst einen Konzertbericht hier veröffentlichen möchtest, schreibe mir bitte an <a href="mailto:zapperlott@gmail.com">zapperlott@gmail.com</a>. Ebenso freue ich mich über Hinweise auf fehlende Konzerte, veraltete Links sowie andere Korrekturen und Ergänzungen.</p>

<p>Die Termine sind <em>chronologisch absteigend sortiert</em> &ndash; Konzerttermine, die am weitesten in der Zukunft liegen, stehen ganz oben, davor liegende stehen darunter. Kommende Termine sind rosa hinterlegt.</p>

<p>Letzte Aktualisierung: <strong>29.05.2011</strong></p>

<div class="vcalendar">

	<!-- ************************************************************************************************* -->

<table class="termine" id="termine2011" summary="Termine und Berichte zu Konzerten im Jahr 2010">

<caption>Konzerte im Jahr 2011</caption>

<thead>
<tr>
<th scope="col">Datum</th>
<th scope="col" abbr="Ort">Veranstaltungsort</th>
<th scope="col" abbr="Infos">Weitere Informationen und Konzertberichte</th>
</tr>
</thead>

<tbody>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20110827">27.08.2011</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Leipzig</span>
	</span>
	&ndash;
	<a href="http://www.conne-island.de/" class="fn org url">Conne Island</a>
	</td>
<td class="description">
	20 JAHRE POP – part one. Mit Stereo Total, Chuckamuck + big afterdance.
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20110618">18.06.2011</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-ch.png" width="18" height="12" alt="Schweiz" title="Konzert in der Schweiz"></span>
		<span class="locality">Zürich</span>
	</span>
	&ndash;
	<a href="http://www.stall6.ch/" class="fn org url">Theaterhaus Gessnerallee, Stall 6</a>
	</td>
<td class="description">
	Festspieleröffnung, mit DeVotchKa (USA) und My Heart Belongs to Cecilia Winter (CH)
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20110521">21.05.2011</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span>
		<span class="locality">Wien</span>
	</span>
	&ndash;
	<a href="http://www.pratersauna.tv/" class="fn org url">Pratersauna</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20110408">08.04.2011</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Köln</span>
	</span>
	&ndash;
	<a href="http://www.gloria-theater.com/" class="fn org url">Gloria</a>
	</td>
<td class="description">
10 Jahre <a href="http://www.parallel-schallplatten.de/">Parallel Schallplatten</a> Konzert mit Von Spar, Three Shades und Katie Smokers Wedding Party
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20110326">26.03.2011</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Hamburg</span>
	</span>
	&ndash;
	<span class="fn org">Rathausmarkt</span>
	</td>
<td class="description">
<a href="http://anti-atom-demo.de/">Anti-Atom-Demo</a>
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20110215">15.02.2011</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Hamburg</span>
	</span>
	&ndash;
	<a href="http://www.fabrik.de/" class="fn org url">Fabrik</a>
	</td>
<td class="description">
Benefiz für jugendliche unbegleitete Flüchtlinge. Mit Herrchens Frauchen, Rainer Trampert &amp; Thomas Ebermann und Helge Schneider
</td>
</tr>

<!--
Paris 20.1.
http://www.facebook.com/photo.php?fbid=10150123118314384&set=a.10150123118184384.316427.232784169383
-->

</tbody>
</table>

<!-- ************************************************************************************************* -->

<table class="termine" id="termine2010" summary="Termine und Berichte zu Konzerten im Jahr 2010">

<caption>Konzerte im Jahr 2010</caption>

<thead>
<tr>
<th scope="col">Datum</th>
<th scope="col" abbr="Ort">Veranstaltungsort</th>
<th scope="col" abbr="Infos">Weitere Informationen und Konzertberichte</th>
</tr>
</thead>

<tbody>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20101117">17.11.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Bielefeld</span>
	</span>
	&ndash;
	<a href="http://www.forum-bielefeld.com/" class="fn org url">Forum</a>
	</td>
<td class="description">
	verlegt vom 3.11. auf den 17.11.
</td>
</tr>


<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20101104">04.11.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Kiel</span>
	</span>
	&ndash;
	<a href="http://www.diepumpe.de/" class="fn org url">Pumpe</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20101102">02.11.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Offenbach</span>
	</span>
	&ndash;
	<a href="http://www.rotari.de/" class="fn org url">Hafen2</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20101101">01.11.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">München</span>
	</span>
	&ndash;
	<a href="http://www.59to1.net/" class="fn org url">59:1</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20101031">31.10.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Regensburg</span>
	</span>
	&ndash;
	<a href="http://www.alte-maelzerei.de/" class="fn org url">Alte Mälzerei</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20101030">30.10.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Leipzig</span>
	</span>
	&ndash;
	<a href="http://www.gewandhaus.de/" class="fn org url">Gewandhaus</a>
	</td>
<td class="description">
<a href="http://www.audio-invasion.de/">Audio Invasion 2010</a>
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20101023">23.10.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Lingen</span>
	</span>
	&ndash;
	<a href="http://www.alterschlachthof.de/" class="fn org url">Alter Schlachthof Festival</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100826">26.08.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Herdringen</span>
	</span>
	&ndash;
	<a href="http://www.zauberhafte-abende.de/" class="fn org url">Zauberhafte Abende</a>
	</td>
<td class="description">
Open Air am Jagdschloss Herdringen, mit Fettes Brot
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100821">21.08.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Hannover</span>
	</span>
	&ndash;
	<a href="http://www.bootboohook.com/" class="fn org url">BootBooHook</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100814">14.08.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Hamburg</span>
	</span>
	&ndash;
	<a href="http://msdockville.de/" class="fn org url">Dockville</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100807">07.08.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span>
		<span class="locality">Gmünd</span>
	</span>
	&ndash;
	<a href="http://www.palaverama.at/" class="fn org url">Palaverama Festival</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100806">06.08.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Freising</span>
	</span>
	&ndash;
	<a href="http://www.prima-leben-und-stereo.de/" class="fn org url">Prima Leben und Stereo</a>
	</td>
<td class="description">
Open-Air-Festival am Vöttinger Weiher, Freising
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100724">31.07.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Dortmund</span>
	</span>
	&ndash;
	<a href="http://www.juicybeats.net/" class="fn org url">Juicy Beats</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100724">24.07.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Diepholz</span>
	</span>
	&ndash;
	<a href="http://www.appletreegarden.de/" class="fn org url">Apple Tree Garden Festival</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100717">17.07.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Dingolfing (bei Dessau/Leipzig)</span>
	</span>
	&ndash;
	<a href="http://www.meltfestival.de/" class="fn org url">Melt Festival</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100627">27.06.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Köln</span>
	</span>
	&ndash;
	<a href="http://www.c-o-pop.de/" class="fn org url">c/o Pop</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="2010064">04.06.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Nürnberg</span>
	</span>
	&ndash;
	<a href="http://www.rock-im-park.de/" class="fn org url">Rock im Park</a>
	</td>
<td class="description">
Clubstage, 23:35 - 00:30 Uhr
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100603">06.06.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Nürburgring, Eifel</span>
	</span>
	&ndash;
	<a href="http://www.rock-am-ring.com/" class="fn org url">Rock am Ring</a>
	</td>
<td class="description">
<a href="http://www.rock-am-ring.com/spielplan">Clubstage, 23:05 - 00:00 Uhr</a>
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100516">16.05.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span>
		<span class="locality">Wien</span>
	</span>
	&ndash;
	<a href="http://oe1.orf.at/kulturwandertag" class="fn org url">Ö1 Kulturwandertag</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100515">15.05.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Dingolfing</span>
	</span>
	&ndash;
	<a href="http://www.redboxfestival.de/" class="fn org url">Red Box Festival</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100514">14.05.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span>
		<span class="locality">Innsbruck</span>
	</span>
	&ndash;
	<a href="http://www.weekenderclub.net/" class="fn org url">Weekender</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100513">13.05.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span>
		<span class="locality">Dornbirn</span>
	</span>
	&ndash;
	<a href="http://www.conradsohm.com/" class="fn org url">Conrad Sohm</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100512">12.05.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Würzburg</span>
	</span>
	&ndash;
	<a href="http://www.posthalle.de/" class="fn org url">Posthalle</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100428">28.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Hamburg</span>
	</span>
	&ndash;
	<a href="http://www.uebelundgefaehrlich.com/" class="fn org url">Uebel &amp; Gefährlich</a>
	</td>
<td class="description">
<a href="http://www.facebook.com/album.php?aid=208379&amp;id=232784169383">Fotos auf Facebook.com</a>
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100425">25.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Dresden</span>
	</span>
	&ndash;
	<a href="http://www.beatpol.de/" class="fn org url">Beatpol</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100424">24.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Erlangen</span>
	</span>
	&ndash;
	<a href="http://www.e-werk.de/" class="fn org url">E-Werk</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100423">23.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span>
		<span class="locality">Salzburg</span>
	</span>
	&ndash;
	<a href="http://www.argekultur.at/" class="fn org url">Arge</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100422">22.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span>
		<span class="locality">Graz</span>
	</span>
	&ndash;
	<a href="http://www.popculture.at/" class="fn org url">PPC</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100421">21.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span>
		<span class="locality">Wien</span>
	</span>
	&ndash;
	<a href="http://www.wuk.at/" class="fn org url">WUK</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100419">19.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Freiburg</span>
	</span>
	&ndash;
	<a href="http://www.jazzhaus.de/" class="fn org url">Jazzhaus</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100417">18.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-ch.png" width="18" height="12" alt="Schweiz" title="Konzert in der Schweiz"></span>
		<span class="locality">Zürich</span>
	</span>
	&ndash;
	<a href="http://www.exil.cl/" class="fn org url">Exil</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100417">17.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-ch.png" width="18" height="12" alt="Schweiz" title="Konzert in der Schweiz"></span>
		<span class="locality">Zürich</span>
	</span>
	&ndash;
	<a href="http://www.exil.cl/" class="fn org url">Exil</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="2010">16.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Augsburg</span>
	</span>
	&ndash;
	<a href="http://www.musikkantine.de/" class="fn org url">Kantine</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100415">15.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Stuttgart</span>
	</span>
	&ndash;
	<a href="http://www.rocker33.com/" class="fn org url">Rocker 33</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100414">14.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Heidelberg</span>
	</span>
	&ndash;
	<a href="" class="fn org url">Karlstorbahnhof</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100412">12.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Köln</span>
	</span>
	&ndash;
	<a href="http://www.luxor-koeln.de/" class="fn org url">Luxor</a>
</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100411">11.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Düsseldorf</span>
	</span>
	&ndash;
	<a href="http://www.zakk.de/" class="fn org url">Zakk</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100410">10.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Osnabrück</span>
	</span>
	&ndash;
	<a href="http://www.rosenhof-os.de/" class="fn org url">Rosenhof</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100409">09.04.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Bremen</span>
	</span>
	&ndash;
	<span class="fn org">Stauerei</span>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100226">26.02.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Hamburg</span>
	</span>
	&ndash;
	<a href="http://www.indramusikclub.com/" class="fn org url">Indra</a>
	</td>
<td class="description">
	<a href="http://www.materierecords.de/">Materie Records Release Party</a>
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100226">26.02.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Hamburg</span>
	</span>
	&ndash;
	<a href="http://www.michelle-records.de/" class="fn org url">Michelle Records</a>
	</td>
<td class="description">
	Schaufenster-Konzert
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100201">01.02.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Hamburg</span>
	</span>
	&ndash;
	<a href="http://www.thalia-theater.de/aktuell/" class="fn org url">Thalia Theater</a>
	</td>
<td class="description">
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100128">28.01.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Jena</span>
	</span>
	&ndash;
	<a href="http://www.kassablanca.de/" class="fn org url">Kassablanca</a>
	</td>
<td class="description">
	<a href="http://www.campusradio-jena.de/">Fest von Campusradio Jena</a><br>
	<a href="http://www.campusradio-jena.de/Blog/2010-02-01-backstage-Reportage-vom-eulenFreundeFestival-oder-wer-ist-gISELA">Reportage</a>
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20100123">23.01.2010</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span>
		<span class="locality">Wien</span>
	</span>
	&ndash;
	<a href="http://www.arena.co.at/" class="fn org url">Arena</a>
	</td>
<td class="description">
	FM4 Geburtstagsfest<br>
	<a href="http://fm4.orf.at/stories/1637601/">Video auf FM4.orf.at</a>
</td>
</tr>

</tbody>
</table>

<!-- ************************************************************************************************* -->

<table class="termine" id="termine2009" summary="Termine und Berichte zu Konzerten im Jahr 2009">

<caption>Konzerte im Jahr 2009</caption>

<thead>
<tr>
<th scope="col">Datum</th>
<th scope="col" abbr="Ort">Veranstaltungsort</th>
<th scope="col" abbr="Infos">Weitere Informationen und Konzertberichte</th>
</tr>
</thead>

<tbody>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20091019">19.10.2009</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Berlin</span>
	</span>
	&ndash;
	<a href="http://www.lido-berlin.de/" class="fn org url">Lido</a>
	</td>
<td class="description">
	mit <a href="http://frittenbude.blogsport.de/">Frittenbude</a>
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20091018">18.10.2009</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Braunschweig</span>
	</span>
	&ndash;
	<a href="http://www.kult-o-rama.de/" class="fn org url">Hilde27</a>
	</td>
<td class="description">
	mit <a href="http://frittenbude.blogsport.de/">Frittenbude</a>
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20091017">17.10.2009</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Münster</span>
	</span>
	&ndash;
	<a href="http://www.lido-berlin.de/" class="fn org url">Skaters Palace</a>
	</td>
<td class="description">
	10 Jahre Campusradio
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20091016">16.10.2009</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Köln</span>
	</span>
	&ndash;
	<a href="http://www.kinggeorg.de/" class="fn org url">King Georg</a>
	</td>
<td class="description">
	live und DJing
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20091015">15.10.2009</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Darmstadt</span>
	</span>
	&ndash;
	<a href="http://www.603qm.de/" class="fn org url">603qm</a>
	</td>
<td class="description">
	mit <a href="http://frittenbude.blogsport.de/">Frittenbude</a>
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20091014">14.10.2009</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">München</span>
	</span>
	&ndash;
	<a href="http://www.59to1.net/" class="fn org url">59:1</a>
	</td>
<td class="description">
	mit <a href="http://frittenbude.blogsport.de/">Frittenbude</a>
</td>
</tr>

<tr class="vevent">
<td>
	<span class="additional">
		<span class="summary">Konzert: Die Sterne</span>,
		<span class="category">Musik</span>,
	</span>
	<span class="dtstart" title="20091013">13.10.2009</span>
</td>
<td class="location vcard">
	<span class="adr">
		<span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span>
		<span class="locality">Leipzig</span>
	</span>
	&ndash;
	<a href="http://www.conne-island.de/" class="fn org url">Conne Island</a>
	</td>
<td class="description">
	mit <a href="http://frittenbude.blogsport.de/">Frittenbude</a>
</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20090711">11.07.2009</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Rüsselsheim</span></span> &ndash; <a href="http://www.phono-pop.de/" class="fn org url">Phono Pop Festival</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20090627">27.06.2009</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Wien</span></span> &ndash; <a href="http://www.donauinselfest.at/" class="fn org url">Donauinselfest</a></td>
<td class="description">FM4 Bühne</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20090620">20.06.2009</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Bayreuth</span></span> &ndash; <a href="http://www.uniopenair.de/2009/" class="fn org url">Uni Campus</a></td>
<td class="description">UNIOPENAIR Bayreuth</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20090619">19.06.2009</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Würzburg</span></span> &ndash; <a href="http://www.umsonst-und-draussen.de/" class="fn org url">Umsonst Und Draussen</a></td>
<td class="description"><a href="http://www.posthalle.de/programm/archiv/page110/page110.html">Posthalle - Danach Und Drinnen</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20090614">14.06.2009</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hannover</span></span> &ndash; <a href="http://www.hannover.de/schauspielhannover/" class="fn org url">Schauspielhaus</a></td>
<td class="description"><a href="http://www.theaterformen.de/">Festival Theaterformen Hannover</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20090613">13.06.2009</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Kirchanschöring</span></span> &ndash; <a href="http://www.im-gruenen-festival.de/" class="fn org url">Im Grünen Festival</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20090529">29.05.2009</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Neustrelitz</span></span> &ndash; <a href="http://www.immergutrocken.de/" class="fn org url">Immergut Festival</a></td>
<td class="description"></td>
</tr>

</tbody>
</table>

<!-- ************************************************************************************************* -->

<table class="termine" id="termine2008" summary="Termine und Berichte zu Konzerten im Jahr 2008">

<caption>Konzerte im Jahr 2008</caption>

<thead>
<tr>
<th scope="col">Datum</th>
<th scope="col" abbr="Ort">Veranstaltungsort</th>
<th scope="col" abbr="Infos">Weitere Informationen und Konzertberichte</th>
</tr>
</thead>

<tbody>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20081010">10.10.2008</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Marburg</span></span> &ndash; <a href="http://www.kfz-marburg.de/" class="fn org url">KFZ</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20081009">09.10.2008</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Kaiserslautern</span></span> &ndash; <a href="http://www.kammgarn.de/" class="fn org url">Kammgarn</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20080809">09.08.2008</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Leipzig</span></span> &ndash; <a href="http://www.ilseserika.de/" class="fn org url">Ilses Erika</a></td>
<td class="description"><a href="http://www.ilseserika.de/09_2008_08_termin.html">Open Erika 4</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20080228">28.02.2008</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Wolfsburg</span></span> &ndash; <a href="http://www.phaeno.de/" class="fn org url">phaeno</a></td>
<td class="description"></td>
</tr>

</tbody>
</table>

<!-- ************************************************************************************************* -->

<table class="termine" id="termine2007" summary="Termine und Berichte zu Konzerten im Jahr 2007">

<caption>Konzerte im Jahr 2007</caption>

<thead>
<tr>
<th scope="col">Datum</th>
<th scope="col" abbr="Ort">Veranstaltungsort</th>
<th scope="col" abbr="Infos">Weitere Informationen und Konzertberichte</th>
</tr>
</thead>

<tbody>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20070715">15.07.2007</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Augsburg</span></span> &ndash; <a href="http://theater1.augsburg.de/page.php?pageid=55" class="fn org url">Komödie</a></td>
<td class="description"><a href="http://www.augsburgwiki.de/index.php/AugsburgWiki/Abc-Festival">ABC-Festival</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20070710">10.07.2007</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <a href="http://www.klosterschule-hamburg.de/" class="fn org url">Gymnasium Klosterschule</a></td>
<td class="description">Konzert mit fremden Gitarren</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20070707">07.07.2007</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Rostock</span></span> &ndash; <span class="fn org">Campus Explosion</span></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20070628">28.06.2007</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <a href="http://www.polittbuero.de/" class="fn org url">Polittbüro</a></td>
<td class="description">Saisonende-Party</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20070302">02.03.2007</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Berlin</span></span> &ndash; <a href="http://www.volksbuehne-berlin.de/" class="fn org url">Volksbühne</a></td>
<td class="description"></td>
</tr>

</tbody>
</table>

<!-- ************************************************************************************************* -->

<table class="termine" id="termine2006" summary="Termine und Berichte zu Konzerten im Jahr 2006">

<caption>Konzerte im Jahr 2006</caption>

<thead>
<tr>
<th scope="col">Datum</th>
<th scope="col" abbr="Ort">Veranstaltungsort</th>
<th scope="col" abbr="Infos">Weitere Informationen und Konzertberichte</th>
</tr>
</thead>

<tbody>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060923">17.12.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <a href="http://www.gruenspan.de/" class="fn org url">Grünspan</a></td>
<td class="description">Jägermeister Rock:Liga 2006/07, mit <a href="https://en.wikipedia.org/wiki/HushPuppies">Hush Puppies</a> und <a href="http://www.louisxiv.net/">Louis XIV</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060923">15.12.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hannover</span></span> &ndash; <a href="http://www.musikzentrum-hannover.de/" class="fn org url">Musikzentrum Hannover</a></td>
<td class="description">Jägermeister Rock:Liga 2006/07, mit <a href="https://en.wikipedia.org/wiki/HushPuppies">Hush Puppies</a> und <a href="http://www.louisxiv.net/">Louis XIV</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060923">14.12.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Köln</span></span> &ndash; <a href="http://www.wartesaal.de/" class="fn org url">Alter Wartesaal</a></td>
<td class="description">Jägermeister Rock:Liga 2006/07, mit <a href="https://en.wikipedia.org/wiki/HushPuppies">Hush Puppies</a> und <a href="http://www.louisxiv.net/">Louis XIV</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060923">13.12.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Stuttgart</span></span> &ndash; <a href="http://www.roehre-konzerte.de/" class="fn org url">Röhre</a></td>
<td class="description">Jägermeister Rock:Liga 2006/07, mit <a href="https://en.wikipedia.org/wiki/HushPuppies">Hush Puppies</a> und <a href="http://www.louisxiv.net/">Louis XIV</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060923">12.12.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Frankfurt</span></span> &ndash; <a href="http://www.batschkapp.de/" class="fn org url">Batschkapp</a></td>
<td class="description">Jägermeister Rock:Liga 2006/07, mit <a href="https://en.wikipedia.org/wiki/HushPuppies">Hush Puppies</a> und <a href="http://www.louisxiv.net/">Louis XIV</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060923">23.09.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <a href="http://www.uebelundgefaehrlich.com/" class="fn org url">Uebel &amp; Gefährlich</a></td>
<td class="description"><a href="http://www.reeperbahnfestival.de/">Reeperbahnfestival</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060824">24.08.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Bonn</span></span> &ndash; <a href="http://www.rockpalast.de/konzerte/2006/rock_im_museum/" class="fn org url">Haus der Geschichte (Rock im Museum)</a></td>
<td class="description">mit Fehlfarben und Revolverheld. In der Nacht vom 03. auf den 04.09.2006, 00.30 bis 02.30 Uhr im Rockpalast im WDR-Fernsehen<br>
<a href="http://www.rockpalast.de/konzerte/2006/rock_im_museum/backstage/extra/">Fotos auf rockpalast.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060819">19.08.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <a href="http://www.wutzrock.de/" class="fn org url">Wutzrock Festival</a></td>
<td class="description"><a href="http://www.fotocat.de/music/sterne/sterne-frame.html">Fotos auf fotocat.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060805">05.08.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Bad Winsheim</span></span> &ndash; <a href="http://www.weinturm-open-air.de/" class="fn org url">Weinturm Open Air</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060804">04.08.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Freising</span></span> &ndash; <a href="http://www.prima-leben-und-stereo.de/openair06/Home.htm" class="fn org url">Prima leben und stereo am Vöttinger Weiher</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060721">21.07.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Augsburg</span></span> &ndash; <a href="http://www.pop-city.de/" class="fn org url">PopCity-Festival</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060714">14.07.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Gräfenhainichen (bei Dessau)</span></span> &ndash; <a href="http://www.meltfestival.de/" class="fn org url">Melt-Festival</a></td>
<td class="description"><a href="http://www.fotocat.de/music/sterne/sterne-frame.html">Fotos auf fotocat.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060713">13.07.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Heidelberg</span></span> &ndash; <a href="http://www.karlstorbahnhof.de/" class="fn org url">Karlstorbahnhof</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060712">12.07.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Freiburg</span></span> &ndash; <a href="http://www.zmf.de/" class="fn org url">ZMF</a></td>
<td class="description"><a href="http://www.fudder.de/2006/07/13/brief-an-einen-funkenden-stern/">Bericht und Fotos auf fudder.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060603">03.06.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Linz</span></span> &ndash; <a href="http://www.linz.at/kultur/kultur_linzfest.asp" class="fn org url">Linzfest (FM4-Bühne)</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060527">27.05.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Köllerbach (Saarland)</span></span> &ndash; <a href="http://www.rocco-del-schlacko.de/" class="fn org url">Rocco del Schlacko Festival</a></td>
<td class="description"></td>
</tr>

<!--
<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060526">26.05.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Essen</span></span> &ndash; <a href="http://www.jugend.essen.de/Haeuser/KommuEinrichtungen/JZEssen.htm" class="fn org url">JZE (Jugendzentrum Essen)</a></td>
<td class="description"></td>
</tr>
-->

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060524">24.05.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Flensburg</span></span> &ndash; <a href="http://www.max-flensburg.de/" class="fn org url">Max</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060514">14.05.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hannover</span></span> &ndash; <a href="http://www.musikzentrum-hannover.de/" class="fn org url">Musikzentrum</a></td>
<td class="description">mit <a href="http://nmfarner.de/">NMFarner</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060513">13.05.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Bremen</span></span> &ndash; <a href="http://www.kulturzentrum-lagerhaus.de/" class="fn org url">Kulturzentrum Lagerhaus</a></td>
<td class="description">mit <a href="http://nmfarner.de/">NMFarner</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060512">12.05.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Magdeburg</span></span> &ndash; <a href="http://www.dominionclub.de/" class="fn org url">Dominion Club</a></td>
<td class="description">mit <a href="http://nmfarner.de/">NMFarner</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060511">11.05.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Berlin</span></span> &ndash; <a href="http://www.postbahnhof.de/" class="fn org url">Postbahnhof</a></td>
<td class="description">mit <a href="http://gustav.sonance.net/">Gustav</a><br>
<a href="http://www.gaesteliste.de/konzerte/show.html?_nr=1295">Bericht auf gaesteliste.de</a><br>
<a href="http://www.berlinonline.de/musik-und-konzerte/konzertfotos/diesterne_postbahnhof/index.php?pos=0&amp;popup">Fotos auf BerlinOnline</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060509">09.05.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Leipzig</span></span> &ndash; <a href="http://www.conne-island.de/" class="fn org url">Conne Island</a></td>
<td class="description">mit <a href="http://gustav.sonance.net/">Gustav</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060508">08.05.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Dresden</span></span> &ndash; <a href="http://www.starclub-dresden.de/" class="fn org url">Star Club</a></td>
<td class="description">mit <a href="http://gustav.sonance.net/">Gustav</a><br>
<a href="http://www.ragazzi-music.de/sterne06_live.html">Bericht und Fotos bei Ragazzi</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060507">07.05.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Erlangen</span></span> &ndash; <a href="http://www.e-werk.de/" class="fn org url">E-Werk</a></td>
<td class="description">mit <a href="http://gustav.sonance.net/">Gustav</a><br>
<a href="http://www.e-werk.de/content/bilder_vorschau.php?rubrik=3500">Fotos auf e-werk.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060506">06.05.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Regensburg</span></span> &ndash; <span class="fn org">Kulturspeicher</span></td>
<td class="description">mit <a href="http://www.theboygroup.biz/">Boy Group</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060504">04.05.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Wien</span></span> &ndash; <a href="http://www.arena.co.at/AWU/" class="fn org url">Arena</a></td>
<td class="description">mit <a href="http://www.theboygroup.biz/">Boy Group</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060503">03.05.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Graz</span></span> &ndash; <a href="http://popculture.at/" class="fn org url">PPC (project pop culture)</a></td>
<td class="description">mit <a href="http://www.theboygroup.biz/">Boy Group</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060502">02.05.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Innsbruck</span></span> &ndash; <a href="http://www.treibhaus.at/" class="fn org url">Treibhaus</a></td>
<td class="description">mit <a href="http://www.theboygroup.biz/">Boy Group</a><br>
<a href="http://www.lachinger.com/gallery/index.php?kat=sterne">Fotos von Stefan Lachinger</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060501">01.05.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">München</span></span> &ndash; <a href="http://www.ampere-muffatwerk.de/" class="fn org url">Ampere</a></td>
<td class="description">mit <a href="http://www.theboygroup.biz/">Boy Group</a><br>
<a href="http://lestighaniker.de/2006/05/02#warst-du-nicht-fett-und-rosig">Bericht auf lestighaniker.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060430">30.04.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Dornbirn</span></span> &ndash; <a href="http://www.conradsohm.com/" class="fn org url">Conrad Sohm</a></td>
<td class="description">mit <a href="http://www.theboygroup.biz/">Boy Group</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060428">28.04.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Konstanz</span></span> &ndash; <a href="http://www.kulturladen.de/" class="fn org url">Kulturladen</a></td>
<td class="description">mit <a href="http://www.theboygroup.biz/">Boy Group</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060427">27.04.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-ch.png" width="18" height="12" alt="Schweiz" title="Konzert in der Schweiz"></span> <span class="locality">Zürich</span></span> &ndash; <a href="http://www.abart.ch/" class="fn org url">Abart</a></td>
<td class="description">mit <a href="http://www.theboygroup.biz/">Boy Group</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060426">26.04.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Schorndorf</span></span> &ndash; <a href="http://www.club-manufaktur.de/" class="fn org url">Manufaktur</a></td>
<td class="description">mit <a href="http://www.theboygroup.biz/">Boy Group</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060424">24.04.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Frankfurt am Main</span></span> &ndash; <a href="http://www.mousonturm.de/" class="fn org url">Mousonturm</a></td>
<td class="description">mit <a href="http://gustav.sonance.net/">Gustav</a><br>
<a href="http://www.faz.net/s/RubC3501523C6F14E7489EB5D87354539E7/Doc~E12C0B33B29FA486F9987C26E8011B5CE~ATpl~Ecommon~Scontent.html">Bericht auf faz.net</a><br>
<a href="http://www.rollingstone.de/forum/showthread.php?t=19066">Bericht auf rollingstone.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060423">23.04.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Köln</span></span> &ndash; <a href="http://www.buergerhausstollwerck.de/" class="fn org url">Bürgerhaus Stollwerck</a></td>
<td class="description">mit <a href="http://gustav.sonance.net/">Gustav</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060422">22.04.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Düsseldorf</span></span> &ndash; <a href="http://www.zakk.de/" class="fn org url">Zakk</a></td>
<td class="description">mit <a href="http://gustav.sonance.net/">Gustav</a><br>
<a href="http://www.rp-online.de/hps/client/opinio/public/pjsub/production_long.hbs?hxmain_object_id=PJSUB::ARTICLE::58662&amp;hxmain_category=::pjsub::opinio::/musik_multimedia/konzerte">Bericht auf rp-online.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060421">21.04.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Bielefeld</span></span> &ndash; <a href="http://www.forum-bielefeld.com/" class="fn org url">Forum</a></td>
<td class="description">mit <a href="http://gustav.sonance.net/">Gustav</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060420">20.04.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Lingen</span></span> &ndash; <a href="http://www.alterschlachthof.de/" class="fn org url">Alter Schlachthof</a></td>
<td class="description">mit <a href="http://gustav.sonance.net/">Gustav</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060419">19.04.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <a href="http://www.uebelundgefaehrlich.com/" class="fn org url">Uebel &amp; Gefährlich</a></td>
<td class="description">mit <a href="http://gustav.sonance.net/">Gustav</a><br>
<a href="http://www.abendblatt.de/daten/2006/04/21/555094.html">Bericht des Hamburger Abendblattes</a><br>
<a href="http://www.zeit.de/online/2006/17/bildergalerie_sterne">Bilder auf zeit.de</a><br>
<a href="http://www.eskalaparty.de/?p=385">Bericht und Fotos auf eskalaparty.de</a>
</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060402">02.04.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Wien</span></span> &ndash; <a href="http://radiokulturhaus.orf.at/" class="fn org url">Radiokulturhaus</a></td>
<td class="description">FM4 Radiosession. Die Eintrittskarten werden ca. zwei Wochen vor der Veranstaltung auf <a href="http://fm4.orf.at/station/169349/main">FM4</a> verlost.</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060216">16.02.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Köln</span></span> &ndash; <a href="http://www.gebaeude9.de/" class="fn org url">Gebäude 9</a></td>
<td class="description"><a href="http://www.intro.de/musik/introintim/">Intro Intim</a>, mit NM Farner, finn<br>
<a href="http://www.intro.de/musik/news/1140190424">Bericht auf intro.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20060215">15.02.2006</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Berlin</span></span> &ndash; <a href="http://www.magnet-club.de/" class="fn org url">Magnet Club</a></td>
<td class="description"><a href="http://www.intro.de/musik/introintim/">Intro Intim</a>, mit finn<br>
<a href="http://www.maerkischeallgemeine.de/cms/beitrag/10650927/63369/">Bericht der Märkischen Allgemeine</a></td>
</tr>

</tbody>
</table>

<!-- ************************************************************************************************* -->

<table class="termine" id="termine2005" summary="Termine und Berichte zu Konzerten im Jahr 2005">

<caption>Konzerte im Jahr 2005</caption>

<thead>
<tr>
<th scope="col">Datum</th>
<th scope="col" abbr="Ort">Veranstaltungsort</th>
<th scope="col" abbr="Infos">Weitere Informationen und Konzertberichte</th>
</tr>
</thead>

<tbody>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20051204">04.12.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <a href="http://www.weltbuehne-hamburg.com/" class="fn org url">Weltbühne</a></td>
<td class="description"><a href="http://www.welt.de/data/2005/12/06/813480.html">Bericht in der Welt</a><br>
<a href="http://www.eskalaparty.de/?p=210">Bericht und Fotos auf eskalaparty.de</a><br>
<a href="http://www.popkiller.de/cms/index.php?option=com_content&amp;task=view&amp;id=116&amp;Itemid=31">Bericht und Fotos auf popkiller.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20051002">02.10.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">München</span></span> &ndash; <a href="http://www.feierwerk.de/" class="fn org url">Feierwerk</a></td>
<td class="description"><a href="http://www.rageagainstabschiebung.de/">Rage against Abschiebung</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050917">17.09.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-ch.png" width="18" height="12" alt="Schweiz" title="Konzert in der Schweiz"></span> <span class="locality">Zürich</span></span> &ndash; <a href="http://www.rotefabrik.ch/" class="fn org url">Rote Fabrik</a></td>
<td class="description">WILD WILD WOZ - Ein Benefiz zugunsten der <a href="http://www.woz.ch/">Woz</a>, u.a. mit zusammen mit <a href="http://gustav.sonance.net/">Gustav</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050827">27.08.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Wiesbaden</span></span> &ndash; <a href="http://www.schlachthof-wiesbaden.de/folklore/" class="fn org url">Folklore im Garten</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050826">26.08.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Pouch bei Bitterfeld</span></span> &ndash; <a href="http://www.outside-festival.de/" class="fn org url">Outside Festival</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050820">20.08.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <span class="fn org">KdW</span></td>
<td class="description">Release-Party zur Wiederveröffentlichung von »In Echt«</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050819">19.08.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Fresenhagen</span></span> &ndash; <a href="http://www.rioreiser.de/index_1.html" class="fn org url">Rio Reiser Familienfest 2005</a></td>
<td class="description"><a href="http://www.niebuell-online.de/sommerfest-fresenhagen-sterne-2005/">Fotos auf niebuell-online.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050806">06.08.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Gelsenkirchen</span></span> &ndash; <a href="http://www.amphitheater-gelsenkirchen.com/" class="fn org url">Amphitheater</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050716">16.07.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Mannheim</span></span> &ndash; <a href="http://www.amphitheater-gelsenkirchen.com/" class="fn org url">Mannheim Music Award, Daimler-Chrysler Werksgelände</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050702">02.07.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Leer (Ostfriesland)</span></span> &ndash; <a href="http://www.rockamdeich.de/" class="fn org url">Rock am Deich</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050627">27.06.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Salzburg</span></span> &ndash; <a href="http://www.argekultur.at/" class="fn org url">ARGEkultur Gelände</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050625">25.06.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Wien</span></span> &ndash; <a href="http://www.donauinselfest.at/" class="fn org url">Donauinselfest</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050624">24.06.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hoyerswerda</span></span> &ndash; <a href="http://www.populario.de/" class="fn org url">Populario Festival</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050604">04.06.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Berlin</span></span> &ndash; <a href="http://www.berlinfestival.de/" class="fn org url">Berlinfestival</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050512">12.05.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Osnabrück</span></span> &ndash; <a href="http://www.osnabrueck.de/maiwoche/" class="fn org url">Maiwoche</a></td>
<td class="description">Goldrushbühne Herrenteichswall</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050511">11.05.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Wuppertal</span></span> &ndash; <a href="http://www.u-club.de/" class="fn org url">U-Club</a></td>
<td class="description"><a href="http://www.u-club.de/u_gallery/11052005DIESTERNE">Fotos auf u-club.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050415">15.04.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Marburg</span></span> &ndash; <a href="http://asta-marburg.de/modules.php?op=modload&amp;name=PagEd&amp;file=index&amp;topic_id=1&amp;page_id=517" class="fn org url">Universität Marburg</a></td>
<td class="description">AStA-Erstsemester-Party im Hörsaalgebäude, Biegenstraße</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050226">26.02.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Lingen</span></span> &ndash; <a href="http://www.alterschlachthof.de/" class="fn org url">Alter Schlachthof</a></td>
<td class="description">Festival mit Klee und Bernd Begemann</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050129">29.01.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Bremen</span></span> &ndash; <a href="http://www.jungestheater.de/" class="fn org url">Junges Theater</a></td>
<td class="description">verlegt vom 27.10.2004</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050128">28.01.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Kiel</span></span> &ndash; <a href="http://www.diepumpe.de/" class="fn org url">Pumpe</a></td>
<td class="description">verlegt vom 28.10.2004</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050127">27.01.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Rostock</span></span> &ndash; <a href="http://www.mauclub.de/" class="fn org url">MAU</a></td>
<td class="description">verlegt vom 29.10.2004<br>
<a href="http://www.ktv-zone.de/reviewdetails.php?id=3303">Fotos auf ktv-zone.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050126">26.01.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hannover</span></span> &ndash; <a href="http://www.faustev.de/" class="fn org url">Faust</a></td>
<td class="description">verlegt vom 24.10.2004</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050125">25.01.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Gießen</span></span> &ndash; <a href="http://www.muk-giessen.de/" class="fn org url">MuK</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050123">23.01.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Jena</span></span> &ndash; <a href="http://www.kassablanca.de/" class="fn org url">Kassablanca</a></td>
<td class="description">verlegt vom 21.10.2004<br>
<a href="http://www.denniskehrig.de/justmag/article355.html">Bericht des JUSTmag</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050122">22.01.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Leipzig</span></span> &ndash; <a href="http://www.conne-island.de/" class="fn org url">Conne Island</a></td>
<td class="description"><a href="http://www.fotocat.de/music/sterne/sterne-frame.html">Fotos auf fotocat.de</a><br>
<a href="http://www.popfrontal.de/pages/artikel/sterne_220105.html">Bericht auf popfrontal.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050121">21.01.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Berlin</span></span> &ndash; <a href="http://www.so36.de/" class="fn org url">SO36</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050120">20.01.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Dresden</span></span> &ndash; <a href="http://starclub.vakuum.net/" class="fn org url">Star Club</a></td>
<td class="description">verlegt vom 22.10.2004</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050119">19.01.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Erlangen</span></span> &ndash; <a href="http://www.e-werk.de/" class="fn org url">E-Werk</a></td>
<td class="description">verlegt vom 20.10.2004</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050118">18.01.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Regensburg</span></span> &ndash; <a href="http://www.alte-maelzerei.de/" class="fn org url">Alte Mälzerei</a></td>
<td class="description">verlegt vom 19.10.2004</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20050117">17.01.2005</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Düsseldorf</span></span> &ndash; <a href="http://www.zakk.de/" class="fn org url">Zakk</a></td>
<td class="description">verlegt vom 26.10.2004<br>
<a href="http://www.gaesteliste.de/konzerte/show.html?_nr=995">Bericht auf gaesteliste.de</a></td>
</tr>

</tbody>
</table>

<!-- ************************************************************************************************* -->

<table class="termine" id="termine2004" summary="Termine und Berichte zu Konzerten im Jahr 2004">

<caption>Konzerte im Jahr 2004</caption>

<thead>
<tr>
<th scope="col">Datum</th>
<th scope="col" abbr="Ort">Veranstaltungsort</th>
<th scope="col" abbr="Infos">Weitere Informationen und Konzertberichte</th>
</tr>
</thead>

<tbody>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20041017">17.10.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Graz</span></span> &ndash; <a href="http://popculture.at/" class="fn org url">PPC (project pop culture)</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20041016">16.10.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Ebensee</span></span> &ndash; <a href="http://www.kino-ebensee.at/" class="fn org url">Kino</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20041015">15.10.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Wien</span></span> &ndash; <a href="http://www.flex.at/" class="fn org url">Flex</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20041014">14.10.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">München</span></span> &ndash; <a href="http://www.feierwerk.de/" class="fn org url">Feierwerk</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20041013">13.10.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-ch.png" width="18" height="12" alt="Schweiz" title="Konzert in der Schweiz"></span> <span class="locality">Zürich</span></span> &ndash; <a href="http://www.abart.ch/" class="fn org url">Abart</a></td>
<td class="description"><a href="http://www.abart.ch/_gallery/gallery_live_diesterne.html">Fotos auf abart.ch</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20041012">12.10.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-ch.png" width="18" height="12" alt="Schweiz" title="Konzert in der Schweiz"></span> <span class="locality">Luzern</span></span> &ndash; <a href="http://www.boaluzern.ch/" class="fn org url">Boa</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20041011">11.10.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-ch.png" width="18" height="12" alt="Schweiz" title="Konzert in der Schweiz"></span> <span class="locality">Düdingen</span></span> &ndash; <a href="http://www.badbonn.ch/" class="fn org url">Bad Bonn</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20041009">09.10.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Schorndorf</span></span> &ndash; <a href="http://www.club-manufaktur.de/home.html" class="fn org url">Manufaktur</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20041008">08.10.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Frankfurt am Main</span></span> &ndash; <span class="fn org url">Café Royal</span></td>
<td class="description"><a href="http://www.fr-aktuell.de/ressorts/kultur_und_medien/feuilleton/?cnt=524972">Bericht der Frankfurter Rundschau</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20041007">07.10.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Krefeld</span></span> &ndash; <a href="http://www.kulturfabrik-krefeld.de/" class="fn org url">Kulturfabrik</a></td>
<td class="description"><a href="http://www.triggerfish.de/fotos/home.cfm?p=8570">Fotos auf triggerfish.de</a><br>
<a href="http://www.wz-newsline.de/seschat4/200/sro.php?redid=65931">Berich der Westdeutschen Zeitung</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20041006">06.10.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Bielefeld</span></span> &ndash; <a href="http://www.forum-bielefeld.com/" class="fn org url">Forum</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20041001">01.10.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <a href="http://www.markthalle-hamburg.de/" class="fn org url">Markthalle</a></td>
<td class="description"><a href="http://www.popfrontal.de/pages/artikel/sterne_011004.html">Berich auf popfrontal.de</a></td>
</tr>

<!--
<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040904">04.09.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Schüttorf</span></span> &ndash; <a href="http://www.schuettorffestival.com/" class="fn org url">Schüttorf Festival</a></td>
<td class="description"></td>
</tr>
-->

<!--
<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040903">03.09.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Berlin</span></span> &ndash; <a href="http://www.openairpotsdamerplatz.de/" class="fn org url">Kulturforum am Potsdamer Platz</a></td>
<td class="description"><a href="http://www.radioeins.de/_/ma/radioeins_wird_sieben/pop_festival_jsp.html">radioeins wird sieben: Pop-Festival</a></td>
</tr>
-->

<!--
<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040828">28.08.2004</span></td>
<td class="description"><img src="../img/flag-ch.png" width="18" height="12" alt="Schweiz" title="Konzert in der Schweiz"> Bern</td>
<td>Open Air</td>
<td></td>
</tr>
-->

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040814">14.08.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">bei Salzburg</span></span> &ndash; <a href="http://www.frequency.at/" class="fn org url">Frequency Festival</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040731">31.07.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Magdeburg</span></span> &ndash; <span class="fn org">Belichtungszeit 1200, Elbwiesen</span></td>
<td class="description"></td>
</tr>

<!--
<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040724">24.07.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Meschede</span></span> &ndash; <a href="http://www.heimspiel-openair.de/" class="fn org url">Heimspiel 2004 Open Air</a></td>
<td class="description"></td>
</tr>
-->

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040723">23.07.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hannover</span></span> &ndash; <a href="http://www.justizvollzugsanstalt-hannover.de/" class="fn org url">Justizvollzugsanstalt</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040717">17.07.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Kassel</span></span> &ndash; <a href="http://www.kulturzelt-kassel.de/" class="fn org url">Kulturzelt</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040716">16.07.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Geretsried/München</span></span> &ndash; <a href="http://www.sonnenrot.com/" class="fn org url">Sonnenrot Festival</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040715">15.07.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Feldkirch</span></span> &ndash; <a href="http://www.poolbar.at/" class="fn org url">Poolbar Festival</a></td>
<td class="description"><a href="http://www2.poolbar.at/vgb/?eid=379">Fotos auf poolbar.at</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040531">31.05.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <a href="http://www.knusthamburg.de/" class="fn org url">Knust</a></td>
<td class="description"><a href="http://www.popfrontal.de/pages/artikel/sterne_310504.html">Bericht auf popfrontal.de</a><br>
<a href="http://www.welt.de/data/2004/06/02/285600.html">Bericht der Welt</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040530">30.05.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Mainz</span></span> &ndash; <a href="http://www.openohr.de/" class="fn org url">OpenOhr Festival</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040529">29.05.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Passau</span></span> &ndash; <a href="http://www.pfingst-open-air.de/" class="fn org url">Passauer Pfingst-Open-Air</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040528">28.05.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Wien</span></span> &ndash; <a href="http://www.porgy.at/" class="fn org url">Porgy &amp; Bess</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040527">27.05.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">München</span></span> &ndash; <a href="http://www.atomic.de/" class="fn org url">Atomic Cafe</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040526">26.05.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Frankfurt</span></span> &ndash; <a href="http://www.mousonturm.de/" class="fn org url">Mousonturm</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040525">25.05.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Köln</span></span> &ndash; <a href="http://www.primeclub.de/" class="fn org url">Prime Club</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040524">24.05.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Berlin</span></span> &ndash; <a href="http://www.columbiafritz.de/" class="fn org url">COLUMBIAFritz</a></td>
<td class="description"><a href="http://archiv.tagesspiegel.de/archiv/26.05.2004/1146342.asp">Bericht des Tagesspiegels</a><br>
<a href="http://www.fotocat.de/music/sterne/sterne-frame.html">Fotos auf fotocat.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040522">22.05.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Innsbruck</span></span> &ndash; <a href="http://www.treibhaus.at/" class="fn org url">Treibhaus</a></td>
<td class="description"><a href="http://fm4.orf.at/station/165504">FM4 Tour</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040521">21.05.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Salzburg</span></span> &ndash; <a href="http://www.szene-salzburg.net" class="fn org url">Szene</a></td>
<td class="description"><a href="http://fm4.orf.at/station/165504">FM4 Tour</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040520">20.05.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Oslip (Burgenland)</span></span> &ndash; <a href="http://www.cselley-muehle.at/" class="fn org url">Cselley-Mühle</a></td>
<td class="description"><a href="http://fm4.orf.at/station/165504">FM4 Tour</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040507">07.05.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Leipzig</span></span> &ndash; <a href="http://www.moritzbastei.de/" class="fn org url">Moritzbastei</a></td>
<td class="description"><a href="http://www.lvz-online.de/fotogalerie/2004_lvz_popup_2/">Fotos der Leipziger Volkszeitung</a><br>
<a href="http://www.fotocat.de/music/sterne/sterne-frame.html">Fotos auf fotocat.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040506">06.05.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Schwerin</span></span> &ndash; <a href="http://www.komplex-schwerin.de/" class="fn org url">Komplex</a></td>
<td class="description"><a href="http://www.lobbi-mv.de/">Benefizkonzert für Opfer von Nazi-Gewalt</a><br>
<a href="http://www.see-you.de/index/Home/Zweispalter_Sterne_und_Ausstellungen/103967,0">Bericht auf see-you.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040501">01.05.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Recklinghausen</span></span> &ndash; <a href="http://www.ruhrfestspiele.de/" class="fn org url">Ruhrfestspiele</a></td>
<td class="description"><a href="http://www.gaesteliste.de/konzerte/show.html?_nr=834">Bericht und Interview auf Gaesteliste.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20040301">01.03.2004</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Köln</span></span> &ndash; <a href="http://www.livemusichall.de/" class="fn org url">Live Music Hall</a></td>
<td class="description">Monsters Of Rocco &#8212; Liebeskreis für Rocco Clein<br>
Benefizkonzert für die Kinder Julius und Jackie des <a href="http://www.intro.de/index.php?nav=10&amp;con=/news/news&amp;einenews=1075716156">am 1. März verstorbenen Rocco Clein</a>. (<a href="http://web.archive.org/web/20040229134107/http://www.sueddeutsche.de/kultur/artikel/29/26003/">Nachruf in der Süddeutschen Zeitung</a>, siehe auch <a href="http://web.archive.org/web/20040218221126/http://www.spex.de/web/texte.php?id=243">SPEX</a>.)<br>
<a href="http://www.gaesteliste.de/konzerte/show.html?_nr=781">Bericht auf Gaesteliste.de</a><br>
<a href="http://www.triggerfish.de/magazin/home.cfm?p=6502">Bericht auf triggerfish.de</a>
</td>
</tr>

</tbody>
</table>

<!-- ************************************************************************************************* -->

<table class="termine" id="termine2003" summary="Termine und Berichte zu Konzerten im Jahr 2003">

<caption>Konzerte im Jahr 2003</caption>

<thead>
<tr>
<th scope="col">Datum</th>
<th scope="col" abbr="Ort">Veranstaltungsort</th>
<th scope="col" abbr="Infos">Weitere Informationen und Konzerberichte</th>
</tr>
</thead>

<tbody>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20031107">07.11.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-dk.png" width="18" height="12" alt="Dänemark" title="Konzert in Dänemark"></span> <span class="locality">Kopenhagen</span></span> &ndash; <a href="http://www.stengade30.dk/" class="fn org url">Club Stengade 30</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20031129">29.11.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">München</span></span> &ndash; <span class="fn org">Bavarian Open</span></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20031026">26.10.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Potsdam</span></span> &ndash; <a href="http://www.waschhaus.de/" class="fn org url">Waschhaus</a></td>
<td class="description"><a href="http://www.fotocat.de/music/sterne/sterne-frame.html">Fotos auf fotocat.de</a><br>
<a href="http://www.maerkischeallgemeine.de/?loc=2_1_1&amp;id=138532&amp;weiter=250">Bericht der Märkischen Allgemeinen</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20031025">25.10.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Düsseldorf</span></span> &ndash; <a href="http://www.einslive.de/dersektor/der_klubbing-guide/duesseldorf_-_stone_im_ratinger_hof.phtml" class="fn org url">Stone im Ratinger Hof</a></td>
<td class="description"><a href="http://www.gaesteliste.de/konzerte/show.html?_nr=711">Bericht auf Gaesteliste.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20031023">23.10.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Weinheim</span></span> &ndash; <a href="http://www.cafecentral.de/" class="fn org url">Cafe Central</a></td>
<td class="description"><a href="http://www.c6-magazin.de/kultur/musik/2003/10/1067083507.php">Bericht des C6 Magazin</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20031023">23.10.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Graz</span></span> &ndash; <a href="http://popculture.at/" class="fn org url">PPC (project pop culture)</a></td>
<td class="description"><a href="http://www.spark7.com/spark7/sp7_fun/sp7_m_fotos/1,7264,2-20-0-14446-0,00.html">Fotos auf spark7.com</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20031022">22.10.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Wien</span></span> &ndash; <a href="http://www.wuk.at/" class="fn org url">WUK</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20031021">21.10.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Augsburg</span></span> &ndash; <a href="http://www.musikkantine.de/" class="fn org url">Kantine</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20031020">20.10.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Freiburg</span></span> &ndash; <a href="http://www.jazzhaus.de/" class="fn org url">Jazzhaus</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20031019">19.10.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Jena</span></span> &ndash; <a href="http://www.kassablanca.de/" class="fn org url">Kassablanca</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20031018">18.10.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Bochum</span></span> &ndash; <a href="http://www.matrix-bochum.de/" class="fn org url">Matrix</a></td>
<td class="description">YUBELLADO L’AGE D’OR Jubiläumstour</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20031017">17.10.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Franfurt am Main</span></span> &ndash; <a href="http://www.mousonturm.de" class="fn org url">Mousonturm</a></td>
<td class="description">YUBELLADO L’AGE D’OR Jubiläumstour</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20031016">16.10.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Lingen (Ems)</span></span> &ndash; <a href="http://www.alterschlachthof.de/" class="fn org url">Alter Schlachthof</a></td>
<td class="description">YUBELLADO L’AGE D’OR Jubiläumstour</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20031004">04.10.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <a href="http://www.phonodrome.de/" class="fn org url">Phonodrome</a></td>
<td class="description">YUBELLADO L’AGE D’OR Jubiläumstour<br><a href="http://www.diesterne.de/galerie/Herbsttourfotos_2003.html">Fotos der Herbsttour</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20030814">14.08.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Köln</span></span> &ndash; <a href="http://www.kantine.com/" class="fn org url">Kantine</a></td>
<td class="description">Popkomm, L’AGE D’OR Jubiläum<br>
<a href="http://www77.kantine.com/konzerte_det.asp?nr=395">Informationen auf kantine.com</a><br>
<a href="http://www.ksta.de/wenn-einfach-alles-richtig-laeuft-13942446">Bericht des Kölner Stadtanzeigers</a>
</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20030705">05.07.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <span class="fn org">Loveboat/Bootstour mit der »Concordia«</span></td>
<td class="description"><a href="http://www.mopo.de/bootsfahrt-mit-den-sternen-19045418">Bericht der Hamburger Morgenpost</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20030704">04.07.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Waltrop</span></span> &ndash; <a href="http://www.waltroper-parkfest.de/" class="fn org url">Waltroper Parkfest</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20030703">03.07.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Augsburg</span></span> &ndash; <span class="fn org">Frischluft 2003 Open Air</span></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20030702">02.07.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Mainz</span></span> &ndash; <a href="http://www.schickundschoenclub.de/" class="fn org url">Kulturlounge schick&amp;schön</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20030613">13.06.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Hofstetten-Grünau</span></span> &ndash; <a href="http://www.nuke.at/" class="fn org url">Nuke Festival</a></td>
<td class="description"><a href="http://www.nuke.at/nukepics_03/sterne_rev.html">Fotos auf nuke.at</a><br>
<a href="http://web.archive.org/web/20040104202421/http://www.joynt.at/cms/music/article.asp?text=471">Interview mit den Sternen auf joynt.at</a><br>
<a href="http://www.joynt.at/static/foto/nuke5/index.html">Fotos von katanoy auf joynt.at</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20030518">18.05.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Regensburg</span></span> &ndash; <a href="http://www.alte-maelzerei.de/" class="fn org url">Alte Mälzerei</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20030517">17.05.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Bayreuth</span></span> &ndash; <a href="http://www.uniopenair.de/" class="fn org url">Uni Open Air</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20030516">16.05.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Magdeburg</span></span> &ndash; <a href="http://www.projekt7-magdeburg.de/" class="fn org url">Projekt 7</a></td>
<td class="description"><a href="http://www.fotocat.de/music/sterne/sterne-frame.html">Fotos auf fotocat.de</a><br>
<a href="konzertbericht-030516">Bericht von Martin (xitek)</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20030504">04.05.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <a href="http://www.westwerk-hamburg.de/" class="fn org url">Westwerk</a></td>
<td class="description">(Zwei Konzerte.)<br>
<a href="http://www.liveimwestwerk.de/">Fotos und Infos auf www.liveimwestwerk.de</a><br>
<a href="http://www.diesterne.de/galerie/Westwerkfotos.html">Fotos auf diesterne.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20030503">03.05.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <a href="http://www.westwerk-hamburg.de/" class="fn org url">Westwerk</a></td>
<td class="description"><a href="http://www.liveimwestwerk.de/">Fotos und Infos auf www.liveimwestwerk.de</a><br>
<a href="http://www.diesterne.de/galerie/Westwerkfotos.html">Fotos auf diesterne.de</a><br>
<a href="http://www.taz.de/pt/2003/05/03/a0296.nf/text.ges,1">Bericht der tageszeitung (taz)</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20030501">01.05.2003</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hannover</span></span> &ndash; <a href="http://www.musiktheater-bad.de/" class="fn org url">Musiktheater Bad</a></td>
<td class="description"><a href="http://www.musiktheater-bad.de/neulich1.html">Fotos auf musiktheater-bad.de</a></td>
</tr>

</tbody>
</table>

<!-- ************************************************************************************************* -->

<table class="termine" id="termine2002" summary="Termine und Berichte zu Konzerten im Jahr 2002">

<caption>Konzerte im Jahr 2002</caption>

<thead>
<tr>
<th scope="col">Datum</th>
<th scope="col" abbr="Ort">Veranstaltungsort</th>
<th scope="col" abbr="Infos">Weitere Informationen und Konzertberichte</th>
</tr>
</thead>

<tbody>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20021013">13.10.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hildesheim</span></span> &ndash; <a href="http://vierlinden-hildesheim.de/" class="fn org url">Vier Linden</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20021012">12.10.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Potsdam</span></span> &ndash; <a href="http://www.waschhaus.de/" class="fn org url">Waschhaus</a></td>
<td class="description"><a href="http://www.fotocat.de/music/sterne/sterne-frame.html">Fotos auf fotocat.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20021011">11.10.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Magdeburg</span></span> &ndash; <a href="http://www.dominionclub.de/Update/factory.htm" class="fn org url">Factory</a></td>
<td class="description"><a href="konzertbericht-021101">Bericht von Martin (xitek)</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20021010">10.10.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Leipzig</span></span> &ndash; <a href="http://www.nadir.org/nadir/initiativ/ci/" class="fn org url">Conne Island</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20021009">09.10.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Kassel</span></span> &ndash; <a href="http://www.hotel-reiss.de/" class="fn org url">Hotel Reiss</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20021008">08.10.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Nürnberg</span></span> &ndash; <a href="http://www.musikverein-concerts.de/" class="fn org url">k4</a></td>
<td class="description"><a href="http://www.mujuk.de/konzertberichte/diesterne.html">Bericht von Frank Nikol</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20021006">06.10.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Wien</span></span> &ndash; <a href="http://www.wuk.at/" class="fn org url">wuk</a></td>
<td class="description"><a href="http://www.livejournal.com/talkread.bml?journal=cafe_pop&amp;itemid=59751">Bericht von annaanalog</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20021005">05.10.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Linz</span></span> &ndash; <a href="http://www.posthof.at/" class="fn org url">Posthof</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20021004">04.10.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Innsbruck</span></span> &ndash; <a href="http://www.treibhaus.at/" class="fn org url">Treibhaus</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20021003">03.10.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-ch.png" width="18" height="12" alt="Schweiz" title="Konzert in der Schweiz"></span> <span class="locality">Bern</span></span> &ndash; <a href="http://www.hugo.ch/clubs/isc/" class="fn org url">Isc</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20021002">02.10.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-ch.png" width="18" height="12" alt="Schweiz" title="Konzert in der Schweiz"></span> <span class="locality">Winterthur</span></span> &ndash; <a href="http://www.salzhaus.ch/" class="fn org url">Salzhaus</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20021001">01.10.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-ch.png" width="18" height="12" alt="Schweiz" title="Konzert in der Schweiz"></span> <span class="locality">Basel</span></span> &ndash; <a href="http://www.sommercasino.ch/" class="fn org url">Sommercasino</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020929">29.09.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Freiburg</span></span> &ndash; <a href="http://www.jazzhaus.de/" class="fn org url">Jazzhaus</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020928">28.09.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Mannheim</span></span> &ndash; <a href="http://www.altefeuerwache.com/" class="fn org url">Alte Feuerwache</a></td>
<td class="description"><a href="http://www.morgenweb.de/archiv/langzeitarchiv/artikel/404643969.html">Bericht von Morgenweb (kostenpflichtige Anmeldung nötig)</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020927">27.09.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Darmstadt</span></span> &ndash; <a href="http://www.centralticket.de/" class="fn org url">Centralstation</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020926">26.09.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Düsseldorf</span></span> &ndash; <a href="http://www.zakk.de/" class="fn org url">Zakk</a></td>
<td class="description"><a href="http://www.triggerfish.de/wolff/home.cfm?p=504">Fotos von Christof Wolff auf triggerfish.de</a><br>
<a href="http://www.triggerfish.de/magazin/home.cfm?p=813">Bericht und Fotos auf triggerfish.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020925">25.09.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Dortmund</span></span> &ndash; <a href="http://www.soundgarden-dortmund.de/" class="fn org url">Soundgarden</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020924">24.09.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Bielefeld</span></span> &ndash; <a href="http://www.forum-bielefeld.com/" class="fn org url">Forum</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td class="dtstart" title="20020923">23.09.2002</td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Münster</span></span> &ndash; <a href="http://www.ballhaus-muenster.de/" class="fn org url">Ballhaus</a></td>
<td class="description">ins Ballhaus verlegt</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020922">22.09.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Bremen</span></span> &ndash; <a href="http://www.schlachthof-bremen.de/" class="fn org url">Schlachthof</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020921">21.09.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Lübeck</span></span> &ndash; <a href="http://www.treibsand-luebeck.de/" class="fn org url">Treibsand</a></td>
<td class="description"><a href="http://www.treibsand-luebeck.de/Galerie/Show%202002/Die%20Sterne.htm">Fotos auf treibsand-luebeck.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020920">20.09.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Rostock</span></span> &ndash; <a href="http://www.mauclub.de/" class="fn org url">Mau Club</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020825">25.08.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <a href="http://www.herzblut-st-pauli.de/" class="fn org url">Herzblut St. Pauli</a></td>
<td class="description"><a href="http://nachtlager.capt.de/herbert/sterne.htm">Fotos auf herbert.nachtlager.de</a><br>
<a href="http://www.diesterne.de/malzkorn2.html">Fotos des Herzblut-Konzerts auf diesterne.de</a><br>
<a href="http://www.fcstpauli.de/sp/saison/news/aktionen/stories/story79/index.html">Bericht auf der <abbr title="Fußballclub">FC</abbr> St. Pauli Netzseite</a><br>
<a href="http://www.mopo.de/der-weg-zu-den-sternen-19372522">Bericht der Hamburger Morgenpost</a><br>
<a href="http://www.taz.de/pt/2002/08/27/a0250.nf/text">Bericht der tageszeitung (taz)</a><br>
<a href="http://www.b-si.de/hefte/stories14/sterne2.htm">Bericht des b-side Magazins</a><br>
<a href="http://www.welt.de/daten/2002/08/27/0827hk352883.htx">Bericht der Welt (kostenlose Anmeldung nötig)</a>
</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020818">18.08.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Erfurt/Hohenfelden</span></span> &ndash; <a href="http://www.highfield.de/" class="fn org url">Highfield Festival</a></td>
<td class="description"><a href="http://www.musicmaniacs.de/archiv/public_html/intsterne.htm">Interview mit den Sternen im Anschluss des Festivals</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020817">17.08.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Weeze</span></span> &ndash; <a href="http://www.bizarre.de/" class="fn org url">Bizarre Festival</a></td>
<td class="description"><span lang="en">Visions Aftershow Party</span>. Hinweise zum <abbr title="Television">TV</abbr>-Konzertmitschnitt findet man unter <a href="./">Neuigkeiten</a>.<br>
<a href="chatlog2.txt"><span lang="en">Chat</span>-Transkript</a>
</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020814">14.08.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Eberschwang</span></span> &ndash; <a href="http://www.bulldogfest.com/" class="fn org url">Bulldogfest</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020811">11.08.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Feldkirch</span></span> &ndash; <a href="http://www.poolbar.at/" class="fn org url">Poolbar Festival</a></td>
<td class="description"><a href="http://www2.poolbar.at/public/text.php?aid=241">Bericht mit Fotos auf poolbar.at</a><br/>
<a href="http://www.vol.at/Pubs/Redaktion/Seiten/Musik/Musik-113646.shtm">Bericht auf vol.at</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020810">10.08.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Bad Tölz</span></span> &ndash; <a href="http://www.hillside-festival.de/" class="fn org url">Hillside Festival</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020629">29.06.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Bonn</span></span> &ndash; <a href="http://www.rheinkultur-festival.de/" class="fn org url">Rheinkultur</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020622">22.06.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Wiesbaden</span></span> &ndash; <a href="http://www.schlachthof-wiesbaden.de/" class="fn org url">Schlachthof Festival</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020621">21.06.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-ch.png" width="18" height="12" alt="Schweiz" title="Konzert in der Schweiz"></span> <span class="locality">Solothurn</span></span> &ndash; <span class="fn org">Festival</span></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020615">15.06.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">bei Salzburg</span></span> &ndash; <a href="http://www.frequency.at/" class="fn org url">Frequency Festival</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020607">07.06.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Dessau</span></span> &ndash; <a href="http://www.melt-openair.de/" class="fn org url">Melt Festival</a></td>
<td class="description"><a href="http://www.melt-openair.de/artist.php?id=49">Infos zu den Sternen auf melt-openair.de</a><br>
<a href="http://www.radiozone.de/festivals/melt/melt-archiv/melt2002-sterne/melt2002-sterne.html">Fotos auf radiozone.de</a><br>
<a href="http://www.fotocat.de/music/sterne/sterne-frame.html">Fotos auf fotocat.de</a>
</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020531">31.05.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Neustrelitz</span></span> &ndash; <a href="http://www.immergutrocken.de/" class="fn org url">Immergut Festival</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020419">19.04.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <a href="http://www.markthalle-hamburg.de/" class="fn org url">Markthalle</a></td>
<td class="description">25 Jahre Markthalle Festival<br>
<a href="http://www.gaesteliste.de/konzerte/show.html?_nr=330">Bericht auf Gaesteliste.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020324">24.03.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hamburg</span></span> &ndash; <a href="http://www.markthalle-hamburg.de/" class="fn org url">Markthalle</a></td>
<td class="description"><a href="http://www.gaesteliste.de/konzerte/show.html?_nr=330">Bericht mit Fotos auf Gaesteliste.de</a><br></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020323">23.03.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Hannover</span></span> &ndash; <a href="http://www.faustev.de/" class="fn org url">Faust</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020322">22.03.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Essen</span></span> &ndash; <a href="http://www.asta.uni-essen.de/kkc/kkc.html" class="fn org url">KKC</a></td>
<td class="description"><a href="http://www.zeichensprache.de/musik/seiten/002/sterne_konzertkritik.php">Konzertkritik auf zeichensprache.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020321">21.03.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Köln</span></span> &ndash; <a href="http://www.primeclub.de/" class="fn org url">Prime Club</a></td>
<td class="description"><a href="http://www.pds-aachen.de/konzertkritiken/diesterne.html">Bericht auf pds-aachen.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020320">20.03.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Frankfurt</span></span> &ndash; <a href="http://www.gallustheater.de/" class="fn org url">Gallus Theater</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020319">19.03.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Schorndorf</span></span> &ndash; <a href="http://www.club-manufaktur.de/" class="fn org url">Manufaktur</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020318">18.03.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-ch.png" width="18" height="12" alt="Schweiz" title="Konzert in der Schweiz"></span> <span class="locality">Zürich</span></span> &ndash; <a href="http://www.dynamo.ch/" class="fn org url">Dynamo</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020317">17.03.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">München</span></span> &ndash; <a href="http://www.feierwerk.de/" class="fn org url">Feierwerk</a></td>
<td class="description"><a href="http://www.plattenfreun.de/neues/2002_03_01_archive.html#10945186">Bericht von plattenfreun.de</a><br>
<a href="http://www.gaesteliste.de/konzerte/show.html?_nr=311">Bericht mit Fotos auf Gaesteliste.de</a><br>
<a href="http://www.plattenfreun.de/display/d14_2002.htm#wfoto">Die Sterne am Tresen (Foto, plattenfreun.de)</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020316">16.03.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-at.png" width="18" height="12" alt="Österreich" title="Konzert in Österreich"></span> <span class="locality">Wien</span></span> &ndash; <a href="http://www.wuk.at/" class="fn org url">Wuk</a></td>
<td class="description"><a href="http://derstandard.at/?id=896664">Videointerview und Mitschnitte vom Wiener Konzert auf derstandard.at</a>
</td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020315">15.03.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Dresden</span></span> &ndash; <a href="http://starclub.vakuum.net/" class="fn org url">Star Club</a></td>
<td class="description"><a href="http://www.mainstage.de/mainstage/php/global/v4_index.php?page=konzertbericht&amp;id=38">Bericht auf mainstage.de</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020314">14.03.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Berlin</span></span> &ndash; <a href="http://www.columbiafritz.de/" class="fn org url">Columbia Fritz</a></td>
<td class="description"><a href="http://www.taz.de/pt/2002/03/16/a0210.nf/text">Bericht der tageszeitung (taz)</a><br>
<a href="http://www.visions.de/konzerte/user_happenings/545/">Leserbericht auf visions.de (kostenlose Anmeldung nötig)</a></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020111">11.01.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">München</span></span> &ndash; <a href="http://www.atomic.de/" class="fn org url">Atomic Cafe</a></td>
<td class="description"></td>
</tr>

<tr class="vevent">
<td><span class="additional"><span class="summary">Konzert: Die Sterne</span>, <span class="category">Musik</span>, </span><span class="dtstart" title="20020101">01.01.2002</span></td>
<td class="location vcard"><span class="adr"><span class="country-name"><img src="../img/flag-de.png" width="18" height="12" alt="Deutschland" title="Konzert in Deutschland"></span> <span class="locality">Berlin</span></span> &ndash; <a href="http://www.volksbuehne-berlin.de/" class="fn org url">Volksbühne</a></td>
<td class="description"><a href="http://www2.rz.hu-berlin.de/humbug/reviews/music/sterne.html">Bericht des Berliner Studentenmagazins humbug</a></td>
</tr>

</tbody>
</table>

</div>

<h2>Quellen</h2>

<!-- http://www.virgin.de/xml/5/3250594/termine.html -->
<ul>
<li><a href="http://www.diesterne.de/news/">News der offiziellen Sterne-Webseite</a></li>
<li><a href="http://www.powerline-agency.com/tour/index_n.php#sterne">Powerline Agency Tourdaten</a></li>
</ul>

</div></div>

<div id="footer">
<a href="#navigation">Nach oben zur Navigation</a> &#8211; <a href="kontakt">Kontakt</a>
</div>

<script src="sterne.js"></script>
</body>
</html>
