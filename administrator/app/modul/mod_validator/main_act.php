<?php
session_start();
 if (empty($_SESSION['namausershped']) AND empty($_SESSION['passusershped'])){
    header('location:login');
}
else{

include "../../../config/koneksi_li.php";
include "../../../config/urlsecure.php";
include "../../../config/fungsi_seo.php";
include "../../../config/library.php";

date_default_timezone_set('Asia/Jakarta');
$datetime=date("Y-m-d H:i:s");

$module=$_GET['module'];
$act=$_GET['act'];

if ($module=='validasi' AND $act=='add'){

    $nama=$_SESSION['nama_lengkap'];
    $rdm=$_POST['id'];
    
    mysqli_query($koneksi,"UPDATE upload_data set validasi='1'
    ,divalidasi='$nama'
    where rdm='$rdm'");

 $checkRecord11sss = mysqli_query($koneksi,"SELECT * FROM upload_data WHERE rdm='$rdm'");
 $data = mysqli_fetch_array($checkRecord11sss);
 $rdmdt=$data['rdm'];
 $jnsdata=$data['jenis_data'];

 if($jnsdata=='1'){//Input data spald

    mysqli_query($koneksi,"INSERT INTO air_limbah_spald (kode_prov
,kode_kota
,kode_kec
,kode_kel
,nama_spald
,tahun_pembangunan
,jum_sambungan_rencana
,jum_sambungan_realisasi
,jumlah_pemanfaat
,jenis_sarpras
,status
,kondisi_infrastruktur
,sumber_dana
,latitude
,longitude
,tahun_data
    )
    SELECT kode_prov
,kode_kota
,kode_kec
,kode_kel
,nama_spald
,tahun_pembangunan
,jum_sambungan_rencana
,jum_sambungan_realisasi
,jumlah_pemanfaat
,jenis_sarpras
,status
,kondisi_infrastruktur
,sumber_dana
,latitude
,longitude
,tahun_data
    FROM 
    air_limbah_spald_temp
    WHERE 
    kode_rdm='$rdmdt'");
    mysqli_query($koneksi,"DELETE From air_limbah_spald_temp where kode_rdm='$rdmdt'");

 }elseif($jnsdata=='2'){//IPLT

    mysqli_query($koneksi,"INSERT INTO air_limbah_iplt (kode_prov
    ,kode_kota
    ,kode_kec
    ,kode_kel
    ,nama_iplt
    ,pengelola
    ,kapasitas_rencana
    ,kapasitas_realisasi
    ,jum_tersedia
    ,jum_terlayani
    ,sistem_unit
    ,status_operasional
    ,tahun_pembangunan
    ,sumber_dana
    ,tahun_optimalisasi
    ,sumber_dana_optimalisasi
    ,jum_mobil_sedot_tinja
    ,status_kondisi_mobil
    ,mou_pengangkut
    ,latitude
    ,longitude
    ,tahun_data
        )
        SELECT kode_prov
,kode_kota
,kode_kec
,kode_kel
,nama_iplt
,pengelola
,kapasitas_rencana
,kapasitas_realisasi
,jum_tersedia
,jum_terlayani
,sistem_unit
,status_operasional
,tahun_pembangunan
,sumber_dana
,tahun_optimalisasi
,sumber_dana_optimalisasi
,jum_mobil_sedot_tinja
,status_kondisi_mobil
,mou_pengangkut
,latitude
,longitude
,tahun_data
        FROM 
        air_limbah_iplt_temp
        WHERE 
        kode_rdm='$rdmdt'");
        mysqli_query($koneksi,"DELETE From air_limbah_iplt_temp where kode_rdm='$rdmdt'");

    
 }elseif($jnsdata=='3'){//SPAM REGIONAL


    mysqli_query($koneksi,"INSERT INTO air_minum_regional (kode_prov
    ,kode_kota
    ,kode_kec
    ,kode_kel
    ,nama_spam
    ,nama_pengelola
    ,tahun_pembangunan
    ,jum_layanan
    ,jum_pemanfaat
    ,kapasitas_prod
    ,kapasitas_terpakai
    ,idle_capacity
    ,daerah_layanan
    ,nama_sumber_air
    ,lokasi_unit_prod
    ,status
    ,latitude
    ,longitude
    ,tahun_data
        )
        SELECT kode_prov
,kode_kota
,kode_kec
,kode_kel
,nama_spam
,nama_pengelola
,tahun_pembangunan
,jum_layanan
,jum_pemanfaat
,kapasitas_prod
,kapasitas_terpakai
,idle_capacity
,daerah_layanan
,nama_sumber_air
,lokasi_unit_prod
,status
,latitude
,longitude
,tahun_data
        FROM 
        air_minum_regional_temp
        WHERE 
        kode_rdm='$rdmdt'");
        mysqli_query($koneksi,"DELETE From air_minum_regional_temp where kode_rdm='$rdmdt'");

    
 }elseif($jnsdata=='4'){//SPAM KAB/KOTA

    mysqli_query($koneksi,"INSERT INTO air_minum_kab_kota (kode_prov
    ,kode_kota
    ,kode_kec
    ,kode_kel
    ,nama_spam
    ,nama_pengelola
    ,tahun_pembangunan
    ,jum_layanan
    ,jum_pemanfaat
    ,kapasitas_prod
    ,kapasitas_terpakai
    ,idle_capacity
    ,daerah_layanan
    ,nama_sumber_air
    ,lokasi_unit_prod
    ,status
    ,latitude
    ,longitude
    ,tahun_data
        )
        SELECT kode_prov
,kode_kota
,kode_kec
,kode_kel
,nama_spam
,nama_pengelola
,tahun_pembangunan
,jum_layanan
,jum_pemanfaat
,kapasitas_prod
,kapasitas_terpakai
,idle_capacity
,daerah_layanan
,nama_sumber_air
,lokasi_unit_prod
,status
,latitude
,longitude
,tahun_data
        FROM 
        air_minum_kab_kota_temp
        WHERE 
        kode_rdm='$rdmdt'");
        mysqli_query($koneksi,"DELETE From air_minum_kab_kota_temp where kode_rdm='$rdmdt'");

    
 }elseif($jnsdata=='5'){//SPAM IKK

    mysqli_query($koneksi,"INSERT INTO air_minum_ikk (kode_prov
    ,kode_kota
    ,kode_kec
    ,kode_kel
    ,nama_spam
    ,nama_pengelola
    ,tahun_pembangunan
    ,jum_layanan
    ,jum_layananaktif
    ,kapasitas_prod
    ,kapasitas_terpakai
    ,idle_capacity
    ,daerah_layanan
    ,nama_sumber_air
    ,lokasi_unit_prod
    ,status
    ,latitude
    ,longitude
    ,tahun_data
        )
        SELECT kode_prov
,kode_kota
,kode_kec
,kode_kel
,nama_spam
,nama_pengelola
,tahun_pembangunan
,jum_layanan
,jum_layananaktif
,kapasitas_prod
,kapasitas_terpakai
,idle_capacity
,daerah_layanan
,nama_sumber_air
,lokasi_unit_prod
,status
,latitude
,longitude
,tahun_data
        FROM 
        air_minum_ikk_temp
        WHERE 
        kode_rdm='$rdmdt'");
        mysqli_query($koneksi,"DELETE From air_minum_ikk_temp where kode_rdm='$rdmdt'");

    
 }elseif($jnsdata=='6'){//SPAM PEDESAAN

    mysqli_query($koneksi,"INSERT INTO air_minum_pedesaan (kode_prov
    ,kode_kota
    ,kode_kec
    ,kode_kel
    ,nama_spam
    ,nama_pengelola
    ,no_hp_pengelola
    ,pengelola
    ,tahun_pembangunan
    ,sumber_dana
    ,jum_layanan
    ,kapasitas_prod
    ,kapasitas_terpakai
    ,idle_capacity
    ,daerah_layanan
    ,nama_sumber_air
    ,lokasi_unit_prod
    ,status
    ,latitude
    ,longitude
    ,tahun_data
        )
        SELECT kode_prov
,kode_kota
,kode_kec
,kode_kel
,nama_spam
,nama_pengelola
,no_hp_pengelola
,pengelola
,tahun_pembangunan
,sumber_dana
,jum_layanan
,kapasitas_prod
,kapasitas_terpakai
,idle_capacity
,daerah_layanan
,nama_sumber_air
,lokasi_unit_prod
,status
,latitude
,longitude
,tahun_data
        FROM 
        air_minum_pedesaan_temp
        WHERE 
        kode_rdm='$rdmdt'");
        mysqli_query($koneksi,"DELETE From air_minum_pedesaan_temp where kode_rdm='$rdmdt'");

    
 }elseif($jnsdata=='7'){//TPA

    mysqli_query($koneksi,"INSERT INTO sampah_layanan_tpa (kode_prov
    ,kode_kota
    ,kode_kec
    ,kode_kel
    ,nama_tpa
    ,pengelola
    ,sistem_operasional
    ,kapasitas_layanan
    ,kapasitas_terpakai
    ,idle_capacity
    ,sampah_masuk
    ,sampah_masuk_landfill
    ,tahun_dibangun
    ,sumber_dana
    ,jum_truk
    ,jum_armroll
    ,jum_alatberat
    ,latitude
    ,longitude
    ,tahun_data
        )
        SELECT kode_prov
,kode_kota
,kode_kec
,kode_kel
,nama_tpa
,pengelola
,sistem_operasional
,kapasitas_layanan
,kapasitas_terpakai
,idle_capacity
,sampah_masuk
,sampah_masuk_landfill
,tahun_dibangun
,sumber_dana
,jum_truk
,jum_armroll
,jum_alatberat
,latitude
,longitude
,tahun_data
        FROM 
        sampah_layanan_tpa_temp
        WHERE 
        kode_rdm='$rdmdt'");
        mysqli_query($koneksi,"DELETE From sampah_layanan_tpa_temp where kode_rdm='$rdmdt'");

    
 }elseif($jnsdata=='8'){//TPST

    mysqli_query($koneksi,"INSERT INTO sampah_layanan_tpst (kode_prov
    ,kode_kota
    ,kode_kec
    ,kode_kel
    ,nama_tpst
    ,jenis
    ,lokasi
    ,aktifitas
    ,sampah_masuk
    ,sampah_terkelola
    ,tahun_pembangunan
    ,sumber_dana
    ,status
    ,sarana_prasarana
    ,jum_sarpras
    ,latitude
    ,longitude
    ,tahun_data
        )
        SELECT kode_prov
,kode_kota
,kode_kec
,kode_kel
,nama_tpst
,jenis
,lokasi
,aktifitas
,sampah_masuk
,sampah_terkelola
,tahun_pembangunan
,sumber_dana
,status
,sarana_prasarana
,jum_sarpras
,latitude
,longitude
,tahun_data
        FROM 
        sampah_layanan_tpst_temp
        WHERE 
        kode_rdm='$rdmdt'");
        mysqli_query($koneksi,"DELETE From sampah_layanan_tpst_temp where kode_rdm='$rdmdt'");

    
 }elseif($jnsdata=='9'){//TPS

    mysqli_query($koneksi,"INSERT INTO sampah_layanan_tps (kode_prov
    ,kode_kota
    ,kode_kec
    ,kode_kel
    ,nama_tps
    ,latitude
    ,longitude
    ,tahun_data
        )
        SELECT kode_prov
,kode_kota
,kode_kec
,kode_kel
,nama_tps
,latitude
,longitude
,tahun_data
        FROM 
        sampah_layanan_tps_temp
        WHERE 
        kode_rdm='$rdmdt'");
        mysqli_query($koneksi,"DELETE From sampah_layanan_tps_temp where kode_rdm='$rdmdt'");

    
 }elseif($jnsdata=='10'){//KUMUH DIBAWAH 10 Ha
    
    mysqli_query($koneksi,"INSERT INTO kumuh_luas (kode_prov
    ,kode_kota
    ,kode_kec
    ,kode_kel
    ,no_sk
    ,lokasi
    ,luas_kumuh
    ,luas_penanganan_2020
    ,luas_penanganan_2021
    ,luas_penanganan_2022
    ,luas_penanganan_2023
    ,total_luas_penanganan
    ,luas_kumuh_2023
    ,klasifikasi_kumuh
    ,tahun_data
        )
        SELECT kode_prov
,kode_kota
,kode_kec
,kode_kel
,no_sk
,lokasi
,luas_kumuh
,luas_penanganan_2020
,luas_penanganan_2021
,luas_penanganan_2022
,luas_penanganan_2023
,total_luas_penanganan
,luas_kumuh_2023
,klasifikasi_kumuh
,tahun_data
        FROM 
        kumuh_luas_temp
        WHERE 
        kode_rdm='$rdmdt' and klasifikasi_kumuh='1'");
        mysqli_query($koneksi,"DELETE From kumuh_luas_temp where kode_rdm='$rdmdt' and klasifikasi_kumuh='1'");


 }elseif($jnsdata=='11'){//KUMUH DIATAS 10 Ha

    mysqli_query($koneksi,"INSERT INTO kumuh_luas (kode_prov
    ,kode_kota
    ,kode_kec
    ,kode_kel
    ,no_sk
    ,lokasi
    ,luas_kumuh
    ,luas_penanganan_2020
    ,luas_penanganan_2021
    ,luas_penanganan_2022
    ,luas_penanganan_2023
    ,total_luas_penanganan
    ,luas_kumuh_2023
    ,klasifikasi_kumuh
    ,tahun_data
        )
        SELECT kode_prov
,kode_kota
,kode_kec
,kode_kel
,no_sk
,lokasi
,luas_kumuh
,luas_penanganan_2020
,luas_penanganan_2021
,luas_penanganan_2022
,luas_penanganan_2023
,total_luas_penanganan
,luas_kumuh_2023
,klasifikasi_kumuh
,tahun_data
        FROM 
        kumuh_luas_temp
        WHERE 
        kode_rdm='$rdmdt' and klasifikasi_kumuh='2'");
        mysqli_query($koneksi,"DELETE From kumuh_luas_temp where kode_rdm='$rdmdt' and klasifikasi_kumuh='2'");

    
 }elseif($jnsdata=='12'){//PERUMAHAN

    mysqli_query($koneksi,"INSERT INTO perumahan (kode_prov
    ,kode_kota
    ,kode_kec
    ,kode_kel
    ,nama
    ,lokasi
    ,jum_unit_rumah
    ,luas_lahan_perumahan
    ,nama_pengembang
    ,pengembang
    ,jalan
    ,drainase
    ,air_limbah
    ,persampahan
    ,air_minum
    ,rumah_ibadah
    ,ruang_terbuka_hijau
    ,jaringan_listrik
    ,jaringan_telpon
    ,persentase_psu
    ,latitude
    ,longitude
    ,tahun_data
        )
        SELECT kode_prov
,kode_kota
,kode_kec
,kode_kel
,nama
,lokasi
,jum_unit_rumah
,luas_lahan_perumahan
,nama_pengembang
,pengembang
,jalan
,drainase
,air_limbah
,persampahan
,air_minum
,rumah_ibadah
,ruang_terbuka_hijau
,jaringan_listrik
,jaringan_telpon
,persentase_psu
,latitude
,longitude
,tahun_data
        FROM 
        perumahan_temp
        WHERE 
        kode_rdm='$rdmdt'");
        mysqli_query($koneksi,"DELETE From perumahan_temp where kode_rdm='$rdmdt'");

    
 }elseif($jnsdata=='13'){//RTLH

    mysqli_query($koneksi,"INSERT INTO rtlh (kode_prov
    ,kode_kota
    ,kode_kec
    ,kode_kel
    ,total_rumah
    ,rtlh
    ,program
    ,sumber_dana
    ,jum_penanganan_2020
    ,jum_penanganan_2021
    ,jum_penanganan_2022
    ,total_penanganan
    ,capaian
    ,jum_rtlh
    ,persentase_rtlh
    ,rtlh_2023
    ,tahun_data
        )
        SELECT kode_prov
,kode_kota
,kode_kec
,kode_kel
,total_rumah
,rtlh
,program
,sumber_dana
,jum_penanganan_2020
,jum_penanganan_2021
,jum_penanganan_2022
,total_penanganan
,capaian
,jum_rtlh
,persentase_rtlh
,rtlh_2023
,tahun_data
        FROM 
        rtlh_temp
        WHERE 
        kode_rdm='$rdmdt'");
        mysqli_query($koneksi,"DELETE From rtlh_temp where kode_rdm='$rdmdt'");

    
 }
}elseif ($module=='pesan' AND $act=='add'){

        $nama=$_SESSION['nama_lengkap'];
        $isi_pesan=$_POST['isi_pesan'];
        $kodekota=$_POST['kodekota'];
        $jenisdata=$_POST['jenisdata'];
        $rdm=$_POST['rdm'];

        mysqli_query($koneksi,"INSERT INTO pesan_kirim_validasi (pesan
        ,jenis_data
        ,kode_kota
        ,rdm
        ,dari
        ,tanggal_kirim
        ) values ('$isi_pesan'
,'$jenisdata'
,'$kodekota'
,'$rdm'
,'$nama'
,'$datetime')");

mysqli_query($koneksi,"INSERT INTO pesan_validasi (pesan
,jenis_data
,kode_kota
,rdm
,dari
,tanggal_kirim
) values ('$isi_pesan'
,'$jenisdata'
,'$kodekota'
,'$rdm'
,'$nama'
,'$datetime')");

}elseif ($module=='pesan' AND $act=='hapus'){

        $idpesan=$_POST['id'];
        mysqli_query($koneksi,"DELETE From pesan_kirim_validasi where Id_pesan='$idpesan'");
}
elseif ($module=='pesansys' AND $act=='hapus'){

        $idpesan=$_POST['id'];
        mysqli_query($koneksi,"DELETE From pesan_system where Id_pesan='$idpesan'");
}
?>
<?php
$koneksi->close();
}
?>