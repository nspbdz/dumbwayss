<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT  role.name AS role_name,hero.name AS hero_name,hero.deskripsi,image
    FROM role INNER JOIN hero
    ON role.id = hero.id_role WHERE hero.id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } 
  ?>
<!DOCTYPE html>
<html>
  <head>
  
  </head>
  <body>
      <center>
      <center>
      <form method="POST" action="proses_lihat.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input readonly name="id" value="<?php echo $data['id']; ?>"  hidden />
       
        <div>
          <img src="img/<?php echo $data['image']; ?>" style="width: 120px;text-align: center; margin-bottom: 5px;">
          <i style="font-size: 11px;color: red"></i>
        </div> 
        <div>
                  <label>Nama content</label>
          <input readonly type="text" name="content" value="<?php echo $data['hero_name']; ?>" autofocus="" required="" />
        </div>
        <div>
                  <label>Nama content</label>
          <input readonly type="text" name="content" value="<?php echo $data['role_name']; ?>" autofocus="" required="" />
        </div>
        <div>
                  <label>Nama content</label>
          <textarea name="deskripsi" value="" autofocus="" required="" ><?php echo $data['deskripsi']; ?></textarea>
        </div>
        <div>
        <div>
      
       
       
        </section>
      </form>
  </body>
</html>