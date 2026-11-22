<?php include("top.php"); ?>
<?php include("nav.php"); ?>
<h1>
Iniziare con Python su Macintosh
</h1>
<p>Su macOS (Macintosh OS X) Python è spesso già disponibile o facile da aggiungere, quindi la prima cosa che ti serve
è un editor di testo per la programmazione.
</p>
<b>Installare un editor di testo per la programmazione</b>
<p>Se hai già installato un editor per programmatori come
<a href="https://code.visualstudio.com/" target="_blank" rel="noopener noreferrer">VS Code</a>, puoi usarlo nel corso,
oppure puoi installarlo sul tuo sistema.
</p>
<p>
Se l'installazione di VS Code ti sembra un po' complessa, consigliamo l'editor di testo gratuito e open source
<a href="https://phcode.io/" target="_blank" rel="noopener noreferrer">Phoenix Code</a>: è facile
da installare e ha tutto ciò che serve per il corso.
</p>

<h1>Scrivere un programma Python 3 su Macintosh</h1>
<p>
Abbiamo preparato un breve
<a href="https://www.youtube.com/watch?v=rI26CVAAzL0" target="_blank" rel="noopener noreferrer">
video passo per passo</a> che mostra come usare un editor per programmatori e scrivere il tuo primo programma Python 3.
Questo video usa l'editor Phoenix Code — che consigliamo di installare e usare, in alternativa a VS Code, se non hai già
un editor di testo per la programmazione.
</p>

<h1>Avviare il Terminale su macOS</h1>
<p>
Il programma Terminale su Macintosh si trova in <b>Macintosh HD -> Applicazioni -> Utility -> Terminale</b>.
</p>
<p>
Ci sono diverse scorciatoie comode. Puoi fare clic sul pulsante di ricerca Spotlight in alto a destra
sullo schermo, digitare <b>terminal</b> (o <b>terminale</b>) e avviare Terminale dall'elenco dei risultati.
</p>
<p>
Puoi mantenere Terminale nel Dock una volta avviato: fai clic tenendo premuto sull'icona di Terminale nel Dock
e seleziona "Opzioni -> Mantieni nel Dock". In questo modo potrai avviarlo rapidamente con un clic.
</p>
<h1>Dove ti trovi?</h1>
<p>
Quando la riga di comando si avvia, ti trovi nella tua directory "home".
In tutti questi esempi, sostituisci <b>csev</b> con il tuo nome utente.
</p>
<pre>
    Directory home su Macintosh: 		/Users/csev
</pre>
<p>
    Il prompt della riga di comando di solito mostra un indizio sulla tua posizione
    nella struttura delle cartelle del disco. Se vuoi sapere con esattezza
    dove ti trovi, su Macintosh usa il comando <b>pwd</b>.
</p>
<pre>
    udhcp-macvpn-624:~ csev$ pwd
    /Users/csev
    udhcp-macvpn-624:~ csev$ 
</pre>

<h1>Come spostarsi?</h1>
<p>
Di solito, la prima cosa da fare quando apri un'interfaccia a riga di comando
è spostarti nella cartella giusta. Ad esempio, per eseguire un file salvato sulla Scrivania (Desktop), il comando è
<b>cd Desktop</b>:</p>
<pre>
    udhcp-macvpn-624:~ csev$ pwd
    /Users/csev
    udhcp-macvpn-624:~ csev$ cd Desktop
    udhcp-macvpn-624:Desktop csev$ pwd
    /Users/csev/Desktop
    udhcp-macvpn-624:Desktop csev$
</pre>
<p>
    <b>Trucco utile:</b> con il comando <b>cd</b> puoi digitare solo una parte del nome di una cartella, come Desktop,
    e poi premere il tasto TAB: il sistema completerà automaticamente il nome della cartella
    se hai digitato abbastanza caratteri perché possa indovinare con precisione.
</p>
<p><b>Tornare indietro (o salire di livello)</b></p>
<p>
Puoi cambiare directory passando alla cartella padre (quella "sopra" la cartella in cui
ti trovi) usando il comando <b>cd ..</b>, che significa semplicemente "sali di un livello".
</p>
<pre>
    udhcp-macvpn-624:Desktop csev$ pwd
    /Users/csev/Desktop
    udhcp-macvpn-624:Desktop csev$ cd ..
    udhcp-macvpn-624:~ csev$ pwd
    /Users/csev
    udhcp-macvpn-624:~ csev$ 
</pre>
<p><b>Se ti perdi...</b></p>
<p>
Se non riesci a capire in quale cartella ti trovi o non riesci
a raggiungere la cartella desiderata, per tornare alla directory "home" chiudi e
riapri la finestra del Terminale.
</p>
<p><b>Quali file e cartelle ci sono qui?</b></p>
<p>
Puoi elencare il contenuto della directory corrente usando il comando <b>ls -l</b>:</p>
<pre>
    udhcp-macvpn-624:Desktop csev$ pwd
    /Users/csev/Desktop
    udhcp-macvpn-624:Desktop csev$ ls -l 
    total 8
    -rw-r--r--  1 csev  staff   15 Sep 16 15:17 hello.py
    udhcp-macvpn-624:Desktop csev$ 
</pre>
<h1>Eseguire il tuo programma Python nel Terminale</h1>
<p>
Avvia Terminale, spostati nella directory corretta e digita il comando seguente:</p>
<pre>
    python3 hello.py
</pre>
<p>Questo comando carica l'interprete Python 3 ed esegue il file (ad esempio <b>hello.py</b> o <b>firstprog.py</b>), mostrando l'output
del programma ed eventuali errori nella finestra del Terminale.</p>
<p>
<b>Alcuni suggerimenti utili sul Terminale di Macintosh</b></p>
<p>
Puoi scorrere i comandi precedenti premendo i tasti freccia su e freccia giù ed eseguirli di nuovo
premendo Invio: ti farà risparmiare molta digitazione.
Se preferisci tenere lo schermo ordinato, puoi pulire il buffer di scorrimento
premendo contemporaneamente il tasto Comando (Command) e il tasto K.</p>
<?php include('footer.php');?>
