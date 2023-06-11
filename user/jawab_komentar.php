<?php
require '../function/detail.php';
// require '../function/koneksi.php';


if (empty($_POST)) {
    header("Location:index.php");
    exit;
}

if (!isset($_POST['id_produk']) || empty($_POST['id_produk'])) {
    header("Location:index.php");
    exit;
}

$pdo = require 'koneksi.php';

$sql = "INSERT INTO komentar (komentar, tanggal, id_produk, id_user)
VALUES (:komentar, now(), :id_produk, :id_user)";

$query = $pdo->prepare($sql);
$query->execute(array(
    'komentar' => $_POST['komentar'],
    'id_produk' => $_POST['id_produk'],
    'id_user' => $_SESSION['user']['id_user'],
));

header("Location:detail.php/?id=" . $_POST['id_produk']);
exit;
