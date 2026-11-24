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
  <title>Iterazione</title>
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
<h1 id="iterazione">Iterazione</h1>
<h2 id="aggiornamento-delle-variabili">Aggiornamento delle
variabili</h2>
<p> </p>
<p>Uno schema comune nelle istruzioni di assegnazione è l’istruzione che
aggiorna una variabile, in cui il nuovo valore della variabile dipende
da quello vecchio.</p>
<pre class="python"><code>x = x + 1</code></pre>
<p>Significa: “prendi il valore corrente di <code>x</code>, aggiungi 1 e
poi aggiorna <code>x</code> con il nuovo valore”.</p>
<p>Se provi ad aggiornare una variabile che non esiste, ottieni un
errore, perché Python valuta il lato destro prima di assegnare un valore
a <code>x</code>:</p>
<pre class="python"><code>&gt;&gt;&gt; x = x + 1
NameError: name &#39;x&#39; is not defined</code></pre>
<p>Prima di poter aggiornare una variabile, devi
<em>inizializzarla</em>, di solito con una semplice assegnazione: </p>
<pre class="python"><code>&gt;&gt;&gt; x = 0
&gt;&gt;&gt; x = x + 1</code></pre>
<p>Aggiornare una variabile aggiungendo 1 si chiama <em>incremento</em>;
sottrarre 1 si chiama <em>decremento</em>.</p>
<p> </p>
<h2 id="listruzione-while">L’istruzione <code>while</code></h2>
<p> </p>
<p>I computer vengono usati spesso per automatizzare compiti ripetitivi.
Ripetere compiti identici o simili senza fare errori è una cosa che i
computer fanno bene e le persone fanno male. Poiché l’iterazione è così
comune, Python fornisce diverse funzionalità del linguaggio per renderla
più facile.</p>
<p>Una forma di iterazione in Python è l’istruzione <code>while</code>.
Ecco un semplice programma che fa il conto alla rovescia da cinque e poi
dice <code>Blastoff!</code>.</p>
<pre class="python"><code>n = 5
while n &gt; 0:
    print(n)
    n = n - 1
print(&#39;Blastoff!&#39;)</code></pre>
<p>Puoi quasi leggere l’istruzione <code>while</code> come se fosse
scritta in inglese. Significa: “Finché <code>n</code> è maggiore di 0,
visualizza il valore di <code>n</code> e poi riduci di 1 il valore di
<code>n</code>. Quando arrivi a 0, esci dall’istruzione
<code>while</code> e visualizza la parola <code>Blastoff!</code>”.</p>
<p>Più formalmente, ecco il flusso di esecuzione di un’istruzione
<code>while</code>:</p>
<ol type="1">
<li><p>Valuta la condizione, ottenendo come risultato <code>True</code>
o <code>False</code>.</p></li>
<li><p>Se la condizione è falsa, esci dall’istruzione <code>while</code>
e prosegui con l’istruzione successiva.</p></li>
<li><p>Se la condizione è vera, esegui il corpo e torna al passaggio
1.</p></li>
</ol>
<p>Questo tipo di flusso è chiamato <em>ciclo</em> (loop) perché il
terzo passaggio torna indietro all’inizio. Chiamiamo <em>iterazione</em>
ogni esecuzione del corpo del ciclo. Del ciclo qui sopra diremmo: “Ha
fatto cinque iterazioni”, cioè il corpo del ciclo è stato eseguito
cinque volte.</p>
<p> </p>
<p>Il corpo del ciclo dovrebbe cambiare il valore di una o più
variabili, in modo che prima o poi la condizione diventi falsa e il
ciclo termini. Chiamiamo <em>variabile di iterazione</em> la variabile
che cambia ogni volta che il ciclo viene eseguito e controlla quando il
ciclo finisce. Se non c’è una variabile di iterazione, il ciclo si
ripeterà per sempre, e il risultato è un <em>ciclo infinito</em>.</p>
<h2 id="cicli-infiniti">Cicli infiniti</h2>
<p>Per i programmatori è una fonte inesauribile di divertimento
osservare che le istruzioni sul flacone dello shampoo, “Insapona,
risciacqua, ripeti”, sono un ciclo infinito, perché non c’è una
<em>variabile di iterazione</em> che ti dica quante volte eseguire il
ciclo.</p>
<p> </p>
<p>Nel caso di <code>countdown</code> possiamo dimostrare che il ciclo
termina, perché sappiamo che il valore di <code>n</code> è finito e
possiamo vedere che il valore di <code>n</code> diminuisce a ogni
passaggio del ciclo, quindi prima o poi dobbiamo arrivare a 0. Altre
volte un ciclo è evidentemente infinito, perché non ha nessuna variabile
di iterazione.</p>
<p> </p>
<p>A volte non sai che è il momento di terminare un ciclo finché non
arrivi a metà del corpo. In questo caso puoi scrivere di proposito un
ciclo infinito e poi usare l’istruzione <code>break</code> per uscire
dal ciclo.</p>
<p>Il ciclo seguente è ovviamente un <em>ciclo infinito</em> perché
l’espressione logica nell’istruzione <code>while</code> è semplicemente
la costante logica <code>True</code>:</p>
<pre class="python"><code>n = 10
while True:
    print(n, end=&#39; &#39;)
    n = n - 1
print(&#39;Done!&#39;)</code></pre>
<p>Se commetti l’errore di eseguire questo codice, imparerai in fretta a
fermare sul tuo sistema un processo Python fuori controllo, o a trovare
dov’è il pulsante di spegnimento del computer. Questo programma resterà
in esecuzione per sempre, o finché la batteria non si esaurisce, perché
l’espressione logica all’inizio del ciclo è sempre vera, dato che è il
valore costante <code>True</code>.</p>
<p>Anche se questo è un ciclo infinito disfunzionale, possiamo comunque
usare questo schema per costruire cicli utili, a patto di aggiungere con
cura al corpo del ciclo il codice che esce esplicitamente dal ciclo con
<code>break</code> quando abbiamo raggiunto la condizione di uscita.</p>
<p>Ad esempio, supponi di voler accettare input dall’utente finché non
digita <code>done</code>. Potresti scrivere:</p>
<pre class="python"><code>while True:
    line = input(&#39;&gt; &#39;)
    if line == &#39;done&#39;:
        break
    print(line)
print(&#39;Done!&#39;)

# Code: https://www.py4e.com/code3/copytildone1.py</code></pre>
<p>La condizione del ciclo è <code>True</code>, che è sempre vera,
quindi il ciclo viene ripetuto finché non incontra l’istruzione
<code>break</code>.</p>
<p>A ogni passaggio il programma mostra all’utente una parentesi
angolare come prompt. Se l’utente digita <code>done</code>, l’istruzione
<code>break</code> fa uscire dal ciclo. Altrimenti il programma ripete
tutto ciò che l’utente digita e torna all’inizio del ciclo. Ecco un
esempio di esecuzione:</p>
<pre><code>&gt; hello there
hello there
&gt; finished
finished
&gt; done
Done!</code></pre>
<p>Questo modo di scrivere i cicli <code>while</code> è comune perché
puoi controllare la condizione in qualsiasi punto del ciclo (non solo
all’inizio) e puoi esprimere la condizione di arresto in forma
affermativa (“fermati quando succede questo”) invece che in forma
negativa (“continua finché non succede quello”).</p>
<h2 id="terminare-le-iterazioni-con-continue">Terminare le iterazioni
con <code>continue</code></h2>
<p> A volte, durante un’iterazione di un ciclo, vuoi terminare
l’iterazione corrente e passare subito alla successiva. In questo caso
puoi usare l’istruzione <code>continue</code> per saltare all’iterazione
successiva senza completare il corpo del ciclo per l’iterazione
corrente.</p>
<p>Ecco un esempio di ciclo che copia il suo input finché l’utente non
digita <code>done</code>, ma tratta le righe che iniziano con il
carattere cancelletto come righe da non stampare (un po’ come i commenti
di Python).</p>
<pre class="python"><code>while True:
    line = input(&#39;&gt; &#39;)
    if line[0] == &#39;#&#39;:
        continue
    if line == &#39;done&#39;:
        break
    print(line)
print(&#39;Done!&#39;)

# Code: https://www.py4e.com/code3/copytildone2.py</code></pre>
<p>Ecco un esempio di esecuzione di questo nuovo programma con
l’aggiunta di <code>continue</code>.</p>
<pre><code>&gt; hello there
hello there
&gt; # don&#39;t print this
&gt; print this!
print this!
&gt; done
Done!</code></pre>
<p>Vengono stampate tutte le righe tranne quella che inizia con il
cancelletto perché, quando viene eseguito <code>continue</code>,
l’iterazione corrente termina e si torna all’istruzione
<code>while</code> per iniziare l’iterazione successiva, saltando così
l’istruzione <code>print</code>.</p>
<h2 id="cicli-definiti-con-for">Cicli definiti con <code>for</code></h2>
<p> </p>
<p>A volte vogliamo scorrere un <em>insieme</em> di cose, come un elenco
di parole, le righe di un file o un elenco di numeri. Quando abbiamo un
elenco di cose da scorrere, possiamo costruire un ciclo
<em>definito</em> con un’istruzione <code>for</code>. Chiamiamo
l’istruzione <code>while</code> ciclo <em>indefinito</em> perché si
limita a ripetersi finché una condizione non diventa <code>False</code>,
mentre il ciclo <code>for</code> scorre un insieme noto di elementi e
quindi esegue tante iterazioni quanti sono gli elementi
dell’insieme.</p>
<p>La sintassi di un ciclo <code>for</code> è simile a quella del ciclo
<code>while</code>, perché ci sono un’istruzione <code>for</code> e un
corpo del ciclo:</p>
<pre class="python"><code>friends = [&#39;Joseph&#39;, &#39;Glenn&#39;, &#39;Sally&#39;]
for friend in friends:
    print(&#39;Happy New Year:&#39;, friend)
print(&#39;Done!&#39;)</code></pre>
<p>In termini di Python, la variabile <code>friends</code> è una lista<a
href="#fn1" class="footnote-ref" id="fnref1"
role="doc-noteref"><sup>1</sup></a> di tre stringhe e il ciclo
<code>for</code> scorre la lista ed esegue il corpo una volta per ognuna
delle tre stringhe della lista, producendo questo output:</p>
<pre class="python"><code>Happy New Year: Joseph
Happy New Year: Glenn
Happy New Year: Sally
Done!</code></pre>
<p>La traduzione in linguaggio naturale di questo ciclo <code>for</code>
non è diretta come quella del <code>while</code>, ma se pensi agli amici
come a un <em>insieme</em>, suona così: “Esegui le istruzioni nel corpo
del ciclo <code>for</code> una volta per ogni amico
(<code>friend</code>) <em>contenuto</em> nell’insieme chiamato amici
(<code>friends</code>)”.</p>
<p>Nel ciclo <code>for</code>, <code>for</code> e <code>in</code> sono
parole chiave riservate di Python, mentre <code>friend</code> e
<code>friends</code> sono variabili.</p>
<pre class="python"><code>for friend in friends:
    print(&#39;Happy New Year:&#39;, friend)</code></pre>
<p>In particolare, <code>friend</code> è la <em>variabile di
iterazione</em> del ciclo <code>for</code>. La variabile
<code>friend</code> cambia a ogni iterazione del ciclo e controlla
quando il ciclo <code>for</code> termina. La <em>variabile di
iterazione</em> scorre una dopo l’altra le tre stringhe memorizzate
nella variabile <code>friends</code>.</p>
<h2 id="schemi-di-ciclo">Schemi di ciclo</h2>
<p>Spesso usiamo un ciclo <code>for</code> o <code>while</code> per
scorrere un elenco di elementi o il contenuto di un file alla ricerca di
qualcosa, come il valore più grande o più piccolo tra i dati che
scorriamo.</p>
<p>Di solito questi cicli si costruiscono così:</p>
<ul>
<li><p>inizializzare una o più variabili prima che il ciclo
inizi;</p></li>
<li><p>eseguire qualche calcolo su ciascun elemento nel corpo del ciclo,
eventualmente cambiando le variabili nel corpo del ciclo;</p></li>
<li><p>guardare le variabili risultanti quando il ciclo
termina.</p></li>
</ul>
<p>Useremo una lista di numeri per illustrare i concetti e la
costruzione di questi schemi di ciclo.</p>
<h3 id="cicli-per-contare-e-sommare">Cicli per contare e sommare</h3>
<p>Ad esempio, per contare il numero di elementi in una lista,
scriveremmo il seguente ciclo <code>for</code>:</p>
<pre class="python"><code>count = 0
for itervar in [3, 41, 12, 9, 74, 15]:
    count = count + 1
print(&#39;Count: &#39;, count)</code></pre>
<p>Impostiamo la variabile <code>count</code> a zero prima che il ciclo
inizi, poi scriviamo un ciclo <code>for</code> per scorrere la lista di
numeri. La nostra variabile di <em>iterazione</em> si chiama
<code>itervar</code> e, anche se non usiamo <code>itervar</code> nel
ciclo, è lei che controlla il ciclo e fa eseguire il corpo del ciclo una
volta per ciascuno dei valori della lista.</p>
<p>Nel corpo del ciclo aggiungiamo 1 al valore corrente di
<code>count</code> per ciascuno dei valori della lista. Mentre il ciclo
è in esecuzione, il valore di <code>count</code> è il numero di valori
che abbiamo visto “finora”.</p>
<p>Una volta completato il ciclo, il valore di <code>count</code> è il
numero totale di elementi. Il numero totale ci “cade in grembo” alla
fine del ciclo. Costruiamo il ciclo in modo da avere ciò che vogliamo
quando il ciclo termina.</p>
<p>Un altro ciclo simile, che calcola il totale di un insieme di numeri,
è il seguente:</p>
<pre class="python"><code>total = 0
for itervar in [3, 41, 12, 9, 74, 15]:
    total = total + itervar
print(&#39;Total: &#39;, total)</code></pre>
<p>In questo ciclo <em>usiamo</em> la <em>variabile di iterazione</em>.
Invece di aggiungere semplicemente uno a <code>count</code>, come nel
ciclo precedente, a ogni iterazione del ciclo aggiungiamo al totale
parziale il numero vero e proprio (3, 41, 12, ecc.). Se ci pensi, la
variabile <code>total</code> contiene il “totale parziale dei valori
visti finora”. Quindi prima che il ciclo inizi <code>total</code> è
zero, perché non abbiamo ancora visto nessun valore; durante il ciclo
<code>total</code> è il totale parziale; alla fine del ciclo
<code>total</code> è il totale complessivo di tutti i valori della
lista.</p>
<p>Mentre il ciclo viene eseguito, <code>total</code> accumula la somma
degli elementi; una variabile usata in questo modo a volte è chiamata
<em>accumulatore</em>.</p>
<p>Né il ciclo di conteggio né il ciclo di somma sono particolarmente
utili in pratica, perché esistono le funzioni built-in
<code>len()</code> e <code>sum()</code>, che calcolano rispettivamente
il numero di elementi di una lista e il totale degli elementi della
lista.</p>
<h3 id="cicli-per-il-massimo-e-il-minimo">Cicli per il massimo e il
minimo</h3>
<p> </p>
<p>Per trovare il valore più grande in una lista o in una sequenza,
costruiamo il seguente ciclo:</p>
<pre class="python"><code>largest = None
print(&#39;Before:&#39;, largest)
for itervar in [3, 41, 12, 9, 74, 15]:
    if largest is None or itervar &gt; largest :
        largest = itervar
    print(&#39;Loop:&#39;, itervar, largest)
print(&#39;Largest:&#39;, largest)</code></pre>
<p>Quando il programma viene eseguito, l’output è il seguente:</p>
<pre><code>Before: None
Loop: 3 3
Loop: 41 41
Loop: 12 41
Loop: 9 41
Loop: 74 74
Loop: 15 74
Largest: 74</code></pre>
<p>Conviene pensare alla variabile <code>largest</code> come al “valore
più grande che abbiamo visto finora”. Prima del ciclo impostiamo
<code>largest</code> alla costante <code>None</code>. <code>None</code>
è un valore costante speciale che possiamo memorizzare in una variabile
per contrassegnarla come “vuota”.</p>
<p>Prima che il ciclo inizi, il valore più grande che abbiamo visto
finora è <code>None</code>, perché non abbiamo ancora visto nessun
valore. Mentre il ciclo è in esecuzione, se <code>largest</code> è
<code>None</code> prendiamo il primo valore che vediamo come il più
grande finora. Puoi vedere che nella prima iterazione, quando il valore
di <code>itervar</code> è 3, dato che <code>largest</code> è
<code>None</code> impostiamo subito <code>largest</code> a 3.</p>
<p>Dopo la prima iterazione <code>largest</code> non è più
<code>None</code>, quindi la seconda parte dell’espressione logica
composta, che controlla <code>itervar &gt; largest</code>, scatta solo
quando vediamo un valore maggiore del “più grande finora”. Quando
vediamo un nuovo valore “ancora più grande”, lo prendiamo come nuovo
valore di <code>largest</code>. Nell’output del programma puoi vedere
che <code>largest</code> passa da 3 a 41 a 74.</p>
<p>Alla fine del ciclo abbiamo esaminato tutti i valori e la variabile
<code>largest</code> ora contiene davvero il valore più grande della
lista.</p>
<p>Per calcolare il numero più piccolo il codice è molto simile, con una
piccola modifica:</p>
<pre class="python"><code>smallest = None
print(&#39;Before:&#39;, smallest)
for itervar in [3, 41, 12, 9, 74, 15]:
    if smallest is None or itervar &lt; smallest:
        smallest = itervar
    print(&#39;Loop:&#39;, itervar, smallest)
print(&#39;Smallest:&#39;, smallest)</code></pre>
<p>Di nuovo, <code>smallest</code> è il “più piccolo finora” prima,
durante e dopo l’esecuzione del ciclo. Al termine del ciclo,
<code>smallest</code> contiene il valore minimo della lista.</p>
<p>Anche qui, come per il conteggio e la somma, le funzioni built-in
<code>max()</code> e <code>min()</code> rendono superfluo scrivere
proprio questi cicli.</p>
<p>Quella che segue è una versione semplice della funzione built-in
<code>min()</code> di Python:</p>
<pre class="python"><code>def min(values):
    smallest = None
    for value in values:
        if smallest is None or value &lt; smallest:
            smallest = value
    return smallest</code></pre>
<p>Nella versione a funzione del codice per trovare il minimo abbiamo
tolto tutte le istruzioni <code>print</code>, in modo da renderla
equivalente alla funzione <code>min</code>, che in Python è già
built-in.</p>
<h2 id="debug">Debug</h2>
<p>Quando inizi a scrivere programmi più grandi, potresti ritrovarti a
dedicare più tempo al debug. Più codice significa più possibilità di
commettere un errore e più posti in cui i bug possono nascondersi. </p>
<p>Un modo per ridurre il tempo di debug è il “debug per bisezione”. Ad
esempio, se il tuo programma ha 100 righe, a controllarle una alla volta
ci vorrebbero 100 passaggi.</p>
<p>Prova invece a dividere il problema a metà. Cerca a metà del
programma, o lì vicino, un valore intermedio che puoi controllare.
Aggiungi un’istruzione <code>print</code> (o qualcos’altro che abbia un
effetto verificabile) ed esegui il programma.</p>
<p>Se il controllo a metà programma dà un risultato sbagliato, il
problema è per forza nella prima metà del programma. Se il risultato è
corretto, il problema è nella seconda metà.</p>
<p>Ogni volta che fai un controllo come questo, dimezzi il numero di
righe in cui devi cercare. Dopo sei passaggi (che sono molti meno di
100), ti resterebbero una o due righe di codice, almeno in teoria.</p>
<p>In pratica non è sempre chiaro quale sia la “metà del programma”, e
non sempre è possibile controllarla. Non ha senso contare le righe e
trovare l’esatto punto centrale. Pensa invece ai punti del programma in
cui potrebbero esserci errori e a quelli in cui è facile inserire un
controllo. Poi scegli un punto in cui, secondo te, il bug ha più o meno
le stesse probabilità di trovarsi prima o dopo il controllo.</p>
<h2 id="glossario">Glossario</h2>
<dl>
<dt><strong>Accumulatore</strong></dt>
<dd>
Una variabile usata in un ciclo per sommare o accumulare un risultato.
</dd>
<dt><strong>Ciclo infinito</strong></dt>
<dd>
Un ciclo in cui la condizione di arresto non è mai soddisfatta o che non
ha nessuna condizione di arresto.
</dd>
<dt><strong>Contatore</strong></dt>
<dd>
Una variabile usata in un ciclo per contare quante volte è successo
qualcosa. Inizializziamo un contatore a zero e poi lo incrementiamo ogni
volta che vogliamo “contare” qualcosa.
</dd>
<dt><strong>Decremento</strong></dt>
<dd>
Un aggiornamento che riduce il valore di una variabile.
</dd>
<dt><strong>Incremento</strong></dt>
<dd>
Un aggiornamento che aumenta il valore di una variabile (spesso di uno).
</dd>
<dt><strong>Inizializzare</strong></dt>
<dd>
Assegnare un valore iniziale a una variabile che verrà aggiornata.
</dd>
<dt><strong>Iterazione</strong></dt>
<dd>
L’esecuzione ripetuta di un insieme di istruzioni, per mezzo di una
funzione che chiama se stessa oppure di un ciclo.
</dd>
</dl>
<h2 id="esercizi">Esercizi</h2>
<p><strong>Esercizio 1:</strong> Scrivi un programma che legga
ripetutamente dei numeri interi finché l’utente non inserisce
<code>done</code>. Quando viene inserito <code>done</code>, stampa il
totale, il conteggio e la media degli interi. Se l’utente inserisce
qualcosa di diverso da un intero, rileva l’errore usando
<code>try</code> ed <code>except</code>, stampa un messaggio di errore e
passa all’intero successivo.</p>
<pre><code>Enter a number: 4
Enter a number: 5
Enter a number: bad data
Invalid input
Enter a number: 7
Enter a number: done
16 3 5.333333333333333</code></pre>
<p><strong>Esercizio 2:</strong> Scrivi un altro programma che chieda un
elenco di numeri come sopra e alla fine stampi sia il massimo sia il
minimo dei numeri, invece della media.</p>
<section id="footnotes" class="footnotes footnotes-end-of-document"
role="doc-endnotes">
<hr />
<ol>
<li id="fn1"><p>Esamineremo le liste più in dettaglio in un capitolo
successivo.<a href="#fnref1" class="footnote-back"
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
