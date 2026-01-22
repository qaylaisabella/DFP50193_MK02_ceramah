<!-- pengesahan.php -->
<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$kategori = $_POST['kategori'];
$slot = $_POST['slot'];
$harga_unit = 2500;
$jumlah = $slot * $harga_unit;
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Pengesahan Pendaftaran</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        h1 { color: #5a3e36; }
        .detail { margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Pengesahan Pendaftaran</h1>
    <div class="detail">
        <p><strong>Nama:</strong> <?= $nama ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Telefon:</strong> <?= $telefon ?></p>
        <p><strong>Kategori:</strong> <?= $kategori ?></p>
        <p><strong>Bilangan Slot:</strong> <?= $slot ?></p>
        <p><strong>Jumlah Yuran:</strong> RM <?= number_format($jumlah, 2) ?></p>
        <p>Terima kasih kerana mendaftar! Sila simpan bukti pembayaran anda.</p>
    </div>
</body>
</html>
