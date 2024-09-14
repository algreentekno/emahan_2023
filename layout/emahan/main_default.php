<?php
  if ($_GET['module']=='home'){
?>

                            <div class="slide hidden-xs">
                    <div class="container-default">
                        <style type="text/css">
.carousel-fade .carousel-inner .item {
  opacity: 0;
  transition-property: opacity;
}    
.carousel-fade .carousel-inner .active {
  opacity: 1;
}    
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}    
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}    
.carousel-fade .carousel-control {
  z-index: 2;
}

/*WHAT IS NEW IN 3.3: "Added transforms to improve carousel performance in modern browsers."
  Need to override the 3.3 new styles for modern browsers & apply opacity*/
@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
}
</style>

<!-- MAIN SLIDER -->
<div class="main-slider">
    <div id="mainSlider" class="carousel slide carousel-fade" data-ride="carousel">
                    
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <?php
              $querymenu22h = "SELECT gambar FROM header where aktif='Y' and id_header='1'";
              $hasilmenu22h = mysqli_query($koneksi,$querymenu22h);
              while ($rdata22h=mysqli_fetch_array($hasilmenu22h)){
              ?>
                                <div class="item active">
                                  <a href="#"> <img src="img_header/<?php echo "$rdata22h[gambar]";?>" class="gambar-slide">
                  </a>
                 
                </div>
                 <?php
  }
  ?>  <?php
  $querymenu22h = "SELECT gambar FROM header where aktif='Y' and id_header!='1'";
  $hasilmenu22h = mysqli_query($koneksi,$querymenu22h);
  while ($rdata22h=mysqli_fetch_array($hasilmenu22h)){
  ?>
                    <div class="item">
                      <a href="#"> <img src="img_header/<?php echo "$rdata22h[gambar]";?>" class="gambar-slide">
      </a>
     
    </div>
     <?php
}
?>          
                        
                       
                </div>
    </div>
</div>
<!-- END MAIN SLIDER -->            
</div>
</div>
<div class="nik-finder">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="caps-cari-nik">
					Apakah NIK Anda Sudah Terdata Pada Sistem ?<br />
					Silakan Cek NIK Anda Apakah sudah Terdata Sebagai Penerima Bantuan
				</div>
			</div>
			<div class="col-md-6">
				<div class="field-cari-nik">
					<div class="input-group" style="display:flex;">
						<input id="cariNik" type="text" class="form-control cari-nik" placeholder="CARI NIK" autocomplete="off" style="border-radius:50px;width:100%;box-shadow:0px 2px 15px rgba(0, 0, 0, 0.1)"/>
						<span><button class="btn-cari-nik" type="button" id="cariNikButton">Cari NIK</button></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="visibility: hidden;">
		<button id="modalNikAdaButton" type="button" data-toggle="modal" data-target="#modalNikAda">Launch modal</button>
		<button id="modalNikTidakAdaButton" type="button" data-toggle="modal" data-target="#modalNikTidakAda">Launch modal</button>
	</div>
</div>

<!-- Modal Cari Nik -->
<div class="modal fade" id="modalNikTidakAda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="true">x</button>
        <div class="modal-title-non-nik" id="myModalLabel">NIK Tidak Terdata</div>
      </div>
      <div class="modal-body non-nik">
      	<p>Maaf, NIK yang anda cari belum ada pada sistem data E-Mahan.</p>
        Terimakasih
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalNikAda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="true">x</button>
        <div class="modal-title-nik" id="myModalLabel">NIK Telah Terdata</div>
      </div>
      <div class="modal-body nik-ada">
        <p>NIK yang anda cari telah terdata pada sistem data E-Mahan. </p>
				<div id="status"></div>
        <div id="nik"></div>
        <div id="nama"></div>
        <div id="foto"></div>
        <br>
        Terimakasih, Dalam Pengusulan Ini Tidak Dipungut Biaya Apapun.
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	let BASEMODAL1 = document.getElementById('modalNikAda').innerHTML
	let BASEMODAL2 = document.getElementById('modalNikTidakAda').innerHTML

	function cariNikTombol () {

		const NIK = document.getElementById('cariNik').value
		const modalNikAda = document.getElementById('modalNikAda')
		const modalNikTidakAda = document.getElementById('modalNikTidakAda')

		

		window.fetch('serverside/get_lihatnik.php?cek_nik='+NIK).then(res => res.json()).then(res => {

			window.fetch('serverside/get_lihatbantuan.php?cek_bantuan='+NIK).then(res => res.json()).then(({ bantuan }) => {
				
        const bantuan_list = document.getElementById('bantuan_list')
			
				const pesan = document.createElement('p')
				
				if (bantuan.length) {

					for (let i = 0; i < bantuan.length; i++) {
						const childElm = document.createElement('li')
						const { status, nik, nama, foto } = bantuan[i]
						const showKK = status && 'STATUS: ' + status
						const showNIK = nik && 'NIK: ' + nik 
            const showNAMA = nama && 'NAMA: ' + nama 

            document.getElementById("status").innerHTML = showKK;
            document.getElementById("nik").innerHTML = showNIK;
            document.getElementById("nama").innerHTML = showNAMA;
            document.getElementById("foto").innerHTML = "<br>FOTO TEMPAT : <br><img src='foto_tempat/"+foto+"' width='100%' height='300px'>";

						
					}

				}
				
				
			})


			if(res.nik) {
				document.getElementById('modalNikAdaButton').click()
			}

			else {
				document.getElementById('modalNikTidakAdaButton').click()
			}
		})
	}

	document.getElementById('cariNikButton').addEventListener('click', cariNikTombol)
</script>

<script>
  jQuery(document).ready(function($) {
    var owl = $('.statistik-widget');
      owl.on('initialize.owl.carousel initialized.owl.carousel ' +
      'initialize.owl.carousel initialize.owl.carousel ' +
      'resize.owl.carousel resized.owl.carousel ' +
      'refresh.owl.carousel refreshed.owl.carousel ' +
      'update.owl.carousel updated.owl.carousel ' +
      'drag.owl.carousel dragged.owl.carousel ' +
      'translate.owl.carousel translated.owl.carousel ' +
      'to.owl.carousel changed.owl.carousel',
      function(e) {
        $('.' + e.type)
        .removeClass('secondary')
        .addClass('success');
        window.setTimeout(function() {
          $('.' + e.type)
            .removeClass('success')
            .addClass('secondary');
          }, 3000);
      });
      owl.owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        margin: 20,
        video: true,
        responsive:{
          0:{ 
            items:1
          },
                    480:{
            items:2
          },
                    800:{
            items:3
          },
          980:{
            items:4
          },
                    1336:{
            items:4
          }
        }
      });
    });
</script>
<!-- ------------------------------------------------------------------------ -->
<div class="top-widget">
<!-- ------------------------------------------------------------------------- -->   

<div class="container-default section-apbdes">
	<div class="container-default section-module-apbdes">
	<div class="container">

		<div class="col-md-12">
			<div class="apbdes">
				<div class="bg-title">
					<div class="title-widget-apbdes-1">
						<div class="apbdes-title-text">BASIS DATA RTLH</div>
					</div>
				</div>

				<div class="body-apbdes">


        <div id="chartdiv"></div>
        <br><strong>TOTAL RTLH Basis Data: <?php 
    $querymenu22 = "SELECT count(*) as jmlh FROM rtlh";
    $hasilmenu22 = mysqli_query($koneksi,$querymenu22);
    $rdata22=mysqli_fetch_array($hasilmenu22);

    $querymenu22k = "SELECT count(*) as jmlhk FROM rtlh where sts_penanganan='Y'";
    $hasilmenu22k = mysqli_query($koneksi,$querymenu22k);
    $rdata22k=mysqli_fetch_array($hasilmenu22k);

    $jmlht1=$rdata22['jmlh']-$rdata22k['jmlhk'];
    if($jmlht1=='0'){
      $jmlht=$rdata22['jmlh'];
    }else{
      $jmlht=$jmlht1;

    }
    echo rupiah1($jmlht);
    ?> Update Terakhir Tanggal : <?php $tgld=date('Y-m-d'); $tgld3=tgl_indo($tgld); echo $tgld3;?></strong>
        

        </div>
			</div>
		</div>

   

    <div class="col-md-12">
			<div class="apbdes">
				<div class="bg-title">
					<div class="title-widget-apbdes-3">
						<div class="apbdes-title-text">RTLH PADA KAWASAN KUMUH KEWENANGAN PROPINSI</div>
					</div>
				</div>

				<div class="body-apbdes">

        <div id="chartdiv3"></div>
        <br><strong>TOTAL RTLH Pada Kawasan Kumuh Kewenangan Provinsi: <?php 
    $querymenu221 = "SELECT count(*) as jmlh FROM rtlh where jenis_kawasan='KUMUH'";
    $hasilmenu221 = mysqli_query($koneksi,$querymenu221);
    $rdata221=mysqli_fetch_array($hasilmenu221);
    $jmlht1=$rdata221['jmlh'];
    echo rupiah1($jmlht1);
    ?> Update Terakhir Tanggal : <?php $tgld=date('Y-m-d'); $tgld3=tgl_indo($tgld); echo $tgld3;?></strong>
       
        
       
      
									</div>
			</div>
		</div>

    <div class="col-md-12">
			<div class="apbdes">
				<div class="bg-title">
					<div class="title-widget-apbdes-2">
						<div class="apbdes-title-text">PENANGANAN RTLH</div>
					</div>
				</div>

				<div class="body-apbdes">

        <div id="chartdiv2"></div>
        <br><strong>TOTAL PENANGANAN RTLH : <?php 
    $querymenu22 = "SELECT count(*) as jmlh FROM rtlh where sts_penanganan='Y'";
    $hasilmenu22 = mysqli_query($koneksi,$querymenu22);
    $rdata22=mysqli_fetch_array($hasilmenu22);

      $jmlht=$rdata22['jmlh'];
  
    echo rupiah1($jmlht);
    ?> Update Terakhir Tanggal : <?php $tgld=date('Y-m-d'); $tgld3=tgl_indo($tgld); echo $tgld3;?></strong>
        
       
      
									</div>
			</div>
		</div>

    <div class="col-md-12">
			<div class="apbdes">
				<div class="bg-title">
					<div class="title-widget-apbdes-3">
						<div class="apbdes-title-text">INDIKATOR RASIO</div>
					</div>
				</div>

				<div class="body-apbdes">

        <div class="containerpro" style="margin-top: 30px;">
        
  <section class="cardpro cardpro-blue">
    <div class="product-image">
      <img class="imgpro" src="<?php echo "$f[folder]/assets/images/1.png";?>" alt="" draggable="false" />
    </div>
    <div class="product-info">
      <p><font size='3'>Ketahanan Dinding</font>
      <h2>0.0 %</h2>
      </p>
    </div>
  </section>

  <section class="cardpro cardpro-blue">
    <div class="product-image">
      <img class="imgpro" src="<?php echo "$f[folder]/assets/images/2.png";?>" alt="" draggable="false" />
    </div>
    <div class="product-info">
      <p><font size='3'>Ketahanan Atap</font>
      <h2>0.0 %</h2>
      </p>
    </div>
  </section>
  <section class="cardpro cardpro-blue">
    <div class="product-image">
      <img class="imgpro" src="<?php echo "$f[folder]/assets/images/3.png";?>" alt="" draggable="false" />
    </div>
    <div class="product-info">
      <p><font size='3'>Ketahanan Lantai</font>
      <h2>0.0 %</h2>
      </p>
    </div>
  </section>
 
 

  </div>

  <div class="containerpro" style="margin-top: 30px;margin-bottom: 30px;">
        
  <section class="cardpro cardpro-blue">
    <div class="product-image">
      <img class="imgpro" src="<?php echo "$f[folder]/assets/images/4.png";?>" alt="" draggable="false" />
    </div>
    <div class="product-info">
      <p><font size='3'>Sanitasi</font>
      <h2>0.0 %</h2>
      </p>
    </div>
  </section>

  <section class="cardpro cardpro-blue">
    <div class="product-image">
      <img class="imgpro" src="<?php echo "$f[folder]/assets/images/5.png";?>" alt="" draggable="false" />
    </div>
    <div class="product-info">
      <p><font size='3'>Air Minum</font>
      <h2>0.0 %</h2>
      </p>
    </div>
  </section>
  <section class="cardpro cardpro-blue">
    <div class="product-image">
      <img class="imgpro" src="<?php echo "$f[folder]/assets/images/6.png";?>" alt="" draggable="false" />
    </div>
    <div class="product-info">
      <p><font size='3'>Milik Sendiri</font>
      <h2>0.0 %</h2>
      </p>
    </div>
  </section>
  
 

  </div>

  <div class="containerpro" style="margin-top: 30px;">
        
        <section class="cardpro cardpro-blue">
          <div class="product-image">
            <img class="imgpro" src="<?php echo "$f[folder]/assets/images/7.png";?>" alt="" draggable="false" />
          </div>
          <div class="product-info">
            <p><font size='3'>Bukan Milik Sendiri</font>
            <h2>0.0 %</h2>
            </p>
          </div>
        </section>
      
        <section class="cardpro cardpro-blue">
          <div class="product-image">
            <img class="imgpro" src="<?php echo "$f[folder]/assets/images/8.png";?>" alt="" draggable="false" />
          </div>
          <div class="product-info">
            <p><font size='3'>Laki-Laki</font>
            <h2>0.0 %</h2>
            </p>
          </div>
        </section>
        <section class="cardpro cardpro-blue">
          <div class="product-image">
            <img class="imgpro" src="<?php echo "$f[folder]/assets/images/9.png";?>" alt="" draggable="false" />
          </div>
          <div class="product-info">
            <p><font size='3'>Perempuan</font>
            <h2>0.0 %</h2>
            </p>
          </div>
        </section>
        
       
      
        </div>
 
      
									</div>
			</div>
		</div>
		
			
	</div>
</div>
</div> 

<!-- 9nformasi terkini -->

<div class="container-default bg-gray" id="index-berita">
	<div class="container" data-aos="fade-up">
		<div class="row">
			<ul class="breadcrumb-index">
				<li><a href="beranda"><span class="breadicon"><i class="fa fa-home"></i></span></a></li>
				<li><a href="#" alt="Index Berita">Informasi Terkini</a></li>
			</ul>
			<!-- Sidebar -->
			<div class="col-md-3">
				<div class="widget homepage-widget"data-aos="fade-up" data-aos-delay="100">
					<div class="widget-post-bx">
						
<!-- widget Menu-->
<div class="widget-menu_kategori-index">
    <ul id="ul-menu-index" class="main">
    <?php  
          $querymenu2 = "SELECT * FROM kategori WHERE aktif='Y' order by id_kategori ASC";
          $hasilmenu2 = mysqli_query($koneksi,$querymenu2);
          while ($rdata=mysqli_fetch_array($hasilmenu2)) {
          $Encrypted1 =Encryption::encode($rdata['id_kategori']);
            
          ?>
                    <li class="cat-item-index">
               <a href="kategori-<?php echo $Encrypted1;?>"> <span class="iconfont"><i class="fa fa-file-text-o"></i></span> <?php echo $rdata['nama_kategori'];?></a>
                            </li>
               <?php
          }
          ?>             
                   
                  
            </ul>
</div>
</div>
</div>
</div>
			<!-- Sidebar -->

			<div class="col-md-9" data-aos="fade-up" data-aos-delay="200" style="margin-bottom:10px;">
				<div class="row">

        <?php  
          $querymenu21 = "SELECT * FROM berita a,kategori b where a.id_kategori=b.id_kategori";
          $hasilmenu21 = mysqli_query($koneksi,$querymenu21);
          while ($rdata1=mysqli_fetch_array($hasilmenu21)) {
            $tgl2 = tgl_indo($rdata1['tanggal']);
            $tglsebelmnya2=$rdata1['tanggal'];
            $jdl2=$rdata1['judul']; 
            $isi_berita2 = strip_tags($rdata1['isi_berita']); 
            $isi2 = substr($isi_berita2,0,20); 
            $isi2 = substr($isi_berita2,0,strrpos($isi2," "));
            $jdl3 = substr($jdl2,0,85); 
            $jdl3 = substr($jdl2,0,strrpos($jdl3," "));

          $Encrypted11 =Encryption::encode($rdata1['judul_seo']);
            
          ?>
			  <div class="col-md-6">
					<div class="row">
						<div class="artikel-list-index">
							<div class="gambar-index">
								<a href="berita-<?php echo $Encrypted11;?>">
									<img src="<?php echo "img_berita/$rdata1[gambar]";?>" width="1600" height="900" class="img-responsive img-article-list">
								</a>
							</div>
							<div class="text-index">
								<div class="artikel-list-judul">
									<a href="berita-<?php echo $Encrypted11;?>" alt="">
                  <?php echo $rdata1['judul'];?>
                        </a>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php
          }
          ?>
        
							
							
							
								</div>
			</div>

     
    
</div>
		</div>
	</div>
</div>
<!-- ------------------------------------------------------------------------------------ -->



<!-- ---------------------------------------------------------------------- -->
</div>
<!-- --------------------------END TOP WIDGET ----------------------------- -->

<!-- Video -->
<div class="container-default section-video">
				<div class="container">	
<script>
  jQuery(document).ready(function($) {
    var owl = $('.konten_video');
      owl.on('initialize.owl.carousel initialized.owl.carousel ' +
      'initialize.owl.carousel initialize.owl.carousel ' +
      'resize.owl.carousel resized.owl.carousel ' +
      'refresh.owl.carousel refreshed.owl.carousel ' +
      'update.owl.carousel updated.owl.carousel ' +
      'drag.owl.carousel dragged.owl.carousel ' +
      'translate.owl.carousel translated.owl.carousel ' +
      'to.owl.carousel changed.owl.carousel',
      function(e) {
        $('.' + e.type)
        .removeClass('secondary')
        .addClass('success');
        window.setTimeout(function() {
          $('.' + e.type)
            .removeClass('success')
            .addClass('secondary');
          }, 3000);
      });
      owl.owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        lazyLoad: true,
		    autoplay: false,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        margin: 20,
        video: true,
        responsive:{
          0:{ 
            items:1
          },
					480:{
            items:2
          },
					800:{
            items:3
          },
          980:{
            items:4
          },
					1336:{
            items:3
          }
        }
      });
    });
</script>
<!-- ----------------------------------- -->



</div>
</div>

<!-- -------------------------------------------------------------- -->
<?php
}elseif ($_GET['module']=='halamanstatis'){
include "$f[folder]/modul/mod_halaman/halaman.php";
}elseif ($_GET['module']=='detailberita'){
include "$f[folder]/modul/mod_berita/berita.php";
}elseif ($_GET['module']=='detailkategori'){
include "$f[folder]/modul/mod_berita/kategori.php";
}
//=====================================================================
elseif ($_GET['module']=='iplt'){
include "$f[folder]/modul/mod_airlimbah/iplt.php";
}  
elseif ($_GET['module']=='spald'){
include "$f[folder]/modul/mod_airlimbah/spald.php";
}
elseif ($_GET['module']=='kelembagaanairlimbah'){
  include "$f[folder]/modul/mod_airlimbah/kelembagaanairlimbah.php";
  
}elseif ($_GET['module']=='capaianlimbah'){
  include "$f[folder]/modul/mod_airlimbah/capaian.php";
} 
//=====================================================================
elseif ($_GET['module']=='spamreg'){
include "$f[folder]/modul/mod_airminum/spam_regional.php";
}  
elseif ($_GET['module']=='spamkab'){
include "$f[folder]/modul/mod_airminum/spam_kabupaten.php";
}elseif ($_GET['module']=='spamikk'){
  include "$f[folder]/modul/mod_airminum/spam_ikk.php";
}elseif ($_GET['module']=='spamdesa'){
  include "$f[folder]/modul/mod_airminum/spam_perdesaan.php";
}elseif ($_GET['module']=='rawanair'){
  include "$f[folder]/modul/mod_airminum/rawan_air.php";
}elseif ($_GET['module']=='airbaku'){
  include "$f[folder]/modul/mod_airminum/air_baku.php";
}elseif ($_GET['module']=='capaianairminum'){
  include "$f[folder]/modul/mod_airminum/capaian.php";
}  
elseif ($_GET['module']=='kelembagaanairminum'){
  include "$f[folder]/modul/mod_airminum/kelembagaan_airminum.php";
//=====================================================================
}elseif ($_GET['module']=='tps'){
  include "$f[folder]/modul/mod_sampah/tps.php";
}elseif ($_GET['module']=='tpst'){
  include "$f[folder]/modul/mod_sampah/tpst.php";
}elseif ($_GET['module']=='tpa'){
  include "$f[folder]/modul/mod_sampah/tpa.php";
}elseif ($_GET['module']=='kelembagaansampah'){
  include "$f[folder]/modul/mod_sampah/kelembagaan_sampah.php";
}elseif ($_GET['module']=='capaiansampah'){
  include "$f[folder]/modul/mod_sampah/capaian.php";
} 
//=================================================================== 
elseif ($_GET['module']=='kumuhdiatas10ha'){
  include "$f[folder]/modul/mod_kumuh/kumuhdiatas10ha.php";
}elseif ($_GET['module']=='kumuhdibawah10ha'){
  include "$f[folder]/modul/mod_kumuh/kumuhdibawah10ha.php";
}elseif ($_GET['module']=='perumahan'){
  include "$f[folder]/modul/mod_perumahan/perumahan.php";
}elseif ($_GET['module']=='rtlh'){
  include "$f[folder]/modul/mod_rtlh/rtlh.php";
}
//=======================================================================
elseif ($_GET['module']=='petasebaran'){
  include "$f[folder]/modul/mod_peta/petasebaran.php";
}
elseif ($_GET['module']=='kategoridownload'){
  include "$f[folder]/modul/mod_download/download.php";
}elseif ($_GET['module']=='album'){
  include "$f[folder]/modul/mod_galeri/album.php";
}elseif ($_GET['module']=='galeri'){
  include "$f[folder]/modul/mod_galeri/galeri.php";
}
elseif ($_GET['module']=='basisdata'){
  include "$f[folder]/modul/mod_rtlh/basisdata.php";
}
elseif ($_GET['module']=='penanganan'){
  include "$f[folder]/modul/mod_rtlh/penanganan.php";
}  
elseif ($_GET['module']=='kumuh'){
  include "$f[folder]/modul/mod_rtlh/kumuh.php";
} 
?>