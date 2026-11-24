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
  <meta name="author" content="Esplorare dati con Python 3" />
  <title>Python per tutti</title>
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
<header id="title-block-header">
<h1 class="title">Python per tutti</h1>
<p class="author">Esplorare dati con Python 3</p>
<p class="date">Dr. Charles R. Severance</p>
</header>
<h1 id="perché-dovresti-imparare-a-programmare">Perché dovresti imparare
a programmare?</h1>
<p>Scrivere programmi (o programmare) è un’attività molto creativa e
gratificante. Puoi scrivere programmi per molte ragioni: per guadagnarti
da vivere, per risolvere un difficile problema di analisi dei dati, per
divertirti o per aiutare qualcun altro a risolvere un problema. Questo
libro presuppone che <em>tutti</em> abbiano bisogno di saper programmare
e che, una volta imparato a programmare, capirai da solo cosa vuoi fare
con le tue nuove capacità.</p>
<p>Nella vita di tutti i giorni siamo circondati da computer, dai
portatili ai cellulari. Possiamo pensare a questi computer come ai
nostri “assistenti personali”, che possono occuparsi di molte cose al
posto nostro. L’hardware dei computer di oggi è costruito, in sostanza,
per farci di continuo la domanda: “Cosa vorresti che facessi
adesso?”</p>
<figure>
<img src="../images/pda.svg" alt="Assistente personale digitale" style="height: 1.0in;"/>
<figcaption>
Assistente personale digitale
</figcaption>
</figure>
<p>I programmatori aggiungono all’hardware un sistema operativo e una
serie di applicazioni, e così ci ritroviamo con un assistente personale
digitale piuttosto utile, capace di aiutarci a fare molte cose
diverse.</p>
<p>I nostri computer sono veloci e hanno enormi quantità di memoria, e
potrebbero esserci molto utili se solo conoscessimo la lingua da parlare
per spiegare al computer cosa vorremmo che “facesse adesso”. Se
conoscessimo questa lingua, potremmo dire al computer di svolgere al
posto nostro i compiti ripetitivi. Curiosamente, le cose che i computer
sanno fare meglio sono spesso proprio quelle che noi umani troviamo
noiose e alienanti.</p>
<p>Ad esempio, guarda i primi tre paragrafi di questo capitolo e dimmi
qual è la parola più usata e quante volte compare. Sei riuscito a
leggere e capire le parole in pochi secondi, ma contarle è quasi una
sofferenza, perché non è il tipo di problema che la mente umana è fatta
per risolvere. Per un computer vale il contrario: leggere e capire un
testo scritto su un foglio di carta gli riesce difficile, mentre contare
le parole e dirti quante volte compare la parola più usata gli riesce
molto facile:</p>
<pre class="python"><code>python words.py
Enter file: words.txt
to 16</code></pre>
<p>Il nostro “assistente personale per l’analisi delle informazioni” ci
ha detto subito che la parola <code>to</code> è stata usata sedici volte
nei primi tre paragrafi di questo capitolo (nel testo originale
inglese).</p>
<p>Proprio il fatto che i computer siano bravi in cose in cui gli umani
non lo sono è il motivo per cui devi diventare bravo a parlare la
“lingua dei computer”. Una volta imparata questa nuova lingua, puoi
delegare i compiti banali al tuo partner (il computer) e avere così più
tempo per le cose per cui solo tu sei portato. In questa collaborazione
tu porti creatività, intuito e inventiva.</p>
<h2 id="creatività-e-motivazione">Creatività e motivazione</h2>
<p>Questo libro non è pensato per i programmatori professionisti, ma
programmare per professione può essere un lavoro molto gratificante, sia
sul piano economico sia su quello personale. Costruire programmi utili,
eleganti e ingegnosi, che altri possano usare, è un’attività molto
creativa. Il tuo computer o il tuo assistente personale digitale (PDA,
Personal Digital Assistant) di solito contiene molti programmi diversi,
scritti da molti gruppi diversi di programmatori, ciascuno in gara per
conquistare la tua attenzione e il tuo interesse. Fanno del loro meglio
per soddisfare le tue esigenze e, allo stesso tempo, per offrirti
un’ottima esperienza d’uso. In certe situazioni, quando scegli un
software, i programmatori vengono pagati direttamente grazie alla tua
scelta.</p>
<p>Se pensiamo ai programmi come al prodotto creativo di gruppi di
programmatori, forse la figura seguente è una versione più sensata del
nostro PDA:</p>
<figure>
<img src="../images/pda2.svg" alt="I programmatori ti parlano" style="height: 1.0in;"/>
<figcaption>
I programmatori ti parlano
</figcaption>
</figure>
<p>Per ora, la nostra motivazione principale non è fare soldi o
accontentare gli utenti finali, ma diventare più produttivi nel gestire
i dati e le informazioni che incontreremo nella vita. All’inizio sarai
sia il programmatore sia l’utente finale dei tuoi programmi. Man mano
che diventi più bravo come programmatore e programmare ti sembra più
creativo, potresti cominciare a pensare di sviluppare programmi per
altri.</p>
<h2 id="architettura-hardware-del-computer">Architettura hardware del
computer</h2>
<p> </p>
<p>Prima di cominciare a imparare la lingua che parliamo per dare
istruzioni ai computer e sviluppare software, dobbiamo imparare qualcosa
su come sono fatti i computer. Se smontassi il tuo computer o il tuo
cellulare e guardassi bene dentro, troveresti le parti seguenti:</p>
<figure>
<img src="../images/arch.svg" alt="Architettura dell'hardware" style="height: 1.75in;"/>
<figcaption>
Architettura dell’hardware
</figcaption>
</figure>
<p>Ecco, a grandi linee, le definizioni di queste parti:</p>
<ul>
<li><p>L’<em>unità centrale di elaborazione</em> (CPU, Central
Processing Unit) è la parte del computer costruita per essere
ossessionata dalla domanda “e adesso?”. Se il tuo computer ha una
frequenza di 3,0 gigahertz, vuol dire che la CPU chiederà “E adesso?”
tre miliardi di volte al secondo. Dovrai imparare a parlare in fretta
per stare al passo con la CPU.</p></li>
<li><p>La <em>memoria principale</em> serve a memorizzare le
informazioni di cui la CPU ha bisogno in fretta. La memoria principale è
veloce quasi quanto la CPU. Ma le informazioni memorizzate nella memoria
principale svaniscono quando il computer viene spento.</p></li>
<li><p>Anche la <em>memoria secondaria</em> serve a memorizzare
informazioni, ma è molto più lenta della memoria principale. Il
vantaggio della memoria secondaria è che può memorizzare le informazioni
anche quando il computer non è alimentato. Esempi di memoria secondaria
sono le unità disco o le memorie flash (che di solito si trovano nelle
chiavette USB e nei lettori musicali portatili).</p></li>
<li><p>I <em>dispositivi di input e output</em> sono semplicemente lo
schermo, la tastiera, il mouse, il microfono, l’altoparlante, il
touchpad, ecc. Sono tutti i modi in cui interagiamo con il
computer.</p></li>
<li><p>Oggi la maggior parte dei computer ha anche una <em>connessione
di rete</em>, per recuperare informazioni attraverso una rete. Possiamo
pensare alla rete come a un posto molto lento in cui memorizzare e
recuperare dati, che potrebbe non essere sempre “attivo”. In un certo
senso, quindi, la rete è una forma più lenta e a volte inaffidabile di
<em>memoria secondaria</em>.</p></li>
</ul>
<p>La maggior parte dei dettagli sul funzionamento di questi componenti
è meglio lasciarla a chi costruisce i computer, ma è utile avere un po’
di terminologia per poter parlare di queste parti mentre scriviamo i
nostri programmi.</p>
<p>Come programmatore, il tuo lavoro è usare e orchestrare ciascuna di
queste risorse per risolvere il problema che devi risolvere e per
analizzare i dati che ottieni dalla soluzione. Come programmatore
“parlerai” soprattutto con la CPU, per dirle qual è la prossima cosa da
fare. A volte dirai alla CPU di usare la memoria principale, la memoria
secondaria, la rete o i dispositivi di input/output.</p>
<figure>
<img src="../images/arch2.svg" alt="Dove sei?" style="height: 1.75in;"/>
<figcaption>
Dove sei?
</figcaption>
</figure>
<p>Devi essere tu a rispondere alla domanda “E adesso?” della CPU. Ma
sarebbe molto scomodo rimpicciolirti fino a 5 mm di altezza e infilarti
nel computer solo perché tu possa dare un comando tre miliardi di volte
al secondo. Devi invece scrivere le tue istruzioni in anticipo.
Chiamiamo <em>programma</em> queste istruzioni memorizzate, e
<em>programmazione</em> l’attività di scrivere queste istruzioni e di
renderle corrette.</p>
<h2 id="capire-la-programmazione">Capire la programmazione</h2>
<p>Nel resto di questo libro cercheremo di fare di te una persona
esperta nell’arte della programmazione. Alla fine sarai un
<em>programmatore</em>: forse non un programmatore professionista, ma
almeno avrai le capacità per esaminare un problema di analisi di
dati/informazioni e sviluppare un programma che lo risolve.</p>
<p>In un certo senso, per essere un programmatore ti servono due
abilità:</p>
<ul>
<li><p>Primo, devi conoscere il linguaggio di programmazione (Python):
devi conoscerne il vocabolario e la grammatica. Devi saper scrivere
correttamente le parole di questo nuovo linguaggio e saper costruire
“frasi” ben formate.</p></li>
<li><p>Secondo, devi “raccontare una storia”. Quando scrivi una storia,
combini parole e frasi per trasmettere un’idea al lettore. Costruire la
storia richiede abilità e arte, e l’abilità nello scrivere storie
migliora scrivendo un po’ e ricevendo qualche commento. Nella
programmazione, il nostro programma è la “storia” e il problema che stai
cercando di risolvere è l’“idea”.</p></li>
</ul>
<p>Una volta imparato un linguaggio di programmazione come Python, ti
sarà molto più facile impararne un secondo, come JavaScript o C++. Il
nuovo linguaggio di programmazione ha un vocabolario e una grammatica
molto diversi, ma le abilità nel risolvere i problemi saranno le stesse
in tutti i linguaggi di programmazione.</p>
<p>Imparerai il “vocabolario” e le “frasi” di Python piuttosto in
fretta. Ti ci vorrà più tempo per riuscire a scrivere un programma
coerente che risolva un problema del tutto nuovo. Insegniamo a
programmare più o meno come insegniamo a scrivere. Cominciamo leggendo e
spiegando programmi, poi scriviamo programmi semplici e poi, col tempo,
programmi sempre più complessi. A un certo punto “trovi la tua musa”,
vedi gli schemi da solo e ti viene più naturale capire come prendere un
problema e scrivere un programma che lo risolve. E una volta arrivato a
quel punto, programmare diventa un processo molto piacevole e
creativo.</p>
<p>Cominciamo dal vocabolario e dalla struttura dei programmi Python.
Abbi pazienza se gli esempi semplici ti ricordano quando hai cominciato
a leggere per la prima volta.</p>
<h2 id="parole-e-frasi">Parole e frasi</h2>
<p> </p>
<p>A differenza di quello delle lingue umane, il vocabolario di Python è
in realtà piuttosto piccolo. Chiamiamo questo “vocabolario” <em>parole
riservate</em> o <em>parole chiave</em>. Sono parole che per Python
hanno un significato molto speciale. Quando Python vede queste parole in
un programma Python, per Python hanno un solo e unico significato. Più
avanti, quando scriverai programmi, inventerai parole tue, che hanno un
significato per te, chiamate <em>variabili</em>. Avrai grande libertà
nello scegliere i nomi delle tue variabili, ma non puoi usare nessuna
delle parole riservate di Python come nome di una variabile.</p>
<p>Quando addestriamo un cane, usiamo parole speciali come “seduto”,
“resta” e “porta”. Quando parli a un cane senza usare nessuna delle
parole riservate, il cane ti guarda con aria interrogativa finché non
dici una parola riservata. Ad esempio, se dici “Vorrei che più persone
facessero una passeggiata per migliorare la propria salute generale”,
quello che la maggior parte dei cani probabilmente sente è “bla bla bla
<em>passeggiata</em> bla bla bla bla”. Questo perché “passeggiata” è una
parola riservata nel linguaggio dei cani. Molti potrebbero sostenere che
il linguaggio tra umani e gatti non abbia parole riservate<a href="#fn1"
class="footnote-ref" id="fnref1"
role="doc-noteref"><sup>1</sup></a>.</p>
<p>Le parole riservate del linguaggio con cui gli umani parlano a Python
comprendono le seguenti:</p>
<pre><code>False      await      else       import     pass
None       break      except     in         raise
True       class      finally    is         return
and        continue   for        lambda     try
as         def        from       nonlocal   while
assert     del        global     not        with
async      elif       if         or         yield</code></pre>
<p>È tutto qui e, a differenza di un cane, Python è già completamente
addestrato. Quando dici <code>try</code> (prova), Python prova ogni
volta che lo dici, immancabilmente.</p>
<p>Impareremo a tempo debito queste parole riservate e il modo in cui si
usano, ma per ora ci concentreremo sull’equivalente in Python di “parla”
(nel linguaggio uomo-cane). Il bello di dire a Python di parlare è che
possiamo anche dirgli cosa dire, dandogli un messaggio tra
virgolette:</p>
<pre class="python"><code>print(&#39;Hello world!&#39;)</code></pre>
<p>E così abbiamo persino scritto la nostra prima frase Python
sintatticamente corretta. La nostra frase comincia con la funzione
<code>print</code>, seguita da una stringa di testo a nostra scelta
racchiusa tra virgolette singole. Nelle istruzioni <code>print</code> le
stringhe sono racchiuse tra virgolette. Le virgolette singole e le
virgolette doppie fanno la stessa cosa; la maggior parte delle persone
usa le virgolette singole, tranne quando nella stringa compare una
virgoletta singola (che è anche un apostrofo).</p>
<h2 id="conversare-con-python">Conversare con Python</h2>
<p>Ora che conosciamo una parola e una frase semplice in Python,
dobbiamo sapere come avviare una conversazione con Python per testare le
nostre nuove abilità linguistiche.</p>
<p>Prima di poter conversare con Python, devi innanzitutto installare il
software Python sul tuo computer e imparare ad avviarlo. Sono troppi
dettagli per questo capitolo, quindi ti suggerisco di consultare <a
href="http://www.py4e.com">www.py4e.com</a>, dove ho messo istruzioni
dettagliate e screencast su come installare e avviare Python sui sistemi
Macintosh e Windows. A un certo punto ti troverai in un terminale o in
una finestra di comando, digiterai <code>python</code> e l’interprete
Python si avvierà in modalità interattiva e apparirà più o meno
così:</p>
<pre class="python"><code>Python 3.15.2 (main, Oct 25 2026, 16:57:51)
   [Clang 21.0.0 (clang-2100.3.34.2)] on darwin
Type &quot;help&quot;, &quot;copyright&quot;, &quot;credits&quot; or &quot;license&quot; for more
information.
&gt;&gt;&gt;</code></pre>
<p>Il prompt <code>&gt;&gt;&gt;</code> è il modo in cui l’interprete
Python ti chiede: “Cosa vuoi che faccia adesso?”. Python è pronto a
conversare con te. Devi solo sapere come si parla il linguaggio
Python.</p>
<p>Supponiamo, ad esempio, che tu non conosca nemmeno le parole o le
frasi più semplici del linguaggio Python. Potresti usare la frase di
rito che gli astronauti usano quando atterrano su un pianeta lontano e
cercano di parlare con gli abitanti del pianeta:</p>
<pre class="python"><code>&gt;&gt;&gt; I come in peace, please take me to your leader
  File &quot;&lt;stdin&gt;&quot;, line 1
    I come in peace, please take me to your leader
      ^^^^
SyntaxError: invalid syntax
&gt;&gt;&gt;</code></pre>
<p>Non sta andando molto bene. Se non ti viene in mente qualcosa in
fretta, è probabile che gli abitanti del pianeta ti trafiggano con le
lance, ti infilino su uno spiedo, ti arrostiscano sul fuoco e ti mangino
per cena.</p>
<p>Per fortuna ti sei portato in viaggio una copia di questo libro,
sfogli fino a questa precisa pagina e riprovi:</p>
<pre class="python"><code>&gt;&gt;&gt; print(&#39;Hello world!&#39;)
Hello world!</code></pre>
<p>Così va molto meglio, quindi provi a comunicare ancora un po’:</p>
<pre class="python"><code>&gt;&gt;&gt; print(&#39;You must be the legendary god that comes from the sky&#39;)
You must be the legendary god that comes from the sky
&gt;&gt;&gt; print(&#39;We have been waiting for you for a long time&#39;)
We have been waiting for you for a long time
&gt;&gt;&gt; print(&#39;Our legend says you will be very tasty with mustard&#39;)
Our legend says you will be very tasty with mustard
&gt;&gt;&gt; print &#39;We will have a feast tonight unless you say
  File &quot;&lt;stdin&gt;&quot;, line 1
    print &#39;We will have a feast tonight unless you say
          ^
SyntaxError: unterminated string literal (detected at line 1)
&gt;&gt;&gt;</code></pre>
<p>Per un po’ la conversazione stava andando così bene, poi hai fatto il
più piccolo degli errori nell’usare il linguaggio Python e Python ha
tirato di nuovo fuori le lance.</p>
<p>A questo punto dovresti anche renderti conto che Python, per quanto
incredibilmente complesso e potente, e molto pignolo sulla sintassi che
usi per comunicare con lui, <em>non</em> è intelligente. In realtà stai
solo conversando con te stesso, ma con una sintassi corretta.</p>
<p>In un certo senso, quando usi un programma scritto da qualcun altro,
la conversazione avviene tra te e quegli altri programmatori, con Python
che fa da intermediario. Python è un modo con cui chi crea i programmi
esprime come dovrebbe procedere la conversazione. E tra pochi capitoli
soltanto sarai uno di quei programmatori che usano Python per parlare
agli utenti del proprio programma.</p>
<p>Prima di concludere la nostra prima conversazione con l’interprete
Python, probabilmente dovresti conoscere il modo giusto di dire
“arrivederci” quando interagisci con gli abitanti del Pianeta
Python:</p>
<pre class="python"><code>&gt;&gt;&gt; good-bye
Traceback (most recent call last):
  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;
    good-bye
    ^^^^
NameError: name &#39;good&#39; is not defined
&gt;&gt;&gt; if you don&#39;t mind, I need to leave
  File &quot;&lt;stdin&gt;&quot;, line 1
    if you don&#39;t mind, I need to leave
              ^
SyntaxError: unterminated string literal (detected at line 1)
&gt;&gt;&gt; quit()</code></pre>
<p>Noterai che nei primi due tentativi sbagliati l’errore è diverso. Il
secondo errore è diverso perché <code>if</code> è una parola riservata:
Python ha visto la parola riservata e ha pensato che stessimo cercando
di dire qualcosa, ma che avessimo sbagliato la sintassi della frase.</p>
<p>Il modo giusto di dire “arrivederci” a Python è inserire
<code>quit()</code> al prompt interattivo <code>&gt;&gt;&gt;</code>.
Probabilmente ci avresti messo un bel po’ a indovinarlo, quindi avere un
libro a portata di mano probabilmente si rivelerà utile.</p>
<h2 id="terminologia-interprete-e-compilatore">Terminologia: interprete
e compilatore</h2>
<p>Python è un <em>linguaggio di alto livello</em>, pensato per essere
relativamente semplice da leggere e scrivere per gli umani e da leggere
ed elaborare per i computer. Tra gli altri linguaggi di alto livello ci
sono Java, C++, PHP, Ruby, Basic, Perl, JavaScript e molti altri.
L’hardware vero e proprio che sta dentro la CPU non capisce nessuno di
questi linguaggi di alto livello.</p>
<p>La CPU capisce un linguaggio che chiamiamo <em>linguaggio
macchina</em>. Il linguaggio macchina è molto semplice e, francamente,
molto faticoso da scrivere, perché è fatto tutto di zeri e uno:</p>
<pre><code>001010001110100100101010000001111
11100110000011101010010101101101
...</code></pre>
<p>In superficie il linguaggio macchina sembra piuttosto semplice, dato
che ci sono solo zeri e uno, ma la sua sintassi è ancora più complessa e
molto più intricata di quella di Python. Per questo pochissimi
programmatori scrivono in linguaggio macchina. Costruiamo invece vari
traduttori, che permettono ai programmatori di scrivere in linguaggi di
alto livello come Python o JavaScript e che convertono i programmi in
linguaggio macchina per l’esecuzione vera e propria da parte della
CPU.</p>
<p>Dato che è legato all’hardware del computer, il linguaggio macchina
non è <em>portabile</em> tra tipi diversi di hardware. I programmi
scritti in linguaggi di alto livello si possono spostare da un computer
all’altro usando un interprete diverso sulla nuova macchina, oppure
ricompilando il codice per creare una versione in linguaggio macchina
del programma per la nuova macchina.</p>
<p>Questi traduttori di linguaggi di programmazione si dividono in due
categorie generali: (1) <em>interpreti</em> e (2)
<em>compilatori</em>.</p>
<p>Un <em>interprete</em> legge il codice sorgente del programma così
come l’ha scritto il programmatore, analizza il codice sorgente e
interpreta le istruzioni al volo. Python è un interprete e, quando
eseguiamo Python in modalità interattiva, possiamo digitare una riga di
Python (una frase): Python la elabora subito ed è pronto a farci
digitare un’altra riga di Python.</p>
<p>Alcune righe di Python dicono a Python che vuoi che ricordi un valore
per dopo. Dobbiamo scegliere un nome per quel valore da ricordare, e
possiamo usare quel nome simbolico per recuperare il valore più tardi.
Usiamo il termine <em>variabile</em> per indicare le etichette con cui
ci riferiamo a questi dati memorizzati.</p>
<pre class="python"><code>&gt;&gt;&gt; x = 6
&gt;&gt;&gt; print(x)
6
&gt;&gt;&gt; y = x * 7
&gt;&gt;&gt; print(y)
42
&gt;&gt;&gt;</code></pre>
<p>In questo esempio chiediamo a Python di ricordare il valore sei e di
usare l’etichetta <code>x</code>, così da poter recuperare il valore più
tardi. Con <code>print</code> verifichiamo che Python abbia davvero
ricordato il valore. Poi chiediamo a Python di recuperare
<code>x</code>, di moltiplicarlo per sette e di mettere il valore appena
calcolato in <code>y</code>. Poi chiediamo a Python di stampare il
valore che si trova ora in <code>y</code>.</p>
<p>Anche se digitiamo questi comandi in Python una riga alla volta,
Python li tratta come una sequenza ordinata di istruzioni, in cui le
istruzioni successive possono recuperare i dati creati da quelle
precedenti. Stiamo scrivendo il nostro primo, semplice paragrafo:
quattro frasi in un ordine logico e sensato.</p>
<p>È nella natura di un <em>interprete</em> poter sostenere una
conversazione interattiva come quella mostrata sopra. Un
<em>compilatore</em> ha bisogno che gli venga consegnato l’intero
programma in un file; poi esegue un processo che traduce il codice
sorgente di alto livello in linguaggio macchina, e infine mette il
linguaggio macchina risultante in un file, per l’esecuzione
successiva.</p>
<p>Se hai un sistema Windows, spesso questi programmi eseguibili in
linguaggio macchina hanno il suffisso <code>.exe</code> o
<code>.dll</code>, che stanno rispettivamente per “eseguibile”
(executable) e “libreria a collegamento dinamico” (dynamic link
library). In Linux e Macintosh non c’è un suffisso che contrassegni in
modo univoco un file come eseguibile.</p>
<p>Se aprissi un file eseguibile in un editor di testo, avrebbe un
aspetto del tutto folle e sarebbe illeggibile:</p>
<pre><code>^?ELF^A^A^A^@^@^@^@^@^@^@^@^@^B^@^C^@^A^@^@^@\xa0\x82
^D^H4^@^@^@\x90^]^@^@^@^@^@^@4^@ ^@^G^@(^@$^@!^@^F^@
^@^@4^@^@^@4\x80^D^H4\x80^D^H\xe0^@^@^@\xe0^@^@^@^E
^@^@^@^D^@^@^@^C^@^@^@^T^A^@^@^T\x81^D^H^T\x81^D^H^S
^@^@^@^S^@^@^@^D^@^@^@^A^@^@^@^A\^D^HQVhT\x83^D^H\xe8
....</code></pre>
<p>Leggere o scrivere il linguaggio macchina non è facile, quindi è
bello avere <em>interpreti</em> e <em>compilatori</em> che ci permettono
di scrivere in linguaggi di alto livello come Python o C.</p>
<p>A questo punto del nostro discorso su compilatori e interpreti,
dovresti cominciare a farti qualche domanda sull’interprete Python
stesso. In che linguaggio è scritto? È scritto in un linguaggio
compilato? Quando digitiamo <code>python</code>, cosa succede
esattamente?</p>
<p>L’interprete Python è scritto in un linguaggio di alto livello
chiamato “C”. Puoi guardare il vero codice sorgente dell’interprete
Python andando su <a href="http://www.python.org">www.python.org</a> e
facendoti strada fino al codice sorgente. Quindi Python è a sua volta un
programma, ed è compilato in codice macchina. Quando hai installato
Python sul tuo computer (o quando l’ha installato il fornitore), hai
copiato sul tuo sistema una versione in codice macchina del programma
Python tradotto. In Windows, il codice macchina eseguibile di Python
stesso si trova probabilmente in un file con un nome simile a
questo:</p>
<pre><code>C:\Python315\python.exe</code></pre>
<p>È più di quanto ti serva davvero sapere per essere un programmatore
Python, ma a volte conviene rispondere fin dall’inizio a quelle piccole
domande assillanti.</p>
<h2 id="scrivere-un-programma">Scrivere un programma</h2>
<p>Digitare comandi nell’interprete Python è un ottimo modo per
sperimentare le funzionalità di Python, ma non è consigliato per
risolvere problemi più complessi.</p>
<p>Quando vogliamo scrivere un programma, usiamo un editor di testo per
scrivere le istruzioni Python in un file, che si chiama <em>script</em>.
Per convenzione, gli script Python hanno nomi che finiscono con
<code>.py</code>.</p>
<p>Per eseguire lo script, devi dire all’interprete Python il nome del
file. In una finestra di comando digiteresti
<code>python hello.py</code>, come segue:</p>
<pre class="bash"><code>$ cat hello.py
print(&#39;Hello world!&#39;)
$ python hello.py
Hello world!</code></pre>
<p>Il <code>$</code> è il prompt del sistema operativo, e
<code>cat hello.py</code> ci mostra che il file <code>hello.py</code>
contiene un programma Python di una sola riga, che stampa una
stringa.</p>
<p>Chiamiamo l’interprete Python e gli diciamo di leggere il suo codice
sorgente dal file <code>hello.py</code>, invece di chiederci in modo
interattivo righe di codice Python.</p>
<p>Noterai che non c’è stato bisogno di mettere <code>quit()</code> alla
fine del programma Python nel file. Quando Python legge il tuo codice
sorgente da un file, sa che deve fermarsi quando arriva alla fine del
file.</p>
<h2 id="cosè-un-programma">Cos’è un programma?</h2>
<p>Nella sua definizione più elementare, un <em>programma</em> è una
sequenza di istruzioni Python costruita per fare qualcosa. Anche il
nostro semplice script <code>hello.py</code> è un programma. È un
programma di una sola riga e non è particolarmente utile ma, secondo la
definizione più rigorosa, è un programma Python.</p>
<p>Forse il modo più facile per capire cos’è un programma è pensare a un
problema per cui si potrebbe costruire un programma, e poi guardare un
programma che risolverebbe quel problema.</p>
<p>Diciamo che stai facendo una ricerca di Social Computing sui post di
Facebook e ti interessa la parola usata più spesso in una serie di post.
Potresti stampare il flusso dei post di Facebook e passare al setaccio
il testo alla ricerca della parola più comune, ma ci vorrebbe molto
tempo e sarebbe molto facile sbagliare. Faresti bene a scrivere un
programma Python che svolga il compito in modo rapido e accurato, così
da poter passare il fine settimana a fare qualcosa di divertente.</p>
<p>Ad esempio, guarda il testo seguente, che parla di un clown e di
un’automobile. Guarda il testo e trova qual è la parola più comune e
quante volte compare.</p>
<pre><code>the clown ran after the car and the car ran into the tent
and the tent fell down on the clown and the car</code></pre>
<p>Poi immagina di svolgere questo compito guardando milioni di righe di
testo. Francamente, faresti prima a imparare Python e a scrivere un
programma Python per contare le parole, piuttosto che passarle in
rassegna a mano.</p>
<p>La notizia ancora migliore è che ho già preparato un semplice
programma per trovare la parola più comune in un file di testo. L’ho
scritto, l’ho testato e adesso te lo do da usare, così puoi risparmiare
un po’ di tempo.</p>
<pre class="python"><code>name = input(&#39;Enter file: &#39;)
handle = open(name, &#39;r&#39;)
counts = dict()

for line in handle:
    words = line.split()
    for word in words:
        counts[word] = counts.get(word, 0) + 1

bigcount = None
bigword = None
for word, count in list(counts.items()):
    if bigcount is None or count &gt; bigcount:
        bigword = word
        bigcount = count

print(bigword, bigcount)

# Code: https://www.py4e.com/code3/words.py</code></pre>
<p>Non hai nemmeno bisogno di conoscere Python per usare questo
programma. Dovrai arrivare alla fine del Capitolo 10 di questo libro per
capire fino in fondo le straordinarie tecniche Python usate per
scriverlo. Tu sei l’utente finale: usi semplicemente il programma e ti
meravigli della sua ingegnosità e di quanta fatica manuale ti ha
risparmiato. Ti basta digitare il codice in un file chiamato
<code>words.py</code> ed eseguirlo, oppure scaricare il codice sorgente
da <a href="http://www.py4e.com/code3/"
class="uri">http://www.py4e.com/code3/</a> ed eseguirlo.</p>
<p>Questo è un buon esempio di come Python e il linguaggio Python
facciano da intermediario tra te (l’utente finale) e me (il
programmatore). Python è per noi un modo di scambiarci sequenze di
istruzioni utili (cioè programmi) in un linguaggio comune, che può
essere usato da chiunque installi Python sul proprio computer. Nessuno
di noi due sta quindi parlando <em>a Python</em>: comunichiamo tra di
noi <em>attraverso</em> Python.</p>
<h2 id="gli-elementi-di-base-dei-programmi">Gli elementi di base dei
programmi</h2>
<p>Nei prossimi capitoli impareremo di più sul vocabolario di Python e
sulla struttura delle sue frasi, dei suoi paragrafi e delle sue storie.
Conosceremo le potenti capacità di Python e impareremo a comporle per
creare programmi utili.</p>
<p>Ci sono alcuni schemi concettuali di basso livello che usiamo per
costruire i programmi. Questi costrutti non valgono solo per i programmi
Python: fanno parte di ogni linguaggio di programmazione, dal linguaggio
macchina fino ai linguaggi di alto livello.</p>
<dl>
<dt>input</dt>
<dd>
Ottenere dati dal “mondo esterno”. Può trattarsi di leggere dati da un
file, o anche da qualche tipo di sensore, come un microfono o un GPS.
Nei nostri primi programmi, l’input verrà dall’utente, che digita i dati
sulla tastiera.
</dd>
<dt>output</dt>
<dd>
Visualizzare i risultati del programma su uno schermo, memorizzarli in
un file o magari scriverli su un dispositivo come un altoparlante, per
riprodurre musica o pronunciare un testo.
</dd>
<dt>esecuzione sequenziale</dt>
<dd>
Eseguire le istruzioni una dopo l’altra, nell’ordine in cui si
incontrano nello script.
</dd>
<dt>esecuzione condizionale</dt>
<dd>
Controllare certe condizioni e poi eseguire o saltare una sequenza di
istruzioni.
</dd>
<dt>esecuzione ripetuta</dt>
<dd>
Eseguire ripetutamente un insieme di istruzioni, di solito con qualche
variazione.
</dd>
<dt>riutilizzo</dt>
<dd>
Scrivere un insieme di istruzioni una volta sola, dargli un nome e poi
riutilizzare quelle istruzioni dove serve, in tutto il programma.
</dd>
</dl>
<p>Sembra quasi troppo semplice per essere vero e, naturalmente, non è
mai così semplice. È come dire che camminare è semplicemente “mettere un
piede davanti all’altro”. L’“arte” di scrivere un programma sta nel
comporre e intrecciare tante e tante volte questi elementi di base, per
produrre qualcosa di utile ai suoi utenti.</p>
<p>Il programma per contare le parole visto sopra usa direttamente tutti
questi schemi tranne uno.</p>
<h2 id="cosa-potrebbe-mai-andare-storto">Cosa potrebbe mai andare
storto?</h2>
<p>Come abbiamo visto nelle nostre prime conversazioni con Python,
quando scriviamo codice Python dobbiamo comunicare in modo molto
preciso. Basta la minima deviazione o il minimo errore perché Python
rinunci a guardare il tuo programma.</p>
<p>I programmatori principianti spesso prendono il fatto che Python non
lascia spazio agli errori come la prova che Python è cattivo, odioso e
crudele. A Python tutti gli altri sembrano piacere, ma i principianti li
conosce di persona e serba loro rancore. Per via di questo rancore,
Python prende i nostri programmi scritti alla perfezione e li rifiuta
come “inadatti” solo per tormentarci.</p>
<pre class="python"><code>&gt;&gt;&gt; primt &#39;Hello world!&#39;
  File &quot;&lt;stdin&gt;&quot;, line 1
    primt &#39;Hello world!&#39;
          ^^^^^^^^^^^^^^
SyntaxError: invalid syntax

&gt;&gt;&gt; primt (&#39;Hello world&#39;)
Traceback (most recent call last):
  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;
NameError: name &#39;primt&#39; is not defined. Did you mean: &#39;print&#39;?

&gt;&gt;&gt; I hate you Python!
  File &quot;&lt;stdin&gt;&quot;, line 1
    I hate you Python!
      ^^^^
SyntaxError: invalid syntax
&gt;&gt;&gt; if you come out of there, I would teach you a lesson
  File &quot;&lt;stdin&gt;&quot;, line 1
    if you come out of there, I would teach you a lesson
           ^^^^
SyntaxError: invalid syntax
&gt;&gt;&gt;</code></pre>
<p>C’è poco da guadagnare a discutere con Python. È solo uno strumento.
Non ha emozioni, ed è felice e pronto a servirti ogni volta che ne hai
bisogno. I suoi messaggi di errore suonano duri, ma sono solo la
richiesta di aiuto di Python. Ha guardato ciò che hai digitato e,
semplicemente, non riesce a capire ciò che hai inserito.</p>
<p>Python somiglia molto di più a un cane: ti ama incondizionatamente,
capisce poche parole chiave, ti guarda con un’espressione dolce
(<code>&gt;&gt;&gt;</code>) e aspetta che tu dica qualcosa che capisce.
Quando Python dice <code>SyntaxError: invalid syntax</code>, sta
semplicemente scodinzolando e dicendo: “Mi sembra che tu abbia detto
qualcosa, ma proprio non capisco cosa intendevi; però continua a
parlarmi, per favore (<code>&gt;&gt;&gt;</code>)”.</p>
<p>Man mano che i tuoi programmi diventeranno sempre più sofisticati,
incontrerai tre tipi generali di errore:</p>
<dl>
<dt>Errori di sintassi</dt>
<dd>
Sono i primi errori che farai e i più facili da correggere. Un errore di
sintassi significa che hai violato le regole della “grammatica” di
Python. Python fa del suo meglio per indicare proprio la riga e il
carattere in cui si è accorto di essere confuso. L’unica insidia degli
errori di sintassi è che a volte l’errore da correggere si trova in
realtà più indietro nel programma rispetto al punto in cui Python <em>si
è accorto</em> di essere confuso. Quindi la riga e il carattere che
Python indica in un errore di sintassi possono essere solo un punto di
partenza per la tua indagine.
</dd>
<dt>Errori logici</dt>
<dd>
Un errore logico si ha quando il tuo programma ha una sintassi corretta,
ma c’è un errore nell’ordine delle istruzioni o magari nel modo in cui
le istruzioni sono legate l’una all’altra. Un buon esempio di errore
logico potrebbe essere: “bevi un sorso dalla bottiglia d’acqua, mettila
nello zaino, cammina fino alla biblioteca e poi rimetti il tappo alla
bottiglia”.
</dd>
<dt>Errori semantici</dt>
<dd>
Un errore semantico si ha quando la tua descrizione dei passi da
compiere è sintatticamente perfetta e nell’ordine giusto, ma nel
programma c’è semplicemente un errore. Il programma è perfettamente
corretto, ma non fa quello che tu <em>intendevi</em> fargli fare. Un
esempio semplice: stai dando a una persona le indicazioni per un
ristorante e dici: “… quando arrivi all’incrocio con il distributore di
benzina, gira a sinistra e prosegui per un chilometro: il ristorante è
un edificio rosso sulla tua sinistra”. Il tuo amico è molto in ritardo e
ti chiama per dirti che si trova in una fattoria e sta girando dietro un
fienile, senza traccia di ristoranti. Allora tu chiedi: “Al distributore
hai girato a sinistra o a destra?”, e lui risponde: “Ho seguito le tue
indicazioni alla perfezione, le ho qui scritte: dicono di girare a
sinistra al distributore e proseguire per un chilometro”. Allora tu
dici: “Mi dispiace molto, perché le mie istruzioni erano sintatticamente
corrette, ma purtroppo contenevano un errore semantico piccolo ma non
rilevato”.
</dd>
</dl>
<p>Ancora una volta, in tutti e tre i tipi di errore, Python sta
semplicemente facendo del suo meglio per fare esattamente quello che gli
hai chiesto.</p>
<h2 id="debug">Debug</h2>
<p>Quando Python segnala un errore, o anche quando ti dà un risultato
diverso da quello che volevi, comincia la caccia alla causa dell’errore.
Il debug è il processo con cui si trova la causa dell’errore nel codice.
Quando esegui il debug di un programma, specialmente se stai lavorando
su un bug ostico, ci sono quattro cose da provare:</p>
<dl>
<dt>lettura</dt>
<dd>
Esamina il tuo codice, rileggilo tra te e te e controlla che dica quello
che volevi dire.
</dd>
<dt>esecuzione</dt>
<dd>
Sperimenta apportando modifiche ed eseguendo versioni diverse. Spesso,
se visualizzi la cosa giusta nel punto giusto del programma, il problema
diventa ovvio. A volte, però, devi passare un po’ di tempo a costruire
un’<em>impalcatura</em> (scaffolding).
</dd>
<dt>riflessione</dt>
<dd>
Prenditi un po’ di tempo per pensare! Di che tipo di errore si tratta:
di sintassi, logico, semantico? Quali informazioni puoi ottenere dai
messaggi di errore o dall’output del programma? Che tipo di errore
potrebbe causare il problema che stai osservando? Cosa hai cambiato per
ultimo, prima che apparisse il problema?
</dd>
<dt>ritirata</dt>
<dd>
A un certo punto la cosa migliore da fare è tornare indietro, annullando
le modifiche recenti, fino a riavere un programma che funziona e che
comprendi. Da lì puoi iniziare la ricostruzione.
</dd>
</dl>
<p>I programmatori principianti a volte rimangono bloccati in una di
queste attività e dimenticano le altre. Per trovare un bug ostico
occorre leggere, eseguire, riflettere e talvolta ritirarsi. Se rimani
bloccato in una di queste attività, prova le altre. Ognuna di queste
attività fallisce a modo suo.</p>
<p>Ad esempio, leggere il codice potrebbe essere d’aiuto se il problema
è un errore tipografico, ma non serve se il problema è un errore
concettuale. Se non capisci cosa fa il tuo programma, puoi leggerlo 100
volte e non vedere mai l’errore, perché l’errore è nella tua testa.</p>
<p>Fare esperimenti può essere d’aiuto, specialmente se esegui test
piccoli e semplici. Ma se fai esperimenti senza pensare o senza leggere
il tuo codice, potresti cadere in uno schema che chiamo
<em>programmazione per passeggiata aleatoria</em> (random walk
programming): il processo di apportare modifiche casuali fino a quando
il programma non fa la cosa giusta. Inutile dire che questo tipo di
programmazione può richiedere molto tempo.</p>
<p> </p>
<p>Devi trovare il tempo per pensare. Il debug è come una scienza
sperimentale. Dovresti avere almeno un’ipotesi su quale sia il problema.
Se ci sono due o più possibilità, prova a pensare a un test che ne
elimini una.</p>
<p>Prendersi una pausa aiuta a pensare, e anche parlarne aiuta. Se
spieghi il problema a qualcun altro (o anche a te stesso), a volte trovi
la risposta prima di finire la domanda.</p>
<p>Ma anche le migliori tecniche di debug falliscono se ci sono troppi
errori, o se il codice che stai cercando di correggere è troppo grande e
complicato. A volte l’opzione migliore è ritirarsi, semplificando il
programma fino ad arrivare a qualcosa che funziona e che riesci a
capire.</p>
<p>I programmatori principianti sono spesso riluttanti a ritirarsi
perché non sopportano di eliminare una riga di codice (anche se è
sbagliata). Se ti fa sentire meglio, copia il tuo programma in un altro
file prima di iniziare a ridurlo. Poi puoi reincollare i pezzi un po’
alla volta.</p>
<h2 id="il-percorso-di-studio">Il percorso di studio</h2>
<p>Mentre vai avanti nel resto del libro, non aver paura se i concetti
non sembrano incastrarsi bene al primo colpo. Quando imparavi a parlare,
non era un problema se nei primi anni facevi solo dei teneri gorgoglii.
E andava bene se ti ci volevano sei mesi per passare da un vocabolario
semplice a frasi semplici, altri 5 o 6 anni per passare dalle frasi ai
paragrafi e qualche anno ancora per riuscire a scrivere da solo un
racconto breve, completo e interessante.</p>
<p>Vogliamo che tu impari Python molto più in fretta, quindi nei
prossimi capitoli lo insegniamo tutto insieme. Ma è come imparare una
lingua nuova: ci vuole tempo per assorbirla e capirla prima che ti venga
naturale. Questo crea un po’ di confusione, perché vediamo e rivediamo
gli argomenti per cercare di farti cogliere il quadro d’insieme mentre
definiamo i minuscoli frammenti che lo compongono. Il libro è scritto in
modo lineare e, se segui un corso, anche il corso procederà in modo
lineare; tu però non esitare ad affrontare il materiale in modo per
niente lineare. Guarda avanti e indietro e leggi con mano leggera.
Sfogliando il materiale più avanzato senza capirne fino in fondo i
dettagli, puoi farti un’idea migliore del “perché?” della
programmazione. Ripassando il materiale precedente, e magari rifacendo
gli esercizi già svolti, ti accorgerai di avere imparato davvero molte
cose, anche se il materiale che hai davanti in questo momento ti sembra
un po’ impenetrabile.</p>
<p>Di solito, quando impari il tuo primo linguaggio di programmazione,
ci sono alcuni meravigliosi momenti “Eureka!”, in cui puoi alzare lo
sguardo dalla roccia che stai lavorando a colpi di martello e scalpello,
fare un passo indietro e vedere che stai davvero costruendo una
bellissima scultura.</p>
<p>Se qualcosa ti sembra particolarmente difficile, di solito non serve
a niente restare sveglio tutta la notte a fissarlo. Fai una pausa, fai
un pisolino, mangia qualcosa, spiega a qualcuno (o magari al tuo cane)
qual è il tuo problema, e poi tornaci sopra con occhi freschi. Ti
assicuro che, una volta imparati i concetti di programmazione del libro,
ti guarderai indietro e vedrai che era tutto davvero facile ed elegante,
e che ti serviva solo un po’ di tempo per assimilarlo.</p>
<h2 id="glossario">Glossario</h2>
<dl>
<dt><strong>Analizzare</strong></dt>
<dd>
Esaminare un programma e studiarne la struttura sintattica.
</dd>
<dt><strong>Bug</strong></dt>
<dd>
Un errore in un programma.
</dd>
<dt><strong>Codice macchina</strong></dt>
<dd>
Il linguaggio di livello più basso per il software, cioè il linguaggio
eseguito direttamente dalla CPU.
</dd>
<dt><strong>Codice sorgente</strong></dt>
<dd>
Un programma scritto in un linguaggio di alto livello.
</dd>
<dt><strong>Compilare</strong></dt>
<dd>
Tradurre in una sola volta un programma scritto in un linguaggio di alto
livello in un linguaggio di basso livello, in preparazione
dell’esecuzione successiva.
</dd>
<dt><strong>CPU</strong></dt>
<dd>
Il cuore di qualsiasi computer: è ciò che esegue il software che
scriviamo. Si chiama anche “unità centrale di elaborazione” o
“processore”.
</dd>
<dt><strong>Errore semantico</strong></dt>
<dd>
Un errore in un programma che gli fa fare qualcosa di diverso da quello
previsto dal programmatore.
</dd>
<dt><strong>Funzione <code>print</code></strong></dt>
<dd>
Un’istruzione che fa visualizzare all’interprete Python un valore sullo
schermo.
</dd>
<dt><strong>Interpretare</strong></dt>
<dd>
Eseguire un programma scritto in un linguaggio di alto livello
traducendolo una riga alla volta.
</dd>
<dt><strong>Linguaggio di alto livello</strong></dt>
<dd>
Un linguaggio di programmazione, come Python, progettato per essere
facile da leggere e da scrivere per gli umani.
</dd>
<dt><strong>Linguaggio di basso livello</strong></dt>
<dd>
Un linguaggio di programmazione progettato per essere facile da eseguire
per un computer; è chiamato anche “codice macchina” o “linguaggio
assembly”.
</dd>
<dt><strong>Memoria principale</strong></dt>
<dd>
La parte del computer che memorizza programmi e dati. La memoria
principale perde le sue informazioni quando viene tolta l’alimentazione.
</dd>
<dt><strong>Memoria secondaria</strong></dt>
<dd>
La parte del computer che memorizza programmi e dati e conserva le sue
informazioni anche quando viene tolta l’alimentazione. In genere è più
lenta della memoria principale. Esempi di memoria secondaria sono le
unità disco e la memoria flash delle chiavette USB.
</dd>
<dt><strong>Modalità interattiva</strong></dt>
<dd>
Un modo di usare l’interprete Python digitando comandi ed espressioni al
prompt.
</dd>
<dt><strong>Portabilità</strong></dt>
<dd>
Una proprietà di un programma che gli permette di essere eseguito su più
di un tipo di computer.
</dd>
<dt><strong>Programma</strong></dt>
<dd>
Un insieme di istruzioni che specifica un calcolo.
</dd>
<dt><strong>Prompt</strong></dt>
<dd>
Il messaggio che un programma visualizza quando si ferma in attesa che
l’utente digiti un input.
</dd>
<dt><strong>Risoluzione dei problemi</strong></dt>
<dd>
Il processo che consiste nel formulare un problema, trovare una
soluzione ed esprimerla.
</dd>
<dt><strong>Semantica</strong></dt>
<dd>
Il significato di un programma.
</dd>
</dl>
<h2 id="esercizi">Esercizi</h2>
<p><strong>Esercizio 1:</strong> Qual è la funzione della memoria
secondaria in un computer?</p>
<p>a) Esegue tutti i calcoli e la logica del programma<br />
b) Recupera pagine web da Internet<br />
c) Memorizza le informazioni a lungo termine, anche dopo lo spegnimento
e la riaccensione<br />
d) Accetta input dall’utente</p>
<p><strong>Esercizio 2:</strong> Cos’è un programma?</p>
<p><strong>Esercizio 3:</strong> Qual è la differenza tra un compilatore
e un interprete?</p>
<p><strong>Esercizio 4:</strong> Quale delle seguenti alternative
contiene “codice macchina”?</p>
<p>a) L’interprete Python<br />
b) La tastiera<br />
c) Un file sorgente di Python<br />
d) Un documento di videoscrittura</p>
<p><strong>Esercizio 5:</strong> Cosa c’è di sbagliato nel codice
seguente?</p>
<pre class="python"><code>&gt;&gt;&gt; primt &#39;Hello world!&#39;
  File &quot;&lt;stdin&gt;&quot;, line 1
    primt &#39;Hello world!&#39;
          ^^^^^^^^^^^^^^
SyntaxError: invalid syntax
&gt;&gt;&gt;</code></pre>
<p><strong>Esercizio 6:</strong> In quale parte del computer viene
memorizzata una variabile come <code>x</code> dopo l’esecuzione della
seguente riga di Python?</p>
<pre class="python"><code>x = 123</code></pre>
<p>a) CPU<br />
b) Memoria principale<br />
c) Memoria secondaria<br />
d) Dispositivi di input<br />
e) Dispositivi di output</p>
<p><strong>Esercizio 7:</strong> Cosa stamperà questo programma?</p>
<pre class="python"><code>x = 43
x = x - 1
print(x)</code></pre>
<p>a) 43<br />
b) 42<br />
c) <code>x - 1</code><br />
d) Errore perché <code>x = x - 1</code> non è matematicamente
possibile</p>
<p><strong>Esercizio 8:</strong> Spiega ognuno dei seguenti elementi
usando come esempio una capacità umana: (1) CPU, (2) memoria principale,
(3) memoria secondaria, (4) dispositivo di input e (5) dispositivo di
output. Ad esempio: “Qual è l’equivalente umano di una CPU?”</p>
<section id="footnotes" class="footnotes footnotes-end-of-document"
role="doc-endnotes">
<hr />
<ol>
<li id="fn1"><p>http://xkcd.com/231/<a href="#fnref1"
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
