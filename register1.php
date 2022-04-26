<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Daftar</title>
  <link rel="icon" href="./assets/img/silele.png" type="image/x-icon"/>
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<!-- register -->
<div class="login-page">
  <div class="form" >
    <div style="padding-top: 10px;"><img src="assets/img/silele.png" class="rounded-circle" style="height:100px;" alt=""></div>
    <form class="login-form" method="POST" action="proses_tambah.php" enctype="multipart/form-data">
      <h3>Register Form</h3>
      <input type="text" placeholder="Nama Lengkap" name="nama" required="required">
      <input type="text" placeholder="Alamat" name="alamat" required="required">
      <input type="tel" placeholder="No Telp (081234567891)" name="no_telp" pattern="[0-9]{12,13}" required="required">
      <input type="text" placeholder="Username" name="username" required="required">
      <input type="password" placeholder="Password" name="password" required="required">
      <input type="password" placeholder="Confirm Password" name="cpassword" required="required">
      <!--<input type="file" name="foto_profil"/>-->
      <div>
            <label>Gambar Profil</label>
            <input type="file" name="foto_profil" required="required">
        </div>
      <button type="submit">create</button>
      <p class="message">Already registered? <a href="index.php"><b>Sign In<b></a></p>
    </form>
  </div>
</div>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./assets/js/script.js"></script>

</body>
</html>
