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
  <title>Usare i database e SQL</title>
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
<h1 id="usare-i-database-e-sql">Usare i database e SQL</h1>
<h2 id="cosè-un-database">Cos’è un database?</h2>
<p>Un <em>database</em> è un file organizzato per memorizzare dati. La
maggior parte dei database è organizzata come un dizionario, nel senso
che fa corrispondere chiavi a valori. La differenza principale è che il
database si trova su disco (o su un’altra memoria permanente), quindi
continua a esistere dopo la fine del programma. Poiché risiede su una
memoria permanente, un database può memorizzare molti più dati di un
dizionario, che è limitato dalla dimensione della memoria del
computer.</p>
<p>Come un dizionario, il software di database è progettato per rendere
molto veloci sia l’inserimento dei dati sia l’accesso, anche quando sono
in grande quantità. Il software di database mantiene le sue prestazioni
costruendo degli <em>indici</em> man mano che i dati vengono aggiunti al
database, così il computer può saltare rapidamente a una determinata
voce.</p>
<p>Esistono molti sistemi di database diversi, usati per gli scopi più
vari: tra gli altri Oracle, MySQL, Microsoft SQL Server, PostgreSQL e
SQLite. In questo libro ci concentriamo su SQLite perché è un database
molto diffuso ed è già incluso in Python. SQLite è progettato per essere
<em>incorporato</em> (embedded) in altre applicazioni, per fornire il
supporto di un database all’interno dell’applicazione. Ad esempio, anche
il browser Firefox usa internamente il database SQLite, come molti altri
prodotti.</p>
<p><a href="http://sqlite.org/" class="uri">http://sqlite.org/</a></p>
<p>SQLite si presta bene ad alcuni dei problemi di manipolazione dei
dati che incontriamo in informatica.</p>
<h2 id="concetti-dei-database">Concetti dei database</h2>
<p>Quando guardi un database per la prima volta, sembra un foglio di
calcolo con più fogli. Le strutture dati principali di un database sono:
<em>tabelle</em>, <em>righe</em> e <em>colonne</em>.</p>
<figure>
<img src="../images/relational.svg" alt="Database relazionali" style="height: 2.0in;"/>
<figcaption>
Database relazionali
</figcaption>
</figure>
<p>Nelle descrizioni tecniche dei database relazionali i concetti di
tabella, riga e colonna si chiamano, in modo più formale,
rispettivamente <em>relazione</em>, <em>tupla</em> e <em>attributo</em>.
In questo capitolo useremo i termini meno formali.</p>
<h2 id="database-browser-for-sqlite">Database Browser for SQLite</h2>
<p>Anche se questo capitolo si concentrerà sull’uso di Python per
lavorare con i dati contenuti nei file di database SQLite, molte
operazioni si possono fare più comodamente con un software chiamato
<em>Database Browser for SQLite</em>, disponibile gratuitamente
all’indirizzo:</p>
<p><a href="http://sqlitebrowser.org/"
class="uri">http://sqlitebrowser.org/</a></p>
<p>Con il browser puoi creare facilmente tabelle, inserire dati,
modificarli o eseguire semplici query SQL sui dati del database.</p>
<p>In un certo senso, il browser di database è per i database quello che
un editor di testo è per i file di testo. Quando vuoi fare una sola
operazione, o pochissime, su un file di testo, puoi semplicemente
aprirlo in un editor di testo e apportare le modifiche che vuoi. Quando
devi fare molte modifiche a un file di testo, spesso scrivi un semplice
programma Python. Troverai lo stesso schema quando lavori con i
database. Farai le operazioni semplici nel gestore di database, mentre
quelle più complesse sarà più comodo farle in Python.</p>
<h2 id="creare-una-tabella-di-database">Creare una tabella di
database</h2>
<p>I database richiedono una struttura più definita delle liste o dei
dizionari Python<a href="#fn1" class="footnote-ref" id="fnref1"
role="doc-noteref"><sup>1</sup></a>.</p>
<p>Quando creiamo una <em>tabella</em> di database, dobbiamo comunicare
in anticipo al database i nomi delle <em>colonne</em> della tabella e il
tipo di dati che pensiamo di memorizzare in ogni <em>colonna</em>.
Quando il software di database conosce il tipo di dati di ogni colonna,
può scegliere il modo più efficiente per memorizzarli e cercarli in base
al loro tipo.</p>
<p>Puoi consultare i vari tipi di dati supportati da SQLite al seguente
URL:</p>
<p><a href="http://www.sqlite.org/datatypes.html"
class="uri">http://www.sqlite.org/datatypes.html</a></p>
<p>Definire in anticipo la struttura dei dati può sembrare scomodo
all’inizio, ma il vantaggio è un accesso veloce ai dati anche quando il
database ne contiene una grande quantità.</p>
<p>Il codice per creare un file di database e, al suo interno, una
tabella chiamata <code>Track</code> con due colonne è il seguente:</p>
<p> </p>
<pre class="python"><code>import sqlite3

conn = sqlite3.connect(&#39;music.sqlite&#39;)
cur = conn.cursor()

cur.execute(&#39;DROP TABLE IF EXISTS Track&#39;)
cur.execute(&#39;CREATE TABLE Track (title TEXT, plays INTEGER)&#39;)

conn.close()

# Code: https://www.py4e.com/code3/db1.py</code></pre>
<p> </p>
<p>L’operazione <code>connect</code> crea una “connessione” con il
database memorizzato nel file <code>music.sqlite</code> nella directory
corrente. Se il file non esiste, verrà creato. Si parla di “connessione”
perché a volte il database è memorizzato su un “server di database”
separato dal server su cui eseguiamo l’applicazione. Nei nostri semplici
esempi il database sarà solo un file locale nella stessa directory del
codice Python che stiamo eseguendo.</p>
<p>Un <em>cursore</em> è come un handle del file che possiamo usare per
eseguire operazioni sui dati memorizzati nel database. Concettualmente,
chiamare <code>cursor()</code> è molto simile a chiamare
<code>open()</code> quando si lavora con i file di testo.</p>
<figure>
<img src="../images/cursor.svg" alt="Un cursore di database" style="height: 2.0in;"/>
<figcaption>
Un cursore di database
</figcaption>
</figure>
<p>Una volta ottenuto il cursore, possiamo cominciare a eseguire comandi
sul contenuto del database con il metodo <code>execute()</code>.</p>
<p>I comandi del database si esprimono in un linguaggio speciale,
standardizzato tra molti fornitori di database diversi per permetterci
di imparare un solo linguaggio per i database. Il linguaggio dei
database si chiama <em>Structured Query Language</em>, o in breve
<em>SQL</em>.</p>
<p><a href="http://en.wikipedia.org/wiki/SQL"
class="uri">http://en.wikipedia.org/wiki/SQL</a></p>
<p>Nel nostro esempio eseguiamo due comandi SQL sul database. Per
convenzione, mostreremo le parole chiave SQL in maiuscolo e le parti del
comando che aggiungiamo noi (come i nomi delle tabelle e delle colonne)
in minuscolo.</p>
<p>Il primo comando SQL rimuove la tabella <code>Track</code> dal
database, se esiste. Questo schema serve solo a permetterci di eseguire
più e più volte lo stesso programma che crea la tabella
<code>Track</code> senza causare errori. Nota che il comando
<code>DROP TABLE</code> elimina dal database la tabella e tutto il suo
contenuto (cioè non esiste un “annulla”).</p>
<pre class="python"><code>cur.execute(&#39;DROP TABLE IF EXISTS Track &#39;)</code></pre>
<p>Il secondo comando crea una tabella chiamata <code>Track</code> con
una colonna di testo chiamata <code>title</code> e una colonna di interi
chiamata <code>plays</code>.</p>
<pre class="python"><code>cur.execute(&#39;CREATE TABLE Track (title TEXT, plays INTEGER)&#39;)</code></pre>
<p>Ora che abbiamo creato una tabella chiamata <code>Track</code>,
possiamo inserirvi alcuni dati con l’operazione SQL <code>INSERT</code>.
Anche qui cominciamo creando una connessione con il database e ottenendo
il <code>cursor</code>. Poi possiamo eseguire comandi SQL con il
cursore.</p>
<p>Il comando SQL <code>INSERT</code> indica quale tabella usiamo e poi
definisce una nuova riga elencando i campi che vogliamo includere
<code>(title, plays)</code>, seguiti da <code>VALUES</code> e dai valori
che vogliamo mettere nella nuova riga. Indichiamo i valori con dei punti
interrogativi <code>(?, ?)</code> per dire che i valori veri e propri
vengono passati nella tupla <code>( 'My Way', 15 )</code>, secondo
parametro della chiamata <code>execute()</code>.</p>
<pre class="python"><code>import sqlite3

conn = sqlite3.connect(&#39;music.sqlite&#39;)
cur = conn.cursor()

cur.execute(&#39;INSERT INTO Track (title, plays) VALUES (?, ?)&#39;,
    (&#39;Thunderstruck&#39;, 20))
cur.execute(&#39;INSERT INTO Track (title, plays) VALUES (?, ?)&#39;,
    (&#39;My Way&#39;, 15))
conn.commit()

print(&#39;Track:&#39;)
cur.execute(&#39;SELECT title, plays FROM Track&#39;)
for row in cur:
     print(row)

cur.execute(&#39;DELETE FROM Track WHERE plays &lt; 100&#39;)
conn.commit()

cur.close()

# Code: https://www.py4e.com/code3/db2.py</code></pre>
<p>Per prima cosa inseriamo due righe nella tabella con
<code>INSERT</code> e usiamo <code>commit()</code> per forzare la
scrittura dei dati nel file di database.</p>
<figure>
<img src="../images/tracks.svg" alt="Righe in una tabella" style="height: 1.5in;"/>
<figcaption>
Righe in una tabella
</figcaption>
</figure>
<p>Poi usiamo il comando <code>SELECT</code> per recuperare dalla
tabella le righe appena inserite. Nel comando <code>SELECT</code>
indichiamo quali colonne vogliamo <code>(title, plays)</code> e da quale
tabella vogliamo recuperare i dati. Dopo aver eseguito l’istruzione
<code>SELECT</code>, possiamo scorrere il cursore con un’istruzione
<code>for</code>. Per efficienza, il cursore non legge tutti i dati dal
database quando eseguiamo l’istruzione <code>SELECT</code>. I dati
vengono invece letti su richiesta, man mano che scorriamo le righe
nell’istruzione <code>for</code>.</p>
<p>L’output del programma è il seguente:</p>
<pre><code>Track:
(&#39;Thunderstruck&#39;, 20)
(&#39;My Way&#39;, 15)</code></pre>
<p>Il ciclo <code>for</code> trova due righe, e ogni riga è una tupla
Python che ha come primo valore il <code>title</code> e come secondo il
numero di <code>plays</code>.</p>
<p>Alla fine del programma eseguiamo un comando SQL che elimina con
<code>DELETE</code> le righe appena create, così possiamo eseguire il
programma più e più volte. Il comando <code>DELETE</code> mostra l’uso
di una clausola <code>WHERE</code>, che permette di esprimere un
criterio di selezione: così possiamo chiedere al database di applicare
il comando solo alle righe che soddisfano il criterio. In questo esempio
il criterio vale per tutte le righe, quindi svuotiamo la tabella e
possiamo eseguire il programma ripetutamente. Dopo aver eseguito il
<code>DELETE</code>, chiamiamo anche <code>commit()</code> per forzare
la rimozione dei dati dal database.</p>
<h2 id="riepilogo-dello-structured-query-language">Riepilogo dello
Structured Query Language</h2>
<p> Finora abbiamo usato lo Structured Query Language negli esempi
Python e abbiamo visto buona parte delle basi dei comandi SQL. In questa
sezione esaminiamo in particolare il linguaggio SQL e diamo una
panoramica della sua sintassi.</p>
<p>Poiché i fornitori di database sono tantissimi, lo Structured Query
Language (SQL) è stato standardizzato, così possiamo comunicare in modo
portabile con i sistemi di database di fornitori diversi.</p>
<p>Un database relazionale è formato da tabelle, righe e colonne. Di
solito le colonne hanno un tipo, ad esempio testo, numero o data. Quando
creiamo una tabella, indichiamo i nomi e i tipi delle colonne:</p>
<pre class="sql"><code>CREATE TABLE Track (title TEXT, plays INTEGER)</code></pre>
<p>Per inserire una riga in una tabella usiamo il comando SQL
<code>INSERT</code>:</p>
<pre class="sql"><code>INSERT INTO Track (title, plays) VALUES (&#39;My Way&#39;, 15)</code></pre>
<p>L’istruzione <code>INSERT</code> specifica il nome della tabella, poi
un elenco dei campi/colonne che vuoi impostare nella nuova riga, poi la
parola chiave <code>VALUES</code> e un elenco dei valori corrispondenti
a ciascun campo.</p>
<p>Il comando SQL <code>SELECT</code> si usa per recuperare righe e
colonne da un database. L’istruzione <code>SELECT</code> ti permette di
specificare quali colonne vuoi recuperare e una clausola
<code>WHERE</code> per selezionare le righe che vuoi vedere. Ammette
anche una clausola <code>ORDER BY</code> facoltativa per controllare
l’ordinamento delle righe restituite.</p>
<pre class="sql"><code>SELECT * FROM Track WHERE title = &#39;My Way&#39;</code></pre>
<p>Con <code>*</code> chiedi al database di restituire tutte le colonne
di ogni riga che soddisfa la clausola <code>WHERE</code>.</p>
<p>Nota che, a differenza di Python, in una clausola <code>WHERE</code>
di SQL usiamo un solo segno di uguale per indicare un test di
uguaglianza, invece di un doppio segno di uguale. Tra le altre
operazioni logiche ammesse in una clausola <code>WHERE</code> ci sono
<code>&lt;</code>, <code>&gt;</code>, <code>&lt;=</code>,
<code>&gt;=</code>, <code>!=</code>, oltre ad <code>AND</code> e
<code>OR</code> e alle parentesi tonde per costruire le espressioni
logiche.</p>
<p>Puoi chiedere che le righe restituite siano ordinate in base a uno
dei campi, in questo modo:</p>
<pre class="sql"><code>SELECT title,plays FROM Track ORDER BY title</code></pre>
<p>Puoi aggiornare una o più colonne in una o più righe di una tabella
con l’istruzione SQL <code>UPDATE</code>, in questo modo:</p>
<pre class="sql"><code>UPDATE Track SET plays = 16 WHERE title = &#39;My Way&#39;</code></pre>
<p>L’istruzione <code>UPDATE</code> specifica una tabella, poi, dopo la
parola chiave <code>SET</code>, un elenco di campi e valori da
modificare, e infine una clausola <code>WHERE</code> facoltativa che
seleziona le righe da aggiornare. Una sola istruzione
<code>UPDATE</code> modifica tutte le righe che soddisfano la clausola
<code>WHERE</code>. Se la clausola <code>WHERE</code> non è specificata,
l’<code>UPDATE</code> viene eseguito su tutte le righe della
tabella.</p>
<p>Per rimuovere una riga ti serve una clausola <code>WHERE</code> in
un’istruzione SQL <code>DELETE</code>. La clausola <code>WHERE</code>
determina quali righe eliminare:</p>
<pre class="sql"><code>DELETE FROM Track WHERE title = &#39;My Way&#39;</code></pre>
<p> Questi quattro comandi SQL di base (<code>INSERT</code>,
<code>SELECT</code>, <code>UPDATE</code> e <code>DELETE</code>)
permettono le quattro operazioni fondamentali necessarie per creare e
mantenere i dati. Usiamo “CRUD” (Create, Read, Update e Delete) per
riassumere tutti questi concetti in un solo termine.<a href="#fn2"
class="footnote-ref" id="fnref2" role="doc-noteref"><sup>2</sup></a></p>
<h2 id="più-tabelle-e-modellazione-elementare-dei-dati">Più tabelle e
modellazione elementare dei dati</h2>
<p> La vera potenza di un database relazionale si vede quando creiamo
più tabelle e le colleghiamo tra loro. Decidere come suddividere i dati
dell’applicazione in più tabelle e stabilire le relazioni tra queste si
chiama <em>modellazione dei dati</em>. Il documento di progetto che
mostra le tabelle e le loro relazioni si chiama <em>modello dei
dati</em>.</p>
<p>La modellazione dei dati è un’abilità piuttosto sofisticata, e in
questa sezione introdurremo solo i concetti più elementari della
modellazione relazionale dei dati. Per approfondire la modellazione dei
dati puoi cominciare da:</p>
<p><a href="http://en.wikipedia.org/wiki/Relational_model"
class="uri">http://en.wikipedia.org/wiki/Relational_model</a></p>
<p> Supponiamo che nel database dei brani, oltre al <code>title</code> e
al numero di riproduzioni, volessimo tenere traccia anche del nome
dell’<code>artist</code> di ogni brano. Un approccio semplice potrebbe
essere aggiungere al database un’altra colonna chiamata
<code>artist</code> e metterci il nome dell’artista, in questo modo:</p>
<pre class="python"><code>DROP TABLE IF EXISTS Track;
CREATE TABLE Track (title TEXT, plays INTEGER, artist TEXT);</code></pre>
<p>Poi potremmo inserire alcuni brani nella tabella.</p>
<pre class="sql"><code>INSERT INTO Track (title, plays, artist)
    VALUES (&#39;My Way&#39;, 15, &#39;Frank Sinatra&#39;);
INSERT INTO Track (title, plays, artist)
    VALUES (&#39;New York&#39;, 25, &#39;Frank Sinatra&#39;);</code></pre>
<p>Se guardassimo i dati con un’istruzione
<code>SELECT * FROM Track</code>, ci sembrerebbe di aver fatto un ottimo
lavoro.</p>
<pre><code>sqlite&gt; SELECT * FROM Track;
My Way|15|Frank Sinatra
New York|25|Frank Sinatra
sqlite&gt;</code></pre>
<p>Abbiamo commesso un <em>errore molto grave</em> nella modellazione
dei dati. Abbiamo violato le regole della <em>normalizzazione del
database</em>.</p>
<p><a href="https://en.wikipedia.org/wiki/Database_normalization"
class="uri">https://en.wikipedia.org/wiki/Database_normalization</a></p>
<p> Anche se a prima vista la normalizzazione del database sembra molto
complessa e contiene molte giustificazioni matematiche, per ora possiamo
ridurla tutta a una sola regola semplice, che seguiremo.</p>
<p> Non dovremmo mai mettere la stessa stringa in una colonna più di una
volta. Se ci servono i dati più di una volta, creiamo una
<em>chiave</em> numerica per quei dati e facciamo riferimento ai dati
veri e propri tramite questa chiave. Soprattutto se le diverse voci si
riferiscono allo stesso oggetto.</p>
<p>Per mostrare la china pericolosa su cui ci avviamo assegnando colonne
di tipo stringa al modello del database, pensa a questo: come
cambieremmo il modello dei dati se volessimo tenere traccia del colore
degli occhi degli artisti? Faremmo così?</p>
<pre class="sql"><code>DROP TABLE IF EXISTS Track;
CREATE TABLE Track (title TEXT, plays INTEGER,
    artist TEXT, eyes TEXT);
INSERT INTO Track (title, plays, artist, eyes)
    VALUES (&#39;My Way&#39;, 15, &#39;Frank Sinatra&#39;, &#39;Blue&#39;);
INSERT INTO Track (title, plays, artist, eyes)
    VALUES (&#39;New York&#39;, 25, &#39;Frank Sinatra&#39;, &#39;Blue&#39;);</code></pre>
<p>Frank Sinatra ha inciso più di 1200 canzoni: vogliamo davvero mettere
la stringa <code>'Blue'</code> in 1200 righe della tabella
<code>Track</code>? E cosa succederebbe se decidessimo che il colore dei
suoi occhi è <code>'Light Blue'</code>? C’è qualcosa che non torna.</p>
<p>La soluzione corretta è creare una tabella <code>Artist</code> e
memorizzare in quella tabella tutti i dati di ogni artista. Poi, in
qualche modo, dobbiamo creare un collegamento tra una riga della tabella
<code>Track</code> e una riga della tabella <code>Artist</code>. Forse
potremmo chiamare questo “collegamento” tra due “tabelle” una
“relazione” tra due tabelle. Ed è proprio così che gli esperti di
database hanno deciso di chiamare questi collegamenti.</p>
<p>Creiamo una tabella <code>Artist</code> in questo modo:</p>
<pre class="sql"><code>DROP TABLE IF EXISTS Artist;
CREATE TABLE Artist (name TEXT, eyes TEXT);
INSERT INTO Artist (name, eyes)
   VALUES (&#39;Frank Sinatra&#39;, &#39;blue&#39;);</code></pre>
<p> Ora abbiamo due tabelle, ma ci serve un modo per <em>collegare</em>
le righe delle due tabelle. Per farlo ci servono quelle che chiamiamo
“chiavi”. Queste chiavi saranno semplicemente numeri interi che possiamo
usare per cercare una riga in un’altra tabella. Se vogliamo creare
collegamenti alle righe di una tabella, dobbiamo aggiungere alle sue
righe una <em>chiave primaria</em>. Per convenzione di solito chiamiamo
<code>id</code> la colonna della chiave primaria. Quindi la tabella
<code>Artist</code> diventa così:</p>
<pre class="sql"><code>DROP TABLE IF EXISTS Artist;
CREATE TABLE Artist (id INTEGER, name TEXT, eyes TEXT);
INSERT INTO Artist (id, name, eyes)
   VALUES (42, &#39;Frank Sinatra&#39;, &#39;blue&#39;);</code></pre>
<p>Ora nella tabella c’è una riga per <code>'Frank Sinatra'</code> (e il
colore dei suoi occhi) e una chiave primaria <code>42</code> da usare
per collegargli i brani. Quindi modifichiamo la tabella
<code>Track</code> così:</p>
<pre class="sql"><code>DROP TABLE IF EXISTS Track;
CREATE TABLE Track (title TEXT, plays INTEGER,
    artist_id INTEGER);
INSERT INTO Track (title, plays, artist_id)
    VALUES (&#39;My Way&#39;, 15, 42);
INSERT INTO Track (title, plays, artist_id)
    VALUES (&#39;New York&#39;, 25, 42);</code></pre>
<p> La colonna <code>artist_id</code> è un intero e, secondo la
convenzione sui nomi, è una <em>chiave esterna</em> che punta a una
chiave <em>primaria</em> della tabella <code>Artist</code>. La chiamiamo
chiave esterna perché punta a una riga di un’altra tabella.</p>
<p> Ora seguiamo le regole della normalizzazione del database, ma quando
vogliamo estrarre i dati dal database non vogliamo vedere il
<code>42</code>: vogliamo vedere il nome e il colore degli occhi
dell’artista. Per farlo usiamo la parola chiave <code>JOIN</code>
nell’istruzione <code>SELECT</code>.</p>
<pre class="sql"><code>SELECT title, plays, name, eyes
FROM Track JOIN Artist
ON Track.artist_id = Artist.id;</code></pre>
<p>La clausola <code>JOIN</code> include una condizione <code>ON</code>
che definisce come collegare le righe. A ogni riga di <code>Track</code>
si aggiungono i dati di <code>Artist</code> presi dalla riga in cui
<code>artist_id</code> della tabella <code>Track</code> corrisponde a
<code>id</code> della tabella <code>Artist</code>.</p>
<p>L’output sarebbe:</p>
<pre><code>My Way|15|Frank Sinatra|blue
New York|25|Frank Sinatra|blue</code></pre>
<p>Può sembrare un po’ macchinoso, e l’istinto potrebbe dirti che
sarebbe più veloce tenere i dati in una sola tabella, ma in realtà il
limite alle prestazioni di un database è la quantità di dati da
scansionare quando si recuperano i risultati di una query. I dettagli
sono molto complessi, ma gli interi sono molto più piccoli delle
stringhe (soprattutto Unicode) e molto più veloci da spostare e
confrontare.</p>
<h2 id="diagrammi-dei-modelli-dei-dati">Diagrammi dei modelli dei
dati</h2>
<p> Il progetto di database con <code>Track</code> e <code>Artist</code>
è semplice, con due sole tabelle e una sola relazione uno-a-molti, ma
questi modelli dei dati possono complicarsi in fretta, e si capiscono
meglio se ne facciamo una rappresentazione grafica.</p>
<figure>
<img src="../images/one-to-many-verbose.png" alt="Un modello dei dati uno-a-molti in forma estesa\label{figvrbo2m}" style="height: 1.5in;"/>
<figcaption>
Un modello dei dati uno-a-molti in forma estesa
</figcaption>
</figure>
<p> Esistono molte rappresentazioni grafiche dei modelli dei dati; noi
useremo uno degli approcci “classici”, quello dei <em>diagrammi a zampa
di gallina</em> (crow’s foot diagrams), come si vede nella Figura . Ogni
tabella è rappresentata da un riquadro con il nome della tabella e le
sue colonne. Poi, dove c’è una relazione tra due tabelle, si traccia una
linea che collega le tabelle, con un simbolo a ciascuna estremità della
linea che indica la natura della relazione.</p>
<p><a href="https://en.wikipedia.org/wiki/Entity-relationship_model"
class="uri">https://en.wikipedia.org/wiki/Entity-relationship_model</a></p>
<p>In questo caso a ogni artista possono essere associati “molti” brani.
Per questo l’estremità dei brani è disegnata con la zampa di gallina
aperta, a indicare che è l’estremità “molti”. L’estremità dell’artista è
disegnata con una linea verticale, che indica “uno”. In generale ci
saranno “molti” artisti, ma l’aspetto importante è che per ogni artista
ci saranno molti brani. E ognuno di quegli artisti può essere associato
a più brani.</p>
<p> Noterai che la colonna che contiene la <em>chiave esterna</em>, come
<code>artist_id</code>, si trova all’estremità “molti”, mentre la
<em>chiave primaria</em> si trova all’estremità “uno”.</p>
<p>Poiché lo schema con cui si collocano le chiavi esterne e primarie è
così regolare e segue le estremità “molti” e “uno” delle linee, nel
diagramma del modello dei dati non includiamo mai né le colonne della
chiave primaria né quelle della chiave esterna, come si vede nel secondo
diagramma, nella Figura . Queste colonne sono considerate un “dettaglio
di implementazione” che serve a rappresentare la natura della relazione,
e non una parte essenziale dei dati che si modellano.</p>
<figure>
<img src="../images/one-to-many.png" alt="Un modello dei dati uno-a-molti in forma sintetica\label{figo2m}" style="height: 1.5in;"/>
<figcaption>
Un modello dei dati uno-a-molti in forma sintetica
</figcaption>
</figure>
<h2 id="creare-automaticamente-le-chiavi-primarie">Creare
automaticamente le chiavi primarie</h2>
<p> Nell’esempio precedente abbiamo assegnato a Frank, in modo
arbitrario, la chiave primaria <code>42</code>. Ma quando inseriamo
milioni di righe è comodo che sia il database a generare automaticamente
i valori della colonna <code>id</code>. Lo otteniamo dichiarando la
colonna <code>id</code> come <code>PRIMARY KEY</code> e omettendo il
valore di <code>id</code> quando inseriamo la riga:</p>
<pre class="sql"><code>DROP TABLE IF EXISTS Artist;
CREATE TABLE Artist (id INTEGER PRIMARY KEY,
    name TEXT, eyes TEXT);
INSERT INTO Artist (name, eyes)
   VALUES (&#39;Frank Sinatra&#39;, &#39;blue&#39;);</code></pre>
<p>Ora abbiamo chiesto al database di assegnare automaticamente per noi
un valore univoco alla riga di Frank Sinatra. Ma poi dobbiamo poter
chiedere al database il valore di <code>id</code> della riga appena
inserita. Una possibilità è usare un’istruzione <code>SELECT</code> per
recuperare i dati da una funzione built-in di SQLite chiamata
<code>last_insert_rowid()</code>.</p>
<pre><code>sqlite&gt; DROP TABLE IF EXISTS Artist;
sqlite&gt; CREATE TABLE Artist (id INTEGER PRIMARY KEY,
   ...&gt;     name TEXT, eyes TEXT);
sqlite&gt; INSERT INTO Artist (name, eyes)
   ...&gt;    VALUES (&#39;Frank Sinatra&#39;, &#39;blue&#39;);
sqlite&gt; select last_insert_rowid();
1
sqlite&gt; SELECT * FROM Artist;
1|Frank Sinatra|blue
sqlite&gt;</code></pre>
<p>Una volta noto l’<code>id</code> della riga di
<code>'Frank Sinatra'</code>, possiamo usarlo quando inseriamo con
<code>INSERT</code> i brani nella tabella <code>Track</code>. Come
strategia generale, aggiungiamo queste colonne <code>id</code> a ogni
tabella che creiamo:</p>
<pre><code>sqlite&gt; DROP TABLE IF EXISTS Track;
sqlite&gt; CREATE TABLE Track (id INTEGER PRIMARY KEY,
   ...&gt;     title TEXT, plays INTEGER, artist_id INTEGER);</code></pre>
<p>Nota che il valore di <code>artist_id</code> è quello assegnato
automaticamente alla nuova riga della tabella <code>Artist</code>, e
che, anche se abbiamo aggiunto una <code>INTEGER PRIMARY KEY</code> alla
tabella <code>Track</code>, non abbiamo incluso <code>id</code>
nell’elenco dei campi delle istruzioni <code>INSERT</code> nella tabella
<code>Track</code>. Anche qui, in questo modo diciamo al database di
scegliere per noi un valore univoco per la colonna <code>id</code>.</p>
<pre><code>sqlite&gt; INSERT INTO Track (title, plays, artist_id)
   ...&gt;     VALUES (&#39;My Way&#39;, 15, 1);
sqlite&gt; select last_insert_rowid();
1
sqlite&gt; INSERT INTO Track (title, plays, artist_id)
   ...&gt;     VALUES (&#39;New York&#39;, 25, 1);
sqlite&gt; select last_insert_rowid();
2
sqlite&gt;</code></pre>
<p> Puoi chiamare <code>SELECT last_insert_rowid();</code> dopo ogni
inserimento per recuperare il valore che il database ha assegnato
all’<code>id</code> di ogni riga appena creata. Più avanti, quando
scriveremo il codice in Python, potremo chiedere il valore di
<code>id</code> nel codice e memorizzarlo in una variabile da usare in
seguito.</p>
<h2 id="chiavi-logiche-per-ricerche-veloci">Chiavi logiche per ricerche
veloci</h2>
<p> Supponiamo di avere una tabella piena di artisti e una tabella piena
di brani, ognuno con un collegamento tramite chiave esterna a una riga
della tabella degli artisti, e di voler elencare tutti i brani cantati
da <code>'Frank Sinatra'</code>, in questo modo:</p>
<pre><code>SELECT title, plays, name, eyes
FROM Track JOIN Artist
ON Track.artist_id = Artist.id
WHERE Artist.name = &#39;Frank Sinatra&#39;;</code></pre>
<p>Poiché abbiamo due tabelle e una chiave esterna tra le due, i dati
sono ben modellati; ma se nella tabella <code>Artist</code> avremo
milioni di record e faremo molte ricerche per nome dell’artista, ci
converrà dare al database un suggerimento sull’uso che intendiamo fare
della colonna <code>name</code>.</p>
<p> Lo facciamo aggiungendo un “indice” a una colonna di testo che
intendiamo usare nelle clausole <code>WHERE</code>:</p>
<pre><code>CREATE INDEX artist_name ON Artist(name);</code></pre>
<p>Quando sa che su una colonna di una tabella serve un indice, il
database memorizza informazioni aggiuntive che permettono di cercare più
rapidamente una riga usando il campo indicizzato (in questo esempio
<code>name</code>). Una volta chiesta la creazione dell’indice, nel
codice SQL non serve niente di speciale per accedere alla tabella. Il
database tiene aggiornato l’indice man mano che i dati vengono inseriti,
eliminati e aggiornati, e lo usa automaticamente se migliora le
prestazioni di una query.</p>
<p>Queste colonne di testo, usate per trovare le righe in base a qualche
informazione del “mondo reale” come il nome di un artista, si chiamano
<em>chiavi logiche</em>.</p>
<h2 id="aggiungere-vincoli-al-database">Aggiungere vincoli al
database</h2>
<p> Possiamo usare un indice anche per imporre un vincolo (cioè delle
regole) alle operazioni sul database. Il vincolo più comune è il
<em>vincolo di unicità</em>, che richiede che tutti i valori di una
colonna siano univoci. Possiamo aggiungere all’istruzione
<code>CREATE INDEX</code> la parola chiave facoltativa
<code>UNIQUE</code>, per chiedere al database di far rispettare il
vincolo alle istruzioni SQL. Possiamo eliminare e ricreare l’indice
<code>artist_name</code> con un vincolo <code>UNIQUE</code> in questo
modo.</p>
<pre><code>DROP INDEX artist_name;
CREATE UNIQUE INDEX artist_name ON Artist(name);</code></pre>
<p>Se proviamo a inserire <code>'Frank Sinatra'</code> una seconda
volta, l’operazione fallirà con un errore.</p>
<pre><code>sqlite&gt; SELECT * FROM Artist;
1|Frank Sinatra|blue
sqlite&gt; INSERT INTO Artist (name, eyes)
   ...&gt;    VALUES (&#39;Frank Sinatra&#39;, &#39;blue&#39;);
Runtime error: UNIQUE constraint failed: Artist.name (19)
sqlite&gt;</code></pre>
<p> Possiamo dire al database di ignorare gli errori di chiave duplicata
aggiungendo le parole chiave <code>OR IGNORE</code> all’istruzione
<code>INSERT</code>, in questo modo:</p>
<pre><code>sqlite&gt; INSERT OR IGNORE INTO Artist (name, eyes)
   ...&gt;     VALUES (&#39;Frank Sinatra&#39;, &#39;blue&#39;);
sqlite&gt; SELECT id FROM Artist WHERE name=&#39;Frank Sinatra&#39;;
1
sqlite&gt;</code></pre>
<p>Combinando un <code>INSERT OR IGNORE</code> e un <code>SELECT</code>
possiamo inserire un nuovo record se il nome non c’è ancora e, che il
record ci fosse già o no, recuperare la chiave <em>primaria</em> del
record.</p>
<pre><code>sqlite&gt; INSERT OR IGNORE INTO Artist (name, eyes)
   ...&gt;      VALUES (&#39;Elvis&#39;, &#39;blue&#39;);
sqlite&gt; SELECT id FROM Artist WHERE name=&#39;Elvis&#39;;
2
sqlite&gt; SELECT * FROM Artist;
1|Frank Sinatra|blue
2|Elvis|blue
sqlite&gt;</code></pre>
<p>Poiché non abbiamo aggiunto un vincolo di unicità alla colonna del
colore degli occhi, non è un problema avere più valori
<code>'blue'</code> nella colonna <code>eyes</code>.</p>
<figure>
<img src="../images/tracks-albums-artists.png" alt="Brani, album e artisti\label{figtaa}" style="height: 1.5in;"/>
<figcaption>
Brani, album e artisti
</figcaption>
</figure>
<h2 id="unapplicazione-di-esempio-con-più-tabelle">Un’applicazione di
esempio con più tabelle</h2>
<p>Un’applicazione di esempio chiamata <code>tracks_csv.py</code> mostra
come combinare queste idee per analizzare dati testuali e caricarli in
più tabelle, con un modello dei dati corretto e con collegamenti
relazionali tra le tabelle.</p>
<p>L’applicazione legge e analizza un file di valori separati da
virgole, <code>tracks.csv</code>, ricavato da un’esportazione della
libreria di iTunes del Dr. Chuck.</p>
<pre><code>Another One Bites The Dust,Queen,Greatest Hits,55,100,217103
Asche Zu Asche,Rammstein,Herzeleid,79,100,231810
Beauty School Dropout,Various,Grease,48,100,239960
Black Dog,Led Zeppelin,IV,109,100,296620
...</code></pre>
<p>Le colonne di questo file sono: titolo, artista, album, numero di
riproduzioni, valutazione (0-100) e durata in millisecondi.</p>
<p>Il modello dei dati è mostrato nella Figura ed è descritto in SQL
così:</p>
<pre class="sql"><code>DROP TABLE IF EXISTS Artist;
DROP TABLE IF EXISTS Album;
DROP TABLE IF EXISTS Track;

CREATE TABLE Artist (
    id INTEGER PRIMARY KEY,
    name TEXT UNIQUE
);

CREATE TABLE Album (
    id INTEGER PRIMARY KEY,
    artist_id  INTEGER,
    title TEXT UNIQUE
);

CREATE TABLE Track (
    id INTEGER PRIMARY KEY,
    title TEXT UNIQUE,
    album_id INTEGER,
    len INTEGER, rating INTEGER, count INTEGER
);</code></pre>
<p>Aggiungiamo la parola chiave <code>UNIQUE</code> alle colonne
<code>TEXT</code> su cui vogliamo un vincolo di unicità, che useremo
nelle istruzioni <code>INSERT OR IGNORE</code>. Questa forma è più
concisa di istruzioni <code>CREATE INDEX</code> separate, ma ha lo
stesso effetto.</p>
<p>Con queste tabelle pronte, scriviamo il codice seguente,
<code>tracks_csv.py</code>, per analizzare i dati e inserirli nelle
tabelle:</p>
<pre class="python"><code>import sqlite3

conn = sqlite3.connect(&#39;trackdb.sqlite&#39;)
cur = conn.cursor()

handle = open(&#39;tracks.csv&#39;)

for line in handle:
    line = line.strip();
    pieces = line.split(&#39;,&#39;)
    if len(pieces) != 6 : continue

    name = pieces[0]
    artist = pieces[1]
    album = pieces[2]
    count = pieces[3]
    rating = pieces[4]
    length = pieces[5]

    print(name, artist, album, count, rating, length)

    cur.execute(&#39;&#39;&#39;INSERT OR IGNORE INTO Artist (name)
        VALUES ( ? )&#39;&#39;&#39;, ( artist, ) )
    cur.execute(&#39;SELECT id FROM Artist WHERE name = ? &#39;, (artist, ))
    artist_id = cur.fetchone()[0]

    cur.execute(&#39;&#39;&#39;INSERT OR IGNORE INTO Album (title, artist_id)
        VALUES ( ?, ? )&#39;&#39;&#39;, ( album, artist_id ) )
    cur.execute(&#39;SELECT id FROM Album WHERE title = ? &#39;, (album, ))
    album_id = cur.fetchone()[0]

    cur.execute(&#39;&#39;&#39;INSERT OR REPLACE INTO Track
        (title, album_id, len, rating, count)
        VALUES ( ?, ?, ?, ?, ? )&#39;&#39;&#39;,
        ( name, album_id, length, rating, count ) )

    conn.commit()</code></pre>
<p>Puoi vedere che ripetiamo lo schema di un
<code>INSERT OR IGNORE</code> seguito da un <code>SELECT</code> per
ottenere gli <code>artist_id</code> e <code>album_id</code> giusti da
usare nelle istruzioni <code>INSERT</code> successive. Partiamo da
<code>Artist</code> perché ci serve <code>artist_id</code> per inserire
in <code>Album</code>, e ci serve <code>album_id</code> per inserire in
<code>Track</code>.</p>
<p> Se guardiamo la tabella <code>Album</code>, vediamo che le voci sono
state aggiunte e hanno ricevuto una chiave <em>primaria</em> quando
serviva, man mano che i dati venivano analizzati. Vediamo anche la
<em>chiave esterna</em> che, per ogni riga di <code>Album</code>, punta
a una riga della tabella <code>Artist</code>.</p>
<pre><code>sqlite&gt; .mode column
sqlite&gt; SELECT * FROM Album LIMIT 5;
id  artist_id  title
--  ---------  -----------------
1   1          Greatest Hits
2   2          Herzeleid
3   3          Grease
4   4          IV
5   5          The Wall [Disc 2]</code></pre>
<p> Possiamo ricostruire tutti i dati di <code>Track</code> seguendo
tutte le relazioni con le clausole <code>JOIN / ON</code>. Nell’output
qui sotto puoi vedere, in ogni riga, le due estremità di ciascuno dei
due collegamenti relazionali:</p>
<pre><code>sqlite&gt; .mode line
sqlite&gt; SELECT * FROM Track
   ...&gt; JOIN Album ON Track.album_id = Album.id
   ...&gt; JOIN Artist ON Album.artist_id = Artist.id
   ...&gt; LIMIT 2;
       id = 1
    title = Another One Bites The Dust
 album_id = 1
      len = 217103
   rating = 100
    count = 55
       id = 1
artist_id = 1
    title = Greatest Hits
       id = 1
     name = Queen

       id = 2
    title = Asche Zu Asche
 album_id = 2
      len = 231810
   rating = 100
    count = 79
       id = 2
artist_id = 2
    title = Herzeleid
       id = 2
     name = Rammstein</code></pre>
<p>Questo esempio mostra tre tabelle e due relazioni
<em>uno-a-molti</em> che le collegano. Mostra anche come usare indici e
vincoli di unicità per costruire con un programma le tabelle e le loro
relazioni.</p>
<p><a href="https://en.wikipedia.org/wiki/One-to-many_(data_model)"
class="uri">https://en.wikipedia.org/wiki/One-to-many_(data_model)</a></p>
<p>Nella prossima sezione vedremo le relazioni molti-a-molti nei modelli
dei dati.</p>
<h2 id="relazioni-molti-a-molti-nei-database">Relazioni molti-a-molti
nei database</h2>
<p> Alcune relazioni tra dati non si possono modellare con una semplice
relazione uno-a-molti. Ad esempio, supponiamo di dover costruire il
modello dei dati per un sistema di gestione dei corsi. Ci saranno corsi,
utenti ed elenchi degli iscritti. Un utente può essere nell’elenco degli
iscritti di molti corsi, e un corso avrà molti utenti nel suo
elenco.</p>
<p>È piuttosto semplice <em>disegnare</em> una relazione molti-a-molti,
come si vede nella Figura . Basta disegnare due tabelle e collegarle con
una linea che ha il simbolo “molti” a entrambe le estremità. Il problema
è come <em>implementare</em> la relazione usando chiavi primarie e
chiavi esterne.</p>
<p>Prima di esaminare come implementare le relazioni molti-a-molti,
vediamo se riusciamo a mettere insieme qualcosa alla buona estendendo
una relazione uno-a-molti.</p>
<figure>
<img src="../images/many-to-many.png" alt="Una relazione molti-a-molti\label{figm2m}" style="height: 1.5in;"/>
<figcaption>
Una relazione molti-a-molti
</figcaption>
</figure>
<p>Se SQL supportasse il concetto di array, potremmo provare a definire
qualcosa del genere:</p>
<pre class="sql"><code>CREATE TABLE Course (
    id     INTEGER PRIMARY KEY,
    title  TEXT UNIQUE
    student_ids ARRAY OF INTEGER;
);</code></pre>
<p>Purtroppo, per quanto l’idea sia allettante, SQL non supporta gli
array.<a href="#fn3" class="footnote-ref" id="fnref3"
role="doc-noteref"><sup>3</sup></a></p>
<p>Oppure potremmo semplicemente creare una stringa lunga e concatenarvi
tutte le chiavi primarie di <code>User</code>, separate da virgole.</p>
<pre class="sql"><code>CREATE TABLE Course (
    id     INTEGER PRIMARY KEY,
    title  TEXT UNIQUE
    student_ids ARRAY OF INTEGER;
);

INSERT INTO Course (title, student_ids)
VALUES( &#39;si311&#39;, &#39;1,3,4,5,6,9,14&#39;);</code></pre>
<p>Questa soluzione sarebbe molto inefficiente: man mano che l’elenco
degli iscritti cresce e il numero dei corsi aumenta, diventa piuttosto
costoso capire quali corsi hanno lo studente <code>14</code> tra gli
iscritti.</p>
<figure>
<img src="../images/many-to-many-verbose.png" alt="Una tabella di collegamento molti-a-molti\label{figm2mvrb}" style="height: 1.5in;"/>
<figcaption>
Una tabella di collegamento molti-a-molti
</figcaption>
</figure>
<p> Invece di usare uno di questi due approcci, modelliamo una relazione
molti-a-molti con una tabella aggiuntiva, che chiamiamo <em>tabella di
giunzione</em> (junction table), <em>tabella intermedia</em> (through
table), <em>tabella di collegamento</em> (connector table) o <em>tabella
di join</em> (join table), come si vede nella Figura . Lo scopo di
questa tabella è rappresentare il <em>collegamento</em> tra <em>un</em>
corso e <em>uno</em> studente.</p>
<p>In un certo senso la tabella sta tra le tabelle <code>Course</code> e
<code>User</code> e ha una relazione uno-a-molti con entrambe. Usando
una tabella intermedia scomponiamo una relazione molti-a-molti in due
relazioni uno-a-molti. I database sono molto bravi a modellare ed
elaborare le relazioni uno-a-molti.</p>
<p>Una tabella <code>Member</code> di esempio sarebbe fatta così:</p>
<pre class="sql"><code>CREATE TABLE User (
    id     INTEGER PRIMARY KEY,
    name   TEXT UNIQUE
);

CREATE TABLE Course (
    id     INTEGER PRIMARY KEY,
    title  TEXT UNIQUE
);

CREATE TABLE Member (
    user_id     INTEGER,
    course_id   INTEGER,
    PRIMARY KEY (user_id, course_id)
);</code></pre>
<p>Secondo la nostra convenzione sui nomi, <code>Member.user_id</code> e
<code>Member.course_id</code> sono chiavi esterne che puntano alle righe
corrispondenti delle tabelle <code>User</code> e <code>Course</code>.
Ogni voce della tabella <code>Member</code> collega una riga della
tabella <code>User</code> a una riga della tabella <code>Course</code>
<em>passando per</em> la tabella <code>Member</code>.</p>
<p> Indichiamo che la <em>combinazione</em> di <code>course_id</code> e
<code>user_id</code> è la <code>PRIMARY KEY</code> della tabella
<code>Member</code>, e così creiamo anche un vincolo di unicità per la
combinazione <code>course_id</code> / <code>user_id</code>.</p>
<p>Ora supponiamo di dover inserire vari studenti negli elenchi degli
iscritti di vari corsi. Immaginiamo che i dati ci arrivino in un file in
formato JSON con record come questi:</p>
<pre><code>[
  [ &quot;Charley&quot;, &quot;si110&quot;],
  [ &quot;Mea&quot;, &quot;si110&quot;],
  [ &quot;Hattie&quot;, &quot;si110&quot;],
  [ &quot;Keziah&quot;, &quot;si110&quot;],
  [ &quot;Rosa&quot;, &quot;si106&quot;],
  [ &quot;Mea&quot;, &quot;si106&quot;],
  [ &quot;Mairin&quot;, &quot;si106&quot;],
  [ &quot;Zendel&quot;, &quot;si106&quot;],
  [ &quot;Honie&quot;, &quot;si106&quot;],
  [ &quot;Rosa&quot;, &quot;si106&quot;],
...
]</code></pre>
<p> Potremmo scrivere il codice seguente, <code>roster.py</code>, per
leggere il file JSON e inserire nel database gli iscritti di ogni
corso:</p>
<pre class="python"><code>import json
import sqlite3

conn = sqlite3.connect(&#39;rosterdb.sqlite&#39;)
cur = conn.cursor()

str_data = open(&#39;roster_data_sample.json&#39;).read()
json_data = json.loads(str_data)

for entry in json_data:

    name = entry[0]
    title = entry[1]

    print((name, title))

    cur.execute(&#39;&#39;&#39;INSERT OR IGNORE INTO User (name)
        VALUES ( ? )&#39;&#39;&#39;, ( name, ) )
    cur.execute(&#39;SELECT id FROM User WHERE name = ? &#39;, (name, ))
    user_id = cur.fetchone()[0]

    cur.execute(&#39;&#39;&#39;INSERT OR IGNORE INTO Course (title)
        VALUES ( ? )&#39;&#39;&#39;, ( title, ) )
    cur.execute(&#39;SELECT id FROM Course WHERE title = ? &#39;, (title, ))
    course_id = cur.fetchone()[0]

    cur.execute(&#39;&#39;&#39;INSERT OR REPLACE INTO Member
        (user_id, course_id) VALUES ( ?, ? )&#39;&#39;&#39;,
        ( user_id, course_id ) )

    conn.commit()</code></pre>
<p>Come in un esempio precedente, per prima cosa ci assicuriamo di avere
una voce nella tabella <code>User</code> e di conoscerne la chiave
primaria, e di avere una voce nella tabella <code>Course</code> e di
conoscerne la chiave primaria. Usiamo lo schema
<code>INSERT OR IGNORE</code> e <code>SELECT</code>, così il codice
funziona sia che il record si trovi già nella tabella sia che non ci
sia.</p>
<p>Nella tabella <code>Member</code> ci limitiamo a inserire i due
interi in una riga nuova o in una già esistente, a seconda del vincolo,
così non ci ritroviamo con voci duplicate nella tabella
<code>Member</code> per una data combinazione <code>user_id</code> /
<code>course_id</code>.</p>
<p> Per ricostruire i dati delle tre tabelle, usiamo ancora una volta
<code>JOIN</code> / <code>ON</code> per costruire una query
<code>SELECT</code>:</p>
<pre><code>sqlite&gt; SELECT * FROM Course
   ...&gt; JOIN Member ON Course.id = Member.course_id
   ...&gt; JOIN User ON Member.user_id = User.id;
+----+-------+---------+-----------+----+---------+
| id | title | user_id | course_id | id |  name   |
+----+-------+---------+-----------+----+---------+
| 1  | si110 | 1       | 1         | 1  | Charley |
| 1  | si110 | 2       | 1         | 2  | Mea     |
| 1  | si110 | 3       | 1         | 3  | Hattie  |
| 1  | si110 | 4       | 1         | 4  | Lyena   |
| 1  | si110 | 5       | 1         | 5  | Keziah  |
| 1  | si110 | 6       | 1         | 6  | Ellyce  |
| 1  | si110 | 7       | 1         | 7  | Thalia  |
| 1  | si110 | 8       | 1         | 8  | Meabh   |
| 2  | si106 | 2       | 2         | 2  | Mea     |
| 2  | si106 | 10      | 2         | 10 | Mairin  |
| 2  | si106 | 11      | 2         | 11 | Zendel  |
| 2  | si106 | 12      | 2         | 12 | Honie   |
| 2  | si106 | 9       | 2         | 9  | Rosa    |
+----+-------+---------+-----------+----+---------+
sqlite&gt;</code></pre>
<p>Puoi vedere le tre tabelle da sinistra a destra (<code>Course</code>,
<code>Member</code> e <code>User</code>) e, in ogni riga dell’output, i
collegamenti tra chiavi primarie e chiavi esterne.</p>
<h2 id="modellare-i-dati-nel-collegamento-molti-a-molti">Modellare i
dati nel collegamento molti-a-molti</h2>
<p>Abbiamo presentato la “tabella di join” come una tabella con due
chiavi esterne che collegano le righe di due tabelle, ma questa è la
forma più semplice di tabella di join. Capita spesso di voler aggiungere
dei dati al collegamento stesso.</p>
<p>Continuando con l’esempio di utenti, corsi ed elenchi degli iscritti
per modellare un semplice sistema di gestione dell’apprendimento,
dovremo anche conoscere il <em>ruolo</em> assegnato a ogni utente in
ogni corso.</p>
<p>Se proviamo prima a risolvere il problema aggiungendo alla tabella
<code>User</code> un flag “docente”, scopriremo che non funziona, perché
un utente può essere docente in un corso e studente in un altro. Se
aggiungiamo un <code>instructor_id</code> alla tabella
<code>Course</code>, non funzionerà, perché un corso può avere più
docenti. E non c’è trucco uno-a-molti che regga quando il numero dei
ruoli crescerà, fino a comprendere ruoli come assistente alla didattica
o genitore.</p>
<p>Ma se aggiungiamo semplicemente una colonna <code>role</code> alla
tabella <code>Member</code>, possiamo rappresentare un’ampia gamma di
ruoli, di combinazioni di ruoli e così via.</p>
<p>Modifichiamo la tabella <code>Member</code> così:</p>
<pre class="sql"><code>DROP TABLE Member;

CREATE TABLE Member (
    user_id     INTEGER,
    course_id   INTEGER,
    role        INTEGER,
    PRIMARY KEY (user_id, course_id)
);</code></pre>
<p>Per semplicità, stabiliamo che <code>0</code> in <code>role</code>
significa “studente” e <code>1</code> significa “docente”. Supponiamo
che i dati JSON siano arricchiti con il ruolo, in questo modo:</p>
<pre><code>[
  [ &quot;Charley&quot;, &quot;si110&quot;, 1],
  [ &quot;Mea&quot;, &quot;si110&quot;, 0],
  [ &quot;Hattie&quot;, &quot;si110&quot;, 0],
  [ &quot;Keziah&quot;, &quot;si110&quot;, 0],
  [ &quot;Rosa&quot;, &quot;si106&quot;, 0],
  [ &quot;Mea&quot;, &quot;si106&quot;, 1],
  [ &quot;Mairin&quot;, &quot;si106&quot;, 0],
  [ &quot;Zendel&quot;, &quot;si106&quot;, 0],
  [ &quot;Honie&quot;, &quot;si106&quot;, 0],
  [ &quot;Rosa&quot;, &quot;si106&quot;, 0],
...
]</code></pre>
<p>Potremmo modificare il programma <code>roster.py</code> visto sopra
per includere il ruolo, in questo modo:</p>
<pre class="python"><code>for entry in json_data:

    name = entry[0]
    title = entry[1]
    role = entry[2]

    ...

    cur.execute(&#39;&#39;&#39;INSERT OR REPLACE INTO Member
        (user_id, course_id, role) VALUES ( ?, ?, ? )&#39;&#39;&#39;,
        ( user_id, course_id, role ) )</code></pre>
<p>In un sistema reale probabilmente costruiremmo una tabella
<code>Role</code> e faremmo della colonna <code>role</code> di
<code>Member</code> una chiave esterna, <code>role_id</code>, verso la
tabella <code>Role</code>, in questo modo:</p>
<pre class="sql"><code>DROP TABLE Member;

CREATE TABLE Member (
    user_id     INTEGER,
    course_id   INTEGER,
    role_id     INTEGER,
    PRIMARY KEY (user_id, course_id, role_id)
);

CREATE TABLE Role (
    id          INTEGER PRIMARY KEY,
    name        TEXT UNIQUE
);

INSERT INTO Role (id, name) VALUES (0, &#39;Student&#39;);
INSERT INTO Role (id, name) VALUES (1, &#39;Instructor&#39;);</code></pre>
<p>Nota che, poiché abbiamo dichiarato la colonna <code>id</code> della
tabella <code>Role</code> come <code>PRIMARY KEY</code>,
<em>potremmo</em> ometterla nell’istruzione <code>INSERT</code>. Ma
possiamo anche scegliere noi il valore di <code>id</code>, purché non
sia già presente nella colonna <code>id</code> e non violi il vincolo
<code>UNIQUE</code> implicito sulle chiavi primarie.</p>
<h2 id="riepilogo">Riepilogo</h2>
<p>Questo capitolo ha toccato molti argomenti per darti una panoramica
sulle basi dell’uso di un database in Python. Scrivere il codice che usa
un database per memorizzare i dati è più complicato che usare i
dizionari Python o i semplici file, quindi ci sono pochi motivi per
usare un database, a meno che l’applicazione non abbia davvero bisogno
delle sue capacità. Le situazioni in cui un database può essere molto
utile sono: (1) quando l’applicazione deve fare molti piccoli
aggiornamenti sparsi all’interno di un grande insieme di dati, (2)
quando i dati sono così tanti che non entrano in un dizionario e devi
cercare informazioni ripetutamente, o (3) quando hai un processo di
lunga durata che vuoi poter fermare e riavviare, conservando i dati da
un’esecuzione all’altra.</p>
<p>Puoi costruire un semplice database con una sola tabella per
soddisfare le esigenze di molte applicazioni, ma la maggior parte dei
problemi richiede più tabelle e collegamenti/relazioni tra righe di
tabelle diverse. Quando cominci a creare collegamenti tra le tabelle, è
importante progettare con attenzione e seguire le regole della
normalizzazione del database per sfruttare al meglio le sue capacità.
Poiché il motivo principale per usare un database è che hai una grande
quantità di dati da gestire, è importante modellare i dati in modo
efficiente, perché i programmi siano il più veloci possibile.</p>
<h2 id="debug">Debug</h2>
<p>Quando sviluppi un programma Python che si connette a un database
SQLite, uno schema comune è eseguire il programma Python e controllare i
risultati con il Database Browser for SQLite. Il browser ti permette di
verificare rapidamente se il programma funziona correttamente.</p>
<p>Devi fare attenzione, perché SQLite fa in modo che due programmi non
modifichino gli stessi dati allo stesso tempo. Ad esempio, se apri un
database nel browser, fai una modifica e non hai ancora premuto il
pulsante “salva” del browser, il browser “blocca” il file di database e
impedisce a qualsiasi altro programma di accedervi. In particolare, il
tuo programma Python non potrà accedere al file se è bloccato.</p>
<p>Quindi una soluzione è assicurarti di chiudere il browser di
database, oppure di usare il menu <em>File</em> per chiudere il database
nel browser, prima di provare ad accedere al database da Python: così
eviti che il codice Python fallisca perché il database è bloccato.</p>
<h2 id="glossario">Glossario</h2>
<dl>
<dt><strong>Attributo</strong></dt>
<dd>
Uno dei valori all’interno di una tupla. Più comunemente chiamato
“colonna” o “campo”.
</dd>
<dt><strong>Browser di database</strong></dt>
<dd>
Un software che ti permette di connetterti direttamente a un database e
di manipolarlo senza scrivere un programma.
</dd>
<dt><strong>Chiave esterna</strong></dt>
<dd>
Una chiave numerica che punta alla chiave primaria di una riga in
un’altra tabella. Le chiavi esterne stabiliscono relazioni tra righe
memorizzate in tabelle diverse.
</dd>
<dt><strong>Chiave logica</strong></dt>
<dd>
Una chiave che il “mondo esterno” usa per cercare una determinata riga.
Ad esempio, in una tabella di account utente, l’indirizzo email di una
persona potrebbe essere un buon candidato come chiave logica per i dati
dell’utente.
</dd>
<dt><strong>Chiave primaria</strong></dt>
<dd>
Una chiave numerica assegnata a ogni riga, usata per fare riferimento a
una riga di una tabella da un’altra tabella. Spesso il database è
configurato per assegnare automaticamente le chiavi primarie man mano
che le righe vengono inserite.
</dd>
<dt><strong>Cursore</strong></dt>
<dd>
Un cursore ti permette di eseguire comandi SQL in un database e di
recuperare dati dal database. Un cursore è simile a un socket o a un
handle del file, rispettivamente per le connessioni di rete e per i
file.
</dd>
<dt><strong>Indice</strong></dt>
<dd>
I dati aggiuntivi che il software di database mantiene man mano che le
righe vengono inserite in una tabella, per rendere le ricerche molto
veloci.
</dd>
<dt><strong>Normalizzazione</strong></dt>
<dd>
La progettazione di un modello dei dati in cui nessun dato è replicato.
Memorizziamo ogni dato in un solo punto del database e vi facciamo
riferimento altrove con una chiave esterna.
</dd>
<dt><strong>Relazione</strong></dt>
<dd>
Un’area all’interno di un database che contiene tuple e attributi. Di
solito chiamata “tabella”.
</dd>
<dt><strong>Tupla</strong></dt>
<dd>
Una singola voce di una tabella di database, formata da un insieme di
attributi. Di solito chiamata “riga”.
</dd>
<dt><strong>Vincolo</strong></dt>
<dd>
Una regola che chiediamo al database di far rispettare su un campo o su
una riga di una tabella. Un vincolo comune è richiedere che in un campo
non ci possano essere valori duplicati (cioè che tutti i valori siano
univoci).
</dd>
</dl>
<section id="footnotes" class="footnotes footnotes-end-of-document"
role="doc-endnotes">
<hr />
<ol>
<li id="fn1"><p>In realtà SQLite permette una certa flessibilità nel
tipo di dati memorizzati in una colonna, ma in questo capitolo saremo
rigorosi con i tipi di dati, così i concetti valgono allo stesso modo
per altri sistemi di database come MySQL.<a href="#fnref1"
class="footnote-back" role="doc-backlink">↩︎</a></p></li>
<li id="fn2"><p>Sì, c’è una discrepanza tra il termine “CRUD” e le
iniziali delle quattro istruzioni SQL che implementano il “CRUD”. Una
possibile spiegazione è sostenere che “CRUD” sia il “concetto” e SQL
l’implementazione. Un’altra possibile spiegazione è che “CRUD” è più
divertente da pronunciare di “ISUD”.<a href="#fnref2"
class="footnote-back" role="doc-backlink">↩︎</a></p></li>
<li id="fn3"><p>Alcuni dialetti SQL supportano gli array, ma gli array
non scalano bene. I database NoSQL usano gli array e la replica dei
dati, ma a scapito dell’integrità del database. NoSQL è una storia per
un altro corso: https://www.pg4e.com/.<a href="#fnref3"
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
