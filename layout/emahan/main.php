<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="id" class="notranslate" translate="no">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<script type="text/javascript">
   if(document.location.protocol=='http:'){
   var Tynt=Tynt||[];Tynt.push('accswOR5Kr4yaUacwqm_6r');Tynt.i={"ap":"<br/><b>Sumber Info: <? include"url.php";?></b><hr>"};
   (function(){var s=document.createElement('script');s.async="async";s.type="text/javascript";s.src='http://tcr.tynt.com/ti.js";?>'; 
   var h=document.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})();
   }
   </script>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<title><?php include "titel.php"; ?></title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow">
  <meta name="description" content="<?php include "meta1.php"; ?>">
  <meta name="keywords" content="<?php include "meta2.php"; ?>">
  <meta http-equiv="Copyright" content="Algreen Teknologi" "Algreen Teknologi">
  <meta name="author" content="Algreen Teknologi" "<?php include "url.php";?>">
  <meta http-equiv="imagetoolbar" content="no">
  <meta name="language" content="Indonesia">
  <meta name="revisit-after" content="7">
  <meta name="webcrawlers" content="all">
  <meta name="rating" content="general">
  <meta name="spiders" content="all">

   <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo "$f[folder]/assets/images/logo.png";?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">	
	 
  <meta property="og:title" content="<?php include "titel.php";?>" />
	<meta property="og:image" content="<?php echo "$d[url]";?>/<?php include "dina_image.php";?>" />
	<meta property="og:description" content="<?php include "meta1.php";?>" />

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo "$f[folder]/assets/bootstrap/css/bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?php echo "$f[folder]/themes/lara/assets/bootswatch/flatly/bootstrap.min.css";?>">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo "$f[folder]/assets/bootstrap/css/font-awesome.min.css";?>">
    
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo "$f[folder]/assets/bootstrap/css/dataTables.bootstrap.min.css";?>">
    
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo "$f[folder]/assets/bootstrap/css/select2.min.css";?>">
    
    <!-- Bootstrap Date time Picker -->
    <link rel="stylesheet" href="<?php echo "$f[folder]/assets/bootstrap/css/bootstrap-datetimepicker.min.css";?>">
    
    <!-- OpenStreetMap Css -->
    <link rel="stylesheet" href="<?php echo "$f[folder]/assets/css/leaflet.css";?>" />
    <link rel="stylesheet" href="<?php echo "$f[folder]/assets/css/leaflet.pm.css";?>" />
    <link rel="stylesheet" href="<?php echo "$f[folder]/themes/lara/assets/css/custom.css";?>">
    <link rel="stylesheet" href="<?php echo "$f[folder]/themes/lara/assets/css/animated.css";?>">
    <link rel="stylesheet" href="<?php echo "$f[folder]/themes/lara/assets/css/owl.carousel.css";?>">
    <link rel="stylesheet" href="<?php echo "$f[folder]/themes/lara/assets/css/owl.theme.default.css";?>">
    <link rel="stylesheet" href="<?php echo "$f[folder]/themes/lara/assets/lightbox/css/lightbox.css";?>">
    <link rel="stylesheet" href="<?php echo "$f[folder]/assets/css/themify-icons.css";?>">
    <link rel="stylesheet" href="<?php echo "$f[folder]/assets/bootstrap/css/ionicons.min.css";?>">
    
    <!-- Quicksand Google Fonts -->
    <link rel="stylesheet" href="<?php echo "$f[folder]/assets/css/font.css";?>">  
    <style>

/*===== GOOGLE FONTS =====*/
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");

/*===== VARIABLES CSS =====*/

.imgpro {
  max-width: 100%;
  height: 100%;
  user-select: none;
}

/*===== CARD =====*/
.containerpro {
  height: 100%;
  width: 850px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  column-gap: 20px;
}
.cardpro {
  position: relative;
  padding: 1rem;
  width: 200px;
  height: 230px;
  box-shadow: -1px 15px 30px -12px rgb(32, 32, 32);
  border-radius: 0.9rem;
  background-color: var(--red-card);
  color: var(--text);
  cursor: pointer;
}



.product-image {
  height: 120px;
  width: 100%;
  transform: translate(0, -1.5rem);
  transition: transform 500ms ease-in-out;
  filter: drop-shadow(5px 10px 15px rgba(8, 9, 13, 0.4));
  text-align: center;
}
.product-info {
  text-align: center;
}

.cardpro:hover .product-image {
  transform: translate(-1.5rem, -7rem) rotate(-20deg);
}

.svg {
  height: 25px;
  width: 25px;
  fill: #fff;
  transition: all 500ms ease;
}

.fav:hover .svg {
  fill: #000;
}

@media screen and (max-width: 800px) {
  body {
    height: auto;
  }
  .containerpro {
    padding: 2rem 0;
    width: 100%;
    flex-direction: column;
    gap: 3rem;
  }
}



    </style>    
    <!-- OpenStreetMap Js-->
    <script src="<?php echo "$f[folder]/assets/js/leaflet.js";?>"></script>
    <script src="<?php echo "$f[folder]/assets/js/turf.min.js";?>"></script>
    <script src="<?php echo "$f[folder]/assets/js/leaflet.pm.min.js";?>"></script>
    
    <!-- jQuery -->
    <script src="<?php echo "$f[folder]/themes/lara/assets/js/jquery.min.js";?>"></script>
    <script src="<?php echo "$f[folder]/assets/js/axios.min.js";?>"></script>
    <script type="text/javascript" src="<?php echo "$f[folder]/themes/lara/assets/lightbox/js/lightbox-plus-jquery.min.js";?>"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo "$f[folder]/assets/bootstrap/js/bootstrap.min.js";?>"></script>
    <script src="<?php echo "$f[folder]/assets/bootstrap/js/moment.min.js";?>"></script>

    <!-- Select2 -->
    <script src="<?php echo "$f[folder]/assets/bootstrap/js/select2.full.min.js";?>"></script>

    <!-- DataTables -->
    <script src="<?php echo "$f[folder]/assets/bootstrap/js/jquery.dataTables.min.js";?>"></script>
    <script src="<?php echo "$f[folder]/assets/bootstrap/js/dataTables.bootstrap.min.js";?>"></script>

    <!-- bootstrap Date time picker -->
    <script src="<?php echo "$f[folder]/assets/bootstrap/js/bootstrap-datetimepicker.min.js";?>"></script>
    <script src="<?php echo "$f[folder]/assets/bootstrap/js/id.js";?>"></script>

    <!-- bootstrap Date picker -->
    <script src="<?php echo "$f[folder]/assets/bootstrap/js/bootstrap-datepicker.min.js";?>"></script>
    <script src="<?php echo "$f[folder]/assets/bootstrap/js/bootstrap-datepicker.id.min.js";?>"></script>
    <script src="<?php echo "$f[folder]/assets/js/validasi.js";?>"></script>
    <script src="<?php echo "$f[folder]/assets/js/jquery.validate.min.js";?>"></script>
    <script src="<?php echo "$f[folder]/themes/lara/assets/js/script.js";?>"></script>
    <script src="<?php echo "$f[folder]/themes/lara/assets/js/owl.carousel.min.js";?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJ7ATf0VMQX0nJS_-tI6oIk80R_3H2pOI&callback=initMap" type="text/javascript"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <?php include "main_js1.php";?>
    <?php include "main_js.php";?>
    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
    <script>
        lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
        })

        $(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
    </script>
       <style>
    table.greyGridTable {
        border-left: 0.5px solid;
        border-bottom: 0.5px solid;
  border-collapse: collapse;
  
}
table.greyGridTable th{
    border-top: 0.5px solid;
    border-right: 0.5px solid;
  font-size:11px;
  color:#131E3A;
  background-color:#FFD700;
  text-align: center;
  padding: 1px 1px;
  padding-left: 5px;
  padding-right: 5px;
  padding-top: 5px;
  padding-bottom: 5px;
  word-wrap: break-word;
  
  
}
table.greyGridTable td{
    border-top: 0.5px solid;
    border-right: 0.5px solid;
    
  padding: 1px 1px;
  padding-left: 5px;
  padding-right: 5px;
  padding-top: 5px;
  padding-bottom: 5px;
  text-align: left;
  font-family: Arial, Helvetica, sans-serif;
  font-size:12px;
  color: black;
 
 
  
 
}

  </style>
		<style>

.progress {
    position: relative;
	height: 25px;
}
.progress > .progress-type {
	position: absolute;
	left: 0px;
	font-weight: 800;
	padding: 3px 30px 2px 10px;
	color: rgb(255, 255, 255);
	background-color: rgba(25, 25, 25, 0.2);
}
.progress > .progress-completed {
	position: absolute;
	right: 0px;
	font-weight: 800;
	padding: 3px 10px 2px;
}


.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
    </style>
<style>

.highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 100%;
    margin: 1em auto;
}





</style>		
    </head>
    <body class="skin-purle">
        <div class="wrapper">
		
            <div class="container">
                

<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color:#131E3A;">
  <div class="container">
    <div class="navbar-header">
	    <a class="navbar-brand" href="beranda">
	      	<img src="<?php echo "$f[folder]/assets/images/logo.png";?>" alt="Logo" width="30">
			<span class="logo-title">e-MAHAN PROVINSI LAMPUNG</span>
		</a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-menu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse main-menu">
	    <ul class="nav navbar-nav navbar-right" style="border: 1px solid #33CCCC;border-radius:8px 0px 0px 0px;">
      <?php  
          // query menu utama 
          $querymenu = "SELECT * FROM menu WHERE id_parent='0' AND aktif='Y' order by id_menu ASC";
          $hasilmenu = mysqli_query($koneksi,$querymenu);
  
          while ($r=mysqli_fetch_array($hasilmenu)) {
            // query submenu
            $querysubmenu = "SELECT * FROM menu WHERE id_parent='$r[id_menu]' AND aktif='Y' order by id_menu ASC";
            $hasilsubmenu = mysqli_query($koneksi,$querysubmenu);
            $jumlah   = mysqli_num_rows($hasilsubmenu);
            // apabila ada submenu
            if ($jumlah > 0){
               echo "<li class='dropdown nav-link'>";
              echo "<a data-toggle='dropdown' class='nav-link dropdown-toggle' href=\"$r[link]\">$r[nama_menu]<b class='caret'></b></a>";
              echo "<ul class='dropdown-menu'>";  // <ul> untuk submenu
              while($w=mysqli_fetch_array($hasilsubmenu)){
                echo "<li style='display:block;'><a href=\"$w[link]\">$w[nama_menu]</a></li>";
              }
              echo "</ul>";      
            }else{
               echo "<li class='nav-link'>";
              echo "<a href='$r[link]'>$r[nama_menu]</a>";
            }
            echo "</li>";
          }       
          ?>          	      
  </ul>
	</div>
  </div>
</nav>            
</div>
<div class="menu-layanan">
    <div class="container">
                    <div class="card body-layanan-mandiri">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="heading-mandiri">Sistem Informasi e-MAHAN PKPCK Provinsi Lampung</div>
                         </div>
                    </div>
                    
                </div>
            </div>
        
    </div>
            </div> <!-- end menu layanan -->           
<!-- --------------------------------------------------------------------------------------------- -->
<?php 
include "main_default.php";
?>

<!-- ---------------------------------------------------------------------------------------------- -->
<div class="container-default section-footer">
	<div class="container">
		<div class="footer">
			<div class="footer-top">
				<div class="row">
					<div class="col-md-6">
						<div class="footer-center mb-20">
							<div class="row">
								<div class="footer-title" style="color: black;">Kontak  Kami</div>
<div class="-contact" style="color: black;">
Jl. Beringin II No.34 <br/>
Teluk Betung Bandar Lampung<br />
Lampung<br />
Kodepos 35111<br />
Telepon : 00000000<br />
Email : disperkimlampungprov@gmail.com</div>
						
</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="footer-center">
							<div class="row">
								<div class="footer-title" style="color: black;">Statistik Data</div>
								<div class="widget-arsip">
								<ul class="arsip-footer">
                                <?php  
          $querymenu2 = "SELECT * FROM download WHERE id_kategoridownload='2' limit 2";
          $hasilmenu2 = mysqli_query($koneksi,$querymenu2);
          while ($rdata=mysqli_fetch_array($hasilmenu2)) {
          
            
          ?>									
                                    <li>										
										<div class="list">
											<div class="judul-arsip"><a href="#"><?php echo $rdata['judul'];?> </a></div>
											<div class="dlab-post-meta">
												<ul>
													<li class="post-cat">
                                                
													<div class="btn btn-sm btn-success"><a href="<?php echo"donloattt.php?file=$rdata[nama_file]";?>" title="Download">DOWNLOAD DATA</a></div>
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
						  </div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="footer-center">
							<div class="row">


<div class="footer-title" style="color: black;">Dokumen Publik</div>

    <div class="widget-arsip">
        <ul class="arsip-footer">
        <?php  
          $querymenu22 = "SELECT * FROM download WHERE id_kategoridownload='3' limit 2";
          $hasilmenu22 = mysqli_query($koneksi,$querymenu22);
          while ($rdata2=mysqli_fetch_array($hasilmenu22)) {
          
            
          ?>									
                                    <li>										
										<div class="list">
											<div class="judul-arsip"><a href="#"><?php echo $rdata2['judul'];?> </a></div>
											<div class="dlab-post-meta">
												<ul>
													<li class="post-cat">
													<div class="btn btn-sm btn-success"><a href="<?php echo"donloattt.php?file=$rdata2[nama_file]";?>" title="Download">DOWNLOAD DATA</a></div>
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
							</div>
						</div>
					</div>
                    
				</div>
			</div>
		
		</div>
	</div>
</div>

<div class="container-default section-copyright">
	<div class="container">
		<div class="cp-footer">
	<div class="row">
		<div class="col-md-6">
			<div class="cp-foot-left">
				<div class="row" style="color: white;">
					Dinas Perumahan, Kawasan Permukiman Dan Cipta Karya Provinsi Lampung © 2023. . All Right Reserved<br /></div>
			</div>
		</div>

		
	</div>
</div>	
</div>
</div>



<!-- /.wrapper -->



<script src="<?php echo "$f[folder]/themes/lara/assets/js/venobox.min.js";?>"></script>

</body>

</html>

