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
  <title>Visualizzare i dati</title>
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
<h1 id="visualizzare-i-dati">Visualizzare i dati</h1>
<p>Finora abbiamo studiato il linguaggio Python e poi abbiamo imparato a
usare Python, la rete e i database per manipolare i dati.</p>
<p>In questo capitolo diamo un’occhiata a tre applicazioni complete che
mettono insieme tutti questi elementi per gestire e visualizzare i dati.
Potresti usarle come codice di esempio da cui partire per risolvere un
problema reale.</p>
<p>Ogni applicazione è un file ZIP che puoi scaricare, estrarre sul
computer ed eseguire.</p>
<h2
id="costruire-una-mappa-openstreetmap-con-dati-geocodificati">Costruire
una mappa OpenStreetMap con dati geocodificati</h2>
<p> </p>
<p>In questo progetto usiamo l’API di <em>geocodifica</em> (geocoding)
di OpenStreetMap per ripulire alcune località geografiche che gli utenti
hanno inserito come nomi di università, e poi collochiamo i dati su una
vera mappa OpenStreetMap.</p>
<figure>
<img src="../images/openstreet-map.png" alt="Una mappa OpenStreetMap" />
<figcaption aria-hidden="true">Una mappa OpenStreetMap</figcaption>
</figure>
<p>Per cominciare, scarica l’applicazione da:</p>
<p><a
href="http://www.py4e.com/code3/opengeo.zip">www.py4e.com/code3/opengeo.zip</a></p>
<p>Il primo problema da risolvere è che queste API di geocodifica hanno
un <em>limite di frequenza delle richieste</em> (rate limit), fissato a
un certo numero di richieste al giorno. Se hai molti dati, potresti
dover fermare e riavviare più volte la ricerca. Per questo dividiamo il
problema in due fasi.</p>
<p>Nella prima fase prendiamo i dati di input del “sondaggio”, nel file
<code>where.data</code>, li leggiamo una riga alla volta, recuperiamo da
OpenStreetMap le informazioni geocodificate e le memorizziamo in un
database, <code>opengeo.sqlite</code>. Per ogni località inserita da un
utente, prima di usare l’API di geocodifica controlliamo semplicemente
se abbiamo già i dati di quella riga di input. Il database funziona da
“cache” locale dei dati di geocodifica, per essere sicuri di non
chiedere mai a OpenStreetMap due volte gli stessi dati.</p>
<p>Puoi riavviare da zero il processo in qualsiasi momento eliminando il
file <code>opengeo.sqlite</code>.</p>
<p>Esegui il programma <code>geoload.py</code>. Il programma leggerà le
righe di input di <code>where.data</code> e per ognuna controllerà se è
già nel database. Se non abbiamo i dati della località, chiamerà l’API
di geocodifica per recuperarli e memorizzarli nel database.</p>
<p>Ecco un esempio di esecuzione quando nel database ci sono già alcuni
dati:</p>
<pre><code>Found in database AGH University of Science and Technology

Found in database Academy of Fine Arts Warsaw Poland

Found in database American University in Cairo

Found in database Arizona State University

Found in database Athens Information Technology

Retrieving https://py4e-data.dr-chuck.net/
   opengeo?q=BITS+Pilani
Retrieved 794 characters {&quot;type&quot;:&quot;FeatureColl

Retrieving https://py4e-data.dr-chuck.net/
   opengeo?q=Babcock+University
Retrieved 760 characters {&quot;type&quot;:&quot;FeatureColl

Retrieving https://py4e-data.dr-chuck.net/
   opengeo?q=Banaras+Hindu+University
Retrieved 866 characters {&quot;type&quot;:&quot;FeatureColl
...</code></pre>
<p>Le prime cinque località sono già nel database, quindi vengono
saltate. Il programma scorre i dati fino al punto in cui trova località
nuove e comincia a recuperarle.</p>
<p>Il programma <code>geoload.py</code> si può fermare in qualsiasi
momento, e c’è un contatore che puoi usare per limitare il numero di
chiamate all’API di geocodifica a ogni esecuzione. Dato che
<code>where.data</code> contiene solo qualche centinaio di elementi, non
dovresti raggiungere il limite giornaliero delle richieste; ma se avessi
più dati, potrebbero servire diverse esecuzioni in più giorni perché il
database contenga tutti i dati geocodificati dell’input.</p>
<p>Una volta caricati alcuni dati in <code>opengeo.sqlite</code>, puoi
visualizzarli con il programma <code>geodump.py</code>. Il programma
legge il database e scrive il file <code>where.js</code> con la
località, la latitudine e la longitudine, in forma di codice JavaScript
eseguibile.</p>
<p>Ecco un’esecuzione del programma <code>geodump.py</code>:</p>
<pre><code>AGH University of Science and Technology, Czarnowiejska,
Czarna Wieś, Krowodrza, Kraków, Lesser Poland
Voivodeship, 31-126, Poland 50.0657 19.91895

Academy of Fine Arts, Krakowskie Przedmieście,
Northern Śródmieście, Śródmieście, Warsaw, Masovian
Voivodeship, 00-046, Poland 52.239 21.0155
...
260 lines were written to where.js
Open the where.html file in a web browser to view the data.</code></pre>
<p>Il file <code>where.html</code> contiene HTML e JavaScript per
visualizzare una mappa OpenStreetMap. Per sapere cosa visualizzare,
legge i dati più recenti in <code>where.js</code>. Ecco il formato del
file <code>where.js</code>:</p>
<pre class="js"><code>myData = [
[50.0657,19.91895,
&#39;AGH University of Science and Technology, Czarnowiejska,
Czarna Wieś, Krowodrza, Kraków, Lesser Poland
Voivodeship, 31-126, Poland &#39;],
[52.239,21.0155,
&#39;Academy of Fine Arts, Krakowskie Przedmieściee,
Śródmieście Północne, Śródmieście, Warsaw,
Masovian Voivodeship, 00-046, Poland&#39;],
   ...
];</code></pre>
<p>Si tratta di una variabile JavaScript che contiene una lista di
liste. La sintassi delle costanti di tipo lista in JavaScript è molto
simile a quella di Python, quindi dovrebbe esserti familiare.</p>
<p>Per vedere le località ti basta aprire <code>where.html</code> in un
browser. Puoi fare clic su ogni segnaposto della mappa per scoprire la
località che l’API di geocodifica ha restituito per l’input inserito
dall’utente. Se aprendo il file <code>where.html</code> non vedi nessun
dato, ti conviene controllare la console JavaScript (o console per
sviluppatori) del browser.</p>
<h2 id="visualizzare-reti-e-interconnessioni">Visualizzare reti e
interconnessioni</h2>
<p> </p>
<p>In questa applicazione svolgeremo alcune delle funzioni di un motore
di ricerca. Prima scansioneremo con uno spider una piccola parte del web
ed eseguiremo una versione semplificata dell’algoritmo PageRank di
Google per stabilire quali pagine sono più connesse; poi visualizzeremo
il PageRank e la connettività del nostro piccolo angolo di web. Per
produrre l’output visivo useremo la libreria JavaScript di
visualizzazione D3 <a href="http://d3js.org/"
class="uri">http://d3js.org/</a>.</p>
<p>Puoi scaricare ed estrarre questa applicazione da:</p>
<p><a
href="http://www.py4e.com/code3/pagerank.zip">www.py4e.com/code3/pagerank.zip</a></p>
<figure>
<img src="../images/pagerank.png" alt="Una classificazione delle pagine" style="height: 3.5in;"/>
<figcaption>
Una classificazione delle pagine
</figcaption>
</figure>
<p>Il primo programma (<code>spider.py</code>) scansiona un sito web e
copia una serie di pagine nel database (<code>spider.sqlite</code>),
registrando i link tra le pagine. Puoi riavviare da zero il processo in
qualsiasi momento eliminando il file <code>spider.sqlite</code> ed
eseguendo di nuovo <code>spider.py</code>.</p>
<pre><code>Enter web url or enter: http://www.dr-chuck.com/
[&#39;http://www.dr-chuck.com&#39;]
How many pages:2
1 http://www.dr-chuck.com/ 12
2 http://www.dr-chuck.com/csev-blog/ 57
How many pages:</code></pre>
<p>In questa esecuzione di esempio gli abbiamo detto di scansionare un
sito web e di recuperare due pagine. Se riavvii il programma e gli fai
scansionare altre pagine, non ripasserà sulle pagine già presenti nel
database. Quando riparte, va su una pagina a caso non ancora scansionata
e comincia da lì. Così ogni nuova esecuzione di <code>spider.py</code>
si somma alle precedenti.</p>
<pre><code>Enter web url or enter: http://www.dr-chuck.com/
[&#39;http://www.dr-chuck.com&#39;]
How many pages:3
3 http://www.dr-chuck.com/csev-blog 57
4 http://www.dr-chuck.com/dr-chuck/resume/speaking.htm 1
5 http://www.dr-chuck.com/dr-chuck/resume/index.htm 13
How many pages:</code></pre>
<p>Nello stesso database puoi avere più punti di partenza: nel programma
si chiamano <code>webs</code>. Lo spider sceglie a caso la prossima
pagina da scansionare tra tutti i link non ancora visitati di tutti i
<code>webs</code>.</p>
<p>Se vuoi fare il dump del contenuto del file
<code>spider.sqlite</code>, puoi eseguire <code>spdump.py</code> in
questo modo:</p>
<pre><code>(5, None, 1.0, 3, &#39;http://www.dr-chuck.com/csev-blog&#39;)
(3, None, 1.0, 4, &#39;http://www.dr-chuck.com/dr-chuck/resume/speaking.htm&#39;)
(1, None, 1.0, 2, &#39;http://www.dr-chuck.com/csev-blog/&#39;)
(1, None, 1.0, 5, &#39;http://www.dr-chuck.com/dr-chuck/resume/index.htm&#39;)
4 rows.</code></pre>
<p>Qui vedi il numero di link in entrata, il vecchio PageRank, il nuovo
PageRank, l’<code>id</code> della pagina e il suo URL. Il programma
<code>spdump.py</code> mostra solo le pagine che hanno almeno un link in
entrata.</p>
<p>Quando nel database ci sono alcune pagine, puoi calcolarne il
PageRank con il programma <code>sprank.py</code>. Ti basta dirgli quante
iterazioni di PageRank eseguire.</p>
<pre><code>How many iterations:2
1 0.546848992536
2 0.226714939664
[(1, 0.559), (2, 0.659), (3, 0.985), (4, 2.135), (5, 0.659)]</code></pre>
<p>Puoi fare di nuovo il dump del database per vedere che il PageRank è
stato aggiornato:</p>
<pre><code>(5, 1.0, 0.985, 3, &#39;http://www.dr-chuck.com/csev-blog&#39;)
(3, 1.0, 2.135, 4, &#39;http://www.dr-chuck.com/dr-chuck/resume/speaking.htm&#39;)
(1, 1.0, 0.659, 2, &#39;http://www.dr-chuck.com/csev-blog/&#39;)
(1, 1.0, 0.659, 5, &#39;http://www.dr-chuck.com/dr-chuck/resume/index.htm&#39;)
4 rows.</code></pre>
<p>Puoi eseguire <code>sprank.py</code> tutte le volte che vuoi: a ogni
esecuzione si limiterà ad affinare il PageRank. Puoi anche eseguire
<code>sprank.py</code> qualche volta, poi scansionare qualche altra
pagina con <code>spider.py</code> e infine eseguire
<code>sprank.py</code> per far convergere di nuovo i valori del
PageRank. Di solito un motore di ricerca esegue di continuo entrambi i
programmi, quello di scansione e quello di classificazione.</p>
<p>Se vuoi ricominciare da capo il calcolo del PageRank senza
scansionare di nuovo le pagine web, puoi usare <code>spreset.py</code> e
poi riavviare <code>sprank.py</code>.</p>
<pre><code>How many iterations:50
1 0.546848992536
2 0.226714939664
3 0.0659516187242
4 0.0244199333
5 0.0102096489546
6 0.00610244329379
...
42 0.000109076928206
43 9.91987599002e-05
44 9.02151706798e-05
45 8.20451504471e-05
46 7.46150183837e-05
47 6.7857770908e-05
48 6.17124694224e-05
49 5.61236959327e-05
50 5.10410499467e-05
[(512, 0.0296), (1, 12.79), (2, 28.93), (3, 6.808), (4, 13.46)]</code></pre>
<p>A ogni iterazione dell’algoritmo PageRank il programma stampa la
variazione media del PageRank per pagina. All’inizio la rete è piuttosto
sbilanciata, quindi i singoli valori del PageRank cambiano moltissimo da
un’iterazione all’altra. Ma in poche iterazioni il PageRank converge.
Dovresti eseguire <code>sprank.py</code> abbastanza a lungo da far
convergere i valori del PageRank.</p>
<p>Se vuoi visualizzare le pagine che al momento hanno il PageRank più
alto, esegui <code>spjson.py</code>: il programma legge il database e
scrive in formato JSON i dati delle pagine con più link, da vedere in un
browser web.</p>
<pre><code>Creating JSON output on spider.json...
How many nodes? 30
Open force.html in a browser to view the visualization</code></pre>
<p>Puoi vedere questi dati aprendo il file <code>force.html</code> nel
browser web. La pagina mostra i nodi e i link disposti automaticamente.
Puoi fare clic su qualsiasi nodo e trascinarlo, e puoi anche fare doppio
clic su un nodo per sapere quale URL rappresenta.</p>
<p>Se riesegui gli altri programmi, riesegui anche
<code>spjson.py</code> e aggiorna la pagina nel browser per caricare i
nuovi dati da <code>spider.js</code>.</p>
<h2 id="visualizzare-i-dati-della-posta">Visualizzare i dati della
posta</h2>
<p>A questo punto del libro hai acquisito una discreta familiarità con i
file di dati <code>mbox-short.txt</code> e <code>mbox.txt</code>. Ora è
il momento di portare a un livello superiore l’analisi dei dati delle
email.</p>
<p>Nel mondo reale a volte devi scaricare i dati della posta dai server.
Potrebbe volerci parecchio tempo, e i dati potrebbero essere incoerenti
e pieni di errori, e richiedere molto lavoro di pulizia o di correzione.
In questa sezione lavoriamo con l’applicazione più complessa vista
finora: scarichiamo quasi un gigabyte di dati e li visualizziamo.</p>
<figure>
<img src="../images/wordcloud.png" alt="Una nuvola di parole della mailing list degli sviluppatori di Sakai" style="height: 3.5in;"/>
<figcaption>
Una nuvola di parole della mailing list degli sviluppatori di Sakai
</figcaption>
</figure>
<p>Puoi scaricare questa applicazione da:</p>
<p><a
href="https://www.py4e.com/code3/gmane.zip">https://www.py4e.com/code3/gmane.zip</a></p>
<p>Useremo i dati di un servizio gratuito di archiviazione di mailing
list che si chiamava <em>gmane</em>. Il servizio è stato poi chiuso, ma
per questo corso ne è stato conservato un archivio parziale su <a
href="http://mbox.dr-chuck.net">http://mbox.dr-chuck.net</a>. Il
servizio gmane era molto popolare tra i progetti open source perché
offriva un comodo archivio della loro attività di posta, con la
possibilità di fare ricerche.</p>
<p><a
href="http://mbox.dr-chuck.net/export.php">http://mbox.dr-chuck.net/export.php</a></p>
<p>La scansione dei dati della posta di Sakai con questo software ha
prodotto quasi un gigabyte di dati e ha richiesto diverse esecuzioni in
più giorni. Nello ZIP indicato sopra, il file <code>README.txt</code>
potrebbe spiegarti come scaricare una copia del file
<code>content.sqlite</code> che contiene già la scansione della maggior
parte dei messaggi di Sakai, così eviti di passare cinque giorni a
scansionare solo per eseguire i programmi. Se scarichi il contenuto già
scansionato, dovresti comunque eseguire la scansione per metterti in
pari con i messaggi più recenti.</p>
<p>Il primo passo è scansionare il repository. L’URL di base è scritto
direttamente nel codice di <code>gmane.py</code> e punta alla mailing
list degli sviluppatori di Sakai. Puoi scansionare un altro repository
cambiando quell’URL di base. Se cambi l’URL di base, assicurati di
eliminare il file <code>content.sqlite</code>.</p>
<p>Il file <code>gmane.py</code> funziona come uno spider responsabile
dotato di cache: procede lentamente e fa una pausa di un secondo ogni
100 messaggi, per non subire limitazioni. Memorizza tutti i dati in un
database e si può interrompere e riavviare tutte le volte che serve. Per
scaricare tutti i dati possono volerci molte ore, quindi potresti
doverlo riavviare più volte.</p>
<p>Ecco un’esecuzione di <code>gmane.py</code> che recupera gli ultimi
cinque messaggi della mailing list degli sviluppatori di Sakai:</p>
<pre><code>How many messages:10
http://mbox.dr-chuck.net/sakai.devel/51410/51411 9460
    nealcaidin@sakaifoundation.org 2013-04-05 re: [building ...
http://mbox.dr-chuck.net/sakai.devel/51411/51412 3379
    samuelgutierrezjimenez@gmail.com 2013-04-06 re: [building ...
http://mbox.dr-chuck.net/sakai.devel/51412/51413 9903
    da1@vt.edu 2013-04-05 [building sakai] melete 2.9 oracle ...
http://mbox.dr-chuck.net/sakai.devel/51413/51414 349265
    m.shedid@elraed-it.com 2013-04-07 [building sakai] ...
http://mbox.dr-chuck.net/sakai.devel/51414/51415 3481
    samuelgutierrezjimenez@gmail.com 2013-04-07 re: ...
http://mbox.dr-chuck.net/sakai.devel/51415/51416 0

Does not start with From</code></pre>
<p>Il programma scorre <code>content.sqlite</code> dal messaggio numero
uno fino al primo numero di messaggio non ancora scansionato e comincia
la scansione da quel messaggio. Continua finché non ha scansionato il
numero di messaggi richiesto o finché non arriva a una pagina che non
sembra un messaggio formattato correttamente.</p>
<p>A volte nel repository manca un messaggio. Forse gli amministratori
possono cancellare i messaggi, o forse alcuni vanno persi. Se lo spider
si ferma e sembra che abbia incontrato un messaggio mancante, apri il
Database Browser for SQLite, aggiungi una riga con l’<code>id</code>
mancante lasciando vuoti tutti gli altri campi e riavvia
<code>gmane.py</code>. La riga aggiunta sbloccherà la scansione e le
permetterà di continuare. Questi messaggi vuoti verranno ignorati nella
fase successiva del processo.</p>
<p>Il bello è che, una volta scansionati tutti i messaggi e messi in
<code>content.sqlite</code>, puoi eseguire di nuovo
<code>gmane.py</code> per ottenere i nuovi messaggi man mano che vengono
inviati alla mailing list.</p>
<p>I dati di <code>content.sqlite</code> sono piuttosto grezzi, hanno un
modello dei dati inefficiente e non sono compressi. La scelta è voluta:
così puoi esaminare <code>content.sqlite</code> con il Database Browser
for SQLite per fare il debug dei problemi della scansione. Eseguire
query su questo database sarebbe una cattiva idea, perché sarebbero
piuttosto lente.</p>
<p>Il secondo processo consiste nell’eseguire il programma
<code>gmodel.py</code>. Il programma legge i dati grezzi da
<code>content.sqlite</code> e produce nel file <code>index.sqlite</code>
una versione dei dati ripulita e ben modellata. Il file
<code>index.sqlite</code> sarà molto più piccolo di
<code>content.sqlite</code> (spesso 10 volte più piccolo), perché il
programma comprime anche il testo delle intestazioni e del corpo.</p>
<p>Ogni volta che viene eseguito, <code>gmodel.py</code> cancella e
ricostruisce <code>index.sqlite</code>; così puoi regolare i parametri
del programma e modificare le tabelle di mappatura in
<code>mapping.sqlite</code> per mettere a punto la pulizia dei dati.
Ecco un esempio di esecuzione di <code>gmodel.py</code>. Il programma
stampa una riga ogni 250 messaggi di posta elaborati, così puoi vedere
che il lavoro va avanti: l’esecuzione può durare un bel po’, perché c’è
quasi un gigabyte di dati di posta da elaborare.</p>
<pre><code>Loaded allsenders 1588 and mapping 28 dns mapping 1
1 2005-12-08T23:34:30-06:00 ggolden22@mac.com
251 2005-12-22T10:03:20-08:00 tpamsler@ucdavis.edu
501 2006-01-12T11:17:34-05:00 lance@indiana.edu
751 2006-01-24T11:13:28-08:00 vrajgopalan@ucmerced.edu
...</code></pre>
<p>Il programma <code>gmodel.py</code> svolge diversi compiti di pulizia
dei dati.</p>
<p>I nomi di dominio vengono troncati a due livelli per
<code>.com</code>, <code>.org</code>, <code>.edu</code> e
<code>.net</code>. Gli altri nomi di dominio vengono troncati a tre
livelli. Così <code>si.umich.edu</code> diventa <code>umich.edu</code> e
<code>caret.cam.ac.uk</code> diventa <code>cam.ac.uk</code>. Inoltre gli
indirizzi email vengono convertiti tutti in minuscolo, e alcuni
indirizzi <code>@gmane.org</code> come il seguente</p>
<pre><code>arwhyte-63aXycvo3TyHXe+LvDLADg@public.gmane.org</code></pre>
<p>vengono sostituiti con l’indirizzo reale ogni volta che nel resto dei
messaggi c’è un indirizzo email reale corrispondente.</p>
<p>Nel database <code>mapping.sqlite</code> ci sono due tabelle che ti
permettono di creare mappature sia per i nomi di dominio sia per i
singoli indirizzi email che cambiano nel corso della vita della mailing
list. Ad esempio, Steve Githens ha usato questi indirizzi email man mano
che cambiava lavoro, negli anni di vita della mailing list degli
sviluppatori di Sakai:</p>
<pre><code>s-githens@northwestern.edu
sgithens@cam.ac.uk
swgithen@mtu.edu</code></pre>
<p>Possiamo aggiungere due voci alla tabella <code>Mapping</code> di
<code>mapping.sqlite</code>, così <code>gmodel.py</code> farà
corrispondere tutti e tre gli indirizzi a uno solo:</p>
<pre><code>s-githens@northwestern.edu -&gt;  swgithen@mtu.edu
sgithens@cam.ac.uk -&gt; swgithen@mtu.edu</code></pre>
<p>Puoi anche inserire voci simili nella tabella
<code>DNSMapping</code>, se ci sono più nomi DNS che vuoi far
corrispondere a un solo DNS. Ai dati di Sakai è stata aggiunta questa
mappatura:</p>
<pre><code>iupui.edu -&gt; indiana.edu</code></pre>
<p>così tutti gli account dei vari campus dell’Indiana University
vengono conteggiati insieme.</p>
<p>Mentre esamini i dati, puoi eseguire <code>gmodel.py</code> più e più
volte e aggiungere mappature per rendere i dati sempre più puliti. Alla
fine avrai in <code>index.sqlite</code> una versione ben indicizzata
delle email. È questo il file da usare per l’analisi dei dati: con
questo file l’analisi sarà davvero rapida.</p>
<p>La prima analisi dei dati, la più semplice, consiste nello stabilire
“chi ha inviato più messaggi?” e “quale organizzazione ha inviato più
messaggi?”. Per farla si usa <code>gbasic.py</code>:</p>
<pre><code>How many to dump? 5
Loaded messages= 51330 subjects= 25033 senders= 1584

Top 5 Email list participants
steve.swinsburg@gmail.com 2657
azeckoski@unicon.net 1742
ieb@tfd.co.uk 1591
csev@umich.edu 1304
david.horwitz@uct.ac.za 1184

Top 5 Email list organizations
gmail.com 7339
umich.edu 6243
uct.ac.za 2451
indiana.edu 2258
unicon.net 2055</code></pre>
<p>Nota quanto è più veloce <code>gbasic.py</code> rispetto a
<code>gmane.py</code> o anche a <code>gmodel.py</code>. Lavorano tutti
sugli stessi dati, ma <code>gbasic.py</code> usa i dati compressi e
normalizzati di <code>index.sqlite</code>. Se hai molti dati da gestire,
un processo in più passi come quello di questa applicazione può
richiedere un po’ più di tempo di sviluppo, ma ti farà risparmiare molto
tempo quando comincerai davvero a esplorare e visualizzare i dati.</p>
<p>Con il file <code>gword.py</code> puoi produrre una semplice
visualizzazione della frequenza delle parole nell’oggetto dei
messaggi:</p>
<pre><code>Range of counts: 33229 129
Output written to gword.js</code></pre>
<p>Il programma produce il file <code>gword.js</code>, che puoi
visualizzare con <code>gword.htm</code> per ottenere una <em>nuvola di
parole</em> (word cloud) simile a quella all’inizio di questa
sezione.</p>
<p>Una seconda visualizzazione è prodotta da <code>gline.py</code>. Il
programma calcola la partecipazione via email delle organizzazioni nel
corso del tempo.</p>
<pre><code>Loaded messages= 51330 senders= 1584
Top 10 Oranizations
[&#39;gmail.com&#39;, &#39;umich.edu&#39;, &#39;uct.ac.za&#39;, &#39;indiana.edu&#39;,
&#39;unicon.net&#39;, &#39;tfd.co.uk&#39;, &#39;berkeley.edu&#39;, &#39;longsight.com&#39;,
&#39;stanford.edu&#39;, &#39;ox.ac.uk&#39;]
Output written to gline.js</code></pre>
<p>L’output viene scritto in <code>gline.js</code>, che si visualizza
con <code>gline.htm</code>.</p>
<figure>
<img src="../images/mailorg.png"
alt="Attività di posta di Sakai per organizzazione" />
<figcaption aria-hidden="true">Attività di posta di Sakai per
organizzazione</figcaption>
</figure>
<p>Si tratta di un’applicazione relativamente complessa e sofisticata,
con funzionalità per un vero lavoro di recupero, pulizia e
visualizzazione dei dati.</p>
</body>
</html>
<?php if ( file_exists("../bookfoot.php") ) {
  $HTML_FILE = basename(__FILE__);
  $HTML = ob_get_contents();
  ob_end_clean();
  require_once "../bookfoot.php";
}?>
