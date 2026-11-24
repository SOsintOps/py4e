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
  <title>Tuple</title>
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
<h1 id="tuple">Tuple</h1>
<h2 id="le-tuple-sono-immutabili">Le tuple sono immutabili</h2>
<p> </p>
<p>Una tupla<a href="#fn1" class="footnote-ref" id="fnref1"
role="doc-noteref"><sup>1</sup></a> è una sequenza di valori molto
simile a una lista. I valori memorizzati in una tupla possono essere di
qualsiasi tipo e sono indicizzati da interi. La differenza importante è
che le tuple sono <em>immutabili</em>. Le tuple sono anche
<em>confrontabili</em> e <em>hashable</em>, quindi possiamo ordinare
liste di tuple e usare le tuple come chiavi nei dizionari Python.</p>
<p> </p>
<p>Sintatticamente, una tupla è un elenco di valori separati da
virgole:</p>
<pre class="python"><code>&gt;&gt;&gt; t = &#39;a&#39;, &#39;b&#39;, &#39;c&#39;, &#39;d&#39;, &#39;e&#39;</code></pre>
<p>Anche se non è necessario, di solito le tuple si racchiudono tra
parentesi tonde, per aiutarci a riconoscerle subito quando guardiamo il
codice Python:</p>
<pre class="python"><code>&gt;&gt;&gt; t = (&#39;a&#39;, &#39;b&#39;, &#39;c&#39;, &#39;d&#39;, &#39;e&#39;)</code></pre>
<p>Per creare una tupla con un solo elemento, devi includere la virgola
finale:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; t1 = (&#39;a&#39;,)
&gt;&gt;&gt; type(t1)
&lt;type &#39;tuple&#39;&gt;</code></pre>
<p>Senza la virgola Python tratta <code>('a')</code> come un’espressione
con una stringa tra parentesi tonde, che viene valutata come una
stringa:</p>
<pre class="python"><code>&gt;&gt;&gt; t2 = (&#39;a&#39;)
&gt;&gt;&gt; type(t2)
&lt;type &#39;str&#39;&gt;</code></pre>
<p>Un altro modo per costruire una tupla è la funzione built-in
<code>tuple</code>. Senza argomenti, crea una tupla vuota:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; t = tuple()
&gt;&gt;&gt; print(t)
()</code></pre>
<p>Se l’argomento è una sequenza (stringa, lista o tupla), il risultato
della chiamata a <code>tuple</code> è una tupla con gli elementi della
sequenza:</p>
<pre class="python"><code>&gt;&gt;&gt; t = tuple(&#39;lupins&#39;)
&gt;&gt;&gt; print(t)
(&#39;l&#39;, &#39;u&#39;, &#39;p&#39;, &#39;i&#39;, &#39;n&#39;, &#39;s&#39;)</code></pre>
<p>Poiché <code>tuple</code> è il nome di un costruttore, dovresti
evitare di usarlo come nome di variabile.</p>
<p>La maggior parte degli operatori delle liste funziona anche sulle
tuple. L’operatore parentesi quadre indicizza un elemento:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; t = (&#39;a&#39;, &#39;b&#39;, &#39;c&#39;, &#39;d&#39;, &#39;e&#39;)
&gt;&gt;&gt; print(t[0])
&#39;a&#39;</code></pre>
<p>E l’operatore slice seleziona un intervallo di elementi.</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; print(t[1:3])
(&#39;b&#39;, &#39;c&#39;)</code></pre>
<p>Ma se provi a modificare uno degli elementi della tupla, ottieni un
errore:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; t[0] = &#39;A&#39;
TypeError: object doesn&#39;t support item assignment</code></pre>
<p>Non puoi modificare gli elementi di una tupla, ma puoi sostituire una
tupla con un’altra:</p>
<pre class="python"><code>&gt;&gt;&gt; t = (&#39;A&#39;,) + t[1:]
&gt;&gt;&gt; print(t)
(&#39;A&#39;, &#39;b&#39;, &#39;c&#39;, &#39;d&#39;, &#39;e&#39;)</code></pre>
<h2 id="confronto-tra-tuple">Confronto tra tuple</h2>
<p> </p>
<p>Gli operatori di confronto funzionano con le tuple e con le altre
sequenze. Python inizia confrontando il primo elemento di ogni sequenza.
Se sono uguali, passa all’elemento successivo, e così via, finché non
trova elementi diversi. Gli elementi che seguono non vengono considerati
(anche se sono davvero grandi).</p>
<pre class="python"><code>&gt;&gt;&gt; (0, 1, 2) &lt; (0, 3, 4)
True
&gt;&gt;&gt; (0, 1, 2000000) &lt; (0, 3, 4)
True</code></pre>
<p>Il metodo <code>sort</code> si comporta allo stesso modo. Ordina
prima di tutto in base al primo elemento, ma in caso di parità ordina in
base al secondo elemento, e così via.</p>
<p>Questa caratteristica si presta a uno schema chiamato <em>DSU</em>,
che sta per</p>
<dl>
<dt><em>Decorate</em> (decorare)</dt>
<dd>
una sequenza costruendo una lista di tuple con una o più chiavi di
ordinamento che precedono gli elementi della sequenza,
</dd>
<dt><em>Sort</em> (ordinare)</dt>
<dd>
la lista di tuple usando il <code>sort</code> built-in di Python e
</dd>
<dt><em>Undecorate</em> (togliere la decorazione)</dt>
<dd>
estraendo gli elementi ordinati della sequenza.
</dd>
</dl>
<p> </p>
<p>Ad esempio, supponi di avere una lista di parole e di volerle
ordinare dalla più lunga alla più corta:</p>
<pre class="python"><code>txt = &#39;but soft what light in yonder window breaks&#39;
words = txt.split()
t = list()
for word in words:
    t.append((len(word), word))

t.sort(reverse=True)

res = list()
for length, word in t:
    res.append(word)

print(res)

# Code: https://www.py4e.com/code3/soft.py</code></pre>
<p>Il primo ciclo costruisce una lista di tuple, in cui ogni tupla è una
parola preceduta dalla sua lunghezza.</p>
<p><code>sort</code> confronta innanzitutto il primo elemento, la
lunghezza, e considera il secondo elemento solo per risolvere i casi di
parità. L’<em>argomento chiave-valore</em> (keyword argument)
<code>reverse=True</code> dice a <code>sort</code> di procedere in
ordine decrescente.</p>
<p> </p>
<p>Il secondo ciclo scorre la lista di tuple e costruisce una lista di
parole in ordine decrescente di lunghezza. Le parole di quattro
caratteri sono in ordine alfabetico <em>inverso</em>, quindi
<code>'what'</code> compare prima di <code>'soft'</code> nella lista
seguente.</p>
<p>L’output del programma è il seguente:</p>
<pre><code>[&#39;yonder&#39;, &#39;window&#39;, &#39;breaks&#39;, &#39;light&#39;, &#39;what&#39;,
&#39;soft&#39;, &#39;but&#39;, &#39;in&#39;]</code></pre>
<p>Naturalmente il verso perde molto del suo impatto poetico quando
viene trasformato in una lista Python e ordinato per lunghezza
decrescente delle parole.</p>
<h2 id="assegnazione-di-tupla">Assegnazione di tupla</h2>
<p> </p>
<p>Una delle caratteristiche sintattiche peculiari del linguaggio Python
è la possibilità di avere una tupla sul lato sinistro e una sequenza sul
lato destro di un’istruzione di assegnazione. Questo ti permette di
assegnare più di una variabile alla volta a partire dalla sequenza
data.</p>
<p>In questo esempio abbiamo una tupla di due elementi e assegniamo il
primo e il secondo elemento della tupla alle variabili <code>x</code> e
<code>y</code> con una sola istruzione.</p>
<pre class="python"><code>&gt;&gt;&gt; m = ( &#39;have&#39;, &#39;fun&#39; )
&gt;&gt;&gt; x, y = m
&gt;&gt;&gt; x
&#39;have&#39;
&gt;&gt;&gt; y
&#39;fun&#39;
&gt;&gt;&gt;</code></pre>
<p>Questa sintassi è più generale di un’assegnazione da tupla a tupla.
Sia le tuple sia le liste sono sequenze, quindi funziona anche con una
lista di due elementi.</p>
<pre class="python"><code>&gt;&gt;&gt; m = [ &#39;have&#39;, &#39;fun&#39; ]
&gt;&gt;&gt; x, y = m
&gt;&gt;&gt; x
&#39;have&#39;
&gt;&gt;&gt; y
&#39;fun&#39;
&gt;&gt;&gt;</code></pre>
<p>Non è magia: Python traduce <em>approssimativamente</em> la sintassi
dell’assegnazione di tupla nel codice seguente:<a href="#fn2"
class="footnote-ref" id="fnref2" role="doc-noteref"><sup>2</sup></a></p>
<pre class="python"><code>&gt;&gt;&gt; m = ( &#39;have&#39;, &#39;fun&#39; )
&gt;&gt;&gt; x = m[0]
&gt;&gt;&gt; y = m[1]
&gt;&gt;&gt; x
&#39;have&#39;
&gt;&gt;&gt; y
&#39;fun&#39;
&gt;&gt;&gt;</code></pre>
<p>Per una questione di stile, quando usiamo una tupla sul lato sinistro
dell’istruzione di assegnazione omettiamo le parentesi tonde, ma la
sintassi seguente è altrettanto valida:</p>
<pre class="python"><code>&gt;&gt;&gt; m = ( &#39;have&#39;, &#39;fun&#39; )
&gt;&gt;&gt; (x, y) = m
&gt;&gt;&gt; x
&#39;have&#39;
&gt;&gt;&gt; y
&#39;fun&#39;
&gt;&gt;&gt;</code></pre>
<p>Un’applicazione particolarmente ingegnosa dell’assegnazione di tupla
ci permette di <em>scambiare</em> i valori di due variabili con una sola
istruzione:</p>
<pre class="python"><code>&gt;&gt;&gt; a, b = b, a</code></pre>
<p>Entrambi i lati di questa istruzione sono tuple, ma il lato sinistro
è una tupla di variabili; il lato destro è una tupla di espressioni.
Ogni valore sul lato destro viene assegnato alla rispettiva variabile
sul lato sinistro. Tutte le espressioni sul lato destro vengono valutate
prima di qualsiasi assegnazione.</p>
<p>Il numero delle variabili a sinistra e il numero dei valori a destra
devono essere uguali:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; a, b = 1, 2, 3
ValueError: too many values to unpack</code></pre>
<p>Più in generale, il lato destro può essere qualsiasi tipo di sequenza
(stringa, lista o tupla). Ad esempio, per dividere un indirizzo email in
nome utente e dominio, potresti scrivere:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; addr = &#39;monty@python.org&#39;
&gt;&gt;&gt; uname, domain = addr.split(&#39;@&#39;)</code></pre>
<p>Il valore di ritorno di <code>split</code> è una lista di due
elementi; il primo elemento viene assegnato a <code>uname</code>, il
secondo a <code>domain</code>.</p>
<pre class="python"><code>&gt;&gt;&gt; print(uname)
monty
&gt;&gt;&gt; print(domain)
python.org</code></pre>
<h2 id="dizionari-e-tuple">Dizionari e tuple</h2>
<p> </p>
<p>I dizionari hanno un metodo chiamato <code>items</code> che
restituisce le coppie chiave-valore del dizionario, ognuna sotto forma
di tupla:</p>
<pre class="python"><code>&gt;&gt;&gt; d = {&#39;b&#39;:1, &#39;a&#39;:10, &#39;c&#39;:22}
&gt;&gt;&gt; t = list(d.items())
&gt;&gt;&gt; print(t)
[(&#39;b&#39;, 1), (&#39;a&#39;, 10), (&#39;c&#39;, 22)]</code></pre>
<p>Come dovresti aspettarti da un dizionario, gli elementi non sono in
ordine alfabetico.</p>
<p>Però, dato che la lista di tuple è una lista e le tuple sono
confrontabili, ora possiamo ordinarla. Convertire un dizionario in una
lista di tuple è un modo per ottenere in output il contenuto di un
dizionario ordinato per chiave:</p>
<pre class="python"><code>&gt;&gt;&gt; d = {&#39;b&#39;:1, &#39;a&#39;:10, &#39;c&#39;:22}
&gt;&gt;&gt; t = list(d.items())
&gt;&gt;&gt; t
[(&#39;b&#39;, 1), (&#39;a&#39;, 10), (&#39;c&#39;, 22)]
&gt;&gt;&gt; t.sort()
&gt;&gt;&gt; t
[(&#39;a&#39;, 10), (&#39;b&#39;, 1), (&#39;c&#39;, 22)]</code></pre>
<p>Ora la lista di tuple è ordinata per chiave, in ordine alfabetico
crescente.</p>
<h2 id="assegnazione-multipla-con-i-dizionari">Assegnazione multipla con
i dizionari</h2>
<p> </p>
<p>Combinando <code>items</code>, l’assegnazione di tupla e
<code>for</code>, puoi vedere uno schema di codice elegante per scorrere
le chiavi e i valori di un dizionario in un solo ciclo:</p>
<pre class="python"><code>d = {&#39;a&#39;:10, &#39;b&#39;:1, &#39;c&#39;:22}
for key, val in d.items():
    print(val, key)</code></pre>
<p>Questo ciclo ha due <em>variabili di iterazione</em>, perché
<code>items</code> dà una tupla per ogni coppia e <code>key, val</code>
è un’assegnazione di tupla che scorre in successione le coppie
chiave-valore del dizionario.</p>
<p>A ogni iterazione del ciclo, sia <code>key</code> sia
<code>val</code> avanzano alla coppia chiave-valore successiva del
dizionario (sempre nell’ordine di inserimento).</p>
<p>L’output di questo ciclo è:</p>
<pre><code>10 a
1 b
22 c</code></pre>
<p>Di nuovo, l’ordine è quello in cui le chiavi sono state inserite.</p>
<p>Se combiniamo queste due tecniche, possiamo stampare il contenuto di
un dizionario ordinato in base al <em>valore</em> memorizzato in
ciascuna coppia chiave-valore.</p>
<p>Per farlo, creiamo prima una lista di tuple in cui ogni tupla è
<code>(value, key)</code>. Il metodo <code>items</code> ci darebbe delle
tuple <code>(key, value)</code>, ma questa volta vogliamo ordinare per
valore, non per chiave. Una volta costruita la lista con le tuple
valore-chiave, è semplice ordinarla in senso inverso e stamparla.</p>
<pre class="python"><code>&gt;&gt;&gt; d = {&#39;a&#39;:10, &#39;b&#39;:1, &#39;c&#39;:22}
&gt;&gt;&gt; l = list()
&gt;&gt;&gt; for key, val in d.items() :
...     l.append( (val, key) )
...
&gt;&gt;&gt; l
[(10, &#39;a&#39;), (1, &#39;b&#39;), (22, &#39;c&#39;)]
&gt;&gt;&gt; l.sort(reverse=True)
&gt;&gt;&gt; l
[(22, &#39;c&#39;), (10, &#39;a&#39;), (1, &#39;b&#39;)]
&gt;&gt;&gt;</code></pre>
<p>Costruendo con cura la lista di tuple in modo che il valore sia il
primo elemento di ogni tupla, possiamo ordinarla e stampare il contenuto
del dizionario ordinato per valore.</p>
<h2 id="le-parole-più-comuni">Le parole più comuni</h2>
<p>Tornando al nostro esempio ricorrente, il testo di <em>Romeo e
Giulietta</em>, atto II, scena II, possiamo ampliare il programma e
usare questa tecnica per stampare le dieci parole più comuni del testo,
come segue:</p>
<pre class="python"><code>import string
fhand = open(&#39;romeo-full.txt&#39;)
counts = dict()
for line in fhand:
    line = line.translate(str.maketrans(&#39;&#39;, &#39;&#39;, string.punctuation))
    line = line.lower()
    words = line.split()
    for word in words:
        if word not in counts:
            counts[word] = 1
        else:
            counts[word] += 1

# Sort the dictionary by value
lst = list()
for key, val in list(counts.items()):
    lst.append((val, key))

lst.sort(reverse=True)

for key, val in lst[:10]:
    print(key, val)

# Code: https://www.py4e.com/code3/count3.py</code></pre>
<p>La prima parte del programma non è cambiata: legge il file e calcola
il dizionario che fa corrispondere ogni parola al suo conteggio nel
documento. Ma invece di stampare semplicemente <code>counts</code> e
terminare il programma, costruiamo una lista di tuple
<code>(val, key)</code> e poi la ordiniamo in senso inverso.</p>
<p>Poiché il valore viene per primo, sarà usato per i confronti. Se c’è
più di una tupla con lo stesso valore, verrà esaminato il secondo
elemento (la chiave), quindi le tuple con lo stesso valore saranno
ordinate ulteriormente secondo l’ordine alfabetico inverso della
chiave.</p>
<p>Alla fine scriviamo un bel ciclo <code>for</code> che esegue
un’iterazione con assegnazione multipla e stampa le dieci parole più
comuni scorrendo una slice della lista (<code>lst[:10]</code>).</p>
<p>Così ora l’output ha finalmente l’aspetto che vogliamo per la nostra
analisi della frequenza delle parole.</p>
<pre><code>61 i
42 and
40 romeo
34 to
34 the
32 thou
32 juliet
30 that
29 my
24 thee</code></pre>
<p>Il fatto che questa complessa analisi del testo e dei dati si possa
fare con un programma Python di 19 righe, facile da capire, è uno dei
motivi per cui Python è una buona scelta come linguaggio per esplorare
le informazioni.</p>
<h2 id="usare-le-tuple-come-chiavi-nei-dizionari">Usare le tuple come
chiavi nei dizionari</h2>
<p> </p>
<p>Poiché le tuple sono <em>hashable</em> e le liste no, se vogliamo
creare una chiave <em>composta</em> per un dizionario dobbiamo usare
come chiave una tupla.</p>
<p>Avremmo a che fare con una chiave composta se volessimo creare una
rubrica telefonica che fa corrispondere coppie cognome-nome a numeri di
telefono. Supponendo di aver definito le variabili <code>last</code>,
<code>first</code> e <code>number</code>, potremmo scrivere
un’istruzione di assegnazione al dizionario come segue:</p>
<pre class="python"><code>directory[last,first] = number</code></pre>
<p>L’espressione tra parentesi quadre è una tupla. Potremmo usare
l’assegnazione di tupla in un ciclo <code>for</code> per scorrere questo
dizionario.</p>
<pre class="python"><code>for last, first in directory:
    print(first, last, directory[last,first])</code></pre>
<p>Questo ciclo scorre le chiavi di <code>directory</code>, che sono
tuple. Assegna gli elementi di ogni tupla a <code>last</code> e
<code>first</code>, poi stampa il nome e il numero di telefono
corrispondente.</p>
<h2 id="sequenze-stringhe-liste-e-tuple---oh-cavolo">Sequenze: stringhe,
liste e tuple - Oh cavolo!</h2>
<p>Mi sono concentrato sulle liste di tuple, ma quasi tutti gli esempi
di questo capitolo funzionano anche con liste di liste, tuple di tuple e
tuple di liste. Per evitare di elencare le combinazioni possibili, a
volte è più semplice parlare di sequenze di sequenze.</p>
<p>In molti contesti i diversi tipi di sequenze (stringhe, liste e
tuple) possono essere usati in modo intercambiabile. Allora come e
perché ne scegli uno invece degli altri?</p>
<p> </p>
<p>Per cominciare dall’ovvio, le stringhe sono più limitate delle altre
sequenze perché gli elementi devono essere caratteri. Sono anche
immutabili. Se ti serve poter cambiare i caratteri di una stringa
(invece di creare una nuova stringa), ti conviene usare piuttosto una
lista di caratteri.</p>
<p>Le liste sono più comuni delle tuple, soprattutto perché sono
mutabili. Ma ci sono alcuni casi in cui potresti preferire le tuple:</p>
<ol type="1">
<li><p>In alcuni contesti, come un’istruzione <code>return</code>, è
sintatticamente più semplice creare una tupla che una lista. In altri
contesti potresti preferire una lista.</p></li>
<li><p>Se vuoi usare una sequenza come chiave di un dizionario, devi
usare un tipo immutabile come una tupla o una stringa.</p></li>
<li><p>Se passi una sequenza come argomento a una funzione, usare le
tuple riduce la possibilità di comportamenti inattesi dovuti
all’aliasing.</p></li>
</ol>
<p>Poiché le tuple sono immutabili, non forniscono metodi come
<code>sort</code> e <code>reverse</code>, che modificano liste
esistenti. Python però fornisce le funzioni built-in <code>sorted</code>
e <code>reversed</code>, che accettano qualsiasi sequenza come parametro
e restituiscono una nuova sequenza con gli stessi elementi in un ordine
diverso.</p>
<p> </p>
<h2 id="comprensione-di-lista">Comprensione di lista</h2>
<p>A volte vuoi creare una sequenza usando i dati di un’altra sequenza.
Puoi farlo scrivendo un ciclo <code>for</code> e aggiungendo un elemento
alla volta. Ad esempio, se volessi convertire una lista di stringhe –
ognuna delle quali contiene delle cifre – in numeri da sommare,
scriveresti:</p>
<pre class="python"><code>list_of_ints_in_strings = [&#39;42&#39;, &#39;65&#39;, &#39;12&#39;]
list_of_ints = []
for x in list_of_ints_in_strings:
    list_of_ints.append(int(x))

print(sum(list_of_ints))</code></pre>
<p>Con la <em>comprensione di lista</em> (list comprehension), il codice
qui sopra si può scrivere in modo più compatto:</p>
<pre class="python"><code>list_of_ints_in_strings = [&#39;42&#39;, &#39;65&#39;, &#39;12&#39;]
list_of_ints = [ int(x) for x in list_of_ints_in_strings ]
print(sum(list_of_ints))</code></pre>
<h2 id="debug">Debug</h2>
<p> </p>
<p>Liste, dizionari e tuple sono chiamati genericamente <em>strutture
dati</em>; in questo capitolo cominciamo a vedere strutture dati
composte, come liste di tuple e dizionari che contengono tuple come
chiavi e liste come valori. Le strutture dati composte sono utili, ma
sono soggette a quelli che io chiamo <em>errori di forma</em> (shape
error), cioè errori causati da una struttura dati che ha il tipo, la
dimensione o la composizione sbagliati; oppure magari scrivi del codice,
dimentichi la forma dei dati e introduci un errore. Ad esempio, se ti
aspetti una lista con un solo intero e io ti do un semplice intero (non
dentro una lista), non funzionerà.</p>
<h2 id="glossario">Glossario</h2>
<dl>
<dt><strong>Assegnazione di tupla</strong></dt>
<dd>
Un’assegnazione con una sequenza sul lato destro e una tupla di
variabili sul lato sinistro. Il lato destro viene valutato e poi i suoi
elementi vengono assegnati alle variabili sul lato sinistro.
</dd>
<dt><strong>Confrontabile</strong></dt>
<dd>
Relativo a un tipo in cui si può controllare se un valore è maggiore o
minore di un altro valore dello stesso tipo, o uguale a esso. I tipi
confrontabili possono essere messi in una lista e ordinati.
</dd>
<dt><strong>DSU</strong></dt>
<dd>
L’abbreviazione di <em>decorate-sort-undecorate</em> (decorare,
ordinare, togliere la decorazione), uno schema che consiste nel
costruire una lista di tuple, ordinarla ed estrarre una parte del
risultato.
</dd>
<dt><strong>Forma (di una struttura dati)</strong></dt>
<dd>
Un riepilogo del tipo, della dimensione e della composizione di una
struttura dati.
</dd>
<dt><strong>Hashable</strong></dt>
<dd>
Relativo a un tipo che ha una funzione hash. I tipi immutabili come gli
interi, i numeri in virgola mobile e le stringhe sono hashable; i tipi
mutabili come le liste e i dizionari non lo sono.
</dd>
<dt><strong>Raccolta (gather)</strong></dt>
<dd>
L’operazione che assembla una tupla di argomenti di lunghezza variabile.
</dd>
<dt><strong>Singleton</strong></dt>
<dd>
Una lista (o un’altra sequenza) con un solo elemento.
</dd>
<dt><strong>Spacchettamento (scatter)</strong></dt>
<dd>
L’operazione che tratta una sequenza come un elenco di argomenti.
</dd>
<dt><strong>Struttura dati</strong></dt>
<dd>
Una collezione di valori correlati, spesso organizzati in liste,
dizionari, tuple, ecc.
</dd>
<dt><strong>Tupla</strong></dt>
<dd>
Una sequenza immutabile di elementi.
</dd>
</dl>
<h2 id="esercizi">Esercizi</h2>
<p><strong>Esercizio 1:</strong> Rivedi un programma precedente come
segue: leggi e analizza le righe <code>"From "</code> ed estraine gli
indirizzi. Conta il numero di messaggi di ogni persona usando un
dizionario.</p>
<p>Dopo aver letto tutti i dati, stampa la persona con più commit
creando dal dizionario una lista di tuple <code>(count, email)</code>.
Poi ordina la lista in senso inverso e stampa la persona che ha più
commit.</p>
<pre><code>Sample Line:
From stephen.marquard@uct.ac.za Sat Jan  5 09:14:16 2008

Enter a file name: mbox-short.txt
cwen@iupui.edu 5

Enter a file name: mbox.txt
zqian@umich.edu 195</code></pre>
<p><strong>Esercizio 2:</strong> Questo programma conta la distribuzione
dei messaggi per ora del giorno. Puoi estrarre l’ora dalla riga
<code>"From "</code> trovando la stringa dell’orario e poi dividendo
quella stringa in parti con il carattere dei due punti. Dopo aver
accumulato i conteggi per ogni ora, stampali, uno per riga, ordinati per
ora, come mostrato qui sotto.</p>
<pre><code>python timeofday.py
Enter a file name: mbox-short.txt
04 3
06 1
07 1
09 2
10 3
11 6
14 1
15 2
16 4
17 2
18 1
19 1</code></pre>
<p><strong>Esercizio 3:</strong> Scrivi un programma che legga un file e
stampi le <em>lettere</em> in ordine decrescente di frequenza.</p>
<p>Il programma dovrebbe convertire tutto l’input in minuscolo e contare
solo le lettere a-z. Non dovrebbe contare spazi, cifre, segni di
punteggiatura o qualsiasi cosa diversa dalle lettere a-z. Trova campioni
di testo in diverse lingue e guarda come varia la frequenza delle
lettere da una lingua all’altra. Confronta i risultati con le tabelle su
<a href="https://wikipedia.org/wiki/Letter_frequencies"
class="uri">https://wikipedia.org/wiki/Letter_frequencies</a>.</p>
<p> </p>
<section id="footnotes" class="footnotes footnotes-end-of-document"
role="doc-endnotes">
<hr />
<ol>
<li id="fn1"><p>Curiosità: la parola “tupla” deriva dai nomi dati alle
sequenze di numeri di diversa lunghezza: singola, doppia, tripla,
quadrupla, quintupla, sestupla, settupla, ecc.<a href="#fnref1"
class="footnote-back" role="doc-backlink">↩︎</a></p></li>
<li id="fn2"><p>Python non traduce la sintassi alla lettera. Ad esempio,
se provi a farlo con un dizionario, non funzionerà come potresti
aspettarti.<a href="#fnref2" class="footnote-back"
role="doc-backlink">↩︎</a></p></li>
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
