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
  <title>Programmi in rete</title>
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
<h1 id="programmi-in-rete">Programmi in rete</h1>
<p>Molti degli esempi di questo libro si sono concentrati sulla lettura
dei file e sulla ricerca di dati al loro interno, ma se si pensa a
Internet le fonti di informazione sono molte e di tipo diverso.</p>
<p>In questo capitolo faremo finta di essere un browser web e
recupereremo pagine web usando l’Hypertext Transfer Protocol (HTTP). Poi
leggeremo i dati di quelle pagine e li analizzeremo.</p>
<h2 id="hypertext-transfer-protocol---http">Hypertext Transfer Protocol
- HTTP</h2>
<p>Il protocollo di rete su cui si basa il web è in realtà piuttosto
semplice, e Python ha un supporto built-in, chiamato
<code>socket</code>, che rende molto facile aprire connessioni di rete e
recuperare dati attraverso quei socket in un programma Python.</p>
<p>Un <em>socket</em> è molto simile a un file, con la differenza che un
solo socket fornisce una connessione bidirezionale tra due programmi.
Sullo stesso socket puoi sia leggere sia scrivere. Se scrivi qualcosa su
un socket, viene inviato all’applicazione che si trova all’altra
estremità del socket. Se leggi dal socket, ricevi i dati che l’altra
applicazione ha inviato.</p>
<p>Ma se provi a leggere da un socket<a href="#fn1" class="footnote-ref"
id="fnref1" role="doc-noteref"><sup>1</sup></a> quando il programma
all’altra estremità non ha inviato alcun dato, resti lì ad aspettare. Se
i programmi ai due capi del socket aspettano semplicemente dei dati
senza inviare nulla, aspetteranno per moltissimo tempo; per questo, nei
programmi che comunicano su Internet, è importante avere un qualche tipo
di protocollo.</p>
<p>Un protocollo è un insieme di regole precise che stabiliscono chi
deve cominciare, cosa deve fare, quali sono poi le risposte a quel
messaggio, chi invia dopo, e così via. In un certo senso le due
applicazioni ai capi del socket stanno ballando e fanno attenzione a non
pestarsi i piedi.</p>
<p>Esistono molti documenti che descrivono questi protocolli di rete.
L’Hypertext Transfer Protocol è descritto nel documento seguente:</p>
<p><a href="https://www.w3.org/Protocols/rfc2616/rfc2616.txt"
class="uri">https://www.w3.org/Protocols/rfc2616/rfc2616.txt</a></p>
<p>È un documento lungo e complesso, di 176 pagine, con moltissimi
dettagli. Se lo trovi interessante, leggilo pure tutto. Ma se dai
un’occhiata intorno a pagina 36 dell’RFC2616, troverai la sintassi della
richiesta <code>GET</code>. Per richiedere un documento a un server web,
apriamo una connessione, ad esempio con il server
<code>data.pr4e.org</code> sulla porta 80, e poi inviamo una riga di
questa forma</p>
<p><code>GET http://data.pr4e.org/romeo.txt HTTP/1.0</code></p>
<p>dove il secondo parametro è la pagina web che stiamo richiedendo; poi
inviamo anche una riga vuota. Il server web risponderà con alcune
informazioni di intestazione sul documento e con una riga vuota, seguita
dal contenuto del documento.</p>
<h2 id="il-browser-web-più-semplice-del-mondo">Il browser web più
semplice del mondo</h2>
<p>Forse il modo più facile per mostrare come funziona il protocollo
HTTP è scrivere un programma Python molto semplice che apre una
connessione con un server web e segue le regole del protocollo HTTP per
richiedere un documento e visualizzare ciò che il server invia in
risposta.</p>
<pre class="python"><code>import socket

mysock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
mysock.connect((&#39;data.pr4e.org&#39;, 80))
cmd = &#39;GET http://data.pr4e.org/romeo.txt HTTP/1.0\r\n\r\n&#39;.encode()
mysock.send(cmd)

while True:
    data = mysock.recv(512)
    if len(data) &lt; 1:
        break
    print(data.decode(),end=&#39;&#39;)

mysock.close()

# Code: https://www.py4e.com/code3/socket1.py</code></pre>
<p>Per prima cosa il programma apre una connessione sulla porta 80 del
server <code>data.pr4e.org</code>. Dato che il programma recita la parte
del “browser web”, il protocollo HTTP dice che dobbiamo inviare il
comando <code>GET</code> seguito da una riga vuota. <code>\r\n</code>
indica un EOL (end of line, fine riga), quindi <code>\r\n\r\n</code>
indica che tra due sequenze EOL non c’è niente. Equivale a una riga
vuota.</p>
<figure>
<img src="../images/socket.svg" alt="Una connessione tramite socket" style="height: 2.0in;"/>
<figcaption>
Una connessione tramite socket
</figcaption>
</figure>
<p>Dopo aver inviato quella riga vuota, scriviamo un ciclo che riceve
dal socket dati in blocchi da 512 caratteri e li stampa, finché non ci
sono più dati da leggere (cioè finché <code>recv()</code> non
restituisce una stringa vuota).</p>
<p>Il programma produce l’output seguente:</p>
<pre><code>HTTP/1.1 200 OK
Date: Wed, 11 Apr 2018 18:52:55 GMT
Server: Apache/2.4.7 (Ubuntu)
Last-Modified: Sat, 13 May 2017 11:22:22 GMT
ETag: &quot;a7-54f6609245537&quot;
Accept-Ranges: bytes
Content-Length: 167
Cache-Control: max-age=0, no-cache, no-store, must-revalidate
Pragma: no-cache
Expires: Wed, 11 Jan 1984 05:00:00 GMT
Connection: close
Content-Type: text/plain

But soft what light through yonder window breaks
It is the east and Juliet is the sun
Arise fair sun and kill the envious moon
Who is already sick and pale with grief</code></pre>
<p>L’output comincia con le intestazioni che il server web invia per
descrivere il documento. Ad esempio, l’intestazione
<code>Content-Type</code> indica che si tratta di un documento di solo
testo (<code>text/plain</code>).</p>
<p>Dopo averci inviato le intestazioni, il server aggiunge una riga
vuota per indicarne la fine, e poi invia i dati veri e propri del file
<code>romeo.txt</code>.</p>
<p>Questo esempio mostra come aprire una connessione di rete di basso
livello con i socket. I socket si possono usare per comunicare con un
server web, con un server di posta o con molti altri tipi di server.
Basta trovare il documento che descrive il protocollo e scrivere il
codice che invia e riceve i dati secondo quel protocollo.</p>
<p>Tuttavia, dato che il protocollo che usiamo più spesso è HTTP, il
protocollo del web, Python ha una libreria speciale, progettata apposta
per supportare HTTP nel recupero di documenti e dati dal web:
<code>urllib</code>, che vedremo tra poco.</p>
<p>Uno dei requisiti per usare il protocollo HTTP è inviare e ricevere i
dati come oggetti bytes, invece che come stringhe. Nell’esempio
precedente, i metodi <code>encode()</code> e <code>decode()</code>
convertono le stringhe in oggetti bytes e viceversa.</p>
<p>L’esempio seguente usa la notazione <code>b''</code> per specificare
che una variabile deve essere memorizzata come oggetto bytes.
<code>encode()</code> e <code>b''</code> sono equivalenti.</p>
<pre><code>&gt;&gt;&gt; b&#39;Hello world&#39;
b&#39;Hello world&#39;
&gt;&gt;&gt; &#39;Hello world&#39;.encode()
b&#39;Hello world&#39;</code></pre>
<h2 id="recuperare-unimmagine-tramite-http">Recuperare un’immagine
tramite HTTP</h2>
<p> </p>
<p>Nell’esempio precedente abbiamo recuperato un file di solo testo che
conteneva dei newline (caratteri di fine riga) e ci siamo limitati a
copiare i dati sullo schermo mentre il programma veniva eseguito.
Possiamo usare un programma simile per recuperare un’immagine tramite
HTTP. Invece di copiare i dati sullo schermo durante l’esecuzione, li
accumuliamo in una stringa, togliamo le intestazioni e poi salviamo i
dati dell’immagine in un file, come segue:</p>
<pre class="python"><code>import socket
import time

HOST = &#39;data.pr4e.org&#39;
PORT = 80
mysock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
mysock.connect((HOST, PORT))
mysock.sendall(b&#39;GET http://data.pr4e.org/cover3.jpg HTTP/1.0\r\n\r\n&#39;)
count = 0
picture = b&quot;&quot;

while True:
    data = mysock.recv(5120)
    if len(data) &lt; 1: break
    #time.sleep(0.25)
    count = count + len(data)
    print(len(data), count)
    picture = picture + data

mysock.close()

# Look for the end of the header (2 CRLF)
pos = picture.find(b&quot;\r\n\r\n&quot;)
print(&#39;Header length&#39;, pos)
print(picture[:pos].decode())

# Skip past the header and save the picture data
picture = picture[pos+4:]
fhand = open(&quot;stuff.jpg&quot;, &quot;wb&quot;)
fhand.write(picture)
fhand.close()

# Code: https://www.py4e.com/code3/urljpeg.py</code></pre>
<p>Durante l’esecuzione, il programma produce l’output seguente:</p>
<pre><code>$ python urljpeg.py
5120 5120
5120 10240
4240 14480
5120 19600
...
5120 214000
3200 217200
5120 222320
5120 227440
3167 230607
Header length 393
HTTP/1.1 200 OK
Date: Wed, 11 Apr 2018 18:54:09 GMT
Server: Apache/2.4.7 (Ubuntu)
Last-Modified: Mon, 15 May 2017 12:27:40 GMT
ETag: &quot;38342-54f8f2e5b6277&quot;
Accept-Ranges: bytes
Content-Length: 230210
Vary: Accept-Encoding
Cache-Control: max-age=0, no-cache, no-store, must-revalidate
Pragma: no-cache
Expires: Wed, 11 Jan 1984 05:00:00 GMT
Connection: close
Content-Type: image/jpeg</code></pre>
<p>Puoi notare che per questo URL l’intestazione
<code>Content-Type</code> indica che il corpo del documento è
un’immagine (<code>image/jpeg</code>). Quando il programma ha finito,
puoi vedere l’immagine aprendo il file <code>stuff.jpg</code> con un
visualizzatore di immagini.</p>
<p>Mentre il programma viene eseguito, puoi notare che non riceviamo
5120 caratteri a ogni chiamata del metodo <code>recv()</code>. Riceviamo
i caratteri che il server web ci ha già trasmesso attraverso la rete nel
momento in cui chiamiamo <code>recv()</code>. In questo esempio, ogni
volta che chiediamo fino a 5120 caratteri di dati, ne riceviamo a volte
anche solo 3200.</p>
<p>I risultati possono variare a seconda della velocità della rete. Nota
anche che all’ultima chiamata a <code>recv()</code> riceviamo 3167 byte,
cioè la fine del flusso, e alla chiamata successiva a
<code>recv()</code> riceviamo una stringa di lunghezza zero, che ci dice
che il server ha chiamato <code>close()</code> sulla sua estremità del
socket e che non arriveranno altri dati.</p>
<p> </p>
<p>Possiamo rallentare le chiamate successive a <code>recv()</code>
togliendo il commento dalla chiamata a <code>time.sleep()</code>. In
questo modo, dopo ogni chiamata aspettiamo un quarto di secondo, così il
server può “portarsi avanti” e inviarci altri dati prima che chiamiamo
di nuovo <code>recv()</code>. Con il ritardo attivo, il programma viene
eseguito così:</p>
<pre><code>$ python urljpeg.py
5120 5120
5120 10240
5120 15360
...
5120 225280
5120 230400
207 230607
Header length 393
HTTP/1.1 200 OK
Date: Wed, 11 Apr 2018 21:42:08 GMT
Server: Apache/2.4.7 (Ubuntu)
Last-Modified: Mon, 15 May 2017 12:27:40 GMT
ETag: &quot;38342-54f8f2e5b6277&quot;
Accept-Ranges: bytes
Content-Length: 230210
Vary: Accept-Encoding
Cache-Control: max-age=0, no-cache, no-store, must-revalidate
Pragma: no-cache
Expires: Wed, 11 Jan 1984 05:00:00 GMT
Connection: close
Content-Type: image/jpeg</code></pre>
<p>Ora, tranne che nella prima e nell’ultima chiamata a
<code>recv()</code>, riceviamo 5120 caratteri ogni volta che chiediamo
nuovi dati.</p>
<p>Tra il server che fa richieste <code>send()</code> e la nostra
applicazione che fa richieste <code>recv()</code> c’è un buffer. Quando
eseguiamo il programma con il ritardo attivo, a un certo punto il server
potrebbe riempire il buffer del socket ed essere costretto a fermarsi
finché il nostro programma non comincia a svuotarlo. La pausa
dell’applicazione che invia o di quella che riceve si chiama
<em>controllo di flusso</em> (flow control).</p>
<h2 id="recuperare-pagine-web-con-urllib">Recuperare pagine web con
<code>urllib</code></h2>
<p>Anche se con la libreria <code>socket</code> possiamo inviare e
ricevere dati via HTTP a mano, in Python c’è un modo molto più semplice
per svolgere questo compito comune: usare la libreria
<code>urllib</code>.</p>
<p>Con <code>urllib</code> puoi trattare una pagina web in modo molto
simile a un file. Ti basta indicare quale pagina web vuoi recuperare, e
<code>urllib</code> gestisce tutti i dettagli del protocollo HTTP e
delle intestazioni.</p>
<p>Il codice equivalente per leggere dal web il file
<code>romeo.txt</code> con <code>urllib</code> è il seguente:</p>
<pre class="python"><code>import urllib.request

fhand = urllib.request.urlopen(&#39;http://data.pr4e.org/romeo.txt&#39;)
for line in fhand:
    print(line.decode().strip())

# Code: https://www.py4e.com/code3/urllib1.py</code></pre>
<p>Una volta aperta la pagina web con
<code>urllib.request.urlopen</code>, possiamo trattarla come un file e
leggerne il contenuto con un ciclo <code>for</code>.</p>
<p>Quando il programma viene eseguito, vediamo in output solo il
contenuto del file. Le intestazioni vengono comunque inviate, ma il
codice di <code>urllib</code> le consuma e ci restituisce solo i
dati.</p>
<pre><code>But soft what light through yonder window breaks
It is the east and Juliet is the sun
Arise fair sun and kill the envious moon
Who is already sick and pale with grief</code></pre>
<p>Ad esempio, possiamo scrivere un programma che recupera i dati di
<code>romeo.txt</code> e calcola la frequenza di ogni parola del file,
come segue:</p>
<pre class="python"><code>import urllib.request, urllib.parse, urllib.error

fhand = urllib.request.urlopen(&#39;http://data.pr4e.org/romeo.txt&#39;)

counts = dict()
for line in fhand:
    words = line.decode().split()
    for word in words:
        counts[word] = counts.get(word, 0) + 1
print(counts)

# Code: https://www.py4e.com/code3/urlwords.py</code></pre>
<p>Di nuovo, una volta aperta la pagina web, possiamo leggerla come un
file locale.</p>
<h2 id="leggere-file-binari-con-urllib">Leggere file binari con
<code>urllib</code></h2>
<p>A volte vuoi recuperare un file non testuale (o binario), come
un’immagine o un video. Di solito stampare i dati di questi file non
serve, ma con <code>urllib</code> puoi facilmente fare una copia di un
URL in un file locale sul disco rigido.</p>
<p>Lo schema consiste nell’aprire l’URL e usare <code>read</code> per
scaricare l’intero contenuto del documento in una variabile stringa
(<code>img</code>), poi scrivere queste informazioni in un file locale,
come segue:</p>
<pre class="python"><code>import urllib.request, urllib.parse, urllib.error

img = urllib.request.urlopen(&#39;http://data.pr4e.org/cover3.jpg&#39;).read()
fhand = open(&#39;cover3.jpg&#39;, &#39;wb&#39;)
fhand.write(img)
fhand.close()

# Code: https://www.py4e.com/code3/curl1.py</code></pre>
<p>Questo programma legge dalla rete tutti i dati in una volta sola e li
memorizza nella variabile <code>img</code>, nella memoria principale del
computer; poi apre il file <code>cover3.jpg</code> e scrive i dati sul
disco. L’argomento <code>wb</code> di <code>open()</code> apre un file
binario in sola scrittura. Il programma funzionerà se la dimensione del
file è minore di quella della memoria del computer.</p>
<p>Se però si tratta di un file audio o video di grandi dimensioni,
quando il computer esaurisce la memoria il programma potrebbe andare in
crash o almeno rallentare moltissimo. Per non esaurire la memoria,
recuperiamo i dati a blocchi (o buffer) e scriviamo ogni blocco sul
disco prima di recuperare il successivo. In questo modo il programma può
leggere file di qualsiasi dimensione senza consumare tutta la memoria
del computer.</p>
<pre class="python"><code>import urllib.request, urllib.parse, urllib.error

img = urllib.request.urlopen(&#39;http://data.pr4e.org/cover3.jpg&#39;)
fhand = open(&#39;cover3.jpg&#39;, &#39;wb&#39;)
size = 0
while True:
    info = img.read(100000)
    if len(info) &lt; 1: break
    size = size + len(info)
    fhand.write(info)

print(size, &#39;characters copied.&#39;)
fhand.close()

# Code: https://www.py4e.com/code3/curl2.py</code></pre>
<p>In questo esempio leggiamo solo 100.000 caratteri alla volta e li
scriviamo nel file <code>cover3.jpg</code> prima di recuperare dal web i
100.000 caratteri successivi.</p>
<p>Ecco come viene eseguito il programma:</p>
<pre><code>python curl2.py
230210 characters copied.</code></pre>
<h2 id="analizzare-lhtml-e-fare-lo-scraping-del-web">Analizzare l’HTML e
fare lo scraping del web</h2>
<p> </p>
<p>Uno degli usi comuni delle funzionalità di <code>urllib</code> in
Python è fare lo <em>scraping</em> del web. Fare web scraping significa
scrivere un programma che finge di essere un browser web e recupera
pagine, poi esamina i dati di quelle pagine alla ricerca di schemi.</p>
<p>Ad esempio, un motore di ricerca come Google esamina il sorgente di
una pagina web, ne estrae i link ad altre pagine, recupera quelle
pagine, ne estrae i link, e così via. Con questa tecnica Google, come
uno <em>spider</em>, si fa strada attraverso quasi tutte le pagine del
web.</p>
<p>Google usa anche la frequenza dei link che, dalle pagine che trova,
puntano a una determinata pagina: è una delle misure di quanto quella
pagina sia “importante” e di quanto in alto debba comparire nei
risultati di ricerca.</p>
<h2 id="analizzare-lhtml-con-le-espressioni-regolari">Analizzare l’HTML
con le espressioni regolari</h2>
<p>Un modo semplice per analizzare l’HTML è usare le espressioni
regolari per cercare ed estrarre ripetutamente le sottostringhe che
corrispondono a un determinato schema.</p>
<p>Ecco una semplice pagina web:</p>
<pre class="html"><code>&lt;h1&gt;The First Page&lt;/h1&gt;
&lt;p&gt;
If you like, you can switch to the
&lt;a href=&quot;http://www.dr-chuck.com/page2.htm&quot;&gt;
Second Page&lt;/a&gt;.
&lt;/p&gt;</code></pre>
<p>Possiamo costruire un’espressione regolare ben formata che individui
ed estragga i valori dei link dal testo qui sopra, in questo modo:</p>
<pre><code>href=&quot;http[s]?://.+?&quot;</code></pre>
<p>L’espressione regolare cerca le stringhe che iniziano con
<code>href="http://</code> o <code>href="https://</code>, seguite da uno
o più caratteri (<code>.+?</code>) e poi da un’altra virgoletta doppia.
Il punto interrogativo di <code>[s]?</code> indica di cercare la stringa
<code>http</code> seguita da zero o una <code>s</code>.</p>
<p>Il punto interrogativo aggiunto a <code>.+?</code> indica che la
corrispondenza va cercata in modo <em>non avido</em> (non-greedy) invece
che in modo <em>avido</em> (greedy). Una corrispondenza non avida cerca
la stringa corrispondente <em>più corta</em> possibile, mentre una
corrispondenza avida cerca quella <em>più lunga</em> possibile.</p>
<p> </p>
<p>Aggiungiamo all’espressione regolare delle parentesi tonde per
indicare quale parte della stringa trovata vogliamo estrarre, e
otteniamo il programma seguente:</p>
<p> </p>
<pre class="python"><code># Search for link values within URL input
import urllib.request, urllib.parse, urllib.error
import re
import ssl

# Ignore SSL certificate errors
ctx = ssl.create_default_context()
ctx.check_hostname = False
ctx.verify_mode = ssl.CERT_NONE

url = input(&#39;Enter - &#39;)
html = urllib.request.urlopen(url, context=ctx).read()
links = re.findall(b&#39;href=&quot;(http[s]?://.*?)&quot;&#39;, html)
for link in links:
    print(link.decode())

# Code: https://www.py4e.com/code3/urlregex.py</code></pre>
<p>La libreria <code>ssl</code> permette a questo programma di accedere
ai siti web che impongono rigorosamente HTTPS. Il metodo
<code>read</code> restituisce il codice sorgente HTML come oggetto bytes
invece di restituire un oggetto <code>HTTPResponse</code>. Il metodo
<code>findall</code> delle espressioni regolari ci darà una lista di
tutte le stringhe che corrispondono all’espressione regolare e
restituirà solo il testo del link tra le virgolette doppie.</p>
<p>Quando eseguiamo il programma e inseriamo un URL, otteniamo l’output
seguente:</p>
<pre><code>Enter - https://docs.python.org
https://docs.python.org/3/index.html
https://www.python.org/
https://docs.python.org/3.8/
https://docs.python.org/3.7/
https://docs.python.org/3.5/
https://docs.python.org/2.7/
https://www.python.org/doc/versions/
https://www.python.org/dev/peps/
https://wiki.python.org/moin/BeginnersGuide
https://wiki.python.org/moin/PythonBooks
https://www.python.org/doc/av/
https://www.python.org/
https://www.python.org/psf/donations/
http://sphinx.pocoo.org/</code></pre>
<p>Le espressioni regolari funzionano molto bene quando l’HTML è ben
formattato e prevedibile. Ma dato che in giro ci sono moltissime pagine
HTML “difettose”, una soluzione basata solo sulle espressioni regolari
potrebbe perdere alcuni link validi oppure ritrovarsi con dati
sbagliati.</p>
<p>Il problema si può risolvere usando una libreria robusta per
l’analisi dell’HTML.</p>
<h2 id="analizzare-lhtml-con-beautifulsoup">Analizzare l’HTML con
BeautifulSoup</h2>
<p>Anche se l’HTML somiglia a XML<a href="#fn2" class="footnote-ref"
id="fnref2" role="doc-noteref"><sup>2</sup></a> e alcune pagine sono
costruite con cura per essere XML, la maggior parte dell’HTML contiene
di solito errori che portano un parser XML a rifiutare l’intera pagina
HTML come malformata.</p>
<p>Esistono diverse librerie Python che possono aiutarti ad analizzare
l’HTML e a estrarre dati dalle pagine. Ognuna ha i suoi punti di forza e
di debolezza, e puoi sceglierne una in base alle tue esigenze.</p>
<p>Ad esempio, ci limiteremo ad analizzare un po’ di HTML in input e a
estrarne i link con la libreria <em>BeautifulSoup</em>. BeautifulSoup
tollera anche HTML pieno di difetti e ti permette comunque di estrarre
facilmente i dati che ti servono. Puoi scaricare e installare il codice
di BeautifulSoup da:</p>
<p><a href="https://pypi.python.org/pypi/beautifulsoup4"
class="uri">https://pypi.python.org/pypi/beautifulsoup4</a></p>
<p>Le informazioni su come installare BeautifulSoup con
<code>pip</code>, lo strumento del Python Package Index, sono
disponibili su:</p>
<p><a href="https://packaging.python.org/tutorials/installing-packages/"
class="uri">https://packaging.python.org/tutorials/installing-packages/</a></p>
<p>Useremo <code>urllib</code> per leggere la pagina e poi
<code>BeautifulSoup</code> per estrarre gli attributi <code>href</code>
dai <em>tag ancora</em> (anchor tag, <code>a</code>).</p>
<p> </p>
<pre class="python"><code># To run this, download the BeautifulSoup zip file
# http://www.py4e.com/code3/bs4.zip
# or pip install beautifulsoup4 to ensure you have the latest version
# and unzip it in the same directory as this file

import urllib.request, urllib.parse, urllib.error
from bs4 import BeautifulSoup
import ssl # defaults to certificate verification and most secure protocol (now TLS)

# Ignore SSL/TLS certificate errors
ctx = ssl.create_default_context()
ctx.check_hostname = False
ctx.verify_mode = ssl.CERT_NONE

url = input(&#39;Enter - &#39;)
html = urllib.request.urlopen(url, context=ctx).read()
soup = BeautifulSoup(html, &#39;html.parser&#39;)

# Retrieve all of the anchor tags
tags = soup(&#39;a&#39;)
for tag in tags:
    print(tag.get(&#39;href&#39;, None))

# Code: https://www.py4e.com/code3/urllinks.py</code></pre>
<p>Il programma chiede un indirizzo web, poi apre la pagina web, ne
legge i dati e li passa al parser di BeautifulSoup, quindi recupera
tutti i tag ancora e stampa l’attributo <code>href</code> di ogni
tag.</p>
<p>Durante l’esecuzione, il programma produce l’output seguente:</p>
<pre><code>Enter - https://docs.python.org
genindex.html
py-modindex.html
https://www.python.org/
#
whatsnew/3.6.html
whatsnew/index.html
tutorial/index.html
library/index.html
reference/index.html
using/index.html
howto/index.html
installing/index.html
distributing/index.html
extending/index.html
c-api/index.html
faq/index.html
py-modindex.html
genindex.html
glossary.html
search.html
contents.html
bugs.html
about.html
license.html
copyright.html
download.html
https://docs.python.org/3.8/
https://docs.python.org/3.7/
https://docs.python.org/3.5/
https://docs.python.org/2.7/
https://www.python.org/doc/versions/
https://www.python.org/dev/peps/
https://wiki.python.org/moin/BeginnersGuide
https://wiki.python.org/moin/PythonBooks
https://www.python.org/doc/av/
genindex.html
py-modindex.html
https://www.python.org/
#
copyright.html
https://www.python.org/psf/donations/
bugs.html
http://sphinx.pocoo.org/</code></pre>
<p>Questo elenco è molto più lungo perché alcuni tag ancora dell’HTML
contengono percorsi relativi (ad esempio
<code>tutorial/index.html</code>) o riferimenti interni alla pagina (ad
esempio <code>#</code>) che non includono <code>http://</code> o
<code>https://</code>, richiesti invece dalla nostra espressione
regolare.</p>
<p>Puoi usare BeautifulSoup anche per estrarre le varie parti di ogni
tag:</p>
<pre class="python"><code># To run this, download the BeautifulSoup zip file
# http://www.py4e.com/code3/bs4.zip
# and unzip it in the same directory as this file

from urllib.request import urlopen
from bs4 import BeautifulSoup
import ssl

# Ignore SSL certificate errors
ctx = ssl.create_default_context()
ctx.check_hostname = False
ctx.verify_mode = ssl.CERT_NONE

url = input(&#39;Enter - &#39;)
html = urlopen(url, context=ctx).read()
soup = BeautifulSoup(html, &quot;html.parser&quot;)

# Retrieve all of the anchor tags
tags = soup(&#39;a&#39;)
for tag in tags:
    # Look at the parts of a tag
    print(&#39;TAG:&#39;, tag)
    print(&#39;URL:&#39;, tag.get(&#39;href&#39;, None))
    print(&#39;Contents:&#39;, tag.contents[0])
    print(&#39;Attrs:&#39;, tag.attrs)

# Code: https://www.py4e.com/code3/urllink2.py</code></pre>
<pre><code>python urllink2.py
Enter - http://www.dr-chuck.com/page1.htm
TAG: &lt;a href=&quot;http://www.dr-chuck.com/page2.htm&quot;&gt;
Second Page&lt;/a&gt;
URL: http://www.dr-chuck.com/page2.htm
Content: [&#39;\nSecond Page&#39;]
Attrs: [(&#39;href&#39;, &#39;http://www.dr-chuck.com/page2.htm&#39;)]</code></pre>
<p><code>html.parser</code> è il parser HTML incluso nella libreria
standard di Python 3. Le informazioni sugli altri parser HTML sono
disponibili su:</p>
<p><a
href="http://www.crummy.com/software/BeautifulSoup/bs4/doc/#installing-a-parser"
class="uri">http://www.crummy.com/software/BeautifulSoup/bs4/doc/#installing-a-parser</a></p>
<p>Questi esempi cominciano appena a mostrare la potenza di
BeautifulSoup quando si tratta di analizzare l’HTML.</p>
<h2 id="sezione-bonus-per-gli-utenti-unix-linux">Sezione bonus per gli
utenti Unix / Linux</h2>
<p>Se hai un computer Linux, Unix o Macintosh, probabilmente il sistema
operativo include dei comandi che recuperano sia file di solo testo sia
file binari con i protocolli HTTP o FTP (File Transfer Protocol). Uno di
questi comandi è <code>curl</code>:</p>
<pre class="bash"><code>$ curl -O http://www.py4e.com/cover.jpg</code></pre>
<p>Il comando <code>curl</code> è l’abbreviazione di “copy URL”, e per
questo i due esempi visti prima per recuperare file binari con
<code>urllib</code> hanno i nomi ingegnosi di <code>curl1.py</code> e
<code>curl2.py</code> su <a
href="http://www.py4e.com/code3">www.py4e.com/code3</a>: svolgono una
funzione simile a quella del comando <code>curl</code>. C’è anche un
programma di esempio, <code>curl3.py</code>, che svolge questo compito
in modo un po’ più efficace, nel caso tu voglia davvero usare questo
schema in un programma che stai scrivendo.</p>
<p>Un secondo comando che funziona in modo molto simile è
<code>wget</code>:</p>
<pre class="bash"><code>$ wget http://www.py4e.com/cover.jpg</code></pre>
<p>Tutti e due i comandi rendono semplice recuperare pagine web e file
remoti.</p>
<h2 id="glossario">Glossario</h2>
<dl>
<dt><strong>BeautifulSoup</strong></dt>
<dd>
Una libreria Python per analizzare documenti HTML ed estrarne i dati,
che compensa la maggior parte delle imperfezioni dell’HTML che i browser
di solito ignorano. Puoi scaricare il codice di BeautifulSoup da <a
href="http://www.crummy.com">www.crummy.com</a>.
</dd>
<dt><strong>Porta</strong></dt>
<dd>
Un numero che in genere indica quale applicazione stai contattando
quando apri una connessione socket con un server. Ad esempio, il
traffico web usa di solito la porta 80, mentre il traffico email usa la
porta 25.
</dd>
<dt><strong>Scraping</strong></dt>
<dd>
L’attività di un programma che finge di essere un browser web, recupera
una pagina web e poi ne esamina il contenuto. Spesso i programmi seguono
i link di una pagina per trovare la pagina successiva, così da poter
percorrere una rete di pagine o un social network.
</dd>
<dt><strong>Socket</strong></dt>
<dd>
Una connessione di rete tra due applicazioni, attraverso la quale le
applicazioni possono inviare e ricevere dati in entrambe le direzioni.
</dd>
<dt><strong>Spider</strong></dt>
<dd>
L’attività di un motore di ricerca web che recupera una pagina, poi
tutte le pagine a cui questa rimanda, e così via, finché non ha raccolto
quasi tutte le pagine di Internet, che usa per costruire il proprio
indice di ricerca.
</dd>
</dl>
<h2 id="esercizi">Esercizi</h2>
<p><strong>Esercizio 1:</strong> Modifica il programma con i socket
<code>socket1.py</code> in modo che chieda all’utente l’URL e possa così
leggere qualsiasi pagina web.</p>
<p>Puoi usare <code>split('/')</code> per scomporre l’URL nelle sue
parti, così da estrarre il nome dell’host per la chiamata
<code>connect</code> del socket. Aggiungi il controllo degli errori con
<code>try</code> ed <code>except</code> per gestire il caso in cui
l’utente inserisca un URL formattato male o inesistente.</p>
<p><strong>Esercizio 2:</strong> Modifica il tuo programma con i socket
in modo che conti il numero di caratteri ricevuti e smetta di
visualizzare il testo dopo averne mostrati 3000. Il programma dovrebbe
recuperare l’intero documento, contare il numero totale di caratteri e
visualizzarne il conteggio alla fine del documento.</p>
<p><strong>Esercizio 3:</strong> Usa <code>urllib</code> per rifare
l’esercizio precedente: (1) recuperare il documento da un URL, (2)
visualizzare fino a 3000 caratteri e (3) contare il numero complessivo
di caratteri del documento. In questo esercizio non preoccuparti delle
intestazioni: mostra semplicemente i primi 3000 caratteri del contenuto
del documento.</p>
<p><strong>Esercizio 4:</strong> Modifica il programma
<code>urllinks.py</code> in modo che estragga e conti i tag di paragrafo
(<code>p</code>) del documento HTML recuperato e visualizzi come output
del programma il numero dei paragrafi. Non visualizzare il testo dei
paragrafi: contali e basta. Testa il programma su diverse pagine web
piccole e anche su alcune pagine web più grandi.</p>
<p><strong>Esercizio 5:</strong> (Avanzato) Modifica il programma con i
socket in modo che mostri i dati solo dopo aver ricevuto le intestazioni
e una riga vuota. Ricorda che <code>recv</code> riceve caratteri
(newline compresi), non righe.</p>
<section id="footnotes" class="footnotes footnotes-end-of-document"
role="doc-endnotes">
<hr />
<ol>
<li id="fn1"><p>Se vuoi saperne di più sui socket, sui protocolli o su
come si sviluppano i server web, puoi esplorare il corso su
https://www.dj4e.com.<a href="#fnref1" class="footnote-back"
role="doc-backlink">↩︎</a></p></li>
<li id="fn2"><p>Il formato XML è descritto nel prossimo capitolo.<a
href="#fnref2" class="footnote-back" role="doc-backlink">↩︎</a></p></li>
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
