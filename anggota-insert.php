<?php 

if(isset($_POST['simpan']))
{
     $nis                = $_POST['nis'];
     $nama               = $_POST['nama'];
     $kelas              = $_POST['id_kelas'];
     $jurusan            = $_POST['id_jurusan'];
     $tempat_lahir       = $_POST['tempat_lahir'];
     $tgl_lahir          = $_POST['tgl_lahir'];
     $no_telepon         = $_POST['no_telepon'];
     $alamat             = $_POST['alamat'];
     $jk                 = $_POST['jk'];
  $query_insert = mysqli_query($koneksi, "INSERT INTO anggota VALUES('','$nis','$nama','$kelas','$jurusan','$tempat_lahir','$tgl_lahir','$no_telepon','$alamat','$jk')");
    
    // Membuat notifikasi jika berhasil/tidak disimpn datany
    if($query_insert) 
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Disimpan !!!
            </div>
        <?php
        header('Refresh:1; http://localhost/10_PTSGANJIL2021_XIIRPL2_EKOSAPUTRA/admin.php?page=anggota');
    }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Disimpan !!!
            </div>
        <?php 
        header('Refresh:1; URL=http://localhost/10_PTSGANJIL2021_XIIRPL2_EKOSAPUTRA/admin.php?page=anggota');
    }

}
?>