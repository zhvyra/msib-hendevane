<?php
include_once 'layout/header.php';

include_once 'config/koneksi.php'
?>
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