<?php
function tanggal_indo($tanggal, $cetak_hari = false)
{
	$hari = array ( 1 =>    'Senin',
				'Selasa',
				'Rabu',
				'Kamis',
				'Jumat',
				'Sabtu',
				'Minggu'
			);
			
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split 	  = explode('-', $tanggal);
	$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
	
	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
}
$Encrypted=$_GET['id'];
$decrypttt=Encryption::decode($Encrypted);
?>
<div class="main-wrapper bg-gray">
    <div class="container">
            <!-- page content -->
			<div class="halaman-arsip">
					<div class="blog-section">
						
<div class="row">
	<div class="col-md-12 hidden-xs">
		<ul class="breadcrumb-top">
			<li><a href="beranda" alt="Beranda"><span class="breadicon"><i class="fa fa-home"></i></span></a></li>
			<li><a href="#">Index Berita</a></li>
		</ul>
	</div>
</div>						
    <!-- LIST BLOG -->
    <div class="row">

    <?php
$p      = new Paging3;
$batas  = 12;
$posisi = $p->cariPosisi($batas);

$sql   = "SELECT * FROM berita WHERE id_kategori='$decrypttt' 
ORDER BY tanggal DESC LIMIT $posisi,$batas";		 

$hasil = mysqli_query($koneksi,$sql);
$jumlah = mysqli_num_rows($hasil);
  
if ($jumlah > 0){
while($t33=mysqli_fetch_array($hasil)){
$tgl33 = tanggal_indo($t33['tanggal']);
$jdl33=substr($t33['judul'],0,40); 
$isi_berita33 = strip_tags($t33['isi_berita']); 
$isi33 = substr($isi_berita33,0,300); 
$isi33 = substr($isi_berita33,0,strrpos($isi33," "));
$Encrypted11 =Encryption::encode($t33['judul_seo']);		
?>
                    <!-- item -->
            <div class="arsip-kontent">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="panel panel-default-arsip item">
                            <div class="panel-body">
                                <div class="archive-blog-title">
                                        <a href="berita-<?php echo $Encrypted11;?>">
                                        <?php echo $jdl33;?>&#8230;...
                                        </a>
                                </div>
                                <div class="blog-image">
                                    <a href="berita-<?php echo $Encrypted11;?>">
        								<img src="img_berita/<?php echo $t33['gambar'];?>" w=600 h=350 q=100 class="img-responsive img-article-list" alt="<?php echo $t33['alt_gambar'];?>">
        							</a>
                                </div>

                                <div class="blog-content">
        							<div class="meta-arsip">
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-5">
                                                <div class="post-date">
                                                    <i class="ti ti-calendar"></i> <?php echo $tgl33;?> <?php echo $t33['jam'];?>                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-7">
                                                <div class="post-cat">
                                                                                                            <a href="#">
                                                        <i class="ti ti-agenda"></i> Berita                                                    </a>
                                                                                                    </div>
                                            </div>
        								</div>
        							</div>					
                                </div>
        					</div>					
                        </div>
                    </div>
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
			   
			    
	
			   $jmldata     = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM berita WHERE id_kategori='$decrypttt'"));
			   $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
			   $linkHalaman = $p->navHalaman($_GET['halkategori'], $jmlhalaman);
			 
			   echo "<ul class='pagination text-center'>$linkHalaman</ul>";
				}else{
?>

<div class="box-statistik">
	
<div class="body-statistik">
<!-- ---------------------------------------------------- -->
Belum Ada Data Pada Kategori ini
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
