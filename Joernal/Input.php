
<?php 
 if(isset($_GET['eror']))
{
	$eror = $_GET['eror'];
}
else{
	$eror = "";
}

$pesan = "";
if($eror=="variabel_belum_set")
{
	$pesan="<h3> Maaf, Anda harus mengakses Input.php </h3>";
}
if ($eror=="nama_kosong")
{
	$pesan="<h4>Nama tidak boleh kosong </h4>";
}
if ($eror=="nama_harus_huruf")
{
	$pesan="<h4>Maaf, Nama Anda harus huruf</h4>";
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title> Input </title>
</head>
<body>
	
	<table align="center">
		<form action="Login.php" method="GET" >
		<center>
			<?php
			echo $pesan;
			?>
		</center>
			<tr>
				<td colspan="3" align="center"><h1> Form Pendaftaran</h1></td>
			</tr>
			<tr> 
				<td> NIM</td>
				<td>:</td>
				<td><input type="number" name="nim" minlength="1" maxlength="10" ></td>
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" ></td>
			</tr>

			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td> Comment</td>
				<td> : </td>
				<td><textarea name="komentar"></textarea></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="" value="Submit" style="width: 100px"></td>
			</tr>

		</form>

	</table>
</body>
</html>