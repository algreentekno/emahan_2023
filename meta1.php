<?php
$module=$_GET['module'];
if($module=='detailberita'){
$key=$_GET['judul'];
$Encrypted1 =Encryption::decode($key);
	$sql2 = @mysqli_query($koneksi,"select isi_berita from berita where judul_seo='$Encrypted1'");
	$k   = @mysqli_fetch_array($sql2);
	$deskripsi = htmlentities(strip_tags($k['isi_berita']));
}elseif($module=='halamanstatis'){
	$key=$_GET['judul'];
    $Encrypted1 =Encryption::decode($key);
	$sql2 = @mysqli_query($koneksi,"select isi_halaman from halamanstatis where judul_seo='$Encrypted1'");
	$k   = @mysqli_fetch_array($sql2);
	$deskripsi = htmlentities(strip_tags($k['isi_halaman']));
}else{
	$sql2 = mysqli_query($koneksi,"select meta_deskripsi from identitas LIMIT 1");
    $j2   = mysqli_fetch_array($sql2);
	$deskripsi=$j2['meta_deskripsi'];
}
echo"$deskripsi";

?>


