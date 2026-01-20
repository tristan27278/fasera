<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #008080, #004d4d);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-box {
            background: white;
            width: 380px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .register-box h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #008080;
        }

        .register-box label {
            font-size: 14px;
            font-weight: 500;
        }

        .register-box input {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        .register-box input:focus {
            border-color: #008080;
        }

        .register-box button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #008080;
            color: white;
            font-weight: 500;
            cursor: pointer;
        }

        .register-box button:hover {
            background: #006666;
        }

        .register-box p {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .register-box a {
            color: #008080;
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>
<body>

    <div class="register-box">
        <h2>Daftar Akun</h2>
        <form action="proses_daftar.php" method="POST">
    <label>Nama Lengkap</label>
    <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>

    <label>Username</label>
    <input type="text" name="username" placeholder="Masukkan username" required>

    <label>NIS</label>
    <input type="text" name="nis" placeholder="Masukkan NIS" required>

    <label>Kelas</label>
    <input type="text" name="kelas" placeholder="Masukkan Kelas" required>

    <label>Password</label>
    <input type="password" name="password" placeholder="Masukkan password" required>

    <button type="submit">Daftar</button>
</form>


        <p>Sudah punya akun? <a href="login.html">Login</a></p>
    </div>
   
</body>
</html>
