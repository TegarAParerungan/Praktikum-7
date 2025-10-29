<!DOCTYPE html>
<html>
<head>
    <title>Penghitung Karakter</title>
</head>
<body>

    <h2>Program Penghitung Jumlah Karakter</h2>
    <p>Masukkan sebuah kata atau kalimat di bawah ini:</p>

    <form method="POST" action="">
        <input type="text" name="input_string" size="50" required>
        <button type="submit">Hitung Karakter</button>
    </form>

    <hr>

    <?php
    // Cek apakah form sudah disubmit menggunakan metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data string dari form
        $string = $_POST['input_string'];

        // Hitung panjang string menggunakan strlen()
        $jumlah_karakter = strlen($string);

        // Tampilkan hasilnya
        echo "<h3>Hasil:</h3>";
        echo "String yang Anda masukkan: <strong>" . htmlspecialchars($string) . "</strong><br>";
        echo "Jumlah karakter: <strong>" . $jumlah_karakter . "</strong>";
    }
    ?>

</body>
</html>