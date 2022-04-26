<?php 


session_start();

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Daftar</title>
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<!-- register -->
<div class="login-page">
  <div class="form" >
    <form class="login-form" method="POST">
      <input type="text" placeholder="nama" name="nama" required=""/>
      <input type="text" placeholder="alamat" name="alamat" required=""/>
      <input type="text" placeholder="no telepon" name="no_telp" required=""/>
      <input type="text" placeholder="username" name="username" required=""/>
      <input type="password" placeholder="password" name="password" required=""/>
      <input type="file" name="foto_profil" placeholder="foto profil" required=""/>
      <button type="submit">create</button>
      <p class="message">Already registered? <a href="index.php">Sign In</a></p>
    </form>
  </div>
</div>

<?php 
    include(koneksi.php);

    $nama = $_POST ['nama'];
    $alamat = $_POST ['alamat'];
    $no_telp = $_POST ['no_telp'];
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $foto_profil = $_FILES['foto_profil']['name'];

    if($foto_profil != ""){
        $ekstensi_diperbolehkan = array('png','jpg');
        $x = explode('.', $foto_profil);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['foto_profil']['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_gambar_baru = $angka_acak.'-'.$foto_profil;

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            move_uploaded_file($file_tmp, 'profil/'.$nama_gambar_baru);

            $query = "INSERT INTO pelanggan (nama, alamat, no_telp, username, password, foto_profil) VALUES ('$nama', '$alamat', '$no_telp', '$username', '$password','$foto_profil')";
            $result = mysqli_query($koneksi, $query);

            if(!$result){
                die("Query Error: ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
            }else{
                echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php';</script>";
            }
            }else{
                echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='register.php</script>";
            }
        }else{
            $query = "INSERT INTO pelanggan (nama, alamat, no_telp, username, password, foto_profil) VALUES ('$nama', '$alamat', '$no_telp', '$username', '$password'";

            if(!$result){
                die("Query Error: ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
            }else{
                echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php';</script>";
            }
        }
    
?>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./assets/js/script.js"></script>

</body>
</html>
