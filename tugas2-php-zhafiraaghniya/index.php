<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hitung Gaji</title>
</head>
<style>
    * {
        text-align: center;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: #023047;
        padding: 0;
        margin: 0;
    }

    body {
        background-color: #023047;
    }

    main {
        max-width: 300px;
        margin: 5rem auto;
        border-radius: 1rem;
        padding: 2rem;
        background-color: #8ecae6;
    }

    h1 {
        padding-bottom: 1rem;
    }

    input,
    select {
        width: 100%;
        margin: .4rem 0;
        padding: .5rem 0;
        border-radius: .5rem;
        border: none;
    }


    button {
        border-radius: .5rem;
        margin: .5rem 0;
        padding: .5rem 0;
        width: 100%;
        background-color: #023047;
        color: #8ecae6;
        border: none;
    }

    button:hover {
        background-color: #063e56;
        cursor: pointer;
    }
</style>

<body>
    <main>
        <h1>Form Hitung Gaji</h1>
        <form method="POST">
            <input type="text" name="nama" placeholder="Masukan Nama" required>
            <select name="jabatan" required>
                <option>-- Pilih Jabatan --</option>
                <option value="manager">Manager</option>
                <option value="asisten">Asisten</option>
                <option value="kabag">Kabag</option>
                <option value="staff">Staff</option>
            </select>
            <select name="status" required>
                <option>-- Pilih Status --</option>
                <option value="menikah-anak-2">Menikah Anak 0-2</option>
                <option value="menikah-anak-3">Menikah Anak 3-5</option>
                <option value="belum-menikah">Belum Menikah</option>
            </select>
            <select name="agama" required>
                <option>-- Pilih Agama --</option>
                <option value="islam">Islam</option>
                <option value="bukan-islam">Bukan Islam</option>
            </select>
            <?php
            if (isset($_POST["submit"])) {
                $nama = $_POST["nama"];
                $jabatan = $_POST["jabatan"];
                $status = $_POST["status"];
                $agama = $_POST["agama"];

                switch ($jabatan) {
                    case ("manager"):
                        $gaji_pokok = 20000000;
                        break;
                    case ("asisten"):
                        $gaji_pokok = 15000000;
                        break;
                    case ("kabag"):
                        $gaji_pokok = 10000000;
                        break;
                    case ("staff"):
                        $gaji_pokok = 4000000;
                        break;
                    default:
                        exit();
                }

                $tunjangan_jabatan = $gaji_pokok * 0.2;

                if ($status == "menikah-anak-2") {
                    $tunjangan_keluarga = $gaji_pokok * 0.05;
                } else if ($status == "menikah-anak-3") {
                    $tunjangan_keluarga = $gaji_pokok * 0.1;
                } else {
                    $tunjangan_keluarga = 0;
                }

                $gaji_kotor = $tunjangan_jabatan + $tunjangan_keluarga + $gaji_pokok;

                $zakat = ($agama == "islam" && $gaji_kotor >= 6000000) ? $gaji_kotor * 0.025 : 0;

                $take_home_pay = $gaji_kotor - $zakat;
            ?>
                <input type="text" readonly value="GAJI POKOK : <?= $gaji_pokok ?>">
                <input type="text" readonly value="TUNJANGAN JABATAN : <?= $tunjangan_jabatan ?>">
                <input type="text" readonly value="TUNJANGAN KELUARGA : <?= $tunjangan_keluarga ?>">
                <input type="text" readonly value="GAJI KOTOR : <?= $gaji_kotor ?>">
                <input type="text" readonly value="ZAKAT : <?= $zakat ?>">
                <input type="text" readonly value="TAKE HOME PAY : <?= $take_home_pay ?>">
            <?php
            }
            ?>
            <button name="submit">Submit</button>
        </form>
    </main>


</body>

</html>