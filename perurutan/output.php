<?php
function luasPermukaanKubus($sisi) {
    return 6 * ($sisi ** 2);
}


$sisi = 4; 
$luas = luasPermukaanKubus($sisi);
echo "Luas permukaan kubus dengan sisi $sisi adalah $luas.";
?>


<p>
<a href="input.php">
      <button>Kembali ke Input</button>
</a>
</p>

<p>atau kembali ke : </p>
<a href="in://localhost/">
      <button>Localhost</button>
</a>
<a href="../">
      <button>Folder Awal</button>
</a>