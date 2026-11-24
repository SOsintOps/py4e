<?php if ( file_exists("../booktop.php") ) {
  require_once "../booktop.php";
  ob_start();
}?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="generator" content="pandoc 3.14" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
  <title>File</title>
  <style>
    /* Default styles provided by pandoc.
    ** See https://pandoc.org/MANUAL.html#variables-for-html for config info.
    */
    html {
      color: #1a1a1a;
      color: light-dark(#1a1a1a, #fdfdfd);
      background-color: #fdfdfd;
      background-color: light-dark(#fdfdfd, #1a1a1a);
      color-scheme: light dark;
    }
    body {
      margin: 0 auto;
      max-width: 36em;
      padding-left: 50px;
      padding-right: 50px;
      padding-top: 50px;
      padding-bottom: 50px;
      hyphens: auto;
      overflow-wrap: break-word;
      text-rendering: optimizeLegibility;
      font-kerning: normal;
    }
    @media (max-width: 600px) {
      body {
        font-size: 0.9em;
        padding: 12px;
      }
      h1 {
        font-size: 1.8em;
      }
    }
    p {
      margin: 1em 0;
    }
    a, a:visited {
      color: inherit;
    }
    img {
      max-width: 100%;
    }
    svg {
      height: auto;
      max-width: 100%;
    }
    h1, h2, h3, h4, h5, h6 {
      margin-top: 1.4em;
    }
    h5, h6 {
      font-size: 1em;
      font-style: italic;
    }
    h6 {
      font-weight: normal;
    }
    ol, ul {
      padding-left: 1.7em;
      margin-top: 1em;
    }
    li > ol, li > ul {
      margin-top: 0;
    }
    blockquote {
      margin: 1em 0 1em 1.7em;
      padding-left: 1em;
      border-left: 2px solid;
      border-color: #e6e6e6;
      border-color: light-dark(#e6e6e6, #4c4c4c);
      color: #606060;
      color: light-dark(#606060, #b6b6b6);
    }
    code {
      white-space: pre-wrap;
      font-family: Menlo, Monaco, Consolas, 'Lucida Console', monospace;
      font-size: 85%;
      margin: 0;
      hyphens: manual;
    }
    pre {
      margin: 1em 0;
      overflow: auto;
    }
    pre code {
      padding: 0;
      overflow: visible;
      overflow-wrap: normal;
    }
    .sourceCode {
     background-color: transparent;
     overflow: visible;
    }
    hr {
      border: none;
      border-top: 1px solid currentColor;
      height: 1px;
      margin: 1em 0;
    }
    table {
      margin: 1em 0;
      border-collapse: collapse;
      width: 100%;
      overflow-x: auto;
      display: block;
      font-variant-numeric: lining-nums tabular-nums;
    }
    table caption {
      margin-bottom: 0.75em;
    }
    tbody {
      margin-top: 0.5em;
      border-top: 1px solid currentColor;
      border-bottom: 1px solid currentColor;
    }
    th {
      border-top: 1px solid currentColor;
      padding: 0.25em 0.5em 0.25em 0.5em;
    }
    td {
      padding: 0.125em 0.5em 0.25em 0.5em;
    }
    header {
      margin-bottom: 4em;
      text-align: center;
    }
    #TOC li {
      list-style: none;
    }
    #TOC ul {
      padding-left: 1.3em;
    }
    #TOC > ul {
      padding-left: 0;
    }
    #TOC a:not(:hover) {
      text-decoration: none;
    }
    span.smallcaps{font-variant: small-caps;}
    em, em em em, em em em em em {
      font-style: italic;
    }
    em em, em em em em {
      font-style: normal;
    }
    div.columns{display: flex; gap: 1.5em;}
    div.column{flex: auto;}
    @media screen {
    div.columns{gap: min(4vw, 1.5em);}
    div.column{overflow-x: auto;}
    }
    div.hanging-indent{margin-left: 1.5em; text-indent: -1.5em;}
    /* The extra [class] is a hack that increases specificity enough to
       override a similar rule in reveal.js */
    ul.task-list[class]{list-style: none;}
    ul.task-list li input[type="checkbox"] {
      font-size: inherit;
      width: 0.8em;
      margin: 0 0.8em 0.2em -1.6em;
      vertical-align: middle;
    }
    @media print {
      html {
        color-scheme: light only;
      }
      html, body, pre, code {
        background-color: transparent;
      }
      body, a, a:visited, blockquote {
        color: black;
      }
      pre, code {
        padding: 0;
      }
      p, h2, h3 {
        orphans: 3;
        widows: 3;
      }
      h2, h3, h4 {
        page-break-after: avoid;
      }
    }  </style>
</head>
<body>
<h1 id="file">File</h1>
<p> </p>
<h2 id="persistenza">Persistenza</h2>
<p> </p>
<p>Finora abbiamo imparato a scrivere programmi e a comunicare le nostre
intenzioni alla CPU usando l’esecuzione condizionale, le funzioni e le
iterazioni. Abbiamo imparato a creare e usare strutture dati nella
<em>memoria principale</em>. La CPU e la memoria sono i luoghi in cui il
nostro software lavora e viene eseguito. È lì che avviene tutto il
“pensiero”.</p>
<p>Ma se ricordi i nostri discorsi sull’architettura hardware, una volta
tolta l’alimentazione tutto ciò che è memorizzato nella CPU o nella
memoria principale viene cancellato. Quindi finora i nostri programmi
sono stati solo fugaci esercizi divertenti per imparare Python.</p>
<figure>
<img src="../images/arch.svg" alt="Memoria secondaria" style="height: 2.5in;"/>
<figcaption>
Memoria secondaria
</figcaption>
</figure>
<p>In questo capitolo iniziamo a lavorare con la <em>memoria
secondaria</em> (o con i file). La memoria secondaria non viene
cancellata quando si toglie l’alimentazione. Oppure, nel caso di una
chiavetta USB, i dati che scriviamo con i nostri programmi possono
essere portati via dal sistema e trasportati su un altro sistema.</p>
<p>Ci concentreremo soprattutto sulla lettura e la scrittura di file di
testo, come quelli che creiamo in un editor di testo. Più avanti vedremo
come lavorare con i file di database, che sono file binari progettati
appositamente per essere letti e scritti tramite un software di
database.</p>
<h2 id="aprire-i-file">Aprire i file</h2>
<p> </p>
<p>Quando vogliamo leggere o scrivere un file (ad esempio sul tuo disco
rigido), dobbiamo prima <em>aprire</em> il file. Aprirlo significa
comunicare con il sistema operativo, che sa dove sono memorizzati i dati
di ogni file. Quando apri un file, chiedi al sistema operativo di
trovare il file in base al nome e di assicurarsi che esista. In questo
esempio apriamo il file <code>mbox.txt</code>, che dovrebbe essere
memorizzato nella stessa cartella in cui ti trovi quando avvii Python.
Puoi scaricare questo file da <a
href="http://www.py4e.com/code3/mbox.txt">www.py4e.com/code3/mbox.txt</a>.</p>
<pre class="python"><code>&gt;&gt;&gt; fhand = open(&#39;mbox.txt&#39;)
&gt;&gt;&gt; print(fhand)
&lt;_io.TextIOWrapper name=&#39;mbox.txt&#39; mode=&#39;r&#39; encoding=&#39;cp1252&#39;&gt;</code></pre>
<p>Se la <code>open</code> ha successo, il sistema operativo ci
restituisce un <em>handle del file</em> (file handle). L’handle del file
non è il dato vero e proprio contenuto nel file, ma una “maniglia”
(handle) che possiamo usare per leggere i dati. Ricevi un handle se il
file richiesto esiste e hai i permessi adeguati per leggerlo.</p>
<figure>
<img src="../images/handle.svg" alt="Un handle del file" style="height: 2.0in;"/>
<figcaption>
Un handle del file
</figcaption>
</figure>
<p>Se il file non esiste, <code>open</code> fallirà con un traceback e
non otterrai un handle per accedere al contenuto del file:</p>
<pre class="python"><code>&gt;&gt;&gt; fhand = open(&#39;stuff.txt&#39;)
Traceback (most recent call last):
File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;
FileNotFoundError: [Errno 2] No such file or directory: &#39;stuff.txt&#39;</code></pre>
<p>Più avanti useremo <code>try</code> ed <code>except</code> per
gestire con più eleganza la situazione in cui tentiamo di aprire un file
che non esiste.</p>
<h2 id="file-di-testo-e-righe">File di testo e righe</h2>
<p>Un file di testo si può considerare una sequenza di righe, proprio
come una stringa Python si può considerare una sequenza di caratteri. Ad
esempio, questo è un estratto di un file di testo che registra
l’attività di posta di varie persone in un gruppo di sviluppo di un
progetto open source:</p>
<pre><code>From stephen.marquard@uct.ac.za Sat Jan  5 09:14:16 2008
Return-Path: &lt;postmaster@collab.sakaiproject.org&gt;
Date: Sat, 5 Jan 2008 09:12:18 -0500
To: source@collab.sakaiproject.org
From: stephen.marquard@uct.ac.za
Subject: [sakai] svn commit: r39772 - content/branches/
Details: http://source.sakaiproject.org/viewsvn/?view=rev&amp;rev=39772
...</code></pre>
<p>L’intero file delle interazioni di posta è disponibile su</p>
<p><a
href="http://www.py4e.com/code3/mbox.txt">www.py4e.com/code3/mbox.txt</a></p>
<p>e una versione ridotta del file è disponibile su</p>
<p><a
href="http://www.py4e.com/code3/mbox-short.txt">www.py4e.com/code3/mbox-short.txt</a></p>
<p>Questi file sono in un formato standard per un file che contiene più
messaggi di posta. Le righe che iniziano con <code>"From "</code>
separano i messaggi e le righe che iniziano con <code>"From:"</code>
fanno parte dei messaggi. Per maggiori informazioni sul formato mbox,
vedi <a href="https://en.wikipedia.org/wiki/Mbox"
class="uri">https://en.wikipedia.org/wiki/Mbox</a>.</p>
<p>Per suddividere il file in righe, c’è un carattere speciale che
rappresenta la “fine della riga”, chiamato carattere
<em>newline</em>.</p>
<p>In Python rappresentiamo il carattere <em>newline</em> come
backslash-n nelle costanti stringa. Anche se sembra formato da due
caratteri, in realtà è un carattere solo. Quando guardiamo la variabile
inserendo <code>stuff</code> nell’interprete, questo ci mostra il
<code>\n</code> nella stringa, ma quando usiamo <code>print</code> per
mostrare la stringa, la vediamo spezzata su due righe dal carattere
newline.</p>
<pre class="python"><code>&gt;&gt;&gt; stuff = &#39;Hello\nWorld!&#39;
&gt;&gt;&gt; stuff
&#39;Hello\nWorld!&#39;
&gt;&gt;&gt; print(stuff)
Hello
World!
&gt;&gt;&gt; stuff = &#39;X\nY&#39;
&gt;&gt;&gt; print(stuff)
X
Y
&gt;&gt;&gt; len(stuff)
3</code></pre>
<p>Puoi anche vedere che la lunghezza della stringa <code>X\nY</code> è
di <em>tre</em> caratteri, perché il carattere newline è un carattere
solo.</p>
<p>Quindi, quando guardiamo le righe di un file, dobbiamo
<em>immaginare</em> che alla fine di ogni riga ci sia un carattere
speciale invisibile, chiamato newline, che segna la fine della riga.</p>
<p>Quindi il carattere newline separa in righe i caratteri del file.</p>
<h2 id="leggere-i-file">Leggere i file</h2>
<p> </p>
<p>Anche se l’<em>handle del file</em> non contiene i dati del file, è
piuttosto facile costruire un ciclo <code>for</code> per leggere e
contare ciascuna delle righe di un file:</p>
<pre class="python"><code>fhand = open(&#39;mbox-short.txt&#39;)
count = 0
for line in fhand:
    count = count + 1
print(&#39;Line Count:&#39;, count)

# Code: https://www.py4e.com/code3/open.py</code></pre>
<p>Possiamo usare l’handle del file come sequenza nel nostro ciclo
<code>for</code>. Il ciclo <code>for</code> conta semplicemente il
numero di righe del file e lo stampa. La traduzione approssimativa del
ciclo <code>for</code> in italiano è: “per ogni riga del file
rappresentato dall’handle del file, aggiungi uno alla variabile
<code>count</code>”.</p>
<p>La funzione <code>open</code> non legge l’intero file perché il file
potrebbe essere molto grande, con molti gigabyte di dati. L’istruzione
<code>open</code> impiega lo stesso tempo a prescindere dalla dimensione
del file. È il ciclo <code>for</code> che in realtà fa leggere i dati
dal file.</p>
<p>Quando il file viene letto in questo modo con un ciclo
<code>for</code>, Python si occupa di suddividere i dati del file in
righe separate usando il carattere newline. Python legge ogni riga fino
al newline e include il newline come ultimo carattere nella variabile
<code>line</code> a ogni iterazione del ciclo <code>for</code>.</p>
<p>Poiché il ciclo <code>for</code> legge i dati una riga alla volta,
può leggere e contare in modo efficiente le righe di file molto grandi
senza esaurire la memoria principale per memorizzare i dati. Il
programma qui sopra può contare le righe di un file di qualsiasi
dimensione usando pochissima memoria, dato che ogni riga viene letta,
contata e poi scartata.</p>
<p>Se sai che il file è relativamente piccolo rispetto alla dimensione
della tua memoria principale, puoi leggere l’intero file in un’unica
stringa usando il metodo <code>read</code> sull’handle del file.</p>
<pre class="python"><code>&gt;&gt;&gt; fhand = open(&#39;mbox-short.txt&#39;)
&gt;&gt;&gt; inp = fhand.read()
&gt;&gt;&gt; print(len(inp))
94626
&gt;&gt;&gt; print(inp[:20])
From stephen.marquar</code></pre>
<p>In questo esempio l’intero contenuto (tutti i 94.626 caratteri) del
file <code>mbox-short.txt</code> viene letto direttamente nella
variabile <code>inp</code>. Usiamo lo slicing delle stringhe per
stampare i primi 20 caratteri della stringa memorizzata in
<code>inp</code>.</p>
<p>Quando il file viene letto in questo modo, tutti i caratteri,
comprese tutte le righe e i caratteri newline, sono un’unica grande
stringa nella variabile <code>inp</code>. È una buona idea memorizzare
l’output di <code>read</code> in una variabile, perché ogni chiamata a
<code>read</code> esaurisce la risorsa:</p>
<pre class="python"><code>&gt;&gt;&gt; fhand = open(&#39;mbox-short.txt&#39;)
&gt;&gt;&gt; print(len(fhand.read()))
94626
&gt;&gt;&gt; print(len(fhand.read()))
0</code></pre>
<p>Ricorda che il metodo <code>read</code> va usato solo se i dati del
file entrano comodamente nella memoria principale del tuo computer. Se
il file è troppo grande per entrare nella memoria principale, dovresti
scrivere il programma in modo che legga il file a pezzi usando un ciclo
<code>for</code> o <code>while</code>.</p>
<h2 id="cercare-in-un-file">Cercare in un file</h2>
<p>Quando cerchi tra i dati di un file, uno schema molto comune è
leggere il file ignorando la maggior parte delle righe ed elaborando
solo quelle che soddisfano una particolare condizione. Possiamo
combinare lo schema per la lettura di un file con i metodi delle
stringhe per costruire semplici meccanismi di ricerca.</p>
<p> </p>
<p>Ad esempio, se volessimo leggere un file e stampare solo le righe che
iniziano con il prefisso <code>From:</code>, potremmo usare il metodo
delle stringhe <code>startswith</code> per selezionare solo le righe con
il prefisso desiderato:</p>
<pre class="python"><code>fhand = open(&#39;mbox-short.txt&#39;)
for line in fhand:
    if line.startswith(&#39;From:&#39;):
        print(line)

# Code: https://www.py4e.com/code3/search1.py</code></pre>
<p>Quando questo programma viene eseguito, otteniamo il seguente
output:</p>
<pre><code>From: stephen.marquard@uct.ac.za

From: louis@media.berkeley.edu

From: zqian@umich.edu

From: rjlowe@iupui.edu
...</code></pre>
<p>L’output sembra ottimo, dato che le uniche righe che vediamo sono
quelle che iniziano con <code>From:</code>, ma perché vediamo le righe
vuote in più? Dipende da quel carattere <em>newline</em> invisibile.
Ogni riga termina con un newline, quindi l’istruzione <code>print</code>
stampa la stringa nella variabile <code>line</code>, che include un
newline, e poi <code>print</code> aggiunge <em>un altro</em> newline,
producendo l’effetto di interlinea doppia che vediamo.</p>
<p>Potremmo usare lo slicing della riga per stampare tutto tranne
l’ultimo carattere, ma un approccio più semplice è usare il metodo
<code>rstrip</code>, che rimuove gli spazi bianchi dal lato destro di
una stringa, come segue:</p>
<pre class="python"><code>fhand = open(&#39;mbox-short.txt&#39;)
for line in fhand:
    line = line.rstrip()
    if line.startswith(&#39;From:&#39;):
        print(line)

# Code: https://www.py4e.com/code3/search2.py</code></pre>
<p>Quando questo programma viene eseguito, otteniamo il seguente
output:</p>
<pre><code>From: stephen.marquard@uct.ac.za
From: louis@media.berkeley.edu
From: zqian@umich.edu
From: rjlowe@iupui.edu
From: zqian@umich.edu
From: rjlowe@iupui.edu
From: cwen@iupui.edu
...</code></pre>
<p>Man mano che i tuoi programmi di elaborazione dei file diventano più
complicati, ti conviene strutturare i cicli di ricerca usando
<code>continue</code>. L’idea di base del ciclo di ricerca è che cerchi
le righe “interessanti” e di fatto salti quelle “non interessanti”. E
poi, quando troviamo una riga interessante, facciamo qualcosa con quella
riga.</p>
<p>Possiamo strutturare il ciclo secondo lo schema in cui si saltano le
righe non interessanti, come segue:</p>
<pre class="python"><code>fhand = open(&#39;mbox-short.txt&#39;)
for line in fhand:
    line = line.rstrip()
    # Skip &#39;uninteresting lines&#39;
    if not line.startswith(&#39;From:&#39;):
        continue
    # Process our &#39;interesting&#39; line
    print(line)

# Code: https://www.py4e.com/code3/search3.py</code></pre>
<p>L’output del programma è lo stesso. In italiano, le righe non
interessanti sono quelle che non iniziano con <code>From:</code>, che
saltiamo usando <code>continue</code>. Per le righe “interessanti” (cioè
quelle che iniziano con <code>From:</code>) eseguiamo
l’elaborazione.</p>
<p>Possiamo usare il metodo delle stringhe <code>find</code> per
simulare la ricerca di un editor di testo, che trova le righe in cui la
stringa cercata compare in un punto qualsiasi della riga. Dato che
<code>find</code> cerca un’occorrenza di una stringa all’interno di
un’altra stringa e restituisce la posizione della stringa oppure
<code>-1</code> se la stringa non è stata trovata, possiamo scrivere il
seguente ciclo per mostrare le righe che contengono la stringa
<code>@uct.ac.za</code> (cioè che provengono dall’Università di Città
del Capo, in Sudafrica):</p>
<pre class="python"><code>fhand = open(&#39;mbox-short.txt&#39;)
for line in fhand:
    line = line.rstrip()
    if line.find(&#39;@uct.ac.za&#39;) == -1: continue
    print(line)

# Code: https://www.py4e.com/code3/search4.py</code></pre>
<p>Il programma produce il seguente output:</p>
<pre><code>From stephen.marquard@uct.ac.za Sat Jan  5 09:14:16 2008
X-Authentication-Warning: set sender to stephen.marquard@uct.ac.za using -f
From: stephen.marquard@uct.ac.za
Author: stephen.marquard@uct.ac.za
From david.horwitz@uct.ac.za Fri Jan  4 07:02:32 2008
X-Authentication-Warning: set sender to david.horwitz@uct.ac.za using -f
From: david.horwitz@uct.ac.za
Author: david.horwitz@uct.ac.za
...</code></pre>
<p>Qui usiamo anche la forma contratta dell’istruzione <code>if</code>,
in cui mettiamo il <code>continue</code> sulla stessa riga
dell’<code>if</code>. Questa forma contratta dell’<code>if</code>
funziona come se il <code>continue</code> fosse sulla riga successiva e
indentato.</p>
<h2 id="far-scegliere-allutente-il-nome-del-file">Far scegliere
all’utente il nome del file</h2>
<p>Non vogliamo certo dover modificare il nostro codice Python ogni
volta che vogliamo elaborare un file diverso. Sarebbe più pratico
chiedere all’utente di inserire la stringa con il nome del file ogni
volta che il programma viene eseguito, così che possa usare il nostro
programma su file diversi senza cambiare il codice Python.</p>
<p>Farlo è piuttosto semplice: leggiamo il nome del file dall’utente
usando <code>input</code>, come segue:</p>
<pre class="python"><code>fname = input(&#39;Enter the file name: &#39;)
fhand = open(fname)
count = 0
for line in fhand:
    if line.startswith(&#39;Subject:&#39;):
        count = count + 1
print(&#39;There were&#39;, count, &#39;subject lines in&#39;, fname)

# Code: https://www.py4e.com/code3/search6.py</code></pre>
<p>Leggiamo il nome del file dall’utente, lo mettiamo in una variabile
chiamata <code>fname</code> e apriamo quel file. Ora possiamo eseguire
il programma più volte su file diversi.</p>
<pre><code>python search6.py
Enter the file name: mbox.txt
There were 1797 subject lines in mbox.txt

python search6.py
Enter the file name: mbox-short.txt
There were 27 subject lines in mbox-short.txt</code></pre>
<p>Prima di sbirciare la prossima sezione, dai un’occhiata al programma
qui sopra e chiediti: “Cosa potrebbe mai andare storto qui?” oppure:
“Cosa potrebbe fare il nostro amichevole utente per far uscire in malo
modo il nostro bel programmino con un traceback, facendoci fare una
figura non proprio brillante agli occhi dei nostri utenti?”</p>
<h2 id="usare-try-except-e-open">Usare <code>try</code>,
<code>except</code> e <code>open</code></h2>
<p>Ti avevo detto di non sbirciare. Questa è la tua ultima
possibilità.</p>
<p>E se il nostro utente digita qualcosa che non è il nome di un
file?</p>
<pre><code>python search6.py
Enter the file name: missing.txt
Traceback (most recent call last):
  File &quot;search6.py&quot;, line 2, in &lt;module&gt;
    fhand = open(fname)
FileNotFoundError: [Errno 2] No such file or directory: &#39;missing.txt&#39;

python search6.py
Enter the file name: na na boo boo
Traceback (most recent call last):
  File &quot;search6.py&quot;, line 2, in &lt;module&gt;
    fhand = open(fname)
FileNotFoundError: [Errno 2] No such file or directory: &#39;na na boo boo&#39;</code></pre>
<p>Non ridere. Prima o poi gli utenti faranno ogni cosa possibile per
rompere i tuoi programmi, per sbaglio o con intenzioni malevole.
Infatti, una parte importante di qualsiasi gruppo di sviluppo software è
costituita da una o più persone, chiamate <em>controllo qualità</em>
(Quality Assurance, o QA in breve), il cui lavoro è proprio fare le cose
più folli possibili nel tentativo di rompere il software che il
programmatore ha creato.</p>
<p> </p>
<p>Il gruppo QA ha il compito di trovare i difetti nei programmi prima
che consegniamo il programma agli utenti finali, che magari acquistano
il software o ci pagano lo stipendio per scriverlo. Quindi il gruppo QA
è il migliore amico del programmatore.</p>
<p> </p>
<p>Quindi, ora che vediamo il difetto nel programma, possiamo
correggerlo con eleganza usando la struttura
<code>try</code>/<code>except</code>. Dobbiamo presumere che la chiamata
a <code>open</code> possa fallire e aggiungere il codice di recupero per
quando la <code>open</code> fallisce, come segue:</p>
<pre class="python"><code>fname = input(&#39;Enter the file name: &#39;)
try:
    fhand = open(fname)
except:
    print(&#39;File cannot be opened:&#39;, fname)
    exit()
count = 0
for line in fhand:
    if line.startswith(&#39;Subject:&#39;):
        count = count + 1
print(&#39;There were&#39;, count, &#39;subject lines in&#39;, fname)

# Code: https://www.py4e.com/code3/search7.py</code></pre>
<p>La funzione <code>exit</code> termina il programma. È una funzione
che chiamiamo e che non restituisce mai il controllo. Ora, quando il
nostro utente (o il gruppo QA) digita sciocchezze o nomi di file
sbagliati, li “catturiamo” e rimediamo con eleganza:</p>
<pre><code>python search7.py
Enter the file name: mbox.txt
There were 1797 subject lines in mbox.txt

python search7.py
Enter the file name: na na boo boo
File cannot be opened: na na boo boo</code></pre>
<p>Proteggere la chiamata a <code>open</code> è un buon esempio dell’uso
corretto di <code>try</code> ed <code>except</code> in un programma
Python. Usiamo il termine “Pythonic” quando facciamo qualcosa “alla
maniera di Python”. Potremmo dire che l’esempio qui sopra è il modo
Pythonic di aprire un file.</p>
<p>Quando sarai diventato più abile in Python, potrai lanciarti in un
botta e risposta con altri programmatori Python per decidere quale di
due soluzioni equivalenti a un problema sia “più Pythonic”. L’obiettivo
di essere “più Pythonic” coglie l’idea che la programmazione è in parte
ingegneria e in parte arte. Non sempre ci interessa soltanto far
funzionare qualcosa: vogliamo anche che la nostra soluzione sia elegante
e che sia apprezzata come elegante dai nostri pari.</p>
<h2 id="scrivere-i-file">Scrivere i file</h2>
<p>Per scrivere un file, devi aprirlo con la modalità <code>'w'</code>
come secondo parametro:</p>
<pre class="python"><code>&gt;&gt;&gt; fout = open(&#39;output.txt&#39;, &#39;w&#39;)
&gt;&gt;&gt; print(fout)
&lt;_io.TextIOWrapper name=&#39;output.txt&#39; mode=&#39;w&#39; encoding=&#39;cp1252&#39;&gt;</code></pre>
<p>Se il file esiste già, aprirlo in modalità di scrittura cancella i
vecchi dati e riparte da zero, quindi fai attenzione! Se il file non
esiste, ne viene creato uno nuovo.</p>
<p>Il metodo <code>write</code> dell’oggetto handle del file inserisce i
dati nel file e restituisce il numero di caratteri scritti. La modalità
di scrittura predefinita è quella di testo, per scrivere (e leggere)
stringhe.</p>
<pre class="python"><code>&gt;&gt;&gt; line1 = &quot;This here&#39;s the wattle,\n&quot;
&gt;&gt;&gt; fout.write(line1)
24</code></pre>
<p>Di nuovo, l’oggetto file tiene traccia del punto in cui si trova,
quindi se chiami ancora <code>write</code>, aggiunge i nuovi dati alla
fine.</p>
<p>Dobbiamo assicurarci di gestire la fine di ogni riga mentre scriviamo
nel file, inserendo in modo esplicito il carattere newline quando
vogliamo terminare una riga. L’istruzione <code>print</code> aggiunge
automaticamente un newline in coda, ma il metodo <code>write</code> non
aggiunge il newline automaticamente.</p>
<pre class="python"><code>&gt;&gt;&gt; line2 = &#39;the emblem of our land.\n&#39;
&gt;&gt;&gt; fout.write(line2)
24</code></pre>
<p>Quando hai finito di scrivere, devi chiudere il file per assicurarti
che l’ultima parte dei dati sia scritta fisicamente sul disco, così che
non vada persa se manca l’alimentazione.</p>
<pre class="python"><code>&gt;&gt;&gt; fout.close()</code></pre>
<p>Potremmo chiudere anche i file che apriamo in lettura, ma possiamo
essere un po’ trasandati se apriamo solo pochi file, dato che Python si
assicura che tutti i file aperti vengano chiusi quando il programma
termina. Quando scriviamo dei file, vogliamo chiuderli in modo esplicito
per non lasciare nulla al caso.</p>
<p> </p>
<h2 id="debug">Debug</h2>
<p> </p>
<p>Quando leggi e scrivi file, potresti incontrare problemi con gli
spazi bianchi. Il debug di questi errori può essere difficile, perché
spazi, tabulazioni e newline sono normalmente invisibili:</p>
<pre class="python"><code>&gt;&gt;&gt; s = &#39;1 2\t 3\n 4&#39;
&gt;&gt;&gt; print(s)
1 2  3
 4</code></pre>
<p> </p>
<p>La funzione built-in <code>repr</code> può aiutare. Accetta come
argomento un oggetto qualsiasi e restituisce una rappresentazione
dell’oggetto sotto forma di stringa. Per le stringhe, rappresenta i
caratteri di spazio bianco usando sequenze con il backslash:</p>
<pre class="python"><code>&gt;&gt;&gt; print(repr(s))
&#39;1 2\t 3\n 4&#39;</code></pre>
<p>Questo può essere utile per il debug.</p>
<p>Un altro problema che potresti incontrare è che sistemi diversi usano
caratteri diversi per indicare la fine di una riga. Alcuni sistemi usano
un newline, rappresentato da <code>\n</code>. Altri usano un carattere
di ritorno carrello, rappresentato da <code>\r</code>. Alcuni usano
entrambi. Se sposti file tra sistemi diversi, queste incoerenze
potrebbero causare problemi.</p>
<p>Per la maggior parte dei sistemi ci sono applicazioni per convertire
da un formato all’altro. Puoi trovarle (e leggere altro su questo
problema) su <a
href="https://wikipedia.org/wiki/Newline">https://www.wikipedia.org/wiki/Newline</a>.
Oppure, naturalmente, potresti scriverne una tu.</p>
<h2 id="glossario">Glossario</h2>
<dl>
<dt><strong>Catturare</strong></dt>
<dd>
Impedire che un’eccezione termini un programma usando le istruzioni
<code>try</code> ed <code>except</code>.
</dd>
<dt><strong>Controllo qualità</strong></dt>
<dd>
Una persona o un gruppo che si occupa di garantire la qualità
complessiva di un prodotto software. Spesso il QA contribuisce a testare
un prodotto e a individuarne i problemi prima che sia rilasciato.
</dd>
<dt><strong>File di testo</strong></dt>
<dd>
Una sequenza di caratteri memorizzata su un supporto permanente, come un
disco rigido.
</dd>
<dt><strong>Newline</strong></dt>
<dd>
Un carattere speciale usato nei file e nelle stringhe per indicare la
fine di una riga.
</dd>
<dt><strong>Pythonic</strong></dt>
<dd>
Relativo a una tecnica che funziona in modo elegante in Python. “Usare
<code>try</code> ed <code>except</code> è il modo <em>Pythonic</em> di
rimediare alla mancanza di un file”.
</dd>
</dl>
<h2 id="esercizi">Esercizi</h2>
<p><strong>Esercizio 1:</strong> Scrivi un programma che legga un file e
ne stampi il contenuto (riga per riga) tutto in maiuscolo. L’esecuzione
del programma avrà questo aspetto:</p>
<pre><code>python shout.py
Enter a file name: mbox-short.txt
FROM STEPHEN.MARQUARD@UCT.AC.ZA SAT JAN  5 09:14:16 2008
RETURN-PATH: &lt;POSTMASTER@COLLAB.SAKAIPROJECT.ORG&gt;
RECEIVED: FROM MURDER (MAIL.UMICH.EDU [141.211.14.90])
     BY FRANKENSTEIN.MAIL.UMICH.EDU (CYRUS V2.3.8) WITH LMTPA;
     SAT, 05 JAN 2008 09:14:16 -0500</code></pre>
<p>Puoi scaricare il file da <a
href="http://www.py4e.com/code3/mbox-short.txt">www.py4e.com/code3/mbox-short.txt</a>.</p>
<p><strong>Esercizio 2:</strong> Scrivi un programma che chieda il nome
di un file, poi legga il file e cerchi le righe della forma:</p>
<pre><code>X-DSPAM-Confidence: 0.8475</code></pre>
<p>Quando incontri una riga che inizia con
<code>X-DSPAM-Confidence:</code>, scomponi la riga per estrarre il
numero in virgola mobile che contiene. Conta queste righe e poi calcola
il totale dei valori di “spam confidence” di queste righe. Quando
raggiungi la fine del file, stampa il valore medio di “spam
confidence”.</p>
<pre><code>Enter the file name: mbox.txt
Average spam confidence: 0.894128046745

Enter the file name: mbox-short.txt
Average spam confidence: 0.750718518519</code></pre>
<p>Testa il tuo programma sui file <code>mbox.txt</code> e
<code>mbox-short.txt</code>.</p>
<p><strong>Esercizio 3:</strong></p>
<p>A volte, quando i programmatori si annoiano o vogliono divertirsi un
po’, aggiungono un innocuo <em>Easter egg</em> al loro programma.
Modifica il programma che chiede all’utente il nome del file in modo che
stampi un messaggio divertente quando l’utente digita esattamente il
nome di file <code>na na boo boo</code>. Il programma dovrebbe
comportarsi normalmente con tutti gli altri file, che esistano o no.
Ecco un esempio di esecuzione del programma:</p>
<pre><code>python egg.py
Enter the file name: mbox.txt
There were 1797 subject lines in mbox.txt

python egg.py
Enter the file name: missing.tyxt
File cannot be opened: missing.tyxt

python egg.py
Enter the file name: na na boo boo
NA NA BOO BOO TO YOU - You have been punk&#39;d!</code></pre>
<p>Non ti stiamo incoraggiando a mettere Easter egg nei tuoi programmi;
questo è solo un esercizio.</p>
</body>
</html>
<?php if ( file_exists("../bookfoot.php") ) {
  $HTML_FILE = basename(__FILE__);
  $HTML = ob_get_contents();
  ob_end_clean();
  require_once "../bookfoot.php";
}?>
