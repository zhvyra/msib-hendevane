<?php

$id = $_GET['id'];
$produk = new Produk();
$data_produk = $produk->getProduk($id);

?>

<h1>
    <?= $data_produk['nama_produk']; ?>
</h1>