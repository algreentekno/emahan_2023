<style>
div.gallery {
    border: 1px solid grey;
}
div.gallery:hover {
    border: 1px solid black;
}
div.gallery img {
    width: 100%;
    height: auto;
}
div.desc {
    padding: 15px;
    text-align: center;
}
* {
    box-sizing: border-box;
}
.responsive {
    padding: 0 6px;
    float: left;
    width: 25%;
}
@media only screen and (max-width: 700px) {
    .responsive {
        width: 50%;
        margin: 6px 0;
    }
}
@media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
}
.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
<div class="main-wrapper bg-gray">
    <div class="container">
            <!-- page content -->
			<div class="halaman-arsip">
					<div class="blog-section">
						
<div class="row">
	<div class="col-md-12 hidden-xs">
		<ul class="breadcrumb-top">
			<li><a href="beranda" alt="Beranda"><span class="breadicon"><i class="fa fa-home"></i></span></a></li>
			<li><a href="#">Index Album Galeri</a></li>
		</ul>
	</div>
</div>						
    <!-- LIST BLOG -->
    <div class="row">

    <?php
$Encrypted=$_GET['id'];
$decrypttt=Encryption::decode($Encrypted);

$p      = new Paging5;
$batas  = 12;
$posisi = $p->cariPosisi($batas);

$sql   = "SELECT * FROM galeri a inner join galeri_detail b on a.rdm=b.rdm 
where a.id_album='$decrypttt' ORDER BY a.id_galeri DESC LIMIT $posisi,$batas";		 

$hasil = mysqli_query($koneksi,$sql);
$jumlah = mysqli_num_rows($hasil);
  
if ($jumlah > 0){
while($t33=mysqli_fetch_array($hasil)){
$Encrypted11 =Encryption::encode($t33['id_album']);		
?>
                    <!-- item -->
                    <div class="responsive">
  <div class="gallery">
    <a href="img_galeri/<?php echo $t33['gbr_galeri'];?>" data-lightbox="<?php echo $t33['gbr_galeri'];?>" data-title="<?php echo $t33['jdl_galeri'];?>">
      <img src="img_galeri/<?php echo $t33['gbr_galeri'];?>" alt="<?php echo $t33['jdl_galeri'];?>" width="600" height="400">
    </a>
    <div class="desc"><?php echo $t33['jdl_galeri'];?></div>
  </div>
</div>

                    <!-- item -->
           
                    <!-- item -->
          
                    <!-- item -->
                    <?php
  }
  
  ?>			
            </div>
			
    <div class="paging text-center">

    <?php
			   
			    
	
			   $jmldata     = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM galeri a inner join galeri_detail b on a.rdm=b.rdm 
               where a.id_album='$decrypttt'"));
			   $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
			   $linkHalaman = $p->navHalaman($_GET['halgaleri'], $jmlhalaman);
			 
			   echo "<ul class='pagination text-center'>$linkHalaman</ul>";
				}else{
?>

<div class="box-statistik">
	
<div class="body-statistik">
<!-- ---------------------------------------------------- -->
Belum Ada Foto Kegiatan Pada Album ini
<!-- ---------------------------------------------------- -->
</div>
</div>
<?php
                }
			  ?>
      
        
    </div>
    					</div>
				<!-- end content -->
				<!-- Sidebar -->
			</div>
        <div class="clearfix"></div>
        <!-- /.row -->
    </div>
</div>
