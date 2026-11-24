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
  <title>Espressioni regolari</title>
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
<h1 id="espressioni-regolari">Espressioni regolari</h1>
<p>Finora abbiamo letto i file, cercando schemi ed estraendo varie parti
delle righe che ci sembrano interessanti. Per estrarre porzioni delle
righe abbiamo usato metodi delle stringhe come <code>split</code> e
<code>find</code>, le liste e lo slicing delle stringhe.</p>
<p> </p>
<p>Questo lavoro di ricerca ed estrazione è così comune che Python ha un
modulo molto potente chiamato <em>espressioni regolari</em> (regular
expressions), che gestisce molti di questi compiti in modo piuttosto
elegante. Nel libro non abbiamo introdotto prima le espressioni regolari
perché, per quanto molto potenti, sono un po’ complicate e ci vuole del
tempo per abituarsi alla loro sintassi.</p>
<p>Le espressioni regolari sono quasi un piccolo linguaggio di
programmazione a sé stante, per cercare e analizzare stringhe. In
effetti, sulle espressioni regolari sono stati scritti libri interi. In
questo capitolo ne tratteremo solo le basi. Per maggiori dettagli sulle
espressioni regolari, vedi:</p>
<p><a href="https://en.wikipedia.org/wiki/Regular_expression"
class="uri">https://en.wikipedia.org/wiki/Regular_expression</a></p>
<p><a href="https://docs.python.org/library/re.html"
class="uri">https://docs.python.org/library/re.html</a></p>
<p>Puoi anche aggiungere ai segnalibri la pagina seguente, per fare
esperimenti con le espressioni regolari mentre impari:</p>
<p><a href="https://regex101.com/"
class="uri">https://regex101.com/</a></p>
<p>Prima di poter usare il modulo delle espressioni regolari
<code>re</code>, devi importarlo nel programma. L’uso più semplice del
modulo delle espressioni regolari è la funzione <code>search()</code>.
Il programma seguente mostra un uso banale della funzione
<code>search</code>.</p>
<pre class="python"><code># Search for lines that contain &#39;From&#39;
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    if re.search(&#39;From:&#39;, line):
        print(line)

# Code: https://www.py4e.com/code3/re01.py</code></pre>
<p>Apriamo il file, scorriamo ogni riga e usiamo la funzione
<code>search()</code> delle espressioni regolari per stampare solo le
righe che contengono la stringa <code>From:</code>. Questo programma non
sfrutta la vera potenza delle espressioni regolari, perché avremmo
potuto usare altrettanto facilmente <code>line.find()</code> per
ottenere lo stesso risultato.</p>
<p>La potenza delle espressioni regolari emerge quando aggiungiamo alla
stringa di ricerca dei caratteri speciali, che ci permettono di
controllare con più precisione quali righe corrispondono alla stringa.
Aggiungendo questi caratteri speciali all’espressione regolare possiamo
trovare corrispondenze ed estrarre dati in modo sofisticato, scrivendo
pochissimo codice.</p>
<p>Ad esempio, nelle espressioni regolari l’accento circonflesso
corrisponde all’“inizio” di una riga. Potremmo cambiare il programma in
modo che trovi corrispondenze solo nelle righe in cui <code>From:</code>
si trova all’inizio, come segue:</p>
<pre class="python"><code># Search for lines that start with &#39;From&#39;
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    if re.search(&#39;^From:&#39;, line):
        print(line)

# Code: https://www.py4e.com/code3/re02.py</code></pre>
<p>Ora troveremo corrispondenze solo nelle righe che <em>iniziano
con</em> la stringa <code>From:</code>. È ancora un esempio molto
semplice, che avremmo potuto realizzare in modo equivalente con il
metodo <code>startswith()</code> delle stringhe. Ma serve a introdurre
l’idea che le espressioni regolari contengono caratteri speciali che
compiono un’azione e ci danno più controllo su ciò che corrisponderà
all’espressione regolare.</p>
<h2
id="corrispondenza-di-caratteri-nelle-espressioni-regolari">Corrispondenza
di caratteri nelle espressioni regolari</h2>
<p>Ci sono diversi altri caratteri speciali che ci permettono di
costruire espressioni regolari ancora più potenti. Il carattere speciale
più usato è il punto, che corrisponde a qualsiasi carattere.</p>
<p> </p>
<p>Nell’esempio seguente, l’espressione regolare <code>F..m:</code>
corrisponderebbe a una qualsiasi delle stringhe <code>From:</code>,
<code>Fxxm:</code>, <code>F12m:</code> o <code>F!@m:</code>, perché
nell’espressione regolare i punti corrispondono a qualsiasi
carattere.</p>
<pre class="python"><code># Search for lines that start with &#39;F&#39;, followed by
# 2 characters, followed by &#39;m:&#39;
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    if re.search(&#39;^F..m:&#39;, line):
        print(line)

# Code: https://www.py4e.com/code3/re03.py</code></pre>
<p>Questa caratteristica è particolarmente potente se combinata con la
possibilità di indicare, con i caratteri <code>*</code> o <code>+</code>
nell’espressione regolare, che un carattere può essere ripetuto un
numero qualsiasi di volte. Questi caratteri speciali significano che,
invece di corrispondere a un singolo carattere nella stringa di ricerca,
corrispondono a zero o più caratteri (nel caso dell’asterisco) o a uno o
più caratteri (nel caso del segno più).</p>
<p>Possiamo restringere ancora di più le righe che corrispondono, usando
un <em>carattere jolly</em> (wild card) ripetuto, come nell’esempio
seguente:</p>
<pre class="python"><code># Search for lines that start with From and have an at sign
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    if re.search(&#39;^From:.+@&#39;, line):
        print(line)

# Code: https://www.py4e.com/code3/re04.py</code></pre>
<p>La stringa di ricerca <code>^From:.+@</code> corrisponderà
correttamente alle righe che iniziano con <code>From:</code>, seguito da
uno o più caratteri (<code>.+</code>), seguiti da una chiocciola. Quindi
corrisponderà alla riga seguente:</p>
<pre><code>From: stephen.marquard@uct.ac.za</code></pre>
<p>Puoi immaginare che il carattere jolly <code>.+</code> si espanda
fino a corrispondere a tutti i caratteri compresi tra il carattere dei
due punti e la chiocciola.</p>
<pre><code>From:.+@</code></pre>
<p>È utile pensare al segno più e all’asterisco come “invadenti” o
<em>avidi</em> (greedy). Ad esempio, nella stringa seguente la
corrispondenza arriverebbe fino all’ultima chiocciola della stringa,
quella in <code>cwen@iupui.edu</code>, perché <code>.+</code> spinge
verso l’esterno.</p>
<pre><code>From: stephen.marquard@uct.ac.za, csev@umich.edu, and cwen@iupui.edu</code></pre>
<p>È possibile dire a un asterisco o a un segno più di non essere così
“avido”. Se aggiungi <code>?</code>, in modo da ottenere
<code>.*?</code> o <code>.+?</code>, la tua regex corrisponderà alla
primissima occorrenza anziché all’ultima. Nell’esempio qui sopra, usando
<code>.+?@</code> la corrispondenza arriverebbe invece alla prima
chiocciola, quella in <code>stephen.marquard@uct.ac.za</code>. Per
maggiori dettagli, vedi la <a
href="https://docs.python.org/3/library/re.html">documentazione di
Python sui quantificatori avidi e non avidi</a>.</p>
<h2 id="estrarre-dati-con-le-espressioni-regolari">Estrarre dati con le
espressioni regolari</h2>
<p>Se vogliamo estrarre dati da una stringa in Python, possiamo usare la
funzione <code>findall()</code> per estrarre tutte le sottostringhe che
corrispondono a un’espressione regolare. Supponiamo di voler estrarre da
qualsiasi riga tutto ciò che somiglia a un indirizzo email,
indipendentemente dal formato. Ad esempio, vogliamo ricavare gli
indirizzi email da ognuna delle righe seguenti:</p>
<pre><code>From stephen.marquard@uct.ac.za Sat Jan  5 09:14:16 2008
Return-Path: &lt;postmaster@collab.sakaiproject.org&gt;
          for &lt;source@collab.sakaiproject.org&gt;;
Received: (from apache@localhost)
Author: stephen.marquard@uct.ac.za</code></pre>
<p>Non vogliamo scrivere codice per ciascun tipo di riga, con divisioni
e slice diverse per ogni riga. Il programma seguente usa
<code>findall()</code> per trovare le righe che contengono indirizzi
email ed estrarre uno o più indirizzi da ciascuna di quelle righe.</p>
<p> </p>
<pre class="python"><code>import re
s = &#39;A message from csev@umich.edu to cwen@iupui.edu about meeting @2PM&#39;
lst = re.findall(r&#39;\S+@\S+&#39;, s)
print(lst)

# Code: https://www.py4e.com/code3/re05.py</code></pre>
<p>La funzione <code>findall()</code> cerca nella stringa del secondo
argomento e restituisce una lista di tutte le stringhe che sembrano
indirizzi email. Usiamo una sequenza di due caratteri che corrisponde a
un carattere diverso dallo spazio bianco (<code>\S</code>). Noterai che
abbiamo anche aggiunto la lettera <code>r</code> subito prima
dell’espressione regolare; così diciamo a Python di interpretarla come
una <em>stringa raw</em> (raw string) e di non trattare i backslash come
caratteri di escape (come quello che usiamo in <code>\n</code>).</p>
<p>L’output del programma sarebbe:</p>
<pre><code>[&#39;csev@umich.edu&#39;, &#39;cwen@iupui.edu&#39;]</code></pre>
<p>Tradotta, l’espressione regolare dice che cerchiamo sottostringhe che
hanno almeno un carattere diverso dallo spazio bianco, seguito da una
chiocciola, seguita da almeno un altro carattere diverso dallo spazio
bianco. <code>\S+</code> corrisponde al maggior numero possibile di
caratteri diversi dallo spazio bianco.</p>
<p>L’espressione regolare troverebbe due corrispondenze
(<code>csev@umich.edu</code> e <code>cwen@iupui.edu</code>), ma non
corrisponderebbe alla stringa <code>@2PM</code>, perché non ci sono
caratteri diversi dallo spazio <em>prima</em> della chiocciola. Possiamo
usare questa espressione regolare in un programma per leggere tutte le
righe di un file e stampare tutto ciò che somiglia a un indirizzo email,
come segue:</p>
<pre class="python"><code># Search for lines that have an at sign between characters
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    x = re.findall(r&#39;\S+@\S+&#39;, line)
    if len(x) &gt; 0:
        print(x)

# Code: https://www.py4e.com/code3/re06.py</code></pre>
<p>Leggiamo ogni riga e poi estraiamo tutte le sottostringhe che
corrispondono all’espressione regolare. Poiché <code>findall()</code>
restituisce una lista, controlliamo semplicemente se il numero di
elementi nella lista restituita è maggiore di zero, per stampare solo le
righe in cui abbiamo trovato almeno una sottostringa che somiglia a un
indirizzo email.</p>
<p>Se eseguiamo il programma su <code>mbox-short.txt</code> otteniamo
l’output seguente:</p>
<pre><code>...
[&#39;&lt;source@collab.sakaiproject.org&gt;;&#39;]
[&#39;&lt;source@collab.sakaiproject.org&gt;;&#39;]
[&#39;apache@localhost)&#39;]
[&#39;source@collab.sakaiproject.org;&#39;]
[&#39;cwen@iupui.edu&#39;]
[&#39;source@collab.sakaiproject.org&#39;]
[&#39;cwen@iupui.edu&#39;]
[&#39;cwen@iupui.edu&#39;]
[&#39;wagnermr@iupui.edu&#39;]</code></pre>
<p>Alcuni degli indirizzi email hanno caratteri sbagliati come
<code>&lt;</code> o <code>;</code> all’inizio o alla fine. Stabiliamo
che ci interessa solo la parte della stringa che inizia e finisce con
una lettera o un numero.</p>
<p>Per farlo, usiamo un’altra caratteristica delle espressioni regolari.
Le parentesi quadre servono a indicare un insieme di più caratteri
accettabili, che siamo disposti a considerare corrispondenti. In un
certo senso, <code>\S</code> chiede la corrispondenza con l’insieme dei
“caratteri diversi dallo spazio bianco”. Ora saremo un po’ più espliciti
sui caratteri da far corrispondere.</p>
<p>Ecco la nostra nuova espressione regolare:</p>
<pre><code>[a-zA-Z0-9]\S*@\S*[a-zA-Z]</code></pre>
<p>Sta diventando un po’ complicato e puoi cominciare a capire perché le
espressioni regolari sono un piccolo linguaggio a sé stante. Tradotta,
questa espressione regolare dice che cerchiamo sottostringhe che
iniziano con un <em>singolo</em> carattere (lettera minuscola, lettera
maiuscola o numero) <code>[a-zA-Z0-9]</code>, seguito da zero o più
caratteri diversi dallo spazio (<code>\S*</code>), seguiti da una
chiocciola, seguita da zero o più caratteri diversi dallo spazio
(<code>\S*</code>), seguiti da una lettera maiuscola o minuscola. Nota
che siamo passati da <code>+</code> a <code>*</code> per indicare zero o
più caratteri diversi dallo spazio, perché <code>[a-zA-Z0-9]</code> è
già un carattere diverso dallo spazio. Ricorda che <code>*</code> o
<code>+</code> si applica al singolo carattere immediatamente a sinistra
del più o dell’asterisco.</p>
<p>Se usiamo questa espressione nel programma, i dati sono molto più
puliti:</p>
<pre class="python"><code># Search for lines that have an at sign between characters
# The characters must be a letter or number
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    x = re.findall(r&#39;[a-zA-Z0-9]\S*@\S*[a-zA-Z]&#39;, line)
    if len(x) &gt; 0:
        print(x)

# Code: https://www.py4e.com/code3/re07.py</code></pre>
<pre><code>...
[&#39;wagnermr@iupui.edu&#39;]
[&#39;cwen@iupui.edu&#39;]
[&#39;postmaster@collab.sakaiproject.org&#39;]
[&#39;200801032122.m03LMFo4005148@nakamura.uits.iupui.edu&#39;]
[&#39;source@collab.sakaiproject.org&#39;]
[&#39;source@collab.sakaiproject.org&#39;]
[&#39;source@collab.sakaiproject.org&#39;]
[&#39;apache@localhost&#39;]</code></pre>
<p>Nota che nelle righe con <code>source@collab.sakaiproject.org</code>
l’espressione regolare ha eliminato due caratteri alla fine della
stringa (<code>&gt;;</code>). Questo succede perché, quando aggiungiamo
<code>[a-zA-Z]</code> alla fine dell’espressione regolare, pretendiamo
che qualsiasi stringa trovata dal parser delle espressioni regolari
finisca con una lettera. Quindi, quando vede il <code>&gt;</code> alla
fine di <code>sakaiproject.org&gt;;</code>, si ferma semplicemente
all’ultima lettera “corrispondente” che ha trovato (cioè la
<code>g</code> era l’ultima corrispondenza valida).</p>
<p>Nota anche che l’output del programma è una lista Python che ha una
stringa come unico elemento.</p>
<h2 id="combinare-ricerca-ed-estrazione">Combinare ricerca ed
estrazione</h2>
<p>Se vogliamo trovare i numeri nelle righe che iniziano con la stringa
<code>X-</code>, come:</p>
<pre><code>X-DSPAM-Confidence: 0.8475
X-DSPAM-Probability: 0.0000</code></pre>
<p>non vogliamo semplicemente tutti i numeri in virgola mobile di tutte
le righe. Vogliamo estrarre i numeri solo dalle righe che hanno la
sintassi qui sopra.</p>
<p>Possiamo costruire la seguente espressione regolare per selezionare
le righe:</p>
<pre><code>^X-.*: [0-9.]+</code></pre>
<p>Traducendo, diciamo che vogliamo le righe che iniziano con
<code>X-</code>, seguito da zero o più caratteri (<code>.*</code>),
seguiti dai due punti (<code>:</code>) e poi da uno spazio. Dopo lo
spazio cerchiamo uno o più caratteri che siano una cifra (0-9) o un
punto <code>[0-9.]+</code>. Nota che dentro le parentesi quadre il punto
corrisponde a un punto vero e proprio (cioè tra le parentesi quadre non
è un carattere jolly).</p>
<p>È un’espressione molto restrittiva, che corrisponderà praticamente
solo alle righe che ci interessano, come segue:</p>
<pre class="python"><code># Search for lines that start with &#39;X&#39; followed by any non
# whitespace characters and &#39;:&#39;
# followed by a space and any number.
# The number can include a decimal.
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    if re.search(r&#39;^X-.*: [0-9.]+&#39;, line):
        print(line)

# Code: https://www.py4e.com/code3/re10.py</code></pre>
<p>Quando eseguiamo il programma, vediamo i dati filtrati per bene, in
modo da mostrare solo le righe che cerchiamo.</p>
<pre><code>X-DSPAM-Confidence: 0.8475
X-DSPAM-Probability: 0.0000
X-DSPAM-Confidence: 0.6178
X-DSPAM-Probability: 0.0000
...</code></pre>
<p>Ma ora dobbiamo risolvere il problema di estrarre i numeri. Anche se
sarebbe abbastanza semplice usare <code>split</code>, possiamo usare
un’altra caratteristica delle espressioni regolari per cercare e
analizzare la riga allo stesso tempo.</p>
<p>Le parentesi tonde sono un altro carattere speciale delle espressioni
regolari. Quando aggiungi le parentesi tonde a un’espressione regolare,
vengono ignorate nella ricerca della corrispondenza con la stringa. Ma
quando usi <code>findall()</code>, le parentesi tonde indicano che,
anche se vuoi che corrisponda l’intera espressione, ti interessa
estrarre solo una parte della sottostringa che corrisponde
all’espressione regolare.</p>
<p> </p>
<p>Quindi modifichiamo il programma come segue:</p>
<pre class="python"><code># Search for lines that start with &#39;X&#39; followed by any
# non whitespace characters and &#39;:&#39; followed by a space
# and any number. The number can include a decimal.
# Then print the number if it is greater than zero.
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    x = re.findall(r&#39;^X-.*: ([0-9.]+)&#39;, line)
    if len(x) &gt; 0:
        print(x)

# Code: https://www.py4e.com/code3/re11.py</code></pre>
<p>Invece di chiamare <code>search()</code>, aggiungiamo le parentesi
tonde intorno alla parte dell’espressione regolare che rappresenta il
numero in virgola mobile, per indicare che <code>findall()</code> ci
deve restituire, della stringa corrispondente, solo la parte con il
numero in virgola mobile.</p>
<p>L’output di questo programma è il seguente:</p>
<pre><code>[&#39;0.8475&#39;]
[&#39;0.0000&#39;]
[&#39;0.6178&#39;]
[&#39;0.0000&#39;]
[&#39;0.6961&#39;]
[&#39;0.0000&#39;]
...</code></pre>
<p>I numeri sono ancora in una lista e devono essere convertiti da
stringhe a numeri in virgola mobile, ma abbiamo sfruttato la potenza
delle espressioni regolari per cercare ed estrarre le informazioni che
ci interessavano.</p>
<p>Ecco un altro esempio di questa tecnica: se guardi il file, ci sono
diverse righe della forma:</p>
<pre><code>Details: http://source.sakaiproject.org/viewsvn/?view=rev&amp;rev=39772</code></pre>
<p>Se volessimo estrarre tutti i numeri di revisione (il numero intero
alla fine di queste righe) con la stessa tecnica vista sopra, potremmo
scrivere il programma seguente:</p>
<pre class="python"><code># Search for lines that start with &#39;Details: rev=&#39;
# followed by numbers
# Then print the number if one is found
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    x = re.findall(r&#39;^Details:.*rev=([0-9]+)$&#39;, line)
    if len(x) &gt; 0:
        print(x)

# Code: https://www.py4e.com/code3/re12.py</code></pre>
<p>Tradotta, l’espressione regolare dice che cerchiamo le righe che
iniziano con <code>Details:</code>, seguito da un numero qualsiasi di
caratteri (<code>.*</code>), seguiti da <code>rev=</code> e poi da una o
più cifre. Vogliamo trovare le righe che corrispondono all’intera
espressione, ma vogliamo estrarre solo il numero intero alla fine della
riga, quindi racchiudiamo <code>[0-9]+</code> tra parentesi tonde e
aggiungiamo <code>$</code> per indicare che la corrispondenza deve
trovarsi proprio alla fine della riga.</p>
<p>Quando eseguiamo il programma, otteniamo l’output seguente:</p>
<pre><code>[&#39;39772&#39;]
[&#39;39771&#39;]
[&#39;39770&#39;]
[&#39;39769&#39;]
...</code></pre>
<p>Ricorda che <code>[0-9]+</code> è “avido” e cerca di formare la
stringa di cifre più lunga possibile prima di estrarle. Questo
comportamento “avido” è il motivo per cui otteniamo tutte e cinque le
cifre di ogni numero. Il modulo delle espressioni regolari si espande in
entrambe le direzioni finché non incontra un carattere che non è una
cifra, oppure l’inizio o la fine di una riga.</p>
<p>Ora possiamo usare le espressioni regolari per rifare un esercizio
che abbiamo visto prima nel libro, in cui ci interessava l’ora del
giorno di ogni messaggio di posta. Cercavamo righe della forma:</p>
<pre><code>From stephen.marquard@uct.ac.za Sat Jan  5 09:14:16 2008</code></pre>
<p>e volevamo estrarre l’ora del giorno da ogni riga. In precedenza
l’abbiamo fatto con due chiamate a <code>split</code>. Prima la riga è
stata divisa in parole, poi abbiamo estratto la sesta parola e l’abbiamo
divisa di nuovo con il carattere dei due punti, per estrarre i due
caratteri che ci interessavano.</p>
<p>Anche se ha funzionato, in realtà il risultato è un codice piuttosto
fragile, che presuppone che le righe siano ben formattate. Se dovessi
aggiungere abbastanza controlli degli errori (o un grande blocco
<code>try</code>/<code>except</code>) per garantire che il programma non
fallisse mai davanti a righe formattate in modo sbagliato, il codice si
gonfierebbe fino a 10-15 righe piuttosto difficili da leggere.</p>
<p>Possiamo farlo in modo molto più semplice con la seguente espressione
regolare:</p>
<pre><code>^From .* [0-9][0-9]:</code></pre>
<p>Tradotta, questa espressione regolare dice che cerchiamo le righe che
iniziano con <code>"From "</code> (nota lo spazio), seguito da un numero
qualsiasi di caratteri (<code>.*</code>), seguiti da uno spazio, seguito
da due cifre <code>[0-9][0-9]</code>, seguite da un carattere dei due
punti. Questa è la definizione del tipo di righe che cerchiamo.</p>
<p>Per estrarre solo l’ora con <code>findall()</code>, aggiungiamo le
parentesi tonde intorno alle due cifre, come segue:</p>
<pre><code>^From .* ([0-9][0-9]):</code></pre>
<p>Ne risulta il programma seguente:</p>
<pre class="python"><code># Search for lines that start with From and a character
# followed by a two digit number between 00 and 99 followed by &#39;:&#39;
# Then print the number if one is found
import re
hand = open(&#39;mbox-short.txt&#39;)
for line in hand:
    line = line.rstrip()
    x = re.findall(&#39;^From .* ([0-9][0-9]):&#39;, line)
    if len(x) &gt; 0: print(x)

# Code: https://www.py4e.com/code3/re13.py</code></pre>
<p>Quando il programma viene eseguito, produce l’output seguente:</p>
<pre><code>[&#39;09&#39;]
[&#39;18&#39;]
[&#39;16&#39;]
[&#39;15&#39;]
...</code></pre>
<h2 id="carattere-di-escape">Carattere di escape</h2>
<p>Le espressioni regolari usano caratteri speciali come <code>^</code>
per corrispondere all’inizio di una riga, <code>$</code> per la fine di
una riga e <code>.</code> come carattere jolly; a volte però vogliamo
una corrispondenza letterale con quei caratteri. Ci serve un modo per
indicare che vogliamo la corrispondenza con il carattere vero e proprio,
come un accento circonflesso, un simbolo del dollaro o un punto.</p>
<p>Possiamo indicare che vogliamo semplicemente la corrispondenza con un
carattere anteponendogli un backslash. Ad esempio, possiamo trovare
importi di denaro con la seguente espressione regolare.</p>
<pre class="python"><code>import re
x = &#39;We just received $10.00 for cookies.&#39;
y = re.findall(&#39;\$[0-9.]+&#39;,x)</code></pre>
<p>Poiché anteponiamo un backslash al simbolo del dollaro, questo
corrisponde davvero al simbolo del dollaro nella stringa di input,
invece che alla “fine della riga”, e il resto dell’espressione regolare
corrisponde a una o più cifre o al carattere punto. Ricorda, come
abbiamo visto sopra, che dentro le parentesi quadre i caratteri non sono
“speciali”. Quindi, quando diciamo <code>[0-9.]</code>, intendiamo
proprio cifre o un punto. Fuori dalle parentesi quadre, il punto è il
carattere “jolly” e corrisponde a qualsiasi carattere. Dentro le
parentesi quadre, il punto è un punto.</p>
<h2 id="riepilogo">Riepilogo</h2>
<p>Anche se abbiamo solo scalfito la superficie delle espressioni
regolari, abbiamo imparato un po’ del loro linguaggio. Sono stringhe di
ricerca con caratteri speciali al loro interno, che comunicano al
sistema delle espressioni regolari ciò che vuoi: cosa definisce una
“corrispondenza” e cosa viene estratto dalle stringhe corrispondenti.
Ecco alcuni di quei caratteri speciali e di quelle sequenze di
caratteri:</p>
<p><code>^</code> Corrisponde all’inizio della riga.</p>
<p><code>$</code> Corrisponde alla fine della riga.</p>
<p><code>.</code> Corrisponde a qualsiasi carattere (un carattere
jolly).</p>
<p><code>\s</code> Corrisponde a un carattere di spazio bianco.</p>
<p><code>\S</code> Corrisponde a un carattere diverso dallo spazio
bianco (l’opposto di <code>\s</code>).</p>
<p><code>*</code> Si applica al carattere o ai caratteri immediatamente
precedenti e indica che devono corrispondere zero o più volte.</p>
<p><code>*?</code> Si applica al carattere o ai caratteri immediatamente
precedenti e indica che devono corrispondere zero o più volte in
“modalità non avida”.</p>
<p><code>+</code> Si applica al carattere o ai caratteri immediatamente
precedenti e indica che devono corrispondere una o più volte.</p>
<p><code>+?</code> Si applica al carattere o ai caratteri immediatamente
precedenti e indica che devono corrispondere una o più volte in
“modalità non avida”.</p>
<p><code>?</code> Si applica al carattere o ai caratteri immediatamente
precedenti e indica che devono corrispondere zero o una volta.</p>
<p><code>??</code> Si applica al carattere o ai caratteri immediatamente
precedenti e indica che devono corrispondere zero o una volta in
“modalità non avida”.</p>
<p><code>[aeiou]</code> Corrisponde a un singolo carattere, purché quel
carattere sia nell’insieme specificato. In questo esempio
corrisponderebbe a <code>a</code>, <code>e</code>, <code>i</code>,
<code>o</code> o <code>u</code>, ma a nessun altro carattere.</p>
<p><code>[a-z0-9]</code> Puoi specificare intervalli di caratteri con il
segno meno. Questo esempio è un singolo carattere che deve essere una
lettera minuscola o una cifra.</p>
<p><code>[^A-Za-z]</code> Quando il primo carattere nella notazione
dell’insieme è un accento circonflesso, la logica si inverte. Questo
esempio corrisponde a un singolo carattere qualsiasi, purché <em>diverso
da</em> una lettera maiuscola o minuscola.</p>
<p><code>( )</code> Quando si aggiungono parentesi tonde a
un’espressione regolare, vengono ignorate ai fini della corrispondenza,
ma ti permettono di estrarre un particolare sottoinsieme della stringa
corrispondente, invece dell’intera stringa, quando usi
<code>findall()</code>.</p>
<p><code>\b</code> Corrisponde alla stringa vuota, ma solo all’inizio o
alla fine di una parola.</p>
<p><code>\B</code> Corrisponde alla stringa vuota, ma non all’inizio o
alla fine di una parola.</p>
<p><code>\d</code> Corrisponde a qualsiasi cifra decimale; equivale
all’insieme <code>[0-9]</code>.</p>
<p><code>\D</code> Corrisponde a qualsiasi carattere che non sia una
cifra; equivale all’insieme <code>[^0-9]</code>.</p>
<h2 id="sezione-bonus-per-gli-utenti-unix-linux">Sezione bonus per gli
utenti Unix / Linux</h2>
<p>Il supporto per la ricerca nei file con le espressioni regolari è
incorporato nel sistema operativo Unix fin dagli anni ’60 ed è
disponibile, in una forma o nell’altra, in quasi tutti i linguaggi di
programmazione.</p>
<p>In effetti, c’è un programma a riga di comando incorporato in Unix,
chiamato <code>grep</code> (Generalized Regular Expression Parser), che
fa più o meno le stesse cose degli esempi con <code>search()</code> di
questo capitolo. Quindi, se hai un sistema Macintosh o Linux, puoi
provare i seguenti comandi nella finestra della riga di comando.</p>
<pre class="bash"><code>$ grep &#39;^From:&#39; mbox-short.txt
From: stephen.marquard@uct.ac.za
From: louis@media.berkeley.edu
From: zqian@umich.edu
From: rjlowe@iupui.edu</code></pre>
<p>Questo comando dice a <code>grep</code> di mostrarti le righe che
iniziano con la stringa <code>From:</code> nel file
<code>mbox-short.txt</code>. Se fai qualche esperimento con il comando
<code>grep</code> e leggi la documentazione di <code>grep</code>,
troverai alcune sottili differenze tra il supporto delle espressioni
regolari in Python e quello in <code>grep</code>. Ad esempio,
<code>grep</code> non supporta il carattere diverso dallo spazio
<code>\S</code>, quindi dovrai usare la notazione degli insiemi,
leggermente più complessa, <code>[^ ]</code>, che significa
semplicemente: corrisponde a qualsiasi carattere tranne uno spazio.</p>
<h2 id="debug">Debug</h2>
<p>Python ha una documentazione built-in semplice e rudimentale, che può
essere molto utile se ti serve un rapido ripasso per rinfrescarti la
memoria sul nome esatto di un particolare metodo. Questa documentazione
si può consultare nell’interprete Python in modalità interattiva.</p>
<p>Puoi aprire un sistema di aiuto interattivo con
<code>help()</code>.</p>
<pre class="python"><code>&gt;&gt;&gt; help()

help&gt; modules</code></pre>
<p>Se sai quale modulo vuoi usare, puoi usare il comando
<code>dir()</code> per trovare le funzioni del modulo, come segue:</p>
<pre class="python"><code>&gt;&gt;&gt; import re
&gt;&gt;&gt; dir(re)
[.. &#39;compile&#39;, &#39;copy_reg&#39;, &#39;error&#39;, &#39;escape&#39;, &#39;findall&#39;,
&#39;finditer&#39;, &#39;match&#39;, &#39;purge&#39;, &#39;search&#39;, &#39;split&#39;, &#39;sre_compile&#39;,
&#39;sre_parse&#39;, &#39;sub&#39;, &#39;subn&#39;, &#39;sys&#39;, &#39;template&#39;]</code></pre>
<p>Puoi anche ottenere un po’ di documentazione su un particolare metodo
usando il comando <code>help</code> insieme al metodo che ti
interessa.</p>
<pre class="python"><code>&gt;&gt;&gt; help (re.search)
Help on function search in module re:

search(pattern, string, flags=0)
    Scan through string looking for a match to the pattern, returning
    a match object, or None if no match was found.
&gt;&gt;&gt;</code></pre>
<p>La documentazione built-in non è molto ampia, ma può essere utile
quando hai fretta o non hai accesso a un browser web o a un motore di
ricerca.</p>
<h2 id="glossario">Glossario</h2>
<dl>
<dt><strong>Carattere jolly</strong></dt>
<dd>
Un carattere speciale che corrisponde a qualsiasi carattere. Nelle
espressioni regolari il carattere jolly è il punto.
</dd>
<dt><strong>Codice fragile</strong></dt>
<dd>
Un codice che funziona quando i dati di input sono in un formato
particolare, ma che tende a rompersi se c’è qualche scostamento dal
formato corretto. Lo chiamiamo “codice fragile” perché si rompe
facilmente.
</dd>
<dt><strong>Corrispondenza avida</strong></dt>
<dd>
L’idea che i caratteri <code>+</code> e <code>*</code> di un’espressione
regolare si espandano verso l’esterno per corrispondere alla stringa più
lunga possibile.
</dd>
<dt><strong>Espressione regolare</strong></dt>
<dd>
Un linguaggio per esprimere stringhe di ricerca più complesse.
Un’espressione regolare può contenere caratteri speciali che indicano
che una ricerca corrisponde solo all’inizio o alla fine di una riga, o
che offrono molte altre funzionalità simili.
</dd>
<dt><strong><code>grep</code></strong></dt>
<dd>
Un comando disponibile nella maggior parte dei sistemi Unix, che cerca
nei file di testo le righe che corrispondono a espressioni regolari. Il
nome del comando sta per “Generalized Regular Expression Parser”.
</dd>
</dl>
<h2 id="esercizi">Esercizi</h2>
<p><strong>Esercizio 1:</strong> Scrivi un semplice programma per
simulare il funzionamento del comando <code>grep</code> di Unix. Chiedi
all’utente di inserire un’espressione regolare e conta il numero di
righe che corrispondono all’espressione regolare:</p>
<pre><code>$ python grep.py
Enter a regular expression: ^Author
mbox.txt had 1798 lines that matched ^Author

$ python grep.py
Enter a regular expression: ^X-
mbox.txt had 14368 lines that matched ^X-

$ python grep.py
Enter a regular expression: java$
mbox.txt had 4175 lines that matched java$</code></pre>
<p><strong>Esercizio 2:</strong> Scrivi un programma che cerchi le righe
della forma:</p>
<pre><code>New Revision: 39772</code></pre>
<p><strong>Estrai il numero da ciascuna riga usando un’espressione
regolare e la funzione <code>findall()</code>. Calcola la media dei
numeri e stampa la media come intero.</strong></p>
<pre><code>Enter file:mbox.txt
38549

Enter file:mbox-short.txt
39756</code></pre>
</body>
</html>
<?php if ( file_exists("../bookfoot.php") ) {
  $HTML_FILE = basename(__FILE__);
  $HTML = ob_get_contents();
  ob_end_clean();
  require_once "../bookfoot.php";
}?>
