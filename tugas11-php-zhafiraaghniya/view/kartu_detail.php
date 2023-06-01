<?php

$id = $_GET['id'];
$kartu = new Kartu();
$data_kartu = $kartu->getKartu($id);

?>

<h1>
    <?= $data_kartu['nama']; ?>
</h1>