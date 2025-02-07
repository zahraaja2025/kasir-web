<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Produk</title>
</head>
<body>
    <h1>Input Produk</h1>
    <form action="simpan_produk.php" method="post">
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" id="nama_produk" name="nama_produk" required><br><br>
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" required><br><br>
        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok" required><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>