<?php

if ( ! defined('COOKIE_SESSION') ) {
    define('COOKIE_SESSION', true);
}

use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

if ( file_exists(__DIR__ . '/sanity.php') ) {
    require_once "sanity.php";
}
require_once "top.php";
require_once "nav.php";
?>
<main id="container">
<div style="margin-left: 10px; float:right">
<iframe width="400" height="225" src="https://www.youtube.com/embed/UjeNA_JtXME?list=PLlRFEj9H3Oj7Bp8-DfGpfAfDBiblRfl5p&rel=0" frameborder="0" allowfullscreen title="Video introduttivo del corso Python per tutti"></iframe>
</div>
<h1>Python per tutti</h1>
<?php
$front_page_text = null;
if ( class_exists('\Tsugi\UI\Pages') && isset($_SESSION['id']) && isset($_SESSION['context_id']) ) {
    $front_page_text = \Tsugi\UI\Pages::getFrontPageText($_SESSION['context_id']);
}
if ( $front_page_text ) {
    echo $front_page_text;
} else {
?>
<?php if ( isset($_SESSION['id']) ) { ?>
<p>
Benvenuto nel sito gratuito di <em>Python per tutti</em> (Python for Everybody).
Ora che hai effettuato l'accesso, puoi usare le funzionalità del corso offerte da questo sito web.
</p>
<ul>
<li>
Mentre segui le <a href="lessons">Lezioni</a> del corso vedrai anche i collegamenti ai correttori automatici (autograder). Puoi svolgere gli esercizi con i correttori automatici e ottenere un punteggio.</li>
<li>
Puoi tenere traccia dei tuoi progressi nel corso con lo strumento <a href="assignments">Compiti</a> e, quando completi un gruppo di esercizi, puoi ottenere un <a href="badges">Badge</a>.
Puoi scaricare questi badge e pubblicarli sul tuo sito web, oppure fare riferimento agli URL dei badge presenti su questo sito.</li>
<li>
Se vuoi usare questi materiali con licenza Creative Commons nei tuoi corsi, puoi
<a href="materials.php">scaricare o collegare</a> le risorse di questo sito,
<a href="tsugi/cc/">esportare i materiali del corso</a> in formato
IMS Common Cartridge®, oppure richiedere
<a href="tsugi/admin/key/index.php">chiave e secret</a>
IMS Learning Tools Interoperability® (LTI®)
per avviare i correttori automatici dal tuo LMS.
</li>
</ul>
<?php } else { ?>
<p>
Questo sito web raccoglie un insieme gratuito di
<a href="lessons">materiali</a>,
<a href="https://www.youtube.com/watch?v=UjeNA_JtXME&list=PLlRFEj9H3Oj7Bp8-DfGpfAfDBiblRfl5p&index=1" target="_blank" rel="noopener noreferrer">videolezioni</a>,
un <a href="book.php">libro di testo</a>
ed esercizi per aiutare gli studenti a imparare a programmare in Python.
Puoi seguire questo corso anche su:
</p>
<ul>
<li><a href="https://www.coursera.org/specializations/python" target="_blank" rel="noopener noreferrer">Coursera: Python for Everybody Specialization</a></li>
<li><a href="https://www.edx.org/bio/charles-severance" target="_blank" rel="noopener noreferrer">edX: Python for Everybody</a></li>
<li><a href="https://www.youtube.com/watch?v=8DvywoWv6fI" target="_blank" rel="noopener noreferrer">FreeCodeCamp</a></li>
<li><a href="https://online.umich.edu/series/python-for-everybody/" target="_blank" rel="noopener noreferrer">Certificati gratuiti per studenti e personale dell'Università del Michigan</a></li>
</ul>
<p>
Se <a href="login">accedi</a> a questo sito, ti iscrivi a un corso online gratuito, aperto e globale: hai a disposizione un registro dei voti, esercizi con correzione automatica, forum di discussione e la possibilità di ottenere badge per il tuo lavoro.</p>
<p>
Prendiamo molto sul serio la tua privacy su questo sito: per maggiori dettagli puoi consultare la nostra
<a href="privacy">Informativa sulla privacy</a>.
</p>
<p>
Se vuoi usare questi materiali nei tuoi corsi, puoi scaricare o collegare le risorse presenti su questo sito,
<a href="tsugi/cc/">esportare i materiali del corso</a> in formato
IMS Common Cartridge®, oppure richiedere
<a href="tsugi/admin/key/index.php">chiave e secret</a>
IMS Learning Tools Interoperability® (LTI®)
per avviare i correttori automatici dal tuo LMS.
</p>
<p>
Il codice di questo sito — compresi i correttori automatici, le slide e i contenuti del corso — è disponibile su
<a href="https://github.com/csev/py4e" target="_blank" rel="noopener noreferrer">GitHub</a>. Questo significa che puoi creare una tua copia del sito del corso, pubblicarla e rielaborarla come preferisci. Ancora meglio, puoi tradurre l'intero sito (e il corso) nella tua lingua e pubblicarlo. Nel repository GitHub trovi alcune
<a href="https://github.com/csev/py4e/blob/master/TRANSLATION.md" target="_blank" rel="noopener noreferrer">istruzioni su come tradurre questo corso</a>.
</p>
<?php } ?>
<p>
Questo sito usa il framework <a href="http://www.tsugi.org" target="_blank" rel="noopener noreferrer">Tsugi</a>
per integrare un sistema di gestione dell'apprendimento (LMS) e fornire i correttori automatici.
Se ti interessa collaborare o creare siti simili in autonomia, visita il sito
<a href="http://www.tsugi.org" target="_blank" rel="noopener noreferrer">tsugi.org</a> o contattami.
</p>
<p>
E sì, il Dr. Chuck ha davvero un'auto da corsa: si chiama
<a href="https://www.sakaiger.com/sakaicar/" target="_blank" rel="noopener noreferrer">SakaiCar</a>.
Gareggia in un campionato chiamato
<a href="https://www.24hoursoflemons.com" target="_blank" rel="noopener noreferrer">24 Hours of Lemons</a>.
</p>
<?php } /* Fine controllo front page */ ?>
<!--
<?php
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
</main>
<?php
require_once "footer.php";
