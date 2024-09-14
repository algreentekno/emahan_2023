<?php
if (isset($_GET['id'])){
    $query = "SELECT gambar FROM berita WHERE id_berita='$_GET[id]'";
    $hasil = mysqli_query($koneksi,$query);
    $data  = mysqli_fetch_array($hasil);

		echo "img_berita/$data[gambar]";
}

?>

