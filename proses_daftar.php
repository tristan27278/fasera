<?php
include 'koneksi.php';

$nama     = $_POST['nama'];
$username = $_POST['username'];
$nis      = $_POST['nis'];
$kelas    = $_POST['kelas'];
$password = $_POST['password'];
$role     = "user";

$query = mysqli_query($koneksi, 
"INSERT INTO users (nama, username, nis, kelas, password, role)
 VALUES ('$nama','$username','$nis','$kelas','$password','$role')"
);

if ($query) {
    echo "<script>
        alert('Daftar berhasil, silakan login');
        window.location='login.php';
    </script>";
} else {
    echo "Daftar gagal";
}
