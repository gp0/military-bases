<h5><?= $base["name"] ?></h5>
<p>Established: <?= $base['start'] ?></p>
<? if ($base['end'] > 0) { ?><p>Left: <?= $base['end'] ?></p><? } ?>
<p>Source: <i><a href="<?= $base['source'] ?>"><?= $base['domain'] ?></a></i></p>