<?php
    include "koneksi.php";

    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM `laporan` WHERE id='$id'");

    $data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>id : <?= $data['id']; ?></div>
    <div>id_user : <?= $data['id_user']; ?></div>
    <div>kategori : <?= $data['kategori']; ?></div>
    <div>lokasi : <?= $data['lokasi']; ?></div>
    <div>keterangan : <?= $data['keterangan']; ?></div>
    <div>status : <?= $data['status']; ?></div>
    <div>tanggal : <?= $data['tanggal']; ?></div>

    <h1>Feedback Admin</h1>
    <textarea name="" id="">
        <?= $data['feedback']; ?>
    </textarea>
</body>
</html>