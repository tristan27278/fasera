<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM laporan");
?>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>ID User</th>
        <th>Kategori</th>
        <th>Lokasi</th>
        <th>Keterangan</th>
        <th>Status</th>
        <th>Feedback</th>
        <th>Aksi</th>
    </tr>

    <?php while ($data = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?= $data['id']; ?></td>
            <td><?= $data['id_user']; ?></td>
            <td><?= $data['kategori']; ?></td>
            <td><?= $data['lokasi']; ?></td>
            <td><?= $data['keterangan']; ?></td>
            <td><?= $data['status']; ?></td>
            <td><?= $data['feedback']; ?></td>
            <td>
                <a href="detail-pengaduan.php?id=<?= $data['id']; ?>">
                    Detail
                </a>
            </td>
        </tr>
    <?php } ?>
</table>
