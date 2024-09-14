<?php include "detek.php";
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
$key=$_GET['judul'];
$Encrypted11 =Encryption::decode($key);
$detail=mysqli_query($koneksi,"SELECT * FROM berita a inner join kategori b on a.id_kategori=b.id_kategori where a.judul_seo='$Encrypted11'");
$d   = mysqli_fetch_array($detail);
$baca = $d['dibaca']+1;
$tangglindo=tanggal_indo($d['tanggal']);	
mysqli_query($koneksi,"UPDATE berita SET dibaca='$baca' WHERE judul_seo='$Encrypted11'");

?>

<div class="section-post bg-gray">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">
                
<div class="row">
	<div class="col-md-12 hidden-xs">
		<ul class="breadcrumb-top">
			<li><a href="beranda" alt="Beranda"><span class="breadicon"><i class="fa fa-home"></i></span></a></li>
			<li><a href="#"><?php echo $d['judul'];?></a></li>
		</ul>
	</div>
</div>                <div class="page-content">
                    

<div class="blog-content">
            
        
<div class="panel panel-default">
	<div class="panel-body">
		<div class="blok-before-content">
			<div class="single-title"><?php echo $d['judul'];?></div>
			<div class="top-meta-single-content">
				<div class="row">
					<div class="col-md-6 col-xs-6"><i class="ti-calendar"></i> <?php echo $tangglindo;?> <?php echo $d['jam'];?></div>
					<div class="col-md-6 col-xs-6 text-right"><i class="ti-user"></i> Administrator</div>
				</div>
			</div>
		</div>

		<a href="#" data-lightbox="images" data-title="<?php echo $d['alt_gambar'];?>">
					<img width="100%" class="img-responsive img-fluid gambar-utama" src="img_berita/<?php echo $d['gambar'];?>" alt="<?php echo $d['alt_gambar'];?>">
			<div class="gambar-artikel-caption"><?php echo $d['alt_gambar'];?></div>
				</a>
		<!-- Post Content -->
		<!-- Data Agenda -->
		
		<!-- Data Pembangunan -->
		
		<!-- Data Potensi -->
		
		<div class="artikel-single">
			
			<p><?php echo $d['isi_berita'];?></p>										
			
								
			<!-- Signature Sambutan -->
					</div>
		<!-- Social Media Share Section Start -->	
		<div class="sosmed-share">
			<div class="social-share">
				<a name="fb_share" href="http://www.facebook.com/sharer.php?u=<?php echo $urlmain;?>/berita-<?php echo $_GET['judul'];?>" target="_blank" class="fa fa-facebook"></a>
				<a href="http://twitter.com/share?url=<?php echo $urlmain;?>/berita-<?php echo $_GET['judul'];?>" target="_blank" class="fa fa-twitter"></a>
				<a href="https://api.whatsapp.com/send?text=<?php echo $urlmain;?>/berita-<?php echo $_GET['judul'];?>" target="_blank" class="fa fa-whatsapp"></a>
				<a href="https://t.me/share/url?url=<?php echo $urlmain;?>/berita-<?php echo $_GET['judul'];?>" target="_blank" class="fa fa-telegram"></a>
			</div>
		</div>

		<!-- Social Media Share Section End -->		
	</div>
	<div class="meta-bottom-single-content">
			<div class="row">
				<div class="col-md-8 col-xs-6">
				<a href="#"><i class="ti-agenda"></i> Berita</a>
			            				</div>
				<div class="col-md-4 col-xs-6 text-right">
					<i class="ti-eye"></i> <?php echo $d['dibaca'];?></div>
			</div>
		</div>
</div>




    
</div>                </div>
            </div>
            <!-- end content -->

            <!-- Sidebar -->
            <div class="col-md-4">
                

<div class="sidebar">
<div class="widget bg-white p-a20 recent-posts-entry"><h5 class="widget-title style-1">Kategori</h5><div class="widget-post-bx">
<!-- widget Menu-->
<div class="widget-menu_kategori">
    <ul id="ul-menu" class="main">
	<?php  
          $querymenu2 = "SELECT * FROM kategori WHERE aktif='Y' order by id_kategori ASC";
          $hasilmenu2 = mysqli_query($koneksi,$querymenu2);
          while ($rdata=mysqli_fetch_array($hasilmenu2)) {
			$Encrypted1 =Encryption::encode($rdata['id_kategori']);
			?>
                    <li class="cat-item">
                <a href="kategori-<?php echo $Encrypted1;?>"><i class="fa fa-angle-right"></i> <?php echo $rdata['nama_kategori'];?></a>
                            </li>
							<?php
		  }
		  ?>
                   
            </ul>
</div></div></div>
<div class="widget bg-white p-a20 recent-posts-entry"><h5 class="widget-title style-1">Populer Artikel</h5><div class="widget-post-bx">
<!-- Widget Arsip -->


	<div class="widget-arsip">
		<ul class="timeline">
		<?php  
          $querymenu2 = "SELECT * FROM berita a inner join kategori b on a.id_kategori=b.id_kategori ORDER BY a.dibaca ASC LIMIT 5";
          $hasilmenu2 = mysqli_query($koneksi,$querymenu2);
          while ($rdata=mysqli_fetch_array($hasilmenu2)) {
			$Encrypted11 =Encryption::encode($rdata['judul_seo']);
			?>						
		<li>
					<i class="fa fa-calendar" style="color: olivedrab;background: olivedrab; ">
											<img src="<?php echo "$f[folder]/assets/files/user_pict/kuser.png";?>" class="user-image" alt="User Image" width="30px" height="30px" style="margin-top: -30px; padding: 3px; border-radius: 20px;"/>
										</i>
				<div class="timeline-item">
					<div class="timeline-header"><a href="berita-<?php echo $Encrypted11;?>"><?php echo $rdata['judul'];?></a></div>
					<div class="dlab-post-meta">
						<ul>
							<li class="post-date">Dibaca <?php echo $rdata['dibaca'];?> Kali</li>
							<li class="post-cat">
													<a href="#" class="cat-label"><?php echo $rdata['nama_kategori'];?></a>
													</li>
						</ul>
					</div>
				</div>
				</li>
				<?php
				}
				?>
											
					</ul>
	</div>
	</div></div>
    
<div class="widget bg-white p-a20 recent-posts-entry"><h5 class="widget-title style-1">Statistik Pengunjung</h5><div class="widget-post-bx">
<!-- widget Statistik Pengunjung -->

  
<div id="container" class="widget-statistik_pengunjung">
    <table class="table table-striped table-inverse counter" cellpadding="0" cellspacing="5">
        <tr>
            <td valign="middle">IP Address</td>
            <td class="text-right counter-text"><?php echo $ip_user;?></td>
        </tr>
        <tr>
            <td valign="middle">Browser</td>
            <td class="text-right counter-text"><?php echo $user_browser;?></td>
        </tr>
        <tr>
            <td valign="middle">Sistem Operasi</td>
            <td class="text-right counter-text"><?php echo $user_os;?></td>
        </tr>
        
    </table>
</div></div></div>
</div>            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end content -->
</div>