<!DOCTYPE html>
<html>
<head>
    <title>Informasi Kontak</title>
</head>
<body>

    <h2>Informasi Kontak</h2>

    <?php
    // Membuat array asosiatif untuk menyimpan data kontak
    $kontak = [
        "nama" => "Andi Wijaya",
        "email" => "andi.wijaya@example.com",
        "nomor_telepon" => "081234567890"
    ];

    // Menampilkan informasi tersebut ke layar
    echo "Nama: <strong>" . $kontak["nama"] . "</strong><br>";
    echo "Alamat Email: <strong>" . $kontak["email"] . "</strong><br>";
    echo "Nomor Telepon: <strong>" . $kontak["nomor_telepon"] . "</strong><br>";
    ?>

</body>
</html>