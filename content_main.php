<?php 
  if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
        ob_start("ob_gzhandler");
    else
        ob_start();
  session_start();
  // Panggil semua fungsi yang dibutuhkan (semuanya ada di folder config)
  include "config/koneksi_li.php";

	include "config/fungsi_indotgl.php";
	include "config/class_paging.php";
	include "config/library.php";
  include "config/fungsi_autolink.php";
  include "config/fungsi_badword.php";
 include "config/recaptchalib.php";
 include "config/fungsi_matauang1.php";
 include "config/urlsecure.php";
 
 // Mengambil data identitas website
  $query = "SELECT * FROM identitas"; 
  $hasil = mysqli_query($koneksi,$query);  
  $d     = mysqli_fetch_array($hasil);
  
  // Memilih template yang aktif saat ini
  $pilih_template=mysqli_query($koneksi,"SELECT folder FROM templates WHERE aktif='Y'");
  $f=mysqli_fetch_array($pilih_template);
  include "$f[folder]/main.php"; 
?>
