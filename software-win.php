<?php include("top.php"); ?>
<?php include("nav.php"); ?>
<h1>Installare Python su Windows 11</h1>
<p><b>Nota:</b> qualsiasi versione ragionevolmente recente di Python va bene per questo corso.
Se sul tuo computer hai già Python 3.x, puoi usarlo per questo corso.</p>
<p>Se non hai ancora installato Python, scaricalo da:</p>
<p><a href="https://www.python.org/download/" target="_blank" rel="noopener noreferrer">https://www.python.org/download/</a></p>

<h2>Installare un editor di testo per la programmazione</h2>
<p>Se usi già un editor per programmatori con cui ti trovi bene, continua pure a usarlo. Altrimenti consigliamo questi
editor di testo gratuiti per lo sviluppo software:</p>
<ul>
<li><a href="https://thonny.org/" target="_blank" rel="noopener noreferrer">Thonny</a> – Gratuito, open source, semplice</li>
<li><a href="https://phcode.io/" target="_blank" rel="noopener noreferrer">Phoenix Code</a> – Gratuito, open source, più avanzato</li>
<li><a href="https://code.visualstudio.com/" target="_blank" rel="noopener noreferrer">VS Code</a> – Gratuito, ricco di funzionalità, include assistenza IA</li>
</ul>

<h2>Scrivere un programma Python su Windows 11</h2>
<p>Abbiamo preparato un breve
<a href="https://www.youtube.com/watch?v=70ZxCfUjkuw&index=1&list=PLlRFEj9H3Oj7Bp8-DfGpfAfDBiblRfl5p" target="_blank" rel="noopener noreferrer">video passo per passo</a>
che mostra come installare Python e scrivere il tuo primo programma.</p>

<h2>Note sulla riga di comando di Windows</h2>
<p>Quando la riga di comando si avvia, ti trovi nella tua directory "home". Il percorso della directory home varia a seconda della versione di Windows. Negli esempi qui sotto, sostituisci <b>csev</b> con il tuo nome utente.</p>
<pre>
    Windows 10:             C:\Users\csev
    Windows 10 OneDrive:    C:\Users\csev\OneDrive
    Windows 11:             C:\Users\csev
    Windows 11 OneDrive:    C:\Users\csev\OneDrive
</pre>
<p>Il prompt dei comandi di solito mostra la tua posizione attuale nella struttura delle cartelle.</p>
<p>Per vedere esattamente dove ti trovi, esegui <b>cd</b> senza parametri:</p>
<pre>
    C:\Users\csev> cd
    C:\Users\csev
</pre>

<h3>Spostarsi tra le cartelle</h3>
<p>Quando apri una riga di comando, di solito il primo passo è spostarti nella cartella giusta. Ad esempio, per eseguire un file dal Desktop, usa <b>cd Desktop</b> (oppure <b>cd OneDrive\Desktop</b>). Usa <b>dir</b> per elencare i file nella directory corrente e <b>cd ..</b> per salire di una directory.</p>
<p><b>Suggerimento:</b> mentre digiti un percorso, puoi digitare una parte del nome di una cartella (come Desktop) e premere Tab per completarlo automaticamente, purché tu abbia digitato abbastanza caratteri perché il sistema possa riconoscerlo senza ambiguità.</p>

<h3>Se ti perdi</h3>
<p>Se perdi il filo di dove ti trovi o non riesci a raggiungere la cartella che ti serve, chiudi la finestra del Prompt dei comandi o del Terminale e aprine una nuova: ripartirai dalla tua directory home.</p>

<h3>Impostazioni della riga di comando</h3>
<p>Fai clic sull'icona in alto a sinistra della finestra del prompt dei comandi e seleziona Preferenze (o Proprietà). Puoi personalizzare diverse impostazioni; una particolarmente utile è impostare la dimensione del buffer della cronologia dei comandi a 999, così da poter scorrere all'indietro molti comandi precedenti.</p>

<h2>Eseguire il tuo programma Python dalla riga di comando</h2>
<p>Per eseguire il programma, digita al prompt dei comandi:</p>
<pre>
    py firstprog.py
</pre>
<p>Oppure semplicemente:</p>
<pre>
    firstprog.py
</pre>
<p>Sostituisci <b>firstprog.py</b> con il nome del tuo file Python. Assicurati prima di trovarti nella directory corretta usando il comando <b>cd</b>.</p>
<p>Puoi eseguire il programma più volte nella stessa finestra di comando. Usa il tasto <b>freccia su</b> per richiamare i comandi precedenti e premi Invio per eseguirli di nuovo: è molto comodo quando modifichi e testi il codice.</p>
<?php include('footer.php');?>
