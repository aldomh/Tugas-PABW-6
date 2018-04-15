<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Phone</th>
			<th>Edit</th>
		</tr>
		<?php 
		$file = fopen("data.txt", "r");
		$i=1;
		while(!feof($file)) {
			echo "<tr>";
			$baris = explode("|F|",fgets($file));
			if (isset($baris[1])) {
				echo "<td>".$i."</td>";
				echo "<td>".$baris[0]."</td>";
				echo "<td>".$baris[1]."</td>";
				$no = explode("[R]",$baris[2]);
				echo "<td>".$no[0]."</td>";
				echo "<td><a href=\"form-update.php?nomer=".$i."\">Edit</a></td>";
				echo "</tr>";
			}
			$i++;
		}
		fclose($file);
		?>
	</table>
</body>
</html>