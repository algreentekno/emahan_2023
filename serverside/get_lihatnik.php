<?php
include "../config/koneksi_li.php";
include "../config/fungsi_matauang1.php";
$nik=$_GET['cek_nik'];
$sql1= "SELECT * from rtlh where no_ktp='$nik'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dtjum1=mysqli_num_rows($hasil1);
if($dtjum1>0){
$dtjum=mysqli_fetch_array($hasil1);
$data = array(
    'nik'  =>  "$dtjum[no_ktp]",
    'type'  =>  "1",
    );
}else{
    $data = array(
        'nik'  =>  "$dtjum[no_ktp]",
        'type'  =>  "0",
        ); 
}
echo json_encode($data);
?>
