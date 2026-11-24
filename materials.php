<?php include("top.php");?>
<?php include("nav.php");?>
<div id="iframe-dialog" title="Finestra di sola lettura" style="display: none;">
   <iframe name="iframe-frame" style="height:600px" id="iframe-frame"
    src="<?= $OUTPUT->getSpinnerUrl() ?>" title="Scarica i materiali del corso"></iframe>
</div>
<h1>Usare questo corso nel tuo LMS locale</h1>
<p>
Puoi usare, riutilizzare, rielaborare e conservare liberamente i materiali di questo sito nei tuoi corsi.
Quasi tutto il materiale di questo sito web è rilasciato con licenza Creative Commons Attribution. Qui sotto trovi
i collegamenti ai contenuti scaricabili e ad altre fonti dei materiali del corso.</p>
<ul>
<li>
<p>
Se il tuo LMS supporta
<a href="https://www.imsglobal.org/activity/learning-tools-interoperability" target="_blank" rel="noopener noreferrer">
IMS Learning Tools Interoperability®</a> versione 1.x, puoi accedere e richiedere l'accesso
agli strumenti di questo sito. Assicurati di indicare se ti serve una chiave LTI 1.x.
Quando riceverai la chiave, ti verranno fornite anche le istruzioni su come usare
le tue credenziali.
</p>
</li>
<li>
<p>
<a href="#" title="Scarica i materiali del corso"
  onclick="showModalIframeUrl(this.title, 'iframe-dialog', 'iframe-frame', 'tsugi/cc/select', _TSUGI.spinnerUrl, true); return false;" >
  Scarica i materiali del corso
  </a> in formato
<a href="https://www.imsglobal.org/cc/index.html" target="_blank" rel="noopener noreferrer">
IMS Common Cartridge®</a>, da importare in un LMS come Sakai, Moodle, Canvas,
Desire2Learn, Blackboard o simili.
Dopo aver caricato il pacchetto Cartridge, ti serviranno una chiave e un secret LTI per attivare gli
strumenti LTI inclusi nel pacchetto.
</p>
</li>
<li>
<p>
Se il tuo LMS supporta
<a href="https://www.imsglobal.org/specs/lticiv1p0" target="_blank" rel="noopener noreferrer">
Learning Tools Interoperability® Content-Item Message</a>, puoi accedere,
richiedere una chiave e un secret LTI 1.x e installare questo sito web
nel tuo LMS come App Store / Learning Object Repository: in questo modo puoi
costruire il tuo corso dentro l'LMS scegliendo strumenti e contenuti di questo sito
uno alla volta. Quando riceverai chiave e secret, ti verranno fornite anche le
istruzioni per configurare l'"app store" nel tuo LMS.
</p>
</li>
<li>
<p>
Se il tuo LMS non supporta né Content-Item né Common Cartridge, ma supporta LTI,
puoi copiare a mano i collegamenti di questi materiali nel tuo LMS uno per uno. Abbiamo
una <a href="<?= $CFG->apphome ?>/lessons/intro?nostyle=yes">vista essenziale delle lezioni</a>
pensata apposta per rendere questa operazione il più semplice possibile.
</p>
</li>
</ul>
<p><b><a href="others">Corsi e siti web che usano questo materiale</a></b>
</p>
<p>Questo sito web usa il software <a href="http://www.tsugi.org/" target="_blank" rel="noopener noreferrer">Tsugi</a>
sia per ospitare i correttori automatici sia per rendere disponibili questi materiali in modo che possano essere
integrati facilmente in un sistema di gestione dell'apprendimento (LMS) come
<a href="http://www.sakaiproject.org/" target="_blank" rel="noopener noreferrer">Sakai</a>, Moodle, Canvas, Desire2Learn, Blackboard
o simili.
</p>

<h1>Collegamenti ai materiali del corso</h1>
<ul>
    <li>Videolezioni
    <ul>
    <li><a href="https://www.youtube.com/playlist?list=PLlRFEj9H3Oj7Bp8-DfGpfAfDBiblRfl5p" target="_blank" rel="noopener noreferrer">Playlist su YouTube</a></li>
    <li><a href="https://itunes.apple.com/us/podcast/python-for-everybody-video/id1214664324" target="_blank" rel="noopener noreferrer">Video su iTunes</a></li>
    <li><a href="http://amzn.to/2mFrCuh" target="_blank" rel="noopener noreferrer">Amazon Prime Video</a></li>
    </ul>
    </li>
    <li>Lezioni audio
    <ul>
    <li><a href="https://itunes.apple.com/us/podcast/python-for-everybody-audio-py4e/id1214665693" target="_blank" rel="noopener noreferrer">Audio su iTunes</a></li>
    <li><a href="https://play.google.com/music/listen?u=0#/ps/Ijgj3aofh6m73rps4wtdk6djhv4" target="_blank" rel="noopener noreferrer">Audio su Google Play</a></li>
    </ul>
    </li>
    <li>
        <a href="lectures3/" target="_blank" rel="noopener noreferrer">Slide delle lezioni e dispense</a>
    </li>
    <li>
        <a href="code3.zip" target="_blank" rel="noopener noreferrer">Codice di esempio (ZIP)</a>
        (<a href="code3/" target="_blank" rel="noopener noreferrer">singoli file</a>)
    </li>
    <li>
        <a href="book.php">Libro di testo gratuito</a>
    </li>
    <li>
        Tutti i contenuti del corso e il software dei correttori automatici sono disponibili su
        <a href="https://github.com/csev/py4e" target="_blank" rel="noopener noreferrer">
        GitHub</a> con licenza Creative Commons o Apache 2.0.
    </li>
</ul>
<p>
Se ti interessa tradurre il libro o altri materiali online in un'altra lingua, trovi alcune
<a href="https://github.com/csev/py4e/blob/master/TRANSLATION.md" target="_blank" rel="noopener noreferrer">
istruzioni su come tradurre questo corso</a> nel repository GitHub.
Se stai iniziando una traduzione, contattami così possiamo coordinarci.
</p>
<h1>Archivio audio</h1>
<p>
Qui trovi un archivio delle
<a href="https://archive.org/details/201509UMSI502Podcasts_201601" target="_blank" rel="noopener noreferrer">registrazioni delle lezioni dal vivo</a>
del corso SI502 tenuto in presenza alla School of Information dell'Università del Michigan nell'autunno 2015.
</p>


<?php include("footer.php");
