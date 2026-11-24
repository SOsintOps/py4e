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
  <title>Programmazione orientata agli oggetti</title>
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
<h1 id="programmazione-orientata-agli-oggetti">Programmazione orientata
agli oggetti</h1>
<h2 id="gestire-programmi-più-grandi">Gestire programmi più grandi</h2>
<p>All’inizio di questo libro abbiamo individuato quattro schemi di base
della programmazione, che usiamo per costruire i programmi:</p>
<ul>
<li>codice sequenziale;</li>
<li>codice condizionale (istruzioni <code>if</code>);</li>
<li>codice ripetitivo (cicli);</li>
<li>memorizzare e riutilizzare (funzioni).</li>
</ul>
<p>Nei capitoli successivi abbiamo esplorato le variabili semplici e
anche le strutture dati di tipo collezione, come le liste, le tuple e i
dizionari.</p>
<p>Quando costruiamo i programmi, progettiamo strutture dati e scriviamo
il codice che le manipola. Ci sono molti modi di scrivere un programma e
a questo punto probabilmente hai scritto alcuni programmi “non proprio
eleganti” e altri “più eleganti”. Per quanto piccoli possano essere i
tuoi programmi, cominci a vedere che nello scrivere codice c’è un po’ di
arte e di estetica.</p>
<p>Quando i programmi arrivano a milioni di righe, diventa sempre più
importante scrivere codice facile da capire. Se lavori a un programma di
un milione di righe, non puoi mai tenerlo tutto a mente nello stesso
momento. Ci servono modi per spezzare i programmi grandi in tanti pezzi
più piccoli, così da avere meno cose da esaminare quando risolviamo un
problema, correggiamo un bug o aggiungiamo una nuova funzionalità.</p>
<p>In un certo senso, la programmazione orientata agli oggetti è un modo
di organizzare il codice così da poterti concentrare su 50 righe e
capirle, ignorando per il momento le altre 999.950.</p>
<h2 id="per-cominciare">Per cominciare</h2>
<p>Come per molti aspetti della programmazione, è necessario imparare i
concetti della programmazione orientata agli oggetti prima di poterli
usare in modo efficace. Dovresti considerare questo capitolo un modo per
imparare alcuni termini e concetti e per provare qualche esempio
semplice, così da gettare le basi per ciò che imparerai in futuro.</p>
<p>L’obiettivo principale di questo capitolo è capire a grandi linee
come si costruiscono gli oggetti, come funzionano e, soprattutto, come
sfruttiamo le capacità degli oggetti che Python e le librerie Python ci
mettono a disposizione.</p>
<h2 id="usare-gli-oggetti">Usare gli oggetti</h2>
<p>In realtà, in questo libro abbiamo sempre usato gli oggetti. Python
ci fornisce molti oggetti built-in. Ecco un po’ di codice semplice, in
cui le prime righe dovrebbero sembrarti molto facili e naturali.</p>
<pre class="python"><code>stuff = list()
stuff.append(&#39;python&#39;)
stuff.append(&#39;chuck&#39;)
stuff.sort()
print (stuff[0])
print (stuff.__getitem__(0))
print (list.__getitem__(stuff,0))

# Code: https://www.py4e.com/code3/objects.py</code></pre>
<p>Invece di concentrarci sul risultato di queste righe, vediamo cosa
succede davvero dal punto di vista della programmazione orientata agli
oggetti. Non preoccuparti se alla prima lettura i paragrafi seguenti ti
sembrano privi di senso, perché non abbiamo ancora definito tutti questi
termini.</p>
<p>La prima riga <em>costruisce</em> un oggetto di tipo
<code>list</code>, la seconda e la terza riga <em>chiamano</em> il
<em>metodo</em> <code>append()</code>, la quarta chiama il metodo
<code>sort()</code> e la quinta <em>recupera</em> l’elemento in
posizione 0.</p>
<p>La sesta riga chiama il metodo <code>__getitem__()</code> della lista
<code>stuff</code> con il parametro zero.</p>
<pre class="python"><code>print (stuff.__getitem__(0))</code></pre>
<p>La settima riga è un modo ancora più prolisso di recuperare
l’elemento in posizione 0 della lista.</p>
<pre class="python"><code>print (list.__getitem__(stuff,0))</code></pre>
<p>In questo codice chiamiamo il metodo <code>__getitem__</code> della
classe <code>list</code> e gli <em>passiamo</em> come parametri la lista
e l’elemento che vogliamo recuperare dalla lista.</p>
<p>Le ultime tre righe del programma sono equivalenti, ma è più comodo
usare semplicemente la sintassi delle parentesi quadre per cercare un
elemento in una data posizione di una lista.</p>
<p>Possiamo dare un’occhiata alle capacità di un oggetto esaminando
l’output della funzione <code>dir()</code>:</p>
<pre><code>&gt;&gt;&gt; stuff = list()
&gt;&gt;&gt; dir(stuff)
[&#39;__add__&#39;, &#39;__class__&#39;, &#39;__contains__&#39;, &#39;__delattr__&#39;,
&#39;__delitem__&#39;, &#39;__dir__&#39;, &#39;__doc__&#39;, &#39;__eq__&#39;,
&#39;__format__&#39;, &#39;__ge__&#39;, &#39;__getattribute__&#39;, &#39;__getitem__&#39;,
&#39;__gt__&#39;, &#39;__hash__&#39;, &#39;__iadd__&#39;, &#39;__imul__&#39;, &#39;__init__&#39;,
&#39;__iter__&#39;, &#39;__le__&#39;, &#39;__len__&#39;, &#39;__lt__&#39;, &#39;__mul__&#39;,
&#39;__ne__&#39;, &#39;__new__&#39;, &#39;__reduce__&#39;, &#39;__reduce_ex__&#39;,
&#39;__repr__&#39;, &#39;__reversed__&#39;, &#39;__rmul__&#39;, &#39;__setattr__&#39;,
&#39;__setitem__&#39;, &#39;__sizeof__&#39;, &#39;__str__&#39;, &#39;__subclasshook__&#39;,
&#39;append&#39;, &#39;clear&#39;, &#39;copy&#39;, &#39;count&#39;, &#39;extend&#39;, &#39;index&#39;,
&#39;insert&#39;, &#39;pop&#39;, &#39;remove&#39;, &#39;reverse&#39;, &#39;sort&#39;]
&gt;&gt;&gt;</code></pre>
<p>Il resto del capitolo definirà tutti i termini usati qui sopra,
quindi, quando avrai finito il capitolo, ricordati di tornare qui e di
rileggere i paragrafi precedenti per verificare di averli capiti.</p>
<h2 id="partire-dai-programmi">Partire dai programmi</h2>
<p>Nella sua forma più elementare, un programma accetta un input, svolge
un’elaborazione e produce un output. Il programma che converte i piani
dell’ascensore è un esempio molto breve, ma completo, che mostra tutti e
tre questi passaggi.</p>
<pre class="python"><code>usf = input(&#39;Enter the US Floor Number: &#39;)
wf = int(usf) - 1
print(&#39;Non-US Floor Number is&#39;,wf)

# Code: https://www.py4e.com/code3/elev.py</code></pre>
<p>Se riflettiamo un po’ di più su questo programma, distinguiamo il
“mondo esterno” e il programma. L’input e l’output sono i punti in cui
il programma interagisce con il mondo esterno. All’interno del programma
ci sono il codice e i dati che servono a svolgere il compito per cui il
programma è stato progettato.</p>
<figure>
<img src="../images/program.svg" alt="Un programma" style="height: 1.20in;"/>
<figcaption>
Un programma
</figcaption>
</figure>
<p>Un modo di vedere la programmazione orientata agli oggetti è pensare
che separi il programma in più “zone”. Ogni zona contiene del codice e
dei dati (come un programma) e ha interazioni ben definite con il mondo
esterno e con le altre zone del programma.</p>
<p>Se torniamo all’applicazione che estraeva i link, in cui abbiamo
usato la libreria BeautifulSoup, vediamo un programma costruito
collegando tra loro oggetti diversi per svolgere un compito:</p>
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
<p>Leggiamo l’URL in una stringa e poi la passiamo a <code>urllib</code>
per recuperare i dati dal web. La libreria <code>urllib</code> usa la
libreria <code>socket</code> per aprire la connessione di rete vera e
propria con cui recupera i dati. Prendiamo la stringa che
<code>urllib</code> restituisce e la consegniamo a BeautifulSoup perché
la analizzi. BeautifulSoup si serve dell’oggetto
<code>html.parser</code><a href="#fn1" class="footnote-ref" id="fnref1"
role="doc-noteref"><sup>1</sup></a> e restituisce un oggetto. Chiamiamo
l’oggetto restituito come se fosse una funzione, <code>soup('a')</code>,
e otteniamo una lista di oggetti tag. Scorriamo i tag e su ciascuno
chiamiamo il metodo <code>get()</code> per stampare l’attributo
<code>href</code>.</p>
<p>Possiamo rappresentare con un disegno questo programma e il modo in
cui gli oggetti collaborano.</p>
<figure>
<img src="../images/program-oo.svg" alt="Un programma come rete di oggetti" style="height: 1.50in;"/>
<figcaption>
Un programma come rete di oggetti
</figcaption>
</figure>
<p>Qui l’importante non è capire alla perfezione come funziona questo
programma, ma vedere come costruiamo una rete di oggetti che
interagiscono e come orchestriamo il movimento delle informazioni tra
gli oggetti per creare un programma. È anche importante notare che,
quando hai visto quel programma qualche capitolo fa, potevi capire fino
in fondo cosa succedeva senza nemmeno renderti conto che il programma
stava “orchestrando il movimento dei dati tra gli oggetti”. Erano solo
righe di codice che portavano a termine il lavoro.</p>
<h2 id="suddividere-un-problema">Suddividere un problema</h2>
<p>Uno dei vantaggi dell’approccio orientato agli oggetti è che può
nascondere la complessità. Ad esempio, anche se dobbiamo sapere come
usare il codice di <code>urllib</code> e di BeautifulSoup, non abbiamo
bisogno di sapere come funzionano internamente quelle librerie. Così
possiamo concentrarci sulla parte del problema che dobbiamo risolvere e
ignorare le altre parti del programma.</p>
<figure>
<img src="../images/program-oo-code.svg" alt="Ignorare i dettagli quando si usa un oggetto" style="height: 1.50in;"/>
<figcaption>
Ignorare i dettagli quando si usa un oggetto
</figcaption>
</figure>
<p>Questa possibilità di concentrarsi soltanto sulla parte del programma
che ci interessa e di ignorare il resto è utile anche agli sviluppatori
degli oggetti che usiamo. Ad esempio, i programmatori che sviluppano
BeautifulSoup non hanno bisogno di sapere né di chiedersi come
recuperiamo la pagina HTML, quali parti vogliamo leggere o cosa pensiamo
di fare con i dati che estraiamo dalla pagina web.</p>
<figure>
<img src="../images/program-oo-bs4.svg" alt="Ignorare i dettagli quando si costruisce un oggetto" style="height: 1.50in;"/>
<figcaption>
Ignorare i dettagli quando si costruisce un oggetto
</figcaption>
</figure>
<h2 id="il-nostro-primo-oggetto-python">Il nostro primo oggetto
Python</h2>
<p>A livello elementare, un oggetto è semplicemente un insieme di codice
e di strutture dati più piccolo di un programma intero. Definire una
funzione ci permette di memorizzare un po’ di codice, di dargli un nome
e di invocarlo poi con il nome della funzione.</p>
<p>Un oggetto può contenere diverse funzioni (che chiamiamo
<em>metodi</em>) e anche i dati usati da quelle funzioni. Chiamiamo
<em>attributi</em> i dati che fanno parte dell’oggetto.</p>
<p>Usiamo la parola chiave <code>class</code> per definire i dati e il
codice che costituiranno ogni oggetto. La parola chiave
<code>class</code> è seguita dal nome della classe e apre un blocco di
codice indentato, in cui inseriamo gli attributi (dati) e i metodi
(codice).</p>
<pre class="python"><code>class PartyAnimal:

   def __init__(self):
     self.x = 0

   def party(self) :
     self.x = self.x + 1
     print(&quot;So far&quot;,self.x)

an = PartyAnimal()
an.party()
an.party()
an.party()

# Code: https://www.py4e.com/code3/party2.py</code></pre>
<p>Ogni metodo ha l’aspetto di una funzione: inizia con la parola chiave
<code>def</code> ed è formato da un blocco di codice indentato.</p>
<p>Il primo è un metodo con un nome speciale, <code>__init__()</code>.
Questo metodo viene chiamato per impostare i valori iniziali dei dati
che vogliamo memorizzare nell’oggetto. In questa classe allochiamo
l’attributo <code>x</code> con la notazione puntata e lo inizializziamo
a zero.</p>
<pre class="python"><code>    self.x = 0</code></pre>
<p>L’altro metodo si chiama <code>party</code>. Tutti i metodi hanno un
primo parametro speciale, che per convenzione chiamiamo
<code>self</code>. Questo parametro ci dà accesso all’istanza
dell’oggetto, così possiamo impostare gli attributi e chiamare i metodi
con la notazione puntata.</p>
<p>Come la parola chiave <code>def</code> non fa eseguire il codice
della funzione, così la parola chiave <code>class</code> non crea un
oggetto. La parola chiave <code>class</code> definisce invece un
modello, che indica quali dati e quale codice saranno contenuti in ogni
oggetto di tipo <code>PartyAnimal</code>. La classe è come uno stampino
per biscotti e gli oggetti creati con la classe sono i biscotti<a
href="#fn2" class="footnote-ref" id="fnref2"
role="doc-noteref"><sup>2</sup></a>. Non metti la glassa sullo stampino;
la metti sui biscotti, e su ogni biscotto puoi metterne una diversa.</p>
<figure>
<img src="../photos/cookie_cutter_flickr_Didriks.png" alt="Una classe e due oggetti" style="height: 2.0in;"/>
<figcaption>
Una classe e due oggetti
</figcaption>
</figure>
<p>Se proseguiamo nel programma di esempio, troviamo la prima riga di
codice eseguibile:</p>
<pre class="python"><code>an = PartyAnimal()</code></pre>
<p> </p>
<p>È qui che diciamo a Python di costruire (cioè creare) un
<em>oggetto</em>, o <em>istanza</em>, della classe
<code>PartyAnimal</code>. Sembra una chiamata di funzione alla classe
stessa. Python costruisce l’oggetto con i dati e i metodi giusti e lo
restituisce; l’oggetto viene poi assegnato alla variabile
<code>an</code>. In un certo senso è abbastanza simile alla riga
seguente, che usiamo fin dall’inizio:</p>
<pre class="python"><code>counts = dict()</code></pre>
<p>Qui diciamo a Python di costruire un oggetto con il modello
<code>dict</code> (già presente in Python), di restituire l’istanza di
dizionario e di assegnarla alla variabile <code>counts</code>.</p>
<p>Quando si usa la classe <code>PartyAnimal</code> per costruire un
oggetto, la variabile <code>an</code> serve a puntare a quell’oggetto.
Usiamo <code>an</code> per accedere al codice e ai dati di quell’istanza
della classe <code>PartyAnimal</code>.</p>
<p>Ogni oggetto/istanza <code>PartyAnimal</code> contiene al suo interno
una variabile <code>x</code> e un metodo/funzione di nome
<code>party</code>. Chiamiamo il metodo <code>party</code> in questa
riga:</p>
<pre class="python"><code>an.party()</code></pre>
<p>Quando si chiama il metodo <code>party</code>, il primo parametro
(che per convenzione chiamiamo <code>self</code>) punta all’istanza
dell’oggetto <code>PartyAnimal</code> da cui viene chiamato
<code>party</code>. All’interno del metodo <code>party</code> troviamo
la riga:</p>
<pre class="python"><code>self.x = self.x + 1</code></pre>
<p>Questa sintassi con l’operatore <em>punto</em> significa “la
<code>x</code> dentro <code>self</code>”. Ogni volta che viene chiamato
<code>party()</code>, il valore interno di <code>x</code> viene
incrementato di 1 e poi stampato.</p>
<p>La riga seguente è un altro modo di chiamare il metodo
<code>party</code> dell’oggetto <code>an</code>:</p>
<pre class="python"><code>PartyAnimal.party(an)</code></pre>
<p>In questa variante accediamo al codice che sta all’interno della
classe e passiamo esplicitamente il puntatore all’oggetto,
<code>an</code>, come primo parametro (cioè come <code>self</code>
all’interno del metodo). Puoi pensare ad <code>an.party()</code> come a
un’abbreviazione della riga precedente.</p>
<p>Quando viene eseguito, il programma produce l’output seguente:</p>
<pre><code>So far 1
So far 2
So far 3
So far 4</code></pre>
<p>L’oggetto viene costruito e il metodo <code>party</code> viene
chiamato tre volte; ogni chiamata incrementa e stampa il valore di
<code>x</code> all’interno dell’oggetto <code>an</code>.</p>
<h2 id="le-classi-come-tipi">Le classi come tipi</h2>
<p> </p>
<p>Come abbiamo visto, in Python tutte le variabili hanno un tipo.
Possiamo usare la funzione built-in <code>dir</code> per esaminare le
capacità di una variabile. Possiamo usare <code>type</code> e
<code>dir</code> anche con le classi che creiamo.</p>
<pre class="python"><code>class PartyAnimal:

   def __init__(self):
     self.x = 0

   def party(self) :
     self.x = self.x + 1
     print(&quot;So far&quot;,self.x)

an = PartyAnimal()
print (&quot;Type&quot;, type(an))
print (&quot;Dir &quot;, dir(an))
print (&quot;Type&quot;, type(an.x))
print (&quot;Type&quot;, type(an.party))

# Code: https://www.py4e.com/code3/party3.py</code></pre>
<p>Quando viene eseguito, questo programma produce l’output
seguente:</p>
<pre><code>Type &lt;class &#39;__main__.PartyAnimal&#39;&gt;
Dir  [&#39;__class__&#39;, &#39;__delattr__&#39;, ...
&#39;__sizeof__&#39;, &#39;__str__&#39;, &#39;__subclasshook__&#39;,
&#39;__weakref__&#39;, &#39;party&#39;, &#39;x&#39;]
Type &lt;class &#39;int&#39;&gt;
Type &lt;class &#39;method&#39;&gt;</code></pre>
<p>Puoi vedere che con la parola chiave <code>class</code> abbiamo
creato un nuovo tipo. Dall’output di <code>dir</code> noti che
nell’oggetto sono disponibili sia l’attributo intero <code>x</code> sia
il metodo <code>party</code>.</p>
<h2 id="ciclo-di-vita-di-un-oggetto">Ciclo di vita di un oggetto</h2>
<p> </p>
<p>Negli esempi precedenti definiamo una classe (il modello), la usiamo
per creare un’istanza della classe (l’oggetto) e poi usiamo l’istanza.
Quando il programma finisce, tutte le variabili vengono scartate. Di
solito non pensiamo molto alla creazione e alla distruzione delle
variabili, ma spesso, quando gli oggetti diventano più complessi,
dobbiamo fare qualcosa all’interno dell’oggetto per preparare tutto
quando l’oggetto viene costruito e, magari, per fare pulizia quando
viene scartato.</p>
<p>Se vogliamo che l’oggetto si accorga dei momenti della costruzione e
della distruzione, gli aggiungiamo dei metodi con un nome speciale:</p>
<pre class="python"><code>class PartyAnimal:

   def __init__(self):
     self.x = 0
     print(&#39;I am constructed&#39;)

   def party(self) :
     self.x = self.x + 1
     print(&#39;So far&#39;,self.x)

   def __del__(self):
     print(&#39;I am destructed&#39;, self.x)

an = PartyAnimal()
an.party()
an.party()
an = 42
print(&#39;an contains&#39;,an)

# Code: https://www.py4e.com/code3/party4.py</code></pre>
<p>Quando viene eseguito, questo programma produce l’output
seguente:</p>
<pre><code>I am constructed
So far 1
So far 2
I am destructed 2
an contains 42</code></pre>
<p>Mentre costruisce l’oggetto, Python chiama il metodo
<code>__init__</code> per darci la possibilità di impostare alcuni
valori predefiniti o iniziali dell’oggetto. Quando Python incontra la
riga:</p>
<pre><code>an = 42</code></pre>
<p>in realtà “butta via l’oggetto”, così da poter riutilizzare la
variabile <code>an</code> per memorizzare il valore <code>42</code>.
Proprio nel momento in cui l’oggetto <code>an</code> viene “distrutto”,
viene chiamato il codice del distruttore (<code>__del__</code>). Non
possiamo impedire che la variabile venga distrutta, ma possiamo fare
tutta la pulizia necessaria subito prima che l’oggetto smetta di
esistere.</p>
<p>Quando si sviluppano oggetti, capita molto spesso di aggiungere a un
oggetto un costruttore che ne imposti i valori iniziali. È relativamente
raro che a un oggetto serva un distruttore.</p>
<h2 id="più-istanze">Più istanze</h2>
<p>Finora abbiamo definito una classe, costruito un solo oggetto, lo
abbiamo usato e poi lo abbiamo buttato via. Tuttavia la vera potenza
della programmazione orientata agli oggetti si manifesta quando
costruiamo più istanze della classe.</p>
<p>Quando costruiamo più oggetti a partire dalla classe, potremmo voler
impostare valori iniziali diversi per ciascuno. Possiamo passare dei
dati ai costruttori per dare a ogni oggetto un valore iniziale
diverso:</p>
<pre class="python"><code>class PartyAnimal:

   def __init__(self, nam):
     self.x = 0
     self.name = nam
     print(self.name,&#39;constructed&#39;)

   def party(self) :
     self.x = self.x + 1
     print(self.name,&#39;party count&#39;,self.x)

s = PartyAnimal(&#39;Sally&#39;)
s.party()
j = PartyAnimal(&#39;Jim&#39;)

j.party()
s.party()

# Code: https://www.py4e.com/code3/party5.py</code></pre>
<p>Il costruttore ha sia un parametro <code>self</code>, che punta
all’istanza dell’oggetto, sia altri parametri, che gli vengono passati
mentre l’oggetto viene costruito:</p>
<pre><code>s = PartyAnimal(&#39;Sally&#39;)</code></pre>
<p>All’interno del costruttore, la seconda riga copia il parametro
passato (<code>nam</code>) nell’attributo <code>name</code> dell’istanza
dell’oggetto.</p>
<pre><code>self.name = nam</code></pre>
<p>L’output del programma mostra che gli oggetti (<code>s</code> e
<code>j</code>) contengono ciascuno le proprie copie indipendenti di
<code>x</code> e di <code>name</code>:</p>
<pre><code>Sally constructed
Sally party count 1
Jim constructed
Jim party count 1
Sally party count 2</code></pre>
<h2 id="ereditarietà">Ereditarietà</h2>
<p> Un’altra caratteristica potente della programmazione orientata agli
oggetti è la possibilità di creare una nuova classe estendendone una
esistente. Quando estendiamo una classe, chiamiamo la classe originale
<em>classe padre</em> (parent class) e la nuova classe <em>classe
figlia</em> (child class).</p>
<p>Per questo esempio spostiamo la classe <code>PartyAnimal</code> in un
file a sé. Poi possiamo “importare” la classe <code>PartyAnimal</code>
in un nuovo file ed estenderla, come segue:</p>
<pre class="python"><code>from party import PartyAnimal

class CricketFan(PartyAnimal):

   def __init__(self, nam) :
       super().__init__(nam)
       self.points = 0

   def six(self):
      self.points = self.points + 6
      self.party()
      print(self.name,&quot;points&quot;,self.points)

s = PartyAnimal(&quot;Sally&quot;)
s.party()
j = CricketFan(&quot;Jim&quot;)
j.party()
j.six()
print(dir(j))

# Code: https://www.py4e.com/code3/party6.py</code></pre>
<p>Quando definiamo la classe <code>CricketFan</code>, indichiamo che
estende la classe <code>PartyAnimal</code>. Ciò significa che la classe
<code>CricketFan</code> <em>eredita</em> tutte le variabili
(<code>x</code>) e i metodi (<code>party</code>) della classe
<code>PartyAnimal</code>. Ad esempio, all’interno del metodo
<code>six</code> della classe <code>CricketFan</code> chiamiamo il
metodo <code>party</code> della classe <code>PartyAnimal</code>.</p>
<p>Nel metodo <code>__init__()</code> della classe
<code>CricketFan</code> usiamo una sintassi speciale per essere sicuri
di chiamare il metodo <code>__init__()</code> di
<code>PartyAnimal</code>, così che venga fatta tutta la preparazione che
serve a <code>PartyAnimal</code>, oltre a quella necessaria per le
estensioni di <code>CricketFan</code>.</p>
<pre class="python"><code>   def __init__(self, nam) :
       super().__init__(nam)
       self.points = 0</code></pre>
<p> La sintassi <code>super()</code> dice a Python di chiamare il metodo
<code>__init__</code> della classe che estendiamo.
<code>PartyAnimal</code> è la superclasse (o classe padre) e
<code>CricketFan</code> è la sottoclasse (o classe figlia).</p>
<p>Durante l’esecuzione del programma creiamo <code>s</code> e
<code>j</code> come istanze indipendenti di <code>PartyAnimal</code> e
di <code>CricketFan</code>. L’oggetto <code>j</code> ha delle capacità
in più rispetto all’oggetto <code>s</code>.</p>
<pre><code>Sally constructed
Sally party count 1
Jim constructed
Jim party count 1
Jim party count 2
Jim points 6
[&#39;__class__&#39;, &#39;__delattr__&#39;, ... &#39;__weakref__&#39;,
&#39;name&#39;, &#39;party&#39;, &#39;points&#39;, &#39;six&#39;, &#39;x&#39;]</code></pre>
<p>Nell’output di <code>dir</code> per l’oggetto <code>j</code> (istanza
della classe <code>CricketFan</code>) vediamo che ha gli attributi e i
metodi della classe padre e anche quelli aggiunti quando la classe è
stata estesa per creare la classe <code>CricketFan</code>.</p>
<h2 id="riepilogo">Riepilogo</h2>
<p>Questa è un’introduzione molto rapida alla programmazione orientata
agli oggetti, che si concentra soprattutto sulla terminologia e sulla
sintassi per definire e usare gli oggetti. Riesaminiamo velocemente il
codice che abbiamo visto all’inizio del capitolo. A questo punto
dovresti capire fino in fondo cosa succede.</p>
<pre class="python"><code>stuff = list()
stuff.append(&#39;python&#39;)
stuff.append(&#39;chuck&#39;)
stuff.sort()
print (stuff[0])
print (stuff.__getitem__(0))
print (list.__getitem__(stuff,0))

# Code: https://www.py4e.com/code3/objects.py</code></pre>
<p>La prima riga costruisce un <em>oggetto</em> <code>list</code>.
Quando crea l’oggetto <code>list</code>, Python chiama il metodo
<em>costruttore</em> (di nome <code>__init__</code>) per impostare gli
attributi dati interni che verranno usati per memorizzare i dati della
lista. Non abbiamo passato nessun parametro al <em>costruttore</em>.
Quando il costruttore termina, usiamo la variabile <code>stuff</code>
per puntare all’istanza della classe <code>list</code> che ci viene
restituita.</p>
<p>La seconda e la terza riga chiamano il metodo <code>append</code> con
un parametro, per aggiungere un nuovo elemento in fondo alla lista
aggiornando gli attributi all’interno di <code>stuff</code>. Poi, nella
quarta riga, chiamiamo il metodo <code>sort</code> senza parametri per
ordinare i dati all’interno dell’oggetto <code>stuff</code>.</p>
<p>Poi stampiamo il primo elemento della lista con le parentesi quadre,
che sono una scorciatoia per chiamare il metodo <code>__getitem__</code>
all’interno di <code>stuff</code>. Questa scrittura equivale a chiamare
il metodo <code>__getitem__</code> della <em>classe</em>
<code>list</code>, passando l’oggetto <code>stuff</code> come primo
parametro e la posizione che cerchiamo come secondo parametro.</p>
<p>Alla fine del programma l’oggetto <code>stuff</code> viene scartato,
ma non prima che sia stato chiamato il <em>distruttore</em> (di nome
<code>__del__</code>), in modo che l’oggetto possa sistemare, se serve,
le questioni rimaste in sospeso.</p>
<p>Queste sono le basi della programmazione orientata agli oggetti. Ci
sono molti altri dettagli su come usare al meglio gli approcci orientati
agli oggetti quando si sviluppano grandi applicazioni e librerie, ma
vanno oltre l’ambito di questo capitolo.<a href="#fn3"
class="footnote-ref" id="fnref3" role="doc-noteref"><sup>3</sup></a></p>
<h2 id="glossario">Glossario</h2>
<dl>
<dt><strong>Attributo</strong></dt>
<dd>
Una variabile che fa parte di una classe.
</dd>
<dt><strong>Classe</strong></dt>
<dd>
Un modello che si può usare per costruire un oggetto. Definisce gli
attributi e i metodi che costituiranno l’oggetto.
</dd>
<dt><strong>Classe figlia</strong></dt>
<dd>
Una nuova classe creata quando si estende una classe padre. La classe
figlia eredita tutti gli attributi e i metodi della classe padre.
</dd>
<dt><strong>Classe padre</strong></dt>
<dd>
La classe che viene estesa per creare una nuova classe figlia. La classe
padre fornisce tutti i suoi metodi e attributi alla nuova classe figlia.
</dd>
<dt><strong>Costruttore</strong></dt>
<dd>
Un metodo facoltativo con un nome speciale (<code>__init__</code>), che
viene chiamato nel momento in cui una classe viene usata per costruire
un oggetto. Di solito serve a impostare i valori iniziali dell’oggetto.
</dd>
<dt><strong>Distruttore</strong></dt>
<dd>
Un metodo facoltativo con un nome speciale (<code>__del__</code>), che
viene chiamato subito prima che un oggetto venga distrutto. I
distruttori si usano raramente.
</dd>
<dt><strong>Ereditarietà</strong></dt>
<dd>
La creazione di una nuova classe (figlia) che estende una classe
esistente (padre). La classe figlia ha tutti gli attributi e i metodi
della classe padre, più gli altri attributi e metodi definiti dalla
classe figlia.
</dd>
<dt><strong>Metodo</strong></dt>
<dd>
Una funzione contenuta in una classe e negli oggetti costruiti a partire
dalla classe. Alcuni schemi orientati agli oggetti usano “messaggio”
invece di “metodo” per descrivere questo concetto.
</dd>
<dt><strong>Oggetto</strong></dt>
<dd>
Un’istanza costruita a partire da una classe. Un oggetto contiene tutti
gli attributi e i metodi definiti dalla classe. Parte della
documentazione sulla programmazione orientata agli oggetti usa il
termine “istanza” in modo intercambiabile con “oggetto”.
</dd>
</dl>
<section id="footnotes" class="footnotes footnotes-end-of-document"
role="doc-endnotes">
<hr />
<ol>
<li id="fn1"><p>https://docs.python.org/3/library/html.parser.html<a
href="#fnref1" class="footnote-back" role="doc-backlink">↩︎</a></p></li>
<li id="fn2"><p>Immagine dei biscotti: copyright CC-BY
https://www.flickr.com/photos/dinnerseries/23570475099.<a href="#fnref2"
class="footnote-back" role="doc-backlink">↩︎</a></p></li>
<li id="fn3"><p>Se sei curioso di sapere dove è definita la classe
<code>list</code>, dai un’occhiata (speriamo che l’URL non cambi) a
https://github.com/python/cpython/blob/master/Objects/listobject.c - la
classe <code>list</code> è scritta in un linguaggio chiamato “C”. Se
guardi quel codice sorgente e ti incuriosisce, potresti esplorare la
programmazione in C, con un occhio alla costruzione di oggetti, su
https://www.cc4e.com/.<a href="#fnref3" class="footnote-back"
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
