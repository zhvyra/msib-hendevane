<?php

class Pelanggan
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataPelanggan()
    {
        $sql = "SELECT pelanggan.*, kartu.nama as kartu FROM pelanggan INNER JOIN kartu ON kartu.id = pelanggan.kartu_id";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getPelanggan($id)
    {
        $sql = "SELECT pelanggan.*, kartu.nama as kartu FROM pelanggan INNER JOIN kartu ON kartu.id = pelanggan.kartu_id WHERE pelanggan.id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function tambahPelanggan($data)
    {
        $sql = "INSERT INTO pelanggan (kode, nama, jk, tmp_lahir, tgl_lahir, email, kartu_id) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
    }

    public function ubahPelanggan($data)
    {
        $sql = "UPDATE pelanggan SET kode = ?, nama = ?, jk = ?, tmp_lahir = ?, tgl_lahir = ?, email = ?, kartu_id = ? WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
    }

    public function hapusPelanggan($id)
    {
        $sql = "DELETE FROM pelanggan WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($id);
    }
}
