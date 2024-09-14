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

if ($module=='kab' AND $act=='add'){

$kode_kota=$_POST['kode_kota'];
$nama_kota=strtoupper($_POST['nama_kota']);


$checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM kota WHERE kode_kota='$kode_kota'");
$jum = mysqli_num_rows($checkRecord11ss);
if($jum>0){
echo 2;
}else{    
mysqli_query($koneksi,"INSERT INTO kota (kode_kota
,nama_kota
,kode_prov
) values ('$kode_kota'
,'$nama_kota'
,'18')");

echo 1;
}
}elseif ($module=='kab' AND $act=='edit'){

$id=$_POST['id'];
$nama_kota=strtoupper($_POST['nama_kota']);

    mysqli_query($koneksi,"UPDATE kota set nama_kota='$nama_kota'
    where Id='$id'");
 
}elseif ($module=='kab' AND $act=='hapus'){
    $id=$_POST['id'];
    mysqli_query($koneksi,"DELETE FROM kota where Id='$id'");

}elseif ($module=='kec' AND $act=='add'){
    $kode_kec=$_POST['kode_kec'];
    $kode_kota=$_POST['kode_kota'];
    $nama_kecamatan=ucfirst($_POST['nama_kecamatan']);
    
    
    
    $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM kecamatan WHERE kode_kec='$kode_kec'");
    $jum = mysqli_num_rows($checkRecord11ss);
    if($jum>0){
    echo 2;
    }else{    
    mysqli_query($koneksi,"INSERT INTO kecamatan (kode_kota
    ,nama_kecamatan
    ,kode_kec
    ) values ('$kode_kota'
    ,'$nama_kecamatan'
    ,'$kode_kec')");
    
    echo 1;
    }
    }elseif ($module=='kec' AND $act=='edit'){
    
    $id=$_POST['id'];
    $kode_kota=$_POST['kode_kota'];
    $nama_kecamatan=ucfirst($_POST['nama_kecamatan']);
    
        mysqli_query($koneksi,"UPDATE kecamatan set nama_kecamatan='$nama_kecamatan',kode_kota='$kode_kota'
        where kode_kec='$id'");
     
    }elseif ($module=='kec' AND $act=='hapus'){
        $id=$_POST['id'];
        mysqli_query($koneksi,"DELETE FROM kecamatan where kode_kec='$id'");
    
    }elseif ($module=='kel' AND $act=='add'){
        $kode_kel=$_POST['kode_kel'];
        $kode_kota=$_POST['kode_kota'];
        $kode_kec=$_POST['kode_kec'];
        $nama_kelurahan=ucfirst($_POST['nama_kelurahan']);
        
        
        
        $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM kelurahan WHERE kode_kel='$kode_kel'");
        $jum = mysqli_num_rows($checkRecord11ss);
        if($jum>0){
        echo 2;
        }else{    
        mysqli_query($koneksi,"INSERT INTO kelurahan (kode_kota,kode_kec
        ,nama_kelurahan
        ,kode_kel
        ) values ('$kode_kota','$kode_kec'
        ,'$nama_kelurahan'
        ,'$kode_kel')");
        
        echo 1;
        }
        }elseif ($module=='kel' AND $act=='edit'){
        
        $id=$_POST['id'];
        $kode_kota=$_POST['kode_kota'];
        $kode_kec=$_POST['kode_kec'];
        $nama_kelurahan=ucfirst($_POST['nama_kelurahan']);
        
            mysqli_query($koneksi,"UPDATE kelurahan set nama_kelurahan='$nama_kelurahan',kode_kota='$kode_kota',kode_kec='$kode_kec'
            where kode_kel='$id'");
         
        }elseif ($module=='kel' AND $act=='hapus'){
            $id=$_POST['id'];
            mysqli_query($koneksi,"DELETE FROM kelurahan where kode_kel='$id'");
        
        }elseif ($module=='identitas' AND $act=='add'){
            $nama_website=$_POST['nama_website'];
            $email=$_POST['email'];
            $url=$_POST['url'];
            $meta_deskripsi=ucfirst($_POST['meta_deskripsi']);
            $meta_keyword=ucfirst($_POST['meta_keyword']);
            $alamat=ucfirst($_POST['alamat']);
            $no_telp=$_POST['no_telp'];
  
            mysqli_query($koneksi,"INSERT INTO identitas (nama_website
            ,email
            ,url
            ,meta_deskripsi
            ,meta_keyword
            ,alamat
            ,no_telp
            ) values ('$nama_website'
,'$email'
,'$url'
,'$meta_deskripsi'
,'$meta_keyword'
,'$alamat'
,'$no_telp')");
            
            echo 1;
            
            }elseif ($module=='identitas' AND $act=='edit'){
            
            $Id_identitas=$_POST['Id_identitas'];
            $nama_website=$_POST['nama_website'];
            $email=$_POST['email'];
            $url=$_POST['url'];
            $meta_deskripsi=ucfirst($_POST['meta_deskripsi']);
            $meta_keyword=ucfirst($_POST['meta_keyword']);
            $alamat=ucfirst($_POST['alamat']);
            $no_telp=$_POST['no_telp'];
            
                mysqli_query($koneksi,"UPDATE identitas set nama_website='$nama_website'
                ,email='$email'
                ,url='$url'
                ,meta_deskripsi='$meta_deskripsi'
                ,meta_keyword='$meta_keyword'
                ,alamat='$alamat'
                ,no_telp='$no_telp'
                where Id_identitas='$Id_identitas'");
             
            }elseif ($module=='kategori' AND $act=='add'){
                $nama_kategori=ucfirst($_POST['nama_kategori']);
                $kategori_seo = seo_title($_POST['nama_kategori']);
              
                $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM kategori WHERE nama_kategori='$nama_kategori'");
                $jum = mysqli_num_rows($checkRecord11ss);
                if($jum>0){
                echo 2;
                }else{    
                mysqli_query($koneksi,"INSERT INTO kategori (nama_kategori,kategori_seo) values ('$nama_kategori','$kategori_seo')");
                
                echo 1;
                }
               
                
                }elseif ($module=='kategori' AND $act=='edit'){
                
                $id_kategori=$_POST['id_kategori'];
                $nama_kategori=ucfirst($_POST['nama_kategori']);
                $kategori_seo = seo_title($_POST['nama_kategori']);
             
                
                    mysqli_query($koneksi,"UPDATE kategori set nama_kategori='$nama_kategori'
                    ,kategori_seo='$kategori_seo'
                    where id_kategori='$id_kategori'");
                 
}elseif ($module=='informasi' AND $act=='add'){

$temp = "../../../../img_berita/";
if (!file_exists($temp))
mkdir($temp);

$fileupload             = $_FILES['gambar']['tmp_name'];
$ImageName              = $_FILES['gambar']['name'];
$ImageType              = $_FILES['gambar']['type'];

$acak           = rand(11111111, 99999999);
$ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
$ImageExt      = str_replace('.','',$ImageExt); // Extension
$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
$NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);

$judul=ucfirst($_POST['judul']);
$youtube=$_POST['youtube'];
$id_kategori=$_POST['id_kategori'];
$judul_seo = seo_title($_POST['judul']);
$aktif="Y";                  
$isi_berita=ucfirst($_POST['isi_berita']);
$alt_gambar=ucfirst($_POST['alt_gambar']);
$tagdt=$_POST['tag'];
$jam=$jam_sekarang;
$tglberita=date('Y-m-d');
$hari=$hari_ini;

                     
move_uploaded_file($_FILES["gambar"]["tmp_name"], $temp.$NewImageName); // Menyimpan file

mysqli_query($koneksi,"INSERT INTO berita (id_kategori
,judul
,youtube
,judul_seo
,aktif
,isi_berita
,alt_gambar
,hari
,tanggal
,jam
,gambar
,tag) values ('$id_kategori'
,'$judul'
,'$youtube'
,'$judul_seo'
,'$aktif'
,'$isi_berita'
,'$alt_gambar'
,'$hari'
,'$tglberita'
,'$jam'
,'$NewImageName'
,'$tagdt'
)");
                    
                   
}elseif ($module=='informasi' AND $act=='edit'){
                    
    $temp = "../../../../img_berita/";
    if (!file_exists($temp))
    mkdir($temp);

$judul=ucfirst($_POST['judul']);
$youtube=$_POST['youtube'];
$id_kategori=$_POST['id_kategori'];
$judul_seo = seo_title($_POST['judul']);               
$isi_berita=ucfirst($_POST['isi_berita']);
$alt_gambar=ucfirst($_POST['alt_gambar']);
$id_berita=$_POST['id_berita'];
    
    $fileupload             = $_FILES['gambar']['tmp_name'];
    $ImageName              = $_FILES['gambar']['name'];
    $ImageType              = $_FILES['gambar']['type'];


    if($fileupload!=''){
        $data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT gambar FROM berita WHERE id_berita='$id_berita'"));
        $foto=$data['gambar'];
        unlink("../../../../img_berita/$foto"); 
        $acak           = rand(11111111, 99999999);
        $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt      = str_replace('.','',$ImageExt); // Extension
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $temp.$NewImageName); // Menyimpan file
        }else{
        
            $sqlg= "SELECT gambar from berita where id_berita='$id_berita' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
        
            $NewImageName=$dataoutg['gambar'];
        }

        mysqli_query($koneksi,"UPDATE berita set alt_gambar='$alt_gambar', youtube='$youtube',id_kategori='$id_kategori',judul_seo='$judul_seo', gambar='$NewImageName',judul='$judul',isi_berita='$isi_berita' where id_berita='$id_berita'");

                     
}elseif ($module=='informasi' AND $act=='hapus'){
    $id_berita=$_POST['id'];
    $data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT gambar FROM berita WHERE id_berita='$id_berita'"));
    $foto=$data['gambar'];
    unlink("../../../../img_berita/$foto"); 
    mysqli_query($koneksi,"DELETE FROM berita where id_berita='$id_berita'");

}elseif ($module=='halaman' AND $act=='add'){
    $judul=ucfirst($_POST['judul']);
    $isi_halaman=ucfirst($_POST['isi_halaman']);
    $judul_seo = seo_title($_POST['judul']);
    $jam=$jam_sekarang;
    $tglberita=date('Y-m-d');
    $hari=$hari_ini;  

    mysqli_query($koneksi,"INSERT INTO halamanstatis (judul
    ,judul_seo
    ,isi_halaman
    ,tgl_posting
    ,jam
    ,hari) values ('$judul'
,'$judul_seo'
,'$isi_halaman'
,'$tglberita'
,'$jam'
,'$hari'
)");
    
}elseif ($module=='halaman' AND $act=='edit'){
    $judul=ucfirst($_POST['judul']);
    $isi_halaman=ucfirst($_POST['isi_halaman']);
    $id_halaman=$_POST['id_halaman'];
    $judul_seo = seo_title($_POST['judul']);

    mysqli_query($koneksi,"UPDATE halamanstatis set judul_seo='$judul_seo',judul='$judul',isi_halaman='$isi_halaman' where id_halaman='$id_halaman'");


}elseif ($module=='halaman' AND $act=='hapus'){
    $id_halaman=$_POST['id'];
    mysqli_query($koneksi,"DELETE FROM halamanstatis where id_halaman='$id_halaman'");

}elseif ($module=='album' AND $act=='add'){
  
    $temp = "../../../../img_album/";
    if (!file_exists($temp))
    mkdir($temp);
    
    $judul=ucfirst($_POST['judul']); 
    $alt_gambar=ucfirst($_POST['alt_gambar']);
    

    $fileupload             = $_FILES['gambar']['tmp_name'];
    $ImageName              = $_FILES['gambar']['name'];
    $ImageType              = $_FILES['gambar']['type'];
    
    $acak           = rand(11111111, 99999999);
    $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt      = str_replace('.','',$ImageExt); // Extension
    $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
    $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
    
    
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $temp.$NewImageName); // Menyimpan file

mysqli_query($koneksi,"INSERT INTO album (jdl_album
,gbr_album
,alt_gambar) values ('$judul'
,'$NewImageName'
,'$alt_gambar'
)");   

}elseif ($module=='album' AND $act=='edit'){

    $temp = "../../../../img_album/";
    if (!file_exists($temp))
    mkdir($temp);

$judul=ucfirst($_POST['judul']);
$alt_gambar=ucfirst($_POST['alt_gambar']);
$id_album=$_POST['id_album'];
    
    $fileupload             = $_FILES['gambar']['tmp_name'];
    $ImageName              = $_FILES['gambar']['name'];
    $ImageType              = $_FILES['gambar']['type'];


    if($fileupload!=''){
        $data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT gbr_album FROM album WHERE id_album='$id_album'"));
        $foto=$data['gbr_album'];
        unlink("../../../../img_album/$foto"); 
        $acak           = rand(11111111, 99999999);
        $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt      = str_replace('.','',$ImageExt); // Extension
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $temp.$NewImageName); // Menyimpan file
        }else{
        
            $sqlg= "SELECT gbr_album from album where id_album='$id_album' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['gbr_album'];
        }

        mysqli_query($koneksi,"UPDATE album set alt_gambar='$alt_gambar',  gbr_album='$NewImageName',jdl_album='$judul' where id_album='$id_album'");

    
}elseif ($module=='galeri' AND $act=='add'){

    $judul=ucfirst($_POST['judul']);
    $id_album=$_POST['id_album'];
    $rdm=$_POST['rdm'];

    mysqli_query($koneksi,"INSERT INTO galeri (jdl_galeri
    ,id_album
    ,rdm
    ) values ('$judul'
    ,'$id_album'
    ,'$rdm')");
}elseif ($module=='galeri' AND $act=='hapus'){

    $id=$_POST['id'];
    unlink("../../../../img_galeri/$id"); 
    mysqli_query($koneksi,"DELETE FROM galeri_detail where gbr_galeri='$id'");

}elseif ($module=='galeri' AND $act=='edit'){

    $temp = "../../../../img_galeri/";
    if (!file_exists($temp))
    mkdir($temp);

    $id_galeridetail=$_POST['id_galeridetail'];
    
    $fileupload             = $_FILES['gambar']['tmp_name'];
    $ImageName              = $_FILES['gambar']['name'];
    $ImageType              = $_FILES['gambar']['type'];


    if($fileupload!=''){
        $data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT gbr_galeri FROM galeri_detail WHERE id_galeridetail='$id_galeridetail'"));
        $foto=$data['gbr_galeri'];
        unlink("../../../../img_galeri/$foto"); 
        $acak           = rand(11111111, 99999999);
        $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt      = str_replace('.','',$ImageExt); // Extension
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $temp.$NewImageName); // Menyimpan file
        }else{
        
            $sqlg= "SELECT gbr_galeri from galeri_detail where id_galeridetail='$id_galeridetail' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['gbr_album'];
        }

        mysqli_query($koneksi,"UPDATE galeri_detail set gbr_galeri='$NewImageName' where id_galeridetail='$id_galeridetail'");


}elseif ($module=='kategoridownload' AND $act=='add'){
    $nama_kategori=ucfirst($_POST['nama_kategori']);
    $kategori_seo = seo_title($_POST['nama_kategori']);
  
    $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM kategori_download WHERE nama_kategori='$nama_kategori'");
    $jum = mysqli_num_rows($checkRecord11ss);
    if($jum>0){
    echo 2;
    }else{    
    mysqli_query($koneksi,"INSERT INTO kategori_download (nama_kategori,kategori_seo) values ('$nama_kategori','$kategori_seo')");
    
    echo 1;
    }
   
    
    }elseif ($module=='kategoridownload' AND $act=='edit'){
    
    $id_kategori=$_POST['id_kategori'];
    $nama_kategori=ucfirst($_POST['nama_kategori']);
    $kategori_seo = seo_title($_POST['nama_kategori']);
 
    
        mysqli_query($koneksi,"UPDATE kategori_download set nama_kategori='$nama_kategori'
        ,kategori_seo='$kategori_seo'
        where id_kategoridownload='$id_kategori'");
     
}elseif ($module=='download' AND $act=='add'){
  
    $temp = "../../../../file/";
    if (!file_exists($temp))
    mkdir($temp);
    

    $judul=ucfirst($_POST['judul']); 
    $id_kategoridownload=$_POST['id_kategoridownload'];
    $tgl=date('Y-m-d');

    $fileupload             = $_FILES['file']['tmp_name'];
    $ImageName              = $_FILES['file']['name'];
    $ImageType              = $_FILES['file']['type'];
    
    $acak           = rand(11111111, 99999999);
    $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt      = str_replace('.','',$ImageExt); // Extension
    $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
    $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
    
    
    move_uploaded_file($_FILES["file"]["tmp_name"], $temp.$NewImageName); // Menyimpan file

mysqli_query($koneksi,"INSERT INTO download (judul
,nama_file
,tgl_posting
,id_kategoridownload) values ('$judul'
,'$NewImageName'
,'$tgl'
,'$id_kategoridownload'
)");   

}elseif ($module=='download' AND $act=='edit'){

    $temp = "../../../../file/";
    if (!file_exists($temp))
    mkdir($temp);

$judul=ucfirst($_POST['judul']);
$id_kategoridownload=$_POST['id_kategoridownload'];
$id_download=$_POST['id_download'];
    
    $fileupload             = $_FILES['file']['tmp_name'];
    $ImageName              = $_FILES['file']['name'];
    $ImageType              = $_FILES['file']['type'];


    if($fileupload!=''){
        $data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT nama_file FROM download WHERE id_download='$id_download'"));
        $foto=$data['nama_file'];
        unlink("../../../../file/$foto"); 
        $acak           = rand(11111111, 99999999);
        $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt      = str_replace('.','',$ImageExt); // Extension
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
        move_uploaded_file($_FILES["file"]["tmp_name"], $temp.$NewImageName); // Menyimpan file
        }else{
        
            $sqlg= "SELECT nama_file from download where id_download='$id_download' "; 
            $hasilg = mysqli_query($koneksi,$sqlg);
            $dataoutg = mysqli_fetch_array($hasilg);
            $NewImageName=$dataoutg['nama_file'];
        }

        mysqli_query($koneksi,"UPDATE download set judul='$judul',  nama_file='$NewImageName',id_kategoridownload='$id_kategoridownload' where id_download='$id_download'");

    
}elseif ($module=='download' AND $act=='hapus'){

    $id_download=$_POST['id'];
    $data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT nama_file FROM download WHERE id_download='$id_download'"));
    $foto=$data['nama_file'];
    unlink("../../../../file/$foto"); 
    mysqli_query($koneksi,"DELETE FROM download where id_download='$id_download'");


}elseif ($module=='link' AND $act=='add'){
    $nama_link=ucfirst($_POST['nama_link']);
    $url = $_POST['url'];
  
      
    mysqli_query($koneksi,"INSERT INTO link (nama_link,url) values ('$nama_link','$url')");
    
    
   
    
    }elseif ($module=='link' AND $act=='edit'){
    
    $id_link=$_POST['id_link'];
    $nama_link=ucfirst($_POST['nama_link']);
    $url = $_POST['url'];
    
        mysqli_query($koneksi,"UPDATE link set nama_link='$nama_link'
        ,url='$url'
        where id_link='$id_link'");
     
}elseif ($module=='link' AND $act=='hapus'){

    $id_link=$_POST['id'];
    mysqli_query($koneksi,"DELETE FROM link where id_link='$id_link'");


}elseif ($module=='template' AND $act=='add'){

    $judul=ucfirst($_POST['judul']);
    $pembuat = ucfirst($_POST['pembuat']);
    $folder = $_POST['folder'];
  
      
    mysqli_query($koneksi,"INSERT INTO templates (judul
    ,pembuat
    ,folder) values ('$judul','$pembuat','$folder')");
    
    }elseif ($module=='template' AND $act=='edit'){
    
    $id_templates=$_POST['id_templates'];
    $judul=ucfirst($_POST['judul']);
    $pembuat = ucfirst($_POST['pembuat']);
    $folder = $_POST['folder'];
    
        mysqli_query($koneksi,"UPDATE templates set judul='$judul'
        ,pembuat='$pembuat'
        ,folder='$folder'
        where id_templates='$id_templates'");
     
}elseif ($module=='template' AND $act=='aktif'){

    $id_templates=$_POST['id'];
    mysqli_query($koneksi,"UPDATE templates set aktif='Y'
    where id_templates='$id_templates'");
     mysqli_query($koneksi,"UPDATE templates set aktif='N'
     where id_templates!='$id_templates'");


}
elseif ($module=='user' AND $act=='add'){

$username=$_POST['username'];
$password=$_POST['password'];
$nama_lengkap=$_POST['nama_lengkap'];
$email=$_POST['email'];
$no_telp=$_POST['no_telp'];
$level=$_POST['level'];
$blokir='N';
$kode_kota=$_POST['kode_kota'];
$nip=$_POST['nip'];
if($level=='0'){
    $kdkota='00';
}else{
    $kdkota=$kode_kota;
}
$encrt=md5($password);
  
$checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username'");
$jum = mysqli_num_rows($checkRecord11ss);
if($jum>0){

echo 2;

}else{

    $checkRecord11sss = mysqli_query($koneksi,"SELECT * FROM user WHERE nip='$nip'");
$jums = mysqli_num_rows($checkRecord11sss);
if($jums>0){

    echo 3;

}else{
    mysqli_query($koneksi,"INSERT INTO user (username
    ,password
    ,nama_lengkap
    ,email
    ,no_telp
    ,level
    ,blokir
    ,kode_kota
    ,nip) values ('$username'
,'$encrt'
,'$nama_lengkap'
,'$email'
,'$no_telp'
,'$level'
,'$blokir'
,'$kdkota'
,'$nip')");

echo 1;

}
}
    
    }elseif ($module=='user' AND $act=='edit'){
    
        $username=$_POST['username'];
        $password=$_POST['password'];
        $nama_lengkap=$_POST['nama_lengkap'];
        $email=$_POST['email'];
        $no_telp=$_POST['no_telp'];
        $blokir=$_POST['blokir'];
        $nip=$_POST['nip'];
        $enct=md5($password);
        
        if($password==''){
            mysqli_query($koneksi,"UPDATE user set nama_lengkap='$nama_lengkap'
            ,email='$email'
            ,no_telp='$no_telp'
            ,blokir='$blokir'
            where username='$username'");
        }else{

            mysqli_query($koneksi,"UPDATE user set nama_lengkap='$nama_lengkap'
            ,password='$enct'
            ,email='$email'
            ,no_telp='$no_telp'
            ,blokir='$blokir'
            where username='$username'");

        }
            
     
}elseif ($module=='user' AND $act=='hapus'){

    $username=$_POST['id'];
    mysqli_query($koneksi,"DELETE FROM user where username='$username'");


}elseif ($module=='menu' AND $act=='add'){

    $nama_menu=ucfirst($_POST['nama_menu']);
    $link = $_POST['link'];
    $id_parent = $_POST['id_parent'];

    if($id_parent==0){
        $level='Menu Utama';

    }else{

        $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM menu WHERE id_menu='$id_parent'");
        $jum = mysqli_fetch_array($checkRecord11ss);
        $level=$jum['nama_menu'];
        
    }
  
      
    mysqli_query($koneksi,"INSERT INTO menu (id_parent
    ,nama_menu
    ,link
    ,level) values ('$id_parent'
,'$nama_menu'
,'$link'
,'$level')");
    
    }elseif ($module=='menu' AND $act=='edit'){
    
    $nama_menu=ucfirst($_POST['nama_menu']);
    $link = $_POST['link'];
    $id_parent = $_POST['id_parent'];
    $id_menu = $_POST['id_menu'];

    if($id_parent==0){
        $level='Menu Utama';

    }else{

        $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM menu WHERE id_menu='$id_parent'");
        $jum = mysqli_fetch_array($checkRecord11ss);
        $level=$jum['nama_menu'];
        
    }
    
        mysqli_query($koneksi,"UPDATE menu SET id_parent  = '$id_parent',
        nama_menu = '$nama_menu',
        link  = '$link',
        level='$level'
        WHERE id_menu   = '$id_menu'");
     
}elseif ($module=='menu' AND $act=='nonaktifkan'){


    $id_menu = $_POST['id'];

    $checkRecord11ss = mysqli_query($koneksi,"SELECT * FROM menu WHERE id_menu='$id_menu'");
    $jum = mysqli_fetch_array($checkRecord11ss);

    if($jum['aktif']=='Y'){
        $aktif='T';
        $message="Non Aktifkan";
    }else{
        $aktif='Y';
        $message="Aktifkan";
    }

    mysqli_query($koneksi,"UPDATE menu SET aktif  = '$aktif'
    WHERE id_menu  = '$id_menu'");

  echo $message;


}
?>
<?php
$koneksi->close();
}
?>