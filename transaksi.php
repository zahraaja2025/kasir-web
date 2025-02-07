<?php
session_start();
include 'koneksi.php';

$id_produk = $_POST['id_produk'];
$jumlah = $_POST['jumlah'];

$result = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = $id_produk");
$produk = mysqli_fetch_assoc($result);

if (!$produk) {
    die("Produk tidak ditemukan");
}

$keranjang_item = [
    'id' => $produk['id'],
    'nama_produk' => $produk['nama_produk'],
    'harga' => $produk['harga'],
    'jumlah' => $jumlah
];

$_SESSION['keranjang'][] = $keranjang_item;

header('Location: kasir.php');
?>