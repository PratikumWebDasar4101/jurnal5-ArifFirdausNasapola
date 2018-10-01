 <?php  
 	
 	$nama	= $_GET["nama"];
 	$email	= $_GET["email"];

  	if(isset($_GET['nama']) AND isset($_GET["email"]))
  	{
  		$nama     = $_GET['nama'];
  		$email    = $_GET['email'];
      $komentar = $_GET['komentar'];
  			$nama	= htmlspecialchars($nama);
  			$email	= strip_tags($email);
        $kata_komentar = explode(" ", $komentar);
        $count_komentar = count($kata_komentar);

  	}
  	else{
  		header("Location: Input.php?eror = variabel_belum_set");
  	}
  	if(empty($nama))
  	{
  		header("Location: Input.php?eror=nama_kosong");
  	}
  	if(is_numeric($nama))
  	{
  		header("Location: Input.php?eror=nama_harus_huruf");
  	}
  	else{
  		echo "Selamat Datang $nama dengan email $email";
      echo "<br>";
  	}
    if ($count_komentar < 5) {
          echo "Kalimat harus lebih dari 5";
          echo "<br>";
        }else echo "Komentar: $komentar";{
        }
 ?>