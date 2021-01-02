<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
   
  </head>
  <body>
    <center><h1>ganggu</h1><center>
    <center><a href="tambah_hero.php">+ &nbsp; Tambah hero</a><center> <br>
    <center><a href="tambah_role_hero.php">+ &nbsp; Tambah role hero</a><center> 

    <br/>
    
		


    
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT role.name AS role_name,hero.name AS hero_name,role.id AS role_id,hero.id AS hero_id, hero.deskripsi,image
FROM role INNER JOIN hero
ON role.id = hero.id_role;
";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
      <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
       	<div class="row">
				<div class="col-md-3">
					<div class="card">
						<h5 class="card-header">
            <div ><img src="img/<?php echo $row['image']; ?>" style="width: 120px;"> <br>
							
						</h5>
						<div class="card-body">
							<p class="card-text">
              <?php echo $row['hero_name']; ?> <br>

              
							</p>
						</div>
						<div class="card-footer">
							
            <?php echo $row['role_name']; ?> <br> <br> 
          <a href="lihat.php?id=<?php echo $row['hero_id']; ?>">lihat</a>
						</div>
					</div>
				</div>
			
    
         
      <?php
      }
      ?>
   	<!-- <div class="col-md-3">
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
				</div> -->
        </div>
		</div>
	</div>
</div>
  
  </body>
</html>
<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
  
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>