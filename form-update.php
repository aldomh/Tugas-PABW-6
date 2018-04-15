<!DOCTYPE html>
<html>
<body>
	<?php 
	$file = fopen("data.txt", "r+");
	$i=1;
	while(!feof($file)) {
		if ($_GET['nomer'] == $i ) {
			$hasil = explode("|F|",fgets($file));
			$no = explode("[R]",$hasil[2]);
			break;
		}
		$i++;	
	}
	fclose($file);
	?>
	<form action="update.php" method="POST">
		Nama: <input type="text" 
		name="nama" value="<?php echo $hasil[0] ?>"><br>
		Angkatan: <input type="tel" 
		name="angkatan" value="<?php echo $hasil[1] ?>"><br>
		Phone: <input type="tel" 
		name="phone" value="<?php echo $no[0] ?>"><br>
		<input type="text" name="nomer" value="<?php echo $_GET['nomer'] ?>" style="display: none;">
		<input type="submit" value="Save!">
	</form>
</body>
</html>