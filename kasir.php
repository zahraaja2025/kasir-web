<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kasir</title>
</head>
<body>
    <h1>Kasir</h1>
    <form action="transaksi.php" method="post">
        <label for="id_produk">ID Produk:</label>
        <input type="number" id="id_produk" name="id_produk" required><br><br>
        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" required><br><br>
        <button type="submit">Tambah ke Keranjang</button>
    </form>
    <h2>Keranjang</h2>
    <table border="1">
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
        </tr>
        <?php
        session_start();
        if (isset($_SESSION['keranjang'])) {
            foreach ($_SESSION['keranjang'] as $item) {
                echo "<tr>";
                echo "<td>" . $item['id'] . "</td>";
                echo "<td>" . $item['nama_produk'] . "</td>";
                echo "<td>" . $item['harga'] . "</td>";
                echo "<td>" . $item['jumlah'] . "</td>";
                echo "<td>" . ($item['harga'] * $item['jumlah']) . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    <br>
    <form action="selesai.php" method="post">
        <button type="submit">Selesaikan Transaksi</button>
    </form>
</body>
</html>