<?php include("top.php"); ?>
<?php include("nav.php"); ?>
<h1>
Usare Python su PythonAnywhere
</h1>
<p>
PythonAnywhere
(<a href="https://www.pythonanywhere.com" target="_blank" rel="noopener noreferrer">www.pythonanywhere.com</a>)
è un servizio online gratuito che ti permette di sviluppare ed eseguire programmi Python
direttamente nel browser. È un ambiente Linux completo, dotato di un editor di testo nel browser
con evidenziazione della sintassi. Per usare PythonAnywhere in questo corso ti basta un browser web:
non devi installare nulla.
</p>
<p>
Questo significa che puoi seguire il corso anche su dispositivi con restrizioni di sistema,
come iPad, iPhone, Android, Chromebook o Windows in modalità S. Puoi
usare PythonAnywhere anche se lavori su un computer aziendale o scolastico che non
consente di installare software.
</p>
<h2>Creare un account</h2>
<p>
Per usare PythonAnywhere devi creare un account. Esiste un piano gratuito
che copre tutte le esigenze di questo corso fino al Capitolo 15.
</p>
<p>
PythonAnywhere consente di mantenere un account gratuito a tempo indeterminato, purché tu
continui ad accedere e a rinnovarlo. Esistono anche piani a pagamento economici se vuoi più spazio
su disco, maggiore potenza di calcolo o funzionalità aggiuntive per i tuoi progetti personali, ma
il piano gratuito è del tutto sufficiente per questo corso.
</p>
<h2>Scrivere il tuo primo programma su PythonAnywhere</h2>
<p>
Una volta effettuato l'accesso a PythonAnywhere, vai nella scheda <b>Files</b> e crea un nuovo file chiamato <b>hello.py</b>
nella tua cartella home (qualcosa di simile a <b>/home/drchuck</b>). Inserisci nel file la riga seguente:
</p>
<pre>
print('Hello world')
</pre>
<p>
Salva il file e premi <b>Run</b>; dovresti vedere:
</p>
<pre>
Hello world
&gt;&gt;&gt;
</pre>
<p>
Poi cambia il testo in <code>'Hello PY4E world'</code>, premi <b>Save</b> e poi <b>Run</b>: dovrebbe eseguire il programma
modificato.
</p>
<p>
Il pulsante <b>Run</b> va bene per programmi di poche righe, ma quando cominci a lavorare su programmi più complessi
ti servirà usare una shell Linux (riga di comando). All'inizio può sembrare un po' insolito,
ma imparare un po' di Linux è un'ottima idea perché è il sistema dominante sui server.
</p>
<h2>Usare la shell Linux su PythonAnywhere</h2>
<p>
Il modo più comodo è tenere aperte contemporaneamente due schede del browser: una sulla
schermata <b>Files</b> e l'altra sulla schermata <b>Consoles</b>. Se hai già una
console bash aperta puoi tornarci, altrimenti avvia una nuova console <b>Bash</b>. Dopo l'avvio
dovresti vedere qualcosa del genere:
</p>
<pre>
14:12 ~ $
</pre>
<p>
Questo è il prompt dei comandi di Linux. Eseguiamo il tuo programma <b>hello.py</b> dalla riga di comando:
</p>
<pre>
14:12 ~ $ cd
14:14 ~ $ pwd
/home/drchuck
14:15 ~ $ ls -l
-rw-rw-r--  1 drchuck registered_users   27 Mar 29 14:15 hello.py
14:16 ~ $ python3 hello.py
Hello PY4E world
14:16 ~ $
</pre>
<p>
Ecco cosa fanno questi comandi:
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
Ti consigliamo di iniziare a usare la shell bash di Linux per eseguire il codice fin dall'inizio,
perché più avanti ti servirà per eseguire programmi più complessi.
</p>
<h2>Alcuni suggerimenti utili sulla console bash</h2>
<p>
Puoi scorrere i comandi precedenti premendo i tasti freccia su e freccia giù ed eseguirli di nuovo
premendo Invio: ti farà risparmiare molta digitazione.
Se preferisci tenere lo schermo ordinato, puoi pulire il buffer di scorrimento
premendo contemporaneamente il tasto <b>Command</b> e il tasto <b>K</b> (o digitando <b>clear</b>).</p>

<h2>Modificare i file su PythonAnywhere</h2>
<p>
Ci sono tre modi per modificare i file nel tuo ambiente PythonAnywhere, dal più semplice
al più "da esperti". Ti basta sceglierne uno:</p>
<ol>
<li>
Vai nella dashboard principale di PythonAnywhere, sfoglia i file, apri la cartella giusta e modifica il file dal browser.
</li><li>
<p>Oppure dalla riga di comando:</p>
<pre>
cd ~
nano hello.py
</pre>
<p>Salva il file premendo <b>CTRL-X</b>, poi <b>Y</b> e Invio.</p>
</li><li>
Non provare questo terzo modo — il più difficile e il più apprezzato dagli esperti Linux — senza un aiuto
se è la prima volta che usi l'editor di testo <b>vi</b>.
<pre>
cd ~
vi hello.py
</pre>
Una volta aperto <b>vi</b>, sposta il cursore nel punto da modificare e premi il tasto
<b>i</b> per entrare in modalità inserimento (INSERT); digita il nuovo testo e premi
il tasto <b>Esc</b> quando hai finito. Per salvare e uscire digita <b>:wq</b>
seguito da <b>Invio</b>. Se ti perdi, premi <b>Esc</b>, digita <b>:q!</b>
e premi <b>Invio</b> per uscire senza salvare.
</li>
</ol>
<p>Se conosci già un altro editor da riga di comando su Linux, puoi usare quello per modificare i file. In generale,
scoprirai che spesso è più rapido e semplice fare piccole modifiche ai file da riga di comando
piuttosto che con un'interfaccia grafica completa. Inoltre, quando inizierai a distribuire vere applicazioni in ambienti di produzione
come Google, Amazon o Microsoft, spesso avrai a disposizione solo la riga di comando.</p>

<?php include('footer.php');?>
