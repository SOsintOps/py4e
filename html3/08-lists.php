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
  <title>Liste</title>
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
<h1 id="liste">Liste</h1>
<p> </p>
<h2 id="una-lista-è-una-sequenza">Una lista è una sequenza</h2>
<p>Come una stringa, una <em>lista</em> è una sequenza di valori. In una
stringa i valori sono caratteri; in una lista possono essere di
qualsiasi tipo. I valori di una lista sono chiamati <em>elementi</em> o
a volte <em>item</em>.</p>
<p> </p>
<p>Ci sono diversi modi per creare una nuova lista; il più semplice è
racchiudere gli elementi tra parentesi quadre (<code>[</code> e
<code>]</code>):</p>
<pre class="python"><code>[10, 20, 30, 40]
[&#39;crunchy frog&#39;, &#39;ram bladder&#39;, &#39;lark vomit&#39;]</code></pre>
<p>Il primo esempio è una lista di quattro interi. Il secondo è una
lista di tre stringhe. Gli elementi di una lista non devono per forza
essere dello stesso tipo. La lista seguente contiene una stringa, un
numero in virgola mobile, un intero e (guarda un po’!) un’altra
lista:</p>
<pre class="python"><code>[&#39;spam&#39;, 2.0, 5, [10, 20]]</code></pre>
<p>Una lista dentro un’altra lista è <em>annidata</em>.</p>
<p> </p>
<p>Una lista che non contiene elementi è chiamata lista vuota; puoi
crearne una con le parentesi quadre vuote, <code>[]</code>.</p>
<p> </p>
<p>Come potresti aspettarti, puoi assegnare valori di tipo lista alle
variabili:</p>
<pre class="python"><code>&gt;&gt;&gt; cheeses = [&#39;Cheddar&#39;, &#39;Edam&#39;, &#39;Gouda&#39;]
&gt;&gt;&gt; numbers = [17, 123]
&gt;&gt;&gt; empty = []
&gt;&gt;&gt; print(cheeses, numbers, empty)
[&#39;Cheddar&#39;, &#39;Edam&#39;, &#39;Gouda&#39;] [17, 123] []</code></pre>
<h2 id="le-liste-sono-mutabili">Le liste sono mutabili</h2>
<p> </p>
<p>La sintassi per accedere agli elementi di una lista è la stessa usata
per accedere ai caratteri di una stringa: l’operatore parentesi quadre.
L’espressione dentro le parentesi quadre specifica l’indice. Ricorda che
gli indici partono da 0:</p>
<pre class="python"><code>&gt;&gt;&gt; print(cheeses[0])
Cheddar</code></pre>
<p>A differenza delle stringhe, le liste sono mutabili, perché puoi
cambiare l’ordine degli elementi di una lista o riassegnare un elemento
di una lista. Quando l’operatore parentesi quadre compare sul lato
sinistro di un’assegnazione, identifica l’elemento della lista a cui
verrà assegnato il valore.</p>
<pre class="python"><code>&gt;&gt;&gt; numbers = [17, 123]
&gt;&gt;&gt; numbers[1] = 5
&gt;&gt;&gt; print(numbers)
[17, 5]</code></pre>
<p>L’elemento numero 1 (“unesimo”) di <code>numbers</code>, che prima
era <code>123</code>, ora è <code>5</code>.</p>
<p> </p>
<p>Puoi pensare a una lista come a una relazione tra indici ed elementi.
Questa relazione è chiamata <em>mappatura</em> (mapping); ogni indice
“corrisponde a” uno degli elementi.</p>
<p> </p>
<p>Gli indici delle liste funzionano come quelli delle stringhe:</p>
<ul>
<li><p>Qualsiasi espressione intera può essere usata come
indice.</p></li>
<li><p>Se provi a leggere o a scrivere un elemento che non esiste,
ottieni un <code>IndexError</code>.</p></li>
</ul>
<p> </p>
<ul>
<li>Se un indice ha un valore negativo, conta all’indietro dalla fine
della lista.</li>
</ul>
<p> </p>
<p>Anche l’operatore <code>in</code> funziona sulle liste.</p>
<pre class="python"><code>&gt;&gt;&gt; cheeses = [&#39;Cheddar&#39;, &#39;Edam&#39;, &#39;Gouda&#39;]
&gt;&gt;&gt; &#39;Edam&#39; in cheeses
True
&gt;&gt;&gt; &#39;Brie&#39; in cheeses
False</code></pre>
<h2 id="scorrere-una-lista">Scorrere una lista</h2>
<p> </p>
<p>Il modo più comune per scorrere gli elementi di una lista è usare un
ciclo <code>for</code>. La sintassi è la stessa usata per le
stringhe:</p>
<pre class="python"><code>for cheese in cheeses:
    print(cheese)</code></pre>
<p>Questo funziona bene se devi solo leggere gli elementi della lista.
Ma se vuoi scrivere o aggiornare gli elementi, ti servono gli indici. Un
modo comune per farlo è combinare le funzioni <code>range</code> e
<code>len</code>:</p>
<p> </p>
<pre class="python"><code>for i in range(len(numbers)):
    numbers[i] = numbers[i] * 2</code></pre>
<p>Questo ciclo scorre la lista e aggiorna ogni elemento.
<code>len</code> restituisce il numero di elementi della lista.
<code>range</code> restituisce una sequenza di indici da 0 a
<math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi>n</mi><mo>−</mo><mn>1</mn></mrow><annotation encoding="application/x-tex">n-1</annotation></semantics></math>,
dove
<math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mi>n</mi><annotation encoding="application/x-tex">n</annotation></semantics></math>
è la lunghezza della lista. A ogni passaggio del ciclo, <code>i</code>
riceve l’indice dell’elemento successivo. L’istruzione di assegnazione
nel corpo usa <code>i</code> per leggere il vecchio valore dell’elemento
e per assegnare il nuovo valore.</p>
<p> </p>
<p>Un ciclo <code>for</code> su una lista vuota non esegue mai il
corpo:</p>
<pre class="python"><code>for x in empty:
    print(&#39;This never happens.&#39;)</code></pre>
<p>Anche se una lista può contenere un’altra lista, la lista annidata
conta comunque come un singolo elemento. La lunghezza di questa lista è
quattro:</p>
<p> </p>
<pre class="python"><code>[&#39;spam&#39;, 1, [&#39;Brie&#39;, &#39;Roquefort&#39;, &#39;Pol le Veq&#39;], [1, 2, 3]]</code></pre>
<h2 id="operazioni-sulle-liste">Operazioni sulle liste</h2>
<p>L’operatore <code>+</code> concatena le liste:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; a = [1, 2, 3]
&gt;&gt;&gt; b = [4, 5, 6]
&gt;&gt;&gt; c = a + b
&gt;&gt;&gt; print(c)
[1, 2, 3, 4, 5, 6]</code></pre>
<p>Allo stesso modo, l’operatore <code>*</code> ripete una lista un dato
numero di volte:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; [0] * 4
[0, 0, 0, 0]
&gt;&gt;&gt; [1, 2, 3] * 3
[1, 2, 3, 1, 2, 3, 1, 2, 3]</code></pre>
<p>Il primo esempio ripete <code>[0]</code> quattro volte. Il secondo
esempio ripete la lista <code>[1, 2, 3]</code> tre volte.</p>
<h2 id="slice-di-liste">Slice di liste</h2>
<p> </p>
<p>Anche l’operatore slice funziona sulle liste:</p>
<pre class="python"><code>&gt;&gt;&gt; t = [&#39;a&#39;, &#39;b&#39;, &#39;c&#39;, &#39;d&#39;, &#39;e&#39;, &#39;f&#39;]
&gt;&gt;&gt; t[1:3]
[&#39;b&#39;, &#39;c&#39;]
&gt;&gt;&gt; t[:4]
[&#39;a&#39;, &#39;b&#39;, &#39;c&#39;, &#39;d&#39;]
&gt;&gt;&gt; t[3:]
[&#39;d&#39;, &#39;e&#39;, &#39;f&#39;]</code></pre>
<p>Se ometti il primo indice, la slice parte dall’inizio. Se ometti il
secondo, la slice arriva fino alla fine. Quindi, se li ometti entrambi,
la slice è una copia dell’intera lista.</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; t[:]
[&#39;a&#39;, &#39;b&#39;, &#39;c&#39;, &#39;d&#39;, &#39;e&#39;, &#39;f&#39;]</code></pre>
<p>Poiché le liste sono mutabili, spesso è utile farne una copia prima
di eseguire operazioni che piegano, infilzano o mutilano le liste.</p>
<p>Un operatore slice sul lato sinistro di un’assegnazione può
aggiornare più elementi:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; t = [&#39;a&#39;, &#39;b&#39;, &#39;c&#39;, &#39;d&#39;, &#39;e&#39;, &#39;f&#39;]
&gt;&gt;&gt; t[1:3] = [&#39;x&#39;, &#39;y&#39;]
&gt;&gt;&gt; print(t)
[&#39;a&#39;, &#39;x&#39;, &#39;y&#39;, &#39;d&#39;, &#39;e&#39;, &#39;f&#39;]</code></pre>
<h2 id="metodi-delle-liste">Metodi delle liste</h2>
<p> </p>
<p>Python fornisce metodi che operano sulle liste. Ad esempio,
<code>append</code> aggiunge un nuovo elemento alla fine di una
lista:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; t = [&#39;a&#39;, &#39;b&#39;, &#39;c&#39;]
&gt;&gt;&gt; t.append(&#39;d&#39;)
&gt;&gt;&gt; print(t)
[&#39;a&#39;, &#39;b&#39;, &#39;c&#39;, &#39;d&#39;]</code></pre>
<p><code>extend</code> accetta una lista come argomento e ne aggiunge in
coda tutti gli elementi:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; t1 = [&#39;a&#39;, &#39;b&#39;, &#39;c&#39;]
&gt;&gt;&gt; t2 = [&#39;d&#39;, &#39;e&#39;]
&gt;&gt;&gt; t1.extend(t2)
&gt;&gt;&gt; print(t1)
[&#39;a&#39;, &#39;b&#39;, &#39;c&#39;, &#39;d&#39;, &#39;e&#39;]</code></pre>
<p>Questo esempio lascia <code>t2</code> invariata.</p>
<p><code>sort</code> dispone gli elementi della lista dal più piccolo al
più grande:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; t = [&#39;d&#39;, &#39;c&#39;, &#39;e&#39;, &#39;b&#39;, &#39;a&#39;]
&gt;&gt;&gt; t.sort()
&gt;&gt;&gt; print(t)
[&#39;a&#39;, &#39;b&#39;, &#39;c&#39;, &#39;d&#39;, &#39;e&#39;]</code></pre>
<p>La maggior parte dei metodi delle liste sono vuoti: modificano la
lista e restituiscono <code>None</code>. Se per sbaglio scrivi
<code>t = t.sort()</code>, resterai deluso dal risultato.</p>
<p> </p>
<h2 id="eliminare-elementi">Eliminare elementi</h2>
<p> </p>
<p>Ci sono diversi modi per eliminare elementi da una lista. Se conosci
l’indice dell’elemento che vuoi, puoi usare <code>pop</code>:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; t = [&#39;a&#39;, &#39;b&#39;, &#39;c&#39;]
&gt;&gt;&gt; x = t.pop(1)
&gt;&gt;&gt; print(t)
[&#39;a&#39;, &#39;c&#39;]
&gt;&gt;&gt; print(x)
b</code></pre>
<p><code>pop</code> modifica la lista e restituisce l’elemento che è
stato rimosso. Se non fornisci un indice, elimina e restituisce l’ultimo
elemento.</p>
<p>Se non ti serve il valore rimosso, puoi usare l’istruzione
<code>del</code>:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; t = [&#39;a&#39;, &#39;b&#39;, &#39;c&#39;]
&gt;&gt;&gt; del t[1]
&gt;&gt;&gt; print(t)
[&#39;a&#39;, &#39;c&#39;]</code></pre>
<p>Se conosci l’elemento che vuoi rimuovere (ma non l’indice), puoi
usare <code>remove</code>:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; t = [&#39;a&#39;, &#39;b&#39;, &#39;c&#39;]
&gt;&gt;&gt; t.remove(&#39;b&#39;)
&gt;&gt;&gt; print(t)
[&#39;a&#39;, &#39;c&#39;]</code></pre>
<p>Il valore di ritorno di <code>remove</code> è <code>None</code>.</p>
<p> </p>
<p>Per rimuovere più di un elemento, puoi usare <code>del</code> con un
indice di slice:</p>
<pre class="python"><code>&gt;&gt;&gt; t = [&#39;a&#39;, &#39;b&#39;, &#39;c&#39;, &#39;d&#39;, &#39;e&#39;, &#39;f&#39;]
&gt;&gt;&gt; del t[1:5]
&gt;&gt;&gt; print(t)
[&#39;a&#39;, &#39;f&#39;]</code></pre>
<p>Come al solito, la slice seleziona tutti gli elementi fino al secondo
indice, escluso.</p>
<h2 id="liste-e-funzioni">Liste e funzioni</h2>
<p>Ci sono diverse funzioni built-in che si possono usare sulle liste e
che ti permettono di esaminare rapidamente una lista senza scrivere
cicli tuoi:</p>
<pre class="python"><code>&gt;&gt;&gt; nums = [3, 41, 12, 9, 74, 15]
&gt;&gt;&gt; print(len(nums))
6
&gt;&gt;&gt; print(max(nums))
74
&gt;&gt;&gt; print(min(nums))
3
&gt;&gt;&gt; print(sum(nums))
154
&gt;&gt;&gt; print(sum(nums)/len(nums))
25</code></pre>
<p>La funzione <code>sum()</code> si può usare solo quando gli elementi
della lista sono numeri. Le altre (<code>max()</code>,
<code>len()</code>, ecc.) funzionano con liste di stringhe e di altri
tipi che possono essere confrontati.</p>
<p>Usando una lista potremmo riscrivere un programma precedente, che
calcolava la media di un elenco di numeri inseriti dall’utente.</p>
<p>Per prima cosa, il programma per calcolare una media senza una
lista:</p>
<pre class="python"><code>total = 0
count = 0
while (True):
    inp = input(&#39;Enter a number: &#39;)
    if inp == &#39;done&#39;: break
    value = float(inp)
    total = total + value
    count = count + 1

average = total / count
print(&#39;Average:&#39;, average)

# Code: https://www.py4e.com/code3/avenum.py</code></pre>
<p>In questo programma abbiamo le variabili <code>count</code> e
<code>total</code> per tenere il conteggio e il totale parziale dei
numeri dell’utente mentre continuiamo a chiedergli un numero.</p>
<p>Potremmo semplicemente ricordare ogni numero man mano che l’utente lo
inserisce e usare le funzioni built-in per calcolare la somma e il
conteggio alla fine.</p>
<pre class="python"><code>numlist = list()
while (True):
    inp = input(&#39;Enter a number: &#39;)
    if inp == &#39;done&#39;: break
    value = float(inp)
    numlist.append(value)

average = sum(numlist) / len(numlist)
print(&#39;Average:&#39;, average)

# Code: https://www.py4e.com/code3/avelist.py</code></pre>
<p>Creiamo una lista vuota prima che il ciclo inizi, e poi ogni volta
che abbiamo un numero lo aggiungiamo in coda alla lista. Alla fine del
programma calcoliamo semplicemente la somma dei numeri della lista e la
dividiamo per il conteggio dei numeri della lista per ottenere la
media.</p>
<h2 id="liste-e-stringhe">Liste e stringhe</h2>
<p> </p>
<p>Una stringa è una sequenza di caratteri e una lista è una sequenza di
valori, ma una lista di caratteri non è la stessa cosa di una stringa.
Per convertire una stringa in una lista di caratteri puoi usare
<code>list</code>:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; s = &#39;spam&#39;
&gt;&gt;&gt; t = list(s)
&gt;&gt;&gt; print(t)
[&#39;s&#39;, &#39;p&#39;, &#39;a&#39;, &#39;m&#39;]</code></pre>
<p>Poiché <code>list</code> è il nome di una funzione built-in, dovresti
evitare di usarlo come nome di variabile. Io evito anche la lettera
<code>l</code>, perché somiglia troppo al numero <code>1</code>. Ecco
perché uso <code>t</code>.</p>
<p>La funzione <code>list</code> spezza una stringa in singole lettere.
Se vuoi spezzare una stringa in parole, puoi usare il metodo
<code>split</code>:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; s = &#39;pining for the fjords&#39;
&gt;&gt;&gt; t = s.split()
&gt;&gt;&gt; print(t)
[&#39;pining&#39;, &#39;for&#39;, &#39;the&#39;, &#39;fjords&#39;]
&gt;&gt;&gt; print(t[2])
the</code></pre>
<p>Una volta usato <code>split</code> per spezzare la stringa in una
lista di parole, puoi usare l’operatore di indicizzazione (parentesi
quadre) per guardare una particolare parola della lista.</p>
<p>Puoi chiamare <code>split</code> con un argomento opzionale detto
<em>delimitatore</em>, che specifica quali caratteri usare come confini
delle parole. L’esempio seguente usa un trattino come delimitatore:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; s = &#39;spam-spam-spam&#39;
&gt;&gt;&gt; delimiter = &#39;-&#39;
&gt;&gt;&gt; s.split(delimiter)
[&#39;spam&#39;, &#39;spam&#39;, &#39;spam&#39;]</code></pre>
<p><code>join</code> è l’inverso di <code>split</code>. Accetta una
lista di stringhe e ne concatena gli elementi. <code>join</code> è un
metodo delle stringhe, quindi devi invocarlo sul delimitatore e passare
la lista come parametro:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; t = [&#39;pining&#39;, &#39;for&#39;, &#39;the&#39;, &#39;fjords&#39;]
&gt;&gt;&gt; delimiter = &#39; &#39;
&gt;&gt;&gt; delimiter.join(t)
&#39;pining for the fjords&#39;</code></pre>
<p>In questo caso il delimitatore è un carattere di spazio, quindi
<code>join</code> mette uno spazio tra le parole. Per concatenare
stringhe senza spazi puoi usare come delimitatore la stringa vuota,
<code>""</code>.</p>
<p> </p>
<h2 id="analisi-delle-righe">Analisi delle righe</h2>
<p>Di solito, quando leggiamo un file, con le righe vogliamo fare
qualcosa di più che stamparle per intero. Spesso vogliamo trovare le
“righe interessanti” e poi <em>analizzare</em> la riga per trovarne
qualche <em>parte</em> interessante. E se volessimo stampare il giorno
della settimana delle righe che iniziano con <code>"From "</code>?</p>
<pre><code>From stephen.marquard@uct.ac.za Sat Jan  5 09:14:16 2008</code></pre>
<p>Il metodo <code>split</code> è molto efficace con questo tipo di
problema. Possiamo scrivere un piccolo programma che cerca le righe che
iniziano con <code>"From "</code>, divide queste righe con
<code>split</code> e poi stampa la terza parola della riga:</p>
<pre class="python"><code>fhand = open(&#39;mbox-short.txt&#39;)
for line in fhand:
    line = line.rstrip()
    if not line.startswith(&#39;From &#39;): continue
    words = line.split()
    print(words[2])

# Code: https://www.py4e.com/code3/search5.py</code></pre>
<p>Il programma produce il seguente output:</p>
<pre><code>Sat
Fri
Fri
Fri
...</code></pre>
<p>Più avanti impareremo tecniche sempre più sofisticate per scegliere
le righe su cui lavorare e per scomporre quelle righe fino a trovare
l’esatta informazione che stiamo cercando.</p>
<h2 id="oggetti-e-valori">Oggetti e valori</h2>
<p> </p>
<p>Se eseguiamo queste istruzioni di assegnazione:</p>
<pre class="python"><code>a = &#39;banana&#39;
b = &#39;banana&#39;</code></pre>
<p>sappiamo che <code>a</code> e <code>b</code> si riferiscono entrambe
a una stringa, ma non sappiamo se si riferiscono alla <em>stessa</em>
stringa. Ci sono due stati possibili:</p>
<figure>
<img src="../images/list1.svg" alt="Variabili e oggetti" style="height: 0.5in;"/>
<figcaption>
Variabili e oggetti
</figcaption>
</figure>
<p>In un caso, <code>a</code> e <code>b</code> si riferiscono a due
oggetti diversi che hanno lo stesso valore. Nel secondo caso, si
riferiscono allo stesso oggetto.</p>
<p> </p>
<p>Per controllare se due variabili si riferiscono allo stesso oggetto,
puoi usare l’operatore <code>is</code>.</p>
<pre class="python"><code>&gt;&gt;&gt; a = &#39;banana&#39;
&gt;&gt;&gt; b = &#39;banana&#39;
&gt;&gt;&gt; a is b
True</code></pre>
<p>In questo esempio Python ha creato un solo oggetto stringa, e sia
<code>a</code> sia <code>b</code> si riferiscono a esso.</p>
<p>Ma quando crei due liste, ottieni due oggetti:</p>
<pre class="python"><code>&gt;&gt;&gt; a = [1, 2, 3]
&gt;&gt;&gt; b = [1, 2, 3]
&gt;&gt;&gt; a is b
False</code></pre>
<p>In questo caso diremmo che le due liste sono <em>equivalenti</em>,
perché hanno gli stessi elementi, ma non <em>identiche</em>, perché non
sono lo stesso oggetto. Se due oggetti sono identici, sono anche
equivalenti, ma se sono equivalenti non sono necessariamente
identici.</p>
<p> </p>
<p>Finora abbiamo usato “oggetto” e “valore” in modo intercambiabile, ma
è più preciso dire che un oggetto ha un valore. Se esegui
<code>a = [1,2,3]</code>, <code>a</code> si riferisce a un oggetto lista
il cui valore è una particolare sequenza di elementi. Se un’altra lista
ha gli stessi elementi, diremmo che ha lo stesso valore.</p>
<p> </p>
<h2 id="aliasing">Aliasing</h2>
<p> </p>
<p>Se <code>a</code> si riferisce a un oggetto e assegni
<code>b = a</code>, allora entrambe le variabili si riferiscono allo
stesso oggetto:</p>
<pre class="python"><code>&gt;&gt;&gt; a = [1, 2, 3]
&gt;&gt;&gt; b = a
&gt;&gt;&gt; b is a
True</code></pre>
<p>L’associazione di una variabile con un oggetto è chiamata
<em>riferimento</em>. In questo esempio ci sono due riferimenti allo
stesso oggetto.</p>
<p>Un oggetto con più di un riferimento ha più di un nome, quindi
diciamo che l’oggetto ha degli <em>alias</em>.</p>
<p>Se l’oggetto con più alias è mutabile, le modifiche fatte con un
alias hanno effetto sull’altro:</p>
<pre class="python"><code>&gt;&gt;&gt; b[0] = 17
&gt;&gt;&gt; print(a)
[17, 2, 3]</code></pre>
<p>Anche se questo comportamento può essere utile, è soggetto a errori.
In generale, è più sicuro evitare l’aliasing quando lavori con oggetti
mutabili.</p>
<p>Per gli oggetti immutabili come le stringhe, l’aliasing non è un gran
problema. In questo esempio:</p>
<pre class="python"><code>a = &#39;banana&#39;
b = &#39;banana&#39;</code></pre>
<p>non fa quasi mai differenza se <code>a</code> e <code>b</code> si
riferiscono alla stessa stringa o no.</p>
<h2 id="liste-come-argomenti">Liste come argomenti</h2>
<p> </p>
<p>Quando passi una lista a una funzione, la funzione riceve un
riferimento alla lista. Se la funzione modifica un parametro di tipo
lista, il chiamante vede la modifica. Ad esempio,
<code>delete_head</code> rimuove il primo elemento da una lista:</p>
<pre class="python"><code>def delete_head(t):
    del t[0]</code></pre>
<p>Ecco come si usa:</p>
<pre class="python"><code>&gt;&gt;&gt; letters = [&#39;a&#39;, &#39;b&#39;, &#39;c&#39;]
&gt;&gt;&gt; delete_head(letters)
&gt;&gt;&gt; print(letters)
[&#39;b&#39;, &#39;c&#39;]</code></pre>
<p>Il parametro <code>t</code> e la variabile <code>letters</code> sono
alias dello stesso oggetto.</p>
<p>È importante distinguere tra le operazioni che modificano le liste e
quelle che creano nuove liste. Ad esempio, il metodo <code>append</code>
modifica una lista, ma l’operatore <code>+</code> crea una nuova
lista:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; t1 = [1, 2]
&gt;&gt;&gt; t2 = t1.append(3)
&gt;&gt;&gt; print(t1)
[1, 2, 3]
&gt;&gt;&gt; print(t2)
None

&gt;&gt;&gt; t3 = t1 + [3]
&gt;&gt;&gt; print(t3)
[1, 2, 3]
&gt;&gt;&gt; t1 is t3
False</code></pre>
<p>Questa differenza è importante quando scrivi funzioni che devono
modificare le liste. Ad esempio, questa funzione <em>non</em> elimina la
testa di una lista:</p>
<pre class="python"><code>def bad_delete_head(t):
    t = t[1:]              # WRONG!</code></pre>
<p>L’operatore slice crea una nuova lista e l’assegnazione fa sì che
<code>t</code> si riferisca a essa, ma niente di tutto ciò ha effetto
sulla lista che è stata passata come argomento.</p>
<p> </p>
<p>Un’alternativa è scrivere una funzione che crea e restituisce una
nuova lista. Ad esempio, <code>tail</code> restituisce tutti gli
elementi di una lista tranne il primo:</p>
<pre class="python"><code>def tail(t):
    return t[1:]</code></pre>
<p>Questa funzione lascia invariata la lista originale. Ecco come si
usa:</p>
<pre class="python"><code>&gt;&gt;&gt; letters = [&#39;a&#39;, &#39;b&#39;, &#39;c&#39;]
&gt;&gt;&gt; rest = tail(letters)
&gt;&gt;&gt; print(rest)
[&#39;b&#39;, &#39;c&#39;]</code></pre>
<p><strong>Esercizio 1:</strong> Scrivi una funzione chiamata
<code>chop</code> che accetta una lista e la modifica, rimuovendo il
primo e l’ultimo elemento, e restituisce <code>None</code>. Poi scrivi
una funzione chiamata <code>middle</code> che accetta una lista e
restituisce una nuova lista che contiene tutti gli elementi tranne il
primo e l’ultimo.</p>
<h2 id="debug">Debug</h2>
<p>Un uso disattento delle liste (e di altri oggetti mutabili) può
portare a lunghe ore di debug. Ecco alcune trappole comuni e i modi per
evitarle:</p>
<ol type="1">
<li><p>Non dimenticare che la maggior parte dei metodi delle liste
modifica l’argomento e restituisce <code>None</code>. È l’opposto dei
metodi delle stringhe, che restituiscono una nuova stringa e non toccano
l’originale.</p>
<p>Se sei abituato a scrivere codice per le stringhe come questo:</p>
<pre class="python"><code>word = word.strip()</code></pre>
<p>Viene la tentazione di scrivere codice per le liste come questo:</p>
<pre class="python"><code>t = t.sort()           # WRONG!</code></pre>
<p> </p>
<p>Poiché <code>sort</code> restituisce <code>None</code>, è probabile
che la successiva operazione che esegui con <code>t</code> fallisca.</p>
<p>Prima di usare i metodi e gli operatori delle liste, dovresti leggere
con attenzione la documentazione e poi testarli in modalità interattiva.
I metodi e gli operatori che le liste condividono con altre sequenze
(come le stringhe) sono documentati su:</p>
<p><a
href="https://docs.python.org/library/stdtypes.html#common-sequence-operations">docs.python.org/library/stdtypes.html#common-sequence-operations</a></p>
<p>I metodi e gli operatori che si applicano solo alle sequenze mutabili
sono documentati su:</p>
<p><a
href="https://docs.python.org/library/stdtypes.html#mutable-sequence-types">docs.python.org/library/stdtypes.html#mutable-sequence-types</a></p></li>
<li><p>Scegli un idioma e attieniti a quello.</p>
<p>Parte del problema con le liste è che ci sono troppi modi di fare le
cose. Ad esempio, per rimuovere un elemento da una lista puoi usare
<code>pop</code>, <code>remove</code>, <code>del</code> o perfino
un’assegnazione a una slice.</p>
<p>Per aggiungere un elemento puoi usare il metodo <code>append</code> o
l’operatore <code>+</code>. Ma non dimenticare che questi sono
giusti:</p>
<pre class="python"><code>t.append(x)
t = t + [x]</code></pre>
<p>E questi sono sbagliati:</p>
<pre class="python"><code>t.append([x])          # WRONG!
t = t.append(x)        # WRONG!
t + [x]                # WRONG!
t = t + x              # WRONG!</code></pre>
<p>Prova ognuno di questi esempi in modalità interattiva per assicurarti
di capire cosa fanno. Nota che solo l’ultimo causa un errore di runtime;
gli altri tre sono leciti, ma fanno la cosa sbagliata.</p></li>
<li><p>Fai delle copie per evitare l’aliasing.</p>
<p> </p>
<p>Se vuoi usare un metodo come <code>sort</code>, che modifica
l’argomento, ma devi conservare anche la lista originale, puoi farne una
copia.</p>
<pre class="python"><code>orig = t[:]
t.sort()</code></pre>
<p>In questo esempio potresti usare anche la funzione built-in
<code>sorted</code>, che restituisce una nuova lista ordinata e non
tocca l’originale. Ma in quel caso dovresti evitare di usare
<code>sorted</code> come nome di variabile!</p></li>
<li><p>Liste, <code>split</code> e file</p>
<p>Quando leggiamo e analizziamo i file, ci sono molte occasioni di
incontrare un input che può mandare in crash il nostro programma, quindi
è una buona idea riprendere lo schema del <em>guardiano</em> quando si
tratta di scrivere programmi che leggono un file e cercano un “ago nel
pagliaio”.</p>
<p>Riprendiamo il nostro programma che cerca il giorno della settimana
nelle righe <code>From</code> del file:</p>
<pre><code>From stephen.marquard@uct.ac.za Sat Jan  5 09:14:16 2008</code></pre>
<p>Dato che stiamo spezzando questa riga in parole, potremmo fare a meno
di <code>startswith</code> e guardare semplicemente la prima parola per
stabilire se la riga ci interessa. Possiamo usare <code>continue</code>
per saltare le righe che non hanno <code>From</code> come prima parola,
come segue:</p>
<pre class="python"><code>fhand = open(&#39;mbox-short.txt&#39;)
for line in fhand:
    words = line.split()
    if words[0] != &#39;From&#39; : continue
    print(words[2])</code></pre>
<p>Sembra molto più semplice e non ci serve nemmeno <code>rstrip</code>
per rimuovere il newline (il carattere di fine riga) alla fine della
riga. Ma è meglio?</p>
<pre><code>python search8.py
Sat
Traceback (most recent call last):
  File &quot;search8.py&quot;, line 5, in &lt;module&gt;
    if words[0] != &#39;From&#39; : continue
IndexError: list index out of range</code></pre>
<p>Più o meno funziona e vediamo il giorno della prima riga
(<code>Sat</code>), ma poi il programma fallisce con un errore di
traceback. Cos’è andato storto? Quali dati pasticciati hanno fatto
fallire il nostro programma elegante, intelligente e molto Pythonic?</p>
<p>Potresti fissarlo a lungo e scervellarti oppure chiedere aiuto a
qualcuno, ma l’approccio più rapido e intelligente è aggiungere
un’istruzione <code>print</code>. Il posto migliore per aggiungerla è
subito prima della riga in cui il programma è fallito, per stampare i
dati che sembrano causare l’errore.</p>
<p>Certo, questo approccio può generare molte righe di output, ma almeno
avrai subito qualche indizio sul problema in questione. Quindi
aggiungiamo una stampa della variabile <code>words</code> subito prima
della riga cinque. Aggiungiamo anche un prefisso <code>Debug:</code>
alla riga, così da tenere separati l’output normale e quello di
debug.</p>
<pre class="python"><code>for line in fhand:
    words = line.split()
    print(&#39;Debug:&#39;, words)
    if words[0] != &#39;From&#39; : continue
    print(words[2])</code></pre>
<p>Quando eseguiamo il programma, molto output scorre via dallo schermo,
ma alla fine vediamo il nostro output di debug e il traceback, quindi
sappiamo cos’è successo subito prima del traceback.</p>
<pre><code>Debug: [&#39;X-DSPAM-Confidence:&#39;, &#39;0.8475&#39;]
Debug: [&#39;X-DSPAM-Probability:&#39;, &#39;0.0000&#39;]
Debug: []
Traceback (most recent call last):
  File &quot;search9.py&quot;, line 6, in &lt;module&gt;
    if words[0] != &#39;From&#39; : continue
IndexError: list index out of range</code></pre>
<p>Ogni riga di debug stampa la lista di parole che otteniamo quando
dividiamo la riga in parole con <code>split</code>. Quando il programma
fallisce, la lista di parole è vuota: <code>[]</code>. Se apriamo il
file in un editor di testo e lo guardiamo, in quel punto appare
così:</p>
<pre><code>X-DSPAM-Result: Innocent
X-DSPAM-Processed: Sat Jan  5 09:14:16 2008
X-DSPAM-Confidence: 0.8475
X-DSPAM-Probability: 0.0000

Details: http://source.sakaiproject.org/viewsvn/?view=rev&amp;rev=39772</code></pre>
<p>L’errore si verifica quando il nostro programma incontra una riga
vuota! Naturalmente in una riga vuota ci sono “zero parole”. Perché non
ci abbiamo pensato quando scrivevamo il codice? Quando il codice cerca
la prima parola (<code>words[0]</code>) per controllare se corrisponde a
<code>From</code>, otteniamo un errore “index out of range”.</p>
<p>Questo naturalmente è il posto perfetto per aggiungere del codice
<em>guardiano</em>, per evitare di controllare la prima parola se non
c’è. Ci sono molti modi per proteggere questo codice; noi sceglieremo di
controllare il numero di parole che abbiamo prima di guardare la prima
parola:</p>
<pre class="python"><code>fhand = open(&#39;mbox-short.txt&#39;)
count = 0
for line in fhand:
    words = line.split()
    # print(&#39;Debug:&#39;, words)
    if len(words) == 0 : continue
    if words[0] != &#39;From&#39; : continue
    print(words[2])</code></pre>
<p>Per prima cosa abbiamo trasformato in commento l’istruzione
<code>print</code> di debug invece di rimuoverla, nel caso in cui la
nostra modifica fallisca e dobbiamo fare di nuovo il debug. Poi abbiamo
aggiunto un’istruzione guardiana che controlla se abbiamo zero parole e,
in tal caso, usiamo <code>continue</code> per saltare alla riga
successiva del file.</p>
<p>Possiamo pensare alle due istruzioni <code>continue</code> come a un
aiuto per affinare l’insieme delle righe che per noi sono “interessanti”
e che vogliamo elaborare ulteriormente. Una riga che non ha parole è
“non interessante” per noi, quindi saltiamo alla riga successiva. Una
riga che non ha <code>From</code> come prima parola non è interessante
per noi, quindi la saltiamo.</p>
<p>Il programma così modificato viene eseguito con successo, quindi
forse è corretto. La nostra istruzione guardiana garantisce che
<code>words[0]</code> non fallirà mai, ma forse non basta. Quando
programmiamo, dobbiamo sempre pensare: “Cosa potrebbe andare
storto?”</p></li>
</ol>
<p><strong>Esercizio 2:</strong> Scopri quale riga del programma qui
sopra non è ancora protetta nel modo giusto. Vedi se riesci a costruire
un file di testo che fa fallire il programma, poi modifica il programma
in modo che la riga sia protetta nel modo giusto e testalo per
assicurarti che gestisca il tuo nuovo file di testo.</p>
<p><strong>Esercizio 3:</strong> Riscrivi il codice guardiano
dell’esempio qui sopra senza due istruzioni <code>if</code>. Usa invece
un’espressione logica composta, con l’operatore logico <code>or</code> e
una sola istruzione <code>if</code>.</p>
<h2 id="glossario">Glossario</h2>
<dl>
<dt><strong>Aliasing</strong></dt>
<dd>
Una circostanza in cui due o più variabili si riferiscono allo stesso
oggetto.
</dd>
<dt><strong>Delimitatore</strong></dt>
<dd>
Un carattere o una stringa usati per indicare dove va divisa una
stringa.
</dd>
<dt><strong>Elemento</strong></dt>
<dd>
Uno dei valori di una lista (o di un’altra sequenza); detto anche item.
</dd>
<dt><strong>Equivalente</strong></dt>
<dd>
Relativo a oggetti che hanno lo stesso valore.
</dd>
<dt><strong>Identico</strong></dt>
<dd>
Relativo a oggetti che sono lo stesso oggetto (il che implica
l’equivalenza).
</dd>
<dt><strong>Indice</strong></dt>
<dd>
Un valore intero che indica un elemento di una lista.
</dd>
<dt><strong>Lista</strong></dt>
<dd>
Una sequenza di valori.
</dd>
<dt><strong>Lista annidata</strong></dt>
<dd>
Una lista che è un elemento di un’altra lista.
</dd>
<dt><strong>Oggetto</strong></dt>
<dd>
Qualcosa a cui una variabile può riferirsi. Un oggetto ha un tipo e un
valore.
</dd>
<dt><strong>Riferimento</strong></dt>
<dd>
L’associazione tra una variabile e il suo valore.
</dd>
<dt><strong>Scorrimento di una lista</strong></dt>
<dd>
L’accesso in sequenza a ogni elemento di una lista.
</dd>
</dl>
<h2 id="esercizi">Esercizi</h2>
<p><strong>Esercizio 4: Trova tutte le parole distinte di un
file</strong></p>
<p>Shakespeare ha usato oltre 20.000 parole nelle sue opere. Ma come
faresti a stabilirlo? Come produrresti l’elenco di tutte le parole che
Shakespeare ha usato? Scaricheresti tutte le sue opere, le leggeresti e
terresti traccia a mano di tutte le parole distinte?</p>
<p>Usiamo invece Python per riuscirci. Elenca tutte le parole distinte,
in ordine alfabetico, memorizzate in un file <code>romeo.txt</code> che
contiene una parte dell’opera di Shakespeare.</p>
<p>Per cominciare, scarica una copia del file <a
href="http://www.py4e.com/code3/romeo.txt">www.py4e.com/code3/romeo.txt</a>.
Crea una lista di parole distinte, che conterrà il risultato finale.
Scrivi un programma che apra il file <code>romeo.txt</code> e lo legga
riga per riga. Dividi ogni riga in una lista di parole usando il metodo
<code>split</code>. Per ogni parola, controlla se è già nella lista
delle parole distinte. Se non c’è, aggiungila alla lista. Quando il
programma ha finito, ordina e stampa la lista delle parole distinte in
ordine alfabetico.</p>
<pre><code>Enter file: romeo.txt
[&#39;Arise&#39;, &#39;But&#39;, &#39;It&#39;, &#39;Juliet&#39;, &#39;Who&#39;, &#39;already&#39;,
&#39;and&#39;, &#39;breaks&#39;, &#39;east&#39;, &#39;envious&#39;, &#39;fair&#39;, &#39;grief&#39;,
&#39;is&#39;, &#39;kill&#39;, &#39;light&#39;, &#39;moon&#39;, &#39;pale&#39;, &#39;sick&#39;, &#39;soft&#39;,
&#39;sun&#39;, &#39;the&#39;, &#39;through&#39;, &#39;what&#39;, &#39;window&#39;,
&#39;with&#39;, &#39;yonder&#39;]</code></pre>
<p><strong>Esercizio 5: Client di posta minimalista.</strong></p>
<p>MBOX (mail box) è un formato di file molto diffuso per memorizzare e
condividere una raccolta di email. Era usato dai primi server di posta e
dalle prime applicazioni desktop. Senza entrare troppo nei dettagli,
MBOX è un file di testo che memorizza le email una dopo l’altra. Le
email sono separate da una riga speciale che inizia con
<code>"From "</code> (nota lo spazio). Attenzione: le righe che iniziano
con <code>From:</code> (nota i due punti) descrivono l’email stessa e
non fanno da separatore. Immagina di aver scritto un’applicazione di
posta minimalista, che elenca gli indirizzi email dei mittenti nella
posta in arrivo dell’utente e conta il numero di email.</p>
<p>Scrivi un programma che legga i dati della casella di posta e, quando
trova una riga che inizia con <code>From</code>, la divida in parole
usando il metodo <code>split</code>. Ci interessa chi ha inviato il
messaggio, cioè la seconda parola della riga <code>From</code>.</p>
<pre><code>From stephen.marquard@uct.ac.za Sat Jan 5 09:14:16 2008</code></pre>
<p>Analizza la riga <code>From</code> e stampa la seconda parola di ogni
riga <code>From</code>, poi conta anche il numero di righe
<code>From</code> (non <code>From:</code>) e stampa il conteggio alla
fine. Ecco un buon esempio di output, con alcune righe rimosse:</p>
<pre><code>python fromcount.py
Enter a file name: mbox-short.txt
stephen.marquard@uct.ac.za
louis@media.berkeley.edu
zqian@umich.edu

[...some output removed...]

ray@media.berkeley.edu
cwen@iupui.edu
cwen@iupui.edu
cwen@iupui.edu
There were 27 lines in the file with From as the first word</code></pre>
<p><strong>Esercizio 6:</strong></p>
<p>Riscrivi il programma che chiede all’utente un elenco di numeri e
stampa alla fine il massimo e il minimo dei numeri, quando l’utente
inserisce <code>done</code>. Scrivi il programma in modo che memorizzi
in una lista i numeri che l’utente inserisce e usi le funzioni
<code>max()</code> e <code>min()</code> per calcolare il numero massimo
e il numero minimo dopo la fine del ciclo.</p>
<pre><code>Enter a number: 6
Enter a number: 2
Enter a number: 9
Enter a number: 3
Enter a number: 5
Enter a number: done
Maximum: 9.0
Minimum: 2.0</code></pre>
</body>
</html>
<?php if ( file_exists("../bookfoot.php") ) {
  $HTML_FILE = basename(__FILE__);
  $HTML = ob_get_contents();
  ob_end_clean();
  require_once "../bookfoot.php";
}?>
