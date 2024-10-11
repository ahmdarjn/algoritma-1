<!DOCTYPE html>

<html>

<head>

    <title>WAKTU TEMPUH</title>
</head>

<body>
    <h4>Selamat datang <strong style="-webkit-text-fill-color: blue; text-transform:uppercase">  </strong>di Program Project Percabangan Notasi Algoritma </h4>
    <p>Anda Login Sebagai : <?php if ($_GET) {
                                echo $_GET['nama'];
                                echo '  Dengan Email: ' . $_GET['email'];
                                $_GET['status'] = 'aktif';
                            }

                            ?></p>

    <form action="output.php" method="post">
        <html>

        <head>
            <title>Menentukan Bilangan Terbesar Dari 3 BIlangan</title>
        </head>

        <body>
        <h1>Hitung Gaji Pokok dan Gaji Lembur</h1>
    <form method="post">
        <label for="gajiPokok">Gaji Pokok:</label>
        <input type="number" name="gajiPokok" id="gajiPokok" step="0.01" required><br><br>

        <label for="jamKerja">Jumlah Jam Kerja:</label>
        <input type="number" name="jamKerja" id="jamKerja" required><br><br>

        <label for="tarifLembur">Tarif Lembur per Jam:</label>
        <input type="number" name="tarifLembur" id="tarifLembur" step="0.01" required><br><br>

        <button type="submit">Hitung</button>
    </form>

        </body>

        </html>