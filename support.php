<?php

if ( ! defined('COOKIE_SESSION') ) {
    define('COOKIE_SESSION', true);
}

use Tsugi\Controllers\Stripe;
use Tsugi\UI\Supporter;

require_once __DIR__ . '/top.php';
require_once __DIR__ . '/nav.php';

global $CFG;

$site_name = $CFG->supporterSiteName();
$site_label = $CFG->supporterSiteLabel();
$supporter_label = $CFG->supporterLabel();
$price_phrase = $CFG->supporterPricePhrase();
$premium_period = $CFG->premiumMonthsLabel();
$refund_policy = $CFG->refundPolicy();
$stripe_url = Stripe::checkoutUrl($CFG);
$hero_image = rtrim($CFG->apphome, '/') . '/artwork/master-programmer.png';
$support = Supporter::currentSupport($CFG);
$extending = is_array($support) && !empty($support['is_active']);
$until_label = $extending ? (string) ($support['premium_until_label'] ?? '') : '';
?>
<style>
.support-hero-link {
    float: right;
    width: min(100%, 18rem);
    max-width: 18rem;
    margin: 0 0 1rem 1.5rem;
}
.support-hero-link img {
    display: block;
    width: 100%;
    border-radius: 50%;
    box-shadow: 0 0.25rem 1rem rgba(0, 0, 0, 0.15);
}
.support-body h1 {
    margin-top: 0;
}
.support-video-placeholder {
    clear: both;
    margin: 1.5rem 0 2rem;
    padding: 3rem 1.5rem;
    text-align: center;
    border: 2px dashed var(--border-color, #ccc);
    border-radius: 0.5rem;
    color: var(--text-muted, #666);
    background: var(--background-color);
}
.support-cta {
    margin: 2rem 0 1rem;
    padding: 1.25rem 1.5rem;
    border-radius: 0.5rem;
    background: var(--background-darker, #f5f5f5);
}
.support-cta .btn {
    margin-top: 0.75rem;
}
</style>
<main id="container">
<div class="support-body">
<a class="support-hero-link" href="https://www.masterprogrammer.com/" target="_blank" rel="noopener noreferrer" title="Master Programmer">
<img class="support-hero" src="<?= htmlspecialchars($hero_image) ?>" alt="Master Programmer — cresci, costruisci, risolvi, guida">
</a>
<h1><?= htmlspecialchars($supporter_label) ?></h1>
<p>
<?= htmlspecialchars($site_label) ?> è gratuito per tutti, e lo abbiamo creato perché resti così: lezioni aperte,
correttori automatici e materiali che puoi usare senza pagare.
</p>

<h2>Perché chiediamo un sostegno</h2>
<p>
Gestire questo sito richiede lavoro vero: server, software, hosting dei video, aggiornamenti di sicurezza e il tempo
per far funzionare bene centinaia di lezioni e strumenti per chi studia in tutto il mondo.
</p>
<p>
Il contributo <strong><?= htmlspecialchars($supporter_label) ?></strong> è facoltativo. Aiuta a coprire questi costi
e tiene <?= htmlspecialchars($site_name) ?> a disposizione del prossimo studente che arriva qui.
In cambio ricevi sul tuo profilo lo stato di sostenitore per <?= htmlspecialchars($premium_period) ?>: è un piccolo grazie, non sblocca funzioni in più.
</p>
</div>

<?php /*
<div class="support-video-placeholder" id="support-video">
<p><strong>Video coming soon</strong></p>
<p>We will add a short message here about what your support makes possible.</p>
</div>
*/ ?>

<h2><?= $extending ? 'Prolunga il tuo sostegno' : 'Diventa un sostenitore' ?></h2>
<?php if ($extending) { ?>
<p>
Hai già lo stato di <?= htmlspecialchars($supporter_label) ?><?php if ($until_label !== '') { ?>
, con scadenza <strong><?= htmlspecialchars($until_label) ?></strong><?php } ?>.
Un altro contributo aggiunge <?= htmlspecialchars($premium_period) ?> a quella data.
</p>
<?php } ?>
<p>
I pagamenti passano in modo sicuro attraverso il nostro fornitore di servizi di pagamento. L'importo esatto nella tua valuta
compare nella schermata successiva<?php if ($price_phrase !== '') { ?>
 (<?= htmlspecialchars($price_phrase) ?>)<?php } ?>.
<?php if ($refund_policy !== '') { ?>
<em><?= htmlspecialchars($refund_policy) ?></em>
<?php } ?>
</p>

<div class="support-cta">
<p style="margin: 0;">
<?= $extending
    ? 'Vuoi aggiungere ' . htmlspecialchars($premium_period) . '? Quando sei pronto, vai al pagamento.'
    : 'Vuoi dare una mano? Quando sei pronto, vai al pagamento.' ?>
</p>
<p style="margin: 0.5rem 0 0;">
<a href="<?= htmlspecialchars($stripe_url) ?>" class="btn btn-success">Vai al pagamento</a>
<a href="<?= htmlspecialchars(rtrim($CFG->apphome, '/') . '/profile') ?>" class="btn btn-default">Torna al profilo</a>
</p>
</div>
</main>
<?php require_once __DIR__ . '/footer.php'; ?>
