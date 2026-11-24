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
  <title>Variabili, espressioni e istruzioni</title>
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
<h1 id="variabili-espressioni-e-istruzioni">Variabili, espressioni e
istruzioni</h1>
<h2 id="valori-e-tipi">Valori e tipi</h2>
<p> Un <em>valore</em> è uno degli elementi di base con cui lavora un
programma, come una lettera o un numero. I valori che abbiamo visto
finora sono <code>1</code>, <code>2</code> e
<code>'Hello, World!'</code>.</p>
<p>Questi valori appartengono a <em>tipi</em> diversi: <code>2</code> è
un intero e <code>'Hello, World!'</code> è una <em>stringa</em> (string,
che in inglese vuol dire anche “fila”), così chiamata perché contiene
una fila di lettere. Tu (insieme all’interprete) puoi riconoscere le
stringhe perché sono racchiuse tra virgolette.</p>
<p>L’istruzione <code>print</code> funziona anche con i numeri interi.
Usiamo il comando <code>python</code> per avviare l’interprete.</p>
<pre class="python"><code>python
&gt;&gt;&gt; print(4)
4</code></pre>
<p>Se non sei sicuro del tipo a cui appartiene un valore, te lo può dire
l’interprete.</p>
<pre class="python" height="160"><code>&gt;&gt;&gt; type(&#39;Hello, World!&#39;)
&lt;class &#39;str&#39;&gt;
&gt;&gt;&gt; type(17)
&lt;class &#39;int&#39;&gt;</code></pre>
<p>Non sorprende che le stringhe appartengano al tipo <code>str</code> e
gli interi al tipo <code>int</code>. È meno ovvio che i numeri con il
punto decimale appartengano a un tipo chiamato <code>float</code>: il
motivo è che questi numeri sono rappresentati in un formato chiamato
<em>virgola mobile</em> (floating point). </p>
<pre class="python" height="120"><code>&gt;&gt;&gt; type(3.2)
&lt;class &#39;float&#39;&gt;</code></pre>
<p>E valori come <code>'17'</code> e <code>'3.2'</code>? Sembrano
numeri, ma sono tra virgolette come le stringhe. </p>
<pre class="python" height="160"><code>&gt;&gt;&gt; type(&#39;17&#39;)
&lt;class &#39;str&#39;&gt;
&gt;&gt;&gt; type(&#39;3.2&#39;)
&lt;class &#39;str&#39;&gt;</code></pre>
<p>Sono stringhe.</p>
<p>Quando digiti un intero grande, potresti essere tentato di mettere le
virgole tra i gruppi di tre cifre, come in <code>1,000,000</code>. In
Python questo non è un intero valido, ma è comunque ammesso:</p>
<pre class="python" height="120"><code>&gt;&gt;&gt; print(1,000,000)
1 0 0</code></pre>
<p>Beh, non è affatto quello che ci aspettavamo! Python interpreta
<code>1,000,000</code> come una sequenza di interi separati da virgole,
e la stampa mettendo uno spazio tra l’uno e l’altro.</p>
<p>Questo è il primo esempio di errore semantico che abbiamo visto: il
codice viene eseguito senza produrre un messaggio di errore, ma non fa
la cosa “giusta”.</p>
<h2 id="variabili">Variabili</h2>
<p> Una delle funzionalità più potenti di un linguaggio di
programmazione è la possibilità di manipolare le <em>variabili</em>. Una
variabile è un nome che si riferisce a un valore.</p>
<p>Un’<em>istruzione di assegnazione</em> crea nuove variabili e dà loro
un valore:</p>
<pre class="python"><code>&gt;&gt;&gt; message = &#39;And now for something completely different&#39;
&gt;&gt;&gt; n = 17
&gt;&gt;&gt; pi = 3.1415926535897931</code></pre>
<p>Questo esempio fa tre assegnazioni. La prima assegna una stringa a
una nuova variabile chiamata <code>message</code>; la seconda assegna
l’intero <code>17</code> a <code>n</code>; la terza assegna il valore
(approssimato) di
<math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mi>π</mi><annotation encoding="application/x-tex">\pi</annotation></semantics></math>
a <code>pi</code>.</p>
<p>Per visualizzare il valore di una variabile, puoi usare l’istruzione
<code>print</code>:</p>
<pre class="python"><code>&gt;&gt;&gt; print(n)
17
&gt;&gt;&gt; print(pi)
3.141592653589793</code></pre>
<p>Il tipo di una variabile è il tipo del valore a cui si riferisce.</p>
<pre class="python"><code>&gt;&gt;&gt; type(message)
&lt;class &#39;str&#39;&gt;
&gt;&gt;&gt; type(n)
&lt;class &#39;int&#39;&gt;
&gt;&gt;&gt; type(pi)
&lt;class &#39;float&#39;&gt;</code></pre>
<h2 id="nomi-delle-variabili-e-parole-chiave">Nomi delle variabili e
parole chiave</h2>
<p> Di solito i programmatori scelgono per le variabili nomi
significativi, che documentano a cosa serve la variabile.</p>
<p>I nomi delle variabili possono essere lunghi a piacere. Possono
contenere sia lettere sia numeri, ma non possono iniziare con un numero.
Le lettere maiuscole sono ammesse, ma è una buona idea iniziare i nomi
delle variabili con una lettera minuscola (più avanti vedrai
perché).</p>
<p>Il carattere underscore (<code>_</code>) può comparire in un nome. Si
usa spesso nei nomi composti da più parole, come <code>my_name</code> o
<code>airspeed_of_unladen_swallow</code>. I nomi delle variabili possono
iniziare con un underscore, ma di solito lo evitiamo, a meno che non
stiamo scrivendo codice di libreria che useranno altri.</p>
<p>Se dai a una variabile un nome non valido, ottieni un errore di
sintassi:</p>
<pre class="python" height="450"><code>&gt;&gt;&gt; 76trombones = &#39;big parade&#39;
  File &quot;&lt;stdin&gt;&quot;, line 1
    76trombones = &#39;big parade&#39;
     ^
SyntaxError: invalid decimal literal
&gt;&gt;&gt; more@ = 1000000
  File &quot;&lt;stdin&gt;&quot;, line 1
    more@ = 1000000
          ^
SyntaxError: invalid syntax
&gt;&gt;&gt; class = &#39;Advanced Theoretical Zymurgy&#39;
  File &quot;&lt;stdin&gt;&quot;, line 1
    class = &#39;Advanced Theoretical Zymurgy&#39;
          ^
SyntaxError: invalid syntax</code></pre>
<p><code>76trombones</code> non è valido perché inizia con un numero.
<code>more@</code> non è valido perché contiene un carattere non
ammesso, <code>@</code>. Ma cosa c’è che non va in
<code>class</code>?</p>
<p>Il fatto è che <code>class</code> è una delle <em>parole chiave</em>
di Python. L’interprete usa le parole chiave per riconoscere la
struttura del programma, e queste non si possono usare come nomi di
variabili.</p>
<p>Python riserva 35 parole chiave:</p>
<pre><code>False      await      else       import     pass
None       break      except     in         raise
True       class      finally    is         return
and        continue   for        lambda     try
as         def        from       nonlocal   while
assert     del        global     not        with
async      elif       if         or         yield</code></pre>
<p>Ti conviene tenere questo elenco a portata di mano. Se l’interprete
si lamenta del nome di una tua variabile e non capisci perché, controlla
se è in questo elenco.</p>
<h2 id="istruzioni">Istruzioni</h2>
<p>Un’<em>istruzione</em> è un’unità di codice che l’interprete Python
può eseguire. Abbiamo visto due tipi di istruzioni: <code>print</code>,
che è un’istruzione di espressione, e l’assegnazione.</p>
<p>Quando digiti un’istruzione in modalità interattiva, l’interprete la
esegue e ne visualizza il risultato, se c’è.</p>
<p>Generalmente uno script contiene una sequenza di istruzioni. Se c’è
più di un’istruzione, i risultati compaiono uno alla volta, man mano che
le istruzioni vengono eseguite.</p>
<p>Ad esempio, lo script</p>
<pre class="python"><code>print(1)
x = 2
print(x)</code></pre>
<p>produce l’output</p>
<pre><code>1
2</code></pre>
<p>L’istruzione di assegnazione non produce output.</p>
<h2 id="operatori-e-operandi">Operatori e operandi</h2>
<p> Gli <em>operatori</em> sono simboli speciali che rappresentano
calcoli come l’addizione e la moltiplicazione. I valori a cui è
applicato l’operatore sono chiamati <em>operandi</em>.</p>
<p>Gli operatori <code>+</code>, <code>-</code>, <code>*</code>,
<code>/</code> e <code>**</code> eseguono l’addizione, la sottrazione,
la moltiplicazione, la divisione e l’elevamento a potenza, come negli
esempi seguenti:</p>
<pre class="python"><code>20+32
hour-1
hour*60+minute
minute/60
5**2
(5+9)*(15-7)</code></pre>
<p>Tra Python 2 e Python 3 l’operatore di divisione è cambiato. In
Python 3 il risultato di questa divisione è un numero in virgola
mobile:</p>
<pre class="python" height="160"><code>&gt;&gt;&gt; minute = 59
&gt;&gt;&gt; minute/60
0.9833333333333333</code></pre>
<p>In Python 2 l’operatore di divisione divideva due interi e troncava
il risultato a un intero:</p>
<pre class="python"><code>&gt;&gt;&gt; minute = 59
&gt;&gt;&gt; minute/60
0</code></pre>
<p>Per ottenere lo stesso risultato in Python 3, usa la divisione intera
(<code>//</code>), che arrotonda per difetto.</p>
<pre class="python" height="160"><code>&gt;&gt;&gt; minute = 59
&gt;&gt;&gt; minute//60
0</code></pre>
<p>In Python 3 la divisione tra interi funziona in modo molto più simile
a ciò che ti aspetteresti se inserissi l’espressione in una
calcolatrice. </p>
<h2 id="espressioni">Espressioni</h2>
<p>Un’<em>espressione</em> è una combinazione di valori, variabili e
operatori. Un valore da solo è considerato un’espressione, e così anche
una variabile; quindi le seguenti sono tutte espressioni valide
(supponendo che alla variabile <code>x</code> sia stato assegnato un
valore): </p>
<pre class="python"><code>17
x
x + 17</code></pre>
<p>Se digiti un’espressione in modalità interattiva, l’interprete la
<em>valuta</em> e ne visualizza il risultato:</p>
<pre class="python"><code>&gt;&gt;&gt; 1 + 1
2</code></pre>
<p>In uno script, invece, un’espressione da sola non fa nulla! Questo
crea spesso confusione tra i principianti.</p>
<p><strong>Esercizio 1:</strong> Digita le seguenti istruzioni
nell’interprete Python per vedere cosa fanno:</p>
<pre class="python"><code>5
x = 5
x + 1</code></pre>
<h2 id="ordine-delle-operazioni">Ordine delle operazioni</h2>
<p> Quando in un’espressione compare più di un operatore, l’ordine di
valutazione dipende dalle <em>regole di precedenza</em>. Per gli
operatori matematici, Python segue le convenzioni della matematica.
L’acronimo <em>PEMDAS</em> è un modo utile per ricordare le regole: </p>
<ul>
<li>Le <em>P</em>arentesi hanno la precedenza più alta e si possono
usare per forzare la valutazione di un’espressione nell’ordine che vuoi.
Dato che le espressioni tra parentesi vengono valutate per prime,
<code>2 * (3-1)</code> fa 4 e <code>(1+1)**(5-2)</code> fa 8. Puoi usare
le parentesi anche per rendere un’espressione più facile da leggere,
come in <code>(minute * 100) / 60</code>, anche se il risultato non
cambia.</li>
<li>L’<em>E</em>levamento a potenza viene subito dopo per precedenza,
quindi <code>2**1+1</code> fa 3, non 4, e <code>3*1**3</code> fa 3, non
27.</li>
<li>La <em>M</em>oltiplicazione e la <em>D</em>ivisione hanno la stessa
precedenza, più alta di quella dell’<em>A</em>ddizione e della
<em>S</em>ottrazione, che a loro volta hanno la stessa precedenza.
Quindi <code>2*3-1</code> fa 5, non 4, e <code>6+4/2</code> fa
<code>8.0</code>, non 5.</li>
<li>Gli operatori con la stessa precedenza vengono valutati da sinistra
a destra: l’espressione <code>5-3-1</code> fa 1, non 3, perché
<code>5-3</code> viene calcolato per primo e poi <code>1</code> viene
sottratto da <code>2</code>.</li>
</ul>
<p>Nel dubbio, metti sempre le parentesi nelle espressioni, per essere
sicuro che i calcoli vengano eseguiti nell’ordine che intendi.</p>
<h2 id="operatore-modulo">Operatore modulo</h2>
<p> L’<em>operatore modulo</em> funziona con gli interi e dà il resto
della divisione del primo operando per il secondo. In Python l’operatore
modulo è il segno di percentuale (<code>%</code>). La sintassi è la
stessa degli altri operatori:</p>
<pre class="python" height="240"><code>&gt;&gt;&gt; quotient = 7 // 3
&gt;&gt;&gt; print(quotient)
2
&gt;&gt;&gt; remainder = 7 % 3
&gt;&gt;&gt; print(remainder)
1</code></pre>
<p>Quindi 7 diviso per 3 fa 2 con il resto di 1.</p>
<p>L’operatore modulo si rivela sorprendentemente utile. Ad esempio,
puoi verificare se un numero è divisibile per un altro: se
<code>x % y</code> fa zero, allora <code>x</code> è divisibile per
<code>y</code>.</p>
<p>Puoi anche estrarre da un numero la cifra o le cifre più a destra. Ad
esempio, <code>x % 10</code> dà la cifra più a destra di <code>x</code>
(in base 10). Allo stesso modo, <code>x % 100</code> dà le ultime due
cifre.</p>
<h2 id="operazioni-con-le-stringhe">Operazioni con le stringhe</h2>
<p> L’operatore <code>+</code> funziona con le stringhe, ma non è
un’addizione in senso matematico. Esegue invece la
<em>concatenazione</em>, cioè unisce le stringhe attaccandole una di
seguito all’altra. Ad esempio: </p>
<pre class="python"><code>&gt;&gt;&gt; first = 10
&gt;&gt;&gt; second = 15
&gt;&gt;&gt; print(first+second)
25
&gt;&gt;&gt; first = &#39;100&#39;
&gt;&gt;&gt; second = &#39;150&#39;
&gt;&gt;&gt; print(first + second)
100150</code></pre>
<p>Anche l’operatore <code>*</code> funziona con le stringhe: moltiplica
il contenuto di una stringa per un intero. Ad esempio:</p>
<pre class="python"><code>&gt;&gt;&gt; first = &#39;Test &#39;
&gt;&gt;&gt; second = 3
&gt;&gt;&gt; print(first * second)
Test Test Test</code></pre>
<h2 id="chiedere-un-input-allutente">Chiedere un input all’utente</h2>
<p> A volte vorremmo ricevere dall’utente il valore di una variabile,
tramite la tastiera. Python fornisce una funzione built-in chiamata
<code>input</code> che prende l’input dalla tastiera<a href="#fn1"
class="footnote-ref" id="fnref1" role="doc-noteref"><sup>1</sup></a>.
Quando questa funzione viene chiamata, il programma si ferma e aspetta
che l’utente digiti qualcosa. Quando l’utente preme <code>Invio</code> o
<code>Enter</code>, il programma riprende e <code>input</code>
restituisce come stringa ciò che l’utente ha digitato. </p>
<pre class="python"><code>&gt;&gt;&gt; inp = input()
Some silly stuff
&gt;&gt;&gt; print(inp)
Some silly stuff</code></pre>
<p>Prima di ricevere l’input dall’utente, è una buona idea stampare un
prompt che gli dica cosa inserire. Puoi passare a <code>input</code> una
stringa, che viene visualizzata all’utente prima che il programma si
fermi ad aspettare l’input: </p>
<pre class="python"><code>&gt;&gt;&gt; name = input(&#39;What is your name?\n&#39;)
What is your name?
Chuck
&gt;&gt;&gt; print(name)
Chuck</code></pre>
<p>La sequenza <code>\n</code> alla fine del prompt rappresenta un
<em>newline</em> (carattere di fine riga), un carattere speciale che
manda a capo il testo. Ecco perché l’input dell’utente appare sotto il
prompt.</p>
<p>Se ti aspetti che l’utente digiti un intero, puoi provare a
convertire il valore di ritorno in <code>int</code> con la funzione
<code>int()</code>:</p>
<pre class="python"><code>&gt;&gt;&gt; prompt = &#39;What...is the airspeed velocity of an unladen swallow?\n&#39;
&gt;&gt;&gt; speed = input(prompt)
What...is the airspeed velocity of an unladen swallow?
17
&gt;&gt;&gt; int(speed)
17
&gt;&gt;&gt; int(speed) + 5
22</code></pre>
<p>Ma se l’utente digita qualcosa di diverso da una stringa composta da
cifre, ottieni un errore:</p>
<pre class="python"><code>&gt;&gt;&gt; speed = input(prompt)
What...is the airspeed velocity of an unladen swallow?
What do you mean, an African or a European swallow?
&gt;&gt;&gt; int(speed)
Traceback (most recent call last):
  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;
    int(speed)
    ~~~^^^^^^^
ValueError: invalid literal for int() with
base 10: &#39;What do you mean, an African or a European swallow?&#39;</code></pre>
<p>Vedremo in seguito come gestire questo tipo di errore. </p>
<h2 id="commenti">Commenti</h2>
<p> Man mano che diventano più grandi e complicati, i programmi
diventano anche più difficili da leggere. I linguaggi formali sono
densi, e spesso è difficile guardare un pezzo di codice e capire cosa
fa, o perché.</p>
<p>Per questo è una buona idea aggiungere ai programmi delle note che
spiegano in linguaggio naturale cosa fa il programma. Queste note si
chiamano <em>commenti</em> e in Python iniziano con il simbolo
<code>#</code>:</p>
<pre class="python"><code># compute the percentage of the hour that has elapsed
percentage = (minute * 100) / 60</code></pre>
<p>In questo caso, il commento appare da solo su una riga. Puoi anche
inserire commenti alla fine di una riga:</p>
<pre class="python"><code>percentage = (minute * 100) / 60     # percentage of an hour</code></pre>
<p>Tutto ciò che è compreso tra <code>#</code> e la fine della riga
viene ignorato e non ha alcun effetto sul programma.</p>
<p>I commenti sono utili soprattutto quando documentano aspetti non ovvi
del codice. È ragionevole presumere che chi legge riesca a capire
<em>cosa</em> fa il codice; è molto più utile spiegare
<em>perché</em>.</p>
<p>Questo commento ripete ciò che dice il codice ed è inutile:</p>
<pre class="python"><code>v = 5     # assign 5 to v</code></pre>
<p>Questo commento, invece, contiene informazioni utili che nel codice
non ci sono:</p>
<pre class="python"><code>v = 5     # velocity in meters/second.</code></pre>
<p>Dei buoni nomi di variabili possono ridurre il bisogno di commenti,
ma i nomi lunghi possono rendere difficili da leggere le espressioni
complesse, quindi bisogna trovare un compromesso.</p>
<h2 id="scegliere-nomi-mnemonici-per-le-variabili">Scegliere nomi
mnemonici per le variabili</h2>
<p> Purché tu segua le semplici regole sui nomi delle variabili ed eviti
le parole riservate, hai molta scelta quando dai un nome alle variabili.
All’inizio questa scelta può confondere, sia quando leggi un programma
sia quando scrivi i tuoi. Ad esempio, i tre programmi seguenti sono
identici in ciò che fanno, ma molto diversi quando li leggi e cerchi di
capirli.</p>
<pre class="python"><code>a = 35.0
b = 12.50
c = a * b
print(c)</code></pre>
<pre class="python"><code>hours = 35.0
rate = 12.50
pay = hours * rate
print(pay)</code></pre>
<pre class="python"><code>x1q3z9ahd = 35.0
x1q3z9afd = 12.50
x1q3p9afd = x1q3z9ahd * x1q3z9afd
print(x1q3p9afd)</code></pre>
<p>Per l’interprete Python questi tre programmi sono <em>esattamente
uguali</em>, ma gli esseri umani li vedono e li capiscono in modo molto
diverso. Gli esseri umani capiscono più in fretta l’<em>intento</em> del
secondo programma, perché il programmatore ha scelto nomi di variabili
che rispecchiano ciò che intende memorizzare in ciascuna variabile.</p>
<p>Chiamiamo questi nomi di variabili scelti con saggezza “nomi
mnemonici per le variabili”. La parola <em>mnemonico</em><a href="#fn2"
class="footnote-ref" id="fnref2" role="doc-noteref"><sup>2</sup></a>
significa “che aiuta la memoria”. Scegliamo nomi mnemonici per le
variabili perché ci aiutino a ricordare il motivo per cui le abbiamo
create.</p>
<p>Tutto questo sembra ottimo, ed è davvero una buona idea usare nomi
mnemonici per le variabili; però questi nomi possono ostacolare un
programmatore alle prime armi quando cerca di analizzare e capire il
codice. Il motivo è che i programmatori principianti non hanno ancora
imparato a memoria le parole riservate (sono solo 35), e a volte le
variabili con nomi troppo descrittivi cominciano a sembrare parte del
linguaggio, e non semplici nomi di variabili scelti bene.</p>
<p>Dai una rapida occhiata al seguente codice Python di esempio, che
scorre alcuni dati. Tratteremo presto i cicli, ma per ora prova solo a
decifrare cosa significa:</p>
<pre class="python"><code>for word in words:
    print(word)</code></pre>
<p>Cosa succede qui? Quali token (<code>for</code>, <code>word</code>,
<code>in</code>, ecc.) sono parole riservate e quali sono solo nomi di
variabili? Python capisce a un livello fondamentale il concetto di
parole? I programmatori principianti faticano a distinguere quali parti
del codice <em>devono</em> essere uguali a questo esempio e quali sono
semplicemente scelte del programmatore.</p>
<p>Il seguente codice equivale al precedente:</p>
<pre class="python"><code>for slice in pizza:
    print(slice)</code></pre>
<p>Per il programmatore alle prime armi è più facile guardare questo
codice e capire quali parti sono parole riservate definite da Python e
quali sono semplicemente nomi di variabili scelti dal programmatore. È
abbastanza chiaro che Python non ha alcuna comprensione di fondo delle
pizze e dei tranci (slice), né del fatto che una pizza è composta da un
insieme di uno o più tranci.</p>
<p>Ma se il nostro programma serve davvero a leggere dati e a cercare
parole in quei dati, <code>pizza</code> e <code>slice</code> sono nomi
di variabili ben poco mnemonici. Sceglierli come nomi di variabili
distrae dal significato del programma.</p>
<p>Dopo un periodo piuttosto breve conoscerai le parole riservate più
comuni e comincerai a vedertele saltare agli occhi:</p>
<pre>
<b>for</b> word <b>in</b> words<b>:</b>
    <b>print</b>(word)
</pre>
<p>Le parti del codice definite da Python (<code>for</code>,
<code>in</code>, <code>print</code> e <code>:</code>) sono in grassetto,
mentre le variabili scelte dal programmatore (<code>word</code> e
<code>words</code>) non lo sono. Molti editor di testo conoscono la
sintassi di Python e colorano le parole riservate in modo diverso, per
darti degli indizi che aiutano a tenere distinte le variabili e le
parole riservate. Dopo un po’ comincerai a leggere Python e a stabilire
rapidamente cos’è una variabile e cos’è una parola riservata.</p>
<h2 id="debug">Debug</h2>
<p> A questo punto, l’errore di sintassi che hai più probabilità di fare
è un nome di variabile non valido, come <code>class</code> e
<code>yield</code>, che sono parole chiave, o <code>odd~job</code> e
<code>US$</code>, che contengono caratteri non ammessi.</p>
<p>Se inserisci uno spazio in un nome di variabile, Python pensa che
siano due operandi senza un operatore:</p>
<pre class="python"><code>&gt;&gt;&gt; bad name = 5
  File &quot;&lt;stdin&gt;&quot;, line 1
    bad name = 5
        ^^^^
SyntaxError: invalid syntax</code></pre>
<p>Per gli errori di sintassi, i messaggi di errore non aiutano molto.
Il messaggio più comune è <code>SyntaxError: invalid syntax</code>, che
non è molto informativo.</p>
<p>L’errore di runtime che hai più probabilità di fare è l’“uso prima
della definizione” (use before def), cioè cercare di usare una variabile
prima di averle assegnato un valore. Può succedere se sbagli a scrivere
il nome di una variabile:</p>
<pre class="python"><code>&gt;&gt;&gt; principal = 327.68
&gt;&gt;&gt; interest = principle * rate
Traceback (most recent call last):
  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;
    interest = principle * rate
               ^^^^^^^^^
NameError: name &#39;principle&#39; is not defined. Did you mean: &#39;principal&#39;?</code></pre>
<p>I nomi delle variabili distinguono tra maiuscole e minuscole (sono
case-sensitive), quindi <code>LaTeX</code> non è la stessa cosa di
<code>latex</code>.</p>
<p>A questo punto la causa più probabile di un errore semantico è
l’ordine delle operazioni. Ad esempio, per valutare
<math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mn>1</mn><mi>/</mi><mn>2</mn><mi>π</mi></mrow><annotation encoding="application/x-tex">1/2\pi</annotation></semantics></math>
potresti essere tentato di scrivere:</p>
<pre class="python"><code>&gt;&gt;&gt; 1.0 / 2.0 * pi</code></pre>
<p>Ma la divisione viene eseguita per prima, quindi otterresti
<math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi>π</mi><mi>/</mi><mn>2</mn></mrow><annotation encoding="application/x-tex">\pi / 2</annotation></semantics></math>,
che non è la stessa cosa! Python non ha modo di sapere cosa intendevi
scrivere, quindi in questo caso non ottieni un messaggio di errore:
ottieni solo il risultato sbagliato. </p>
<h2 id="glossario">Glossario</h2>
<dl>
<dt><strong>Assegnazione</strong></dt>
<dd>
Un’istruzione che assegna un valore a una variabile.
</dd>
<dt><strong>Commento</strong></dt>
<dd>
Un’informazione, contenuta in un programma, destinata ad altri
programmatori (o a chiunque legga il codice sorgente) e senza alcun
effetto sull’esecuzione del programma.
</dd>
<dt><strong>Concatenare</strong></dt>
<dd>
Unire due operandi uno di seguito all’altro.
</dd>
<dt><strong>Espressione</strong></dt>
<dd>
Una combinazione di variabili, operatori e valori che rappresenta un
unico valore come risultato.
</dd>
<dt><strong>Intero</strong></dt>
<dd>
Un tipo di dato che rappresenta numeri interi.
</dd>
<dt><strong>Istruzione</strong></dt>
<dd>
Una sezione di codice che rappresenta un comando o un’azione. Finora le
istruzioni che abbiamo visto sono le assegnazioni e l’istruzione di
espressione <code>print</code>.
</dd>
<dt><strong>Mnemonico</strong></dt>
<dd>
Relativo a ciò che aiuta la memoria. Spesso diamo alle variabili nomi
mnemonici per aiutarci a ricordare cosa è memorizzato nella variabile.
</dd>
<dt><strong>Operando</strong></dt>
<dd>
Uno dei valori a cui si applica un operatore.
</dd>
<dt><strong>Operatore</strong></dt>
<dd>
Un simbolo speciale che rappresenta un calcolo semplice, come
l’addizione, la moltiplicazione o la concatenazione di stringhe.
</dd>
<dt><strong>Operatore modulo</strong></dt>
<dd>
Un operatore, indicato con il segno di percentuale (<code>%</code>), che
funziona con gli interi e dà il resto della divisione di un numero per
un altro.
</dd>
<dt><strong>Parola chiave</strong></dt>
<dd>
Una parola riservata che il compilatore usa per analizzare un programma;
non puoi usare parole chiave come <code>if</code>, <code>def</code> e
<code>while</code> come nomi di variabili.
</dd>
<dt><strong>Regole di precedenza</strong></dt>
<dd>
L’insieme delle regole che stabiliscono l’ordine in cui vengono valutate
le espressioni con più operatori e operandi.
</dd>
<dt><strong>Stringa</strong></dt>
<dd>
Un tipo di dato che rappresenta sequenze di caratteri.
</dd>
<dt><strong>Tipo</strong></dt>
<dd>
Una categoria di valori. I tipi che abbiamo visto finora sono gli interi
(tipo <code>int</code>), i numeri in virgola mobile (tipo
<code>float</code>) e le stringhe (tipo <code>str</code>).
</dd>
<dt><strong>Valore</strong></dt>
<dd>
Una delle unità di base dei dati, come un numero o una stringa, che un
programma manipola.
</dd>
<dt><strong>Valutare</strong></dt>
<dd>
Semplificare un’espressione eseguendo le operazioni in modo da ottenere
un unico valore.
</dd>
<dt><strong>Variabile</strong></dt>
<dd>
Un nome che si riferisce a un valore.
</dd>
<dt><strong>Virgola mobile</strong></dt>
<dd>
Un tipo di dato che rappresenta numeri con una parte frazionaria.
</dd>
</dl>
<h2 id="esercizi">Esercizi</h2>
<p><strong>Esercizio 2:</strong> Scrivi un programma che usi
<code>input</code> per chiedere all’utente il suo nome e poi gli dia il
benvenuto.</p>
<pre><code>Enter your name: Chuck
Hello Chuck</code></pre>
<p><strong>Esercizio 3:</strong> Scrivi un programma che chieda
all’utente le ore di lavoro e la tariffa oraria per calcolare la paga
lorda.</p>
<pre><code>Enter Hours: 35
Enter Rate: 2.75
Pay: 96.25</code></pre>
<p>Per ora non ci preoccuperemo di fare in modo che la paga abbia
esattamente due cifre decimali. Se vuoi, puoi giocare con la funzione
built-in <code>round</code> di Python per arrotondare correttamente la
paga risultante a due cifre decimali.</p>
<p><strong>Esercizio 4:</strong> Supponiamo di eseguire le seguenti
istruzioni di assegnazione:</p>
<pre><code>width = 17
height = 12.0</code></pre>
<p>Per ciascuna delle seguenti espressioni, scrivi il valore
dell’espressione e il tipo di dato (del valore dell’espressione).</p>
<ol type="1">
<li><p><code>width//2</code></p></li>
<li><p><code>width/2.0</code></p></li>
<li><p><code>height/3</code></p></li>
<li><p><code>1 + 2 * 5</code></p></li>
</ol>
<p>Usa l’interprete Python per controllare le tue risposte.</p>
<p><strong>Esercizio 5:</strong> Scrivi un programma che chieda
all’utente una temperatura in gradi Celsius, la converta in gradi
Fahrenheit e stampi la temperatura convertita.</p>
<section id="footnotes" class="footnotes footnotes-end-of-document"
role="doc-endnotes">
<hr />
<ol>
<li id="fn1"><p>In Python 2, questa funzione si chiamava
<code>raw_input</code>.<a href="#fnref1" class="footnote-back"
role="doc-backlink">↩︎</a></p></li>
<li id="fn2"><p>Vedi https://www.treccani.it/vocabolario/mnemonico/ per
una descrizione estesa della parola “mnemonico”.<a href="#fnref2"
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
