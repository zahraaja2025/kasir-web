<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php
        $result = mysqli_query($koneksi, "SELECT * FROM produk");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama_produk'] . "</td>";
            echo "<td>" . $row['harga'] . "</td>";
            echo "<td>" . $row['stok'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>