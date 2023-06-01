<?php

$id = $_GET['id'];
$pelanggan = new Pelanggan();
$data_pelanggan = $pelanggan->getPelanggan($id);

?>

<h1>
    <?= $data_pelanggan['nama']; ?>
</h1>