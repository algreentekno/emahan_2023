<?php
$module=$_GET['module'];
if ($module=='detailberita'){
  $key=$_GET['judul'];
$Encrypted1 =Encryption::decode($key);
   $sql = mysqli_query($koneksi,"select tag from berita where judul_seo='$Encrypted1'");
  $j   = mysqli_fetch_array($sql);
	echo "$j[keyword]";
}
else{
      $sql2 = mysqli_query($koneksi,"select meta_keyword from identitas LIMIT 1");
      $j2   = mysqli_fetch_array($sql2);
		  echo "$j2[meta_keyword]";
}
?>
