<?php
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

$pos_head_start = strpos($HTML,'<head');
$pos_head_start = strpos($HTML,'<',$pos_head_start+1);
$pos_head_end = strpos($HTML,'</head',$pos_head_start);
$pos_body = strpos($HTML,'<body',$pos_head_end);
$pos_body = strpos($HTML,'<',$pos_body+1);
$pos_end = strpos($HTML,'</body',$pos_body);
$head = substr($HTML, $pos_head_start, $pos_head_end-$pos_head_start);
$body = substr($HTML, $pos_body, $pos_end-$pos_body);
require_once "top.php";
require_once "nav.php";

function x_sel($file) {
    global $HTML_FILE;
    $retval = 'value="'.$file.'"';
    if ( strpos($HTML_FILE, $file) === 0 ) {
        $retval .= " selected";
    }
    return $retval;
}

?>
<script>
function onSelect() {
    console.log($('#chapters').val());
    window.location = $('#chapters').val();
}
</script>
<div style="float:right">
<select id="chapters" onchange="onSelect();" aria-label="Vai al capitolo">
  <option <?= x_sel("01-intro") ?>>Capitolo 1: Introduzione</option>
  <option <?= x_sel("02-variables") ?>>Capitolo 2: Variabili</option>
  <option <?= x_sel("03-conditional") ?>>Capitolo 3: Esecuzione condizionale</option>
  <option <?= x_sel("04-functions") ?>>Capitolo 4: Funzioni</option>
  <option <?= x_sel("05-iterations") ?>>Capitolo 5: Iterazione</option>
  <option <?= x_sel("06-strings") ?>>Capitolo 6: Stringhe</option>
  <option <?= x_sel("07-files") ?>>Capitolo 7: File</option>
  <option <?= x_sel("08-lists") ?>>Capitolo 8: Liste</option>
  <option <?= x_sel("09-dictionaries") ?>>Capitolo 9: Dizionari</option>
  <option <?= x_sel("10-tuples") ?>>Capitolo 10: Tuple</option>
  <option <?= x_sel("11-regex") ?>>Capitolo 11: Espressioni regolari</option>
  <option <?= x_sel("12-network") ?>>Capitolo 12: Programmi in rete</option>
  <option <?= x_sel("13-web") ?>>Capitolo 13: Usare i servizi web</option>
  <option <?= x_sel("14-objects") ?>>Capitolo 14: Programmazione orientata agli oggetti</option>
  <option <?= x_sel("15-database") ?>>Capitolo 15: Usare i database e SQL</option>
  <option <?= x_sel("16-viz") ?>>Capitolo 16: Visualizzare i dati</option>
</select>
</div>

<?php
echo($body);

$OUTPUT->footerStart();
?>
<hr/>
<p>
Se trovi un errore in questo libro, puoi inviare una correzione su
<a href="https://github.com/csev/py4e/tree/master/book3" target="_blank" rel="noopener noreferrer">GitHub</a>.
</p>
<script>
function onSelectFooter() {
    console.log($('#chapters_footer').val());
    window.location = $('#chapters_footer').val();
}
</script>
<div style="float:right">
<select id="chapters_footer" onchange="onSelectFooter();" aria-label="Vai al capitolo">
  <option <?= x_sel("01-intro") ?>>Capitolo 1: Introduzione</option>
  <option <?= x_sel("02-variables") ?>>Capitolo 2: Variabili</option>
  <option <?= x_sel("03-conditional") ?>>Capitolo 3: Esecuzione condizionale</option>
  <option <?= x_sel("04-functions") ?>>Capitolo 4: Funzioni</option>
  <option <?= x_sel("05-iterations") ?>>Capitolo 5: Iterazione</option>
  <option <?= x_sel("06-strings") ?>>Capitolo 6: Stringhe</option>
  <option <?= x_sel("07-files") ?>>Capitolo 7: File</option>
  <option <?= x_sel("08-lists") ?>>Capitolo 8: Liste</option>
  <option <?= x_sel("09-dictionaries") ?>>Capitolo 9: Dizionari</option>
  <option <?= x_sel("10-tuples") ?>>Capitolo 10: Tuple</option>
  <option <?= x_sel("11-regex") ?>>Capitolo 11: Espressioni regolari</option>
  <option <?= x_sel("12-network") ?>>Capitolo 12: Programmi in rete</option>
  <option <?= x_sel("13-web") ?>>Capitolo 13: Usare i servizi web</option>
  <option <?= x_sel("14-objects") ?>>Capitolo 14: Programmazione orientata agli oggetti</option>
  <option <?= x_sel("15-database") ?>>Capitolo 15: Usare i database e SQL</option>
  <option <?= x_sel("16-viz") ?>>Capitolo 16: Visualizzare i dati</option>
</select>
</div>
<?php
$OUTPUT->footerEnd();
