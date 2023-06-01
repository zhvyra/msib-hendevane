<?php
include_once '../models/Member.php';

switch ($_POST['tombol']) {
    case 'masuk':
        $username = $_POST['username'];
        $password = sha1(md5($_POST['password']));

        $data = [$username, $password];

        $member = new Member();

        $row = $member->checkLogin($data);

        if (!empty($row)) {
            session_start();
            $_SESSION['member'] = $row;
            header("location:../dashboard.php?url=dashboard");
        } else {
            echo "<script>alert('Username atau Password salah');</script>";
            echo "<script>window.location.href='../login.php';</script>";
        }
        break;

    case 'keluar':
        session_start();
        session_destroy();
        header("location:../home.php");
        break;

    default:
        header("location:../login.php");
        break;
}
