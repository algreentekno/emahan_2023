<?php
include "config/koneksi_li.php";
$sql2 = mysqli_query($koneksi,"select url_aplikasi from identitas LIMIT 1");
$j2   = mysqli_fetch_array($sql2);
$urlmain=$j2['url_aplikasi']; 
?>