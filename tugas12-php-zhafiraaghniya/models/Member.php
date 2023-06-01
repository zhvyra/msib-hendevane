<?php

include_once '../config/koneksi.php';

class Member
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function checkLogin($data)
    {
        $sql = "SELECT * FROM member WHERE username = ? AND password = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
}
