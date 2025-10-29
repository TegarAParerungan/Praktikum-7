<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator dengan Fungsi</title>
    <style>
        body { font-family: sans-serif; }
        .container { border: 1px solid #ccc; padding: 20px; width: 300px; border-radius: 5px; }
        input[type="number"] { width: 95%; padding: 5px; margin-bottom: 10px; }
        button { margin-right: 5px; padding: 8px 12px; cursor: pointer; }
    </style>
</head>
<body>

<div class="container">
    <h2>Kalkulator Sederhana</h2>

    <form method="POST" action="">
        Bilangan 1: <br>
        <input type="number" name="bil1" value="<?php echo isset($_POST['bil1']) ? $_POST['bil1'] : ''; ?>" required> <br>
        Bilangan 2: <br>
        <input type="number" name="bil2" value="<?php echo isset($_POST['bil2']) ? $_POST['bil2'] : ''; ?>" required> <br><br>

        <button type="submit" name="operasi" value="tambah">Penjumlahan</button>
        <button type="submit" name="operasi" value="kurang">Pengurangan</button>
        <button type="submit" name="operasi" value="kali">Perkalian</button>
        <button type="submit" name="operasi" value="bagi">Pembagian</button>
    </form>
    <hr>
    <h3>Hasil perhitungan:</h3>

    <?php
    // --- FUNGSI-FUNGSI OPERASI MATEMATIKA ---
    function penjumlahan($a, $b) {
        return $a + $b;
    }

    function pengurangan($a, $b) {
        return $a - $b;
    }

    function perkalian($a, $b) {
        return $a * $b;
    }

    function pembagian($a, $b) {
        if ($b == 0) {
            return "Error: Tidak bisa dibagi dengan 0!";
        } else {
            return $a / $b;
        }
    }

    // --- LOGIKA UTAMA ---
    // Cek apakah salah satu tombol operasi sudah ditekan
    if (isset($_POST['operasi'])) {
        $bil1 = (float)$_POST['bil1'];
        $bil2 = (float)$_POST['bil2'];
        $operasi = $_POST['operasi'];
        $hasil = 0;

        switch ($operasi) {
            case 'tambah':
                $hasil = penjumlahan($bil1, $bil2);
                break;
            case 'kurang':
                $hasil = pengurangan($bil1, $bil2);
                break;
            case 'kali':
                $hasil = perkalian($bil1, $bil2);
                break;
            case 'bagi':
                $hasil = pembagian($bil1, $bil2);
                break;
        }
        
        echo "<strong>$hasil</strong>";
    }
    ?>
</div>

</body>
</html>