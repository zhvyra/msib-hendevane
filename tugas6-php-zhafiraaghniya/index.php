<?php

abstract class Bentuk2D
{
    abstract protected function luasBidang();
    abstract protected function kelilingBidang();
}


class Lingkaran extends Bentuk2D
{
    public $jarijari;

    public function __construct($jarijari)
    {
        $this->jarijari = $jarijari;
    }

    public function namaBidang()
    {
        return "Lingkaran";
    }

    public function luasBidang()
    {
        return 3.14 * $this->jarijari * $this->jarijari;
    }

    public function kelilingBidang()
    {
        return 2 * $this->jarijari * 3.14;
    }
}

class PersegiPanjang extends Bentuk2D
{
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang()
    {
        return "Persegi Panjang";
    }

    public function luasBidang()
    {
        return $this->panjang * $this->lebar;
    }

    public function kelilingBidang()
    {
        return ($this->panjang + $this->lebar) * 2;
    }
}

class Segitiga extends Bentuk2D
{
    public $alas;
    public $tinggi;
    public $sisi;

    public function __construct($alas, $tinggi, $sisi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $sisi;
    }

    public function namaBidang()
    {
        return "Segitiga";
    }

    public function luasBidang()
    {
        return ($this->alas * $this->tinggi) / 2;
    }

    public function kelilingBidang()
    {
        return $this->sisi * 3;
    }
}

$l1 = new Lingkaran(14);
$l2 = new Lingkaran(21);
$p1 = new PersegiPanjang(10, 5);
$p2 = new PersegiPanjang(20, 10);
$s1 = new Segitiga(10, 8, 7);
$s2 = new Segitiga(3, 5, 4);

$data = [$l1, $l2, $p1, $p2, $s1, $s2];

?>

<table border="1" cellpadding="20" cellspacing="0" width="50%" style="font-family: sans-serif;">
    <tr>
        <th>Nama Bidang</th>
        <th>Luas Bidang</th>
        <th>Keliling Bidang</th>
    </tr>
    <?php foreach ($data as $data) : ?>
        <tr>
            <td><?= $data->namaBidang(); ?></td>
            <td><?= $data->luasBidang(); ?></td>
            <td><?= $data->kelilingBidang(); ?></td>
        </tr>
    <?php endforeach ?>
</table>