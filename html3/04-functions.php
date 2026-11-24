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
  <title>Funzioni</title>
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
<h1 id="funzioni">Funzioni</h1>
<h2 id="chiamate-di-funzione">Chiamate di funzione</h2>
<p> Nel contesto della programmazione, una <em>funzione</em> è una
sequenza di istruzioni con un nome, che esegue un calcolo. Quando
definisci una funzione, ne specifichi il nome e la sequenza di
istruzioni. In seguito puoi “chiamare” la funzione per nome. Abbiamo già
visto un esempio di <em>chiamata di funzione</em>:</p>
<pre class="python"><code>&gt;&gt;&gt; type(32)
&lt;class &#39;int&#39;&gt;</code></pre>
<p>Il nome della funzione è <code>type</code>. L’espressione tra
parentesi si chiama <em>argomento</em> della funzione. L’argomento è un
valore o una variabile che passiamo alla funzione come input. Il
risultato, per la funzione <code>type</code>, è il tipo
dell’argomento.</p>
<p>Si dice comunemente che una funzione “accetta” un argomento e
“restituisce” un risultato. Il risultato si chiama <em>valore di
ritorno</em> (return value). </p>
<h2 id="funzioni-built-in">Funzioni built-in</h2>
<p>Python fornisce diverse funzioni built-in importanti, che possiamo
usare senza doverne scrivere la definizione. I creatori di Python hanno
scritto un insieme di funzioni per risolvere problemi comuni e le hanno
incluse in Python perché le potessimo usare.</p>
<p>Le funzioni <code>max</code> e <code>min</code> ci danno
rispettivamente il valore più grande e il più piccolo di un elenco:</p>
<pre class="python"><code>&gt;&gt;&gt; max(&#39;Hello world&#39;)
&#39;w&#39;
&gt;&gt;&gt; min(&#39;Hello world&#39;)
&#39; &#39;
&gt;&gt;&gt;</code></pre>
<p>La funzione <code>max</code> ci indica il “carattere più grande”
della stringa (che risulta essere la lettera <code>'w'</code>), mentre
la funzione <code>min</code> ci mostra il carattere più piccolo (che
risulta essere uno spazio).</p>
<p>Un’altra funzione built-in molto comune è <code>len</code>, che ci
dice quanti elementi ci sono nel suo argomento. Se l’argomento di
<code>len</code> è una stringa, la funzione restituisce il numero di
caratteri della stringa.</p>
<pre class="python"><code>&gt;&gt;&gt; len(&#39;Hello world&#39;)
11
&gt;&gt;&gt;</code></pre>
<p>Queste funzioni non si limitano alle stringhe: possono operare su
qualsiasi insieme di valori, come vedremo nei prossimi capitoli.</p>
<p>Dovresti trattare i nomi delle funzioni built-in come parole
riservate (cioè, evita di usare <code>max</code> come nome di
variabile).</p>
<h2 id="funzioni-di-conversione-dei-tipi-di-dato">Funzioni di
conversione dei tipi di dato</h2>
<p> Python fornisce anche funzioni built-in che convertono i valori da
un tipo a un altro. La funzione <code>int</code> accetta qualsiasi
valore e, se può, lo converte in un intero; altrimenti si lamenta: </p>
<pre class="python"><code>&gt;&gt;&gt; int(&#39;32&#39;)
32
&gt;&gt;&gt; int(&#39;Hello&#39;)
ValueError: invalid literal for int() with base 10: &#39;Hello&#39;</code></pre>
<p><code>int</code> può convertire in interi i valori in virgola mobile,
ma non arrotonda; tronca la parte frazionaria:</p>
<pre class="python"><code>&gt;&gt;&gt; int(3.99999)
3
&gt;&gt;&gt; int(-2.3)
-2</code></pre>
<p><code>float</code> converte numeri interi e stringhe in numeri in
virgola mobile: </p>
<pre class="python"><code>&gt;&gt;&gt; float(32)
32.0
&gt;&gt;&gt; float(&#39;3.14159&#39;)
3.14159</code></pre>
<p>Infine, <code>str</code> converte il suo argomento in una stringa:
</p>
<pre class="python"><code>&gt;&gt;&gt; str(32)
&#39;32&#39;
&gt;&gt;&gt; str(3.14159)
&#39;3.14159&#39;</code></pre>
<h2 id="funzioni-matematiche">Funzioni matematiche</h2>
<p> Python ha un modulo <code>math</code> che fornisce la maggior parte
delle funzioni matematiche più note. Prima di poter usare il modulo,
dobbiamo importarlo:</p>
<pre class="python"><code>&gt;&gt;&gt; import math</code></pre>
<p>Questa istruzione crea un <em>oggetto modulo</em> chiamato
<code>math</code>. Se stampi l’oggetto modulo, ottieni alcune
informazioni che lo riguardano:</p>
<pre class="python"><code>&gt;&gt;&gt; print(math)
&lt;module &#39;math&#39; (built-in)&gt;</code></pre>
<p>L’oggetto modulo contiene le funzioni e le variabili definite nel
modulo. Per accedere a una delle funzioni devi specificare il nome del
modulo e il nome della funzione, separati da un punto. Questo formato si
chiama <em>notazione puntata</em> (dot notation). </p>
<pre class="python"><code>&gt;&gt;&gt; ratio = signal_power / noise_power
&gt;&gt;&gt; decibels = 10 * math.log10(ratio)

&gt;&gt;&gt; radians = 0.7
&gt;&gt;&gt; height = math.sin(radians)</code></pre>
<p>Il primo esempio calcola il logaritmo in base 10 del rapporto
segnale/rumore. Il modulo <code>math</code> fornisce anche una funzione
chiamata <code>log</code>, che calcola i logaritmi in base
<math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mi>e</mi><annotation encoding="application/x-tex">e</annotation></semantics></math>.
</p>
<p>Il secondo esempio calcola il seno di <code>radians</code>. Il nome
della variabile suggerisce che <code>sin</code> e le altre funzioni
trigonometriche (<code>cos</code>, <code>tan</code>, ecc.) accettano
argomenti in radianti. Per convertire i gradi in radianti, dividi per
360 e moltiplica per
<math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mn>2</mn><mi>π</mi></mrow><annotation encoding="application/x-tex">2\pi</annotation></semantics></math>:</p>
<pre class="python"><code>&gt;&gt;&gt; degrees = 45
&gt;&gt;&gt; radians = degrees / 360.0 * 2 * math.pi
&gt;&gt;&gt; math.sin(radians)
0.7071067811865476</code></pre>
<p>L’espressione <code>math.pi</code> prende la variabile
<code>pi</code> dal modulo <code>math</code>. Il valore di questa
variabile è un’approssimazione di
<math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mi>π</mi><annotation encoding="application/x-tex">\pi</annotation></semantics></math>,
precisa fino a circa 15 cifre. </p>
<p>Se conosci la trigonometria, puoi controllare il risultato precedente
confrontandolo con la radice quadrata di due fratto due: </p>
<pre class="python"><code>&gt;&gt;&gt; math.sqrt(2) / 2.0
0.7071067811865476</code></pre>
<h2 id="numeri-casuali">Numeri casuali</h2>
<p> Con gli stessi input, la maggior parte dei programmi per computer
genera ogni volta gli stessi output: per questo si dicono
<em>deterministici</em>. Di solito il determinismo è un bene, perché ci
aspettiamo che lo stesso calcolo produca lo stesso risultato. Per alcune
applicazioni, però, vogliamo che il computer sia imprevedibile. I giochi
sono un esempio ovvio, ma ce ne sono altri.</p>
<p>Rendere un programma davvero non deterministico non è poi così
facile, ma ci sono modi per farlo almeno sembrare tale. Uno di questi è
usare <em>algoritmi</em> che generano numeri <em>pseudo-casuali</em>
(pseudorandom). I numeri pseudo-casuali non sono davvero casuali, perché
li genera un calcolo deterministico, ma guardando solo i numeri è quasi
impossibile distinguerli da quelli casuali.</p>
<p> </p>
<p>Il modulo <code>random</code> fornisce funzioni che generano numeri
pseudo-casuali (che chiamerò semplicemente “casuali” da qui in poi).
</p>
<p>La funzione <code>random</code> restituisce un numero casuale in
virgola mobile compreso tra <code>0.0</code> e <code>1.0</code>
(<code>0.0</code> incluso, <code>1.0</code> escluso). Ogni volta che
chiami <code>random</code>, ottieni il numero successivo di una lunga
serie. Per vederne un esempio, esegui questo ciclo:</p>
<pre class="python"><code>import random

for i in range(10):
    x = random.random()
    print(x)</code></pre>
<p>Questo programma produce il seguente elenco di 10 numeri casuali
compresi tra <code>0.0</code> e <code>1.0</code> (<code>1.0</code>
escluso).</p>
<pre><code>0.11132867921152356
0.5950949227890241
0.04820265884996877
0.841003109276478
0.997914947094958
0.04842330803368111
0.7416295948208405
0.510535245390327
0.27447040171978143
0.028511805472785867</code></pre>
<p><strong>Esercizio 1:</strong> Esegui il programma sul tuo sistema e
guarda quali numeri ottieni. Eseguilo più volte e guarda quali numeri
ottieni.</p>
<p>La funzione <code>random</code> è solo una delle molte funzioni che
gestiscono i numeri casuali. La funzione <code>randint</code> accetta i
parametri <code>low</code> e <code>high</code> e restituisce un intero
compreso tra <code>low</code> e <code>high</code> (estremi inclusi).
</p>
<pre class="python"><code>&gt;&gt;&gt; random.randint(5, 10)
5
&gt;&gt;&gt; random.randint(5, 10)
9</code></pre>
<p>Per scegliere a caso un elemento da una sequenza puoi usare
<code>choice</code>: </p>
<pre class="python"><code>&gt;&gt;&gt; t = [1, 2, 3]
&gt;&gt;&gt; random.choice(t)
2
&gt;&gt;&gt; random.choice(t)
3</code></pre>
<p>Il modulo <code>random</code> fornisce anche funzioni per generare
valori casuali da distribuzioni continue, tra cui la gaussiana,
l’esponenziale, la gamma e qualche altra.</p>
<h2 id="aggiungere-nuove-funzioni">Aggiungere nuove funzioni</h2>
<p>Finora abbiamo usato solo le funzioni fornite con Python, ma è anche
possibile aggiungerne di nuove. Una <em>definizione di funzione</em>
specifica il nome di una nuova funzione e la sequenza di istruzioni
eseguite quando la funzione viene chiamata. Una volta definita una
funzione, possiamo riutilizzarla più e più volte in tutto il nostro
programma. </p>
<p>Ecco un esempio:</p>
<pre class="python"><code>def print_lyrics():
    print(&quot;I&#39;m a lumberjack, and I&#39;m okay.&quot;)
    print(&#39;I sleep all night and I work all day.&#39;)</code></pre>
<p><code>def</code> è una parola chiave e indica che questa è una
definizione di funzione. Il nome della funzione è
<code>print_lyrics</code>. Per i nomi delle funzioni valgono le stesse
regole dei nomi delle variabili: sono consentiti lettere, numeri e
alcuni segni di punteggiatura, ma il primo carattere non può essere un
numero. Non puoi usare una parola chiave come nome di una funzione, e
dovresti evitare di dare lo stesso nome a una variabile e a una
funzione.</p>
<p> </p>
<p>Le parentesi vuote dopo il nome indicano che questa funzione non
accetta argomenti. Più avanti costruiremo funzioni che accettano
argomenti come input. </p>
<p>La prima riga della definizione di funzione si chiama
<em>intestazione</em> (header); il resto si chiama <em>corpo</em>
(body). L’intestazione deve terminare con i due punti e il corpo deve
essere indentato. Per convenzione, l’indentazione è sempre di quattro
spazi. Il corpo può contenere un numero qualsiasi di istruzioni. </p>
<p>Se digiti una definizione di funzione in modalità interattiva,
l’interprete stampa dei puntini di sospensione (<code>...</code>) per
farti sapere che la definizione non è completa:</p>
<pre class="python"><code>&gt;&gt;&gt; def print_lyrics():
...     print(&quot;I&#39;m a lumberjack, and I&#39;m okay.&quot;)
...     print(&#39;I sleep all night and I work all day.&#39;)
...</code></pre>
<p>Per terminare la funzione devi inserire una riga vuota (in uno script
non è necessario).</p>
<p>La definizione di una funzione crea una variabile con lo stesso
nome.</p>
<pre class="python"><code>&gt;&gt;&gt; print(print_lyrics)
&lt;function print_lyrics at 0xb7e99e9c&gt;
&gt;&gt;&gt; print(type(print_lyrics))
&lt;class &#39;function&#39;&gt;</code></pre>
<p>Il valore di <code>print_lyrics</code> è un <em>oggetto
funzione</em>, che ha tipo <code>function</code>. </p>
<p>La sintassi per chiamare la nuova funzione è la stessa delle funzioni
built-in:</p>
<pre class="python"><code>&gt;&gt;&gt; print_lyrics()
I&#39;m a lumberjack, and I&#39;m okay.
I sleep all night and I work all day.</code></pre>
<p>Dopo aver definito una funzione, puoi usarla dentro un’altra
funzione. Ad esempio, per ripetere il ritornello precedente, potremmo
scrivere una funzione chiamata <code>repeat_lyrics</code>:</p>
<pre class="python"><code>def repeat_lyrics():
    print_lyrics()
    print_lyrics()</code></pre>
<p>E poi chiamare <code>repeat_lyrics</code>:</p>
<pre class="python"><code>&gt;&gt;&gt; repeat_lyrics()
I&#39;m a lumberjack, and I&#39;m okay.
I sleep all night and I work all day.
I&#39;m a lumberjack, and I&#39;m okay.
I sleep all night and I work all day.</code></pre>
<p>Ma la canzone non fa proprio così.</p>
<h2 id="definizioni-e-usi">Definizioni e usi</h2>
<p> Se mettiamo insieme i frammenti di codice della sezione precedente,
il programma completo è questo:</p>
<pre class="python"><code>def print_lyrics():
    print(&quot;I&#39;m a lumberjack, and I&#39;m okay.&quot;)
    print(&#39;I sleep all night and I work all day.&#39;)


def repeat_lyrics():
    print_lyrics()
    print_lyrics()

repeat_lyrics()

# Code: https://www.py4e.com/code3/lyrics.py</code></pre>
<p>Questo programma ha due definizioni di funzione:
<code>print_lyrics</code> e <code>repeat_lyrics</code>. Le definizioni
di funzione vengono eseguite proprio come le altre istruzioni, ma il
loro effetto è creare oggetti funzione. Le istruzioni all’interno della
funzione non vengono eseguite finché la funzione non viene chiamata, e
la definizione di funzione non genera alcun output. </p>
<p>Come puoi immaginare, devi creare una funzione prima di poterla
eseguire. In altre parole, la definizione di funzione deve essere
eseguita prima che la funzione venga chiamata per la prima volta.</p>
<p><strong>Esercizio 2:</strong> Sposta l’ultima riga di questo
programma all’inizio, in modo che la chiamata di funzione compaia prima
delle definizioni. Esegui il programma e guarda quale messaggio di
errore ottieni.</p>
<p><strong>Esercizio 3:</strong> Riporta la chiamata di funzione in
fondo e sposta la definizione di <code>print_lyrics</code> dopo la
definizione di <code>repeat_lyrics</code>. Cosa succede quando esegui
questo programma?</p>
<h2 id="flusso-di-esecuzione">Flusso di esecuzione</h2>
<p> Per assicurarti che una funzione sia definita prima del suo primo
uso, devi conoscere l’ordine in cui vengono eseguite le istruzioni, cioè
il <em>flusso di esecuzione</em> (flow of execution).</p>
<p>L’esecuzione inizia sempre dalla prima istruzione del programma. Le
istruzioni vengono eseguite una alla volta, in ordine, dall’alto verso
il basso.</p>
<p>Le <em>definizioni</em> di funzione non alterano il flusso di
esecuzione del programma, ma ricorda che le istruzioni all’interno della
funzione non vengono eseguite finché la funzione non viene chiamata.</p>
<p>Una chiamata di funzione è come una deviazione nel flusso di
esecuzione: invece di passare all’istruzione successiva, il flusso salta
al corpo della funzione, esegue tutte le istruzioni che contiene e poi
torna indietro per riprendere dal punto in cui si era interrotto.</p>
<p>Sembra abbastanza semplice, finché non ti ricordi che una funzione
può chiamarne un’altra. Mentre si trova nel mezzo di una funzione, il
programma potrebbe dover eseguire le istruzioni di un’altra funzione. Ma
mentre esegue questa nuova funzione, il programma potrebbe doverne
eseguire un’altra ancora!</p>
<p>Fortunatamente Python è bravo a tenere traccia del punto in cui si
trova, quindi ogni volta che una funzione termina, il programma riprende
da dove si era interrotto nella funzione che l’ha chiamata. Quando
arriva alla fine del programma, termina.</p>
<p>Qual è la morale di questa sordida storia? Quando leggi un programma,
non sempre conviene leggerlo dall’alto verso il basso. A volte ha più
senso seguire il flusso di esecuzione.</p>
<h2 id="parametri-e-argomenti">Parametri e argomenti</h2>
<p> Alcune delle funzioni built-in che abbiamo visto richiedono degli
argomenti. Ad esempio, quando chiami <code>math.sin</code> passi un
numero come argomento. Alcune funzioni accettano più di un argomento:
<code>math.pow</code> ne accetta due, la base e l’esponente.</p>
<p>All’interno della funzione, gli argomenti sono assegnati a variabili
chiamate <em>parametri</em>. Ecco un esempio di una funzione definita
dall’utente che accetta un argomento: </p>
<pre class="python"><code>def print_twice(bruce):
    print(bruce)
    print(bruce)</code></pre>
<p>Questa funzione assegna l’argomento a un parametro chiamato
<code>bruce</code>. Quando la funzione viene chiamata, stampa due volte
il valore del parametro (qualunque esso sia).</p>
<p>Questa funzione va bene per qualsiasi valore che si possa
stampare.</p>
<pre class="python"><code>&gt;&gt;&gt; print_twice(&#39;Spam&#39;)
Spam
Spam
&gt;&gt;&gt; print_twice(17)
17
17
&gt;&gt;&gt; import math
&gt;&gt;&gt; print_twice(math.pi)
3.141592653589793
3.141592653589793</code></pre>
<p>Le regole di composizione delle funzioni built-in valgono anche per
le funzioni definite dall’utente, quindi possiamo usare qualsiasi tipo
di espressione come argomento di <code>print_twice</code>: </p>
<pre class="python"><code>&gt;&gt;&gt; print_twice(&#39;Spam &#39;*4)
Spam Spam Spam Spam
Spam Spam Spam Spam
&gt;&gt;&gt; print_twice(math.cos(math.pi))
-1.0
-1.0</code></pre>
<p>L’argomento viene valutato prima che la funzione sia chiamata, quindi
negli esempi le espressioni <code>'Spam '*4</code> e
<code>math.cos(math.pi)</code> vengono valutate una sola volta.</p>
<p>Puoi anche usare una variabile come argomento:</p>
<pre class="python"><code>&gt;&gt;&gt; michael = &#39;Eric, the half a bee.&#39;
&gt;&gt;&gt; print_twice(michael)
Eric, the half a bee.
Eric, the half a bee.</code></pre>
<p>Il nome della variabile che passiamo come argomento
(<code>michael</code>) non ha nulla a che fare con il nome del parametro
(<code>bruce</code>). Non importa come si chiamava il valore a casa sua
(nel chiamante): qui, in <code>print_twice</code>, chiamiamo tutti
<code>bruce</code>.</p>
<h2 id="funzioni-produttive-e-funzioni-vuote">Funzioni produttive e
funzioni vuote</h2>
<p> Alcune delle funzioni che stiamo usando, come le funzioni
matematiche, producono risultati; in mancanza di un nome migliore, le
chiamo <em>funzioni produttive</em> (fruitful functions). Altre
funzioni, come <code>print_twice</code>, eseguono un’azione ma non
restituiscono alcun valore. Si chiamano <em>funzioni vuote</em> (void
functions).</p>
<p>Quando chiami una funzione produttiva, quasi sempre vuoi fare
qualcosa con il risultato; ad esempio, potresti assegnarlo a una
variabile o usarlo come parte di un’espressione:</p>
<pre class="python"><code>x = math.cos(radians)
golden = (math.sqrt(5) + 1) / 2</code></pre>
<p>Quando chiami una funzione in modalità interattiva, Python ne
visualizza il risultato:</p>
<pre class="python"><code>&gt;&gt;&gt; math.sqrt(5)
2.23606797749979</code></pre>
<p>Ma in uno script, se chiami una funzione produttiva e non ne
memorizzi il risultato in una variabile, il valore di ritorno svanisce
nella nebbia!</p>
<pre class="python"><code>math.sqrt(5)</code></pre>
<p>Questo script calcola la radice quadrata di 5 ma, poiché non
memorizza il risultato in una variabile e non lo visualizza, non è molto
utile. </p>
<p>Le funzioni vuote possono visualizzare qualcosa sullo schermo o avere
qualche altro effetto, ma non hanno alcun valore di ritorno. Se tenti di
assegnare il risultato a una variabile ottieni un valore speciale
chiamato <code>None</code>. </p>
<pre class="python"><code>&gt;&gt;&gt; result = print_twice(&#39;Bing&#39;)
Bing
Bing
&gt;&gt;&gt; print(result)
None</code></pre>
<p>Il valore <code>None</code> non è la stessa cosa della stringa
<code>'None'</code>. È un valore speciale che ha un tipo tutto suo:</p>
<pre class="python"><code>&gt;&gt;&gt; print(type(None))
&lt;class &#39;NoneType&#39;&gt;</code></pre>
<p>Per restituire un risultato da una funzione, usiamo l’istruzione
<code>return</code> nella nostra funzione. Ad esempio, potremmo creare
una funzione molto semplice chiamata <code>addtwo</code> che somma due
numeri e restituisce un risultato.</p>
<pre class="python"><code>def addtwo(a, b):
    added = a + b
    return added

x = addtwo(3, 5)
print(x)

# Code: https://www.py4e.com/code3/addtwo.py</code></pre>
<p>Quando questo script viene eseguito, l’istruzione <code>print</code>
stampa <code>8</code> perché la funzione <code>addtwo</code> è stata
chiamata con <code>3</code> e <code>5</code> come argomenti. All’interno
della funzione, i parametri <code>a</code> e <code>b</code> valevano
rispettivamente <code>3</code> e <code>5</code>. La funzione ha
calcolato la somma dei due numeri e l’ha inserita in una variabile
locale della funzione, chiamata <code>added</code>. Poi ha usato
l’istruzione <code>return</code> per rimandare il valore calcolato al
codice chiamante come risultato della funzione; il valore è stato
assegnato alla variabile <code>x</code> e stampato.</p>
<h2 id="perché-le-funzioni">Perché le funzioni?</h2>
<p> Forse non è chiaro perché valga la pena di dividere un programma in
funzioni. I motivi sono diversi:</p>
<ul>
<li>Creare una nuova funzione ti dà l’occasione di dare un nome a un
gruppo di istruzioni, e questo semplifica la lettura, la comprensione e
il debug del programma.</li>
<li>Le funzioni possono rendere un programma più piccolo eliminando il
codice ripetitivo. Se in seguito fai una modifica, ti basta farla in un
solo punto.</li>
<li>Dividere un programma lungo in funzioni ti permette di fare il debug
delle parti una alla volta e poi di assemblarle in un insieme
funzionante.</li>
<li>Le funzioni ben progettate sono spesso utili per molti programmi.
Dopo aver scritto una funzione e averne fatto il debug, puoi
riutilizzarla.</li>
</ul>
<p>Nel resto del libro useremo spesso una definizione di funzione per
spiegare un concetto. Parte dell’abilità nel creare e usare le funzioni
sta nel fare in modo che una funzione racchiuda bene un’idea, come
“trova il valore più piccolo in un elenco di valori”. Più avanti ti
mostreremo il codice che trova il valore più piccolo in un elenco di
valori e te lo presenteremo come una funzione chiamata <code>min</code>,
che accetta come argomento un elenco di valori e restituisce il valore
più piccolo dell’elenco.</p>
<h2 id="debug">Debug</h2>
<p> Se usi un editor di testo per scrivere i tuoi script, potresti avere
problemi con spazi e tabulazioni. Il modo migliore per evitarli è usare
solo gli spazi (niente tabulazioni). La maggior parte degli editor di
testo che conoscono Python lo fa per impostazione predefinita, ma alcuni
no.</p>
<p>Tabulazioni e spazi sono di solito invisibili, il che rende difficile
il debug: cerca quindi un editor che gestisca l’indentazione al posto
tuo.</p>
<p>Inoltre, non dimenticare di salvare il programma prima di eseguirlo.
Alcuni ambienti di sviluppo lo fanno automaticamente, altri no. In quel
caso, il programma che stai guardando nell’editor di testo non è lo
stesso che stai eseguendo.</p>
<p>Il debug può richiedere molto tempo se continui a eseguire più e più
volte lo stesso programma sbagliato!</p>
<p>Assicurati che il codice che stai guardando sia il codice che stai
eseguendo. Se non ne sei sicuro, inserisci qualcosa come
<code>print("hello")</code> all’inizio del programma ed eseguilo di
nuovo. Se non vedi <code>hello</code>, non stai eseguendo il programma
giusto!</p>
<h2 id="glossario">Glossario</h2>
<dl>
<dt><strong>Algoritmo</strong></dt>
<dd>
Un procedimento generale per risolvere una categoria di problemi.
</dd>
<dt><strong>Argomento</strong></dt>
<dd>
Un valore fornito a una funzione quando questa viene chiamata. Questo
valore è assegnato al parametro corrispondente nella funzione.
</dd>
<dt><strong>Chiamata di funzione</strong></dt>
<dd>
Un’istruzione che esegue una funzione. È composta dal nome della
funzione seguito da un elenco di argomenti.
</dd>
<dt><strong>Composizione</strong></dt>
<dd>
L’uso di un’espressione come parte di un’espressione più grande, o di
un’istruzione come parte di un’istruzione più grande.
</dd>
<dt><strong>Corpo</strong></dt>
<dd>
La sequenza di istruzioni contenute in una definizione di funzione.
</dd>
<dt><strong>Definizione di funzione</strong></dt>
<dd>
Un’istruzione che crea una nuova funzione, specificandone il nome, i
parametri e le istruzioni che esegue.
</dd>
<dt><strong>Deterministico</strong></dt>
<dd>
Relativo a un programma che fa la stessa cosa ogni volta che viene
eseguito, dati gli stessi input.
</dd>
<dt><strong>Flusso di esecuzione</strong></dt>
<dd>
L’ordine in cui le istruzioni vengono eseguite durante l’esecuzione di
un programma.
</dd>
<dt><strong>Funzione</strong></dt>
<dd>
Una sequenza di istruzioni con un nome, che svolge qualche operazione
utile. Le funzioni possono accettare argomenti oppure no, e possono
produrre un risultato oppure no.
</dd>
<dt><strong>Funzione produttiva</strong></dt>
<dd>
Una funzione che restituisce un valore.
</dd>
<dt><strong>Funzione vuota</strong></dt>
<dd>
Una funzione che non restituisce alcun valore.
</dd>
<dt><strong>Intestazione</strong></dt>
<dd>
La prima riga di una definizione di funzione.
</dd>
<dt><strong>Istruzione <code>import</code></strong></dt>
<dd>
Un’istruzione che legge il file di un modulo e crea un oggetto modulo.
</dd>
<dt><strong>Notazione puntata</strong></dt>
<dd>
La sintassi per chiamare una funzione di un altro modulo, specificando
il nome del modulo seguito da un punto e dal nome della funzione.
</dd>
<dt><strong>Oggetto funzione</strong></dt>
<dd>
Un valore creato da una definizione di funzione. Il nome della funzione
è una variabile che fa riferimento a un oggetto funzione.
</dd>
<dt><strong>Oggetto modulo</strong></dt>
<dd>
Un valore creato da un’istruzione <code>import</code>, che fornisce
accesso ai dati e al codice definiti in un modulo.
</dd>
<dt><strong>Parametro</strong></dt>
<dd>
Un nome usato all’interno di una funzione per fare riferimento al valore
passato come argomento.
</dd>
<dt><strong>Pseudo-casuale</strong></dt>
<dd>
Relativo a una sequenza di numeri che sembrano casuali, ma sono generati
da un programma deterministico.
</dd>
<dt><strong>Valore di ritorno</strong></dt>
<dd>
Il risultato di una funzione. Se una chiamata di funzione è usata come
espressione, il valore di ritorno è il valore dell’espressione.
</dd>
</dl>
<h2 id="esercizi">Esercizi</h2>
<p><strong>Esercizio 4:</strong> A cosa serve la parola chiave
<code>def</code> in Python?</p>
<p>a) È un’espressione gergale che significa “il codice seguente è
veramente fico”<br />
b) Indica l’inizio di una funzione<br />
c) Indica che la seguente sezione di codice indentata deve essere
memorizzata per un uso successivo<br />
d) b e c sono entrambe vere<br />
e) Nessuna delle precedenti</p>
<p><strong>Esercizio 5:</strong> Cosa stamperà il seguente programma
Python?</p>
<pre class="python"><code>def fred():
   print(&quot;Zap&quot;)

def jane():
   print(&quot;ABC&quot;)

jane()
fred()
jane()</code></pre>
<p>a) Zap ABC jane fred jane<br />
b) Zap ABC Zap<br />
c) ABC Zap jane<br />
d) ABC Zap ABC<br />
e) Zap Zap Zap</p>
<p><strong>Esercizio 6:</strong> Riscrivi il calcolo della paga con gli
straordinari pagati il 50% in più e crea una funzione chiamata
<code>computepay</code> che accetta due parametri (<code>hours</code> e
<code>rate</code>).</p>
<pre><code>Enter Hours: 45
Enter Rate: 10
Pay: 475.0</code></pre>
<p><strong>Esercizio 7:</strong> Riscrivi il programma dei voti del
capitolo precedente usando una funzione chiamata
<code>computegrade</code> che accetta un punteggio come parametro e
restituisce un voto sotto forma di stringa.</p>
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
<p>Esegui più volte il programma per testare i diversi valori di
input.</p>
</body>
</html>
<?php if ( file_exists("../bookfoot.php") ) {
  $HTML_FILE = basename(__FILE__);
  $HTML = ob_get_contents();
  ob_end_clean();
  require_once "../bookfoot.php";
}?>
