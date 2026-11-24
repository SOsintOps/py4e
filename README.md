
Python per tutti (PY4E)
=======================

Materiali del corso per www.py4e.com (edizione italiana).

La versione Python 3 del codice di esempio si trova tutta nella cartella `code3`.

Se ti interessa il libro *Python per tutti* (*Python for Everybody*),
consulta le cartelle:

* [book3](book3/)
* [figures](figures/)
* [images](images/)
* [code3](code3/)

Per maggiori dettagli consulta il file [`book3/README.md`](book3/README.md).

Installazione in locale (localhost)
-----------------------------------

Ecco i passaggi per installare il sito in locale su Macintosh usando MAMP.

Installa MAMP (o un ambiente analogo) seguendo https://www.wa4e.com/install

Clona questo repository in una cartella di primo livello dentro `htdocs`:

    cd /Applications/MAMP/htdocs
    git clone https://github.com/csev/py4e.git

Entra nella cartella appena clonata e scarica una copia di Tsugi:

    cd py4e
    git clone https://github.com/csev/tsugi.git

Crea un database nel tuo server SQL:

    CREATE DATABASE tsugi DEFAULT CHARACTER SET utf8;
    CREATE USER 'ltiuser'@'localhost' IDENTIFIED BY 'ltipassword';
    GRANT ALL ON tsugi.* TO 'ltiuser'@'localhost';
    CREATE USER 'ltiuser'@'127.0.0.1' IDENTIFIED BY 'ltipassword';
    GRANT ALL ON tsugi.* TO 'ltiuser'@'127.0.0.1';

Restando nella cartella `tsugi`, configura `config.php`:

    cp config-dist.php config.php

Modifica il file `config.php`, scorrendolo e impostando tutte le variabili. Qui sotto trovi
alcuni dei valori usati su MAMP:

    $wwwroot = 'http://localhost:8888/py4e/tsugi';   // Tsugi integrato in locale
    
    ...
    
    $CFG->pdo = 'mysql:host=127.0.0.1;port=8889;dbname=tsugi'; // MAMP
    $CFG->dbuser    = 'ltiuser';
    $CFG->dbpass    = 'ltipassword';
    
    ...
    
    $CFG->adminpw = 'short';
    
    ...
    
    $CFG->apphome = 'http://localhost:8888/py4e';
    $CFG->context_title = "Python for Everybody";
    $CFG->lessons = $CFG->dirroot.'/../lessons.json';
    
    ... 
    
    $CFG->tool_folders = array("admin", "../tools", "../mod");
    $CFG->install_folder = $CFG->dirroot.'./../mod'; // Tsugi come store
    
    ...
    
    $CFG->servicename = 'PY4E';

(Opzionale) Se vuoi usare l'accesso con Google,
vai su https://console.developers.google.com/apis/credentials e
crea un "OAuth Client ID". Scegli "Web Application", dagli un nome e
inserisci quanto segue in "Authorized JavaScript Origins":

        http://localhost

E questo in "Authorized redirect URI":

    http://localhost/py4e/login

Nota: nella configurazione di Google non servono i numeri di porta per nessuno di questi due valori.

Google ti fornirà un `client ID` e un `client secret`: aggiungili a `config.php`
in questo modo:

    $CFG->google_client_id = '96..snip..oogleusercontent.com';
    $CFG->google_client_secret = 'R6..snip..29a';

Mentre sei lì, puoi fare clic su "Create credentials", scegliere "API
key", chiamare la chiave "My Google MAP API Key" e inserirla
in `config.php` così:

    $CFG->google_map_api_key = 'AIza..snip..9e8';

Alcuni file importanti
----------------------

Il file `tsugi_settings.php` è incluso in `tsugi/config.php`: di solito contiene le variabili
di configurazione non riservate.

Il file `tsugi.php` monta i controller comuni come `/announcements`, `/login` e `/pages` direttamente sotto
`py4e`, così da integrare le funzioni LMS di Tsugi al primo livello del sito.

La navigazione è gestita da `nav.php` (o `buildmenu.php` nelle installazioni più recenti).

Avviare l'applicazione
----------------------

Terminata la configurazione sopra, apri nel browser l'indirizzo:

    http://localhost:8888/py4e/tsugi/

Il sistema segnalerà che le tabelle del database non esistono ancora e ti suggerirà di
usare la console di amministrazione per crearle:

    http://localhost:8888/py4e/tsugi/admin

Ti verrà chiesta la password `$CFG->adminpw` impostata in `config.php` per sbloccare
la console di amministrazione. Esegui l'opzione "Upgrade Database": verranno create le
tabelle nel database e l'avviso rosso relativo al database dovrebbe sparire.

In alternativa, puoi creare tutte le tabelle del database da riga di comando con:

    cd py4e/tsugi/admin
    php upgrade.php

Ricarica la pagina `/py4e/tsugi` finché tutti i messaggi di errore non scompaiono.
Una volta spariti gli errori, anche la pagina principale dovrebbe aprirsi senza errori:

    http://localhost:8888/py4e/

Nel database, apri la tabella `lti_key`, cerca la riga con `key_key` uguale a
`google.com` e inserisci un valore qualsiasi nella colonna `secret`:
non lasciarla vuota, altrimenti gli strumenti LTI interni non si avvieranno.

Poi usa l'interfaccia di amministrazione per installare lo strumento di peer-grading
dal repository GitHub:

    http://localhost:8888/py4e/tsugi/admin/install

Fai clic su "Available Modules" e installa `https://github.com/tsugitools/peer-grade`,
quindi esegui di nuovo l'aggiornamento del database per creare le relative tabelle.

Installa poi lo strumento "Gift Quiz" ed esegui di nuovo l'aggiornamento del database.

Se vuoi accedere ai contenuti dei quiz, contatta Chuck per richiedere l'accesso
al repository privato `py4e-private`. L'accesso viene concesso solo a chi installa
davvero il software e risulta docente del corso che adotta questi materiali.
Per clonare il repository privato (dopo l'abilitazione da parte di Chuck):

    cd py4e
    git clone https://github.com/csev/py4e-private.git

Aggiungi poi la riga seguente al tuo `config.php`:

    $CFG->giftquizzes = $CFG->dirroot.'/../py4e-private/quiz';

A quel punto ti servirà la password di sblocco dei quiz (sempre fornita da Chuck) per poter
avviare e caricare tutti i quiz (uno alla volta) dal repository. Devi caricare i quiz
separatamente per ciascun corso (contesto), ma almeno non devi digitarli tutti a mano.

Gli altri due strumenti LTI necessari fanno già parte del repository `py4e` e si trovano nella
cartella `py4e/tools`.

Puoi sempre testare gli strumenti usando l'"App Store" all'indirizzo:

    http://localhost:8888/py4e/tools/

Questo ti permette di eseguire avvii di prova come docente e come studente in un ambiente di test usando la
chiave `12345`.

Usare l'applicazione
--------------------

Apri nel browser:

    http://localhost:8888/py4e/

Esplora il sito senza accedere per verificare che funzioni tutto.

Poi accedi con il tuo account Google: l'interfaccia dovrebbe cambiare. In particolare dovresti
vedere la voce "Compiti" (Assignments) e dentro "Lezioni" dovrebbero comparire i correttori automatici LTI.

Diventare docente nel corso globale
-----------------------------------

Tsugi può integrare i contenuti in un Learning Management System tramite avvii LTI e chiavi LTI.

Puoi anche gestire un "MOOC" in cui gli studenti accedono direttamente con Google al tuo sito, svolgono gli esercizi,
seguono i propri voti e ottengono badge.

Per "promuovere" il tuo account studente ad account docente procedi così:

* Accedi con il tuo account Google.

* Vai su `/tsugi/admin` (nota che la voce "Amministra" non appare nel menu finché non visiti questa pagina almeno una volta e non effettui l'accesso).

* Inserisci la password di amministrazione scelta in `config.php` per entrare nella console.

* Nella console di amministrazione seleziona `View Contexts`: rappresentano i "corsi". Se hai appena configurato il sito ce ne sarà uno solo; altrimenti individua il corso corrispondente al `context_name` configurato e aprilo.

* Trova il tuo account nell'elenco degli iscritti (puoi cercarlo tramite indirizzo Gmail se ce ne sono molti) e apri la tua scheda.

* Modifica la scheda impostando il valore di `Role Override` a `1000` e salva.

Fatto! Ora tu (e chiunque altro a cui assegni questo permesso) sei docente del corso globale.

Diventare docente in un corso avviato via LTI quando l'LMS non supporta il ruolo docente
----------------------------------------------------------------------------------------

Alcuni LMS non inviano il ruolo docente nel modo atteso: a volte non lo inviano affatto,
altre volte non lo inviano per gli assistenti alla didattica, oppure potresti voler promuovere
alcuni studenti ad assistenti.

In Tsugi è molto semplice farlo:

* Accedi a `/tsugi/admin` come indicato nelle istruzioni precedenti.

* Individua il contesto corrispondente al corso avviato via LTI e aprilo.

* Trova la scheda dell'utente tra gli iscritti (spesso cercando per indirizzo email), modificala
  impostando `Role Override` a `1000` e salvala.

Da quel momento in poi, indipendentemente dal ruolo inviato dall'LMS, quell'utente sarà riconosciuto
come docente da Tsugi.
