<?php
/*include "../config/koneksi_li.php";
include "../config/fungsi_matauang1.php";
$nik=$_GET['cek_bantuan'];
$sql1= "SELECT * from rtlh where no_ktp='1871888889888'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
while($dtjum=mysqli_fetch_array($hasil1)){
$data = array(
          'nik' => $dtjum['no_ktp'],
          'bantuan' => array(
            'nama' => $row['nama_kk'],
            'status' => $row['ket_verifikasi'],
            'foto' => $row['foto'],
          )
);
}
echo json_encode($data);*/
?>
<?php
header('Content-Type: application/json');
require_once('../config/koneksi_li.php');
$nik=$_GET['cek_bantuan'];
$query = "SELECT * FROM rtlh where no_ktp='$nik'";
$sql = mysqli_query($koneksi, $query);

if($sql){
    $result = array();
    while($row = mysqli_fetch_array($sql)){
      if($row['sts_penanganan']=='Y'){
        $ketverifikasi='SUDAH TERTANGANI'; 
      }else{
        $ketverifikasi=$row['ket_verifikasi'];
      }
        array_push($result, array(
         
                  'nik' => $row['no_ktp'],
                  'nama' => $row['nama_kk'],
                  'status' => $ketverifikasi,
                  'foto' => $row['foto'],
        ));
    }
    echo json_encode(array('bantuan' => $result));
  }
?>

