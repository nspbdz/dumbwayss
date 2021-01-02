<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $name   = $_POST['name'];

  $query = "INSERT INTO role (name) VALUES ('$name')";
  $result = mysqli_query($koneksi, $query);

  
  
  echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
  
 