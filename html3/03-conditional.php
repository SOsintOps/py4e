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
  <title>Esecuzione condizionale</title>
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
<h1 id="esecuzione-condizionale">Esecuzione condizionale</h1>
<h2 id="espressioni-booleane">Espressioni booleane</h2>
<p> Un’<em>espressione booleana</em> è un’espressione che può essere
solo vera o falsa. Gli esempi seguenti usano l’operatore
<code>==</code>, che confronta due operandi e produce <code>True</code>
se sono uguali e <code>False</code> in caso contrario:</p>
<pre class="python"><code>&gt;&gt;&gt; 5 == 5
True
&gt;&gt;&gt; 5 == 6
False</code></pre>
<p><code>True</code> e <code>False</code> sono valori speciali che
appartengono alla classe <code>bool</code>; non sono stringhe: </p>
<pre class="python"><code>&gt;&gt;&gt; type(True)
&lt;class &#39;bool&#39;&gt;
&gt;&gt;&gt; type(False)
&lt;class &#39;bool&#39;&gt;</code></pre>
<p>L’operatore <code>==</code> è uno degli <em>operatori di
confronto</em>; gli altri sono:</p>
<pre class="python"><code>x != y               # x is not equal to y
x &gt; y                # x is greater than y
x &lt; y                # x is less than y
x &gt;= y               # x is greater than or equal to y
x &lt;= y               # x is less than or equal to y
x is y               # x is the same as y
x is not y           # x is not the same as y</code></pre>
<p>Probabilmente conosci già queste operazioni, ma i simboli di Python
sono diversi da quelli che la matematica usa per le stesse operazioni.
Un errore comune è usare un solo segno di uguale (<code>=</code>) al
posto di un doppio segno di uguale (<code>==</code>). Ricorda che
<code>=</code> è un operatore di assegnazione, mentre <code>==</code> è
un operatore di confronto. <code>=&lt;</code> e <code>=&gt;</code> non
esistono. </p>
<h2 id="operatori-logici">Operatori logici</h2>
<p> Esistono tre <em>operatori logici</em>: <code>and</code>,
<code>or</code> e <code>not</code>. La semantica (significato) di questi
operatori è simile al senso che queste parole hanno in inglese. Ad
esempio,</p>
<p><code>x &gt; 0 and x &lt; 10</code></p>
<p>è vera solo se <code>x</code> è maggiore di 0 <em>e</em> minore di
10.</p>
<p> </p>
<p><code>n%2 == 0 or n%3 == 0</code> è vera se è vera <em>almeno
una</em> delle condizioni, cioè se il numero è divisibile per 2
<em>o</em> per 3.</p>
<p>Infine, l’operatore <code>not</code> nega un’espressione booleana,
quindi <code>not (x &gt; y)</code> è vera se <code>x &gt; y</code> è
falsa.</p>
<pre class="python"><code>&gt;&gt;&gt; x = 1
&gt;&gt;&gt; y = 2
&gt;&gt;&gt; x &gt; y
False
&gt;&gt;&gt; not (x &gt; y)
True</code></pre>
<p>A rigore, gli operandi degli operatori logici dovrebbero essere
espressioni booleane, ma Python non è molto rigoroso. Qualsiasi numero
diverso da zero viene interpretato come “vero”:</p>
<pre class="python"><code>&gt;&gt;&gt; 17 and True
True</code></pre>
<p>Questa flessibilità può tornare utile in certe situazioni, ma ha
alcune sottigliezze che potrebbero creare confusione. Ti conviene
evitarla finché non sei sicuro di sapere quello che stai facendo.</p>
<h2 id="esecuzione-condizionale-1">Esecuzione condizionale</h2>
<p> Per scrivere programmi utili dobbiamo quasi sempre poter controllare
delle condizioni e cambiare di conseguenza il comportamento del
programma. Le <em>istruzioni condizionali</em> ci danno questa
possibilità. La forma più semplice è l’istruzione <code>if</code>:</p>
<pre class="python"><code>if x &gt; 0 :
    print(&#39;x is positive&#39;)</code></pre>
<p>L’espressione booleana dopo l’istruzione <code>if</code> si chiama
<em>condizione</em>. Chiudiamo l’istruzione <code>if</code> con il
carattere dei due punti (<code>:</code>), e la riga o le righe che la
seguono sono indentate.</p>
<figure>
<img src="../images/if.svg" alt="Logica dell'`if`" style="height: 1.5in;"/>
<figcaption>
Logica dell’<code>if</code>
</figcaption>
</figure>
<p>Se la condizione logica è vera, l’istruzione indentata viene
eseguita. Se la condizione logica è falsa, l’istruzione indentata viene
saltata. </p>
<p>Le istruzioni <code>if</code> hanno la stessa struttura delle
definizioni di funzione o dei cicli <code>for</code><a href="#fn1"
class="footnote-ref" id="fnref1" role="doc-noteref"><sup>1</sup></a>.
L’istruzione è formata da una riga di intestazione che termina con il
carattere dei due punti (<code>:</code>), seguita da un blocco
indentato. Le istruzioni come questa si chiamano <em>istruzioni
composte</em> (compound statement) perché si estendono su più righe.</p>
<pre class="python"><code>if x &gt; y:
    print(x)
    print(y)</code></pre>
<p>Non c’è limite al numero di istruzioni che possono apparire nel
corpo, ma deve essercene almeno una. A volte è utile avere un corpo
senza istruzioni (di solito come segnaposto per codice che non hai
ancora scritto). In questo caso puoi usare l’istruzione
<code>pass</code>, che non fa nulla, per superare il controllo
dell’interprete Python. </p>
<pre class="python"><code>if x &lt; 0 :
    pass   # need to handle negative values, do nothing for now.</code></pre>
<p>Se inserisci un’istruzione <code>if</code> nell’interprete Python, il
prompt cambia da tre segni di maggiore (<code>&gt;&gt;&gt;</code>) a tre
punti (<code>...</code>) per indicare che sei nel mezzo di un blocco di
istruzioni, come mostrato qui sotto:</p>
<pre class="python"><code>&gt;&gt;&gt; x = 3
&gt;&gt;&gt; if x &lt; 10:
...    print(&#39;Small&#39;)
...
Small
&gt;&gt;&gt;</code></pre>
<p>Quando usi l’interprete Python, devi lasciare una riga vuota alla
fine di un blocco, altrimenti Python segnala un errore:</p>
<pre class="python"><code>&gt;&gt;&gt; x = 3
&gt;&gt;&gt; if x &lt; 10:
...    print(&#39;Small&#39;)
... print(&#39;Done&#39;)
  File &quot;&lt;stdin&gt;&quot;, line 3
    print(&#39;Done&#39;)
    ^^^^^
SyntaxError: invalid syntax</code></pre>
<p>Quando scrivi ed esegui uno script non serve una riga vuota alla fine
di un blocco di istruzioni, ma può rendere il tuo codice più
leggibile.</p>
<h2 id="esecuzione-alternativa">Esecuzione alternativa</h2>
<p> Una seconda forma dell’istruzione <code>if</code> è l’<em>esecuzione
alternativa</em>, in cui ci sono due possibilità e la condizione
determina quale delle due viene eseguita. La sintassi è questa:</p>
<pre class="python"><code>if x % 2 == 0:
    print(&#39;x is even&#39;)
else:
    print(&#39;x is odd&#39;)</code></pre>
<p>Se il resto della divisione di <code>x</code> per 2 è 0, sappiamo che
<code>x</code> è pari e il programma visualizza un messaggio che lo
dice. Se la condizione è falsa, viene eseguita la seconda serie di
istruzioni.</p>
<figure>
<img src="../images/if-else.svg" alt="Logica dell'if-then-else" style="height: 1.5in;"/>
<figcaption>
Logica dell’if-then-else
</figcaption>
</figure>
<p>Dato che la condizione deve essere per forza vera o falsa, viene
eseguita esattamente una delle alternative. Le alternative si chiamano
<em>rami</em> (branch), perché sono rami del flusso di esecuzione. </p>
<h2 id="condizioni-concatenate">Condizioni concatenate</h2>
<p> A volte ci sono più di due possibilità e ci servono più di due rami.
Un modo per esprimere un calcolo di questo tipo è una <em>condizione
concatenata</em> (chained conditional):</p>
<pre class="python"><code>if x &lt; y:
    print(&#39;x is less than y&#39;)
elif x &gt; y:
    print(&#39;x is greater than y&#39;)
else:
    print(&#39;x and y are equal&#39;)</code></pre>
<p><code>elif</code> è l’abbreviazione di “else if”. Anche in questo
caso viene eseguito esattamente un ramo.</p>
<figure>
<img src="../images/elif.svg" alt="Logica dell'if-then-elseif" style="height: 2.0in;"/>
<figcaption>
Logica dell’if-then-elseif
</figcaption>
</figure>
<p>Non c’è limite al numero di istruzioni <code>elif</code>. Se c’è una
clausola <code>else</code>, deve essere alla fine, ma non è obbligatorio
che ci sia. </p>
<pre class="python"><code>if choice == &#39;a&#39;:
    print(&#39;Bad guess&#39;)
elif choice == &#39;b&#39;:
    print(&#39;Good guess&#39;)
elif choice == &#39;c&#39;:
    print(&#39;Close, but not correct&#39;)</code></pre>
<p>Le condizioni vengono controllate in ordine. Se la prima è falsa,
viene controllata la successiva, e così via. Se una è vera, viene
eseguito il ramo corrispondente e l’istruzione termina. Anche se è vera
più di una condizione, viene eseguito solo il primo ramo vero.</p>
<h2 id="condizioni-annidate">Condizioni annidate</h2>
<p> Una condizione può anche essere annidata dentro un’altra. Avremmo
potuto scrivere l’esempio a tre rami in questo modo:</p>
<pre class="python"><code>if x == y:
    print(&#39;x and y are equal&#39;)
else:
    if x &lt; y:
        print(&#39;x is less than y&#39;)
    else:
        print(&#39;x is greater than y&#39;)</code></pre>
<p>La condizione esterna contiene due rami. Il primo ramo contiene
un’istruzione semplice. Il secondo ramo contiene un’altra istruzione
<code>if</code>, che ha a sua volta due rami. Questi due rami sono
entrambi istruzioni semplici, ma avrebbero potuto essere anche
istruzioni condizionali.</p>
<figure>
<img src="../images/nested.svg" alt="Istruzioni `if` annidate" style="height: 2.0in;"/>
<figcaption>
Istruzioni <code>if</code> annidate
</figcaption>
</figure>
<p>Anche se l’indentazione delle istruzioni rende evidente la struttura,
le <em>condizioni annidate</em> diventano molto presto difficili da
leggere. In generale, è una buona idea evitarle quando puoi.</p>
<p>Spesso gli operatori logici offrono un modo per semplificare le
istruzioni condizionali annidate. Ad esempio, possiamo riscrivere il
codice seguente con una sola condizione:</p>
<pre class="python"><code>if 0 &lt; x:
    if x &lt; 10:
        print(&#39;x is a positive single-digit number.&#39;)</code></pre>
<p>L’istruzione <code>print</code> viene eseguita solo quando entrambe
le condizioni sono vere. Possiamo ottenere lo stesso effetto con
l’operatore <code>and</code>:</p>
<pre class="python"><code>if 0 &lt; x and x &lt; 10:
    print(&#39;x is a positive single-digit number.&#39;)</code></pre>
<h2 id="catturare-le-eccezioni-usando-try-ed-except">Catturare le
eccezioni usando <code>try</code> ed <code>except</code></h2>
<p>In precedenza abbiamo visto un segmento di codice in cui usavamo le
funzioni <code>input</code> e <code>int</code> per leggere e analizzare
un numero intero inserito dall’utente. Abbiamo visto anche quanto può
essere insidioso farlo:</p>
<pre class="python"><code>&gt;&gt;&gt; prompt = &quot;What is the air velocity of an unladen swallow?\n&quot;
&gt;&gt;&gt; speed = input(prompt)
What is the air velocity of an unladen swallow?
What do you mean, an African or a European swallow?
&gt;&gt;&gt; int(speed)
ValueError: invalid literal for int() with
base 10: &#39;What do you mean, an African or a European swallow?&#39;
&gt;&gt;&gt;</code></pre>
<p>Quando eseguiamo queste istruzioni nell’interprete Python,
l’interprete ci dà un nuovo prompt, pensiamo “ops” e passiamo
all’istruzione successiva.</p>
<p>Se però inserisci questo codice in uno script Python e si verifica
questo errore, lo script si ferma di colpo con un traceback. Non esegue
l’istruzione successiva. </p>
<p>Ecco un programma di esempio che converte una temperatura da
Fahrenheit a Celsius: </p>
<pre class="python"><code>inp = input(&#39;Enter Fahrenheit Temperature:&#39;)
fahr = float(inp)
cel = (fahr - 32.0) * 5.0 / 9.0
print(cel)

# Code: https://www.py4e.com/code3/fahren.py</code></pre>
<p>Se eseguiamo questo codice e gli diamo un input non valido, fallisce
semplicemente con un messaggio di errore poco amichevole:</p>
<pre><code>python fahren.py
Enter Fahrenheit Temperature:72
22.22222222222222</code></pre>
<pre><code>python fahren.py
Enter Fahrenheit Temperature:fred
Traceback (most recent call last):
  File &quot;fahren.py&quot;, line 2, in &lt;module&gt;
    fahr = float(inp)
ValueError: could not convert string to float: &#39;fred&#39;</code></pre>
<p>Per gestire questi tipi di errori, previsti e imprevisti, Python ha
una struttura di esecuzione condizionale built-in chiamata
<code>try</code>/<code>except</code>. Lo scopo di <code>try</code> ed
<code>except</code> è questo: sai che una certa sequenza di istruzioni
potrebbe avere un problema e vuoi aggiungere alcune istruzioni da
eseguire se si verifica un errore. Queste istruzioni aggiuntive (il
blocco <code>except</code>) vengono ignorate se non ci sono errori.</p>
<p>Puoi pensare alla funzionalità <code>try</code> ed
<code>except</code> di Python come a una “polizza assicurativa” su una
sequenza di istruzioni.</p>
<p>Possiamo riscrivere il convertitore di temperatura come segue:</p>
<pre class="python"><code>inp = input(&#39;Enter Fahrenheit Temperature:&#39;)
try:
    fahr = float(inp)
    cel = (fahr - 32.0) * 5.0 / 9.0
    print(cel)
except:
    print(&#39;Please enter a number&#39;)

# Code: https://www.py4e.com/code3/fahren2.py</code></pre>
<p>Per prima cosa Python esegue la sequenza di istruzioni del blocco
<code>try</code>. Se tutto va bene, salta il blocco <code>except</code>
e prosegue. Se nel blocco <code>try</code> si verifica un’eccezione,
Python esce dal blocco <code>try</code> ed esegue la sequenza di
istruzioni del blocco <code>except</code>.</p>
<pre><code>python fahren2.py
Enter Fahrenheit Temperature:72
22.22222222222222</code></pre>
<pre><code>python fahren2.py
Enter Fahrenheit Temperature:fred
Please enter a number</code></pre>
<p>Gestire un’eccezione con un’istruzione <code>try</code> si dice
<em>catturare</em> (catch) un’eccezione. In questo esempio, la clausola
<code>except</code> stampa un messaggio di errore. In generale,
catturare un’eccezione ti dà la possibilità di risolvere il problema, di
riprovare o almeno di terminare il programma in modo elegante.</p>
<h2
id="valutazione-in-cortocircuito-delle-espressioni-logiche">Valutazione
in cortocircuito delle espressioni logiche</h2>
<p> Quando Python elabora un’espressione logica come
<code>x &gt;= 2 and (x/y) &gt; 2</code>, la valuta da sinistra a destra.
Per come è definito <code>and</code>, se <code>x</code> è minore di 2
l’espressione <code>x &gt;= 2</code> è <code>False</code>, e quindi
l’intera espressione è <code>False</code>, sia che
<code>(x/y) &gt; 2</code> valga <code>True</code> sia che valga
<code>False</code>.</p>
<p>Quando Python si accorge che valutare il resto di un’espressione
logica non porta alcun vantaggio, ferma la valutazione e non esegue i
calcoli che restano. Quando la valutazione di un’espressione logica si
ferma perché il valore complessivo è già noto, si parla di valutazione
in <em>cortocircuito</em> (short circuit).</p>
<p> Può sembrare una sottigliezza, ma il comportamento di cortocircuito
porta a una tecnica ingegnosa chiamata <em>schema del guardiano</em>
(guardian pattern). Considera questa sequenza di codice nell’interprete
Python:</p>
<pre class="python"><code>&gt;&gt;&gt; x = 6
&gt;&gt;&gt; y = 2
&gt;&gt;&gt; x &gt;= 2 and (x/y) &gt; 2
True
&gt;&gt;&gt; x = 1
&gt;&gt;&gt; y = 0
&gt;&gt;&gt; x &gt;= 2 and (x/y) &gt; 2
False
&gt;&gt;&gt; x = 6
&gt;&gt;&gt; y = 0
&gt;&gt;&gt; x &gt;= 2 and (x/y) &gt; 2
Traceback (most recent call last):
  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;
    x &gt;= 2 and (x/y) &gt; 2
                ~^~
ZeroDivisionError: division by zero
&gt;&gt;&gt;</code></pre>
<p>Il terzo calcolo è fallito perché Python stava valutando
<code>(x/y)</code> e <code>y</code> era zero, il che causa un errore di
runtime. Il primo e il secondo esempio invece <em>non</em> sono falliti:
nel primo calcolo <code>y</code> era diverso da zero, e nel secondo la
prima parte dell’espressione, <code>x &gt;= 2</code>, valeva
<code>False</code>, quindi <code>(x/y)</code> non è mai stato eseguito,
per la regola del <em>cortocircuito</em>, e non c’è stato alcun
errore.</p>
<p>Possiamo costruire l’espressione logica in modo da collocare
strategicamente una valutazione di <em>guardia</em> subito prima di
quella che potrebbe causare un errore, come segue:</p>
<pre class="python"><code>&gt;&gt;&gt; x = 1
&gt;&gt;&gt; y = 0
&gt;&gt;&gt; x &gt;= 2 and y != 0 and (x/y) &gt; 2
False
&gt;&gt;&gt; x = 6
&gt;&gt;&gt; y = 0
&gt;&gt;&gt; x &gt;= 2 and y != 0 and (x/y) &gt; 2
False
&gt;&gt;&gt; x &gt;= 2 and (x/y) &gt; 2 and y != 0
Traceback (most recent call last):
  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;
    x &gt;= 2 and (x/y) &gt; 2 and y != 0
                ~^~
ZeroDivisionError: division by zero
&gt;&gt;&gt;</code></pre>
<p>Nella prima espressione logica, <code>x &gt;= 2</code> è
<code>False</code>, quindi la valutazione si ferma all’<code>and</code>.
Nella seconda espressione logica, <code>x &gt;= 2</code> è
<code>True</code> ma <code>y != 0</code> è <code>False</code>, quindi
non arriviamo mai a <code>(x/y)</code>.</p>
<p>Nella terza espressione logica, <code>y != 0</code> viene
<em>dopo</em> il calcolo <code>(x/y)</code>, quindi l’espressione
fallisce con un errore.</p>
<p>Nella seconda espressione diciamo che <code>y != 0</code> fa da
<em>guardia</em>, per assicurare che <code>(x/y)</code> venga eseguito
solo se <code>y</code> è diverso da zero.</p>
<h2 id="debug">Debug</h2>
<p> Il traceback che Python visualizza quando si verifica un errore
contiene molte informazioni, ma può disorientare. Le parti più utili
sono di solito:</p>
<ul>
<li>il tipo di errore;</li>
<li>dove si è verificato.</li>
</ul>
<p>Gli errori di sintassi sono di solito facili da trovare, ma ci sono
alcuni tranelli. Gli errori dovuti agli spazi bianchi possono essere
insidiosi, perché spazi e tabulazioni sono invisibili e siamo abituati a
ignorarli. </p>
<pre class="python"><code>&gt;&gt;&gt; x = 5
&gt;&gt;&gt;  y = 6
  File &quot;&lt;stdin&gt;&quot;, line 1
    y = 6
IndentationError: unexpected indent</code></pre>
<p>In questo esempio il problema è che la seconda riga è indentata di
uno spazio. Ma il messaggio di errore punta a <code>y</code>, il che è
fuorviante. In generale, i messaggi di errore indicano dove è stato
scoperto il problema, ma l’errore vero potrebbe trovarsi prima nel
codice, a volte in una riga precedente.</p>
<p>In generale, i messaggi di errore ti dicono dove è stato scoperto il
problema, ma spesso non è lì che è stato causato.</p>
<h2 id="glossario">Glossario</h2>
<dl>
<dt><strong>Condizione</strong></dt>
<dd>
L’espressione booleana in un’istruzione condizionale che determina quale
ramo viene eseguito.
</dd>
<dt><strong>Condizione annidata</strong></dt>
<dd>
Un’istruzione condizionale che appare in uno dei rami di un’altra
istruzione condizionale.
</dd>
<dt><strong>Condizione concatenata</strong></dt>
<dd>
Un’istruzione condizionale con una serie di rami alternativi.
</dd>
<dt><strong>Corpo</strong></dt>
<dd>
La sequenza di istruzioni all’interno di un’istruzione composta.
</dd>
<dt><strong>Cortocircuito</strong></dt>
<dd>
Il comportamento per cui Python, a metà della valutazione di
un’espressione logica, ferma la valutazione perché conosce già il valore
finale dell’espressione, senza dover valutare il resto.
</dd>
<dt><strong>Espressione booleana</strong></dt>
<dd>
Un’espressione il cui valore è <code>True</code> o <code>False</code>.
</dd>
<dt><strong>Istruzione composta</strong></dt>
<dd>
Un’istruzione formata da un’intestazione e da un corpo. L’intestazione
termina con i due punti (<code>:</code>). Il corpo è indentato rispetto
all’intestazione.
</dd>
<dt><strong>Istruzione condizionale</strong></dt>
<dd>
Un’istruzione che controlla il flusso di esecuzione in base a una
condizione.
</dd>
<dt><strong>Operatore di confronto</strong></dt>
<dd>
Uno degli operatori che confrontano i propri operandi: <code>==</code>,
<code>!=</code>, <code>&gt;</code>, <code>&lt;</code>,
<code>&gt;=</code> e <code>&lt;=</code>.
</dd>
<dt><strong>Operatore logico</strong></dt>
<dd>
Uno degli operatori che combinano espressioni booleane:
<code>and</code>, <code>or</code> e <code>not</code>.
</dd>
<dt><strong>Ramo</strong></dt>
<dd>
Una delle sequenze di istruzioni alternative di un’istruzione
condizionale.
</dd>
<dt><strong>Schema del guardiano</strong></dt>
<dd>
La costruzione di un’espressione logica con confronti aggiuntivi, per
sfruttare il comportamento di cortocircuito.
</dd>
<dt><strong>Traceback</strong></dt>
<dd>
Un elenco delle funzioni in esecuzione, che viene stampato quando si
verifica un’eccezione.
</dd>
</dl>
<h2 id="esercizi">Esercizi</h2>
<p><strong>Esercizio 1:</strong> Riscrivi il tuo calcolo della paga in
modo da dare al dipendente 1,5 volte la tariffa oraria per le ore
lavorate oltre le 40.</p>
<pre><code>Enter Hours: 45
Enter Rate: 10
Pay: 475.0</code></pre>
<p><strong>Esercizio 2:</strong> Riscrivi il tuo programma della paga
usando <code>try</code> ed <code>except</code>, in modo che gestisca con
eleganza un input non numerico, stampando un messaggio e uscendo dal
programma. Ecco due esecuzioni del programma:</p>
<pre><code>Enter Hours: 20
Enter Rate: nine
Error, please enter numeric input</code></pre>
<pre><code>Enter Hours: forty
Error, please enter numeric input</code></pre>
<p><strong>Esercizio 3:</strong> Scrivi un programma che chieda un
punteggio compreso tra <code>0.0</code> e <code>1.0</code>. Se il
punteggio è fuori dall’intervallo, stampa un messaggio di errore. Se il
punteggio è compreso tra <code>0.0</code> e <code>1.0</code>, stampa un
voto usando la tabella seguente:</p>
<pre><code> Score   Grade
&gt;= 0.9     A
&gt;= 0.8     B
&gt;= 0.7     C
&gt;= 0.6     D
 &lt; 0.6     F</code></pre>
<pre><code>Enter score: 0.95
A</code></pre>
<pre><code>Enter score: perfect
Bad score</code></pre>
<pre><code>Enter score: 10.0
Bad score</code></pre>
<pre><code>Enter score: 0.75
C</code></pre>
<pre><code>Enter score: 0.5
F</code></pre>
<p>Esegui più volte il programma, come mostrato sopra, per testare i
diversi valori di input.</p>
<section id="footnotes" class="footnotes footnotes-end-of-document"
role="doc-endnotes">
<hr />
<ol>
<li id="fn1"><p>Studieremo le funzioni nel Capitolo 4 e i cicli nel
Capitolo 5.<a href="#fnref1" class="footnote-back"
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
