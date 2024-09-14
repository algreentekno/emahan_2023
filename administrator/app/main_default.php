<?php
session_start();
include "timeout.php";

if (empty($_SESSION['namausershped']) AND empty($_SESSION['passusershped']) AND $_SESSION['loginshped']==0){
  
   header('location:login');

}
else{
  if (!cek_login()) {
    header('Location: logout');
    exit(0);
    }else{
    //=============================================================
include "setting.php";
require_once "config/koneksi_li.php";
require_once "config/library.php";
require_once "config/fungsi_matauang1.php";
include "phpqrcode/qrlib.php"; 

date_default_timezone_set('Asia/Jakarta');
$today = date('Y-m-d');
$year = date('Y');
$month = date('m');
$month1 = date('Y-m');
$yesterday=date('Y-m-d', strtotime('-1 Day', strtotime( $today )));
$lastmont=date('Y-m', strtotime('-1 Month', strtotime( $month1 )));
$year1=explode("-",$lastmont);
$dt12y=$year1[0];
$dt13m=$year1[1];
$yesterday7=date('Y-m-d', strtotime('-14 Day', strtotime( $today )));
$checkRecord11sst = mysqli_query($koneksi,"SELECT * FROM tahun_data order by id_tahun limit 1");
$jumt = mysqli_fetch_array($checkRecord11sst);
$tahundata=$jumt['tahun_data'];
$kodekota=$_SESSION['kodekota'];
?>
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="aplikasi">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="app/images/logo_lampung.png">
    <!-- Page Title  -->
    <title><?php echo $title;?></title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="app/assets/css/dashlite.css?ver=3.2.0">
    <link href="app/assets/css/sweetalert2.min.css " rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="app/assets/css/dropzone.min.css" type="text/css" />
    <link rel="stylesheet" href="app/assets/css/libs/fontawesome-icons.css?ver=3.2.0">
    <link rel="stylesheet" href="app/assets/css/libs/themify-icons.css?ver=3.2.0">
    <link rel="stylesheet" href="app/assets/css/libs/bootstrap-icons.css?ver=3.2.0">
    <link rel="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="app/assets/css/select.dataTables.min.css">
    <link rel="stylesheet" href="app/css/passtrength.css">
    <style>
    table.greyGridTable {
        border-left: 0.5px solid;
        border-bottom: 0.5px solid;
  border-collapse: collapse;
  
}
table.greyGridTable th{
    border-top: 0.5px solid;
    border-right: 0.5px solid;
  font-size:12px;
  color:black;
  background-color:#FFFF00;
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

.card3 .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-size: 15px;
  margin-top: 20px;
  height: 40px;
}



.title-white {
  color: white;
  font-weight: 600;
}

.title-black {
  color: black;
}

.card3 {
  margin: 10px auto;
  width: 600px;
  height: 400px;
  border-radius: 10px;
  background-image: url('https://i.redd.it/b3esnz5ra34y.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-repeat: no-repeat;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  transition: 0.4s;
}

  </style>
  <style>
    table.greyGridTable2 {
        border-left: 0.5px solid;
  
  border-collapse: collapse;
  
}
table.greyGridTable2 th{
    border-top: 0.5px solid;
    border-right: 0.5px solid;
  font-size:12px;
  color:black;
  background-color:#FFFF00;
  text-align: center;
  padding: 1px 1px;
  word-wrap: break-word;
  
  
}
table.greyGridTable2 td{
    border-top: 0.5px solid;
    border-right: 0.5px solid;
    border-bottom: 0.5px solid;
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


.demo-wrap {
  position: relative;
}

.demo-wrap:before {
  content: ' ';
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  opacity: 0.2;
  background-image: url('app/images/back.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}

.demo-content {
  position: relative;
}

.modal-full {
    min-width: 100%;
    margin: 0;
    width: 100%;
  height: 100%;
  padding: 0;
}

.modal-full .modal-content {
    min-height: 100%;
    height: 100%;
  border-radius: 0;
}

#wall{
    background: url(app/images/back1.png) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		
    
  }

  .modal-dialog1 {
  width: 100%;
  height: 100%;
  padding: 0;
}

.modal-content1 {
  height: 100%;
  border-radius: 0;
}
  </style>

    
</head>

<body class="nk-body npc-invest bg-lighter demo-wrap demo-content">
    <div class="nk-app-root">
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            <div class="nk-header nk-header-fixed is-theme">
                <div class="container-xl wide-xl">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger me-sm-2 d-lg-none">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand">
                            <a href="dashboard" class="logo-link">
                                <img class="logo-light logo-img" src="app/images/logo_lampung.png">
                                <img class="logo-dark logo-img" src="app/images/logo_lampung.png">
                            </a>
                        </div><!-- .nk-header-brand -->
                        <div class="nk-header-menu" data-content="headerNav">
                            <div class="nk-header-mobile">
                                <div class="nk-header-brand">
                                    <a href="dashboard" class="logo-link">
                                    <img class="logo-light logo-img" src="app/images/logo_lampung.png">
                                <img class="logo-dark logo-img" src="app/images/logo_lampung.png">
                                    </a>
                                </div>
                                <div class="nk-menu-trigger me-n2">
                                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                                </div>
                            </div>
                            <?php include "menu.php";?>
                        </div><!-- .nk-header-menu -->
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <?php
                                if($_SESSION['level']!='0'){
                                ?>
                                <li class="dropdown notification-dropdown">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                        <div class="icon-status icon-status-info" style="color: black;"><em class="icon ni ni-bell"></em></div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                                        <div class="dropdown-head">
                                            <span class="sub-title nk-dropdown-title">Notifications</span>
                                            <a href="#">Mark All as Read</a>
                                        </div>
                                        <div class="dropdown-body">
                                            <!--
                                            <div class="nk-notification">
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>-->
                                            <!-- .nk-notification -->
                                        </div><!-- .nk-dropdown-body -->
                                        <div class="dropdown-foot center">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </li><!-- .dropdown -->
                                <?php
                                }
                                ?>
                                <li class="dropdown user-dropdown order-sm-first">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-xl-block">
                                                <div class="user-status" style="color: black;"><?php 
                                                if($_SESSION['level']=='0'){
                                                    $lvl='Administrator';
                                                }elseif($_SESSION['level']=='1'){
                                                    $lvl='Operator';
                                                }
                                                echo $lvl;
                                                ?></div>
                                                <div class="user-name dropdown-indicator" style="color: black;">DETAIL PROFIL</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <span><em class="icon ni ni-user-alt"></em></span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text"><?php echo $_SESSION['nama_lengkap'];?></span>
                                                    <span class="sub-text"><?php echo $_SESSION['email'];?></span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                      
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                
                                                <li><a href="rubahpass"><em class="icon ni ni-setting-alt"></em><span>Ubah Password</span></a></li>
                                                </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="logout"><em class="icon ni ni-signout"></em><span>Logout</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li><!-- .dropdown -->
                                
                            </ul><!-- .nk-quick-nav -->
                        </div><!-- .nk-header-tools -->
                    </div><!-- .nk-header-wrap -->
                </div><!-- .container-fliud -->
            </div>
            <!-- main header @e -->
            <!-- content @s -->
            <?php include "main_modul.php";?>
            <!-- content @e -->
            <!-- footer @s -->
            <div class="nk-footer nk-footer-fluid bg-lighter">
                <div class="container-xl">
                    <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright" style="color: black;"> &copy; 2023 DINAS PERUMAHAN, KAWASAN PERMUKIMAN DAN CIPTA KARYA PROVINSI LAMPUNG.
                        </div>
                      
                    </div>
                </div>
            </div>
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- app-root @e -->
    
    <!-- JavaScript -->
    <script src="app/assets/js/bundle.js?ver=3.2.0"></script>
    <!--<script src="app/assets/js/scripts.js?ver=3.2.0"></script>-->
    <script src="app/assets/js/charts/gd-invest.js"></script>
    <script src="app/assets/js/libs/datatable-btns.js"></script>
    <script src="app/assets/js/dataTables.select.min.js"></script>
    <script src="app/assets/js/mui.min.js"></script>
    <script src="app/assets/js/sweetalert2.all.min.js "></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJ7ATf0VMQX0nJS_-tI6oIk80R_3H2pOI&callback=initMap" type="text/javascript"></script>
    <script src="app/assets/js/dropzone.min.js"></script>
    <script src="app/assets/editor/tinymce.min.js"></script>
    <script type="text/javascript">
    var BASE_URL = "<?php echo $urlmain;?>"; // use your own base url
   tinymce.init({
    selector: ".textarea",theme: "modern",width: '100%',height: 300,
	setup: function (editor) {
		editor.on('change', function () {
			tinymce.triggersave();
		});
	},
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | image media | link unlink anchor | forecolor backcolor  | print preview code ",
   image_advtab: true ,
   
   external_filemanager_path: BASE_URL + "./asset/filemanager/",
   filemanager_title: "Media Gallery",
   external_plugins: { "filemanager": BASE_URL + "./asset/filemanager/plugin.min.js" }
   
 });
 
</script>
<script src="app/assets/js/jquery.tabledit.min.js"></script>
<script type="text/javascript" src="app/js/jquery.passtrength.js"></script>
    <?php include "main_js.php";?>
    <?php include "main_js2.php";?>
    


</body>

</html>
<?php
    }
//===================================================================================================================
}
?>



