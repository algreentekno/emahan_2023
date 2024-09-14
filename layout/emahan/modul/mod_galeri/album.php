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
$p      = new Paging4;
$batas  = 12;
$posisi = $p->cariPosisi($batas);

$sql   = "SELECT * FROM album 
ORDER BY id_album DESC LIMIT $posisi,$batas";		 

$hasil = mysqli_query($koneksi,$sql);
$jumlah = mysqli_num_rows($hasil);
  
if ($jumlah > 0){
while($t33=mysqli_fetch_array($hasil)){
$Encrypted11 =Encryption::encode($t33['id_album']);		
?>
                    <!-- item -->
                    <div class="responsive">
  <div class="gallery">
    <a href="img_album/<?php echo $t33['gbr_album'];?>" data-lightbox="<?php echo $t33['gbr_album'];?>" data-title="<?php echo $t33['jdl_album'];?>">
      <img src="img_album/<?php echo $t33['gbr_album'];?>" alt="<?php echo $t33['jdl_album'];?>" width="600" height="400">
    </a>
    <div class="desc"><a href="galeri-<?php echo $Encrypted11;?>"><?php echo $t33['jdl_album'];?></a></div>
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
			   
			    
	
			   $jmldata     = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM album "));
			   $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
			   $linkHalaman = $p->navHalaman($_GET['halalbum'], $jmlhalaman);
			 
			   echo "<ul class='pagination text-center'>$linkHalaman</ul>";
				}else{
?>

<div class="box-statistik">
	
<div class="body-statistik">
<!-- ---------------------------------------------------- -->
Belum Ada Album 
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
