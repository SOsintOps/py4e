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
  <title>Usare i servizi web</title>
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
<h1 id="usare-i-servizi-web">Usare i servizi web</h1>
<p>Quando è diventato facile recuperare e analizzare documenti via HTTP
con dei programmi, non ci è voluto molto per sviluppare un approccio in
cui abbiamo cominciato a produrre documenti pensati apposta per essere
usati da altri programmi (cioè non HTML da visualizzare in un
browser).</p>
<p>Per scambiare dati sul web usiamo due formati comuni. L’eXtensible
Markup Language (XML) è in uso da moltissimo tempo ed è il più adatto
per scambiare dati in forma di documento. Quando i programmi vogliono
solo scambiarsi dizionari, liste o altre informazioni interne, usano la
JavaScript Object Notation (JSON) (vedi <a
href="http://www.json.org">www.json.org</a>). Vedremo entrambi i
formati.</p>
<h2 id="extensible-markup-language---xml">eXtensible Markup Language -
XML</h2>
<p>XML somiglia molto a HTML, ma è più strutturato. Ecco un esempio di
documento XML:</p>
<pre class="xml"><code>&lt;person&gt;
  &lt;name&gt;Chuck&lt;/name&gt;
  &lt;phone type=&quot;intl&quot;&gt;
    +1 734 303 4456
  &lt;/phone&gt;
  &lt;email hide=&quot;yes&quot; /&gt;
&lt;/person&gt;</code></pre>
<p>Ogni coppia formata da un tag di apertura (come
<code>&lt;person&gt;</code>) e da uno di chiusura (come
<code>&lt;/person&gt;</code>) rappresenta un <em>elemento</em> o
<em>nodo</em> che ha lo stesso nome del tag (ad esempio
<code>person</code>). Ogni elemento può avere del testo, alcuni
attributi (ad esempio <code>hide</code>) e altri elementi annidati. Se
un elemento XML è vuoto (cioè non ha contenuto), lo si può rappresentare
con un <em>tag a chiusura automatica</em> (self-closing tag), come
<code>&lt;email /&gt;</code>.</p>
<p>Spesso è utile pensare a un documento XML come a una struttura ad
albero, in cui c’è un elemento di primo livello (qui
<code>person</code>) e gli altri tag (ad esempio <code>phone</code>)
sono disegnati come <em>figli</em> dei rispettivi elementi
<em>padre</em>.</p>
<figure>
<img src="../images/xml-tree.svg" alt="Rappresentazione ad albero dell'XML" style="height: 2.0in;"/>
<figcaption>
Rappresentazione ad albero dell’XML
</figcaption>
</figure>
<h2 id="analizzare-xml">Analizzare XML</h2>
<p> </p>
<p>Ecco una semplice applicazione che analizza un po’ di XML e ne estrae
alcuni dati:</p>
<pre class="python"><code>import xml.etree.ElementTree as ET

data = &#39;&#39;&#39;
&lt;person&gt;
  &lt;name&gt;Chuck&lt;/name&gt;
  &lt;phone type=&quot;intl&quot;&gt;
    +1 734 303 4456
  &lt;/phone&gt;
  &lt;email hide=&quot;yes&quot; /&gt;
&lt;/person&gt;&#39;&#39;&#39;

tree = ET.fromstring(data)
print(&#39;Name:&#39;, tree.find(&#39;name&#39;).text)
print(&#39;Attr:&#39;, tree.find(&#39;email&#39;).get(&#39;hide&#39;))

# Code: https://www.py4e.com/code3/xml1.py</code></pre>
<p>Le triple virgolette singole (<code>'''</code>), così come le triple
virgolette doppie (<code>"""</code>), permettono di creare stringhe che
si estendono su più righe.</p>
<p>La chiamata a <code>fromstring</code> converte la stringa che
rappresenta l’XML in un “albero” di elementi XML. Una volta che l’XML è
in forma di albero, abbiamo una serie di metodi che possiamo chiamare
per estrarre parti dei dati dalla stringa XML. Il metodo
<code>find</code> cerca nell’albero XML e recupera l’elemento che
corrisponde al tag indicato.</p>
<pre><code>Name: Chuck
Attr: yes</code></pre>
<p>Usare un parser XML come <code>ElementTree</code> ha un vantaggio:
l’XML di questo esempio è piuttosto semplice, ma in realtà le regole che
rendono valido un documento XML sono molte; con <code>ElementTree</code>
possiamo estrarre dati da XML senza preoccuparci delle regole della sua
sintassi.</p>
<h2 id="scorrere-i-nodi">Scorrere i nodi</h2>
<p> </p>
<p>Spesso l’XML ha più nodi e dobbiamo scrivere un ciclo per elaborarli
tutti. Nel programma seguente scorriamo tutti i nodi
<code>user</code>:</p>
<pre class="python"><code>import xml.etree.ElementTree as ET

input = &#39;&#39;&#39;
&lt;stuff&gt;
  &lt;users&gt;
    &lt;user x=&quot;2&quot;&gt;
      &lt;id&gt;001&lt;/id&gt;
      &lt;name&gt;Chuck&lt;/name&gt;
    &lt;/user&gt;
    &lt;user x=&quot;7&quot;&gt;
      &lt;id&gt;009&lt;/id&gt;
      &lt;name&gt;Brent&lt;/name&gt;
    &lt;/user&gt;
  &lt;/users&gt;
&lt;/stuff&gt;&#39;&#39;&#39;

stuff = ET.fromstring(input)
lst = stuff.findall(&#39;users/user&#39;)
print(&#39;User count:&#39;, len(lst))

for item in lst:
    print(&#39;Name&#39;, item.find(&#39;name&#39;).text)
    print(&#39;Id&#39;, item.find(&#39;id&#39;).text)
    print(&#39;Attribute&#39;, item.get(&#39;x&#39;))

# Code: https://www.py4e.com/code3/xml2.py</code></pre>
<p>Il metodo <code>findall</code> recupera una lista Python di
sottoalberi che rappresentano le strutture <code>user</code> nell’albero
XML. Poi possiamo scrivere un ciclo <code>for</code> che esamina ogni
nodo <code>user</code> e ne stampa gli elementi di testo
<code>name</code> e <code>id</code>, oltre all’attributo
<code>x</code>.</p>
<pre><code>User count: 2
Name Chuck
Id 001
Attribute 2
Name Brent
Id 009
Attribute 7</code></pre>
<p>È importante includere nella chiamata al metodo <code>findall</code>
tutti gli elementi padre, tranne quello di primo livello (ad esempio
<code>users/user</code>). Altrimenti Python non troverà i nodi
desiderati.</p>
<pre class="python"><code>import xml.etree.ElementTree as ET

input = &#39;&#39;&#39;
&lt;stuff&gt;
  &lt;users&gt;
    &lt;user x=&quot;2&quot;&gt;
      &lt;id&gt;001&lt;/id&gt;
      &lt;name&gt;Chuck&lt;/name&gt;
    &lt;/user&gt;
    &lt;user x=&quot;7&quot;&gt;
      &lt;id&gt;009&lt;/id&gt;
      &lt;name&gt;Brent&lt;/name&gt;
    &lt;/user&gt;
  &lt;/users&gt;
&lt;/stuff&gt;&#39;&#39;&#39;

stuff = ET.fromstring(input)

lst = stuff.findall(&#39;users/user&#39;)
print(&#39;User count:&#39;, len(lst))

lst2 = stuff.findall(&#39;user&#39;)
print(&#39;User count:&#39;, len(lst2))</code></pre>
<p><code>lst</code> contiene tutti gli elementi <code>user</code>
annidati nel loro padre <code>users</code>. <code>lst2</code> cerca gli
elementi <code>user</code> che stanno direttamente nell’elemento di
primo livello <code>stuff</code>, senza essere annidati in un altro
elemento, e lì non ce n’è nessuno.</p>
<pre><code>User count: 2
User count: 0</code></pre>
<h2 id="javascript-object-notation---json">JavaScript Object Notation -
JSON</h2>
<p> </p>
<p>Il formato JSON si è ispirato a quello degli oggetti e degli array
del linguaggio JavaScript. Ma poiché Python è stato inventato prima di
JavaScript, la sintassi di Python per dizionari e liste ha influenzato
quella di JSON. Per questo il formato di JSON è quasi identico a una
combinazione di liste e dizionari Python.</p>
<p>Ecco una codifica JSON più o meno equivalente al semplice XML visto
sopra:</p>
<pre class="json"><code>{
  &quot;name&quot; : &quot;Chuck&quot;,
  &quot;phone&quot; : {
    &quot;type&quot; : &quot;intl&quot;,
    &quot;number&quot; : &quot;+1 734 303 4456&quot;
   },
   &quot;email&quot; : {
     &quot;hide&quot; : &quot;yes&quot;
   }
}</code></pre>
<p>Noterai alcune differenze. Innanzitutto, in XML possiamo aggiungere
al tag <code>phone</code> attributi come <code>type="intl"</code>. In
JSON abbiamo semplicemente coppie chiave-valore. Inoltre il tag XML
<code>person</code> è scomparso, sostituito da una coppia di parentesi
graffe esterne.</p>
<p>In generale le strutture JSON sono più semplici di quelle XML, perché
JSON offre meno funzionalità di XML. Ma JSON ha il vantaggio di
corrispondere <em>direttamente</em> a una qualche combinazione di
dizionari e liste. E poiché quasi tutti i linguaggi di programmazione
hanno qualcosa di equivalente ai dizionari e alle liste di Python, JSON
è un formato molto naturale per far scambiare dati a due programmi che
collaborano.</p>
<p>JSON sta diventando rapidamente il formato preferito per quasi tutti
gli scambi di dati tra applicazioni, grazie alla sua relativa semplicità
rispetto a XML.</p>
<h2 id="analizzare-json">Analizzare JSON</h2>
<p>Costruiamo il JSON annidando dizionari e liste secondo le necessità.
In questo esempio rappresentiamo una lista di utenti in cui ogni utente
è un insieme di coppie chiave-valore (cioè un dizionario). Abbiamo
quindi una lista di dizionari.</p>
<p>Nel programma seguente usiamo la libreria built-in <code>json</code>
per analizzare il JSON e leggerne i dati. Confronta attentamente questo
programma con i dati e il codice XML equivalenti visti sopra. Il JSON ha
meno dettagli, quindi dobbiamo sapere in anticipo che riceviamo una
lista, che i suoi elementi sono utenti e che ogni utente è un insieme di
coppie chiave-valore. Il JSON è più conciso (un vantaggio), ma è anche
meno autodescrittivo (uno svantaggio).</p>
<pre class="python"><code>import json

data = &#39;&#39;&#39;
[
  { &quot;id&quot; : &quot;001&quot;,
    &quot;x&quot; : &quot;2&quot;,
    &quot;name&quot; : &quot;Chuck&quot;
  } ,
  { &quot;id&quot; : &quot;009&quot;,
    &quot;x&quot; : &quot;7&quot;,
    &quot;name&quot; : &quot;Brent&quot;
  }
]&#39;&#39;&#39;

info = json.loads(data)
print(&#39;User count:&#39;, len(info))

for item in info:
    print(&#39;Name&#39;, item[&#39;name&#39;])
    print(&#39;Id&#39;, item[&#39;id&#39;])
    print(&#39;Attribute&#39;, item[&#39;x&#39;])

# Code: https://www.py4e.com/code3/json2.py</code></pre>
<p>Se confronti il codice che estrae i dati dal JSON e dall’XML
analizzati, vedrai che ciò che otteniamo da <code>json.loads()</code> è
una lista Python, che scorriamo con un ciclo <code>for</code> e i cui
elementi sono dizionari Python. Una volta analizzato il JSON, possiamo
usare l’operatore di indicizzazione di Python per estrarre i vari dati
di ogni utente. Non abbiamo bisogno di usare la libreria
<code>json</code> per frugare nel JSON analizzato, perché i dati
restituiti sono semplicemente strutture native di Python.</p>
<p>L’output di questo programma è identico a quello della versione XML
vista sopra.</p>
<pre><code>User count: 2
Name Chuck
Id 001
Attribute 2
Name Brent
Id 009
Attribute 7</code></pre>
<p>In generale, per i servizi web il settore tende ad abbandonare XML in
favore di JSON. Poiché JSON è più semplice e corrisponde in modo più
diretto alle strutture dati native che abbiamo già nei linguaggi di
programmazione, con JSON il codice che analizza ed estrae i dati è di
solito più semplice e più diretto. Ma XML è più autodescrittivo di JSON,
e per questo ci sono alcune applicazioni in cui XML conserva un
vantaggio. Ad esempio, la maggior parte dei programmi di videoscrittura
memorizza internamente i documenti in XML invece che in JSON.</p>
<h2 id="interfacce-di-programmazione-delle-applicazioni">Interfacce di
programmazione delle applicazioni</h2>
<p>Ora possiamo scambiare dati tra applicazioni con l’Hypertext Transfer
Protocol (HTTP) e abbiamo un modo per rappresentare i dati complessi che
queste applicazioni si scambiano, con l’eXtensible Markup Language (XML)
o la JavaScript Object Notation (JSON).</p>
<p>Il passo successivo è cominciare a definire e documentare, con queste
tecniche, dei “contratti” tra applicazioni. Questi contratti tra
un’applicazione e l’altra si chiamano in generale <em>interfacce di
programmazione delle applicazioni</em> (API, Application Program
Interfaces). Quando usiamo un’API, di solito un programma mette a
disposizione di altre applicazioni un insieme di <em>servizi</em> e
pubblica le API (cioè le “regole”) da seguire per accedere ai servizi
forniti dal programma.</p>
<p>Quando cominciamo a costruire programmi le cui funzionalità
comprendono l’accesso a servizi forniti da altri programmi, chiamiamo
questo approccio <em>architettura orientata ai servizi</em> (SOA,
Service-Oriented Architecture). In un approccio SOA l’applicazione nel
suo complesso usa i servizi di altre applicazioni. In un approccio non
SOA l’applicazione è unica e autonoma e contiene tutto il codice
necessario per implementarla.</p>
<p>Quando usiamo il web vediamo molti esempi di SOA. Possiamo prenotare
voli, alberghi e automobili, tutto da un solo sito web. I dati degli
alberghi non sono memorizzati sui computer della compagnia aerea: sono
questi computer a contattare i servizi sui computer degli alberghi, a
recuperarne i dati e a presentarli all’utente. Quando l’utente accetta
di prenotare un albergo tramite il sito della compagnia aerea, il sito
usa un altro servizio web dei sistemi dell’albergo per fare la
prenotazione vera e propria. E quando arriva il momento di addebitare
l’intera transazione sulla tua carta di credito, entrano in gioco altri
computer ancora.</p>
<figure>
<img src="../images/soa.svg" alt="Architettura orientata ai servizi" style="height: 3.0in;"/>
<figcaption>
Architettura orientata ai servizi
</figcaption>
</figure>
<p>Un’architettura orientata ai servizi ha molti vantaggi, tra cui: (1)
manteniamo sempre una sola copia dei dati (cosa particolarmente
importante in casi come le prenotazioni degli alberghi, in cui non
vogliamo accettarne più di quante sono le camere disponibili) e (2) i
proprietari dei dati possono stabilire le regole per il loro uso. A
fronte di questi vantaggi, un sistema SOA deve essere progettato con
cura per avere buone prestazioni e soddisfare le esigenze
dell’utente.</p>
<p>Quando un’applicazione mette a disposizione sul web un insieme di
servizi della sua API, li chiamiamo <em>servizi web</em>.</p>
<h2 id="sicurezza-e-uso-delle-api">Sicurezza e uso delle API</h2>
<p> </p>
<p>Capita spesso che ti serva una chiave API per usare l’API di un
fornitore. L’idea generale è che il fornitore voglia sapere chi usa i
suoi servizi e quanto li usa ogni utente. Magari offre i suoi servizi
con piani gratuiti e piani a pagamento, o applica una politica che
limita il numero di richieste che una sola persona può fare in un certo
periodo di tempo.</p>
<p>A volte, dopo aver ottenuto la chiave API, ti basta includerla tra i
dati <code>POST</code>, o magari come parametro dell’URL, quando chiami
l’API.</p>
<p>Altre volte il fornitore vuole più garanzie sulla provenienza delle
richieste: per questo si aspetta che tu invii messaggi firmati
crittograficamente con chiavi e segreti condivisi. Una tecnologia molto
diffusa per firmare le richieste su Internet si chiama <em>OAuth</em>.
Puoi saperne di più sul protocollo OAuth all’indirizzo <a
href="http://www.oauth.net">www.oauth.net</a>.</p>
<p>Per fortuna esistono diverse librerie OAuth comode e gratuite, così
puoi evitare di scrivere da zero un’implementazione di OAuth partendo
dalla specifica. Queste librerie sono di complessità diversa e offrono
funzionalità più o meno ricche. Il sito web di OAuth contiene
informazioni su varie librerie OAuth.</p>
<h2 id="glossario">Glossario</h2>
<dl>
<dt><strong>API</strong></dt>
<dd>
Application Program Interface (interfaccia di programmazione delle
applicazioni) - Un contratto tra applicazioni che definisce gli schemi
di interazione tra due componenti applicativi.
</dd>
<dt><strong><code>ElementTree</code></strong></dt>
<dd>
Una libreria built-in di Python usata per analizzare dati XML.
</dd>
<dt><strong>JSON</strong></dt>
<dd>
JavaScript Object Notation - Un formato, basato sulla sintassi degli
oggetti JavaScript, che permette il markup di dati strutturati.
</dd>
<dt><strong>SOA</strong></dt>
<dd>
Service-Oriented Architecture (architettura orientata ai servizi) -
Un’architettura in cui un’applicazione è formata da componenti collegati
attraverso una rete.
</dd>
<dt><strong>XML</strong></dt>
<dd>
eXtensible Markup Language - Un formato che permette il markup di dati
strutturati.
</dd>
</dl>
</body>
</html>
<?php if ( file_exists("../bookfoot.php") ) {
  $HTML_FILE = basename(__FILE__);
  $HTML = ob_get_contents();
  ob_end_clean();
  require_once "../bookfoot.php";
}?>
