<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOSERA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/e8c5ddf50d.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: aliceblue;
            height: 2000px;
            font-family: "Poppins", sans-serif;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .header {
            width: 100%;
            height: 70px;
            background-color: #008080;
            font-family: "Poppins", sans-serif;
            display: flex;
            align-items: center;
        }

        .nav-menu {
            margin-left: auto;
            margin-right: 40px;
        }

        .nav-menu ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        .nav-menu ul li {
            color: white;
            font-weight: 500;
            cursor: pointer;
        }

        .nav-menu ul li:hover {
            text-decoration: underline;
        }

        .logo img {
            height: 55px;
            width: auto;
            object-fit: contain;
        }

        .slider {
            width: 100%;
            height: 500px;
            position: relative;
            overflow: hidden;
        }

        .slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            animation: slide 8s infinite;
            opacity: 0;
        }

        .slider img:nth-child(1) {
            animation-delay: 0s;
        }

        .slider img:nth-child(2) {
            animation-delay: 4s;
        }

        @keyframes slide {
            0% {
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            45% {
                opacity: 1;
            }

            55% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        .user-icon i {
            font-size: 24px;
            color: white;
        }

        .footer {
            background-color: #008080;
            width: 100%;
            height: 30px;
            margin-bottom: 20px;
        }

        .box1 {
            width: 200px;
            height: 250px;
            border: 4px solid #008080;
            margin: 30px;
            border-radius: 15px;
        }

        .box2 {
            width: 100px;
            border: 4px solid #008080;
            margin: 10px;
            border-radius: 15px;
        }

        .tatacara {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .t {
            margin: 20px;
            margin-bottom: 5px;
        }

        .tentang {
            margin-left: 40px;
            font-size: 20px;
        }

        .button {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 80px;
        }

        .text1 {
            width: 180px;
            height: 80px;
            background-color: #008080;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
        }

        .text2 {
            width: 180px;
            height: 80px;
            background-color: #806d00;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
        }
    </style>

</head>

<body>
    <div class="header">
        <div class="logo"><img
                src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/cropped-SMK-MUTU-500-x-160-px.png"
                alt="logo-mutu"></div>
        <div class="nav-menu">
            <ul>
                <a href="index.html">
                    <li>BERANDA</li>
                </a>
                <a href="laporan.html">
                    <li>LAPORAN</li>
                </a>
                <li>
                    <a href="#" onclick="cekLogin()">RIWAYAT</a>
                </li>
                <a href="kontak.php">
                    <li>KONTAK</li>
                </a>
                <li class="user-icon">
                    <a href="login.php">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </li>

            </ul>

        </div>
    </div>
    <div class="slider">
        <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-29-at-08.20.27-1-e1748585989774.jpeg"
            alt="">
        <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-29-at-08.20.27-1536x691.jpeg"
            alt="">
    </div>
    <div class="footer"></div>
    <h2 class="t">TATA CARA PENGGUNAAN </h2>
    <div class="tatacara">
        <div class="box1"></div>
        <div class="box2"></div>
        <div class="box1"></div>
        <div class="box2"></div>
        <div class="box1"></div>
        <div class="box2"></div>
        <div class="box1"></div>
    </div>
    <h2 class="t">TENTANG</h2>
    <div class="tentang">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non ratione perferendis optio, libero similique
            aliquid commodi laboriosam. Amet, nesciunt enim nihil assumenda porro quasi, possimus exercitationem velit
            molestiae, repellat eligendi?</p>
    </div>
    <div class="button">
        <a href="" class="text1">
            <h4>ISI PENGADUAN</h4>
        </a>
        <a href="" class="text2">
            <h4>CARI PENGADUAN</h4>
        </a>
    </div>
    <script>
        function cekLogin() {
            if (localStorage.getItem("isLogin") === "true") {
                window.location.href = "riwayat.html";
            } else {
                alert("Silakan login terlebih dahulu untuk melihat riwayat laporan!");
                window.location.href = "login.html";
            }
        }
    </script>

</body>

</html>