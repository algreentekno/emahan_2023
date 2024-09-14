<?php
$module=$_GET['module'];
if ($module=='detailberita'){
  $key=$_GET['judul'];
$Encrypted1 =Encryption::decode($key);
   $sql = mysqli_query($koneksi,"select judul from berita where judul_seo='$Encrypted1'");
    $j   = mysqli_fetch_array($sql);
    
        echo "$j[judul]";
   
}elseif($module=='home'){
  $sql2 = mysqli_query($koneksi,"select nama_website from identitas LIMIT 1");
      $j2   = mysqli_fetch_array($sql2);
		  echo "$j2[nama_website]";
}
elseif($module=='halamanstatis'){
  $key=$_GET['key'];
$Encrypted1 =Encryption::decode($key);
      $sql2 = mysqli_query($koneksi,"select judul from halamanstatis where id_halaman='$Encrypted1'");
      $j2   = mysqli_fetch_array($sql2);
		  echo "$j2[judul]";
}else{

  $sql2 = mysqli_query($koneksi,"select nama_website from identitas LIMIT 1");
  $j2   = mysqli_fetch_array($sql2);
  echo "$j2[nama_website]";

}
?>
