<?php
$key=$_GET['key'];
$Encrypted1 =Encryption::decode($key);
$detail=mysqli_query($koneksi,"SELECT * FROM halamanstatis WHERE id_halaman='$Encrypted1'");
$d   = mysqli_fetch_array($detail);
  ?>
<div class="content-full bg-gray">
	<div class="container">
		<div class="page-content">
        <div class="row">
        <div class="col-md-12 hidden-xs">
		<ul class="breadcrumb-top">
			<li><a href="beranda" alt="Beranda"><span class="breadicon"><i class="fa fa-home"></i></span></a></li>
			<li><a href="#">Halaman <?php echo $d['judul'];?></a></li>
		</ul>
	</div>
    </div>
			
<div class="box-statistik">
	<div class="box-header">
		<h3><?php echo $d['judul'];?></h3>
	</div>
<div class="body-statistik">
<!-- ---------------------------------------------------- -->
<?php
  echo $d['isi_halaman'];	 
?>
<!-- ---------------------------------------------------- -->
</div>
</div>
</div>
		<!-- end content -->
	</div>
<!-- end content -->
</div>
