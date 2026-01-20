<?php
session_start();

if (!isset($_SESSION['login'])) {
    echo "<script>
        alert('Silakan login terlebih dahulu!');
        window.location='login.php';
    </script>";
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Laporan | FOSERA</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e8c5ddf50d.js" crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: aliceblue;
        }

        /* HEADER */
        .header {
            width: 100%;
            height: 70px;
            background-color: #008080;
            display: flex;
            align-items: center;
            padding: 0 30px;
        }

        .logo img {
            height: 55px;
        }

        .nav-menu {
            margin-left: auto;
        }

        .nav-menu ul {
            list-style: none;
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-menu ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        .nav-menu ul li a:hover {
            text-decoration: underline;
        }

        /* CONTAINER */
        .container {
            max-width: 1100px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .container h2 {
            color: #008080;
            margin-bottom: 20px;
            text-align: center;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background-color: #008080;
            color: white;
        }

        table th, table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .status {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            color: white;
        }

        .pending {
            background-color: #f39c12;
        }

        .proses {
            background-color: #3498db;
        }

        .selesai {
            background-color: #2ecc71;
        }

        @media (max-width: 768px) {
            table {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <div class="header">
        <div class="logo">
            <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/cropped-SMK-MUTU-500-x-160-px.png">
        </div>
        <div class="nav-menu">
            <ul>
                <li><a href="index.html">BERANDA</a></li>
                <li><a href="laporan.html">LAPORAN</a></li>
                <li><a href="riwayat.html">RIWAYAT</a></li>
                <li><a href="kontak.html">KONTAK</a></li>
                <li>
                    <a href="login.html">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="container">
        <h2>Riwayat Laporan</h2>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Lokasi</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>10-01-2026</td>
                    <td>Kerusakan Kursi</td>
                    <td>Kerusakan Fasilitas</td>
                    <td>Ruang Kelas XI</td>
                    <td><span class="status pending">Menunggu</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>12-01-2026</td>
                    <td>Kehilangan Helm</td>
                    <td>Kehilangan</td>
                    <td>Parkiran</td>
                    <td><span class="status proses">Diproses</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>15-01-2026</td>
                    <td>Perundungan</td>
                    <td>Perundungan</td>
                    <td>Kantin</td>
                    <td><span class="status selesai">Selesai</span></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
