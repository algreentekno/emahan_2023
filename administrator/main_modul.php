<?php
session_start();
error_reporting(0);
if (empty($_SESSION['namausershped']) AND empty($_SESSION['passusershped']) AND $_SESSION['loginshped']==0){
  
   header('location:login');

}
else{
	//=============================================================
?>
<?php
//===================================================================
// Dashboard
//===================================================================

if ($_GET['module']=='dashboard'){
			 
	include"app/modul/mod_dashboard/main_view.php";

}
//====================================================================
else
if ($_GET['module']=='kelembagaanlimbah') {

	include"app/modul/mod_airlimbah/mainview_kelembagaan.php";
}
else
if ($_GET['module']=='akseslimbah') {

	include"app/modul/mod_airlimbah/mainview_akses.php";
}
else
if ($_GET['module']=='spaldlimbah') {

	include"app/modul/mod_airlimbah/mainview_spald.php";
}
else
if ($_GET['module']=='ipltlimbah') {

	include"app/modul/mod_airlimbah/mainview_iplt.php";
}
//=======================================================================================
else
if ($_GET['module']=='kelembagaanairminum') {

	include"app/modul/mod_airminum/mainview_kelembagaan.php";
}
else
if ($_GET['module']=='capaianairminum') {

	include"app/modul/mod_airminum/mainview_capaian.php";
}
else
if ($_GET['module']=='spamreg') {

	include"app/modul/mod_airminum/mainview_spamreg.php";
}
else
if ($_GET['module']=='spamkab') {

	include"app/modul/mod_airminum/mainview_spamkab.php";
}
else
if ($_GET['module']=='spamikk') {

	include"app/modul/mod_airminum/mainview_spamikk.php";
}
else
if ($_GET['module']=='spamperdesaan') {

	include"app/modul/mod_airminum/mainview_spamperdesaan.php";
}
else
if ($_GET['module']=='rawanair') {

	include"app/modul/mod_airminum/mainview_rawanair.php";
}
else
if ($_GET['module']=='potensiairbaku') {

	include"app/modul/mod_airminum/mainview_potensiairbaku.php";
}
//==============================================================================================
else
if ($_GET['module']=='aksessampah') {

	include"app/modul/mod_sampah/mainview_aksessampah.php";
}
else
if ($_GET['module']=='layanantps') {

	include"app/modul/mod_sampah/mainview_layanantps.php";
}
else
if ($_GET['module']=='layanantpst') {

	include"app/modul/mod_sampah/mainview_layanantpst.php";
}
else
if ($_GET['module']=='layanantpa') {

	include"app/modul/mod_sampah/mainview_layanantpa.php";
}
else
if ($_GET['module']=='kelembagaansampah') {

	include"app/modul/mod_sampah/mainview_kelembagaansampah.php";
}
//========================================================================================================
else
if ($_GET['module']=='kawasankumuh') {

	include"app/modul/mod_kumuh/mainview_kawasankumuh.php";
}
else
if ($_GET['module']=='kawasankumuhdiatas10ha') {

	include"app/modul/mod_kumuh/mainview_kawasankumuhdiatas10ha.php";
}
else
if ($_GET['module']=='kawasankumuhdibawah10ha') {

	include"app/modul/mod_kumuh/mainview_kawasankumuhdibawah10ha.php";
}
//=======================================================================================================
else
if ($_GET['module']=='perumahan') {

	include"app/modul/mod_perumahan/mainview_perumahan.php";
}
else
if ($_GET['module']=='rtlh') {

	include"app/modul/mod_rtlh/mainview_rtlh.php";
}
//==================================================================================================
else
if ($_GET['module']=='identitas') {

	include"app/modul/mod_frontend/mainview_identitas.php";
}
else
if ($_GET['module']=='informasi') {

	include"app/modul/mod_frontend/mainview_informasi.php";
}
else
if ($_GET['module']=='halaman') {

	include"app/modul/mod_frontend/mainview_halaman.php";
}
else
if ($_GET['module']=='galeri') {

	include"app/modul/mod_frontend/mainview_galeri.php";
}
else
if ($_GET['module']=='download') {

	include"app/modul/mod_frontend/mainview_download.php";
}
else
if ($_GET['module']=='link') {

	include"app/modul/mod_frontend/mainview_link.php";
}
else
if ($_GET['module']=='kab') {

	include"app/modul/mod_frontend/mainview_kab.php";
}
else
if ($_GET['module']=='kec') {

	include"app/modul/mod_frontend/mainview_kec.php";
}
else
if ($_GET['module']=='kel') {

	include"app/modul/mod_frontend/mainview_kel.php";
}
else
if ($_GET['module']=='usermanager') {

	include"app/modul/mod_frontend/mainview_user.php";
}
else
if ($_GET['module']=='kategori') {

	include"app/modul/mod_frontend/mainview_kategoriinformasi.php";
}
else
if ($_GET['module']=='album') {

	include"app/modul/mod_frontend/mainview_album.php";
}
else
if ($_GET['module']=='kategoridownload') {

	include"app/modul/mod_frontend/mainview_kategoridownload.php";
}
else
if ($_GET['module']=='templatewebsite') {

	include"app/modul/mod_frontend/mainview_template.php";
}else
if ($_GET['module']=='galeriedit') {

	include"app/modul/mod_frontend/mainview_editgaleri.php";
}
//============================================================================
else
if ($_GET['module']=='spladadd') {

	include"app/modul/mod_airlimbah/mainview_spaldadd.php";
}
else
if ($_GET['module']=='spladedit') {

	include"app/modul/mod_airlimbah/mainview_spaldedit.php";
}
else
if ($_GET['module']=='ipltadd') {

	include"app/modul/mod_airlimbah/mainview_ipltadd.php";
}
else
if ($_GET['module']=='ipltedit') {

	include"app/modul/mod_airlimbah/mainview_iptedit.php";
}
//============================================================================
else
if ($_GET['module']=='spamregadd') {

	include"app/modul/mod_airminum/mainview_spamregadd.php";
}
else
if ($_GET['module']=='spamregedit') {

	include"app/modul/mod_airminum/mainview_spamregedit.php";
}
else
if ($_GET['module']=='spamperdesaanadd') {

	include"app/modul/mod_airminum/mainview_spamperdesaanadd.php";
}
else
if ($_GET['module']=='spamperdesaanedit') {

	include"app/modul/mod_airminum/mainview_spamperdesaanedit.php";
}
else
if ($_GET['module']=='spamkabadd') {

	include"app/modul/mod_airminum/mainview_spamkabadd.php";
}
else
if ($_GET['module']=='spamkabedit') {

	include"app/modul/mod_airminum/mainview_spamkabedit.php";
}else
if ($_GET['module']=='spamikkadd') {

	include"app/modul/mod_airminum/mainview_spamikkadd.php";
}
else
if ($_GET['module']=='spamikkedit') {

	include"app/modul/mod_airminum/mainview_spamikkedit.php";
}
//
//========================================================================================
else
if ($_GET['module']=='tpaadd') {

	include"app/modul/mod_sampah/mainview_tpaadd.php";
}
else
if ($_GET['module']=='tpaedit') {

	include"app/modul/mod_sampah/mainview_tpaedit.php";
}else
if ($_GET['module']=='tpsadd') {

	include"app/modul/mod_sampah/mainview_tpsadd.php";
}
else
if ($_GET['module']=='tpsedit') {

	include"app/modul/mod_sampah/mainview_tpsedit.php";
}
else
if ($_GET['module']=='tpstadd') {

	include"app/modul/mod_sampah/mainview_tpstadd.php";
}
else
if ($_GET['module']=='tpstedit') {

	include"app/modul/mod_sampah/mainview_tpstedit.php";
}
//===============================================OPERATOR==========================================
else
if ($_GET['module']=='downloadtemplate') {

	include"app/modul/mod_operator/mainview_download.php";
}else
if ($_GET['module']=='uploaddataver') {

	include"app/modul/mod_operator/mainview_upload.php";
}else
if ($_GET['module']=='draftdataver') {

	include"app/modul/mod_operator/mainview_draft.php";
}else
if ($_GET['module']=='downloadkodedesa') {

	include"app/modul/mod_operator/mainview_kodedesa.php";

}else
if ($_GET['module']=='pesanmasukval') {

	include"app/modul/mod_operator/mainview_pesanmasuk.php";
}
else
if ($_GET['module']=='pengajuanperubahandata') {

	include"app/modul/mod_operator/mainview_pengajuanperubahandata.php";
}
//=============================================================================================
else
if ($_GET['module']=='validasidata') {

	include"app/modul/mod_validator/mainview_validasi.php";
}
else
if ($_GET['module']=='pesanmasuk') {

	include"app/modul/mod_validator/mainview_pesanmasuk.php";
}
else
if ($_GET['module']=='riwayatkirimpesan') {

	include"app/modul/mod_validator/mainview_riwayatpesan.php";
}else
if ($_GET['module']=='validasidatacapaian') {

	include"app/modul/mod_validator/mainview_validasicapaian.php";
}
//================================================================
else
if ($_GET['module']=='permintaaneditdata') {

	include"app/modul/mod_adminprov/mainview_permintaaneditdata.php";
}
else
if ($_GET['module']=='tahundata') {

	include"app/modul/mod_adminprov/mainview_tahundata.php";
}
else
if ($_GET['module']=='menu') {

	include"app/modul/mod_frontend/mainview_menu.php";
}
else
if ($_GET['module']=='rubahpass') {

	include"app/modul/mod_pass/mainview_password.php";
}
else
if ($_GET['module']=='targetdata') {

	include"app/modul/mod_adminprov/mainview_targetdata.php";
}else
if ($_GET['module']=='notif') {

	include"app/modul/mod_frontend/mainview_notif.php";
}
//============================================PENDATAAN===================================
else
if ($_GET['module']=='pendataan') {

	include"app/modul/mod_pendataan/mainview_pendataan.php";
}else
if ($_GET['module']=='editpendataan') {

	include"app/modul/mod_pendataan/mainview_editpendataan.php";
}else
if ($_GET['module']=='pendataankumuh') {

	include"app/modul/mod_pendataan/mainview_pendataankumuh.php";
}
else
if ($_GET['module']=='importpendataan') {

	include"app/modul/mod_pendataan/mainview_importpendataan.php";
}
else
if ($_GET['module']=='lihatpendataan') {

	include"app/modul/mod_pendataan/mainview_lihatpendataan.php";
}
//===============================================VERIFIKASI================================
else
if ($_GET['module']=='verifikasi') {

	include"app/modul/mod_verifikasi/mainview_verifikasi.php";
}
else
if ($_GET['module']=='lihatverifikasi') {

	include"app/modul/mod_verifikasi/mainview_lihatverifikasi.php";
}
//================================================PENANGANAN-================================
else
if ($_GET['module']=='penanganan') {

	include"app/modul/mod_penanganan/mainview_penanganan.php";
}
else
if ($_GET['module']=='lihatpenanganan') {

	include"app/modul/mod_penanganan/mainview_lihatpenanganan.php";
}
else
if ($_GET['module']=='petasebaran') {

	include"app/modul/mod_petasebaran/main_view.php";
}else
if ($_GET['module']=='lihatpendataan1') {

	include"app/modul/mod_pendataan/mainview_lihatdatapenanganan.php";
}
else
if ($_GET['module']=='uploaddatapendataan') {

	include"app/modul/mod_pendataan/mainview_uploaddata.php";
}else
if ($_GET['module']=='draftpendataan') {

	include"app/modul/mod_pendataan/mainview_draft.php";
}
else
if ($_GET['module']=='lappendataan') {

	include"app/modul/mod_laporan/mainview_pendataan.php";
}
else
if ($_GET['module']=='lapverifikasi') {

	include"app/modul/mod_laporan/mainview_verifikasi.php";
}
else
if ($_GET['module']=='lappenanganan') {

	include"app/modul/mod_laporan/mainview_penanganan.php";
}
else
if ($_GET['module']=='lapcapaian') {

	include"app/modul/mod_laporan/mainview_capaian.php";
}
else
if ($_GET['module']=='uploadfoto') {

	include"app/modul/mod_pendataan/mainview_uploadfoto.php";
}else
if ($_GET['module']=='batalpendataan') {

	include"app/modul/mod_pendataan/mainview_batalpendataan.php";
}else
if ($_GET['module']=='lapstatistik') {

	include"app/modul/mod_laporan/mainview_statistik.php";
}else
if ($_GET['module']=='lapmilik') {

	include"app/modul/mod_laporan/mainview_milik.php";
}
else
if ($_GET['module']=='uploadbuktidukung') {

	include"app/modul/mod_penanganan/mainview_buktidukung.php";
}
else
if ($_GET['module']=='lihatdatabukti') {

	include"app/modul/mod_penanganan/mainview_lihatbukti.php";
}else
if ($_GET['module']=='header') {

	include"app/modul/mod_header/main_view.php";
}
//=======================================================================================
?>
<?php
}
?>