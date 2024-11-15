<?php
// Ambil parameter dari URL
$nama_pasangan = isset($_GET['Vanix']) ? htmlspecialchars($_GET['Ridhal']) : "Cintaku";
$pesan = isset($_GET['pesan']) ? htmlspecialchars($_GET['pesan']) : "Selamat Tidur Cinta ❤️";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ucapan Spesial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Halo,Vanix <?= $nama_pasangan; ?>!</h1>
        <p><?= $pesan; ?></p>
        <footer>❤️ Dari seseorang yang mencintaimu ❤️</footer>
    </div>
</body>
</html>
