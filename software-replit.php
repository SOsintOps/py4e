<?php include("top.php"); ?>
<?php include("nav.php"); ?>
<h1>
Usare Python su Replit
</h1>
<p>
Replit
(<a href="https://www.replit.com" target="_blank" rel="noopener noreferrer">www.replit.com</a>)
è un servizio online gratuito che ti permette di sviluppare ed eseguire programmi
direttamente nel browser. È un ambiente completo dotato di un editor di testo nel browser
con evidenziazione della sintassi. Per usare Replit in questo corso ti basta un browser web:
non devi installare nulla.
</p>
<p>
Puoi risparmiare tempo usando il modello PY4E preparato dal Dr. Chuck su Replit partendo da:
<a href="https://replit.com/@ChuckSeverance/PY4E?v=1" target="_blank" rel="noopener noreferrer">
https://replit.com/@ChuckSeverance/PY4E?v=1
</a>. Include già i file che userai nel corso e il codice di esempio.
</p>
<p>
Questo significa che puoi seguire il corso anche su dispositivi con restrizioni di sistema,
come iPad, iPhone, Android, Chromebook o Windows in modalità S. Puoi
usare Replit anche se lavori su un computer aziendale o scolastico che non
consente di installare software.
</p>
<h2>Creare un account</h2>
<p>
Per usare Replit devi creare un account. Esiste un piano gratuito
che copre tutte le esigenze di questo corso fino al Capitolo 15.
</p>
<h2>Scrivere il tuo primo programma su Replit</h2>
<p>
Una volta effettuato l'accesso a Replit, vai nella scheda dei file e crea un nuovo file chiamato <b>hello.py</b>
nella tua cartella home (qualcosa di simile a <b>/home/runner/PY4E</b>). Inserisci nel file la riga seguente:
</p>
<pre>
print('Hello world')
</pre>
<p>
Salva il file e premi <b>Run</b>; dovresti vedere:
</p>
<pre>
Hello world
</pre>
<p>
Poi cambia il testo in <code>'Hello PY4E world'</code> e premi <b>Run</b>: dovrebbe eseguire il programma
modificato.
</p>
<p>
Il pulsante <b>Run</b> va bene per programmi di poche righe, ma quando cominci a lavorare su programmi più complessi
potrebbe servirti usare una shell Linux (riga di comando). All'inizio può sembrare un po' insolito,
ma imparare un po' di Linux è un'ottima idea perché è il sistema dominante sui server.
</p>
<h2>Usare la shell su Replit</h2>
<p>
Dopo essere passato dalla scheda <b>Console</b> alla scheda <b>Shell</b> nel pannello di destra,
dovresti vedere qualcosa del genere:
</p>
<pre>
~/PY4E$
</pre>
<p>
Questo è il prompt dei comandi di Linux. Eseguiamo il tuo programma <b>hello.py</b> dalla riga di comando:
</p>
<pre>
~/PY4E$ cd
~/PY4E$ pwd
/home/runner/PY4E
~/PY4E$ ls -l
total 80
-rw-r--r-- 1 runner runner    21 Jul 25 18:16 hello.py
-rw-r--r-- 1 runner runner    20 Jul 25 16:12 main.py
-rw-r--r-- 1 runner runner 62849 Jun 19 04:40 poetry.lock
-rw-r--r-- 1 runner runner   327 Jun 19 04:39 pyproject.toml
-rw-r--r-- 1 runner runner   382 Jul  9 17:22 replit.nix
drwxr-xr-x 1 runner runner    56 Oct 26  2021 venv
~/PY4E$ python3 hello.py
Hello world
</pre>
<p>
Ecco cosa fanno i comandi che stiamo digitando nella shell Linux:
</p>
<ul>
<li><b>cd</b> – Cambia directory spostandosi nella cartella home: lo facciamo per essere sicuri di partire dal
punto giusto nella gerarchia delle cartelle.</li>
<li><b>pwd</b> – <em>Print Working Directory</em>: questo comando ti dice dove ti trovi nella gerarchia
delle cartelle. Siamo nella nostra cartella home. Linux è un sistema multiutente e ogni utente ha la propria
directory "home", sotto la quale puoi organizzare le tue cartelle.</li>
<li><b>ls -l</b> – Elenca i file e le sottocartelle nella cartella corrente. L'opzione <b>-l</b>
mostra dettagli come permessi, data di modifica e dimensione dei file.</li>
<li><b>python3 hello.py</b> – Esegue Python sul tuo file.</li>
</ul>
<p>
Ti consigliamo di prendere confidenza con la shell bash di Linux fin dall'inizio,
perché più avanti ti servirà per eseguire programmi più complessi.
</p>
<h2>Alcuni suggerimenti utili sulla console bash</h2>
<p>
Puoi scorrere i comandi precedenti premendo i tasti freccia su e freccia giù ed eseguirli di nuovo
premendo Invio: ti farà risparmiare molta digitazione.
Se preferisci tenere lo schermo ordinato, puoi pulire il buffer di scorrimento
premendo contemporaneamente il tasto <b>Command</b> e il tasto <b>K</b> (o digitando <b>clear</b>).</p>

<h2>Modificare i file su Replit</h2>
<p>
Ci sono tre modi per modificare i file nel tuo ambiente Replit, dal più semplice
al più "da esperti". Ti basta sceglierne uno:</p>
<ol>
<li>
Usa il pannello principale dei file di Replit, sfoglia le cartelle e modifica il file dal browser.
</li><li>
<p>Oppure dalla riga di comando:</p>
<pre>
cd ~
nano hello.py
</pre>
<p>(La prima volta che esegui nano, Replit potrebbe doverlo installare automaticamente.)</p>
<p>Salva il file premendo <b>CTRL-X</b>, poi <b>Y</b> e Invio.</p>
</li><li>
Non provare questo terzo modo — il più difficile e il più apprezzato dagli esperti Linux — senza un aiuto
se è la prima volta che usi l'editor di testo <b>vim</b>.
<pre>
cd ~
vim hello.py
</pre>
<p>(La prima volta che esegui vim, Replit potrebbe doverlo installare automaticamente.)</p>
<p>
Una volta aperto <b>vim</b>, sposta il cursore nel punto da modificare e premi il tasto
<b>i</b> per entrare in modalità inserimento (INSERT); digita il nuovo testo e premi
il tasto <b>Esc</b> quando hai finito. Per salvare e uscire digita <b>:wq</b>
seguito da <b>Invio</b>. Se ti perdi, premi <b>Esc</b>, digita <b>:q!</b>
e premi <b>Invio</b> per uscire senza salvare.</p>
</li>
</ol>
<p>Quando inizierai a distribuire vere applicazioni in ambienti di produzione
come Google, Amazon o Microsoft, spesso avrai a disposizione solo la riga di comando.</p>

<?php include('footer.php');?>
