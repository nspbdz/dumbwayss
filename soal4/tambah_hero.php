<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body>
      <center>
        <h1>Tambah Hero</h1>
      <center>
      <form method="POST" action="proses_tambah_hero.php" enctype="multipart/form-data" >
      <section class="base">
       
          <label>name</label>
         <input type="text" name="name" required="" />
        </div> <br>
        <label>id role</label>
         <input type="text" name="id_role" required="" />
        </div> <br>

        <div>
          <label>Gambar Produk</label>
         <input type="file" name="image" required="" />
        </div><br>
        <label>deskripsi</label>
         <input type="text" name="deskripsi" required="" />
        </div><br>
        <div>
         <button type="submit">Simpan Produk</button>
        </div>
        </section>
      </form>
  </body>
</html>