<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Function</title>
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
        max-width: 600px;
        margin: 5rem auto;
        border-radius: 1rem;
        padding: 2rem;
        background-color: #8ecae6;
    }

    h1 {
        padding-bottom: 1rem;
    }

    input:not([type="radio"], [type="checkbox"]),
    select {
        width: 100%;
        margin: .4rem 0;
        padding: .5rem 0;
        border-radius: .5rem;
        border: none;
    }

    input[type="radio"] {
        margin: 0.5rem;
    }

    .form-control {
        display: flex;
        align-items: center;
        justify-content: space-around;
        background-color: white;
        border-radius: .5rem;
        margin: .5rem 0;
    }

    .form-control-checkbox {
        padding: .4rem 0;
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        justify-content: center;
        background-color: white;
        border-radius: .5rem;
        margin: .5rem 0;
    }

    .form-control-checkbox div {
        display: flex;
        align-items: center;
        gap: 0.1rem;
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

<?php
$listProdi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "ILKOM" => "Ilmu Komputer", "TE" => "Teknik Elektro"];
$listSkill = ["HTML" => 10, "CSS" => 10, "Javascript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "MySQL" => 30, "Laravel" => 40];
$listDomisili = ["Jakarta", "Bandung", "Bekasi", "Malang", "Surabaya", "lainnya"];
?>

<body>
    <main>
        <h1>Form Hitung Skor Skill</h1>
        <form method="POST">
            <input type="text" name="nim" placeholder="Masukan NIM" required>
            <input type="text" name="nama" placeholder="Masukan Nama" required>
            <input type="email" name="email" placeholder="Masukan Email" required>
            <select name="prodi" required>
                <option>-- Pilih Prodi --</option>
                <?php foreach ($listProdi as $prodi => $value) : ?>
                    <option value="<?= $prodi; ?>"><?= $value; ?></option>
                <?php endforeach ?>
            </select>
            <select name="domisili" required>
                <option>-- Pilih Domisili --</option>
                <?php foreach ($listDomisili as $dom) : ?>
                    <option value="<?= $dom; ?>"><?= $dom; ?></option>
                <?php endforeach ?>
            </select>
            <div class="form-control">
                <div>
                    <input type="radio" name="gender" value="Laki-laki" id="laki" required>
                    <label for="laki">Laki-Laki</label>
                </div>
                <div>
                    <input type="radio" name="gender" value="Perempuan" id="cw" required>
                    <label for="cw">Perempuan</label>
                </div>
            </div>
            <label>Pilih Skill</label>
            <div class="form-control-checkbox">
                <?php foreach ($listSkill as $skill => $value) : ?>
                    <div>
                        <input type="checkbox" name="skill[]" value="<?= $skill; ?>" id="<?= $skill; ?>">
                        <label for="<?= $skill; ?>"><?= $skill; ?></label>
                    </div>
                <?php endforeach ?>
            </div>
            <?php
            if (isset($_POST["submit"])) :
                $nim = $_POST["nim"];
                $nama = $_POST["nama"];
                $gender = $_POST["gender"];
                $prodi = $_POST["prodi"];
                $skillset = $_POST["skill"] ?? "";
                $email = $_POST["email"];

                function setScoreSkill($userSkill, $listSkill)
                {
                    return array_sum(array_filter($listSkill, fn ($key) => in_array($key, $userSkill), ARRAY_FILTER_USE_KEY));
                }

                function setCategorySkill($s)
                {
                    return $s == 0 ? "Tidak Memadai" : ($s <= 40 ? "Kurang" : ($s <= 60 ? "Cukup" : ($s <= 100 ? "Baik" : "Sangat Baik")));
                }

                $skill = $skillset ? implode(", ", $skillset) : "Tidak Memilih Skill";
                $scoreSkill = $skillset ? setScoreSkill($skillset, $listSkill) : 0
            ?>
                <input type="text" readonly value="NIM : <?= $nim ?>">
                <input type="text" readonly value="NAMA : <?= $nama ?>">
                <input type="text" readonly value="JENIS KELAMIN : <?= $gender ?>">
                <input type="text" readonly value="PROGRAM STUDI : <?= $prodi ?>">
                <input type="text" readonly value="SKILL : <?= $skill; ?>">
                <input type="text" readonly value="SCORE SKILL : <?= $scoreSkill; ?>">
                <input type="text" readonly value="SCORE SKILL : <?= setCategorySkill($scoreSkill); ?>">
                <input type="text" readonly value="EMAIL : <?= $email ?>">
            <?php endif ?>
            <button name="submit">Calculate</button>
        </form>
    </main>


</body>

</html>