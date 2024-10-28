
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
    </head>

<div class="login-container">

<h2>Identifikasi Pengguna(Login)</h2>
<form method="GET" action="input.php">

<label for="Input Nama">Input Nama:</label>
  <input type="text" id="Input Nama" name="Input Nama" required><br><br>
  
  <label for="Input Email">Input Email:</label>
  <input type="Input Email" id="Input Email" name="Input Email" required><br><br>
  
  <input type="submit" value="Login">
</form>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
// Simulasi data pengguna yang terdaftar di sistem (untuk contoh ini hardcoded)
$users = [
    'user1' => 'Arjun',    
    'user2' => 'ahmadarjunn2@gmail.com',    
];

}

?>
