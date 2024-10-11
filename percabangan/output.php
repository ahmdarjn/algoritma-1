<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji</title>
</head>
<body>
    <h1>Hitung Gaji Pokok dan Gaji Lembur</h1>
    <form method="post">
        <label for="gajiPokok">Gaji Pokok:</label>
        <input type="number" name="gajiPokok" id="gajiPokok" required><br><br>

        <label for="jamKerja">Jumlah Jam Kerja:</label>
        <input type="number" name="jamKerja" id="jamKerja" required><br><br>

        <label for="tarifLembur">Tarif Lembur per Jam:</label>
        <input type="number" name="tarifLembur" id="tarifLembur" required><br><br>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gajiPokok = $_POST['gajiPokok'];
        $jamKerja = $_POST['jamKerja'];
        $tarifLembur = $_POST['tarifLembur'];

        // Hitung jam lembur
        $jamLembur = 0;
        if ($jamKerja > 8) {
            $jamLembur = $jamKerja - 8;
        }

        // Hitung gaji lembur
        $gajiLembur = $jamLembur * $tarifLembur;

        // Hitung total gaji
        $totalGaji = $gajiPokok + $gajiLembur;

        // Output hasil
        echo "<h2>Hasil Perhitungan:</h2>";
        echo "Gaji Pokok: Rp " . number_format($gajiPokok, 2) . "<br>";
        echo "Jam Lembur: " . $jamLembur . " jam<br>";
        echo "Gaji Lembur: Rp " . number_format($gajiLembur, 2) . "<br>";
        echo "Total Gaji: Rp " . number_format($totalGaji, 2) . "<br>";
    }
    ?>
    <p>atau kembali ke : </p>
<a href="http://localhost/">
      <button>Localhost</button>
</a>
<a href="../">
      <button>Folder Awal</button>
</a>
</body>
</html>
