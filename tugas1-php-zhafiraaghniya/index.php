<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Jajar Genjang</title>
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

    input {
        width: 100%;
        margin: .4rem 0;
        padding: .5rem 0;
        border-radius: .5rem;
        border: none;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
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
        <h1>Hitung Luas & Keliling Jajar Genjang</h1>

        <form method="POST">
            <input type="number" name="alas" placeholder="Masukkan Alas" required>
            <input type="number" name="tinggi" placeholder="Masukkan Tinggi" required>
            <input type="number" name="sisi" placeholder="Masukkan Sisi Miring" required>
            <?php
            if (isset($_POST['submit'])) {
                $alas = $_POST['alas'];
                $tinggi = $_POST['tinggi'];
                $sisi = $_POST['sisi'];
            ?>
                <input type="text" readonly value="KELILING : <?= 2 * ($alas + $sisi) ?>">
                <input type="text" readonly value="LUAS : <?= ($alas * $tinggi) ?>">

            <?php
            }
            ?>
            <button name="submit">Calculate</button>
        </form>




    </main>
</body>

</html>