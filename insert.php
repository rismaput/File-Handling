<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css.css">
<body>
<div class="border">
<?php

$file = "data.txt";

$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$data = $nama  . "|F|" . 
        $email . "|F|" .
        $phone . "[R]";

$handle = fopen($file, "a+");
fwrite($handle, $data);
fclose($handle);

echo "<h1>"."Data berhasil disimpan!". "</h1>";
?>
</div>
</body>
</html>