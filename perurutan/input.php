<!DOCTYPE html>

<html>

<head>

    <title>LUAS KUBUS</title>
</head>

<body>
    <h4>Selamat datang <strong style="-webkit-text-fill-color: blue; text-transform:uppercase">
         <?echo $_GET['nama'] ?> </strong>di Program Project Perurutan Notasi Algoritma </h4>
    <table>
    <th>
    <td>
        <tr>Anda Login Sebagai :</tr>
    </td>
    </th>
    <tbody>
        <td>
            <tr>
                <?php

                if ($_GET) {
                    echo $_GET['nama'];
                    echo '  Dengan Email: ' . $_GET['email'];
                    $_GET['status'] = 'aktif';
                }

                ?>


            </tr>
        </td>
    </tbody>
</table>


    <form action="output.php" method="post">
        <h1>Hitung Luas Permukaan Kubus</h1>
    <form method="post">
        <label for="sisi">Panjang Sisi Kubus:</label>
        <input type="number" name="sisi" id="sisi" required>
        <button type="submit">Hitung</button>
    </form>

</body>

</html>