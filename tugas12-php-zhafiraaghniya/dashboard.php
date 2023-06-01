<?php
session_start();
include_once 'layout/header.php';

include_once 'config/koneksi.php';

include_once 'models/Produk.php';
include_once 'models/JenisProduk.php';
include_once 'models/Kartu.php';
include_once 'models/Pelanggan.php';
include_once 'models/Pesanan.php';
?>

<?php if (isset($_SESSION['member'])) : ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">

                <?php
                if (isset($_GET['url'])) {
                    $url = $_GET['url'];
                    if ($url == 'dashboard') {
                        include_once 'view/dashboard.php';
                    } else if (!empty($url)) {
                        include_once 'view/' . $url . '.php';
                    }
                } else {
                    include_once 'view/dashboard.php';
                }


                ?>
            </div>
        </main>

        <?php
        include_once 'layout/footer.php';
        ?>
    <?php else : ?>
        <?php echo "<script>alert('Silahkan login terlebih dahulu'); window.location.href='login.php';</script>"; ?>
    <?php endif; ?>