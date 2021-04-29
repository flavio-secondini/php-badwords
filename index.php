<!-- VERSIONE CON VARIABILI -->

<h1>Versione con variabili e str_replace</h1>

<?php
  $testo = 'La password della banca è 1234';
  $testo_censurato = str_replace("1234", "***", $testo);
?>

<div class="">
  il testo originale è: <?php var_dump($testo); ?>
</div>

<div class="">
  il testo censurato è: <?php echo $testo_censurato; ?>
</div>

<!-- VERSIONE CON GET -->

<h1>Versione ottenuta con GET</h1>
<p>(inserire valore "badword" nell'url)</p>

<?php
$testo = $_GET["badword"];
$censura = str_replace($_GET["badword"], '***', $testo);
?>

<div class="">
  La badword scelta è <?php var_dump($testo); ?>
</div>

<div class="">
  La badword censurata è "<?php echo $censura; ?>"
</div>
