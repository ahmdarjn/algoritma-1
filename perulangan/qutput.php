<!DOCTYPE html>
<html>
<body>
    <h2>MENGULANGi jam lembur</h2>

    <?php
// Inisialisasi variabel untuk total lembur
$total_lembur = 0;

// Daftar karyawan dan jam kerja mereka
$karyawan_list = [
    ["nama" => "John", "waktu_keluar" => "18:00", "jam_kerja_normal" => "17:00"],
    ["nama" => "Alice", "waktu_keluar" => "19:00", "jam_kerja_normal" => "17:00"],
    ["nama" => "Bob", "waktu_keluar" => "17:30", "jam_kerja_normal" => "17:00"],
];

// Fungsi untuk menghitung selisih waktu dalam format jam:menit
function hitungSelisihJam($waktu1, $waktu2) {
    $waktu1 = strtotime($waktu1);
    $waktu2 = strtotime($waktu2);
    $selisih_detik = $waktu1 - $waktu2;
    return $selisih_detik / 3600; // Mengubah detik menjadi jam
}

// Perulangan untuk setiap karyawan
foreach ($karyawan_list as $karyawan) {
    $nama = $karyawan['nama'];
    $waktu_keluar = $karyawan['waktu_keluar'];
    $jam_kerja_normal = $karyawan['jam_kerja_normal'];

    // Cek apakah waktu keluar lebih dari jam kerja normal
    if (strtotime($waktu_keluar) > strtotime($jam_kerja_normal)) {
        // Hitung waktu lembur
        $lembur = hitungSelisihJam($waktu_keluar, $jam_kerja_normal);
        // Tambahkan ke total lembur
        $total_lembur += $lembur;
        // Output lembur per karyawan
        echo "Karyawan: $nama, Lembur: " . round($lembur, 2) . " jam<br>";
    } else {
        // Jika tidak ada lembur
        echo "Karyawan: $nama, Tidak ada lembur<br>";
    }
}

// Tampilkan total lembur
echo "Total lembur seluruh karyawan: " . round($total_lembur, 2) . " jam";
?>

<p>
<a href="index.php">
      <button>Kembali ke Input</button>
</a>
</p>

<p>atau kembali ke : </p>
<a href="http://localhost/">
      <button>Localhost</button>
</a>
<a href="../">
      <button>Folder Awal</button>
</a>

