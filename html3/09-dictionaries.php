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
  <title>Dizionari</title>
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
<h1 id="dizionari">Dizionari</h1>
<p> </p>
<p>Un <em>dizionario</em> è come una lista, ma più generale. In una
lista gli indici devono essere numeri interi; in un dizionario possono
essere di (quasi) qualsiasi tipo.</p>
<p>Puoi pensare a un dizionario come a una mappatura tra un insieme di
indici (chiamati <em>chiavi</em>) e un insieme di valori. Ogni chiave
corrisponde a un valore. L’associazione tra una chiave e un valore è
chiamata <em>coppia chiave-valore</em> o, a volte,
<em>elemento</em>.</p>
<p>Come esempio costruiremo un dizionario che fa corrispondere parole
inglesi a parole spagnole, quindi le chiavi e i valori sono tutti
stringhe.</p>
<p>La funzione <code>dict</code> crea un nuovo dizionario senza
elementi. Poiché <code>dict</code> è il nome di una funzione built-in,
dovresti evitare di usarlo come nome di variabile.</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; eng2sp = dict()
&gt;&gt;&gt; print(eng2sp)
{}</code></pre>
<p>Le parentesi graffe, <code>{}</code>, rappresentano un dizionario
vuoto. Per aggiungere elementi al dizionario puoi usare le parentesi
quadre:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; eng2sp[&#39;one&#39;] = &#39;uno&#39;</code></pre>
<p>Questa riga crea un elemento che fa corrispondere la chiave
<code>'one'</code> al valore <code>'uno'</code>. Se stampiamo di nuovo
il dizionario, vediamo una coppia chiave-valore con i due punti tra la
chiave e il valore:</p>
<pre class="python"><code>&gt;&gt;&gt; print(eng2sp)
{&#39;one&#39;: &#39;uno&#39;}</code></pre>
<p>Questo formato di output è anche un formato di input. Ad esempio,
puoi creare un nuovo dizionario con tre elementi.</p>
<pre class="python"><code>&gt;&gt;&gt; eng2sp = {&#39;one&#39;: &#39;uno&#39;, &#39;two&#39;: &#39;dos&#39;, &#39;three&#39;: &#39;tres&#39;}
&gt;&gt;&gt; print(eng2sp)
{&#39;one&#39;: &#39;uno&#39;, &#39;two&#39;: &#39;dos&#39;, &#39;three&#39;: &#39;tres&#39;}</code></pre>
<p>Da Python 3.7 l’ordine delle coppie chiave-valore è quello in cui
sono state inserite, cioè i dizionari ora sono strutture ordinate.</p>
<p>Ma questo non conta poi molto, perché gli elementi di un dizionario
non sono mai indicizzati con indici interi. Usi invece le chiavi per
cercare i valori corrispondenti:</p>
<pre class="python"><code>&gt;&gt;&gt; print(eng2sp[&#39;two&#39;])
&#39;dos&#39;</code></pre>
<p>La chiave <code>'two'</code> corrisponde sempre al valore
<code>'dos'</code>, quindi l’ordine degli elementi non conta.</p>
<p>Se la chiave non è nel dizionario, ottieni un’eccezione:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; print(eng2sp[&#39;four&#39;])
KeyError: &#39;four&#39;</code></pre>
<p>La funzione <code>len</code> si applica ai dizionari; restituisce il
numero di coppie chiave-valore:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; len(eng2sp)
3</code></pre>
<p>L’operatore <code>in</code> funziona sui dizionari; ti dice se
qualcosa compare come <em>chiave</em> nel dizionario (comparire come
valore non basta).</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; &#39;one&#39; in eng2sp
True
&gt;&gt;&gt; &#39;uno&#39; in eng2sp
False</code></pre>
<p>Per vedere se qualcosa compare come valore in un dizionario, puoi
usare il metodo <code>values</code>, che restituisce i valori sotto
forma di un tipo che si può convertire in una lista, e poi usare
l’operatore <code>in</code>:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; vals = list(eng2sp.values())
&gt;&gt;&gt; &#39;uno&#39; in vals
True</code></pre>
<p>L’operatore <code>in</code> usa algoritmi diversi per le liste e per
i dizionari. Per le liste usa un algoritmo di ricerca lineare. Man mano
che la lista si allunga, il tempo di ricerca cresce in modo direttamente
proporzionale alla lunghezza della lista. Per i dizionari, Python usa un
algoritmo chiamato <em>tabella hash</em> (hash table), che ha una
proprietà notevole: l’operatore <code>in</code> impiega circa lo stesso
tempo, non importa quanti elementi ci siano in un dizionario. Non
spiegherò perché le funzioni hash sono così magiche, ma puoi saperne di
più su <a
href="https://wikipedia.org/wiki/Hash_table">wikipedia.org/wiki/Hash_table</a>.<a
href="#fn1" class="footnote-ref" id="fnref1"
role="doc-noteref"><sup>1</sup></a></p>
<p> </p>
<p><strong>Esercizio 1:</strong> Scarica una copia del file</p>
<p><a
href="http://www.py4e.com/code3/words.txt">www.py4e.com/code3/words.txt</a></p>
<p>Scrivi un programma che legga le parole di <code>words.txt</code> e
le memorizzi come chiavi in un dizionario. Non importa quali siano i
valori. Poi puoi usare l’operatore <code>in</code> come modo rapido per
controllare se una stringa è nel dizionario.</p>
<h2 id="il-dizionario-come-insieme-di-contatori">Il dizionario come
insieme di contatori</h2>
<p>Supponi di ricevere una stringa e di voler contare quante volte
compare ogni lettera. Potresti farlo in diversi modi:</p>
<ol type="1">
<li><p>Potresti creare 26 variabili, una per ogni lettera dell’alfabeto.
Poi potresti scorrere la stringa e, per ogni carattere, incrementare il
contatore corrispondente, probabilmente usando una condizione
concatenata.</p></li>
<li><p>Potresti creare una lista con 26 elementi. Poi potresti
convertire ogni carattere in un numero (usando la funzione built-in
<code>ord</code>), usare il numero come indice nella lista e
incrementare il contatore appropriato.</p></li>
<li><p>Potresti creare un dizionario con i caratteri come chiavi e i
contatori come valori corrispondenti. La prima volta che vedi un
carattere, aggiungeresti un elemento al dizionario. In seguito
incrementeresti il valore di un elemento esistente.</p></li>
</ol>
<p>Ognuna di queste opzioni esegue lo stesso calcolo, ma ognuna lo
implementa in modo diverso.</p>
<p>Un’<em>implementazione</em> è un modo di eseguire un calcolo; alcune
implementazioni sono migliori di altre. Ad esempio, un vantaggio
dell’implementazione con il dizionario è che non abbiamo bisogno di
sapere in anticipo quali lettere compaiono nella stringa e dobbiamo fare
spazio solo per quelle che compaiono davvero.</p>
<p>Ecco come potrebbe essere il codice:</p>
<pre class="python"><code>word = &#39;brontosaurus&#39;
d = dict()
for c in word:
    if c not in d:
        d[c] = 1
    else:
        d[c] = d[c] + 1
print(d)</code></pre>
<p>Di fatto stiamo calcolando un <em>istogramma</em>, termine statistico
che indica un insieme di contatori (o frequenze).</p>
<p> </p>
<p>Il ciclo <code>for</code> scorre la stringa. A ogni passaggio del
ciclo, se <code>c</code> non è nel dizionario, creiamo un nuovo elemento
con chiave <code>c</code> e valore iniziale <code>1</code> (dato che
abbiamo visto questa lettera una volta). Se <code>c</code> è già nel
dizionario, incrementiamo <code>d[c]</code>.</p>
<p>Ecco l’output del programma:</p>
<pre><code>{&#39;b&#39;: 1, &#39;r&#39;: 2, &#39;o&#39;: 2, &#39;n&#39;: 1, &#39;t&#39;: 1, &#39;s&#39;: 2, &#39;a&#39;: 1, &#39;u&#39;: 2}</code></pre>
<p>L’istogramma indica che le lettere <code>a</code> e <code>b</code>
compaiono una volta; <code>o</code> compare due volte, e così via.</p>
<p> </p>
<p>I dizionari hanno un metodo chiamato <code>get</code> che accetta una
chiave e un valore predefinito. Se la chiave compare nel dizionario,
<code>get</code> restituisce il valore corrispondente; altrimenti
restituisce il valore predefinito. Ad esempio:</p>
<pre class="python"><code>&gt;&gt;&gt; counts = { &#39;chuck&#39; : 1 , &#39;annie&#39; : 42, &#39;jan&#39;: 100}
&gt;&gt;&gt; print(counts.get(&#39;jan&#39;, 0))
100
&gt;&gt;&gt; print(counts.get(&#39;tim&#39;, 0))
0</code></pre>
<p>Possiamo usare <code>get</code> per scrivere in modo più conciso il
ciclo dell’istogramma. Poiché il metodo <code>get</code> gestisce
automaticamente il caso in cui una chiave non è in un dizionario,
possiamo ridurre quattro righe a una ed eliminare l’istruzione
<code>if</code>.</p>
<pre class="python"><code>word = &#39;brontosaurus&#39;
d = dict()
for c in word:
    d[c] = d.get(c,0) + 1
print(d)</code></pre>
<p>L’uso del metodo <code>get</code> per semplificare questo ciclo di
conteggio si rivela un “idioma” molto diffuso in Python, e lo useremo
molte volte nel resto del libro. Quindi dovresti fermarti un momento a
confrontare il ciclo che usa l’istruzione <code>if</code> e l’operatore
<code>in</code> con il ciclo che usa il metodo <code>get</code>. Fanno
esattamente la stessa cosa, ma uno dei due è più conciso.</p>
<h2 id="dizionari-e-file">Dizionari e file</h2>
<p>Uno degli usi comuni di un dizionario è contare le occorrenze delle
parole in un file che contiene del testo scritto. Cominciamo con un file
di parole molto semplice, preso dal testo di <em>Romeo e
Giulietta</em>.</p>
<p>Per la prima serie di esempi useremo una versione abbreviata e
semplificata del testo, senza punteggiatura. Più avanti lavoreremo con
il testo della scena, punteggiatura compresa.</p>
<pre><code>But soft what light through yonder window breaks
It is the east and Juliet is the sun
Arise fair sun and kill the envious moon
Who is already sick and pale with grief</code></pre>
<p>Scriveremo un programma Python che legge le righe del file, spezza
ogni riga in una lista di parole, poi scorre le parole della riga e
conta ogni parola usando un dizionario.</p>
<p> </p>
<p>Vedrai che abbiamo due cicli <code>for</code>. Il ciclo esterno legge
le righe del file e il ciclo interno itera su ogni parola di quella
riga. Questo è un esempio di uno schema chiamato <em>cicli
annidati</em>, perché uno dei cicli è quello <em>esterno</em> e l’altro
è quello <em>interno</em>.</p>
<p>Poiché il ciclo interno esegue tutte le sue iterazioni ogni volta che
il ciclo esterno fa una sola iterazione, consideriamo il ciclo interno
come quello che itera “più velocemente” e il ciclo esterno come quello
che itera più lentamente.</p>
<p>La combinazione dei due cicli annidati garantisce che conteremo ogni
parola di ogni riga del file di input.</p>
<pre class="python"><code>fname = input(&#39;Enter the file name: &#39;)
try:
    fhand = open(fname)
except:
    print(&#39;File cannot be opened:&#39;, fname)
    exit()

counts = dict()
for line in fhand:
    words = line.split()
    for word in words:
        if word not in counts:
            counts[word] = 1
        else:
            counts[word] += 1

print(counts)

# Code: https://www.py4e.com/code3/count1.py</code></pre>
<p>Nell’istruzione <code>else</code> usiamo l’alternativa più compatta
per incrementare una variabile. <code>counts[word] += 1</code> è
equivalente a <code>counts[word] = counts[word] + 1</code>. Entrambi i
modi si possono usare per cambiare di una quantità qualsiasi il valore
di una variabile. Esistono alternative simili per <code>-=</code>,
<code>*=</code> e <code>/=</code>.</p>
<p>Quando eseguiamo il programma, vediamo una stampa grezza di tutti i
conteggi, non in ordine alfabetico ma nell’ordine in cui le parole sono
state inserite nel dizionario. (Il file <code>romeo.txt</code> è
disponibile su <a
href="http://www.py4e.com/code3/romeo.txt">www.py4e.com/code3/romeo.txt</a>.)</p>
<pre><code>python count1.py
Enter the file name: romeo.txt
{&#39;But&#39;: 1, &#39;soft&#39;: 1, &#39;what&#39;: 1, &#39;light&#39;: 1, &#39;through&#39;: 1, &#39;yonder&#39;: 1,
&#39;window&#39;: 1, &#39;breaks&#39;: 1, &#39;It&#39;: 1, &#39;is&#39;: 3, &#39;the&#39;: 3, &#39;east&#39;: 1, &#39;and&#39;: 3,
&#39;Juliet&#39;: 1, &#39;sun&#39;: 2, &#39;Arise&#39;: 1, &#39;fair&#39;: 1, &#39;kill&#39;: 1, &#39;envious&#39;: 1,
&#39;moon&#39;: 1, &#39;Who&#39;: 1, &#39;already&#39;: 1, &#39;sick&#39;: 1, &#39;pale&#39;: 1, &#39;with&#39;: 1,
&#39;grief&#39;: 1}</code></pre>
<p>È un po’ scomodo esaminare il dizionario per trovare le parole più
comuni e i loro conteggi, quindi dobbiamo aggiungere altro codice Python
per ottenere un output più utile.</p>
<h2 id="cicli-e-dizionari">Cicli e dizionari</h2>
<p> </p>
<p>Se usi un dizionario come sequenza in un’istruzione <code>for</code>,
questa scorre le chiavi del dizionario. Questo ciclo stampa ogni chiave
e il valore corrispondente:</p>
<pre class="python"><code>counts = { &#39;chuck&#39; : 1 , &#39;annie&#39; : 42, &#39;jan&#39;: 100}
for key in counts:
    print(key, counts[key])</code></pre>
<p>Ecco come appare l’output:</p>
<pre><code>chuck 1
annie 42
jan 100</code></pre>
<p>Anche qui le chiavi sono ordinate.</p>
<p>Possiamo usare questo schema per implementare i vari idiomi di ciclo
che abbiamo descritto prima. Ad esempio, se volessimo trovare tutte le
voci di un dizionario con un valore superiore a dieci, potremmo scrivere
il seguente codice:</p>
<pre class="python"><code>counts = { &#39;chuck&#39; : 1 , &#39;annie&#39; : 42, &#39;jan&#39;: 100}
for key in counts:
    if counts[key] &gt; 10 :
        print(key, counts[key])</code></pre>
<p>Il ciclo <code>for</code> itera sulle <em>chiavi</em> del dizionario,
quindi dobbiamo usare l’operatore di indicizzazione per recuperare il
<em>valore</em> corrispondente a ogni chiave. Ecco come appare
l’output:</p>
<pre><code>annie 42
jan 100</code></pre>
<p>Vediamo solo le voci con un valore superiore a 10.</p>
<p> </p>
<p>Se vuoi stampare le chiavi in ordine alfabetico, per prima cosa crei
una lista delle chiavi del dizionario usando il metodo <code>keys</code>
disponibile negli oggetti dizionario, poi ordini quella lista e scorri
la lista ordinata, cercando ogni chiave e stampando le coppie
chiave-valore in ordine, come segue:</p>
<pre class="python"><code>counts = { &#39;chuck&#39; : 1 , &#39;annie&#39; : 42, &#39;jan&#39;: 100}
lst = list(counts.keys())
print(lst)
lst.sort()
print(lst)
for key in lst:
    print(key, counts[key])</code></pre>
<p>Ecco come appare l’output:</p>
<pre><code>[&#39;chuck&#39;, &#39;annie&#39;, &#39;jan&#39;]
[&#39;annie&#39;, &#39;chuck&#39;, &#39;jan&#39;]
annie 42
chuck 1
jan 100</code></pre>
<p>Prima vedi la lista delle chiavi in ordine non alfabetico che
otteniamo dal metodo <code>keys</code>. Poi vediamo le coppie
chiave-valore in ordine alfabetico prodotte dal ciclo
<code>for</code>.</p>
<h2 id="analisi-avanzata-del-testo">Analisi avanzata del testo</h2>
<p>Nell’esempio qui sopra, che usa il file <code>romeo.txt</code>,
abbiamo reso il file il più semplice possibile togliendo a mano tutta la
punteggiatura. Il testo vero ha molta punteggiatura, come si vede qui
sotto.</p>
<pre><code>But, soft! what light through yonder window breaks?
It is the east, and Juliet is the sun.
Arise, fair sun, and kill the envious moon,
Who is already sick and pale with grief,</code></pre>
<p>Poiché il metodo <code>split</code> di Python cerca gli spazi e
tratta le parole come token separati da spazi, tratteremmo
<code>soft!</code> e <code>soft</code> come parole <em>diverse</em> e
creeremmo nel dizionario una voce separata per ciascuna.</p>
<p>Inoltre, poiché nel file ci sono le maiuscole, tratteremmo
<code>who</code> e <code>Who</code> come parole diverse con conteggi
diversi.</p>
<p>Possiamo risolvere entrambi i problemi usando i metodi delle stringhe
<code>lower</code> e <code>translate</code> e la stringa
<code>punctuation</code> del modulo <code>string</code>. Il meno
intuitivo dei metodi è <code>translate</code>. Ecco la documentazione di
<code>translate</code>:</p>
<p><code>line.translate(str.maketrans(fromstr, tostr, deletestr))</code></p>
<p><em>Sostituisce i caratteri di <code>fromstr</code> con il carattere
nella stessa posizione in <code>tostr</code> ed elimina tutti i
caratteri che sono in <code>deletestr</code>. <code>fromstr</code> e
<code>tostr</code> possono essere stringhe vuote e il parametro
<code>deletestr</code> può essere omesso.</em></p>
<p>Non specificheremo <code>tostr</code>, ma useremo il parametro
<code>deletestr</code> per eliminare tutta la punteggiatura. Lasceremo
perfino che sia Python a dirci l’elenco dei caratteri che considera
“punteggiatura”:</p>
<pre class="python"><code>&gt;&gt;&gt; import string
&gt;&gt;&gt; string.punctuation
&#39;!&quot;#$%&amp;\&#39;()*+,-./:;&lt;=&gt;?@[\\]^_`{|}~&#39;</code></pre>
<p>I parametri usati da <code>translate</code> erano diversi in Python
2.0.</p>
<p>Facciamo le seguenti modifiche al programma:</p>
<pre class="python"><code>import string

fname = input(&#39;Enter the file name: &#39;)
try:
    fhand = open(fname)
except:
    print(&#39;File cannot be opened:&#39;, fname)
    exit()

counts = dict()
for line in fhand:
    line = line.rstrip()
    # First two parameters are empty strings
    line = line.translate(line.maketrans(&quot;&quot;, &quot;&quot;, string.punctuation))
    line = line.lower()
    words = line.split()
    for word in words:
        if word not in counts:
            counts[word] = 1
        else:
            counts[word] += 1

print(counts)

# Code: https://www.py4e.com/code3/count2.py</code></pre>
<p>Imparare l’“Arte di Python” o il “Pensare in modo Pythonic” significa
anche rendersi conto che Python ha spesso funzionalità built-in per
molti problemi comuni di analisi dei dati. Con il tempo vedrai
abbastanza codice di esempio e leggerai abbastanza documentazione da
sapere dove guardare per vedere se qualcuno ha già scritto qualcosa che
rende il tuo lavoro molto più facile.</p>
<p>Quella che segue è una versione abbreviata dell’output:</p>
<pre><code>Enter the file name: romeo-full.txt
{&#39;romeo&#39;: 40, &#39;and&#39;: 42, &#39;juliet&#39;: 32, &#39;act&#39;: 1, &#39;2&#39;: 2, &#39;scene&#39;: 2,
&#39;ii&#39;: 1, &#39;capulets&#39;: 1, &#39;orchard&#39;: 2, &#39;enter&#39;: 1, &#39;he&#39;: 5, &#39;jests&#39;: 1,
&#39;at&#39;: 9, &#39;scars&#39;: 1, &#39;that&#39;: 30, &#39;never&#39;: 2, &#39;felt&#39;: 1, &#39;a&#39;: 24,
&#39;wound&#39;: 1, &#39;appears&#39;: 1, &#39;above&#39;: 6, &#39;window&#39;: 2, &#39;but&#39;: 18,
&#39;soft&#39;: 1, &#39;what&#39;: 11, &#39;light&#39;: 5, &#39;through&#39;: 2, &#39;yonder&#39;: 2,
&#39;breaks&#39;: 1, ...}</code></pre>
<p>Esaminare questo output è ancora poco pratico e possiamo usare Python
per ottenere esattamente ciò che stiamo cercando, ma per farlo dobbiamo
conoscere le <em>tuple</em> di Python. Riprenderemo questo esempio
quando conosceremo le tuple.</p>
<h2 id="debug">Debug</h2>
<p>Quando lavori con insiemi di dati più grandi, può diventare poco
pratico fare il debug stampando e controllando i dati a mano. Ecco
alcuni suggerimenti per il debug di grandi insiemi di dati:</p>
<dl>
<dt>Riduci l’input</dt>
<dd>
Se possibile, riduci le dimensioni dell’insieme di dati. Ad esempio, se
il programma legge un file di testo, comincia solo con le prime 10
righe, o con l’esempio più piccolo che riesci a trovare. Puoi modificare
direttamente i file oppure (meglio) modificare il programma in modo che
legga solo le prime <code>n</code> righe.
Se c’è un errore, puoi ridurre <code>n</code> al valore più piccolo con
cui l’errore si manifesta e poi aumentarlo gradualmente man mano che
trovi e correggi gli errori.
</dd>
<dt>Controlla i riepiloghi e i tipi</dt>
<dd>
Invece di stampare e controllare l’intero insieme di dati, valuta se
stampare dei riepiloghi dei dati: ad esempio, il numero di elementi di
un dizionario o il totale di una lista di numeri.
Una causa comune di errori di runtime è un valore che non è del tipo
giusto. Per il debug di questo genere di errore, spesso basta stampare
il tipo di un valore.
</dd>
<dt>Scrivi controlli automatici</dt>
<dd>
A volte puoi scrivere del codice che controlla in modo automatico se ci
sono errori. Ad esempio, se calcoli la media di una lista di numeri,
potresti controllare che il risultato non sia maggiore dell’elemento più
grande della lista né minore del più piccolo. Questo si chiama
<em>controllo di plausibilità</em> (sanity check) perché rileva i
risultati “completamente illogici”.
Un altro tipo di controllo confronta i risultati di due calcoli diversi
per vedere se sono coerenti. Questo si chiama <em>controllo di
coerenza</em> (consistency check).
</dd>
<dt>Formatta bene l’output</dt>
<dd>
Formattare l’output di debug può rendere più facile individuare un
errore.
</dd>
</dl>
<p>Ancora una volta, il tempo che dedichi a costruire impalcature può
ridurre il tempo che dedichi al debug. </p>
<h2 id="glossario">Glossario</h2>
<dl>
<dt><strong>Chiave</strong></dt>
<dd>
Un oggetto che compare in un dizionario come prima parte di una coppia
chiave-valore.
</dd>
<dt><strong>Cicli annidati</strong></dt>
<dd>
Uno o più cicli che stanno “dentro” un altro ciclo. Il ciclo interno
viene eseguito fino alla fine ogni volta che il ciclo esterno viene
eseguito una volta.
</dd>
<dt><strong>Coppia chiave-valore</strong></dt>
<dd>
La rappresentazione della mappatura da una chiave a un valore.
</dd>
<dt><strong>Dizionario</strong></dt>
<dd>
Una mappatura da un insieme di chiavi ai valori corrispondenti.
</dd>
<dt><strong>Elemento</strong></dt>
<dd>
Un altro nome della coppia chiave-valore.
</dd>
<dt><strong>Funzione hash</strong></dt>
<dd>
Una funzione usata da una tabella hash per calcolare la posizione di una
chiave.
</dd>
<dt><strong>Implementazione</strong></dt>
<dd>
Un modo di eseguire un calcolo.
</dd>
<dt><strong>Istogramma</strong></dt>
<dd>
Un insieme di contatori.
</dd>
<dt><strong>Ricerca</strong></dt>
<dd>
Un’operazione sul dizionario che accetta una chiave e trova il valore
corrispondente.
</dd>
<dt><strong>Tabella hash</strong></dt>
<dd>
L’algoritmo usato per implementare i dizionari di Python.
</dd>
<dt><strong>Valore</strong></dt>
<dd>
Un oggetto che compare in un dizionario come seconda parte di una coppia
chiave-valore. È un uso della parola “valore” più specifico di quello
precedente.
</dd>
</dl>
<h2 id="esercizi">Esercizi</h2>
<p><strong>Esercizio 2:</strong> Scrivi un programma che classifichi
ogni messaggio di posta in base al giorno della settimana in cui è stato
fatto il commit. Per farlo cerca le righe che iniziano con
<code>From</code>, poi cerca la terza parola e tieni un conteggio
progressivo per ciascun giorno della settimana. Alla fine del programma
stampa il contenuto del dizionario (l’ordine non conta).</p>
<p>Riga di esempio:</p>
<pre><code>From stephen.marquard@uct.ac.za Sat Jan  5 09:14:16 2008</code></pre>
<p>Esempio di esecuzione:</p>
<pre><code>python dow.py
Enter a file name: mbox-short.txt
{&#39;Fri&#39;: 20, &#39;Thu&#39;: 6, &#39;Sat&#39;: 1}</code></pre>
<p><strong>Esercizio 3:</strong> Scrivi un programma che legga un log di
posta, costruisca un istogramma usando un dizionario per contare quanti
messaggi sono arrivati da ciascun indirizzo email, e stampi il
dizionario.</p>
<pre><code>Enter file name: mbox-short.txt
{&#39;gopal.ramasammycook@gmail.com&#39;: 1, &#39;louis@media.berkeley.edu&#39;: 3,
&#39;cwen@iupui.edu&#39;: 5, &#39;antranig@caret.cam.ac.uk&#39;: 1,
&#39;rjlowe@iupui.edu&#39;: 2, &#39;gsilver@umich.edu&#39;: 3,
&#39;david.horwitz@uct.ac.za&#39;: 4, &#39;wagnermr@iupui.edu&#39;: 1,
&#39;zqian@umich.edu&#39;: 4, &#39;stephen.marquard@uct.ac.za&#39;: 2,
&#39;ray@media.berkeley.edu&#39;: 1}</code></pre>
<p><strong>Esercizio 4:</strong> Aggiungi al programma qui sopra del
codice per scoprire chi ha inviato più messaggi nel file. Una volta
letti tutti i dati e creato il dizionario, scorri il dizionario usando
un ciclo per il massimo (vedi Capitolo 5: Cicli per il massimo e il
minimo) per trovare chi ha più messaggi e stampa quanti messaggi ha
quella persona.</p>
<pre><code>Enter a file name: mbox-short.txt
cwen@iupui.edu 5

Enter a file name: mbox.txt
zqian@umich.edu 195</code></pre>
<p><strong>Esercizio 5:</strong> Questo programma registra il nome di
dominio (invece dell’indirizzo) da cui è stato inviato il messaggio, e
non chi ha inviato la posta (cioè l’intero indirizzo email). Alla fine
del programma stampa il contenuto del dizionario.</p>
<pre><code>python schoolcount.py
Enter a file name: mbox-short.txt
{&#39;media.berkeley.edu&#39;: 4, &#39;uct.ac.za&#39;: 6, &#39;umich.edu&#39;: 7,
&#39;gmail.com&#39;: 1, &#39;caret.cam.ac.uk&#39;: 1, &#39;iupui.edu&#39;: 8}</code></pre>
<section id="footnotes" class="footnotes footnotes-end-of-document"
role="doc-endnotes">
<hr />
<ol>
<li id="fn1"><p>Se vuoi davvero saperne di più sulle tabelle hash, c’è
un corso su https://www.cc4e.com che esamina come il linguaggio di
programmazione C implementa un dizionario Python.<a href="#fnref1"
class="footnote-back" role="doc-backlink">↩︎</a></p></li>
</ol>
</section>
</body>
</html>
<?php if ( file_exists("../bookfoot.php") ) {
  $HTML_FILE = basename(__FILE__);
  $HTML = ob_get_contents();
  ob_end_clean();
  require_once "../bookfoot.php";
}?>
