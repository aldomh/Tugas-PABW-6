<?php

$file = "data.txt";

$nama = $_POST['nama'];
$angkatan = $_POST['angkatan'];
$phone = $_POST['phone'];

$data = $nama  . "|F|" . 
        $angkatan . "|F|" .
        $phone . "[R]";

$handle = fopen($file, "a+");
fwrite($handle, $data);
fclose($handle);

echo "Data sudah disimpan!";
echo '<br><a href="baca.php">KEMBALI</a>';;