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
  <title>Stringhe</title>
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
<h1 id="stringhe">Stringhe</h1>
<h2 id="una-stringa-è-una-sequenza">Una stringa è una sequenza</h2>
<p> </p>
<p>Una stringa è una <em>sequenza</em> di caratteri. Puoi accedere ai
caratteri uno alla volta con l’operatore parentesi quadre:</p>
<pre class="python"><code>&gt;&gt;&gt; fruit = &#39;banana&#39;
&gt;&gt;&gt; letter = fruit[1]</code></pre>
<p>La seconda istruzione estrae dalla variabile <code>fruit</code> il
carattere nella posizione di indice 1 e lo assegna alla variabile
<code>letter</code>.</p>
<p>L’espressione tra parentesi quadre è chiamata <em>indice</em>.
L’indice indica quale carattere della sequenza vuoi (da cui il
nome).</p>
<p>Ma potresti non ottenere ciò che ti aspetti:</p>
<pre class="python"><code>&gt;&gt;&gt; print(letter)
a</code></pre>
<p>Per la maggior parte delle persone, la prima lettera di
<code>'banana'</code> è <code>b</code>, non <code>a</code>. Ma in Python
l’indice è uno scostamento dall’inizio della stringa, e lo scostamento
della prima lettera è zero.</p>
<pre class="python"><code>&gt;&gt;&gt; letter = fruit[0]
&gt;&gt;&gt; print(letter)
b</code></pre>
<p>Quindi <code>b</code> è la lettera numero 0 (“zeresima”) di
<code>'banana'</code>, <code>a</code> è la lettera numero 1 (“unesima”)
e <code>n</code> è la lettera numero 2 (“duesima”).</p>
<figure>
<img src="../images/string.svg" alt="Indici di una stringa" style="height: 0.75in;"/>
<figcaption>
Indici di una stringa
</figcaption>
</figure>
<p> </p>
<p>Puoi usare come indice qualsiasi espressione, comprese variabili e
operatori, ma il valore dell’indice deve essere un intero. Altrimenti
ottieni:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; letter = fruit[1.5]
TypeError: string indices must be integers</code></pre>
<h2 id="ottenere-la-lunghezza-di-una-stringa-usando-len">Ottenere la
lunghezza di una stringa usando <code>len</code></h2>
<p> </p>
<p><code>len</code> è una funzione built-in che restituisce il numero di
caratteri di una stringa:</p>
<pre class="python"><code>&gt;&gt;&gt; fruit = &#39;banana&#39;
&gt;&gt;&gt; len(fruit)
6</code></pre>
<p>Per ottenere l’ultima lettera di una stringa, potresti essere tentato
di provare qualcosa del genere:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; length = len(fruit)
&gt;&gt;&gt; last = fruit[length]
IndexError: string index out of range</code></pre>
<p>Il motivo dell’<code>IndexError</code> è che in <code>'banana'</code>
non c’è nessuna lettera con indice 6. Poiché abbiamo iniziato a contare
da zero, le sei lettere sono numerate da 0 a 5. Per ottenere l’ultimo
carattere, devi sottrarre 1 da <code>length</code>:</p>
<pre class="python"><code>&gt;&gt;&gt; last = fruit[length-1]
&gt;&gt;&gt; print(last)
a</code></pre>
<p>In alternativa, puoi usare indici negativi, che contano all’indietro
dalla fine della stringa. L’espressione <code>fruit[-1]</code>
restituisce l’ultima lettera, <code>fruit[-2]</code> la penultima, e
così via.</p>
<p> </p>
<h2 id="scorrere-una-stringa-con-un-ciclo">Scorrere una stringa con un
ciclo</h2>
<p> </p>
<p>Molti calcoli comportano l’elaborazione di una stringa un carattere
alla volta. Spesso partono dall’inizio, selezionano un carattere dopo
l’altro, ci fanno qualcosa e proseguono fino alla fine. Questo schema di
elaborazione è chiamato <em>scorrimento</em> (traversal). Un modo per
scrivere uno scorrimento è usare un ciclo <code>while</code>:</p>
<pre class="python"><code>index = 0
while index &lt; len(fruit):
    letter = fruit[index]
    print(letter)
    index = index + 1</code></pre>
<p>Questo ciclo scorre la stringa e visualizza ogni lettera su una riga
a sé. La condizione del ciclo è <code>index &lt; len(fruit)</code>,
quindi quando <code>index</code> è uguale alla lunghezza della stringa
la condizione è falsa e il corpo del ciclo non viene eseguito. L’ultimo
carattere a cui si accede è quello con indice <code>len(fruit)-1</code>,
che è l’ultimo carattere della stringa.</p>
<p><strong>Esercizio 1:</strong> Scrivi un ciclo <code>while</code> che
parta dall’ultimo carattere della stringa e proceda all’indietro fino al
primo carattere, stampando ogni lettera su una riga separata, ma al
contrario.</p>
<p>Un altro modo per scrivere uno scorrimento è usare un ciclo
<code>for</code>:</p>
<pre class="python"><code>for char in fruit:
    print(char)</code></pre>
<p>A ogni passaggio del ciclo, il carattere successivo della stringa
viene assegnato alla variabile <code>char</code>. Il ciclo continua
finché non rimangono più caratteri.</p>
<h2 id="slice-di-stringhe">Slice di stringhe</h2>
<p> </p>
<p>Un segmento di una stringa è chiamato <em>slice</em>. Selezionare una
slice è simile a selezionare un carattere:</p>
<pre class="python"><code>&gt;&gt;&gt; s = &#39;Monty Python&#39;
&gt;&gt;&gt; print(s[0:5])
Monty
&gt;&gt;&gt; print(s[6:12])
Python</code></pre>
<p>L’operatore <code>[n:m]</code> restituisce la parte della stringa che
va dal carattere numero <code>n</code> al carattere numero
<code>m</code>, compreso il primo ma escluso l’ultimo.</p>
<p>Se ometti il primo indice (prima dei due punti), la slice parte
dall’inizio della stringa. Se ometti il secondo indice, la slice arriva
fino alla fine della stringa:</p>
<pre class="python"><code>&gt;&gt;&gt; fruit = &#39;banana&#39;
&gt;&gt;&gt; fruit[:3]
&#39;ban&#39;
&gt;&gt;&gt; fruit[3:]
&#39;ana&#39;</code></pre>
<p>Se il primo indice è maggiore o uguale al secondo, il risultato è una
<em>stringa vuota</em>, rappresentata da due virgolette:</p>
<pre class="python"><code>&gt;&gt;&gt; fruit = &#39;banana&#39;
&gt;&gt;&gt; fruit[3:3]
&#39;&#39;</code></pre>
<p>Una stringa vuota non contiene caratteri e ha lunghezza 0, ma a parte
questo è uguale a qualsiasi altra stringa.</p>
<p><strong>Esercizio 2:</strong> Dato che <code>fruit</code> è una
stringa, cosa significa <code>fruit[:]</code>?</p>
<p> </p>
<h2 id="le-stringhe-sono-immutabili">Le stringhe sono immutabili</h2>
<p> </p>
<p>Si è tentati di usare l’operatore sul lato sinistro di
un’assegnazione, con l’intenzione di cambiare un carattere di una
stringa. Ad esempio:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; greeting = &#39;Hello, world!&#39;
&gt;&gt;&gt; greeting[0] = &#39;J&#39;
TypeError: &#39;str&#39; object does not support item assignment</code></pre>
<p>L’“object” in questo caso è la stringa e l’“item” è il carattere che
hai provato ad assegnare. Per ora un <em>oggetto</em> è la stessa cosa
di un valore, ma perfezioneremo questa definizione più avanti. Un
<em>elemento</em> (item) è uno dei valori di una sequenza.</p>
<p> </p>
<p>Il motivo dell’errore è che le stringhe sono <em>immutabili</em>,
cioè non puoi modificare una stringa esistente. Il meglio che puoi fare
è creare una nuova stringa che sia una variante dell’originale:</p>
<pre class="python"><code>&gt;&gt;&gt; greeting = &#39;Hello, world!&#39;
&gt;&gt;&gt; new_greeting = &#39;J&#39; + greeting[1:]
&gt;&gt;&gt; print(new_greeting)
Jello, world!</code></pre>
<p>Questo esempio concatena una nuova prima lettera a una slice di
<code>greeting</code>. Non ha alcun effetto sulla stringa originale.</p>
<h2 id="cicli-e-conteggi">Cicli e conteggi</h2>
<p> </p>
<p>Il seguente programma conta il numero di volte in cui la lettera
<code>a</code> compare in una stringa:</p>
<pre class="python"><code>word = &#39;banana&#39;
count = 0
for letter in word:
    if letter == &#39;a&#39;:
        count = count + 1
print(count)</code></pre>
<p>Questo programma illustra un altro schema di calcolo, chiamato
<em>contatore</em>. La variabile <code>count</code> è inizializzata a 0
e poi incrementata ogni volta che viene trovata una <code>a</code>.
Quando il ciclo termina, <code>count</code> contiene il risultato: il
numero totale di <code>a</code>.</p>
<p><strong>Esercizio 3:</strong> Incapsula questo codice in una funzione
chiamata <code>count</code> e generalizzala in modo che accetti come
argomenti la stringa e la lettera.</p>
<h2 id="loperatore-in">L’operatore <code>in</code></h2>
<p> </p>
<p>La parola <code>in</code> è un operatore booleano che accetta due
stringhe e restituisce <code>True</code> se la prima compare come
sottostringa nella seconda:</p>
<pre class="python"><code>&gt;&gt;&gt; &#39;a&#39; in &#39;banana&#39;
True
&gt;&gt;&gt; &#39;seed&#39; in &#39;banana&#39;
False</code></pre>
<h2 id="confronto-tra-stringhe">Confronto tra stringhe</h2>
<p> </p>
<p>Gli operatori di confronto funzionano sulle stringhe. Per vedere se
due stringhe sono uguali:</p>
<pre class="python"><code>if word == &#39;banana&#39;:
    print(&#39;All right, bananas.&#39;)</code></pre>
<p>Altre operazioni di confronto sono utili per mettere le parole in
ordine alfabetico:</p>
<pre class="python"><code>if word &lt; &#39;banana&#39;:
    print(&#39;Your word,&#39; + word + &#39;, comes before banana.&#39;)
elif word &gt; &#39;banana&#39;:
    print(&#39;Your word,&#39; + word + &#39;, comes after banana.&#39;)
else:
    print(&#39;All right, bananas.&#39;)</code></pre>
<p>Python non tratta le lettere maiuscole e minuscole come fanno le
persone. Tutte le lettere maiuscole vengono prima di tutte le lettere
minuscole, quindi:</p>
<pre><code>Your word, Pineapple, comes before banana.</code></pre>
<p>Un modo comune per affrontare questo problema è convertire le
stringhe in un formato standard, ad esempio tutto in minuscolo, prima di
eseguire il confronto. Tienilo a mente nel caso tu debba difenderti da
un uomo armato di ananas.</p>
<h2 id="metodi-delle-stringhe">Metodi delle stringhe</h2>
<p>Le stringhe sono un esempio di <em>oggetti</em> Python. Un oggetto
contiene sia i dati (la stringa vera e propria) sia i <em>metodi</em>,
che sono di fatto funzioni incorporate nell’oggetto e disponibili per
qualsiasi <em>istanza</em> dell’oggetto.</p>
<p>Python ha una funzione chiamata <code>dir</code> che elenca i metodi
disponibili per un oggetto. La funzione <code>type</code> mostra il tipo
di un oggetto e la funzione <code>dir</code> mostra i metodi
disponibili.</p>
<pre class="python"><code>&gt;&gt;&gt; stuff = &#39;Hello world&#39;
&gt;&gt;&gt; type(stuff)
&lt;class &#39;str&#39;&gt;
&gt;&gt;&gt; dir(stuff)
[... &#39;capitalize&#39;, &#39;casefold&#39;, &#39;center&#39;, &#39;count&#39;, &#39;encode&#39;,
&#39;endswith&#39;, &#39;expandtabs&#39;, &#39;find&#39;, &#39;format&#39;, &#39;format_map&#39;,
&#39;index&#39;, &#39;isalnum&#39;, &#39;isalpha&#39;, &#39;isdecimal&#39;, &#39;isdigit&#39;,
&#39;isidentifier&#39;, &#39;islower&#39;, &#39;isnumeric&#39;, &#39;isprintable&#39;,
&#39;isspace&#39;, &#39;istitle&#39;, &#39;isupper&#39;, &#39;join&#39;, &#39;ljust&#39;, &#39;lower&#39;,
&#39;lstrip&#39;, &#39;maketrans&#39;, &#39;partition&#39;, &#39;replace&#39;, &#39;rfind&#39;,
&#39;rindex&#39;, &#39;rjust&#39;, &#39;rpartition&#39;, &#39;rsplit&#39;, &#39;rstrip&#39;,
&#39;split&#39;, &#39;splitlines&#39;, &#39;startswith&#39;, &#39;strip&#39;, &#39;swapcase&#39;,
&#39;title&#39;, &#39;translate&#39;, &#39;upper&#39;, &#39;zfill&#39;]
&gt;&gt;&gt; help(str.capitalize)
Help on method_descriptor:

capitalize(self, /)
    Return a capitalized version of the string.

    More specifically, make the first character have upper
    case and the rest lower case.
&gt;&gt;&gt;</code></pre>
<p>La funzione <code>dir</code> elenca i metodi e puoi usare
<code>help</code> per ottenere una semplice documentazione su un metodo,
ma una fonte di documentazione migliore per i metodi delle stringhe
sarebbe</p>
<p><a
href="https://docs.python.org/library/stdtypes.html#string-methods"
class="uri">https://docs.python.org/library/stdtypes.html#string-methods</a></p>
<p>Chiamare un <em>metodo</em> è simile a chiamare una funzione (accetta
argomenti e restituisce un valore), ma la sintassi è diversa. Chiamiamo
un metodo aggiungendo il nome del metodo al nome della variabile, con il
punto come delimitatore.</p>
<p>Ad esempio, il metodo <code>upper</code> accetta una stringa e
restituisce una nuova stringa con tutte le lettere maiuscole:</p>
<p> </p>
<p>Non usa la sintassi delle funzioni, <code>upper(word)</code>, ma
quella dei metodi, <code>word.upper()</code>.</p>
<pre class="python"><code>&gt;&gt;&gt; word = &#39;banana&#39;
&gt;&gt;&gt; new_word = word.upper()
&gt;&gt;&gt; print(new_word)
BANANA</code></pre>
<p>Questa forma di notazione puntata specifica il nome del metodo,
<code>upper</code>, e il nome della stringa a cui applicare il metodo,
<code>word</code>. Le parentesi vuote indicano che questo metodo non
accetta argomenti.</p>
<p>Una chiamata di metodo è detta <em>invocazione</em>; in questo caso
diremmo che stiamo invocando <code>upper</code> su
<code>word</code>.</p>
<p>Ad esempio, c’è un metodo delle stringhe chiamato <code>find</code>
che cerca la posizione di una stringa all’interno di un’altra:</p>
<pre class="python"><code>&gt;&gt;&gt; word = &#39;banana&#39;
&gt;&gt;&gt; index = word.find(&#39;a&#39;)
&gt;&gt;&gt; print(index)
1</code></pre>
<p>In questo esempio invochiamo <code>find</code> su <code>word</code> e
passiamo come parametro la lettera che stiamo cercando.</p>
<p>Il metodo <code>find</code> può trovare sia sottostringhe sia
caratteri:</p>
<pre class="python"><code>&gt;&gt;&gt; word.find(&#39;na&#39;)
2</code></pre>
<p>Può accettare come secondo argomento l’indice da cui deve
iniziare:</p>
<p> </p>
<pre class="python"><code>&gt;&gt;&gt; word.find(&#39;na&#39;, 3)
4</code></pre>
<p>Un compito comune è rimuovere gli spazi bianchi (spazi, tabulazioni o
newline, cioè caratteri di fine riga) dall’inizio e dalla fine di una
stringa usando il metodo <code>strip</code>:</p>
<pre class="python"><code>&gt;&gt;&gt; line = &#39;  Here we go  &#39;
&gt;&gt;&gt; line.strip()
&#39;Here we go&#39;</code></pre>
<p>Alcuni metodi, come <code>startswith</code>, restituiscono valori
booleani.</p>
<pre class="python"><code>&gt;&gt;&gt; line = &#39;Have a nice day&#39;
&gt;&gt;&gt; line.startswith(&#39;Have&#39;)
True
&gt;&gt;&gt; line.startswith(&#39;h&#39;)
False</code></pre>
<p>Noterai che <code>startswith</code> richiede che maiuscole e
minuscole corrispondano, quindi a volte prendiamo una riga e la
convertiamo tutta in minuscolo con il metodo <code>lower</code> prima di
fare qualsiasi controllo.</p>
<pre class="python"><code>&gt;&gt;&gt; line = &#39;Have a nice day&#39;
&gt;&gt;&gt; line.startswith(&#39;h&#39;)
False
&gt;&gt;&gt; line.lower()
&#39;have a nice day&#39;
&gt;&gt;&gt; line.lower().startswith(&#39;h&#39;)
True</code></pre>
<p>Nell’ultimo esempio viene chiamato il metodo <code>lower</code> e poi
usiamo <code>startswith</code> per vedere se la stringa risultante, in
minuscolo, inizia con la lettera <code>h</code>. Purché facciamo
attenzione all’ordine, possiamo fare più chiamate di metodo in una
singola espressione.</p>
<p> </p>
<p><strong>Esercizio 4:</strong> C’è un metodo delle stringhe chiamato
<code>count</code> che è simile alla funzione dell’esercizio precedente.
Leggi la documentazione di questo metodo su:</p>
<p><a
href="https://docs.python.org/library/stdtypes.html#string-methods"
class="uri">https://docs.python.org/library/stdtypes.html#string-methods</a></p>
<p>Scrivi un’invocazione che conti il numero di volte in cui la lettera
<code>a</code> compare in <code>'banana'</code>.</p>
<h2 id="analisi-delle-stringhe">Analisi delle stringhe</h2>
<p>Spesso vogliamo guardare dentro una stringa e trovare una
sottostringa. Ad esempio, se abbiamo davanti una serie di righe
formattate come segue:</p>
<p><code>From stephen.marquard@</code><em><code> uct.ac.za</code></em><code> Sat Jan  5 09:14:16 2008</code></p>
<p>e vogliamo estrarre da ogni riga solo la seconda metà dell’indirizzo
(cioè <code>uct.ac.za</code>), possiamo farlo usando il metodo
<code>find</code> e lo slicing delle stringhe.</p>
<p>Per prima cosa troveremo la posizione della chiocciola nella stringa.
Poi troveremo la posizione del primo spazio <em>dopo</em> la chiocciola.
Infine useremo lo slicing delle stringhe per estrarre la porzione di
stringa che stiamo cercando.</p>
<pre class="python"><code>&gt;&gt;&gt; data = &#39;From stephen.marquard@uct.ac.za Sat Jan  5 09:14:16 2008&#39;
&gt;&gt;&gt; atpos = data.find(&#39;@&#39;)
&gt;&gt;&gt; print(atpos)
21
&gt;&gt;&gt; sppos = data.find(&#39; &#39;,atpos)
&gt;&gt;&gt; print(sppos)
31
&gt;&gt;&gt; host = data[atpos+1:sppos]
&gt;&gt;&gt; print(host)
uct.ac.za
&gt;&gt;&gt;</code></pre>
<p>Usiamo una versione del metodo <code>find</code> che ci permette di
specificare la posizione nella stringa da cui vogliamo che
<code>find</code> inizi a cercare. Quando applichiamo lo slicing,
estraiamo i caratteri “da quello successivo alla chiocciola fino allo
spazio, <em>ma senza includerlo</em>”.</p>
<p>La documentazione del metodo <code>find</code> è disponibile
all’indirizzo</p>
<p><a
href="https://docs.python.org/library/stdtypes.html#string-methods"
class="uri">https://docs.python.org/library/stdtypes.html#string-methods</a></p>
<h2 id="stringhe-letterali-formattate">Stringhe letterali
formattate</h2>
<p> </p>
<p>Una <em>stringa letterale formattata</em> (spesso chiamata
semplicemente <em>f-string</em>) permette di usare espressioni Python
all’interno delle stringhe letterali. Per farlo si antepone una
<code>f</code> alla stringa letterale e si racchiudono le espressioni
tra parentesi graffe <code>{}</code>.</p>
<p>Ad esempio, se racchiudi il nome di una variabile tra parentesi
graffe dentro una f-string, il nome viene sostituito dal suo valore:</p>
<pre class="python"><code>&gt;&gt;&gt; camels = 42
&gt;&gt;&gt; f&#39;{camels}&#39;
&#39;42&#39;</code></pre>
<p>Il risultato è la stringa <code>'42'</code>, da non confondere con il
valore intero <code>42</code>.</p>
<p>Un’espressione può comparire in qualsiasi punto della stringa, quindi
puoi inserire un valore in una frase:</p>
<pre class="python"><code>&gt;&gt;&gt; camels = 42
&gt;&gt;&gt; f&#39;I have spotted {camels} camels.&#39;
&#39;I have spotted 42 camels.&#39;</code></pre>
<p>In una singola stringa letterale si possono includere più
espressioni, per creare stringhe più complesse.</p>
<pre class="python"><code>&gt;&gt;&gt; years = 3
&gt;&gt;&gt; count = .1
&gt;&gt;&gt; species = &#39;camels&#39;
&gt;&gt;&gt; f&#39;In {years} years I have spotted {count} {species}.&#39;
&#39;In 3 years I have spotted 0.1 camels.&#39;</code></pre>
<p>Le stringhe letterali formattate sono potenti e possono fare anche
più di quanto si è visto qui. Puoi saperne di più su</p>
<p><a
href="https://docs.python.org/3/tutorial/inputoutput.html#formatted-string-literals"
class="uri">https://docs.python.org/3/tutorial/inputoutput.html#formatted-string-literals</a></p>
<h2 id="debug">Debug</h2>
<p>Un’abilità che dovresti coltivare mentre programmi è chiederti
sempre: “Cosa potrebbe andare storto qui?” oppure: “Quale follia
potrebbe fare l’utente per mandare in crash il nostro programma
(apparentemente) perfetto?”</p>
<p>Ad esempio, guarda il programma che abbiamo usato per illustrare il
ciclo <code>while</code> nel capitolo sull’iterazione:</p>
<pre class="python"><code>while True:
    line = input(&#39;&gt; &#39;)
    if line[0] == &#39;#&#39;:
        continue
    if line == &#39;done&#39;:
        break
    print(line)
print(&#39;Done!&#39;)

# Code: https://www.py4e.com/code3/copytildone2.py</code></pre>
<p>Guarda cosa succede quando l’utente inserisce una riga di input
vuota:</p>
<pre class="python"><code>&gt; hello there
hello there
&gt; # don&#39;t print this
&gt; print this!
print this!
&gt;
Traceback (most recent call last):
  File &quot;copytildone.py&quot;, line 3, in &lt;module&gt;
    if line[0] == &#39;#&#39;:
IndexError: string index out of range</code></pre>
<p>Il codice funziona bene finché non riceve una riga vuota. A quel
punto non c’è un carattere numero zero, quindi otteniamo un traceback.
Ci sono due soluzioni per rendere “sicura” la riga tre anche quando la
riga è vuota.</p>
<p>Una possibilità è usare semplicemente il metodo
<code>startswith</code>, che restituisce <code>False</code> se la
stringa è vuota.</p>
<pre class="python"><code>if line.startswith(&#39;#&#39;):</code></pre>
<p> </p>
<p>Un altro modo è scrivere l’istruzione <code>if</code> in modo sicuro
usando lo schema del <em>guardiano</em>, e assicurarsi che la seconda
espressione logica sia valutata solo quando nella stringa c’è almeno un
carattere:</p>
<pre class="python"><code>if len(line) &gt; 0 and line[0] == &#39;#&#39;:</code></pre>
<h2 id="glossario">Glossario</h2>
<dl>
<dt><strong>Contatore</strong></dt>
<dd>
Una variabile usata per contare qualcosa, di solito inizializzata a zero
e poi incrementata.
</dd>
<dt><strong>Elemento</strong></dt>
<dd>
Uno dei valori di una sequenza.
</dd>
<dt><strong>Flag</strong></dt>
<dd>
Una variabile booleana usata per indicare se una condizione è vera o
falsa.
</dd>
<dt><strong>Immutabile</strong></dt>
<dd>
Relativo a una sequenza ai cui elementi non si può assegnare un valore.
</dd>
<dt><strong>Indice</strong></dt>
<dd>
Un valore intero usato per selezionare un elemento di una sequenza, ad
esempio un carattere di una stringa.
</dd>
<dt><strong>Invocazione</strong></dt>
<dd>
Un’istruzione che chiama un metodo.
</dd>
<dt><strong>Metodo</strong></dt>
<dd>
Una funzione associata a un oggetto e chiamata usando la notazione
puntata.
</dd>
<dt><strong>Oggetto</strong></dt>
<dd>
Qualcosa a cui una variabile può riferirsi. Per ora puoi usare “oggetto”
e “valore” in modo intercambiabile.
</dd>
<dt><strong>Ricerca</strong></dt>
<dd>
Uno schema di scorrimento che si ferma quando trova ciò che sta
cercando.
</dd>
<dt><strong>Scorrere</strong></dt>
<dd>
Iterare sugli elementi di una sequenza, eseguendo un’operazione simile
su ciascuno.
</dd>
<dt><strong>Sequenza</strong></dt>
<dd>
Un insieme ordinato, cioè un insieme di valori in cui ogni valore è
identificato da un indice intero.
</dd>
<dt><strong>Slice</strong></dt>
<dd>
Una parte di una stringa specificata da un intervallo di indici.
</dd>
<dt><strong>Stringa vuota</strong></dt>
<dd>
Una stringa senza caratteri e di lunghezza 0, rappresentata da due
virgolette.
</dd>
</dl>
<h2 id="esercizi">Esercizi</h2>
<p><strong>Esercizio 5:</strong> Slicing delle stringhe</p>
<p>Considera il seguente codice Python che memorizza una stringa:</p>
<p><code>str = 'X-DSPAM-Confidence: 0.8475'</code></p>
<p>Usa <code>find</code> e lo slicing delle stringhe per estrarre la
porzione di stringa dopo il carattere dei due punti, poi usa la funzione
<code>float</code> per convertire la stringa estratta in un numero in
virgola mobile.</p>
<p> </p>
<p><strong>Esercizio 6:</strong> Metodi delle stringhe</p>
<p>Leggi la documentazione dei metodi delle stringhe su</p>
<p><a
href="https://docs.python.org/library/stdtypes.html#string-methods"
class="uri">https://docs.python.org/library/stdtypes.html#string-methods</a></p>
<p>Ti conviene fare esperimenti con alcuni di questi metodi per
assicurarti di aver capito come funzionano. <code>strip</code> e
<code>replace</code> sono particolarmente utili.</p>
<p>La documentazione usa una sintassi che potrebbe creare confusione. Ad
esempio, in <code>find(sub[, start[, end]])</code> le parentesi quadre
indicano argomenti opzionali. Quindi <code>sub</code> è obbligatorio, ma
<code>start</code> è opzionale, e se includi <code>start</code>, allora
<code>end</code> è opzionale.</p>
</body>
</html>
<?php if ( file_exists("../bookfoot.php") ) {
  $HTML_FILE = basename(__FILE__);
  $HTML = ob_get_contents();
  ob_end_clean();
  require_once "../bookfoot.php";
}?>
