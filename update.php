<?php
$file = fopen("data.txt", "r+");
$i = 1;
foreach ($hasil as $row ) {
	if ($_POST['nomer'] == $i) {
		$nama = $_POST['nama'];
		$angkatan = $_POST['angkatan'];
		$phone = $_POST['phone'];

		$data = $nama  . "|F|" . 
				$angkatan . "|F|" .
				$phone . "[R]";
		fwrite($file, $data);
	}
	else{
		fwrite($file, $row."\r\n");
	}
	$i++;
	break;
}
fclose($file);
header('location:dataupdate.php') ;
?>