<?php
session_start();
include "../config/koneksi_li.php";
$kodekota=$_SESSION['kodekota'];
$level=$_SESSION['level'];
$nik=$_POST['nik'];
if($level!='0'){
$sqlq="a.no_ktp='$nik' and a.kode_kota='$kodekota'";
}else{
    $sqlq="a.no_ktp='$nik'";
}
?>
<?php
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
   
    0 => 'a.Id_rtlh',
    
  


);

// getting total number records without any search
$sql = "SELECT a.tahun_input_data,a.sumber_dana,a.tahun_penanganan,a.sts_penanganan,a.tahun_verifikasi,a.ket_verifikasi,a.sts_verifikasi,a.tahun_input_data,a.jenis_tpa_tinja,a.jenis_kloset,a.jamban,a.jarak_tinja,a.sumber_air_minum,a.jumlah_penghuni,a.material_atap,a.kondisi_atap,a.material_dinding,a.kondisi_dinding,a.material_lantai,a.kondisi_lantai,a.ventilasi,a.jendela,a.sloof,a.material_balok,a.material_plafon,a.material_rangka_atap,a.material_kolom,a.material_pondasi,a.jenis_kawasan,a.sts_kepemilikan_tanah,a.aset_rumah,a.sts_kepemilikan_rumah,a.penghasilan,a.luas_rumah,d.nama_kota,c.nama_kecamatan,b.nama_kelurahan,a.no_ktp,a.nama_kk,a.jenis_kelamin,a.no_hp,a.pekerjaan  FROM  rtlh a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota where $sqlq order by a.Id_rtlh";
$query=mysqli_query($koneksi, $sql) or die("");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
    // if there is a search parameter
    $sql = "SELECT a.tahun_input_data,a.sumber_dana,a.tahun_penanganan,a.sts_penanganan,a.tahun_verifikasi,a.ket_verifikasi,a.sts_verifikasi,a.tahun_input_data,a.jenis_tpa_tinja,a.jenis_kloset,a.jamban,a.jarak_tinja,a.sumber_air_minum,a.jumlah_penghuni,a.material_atap,a.kondisi_atap,a.material_dinding,a.kondisi_dinding,a.material_lantai,a.kondisi_lantai,a.ventilasi,a.jendela,a.sloof,a.material_balok,a.material_plafon,a.material_rangka_atap,a.material_kolom,a.material_pondasi,a.jenis_kawasan,a.sts_kepemilikan_tanah,a.aset_rumah,a.sts_kepemilikan_rumah,a.penghasilan,a.luas_rumah,d.nama_kota,c.nama_kecamatan,b.nama_kelurahan,a.no_ktp,a.nama_kk,a.jenis_kelamin,a.no_hp,a.pekerjaan  FROM  rtlh a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota";
    $sql.=" where ($sqlq and a.nama_kk LIKE '%".$requestData['search']['value']."%')";// $requestData['search']['value'] contains search parameter
    $sql.=" OR ($sqlq and a.no_ktp LIKE '%".$requestData['search']['value']."%')";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
    
    $query=mysqli_query($koneksi, $sql) or die("");
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
    $query=mysqli_query($koneksi, $sql) or die(""); // again run query with limit
    
} else {    

    $sql="SELECT a.tahun_input_data,a.sumber_dana,a.tahun_penanganan,a.sts_penanganan,a.tahun_verifikasi,a.ket_verifikasi,a.sts_verifikasi,a.tahun_input_data,a.jenis_tpa_tinja,a.jenis_kloset,a.jamban,a.jarak_tinja,a.sumber_air_minum,a.jumlah_penghuni,a.material_atap,a.kondisi_atap,a.material_dinding,a.kondisi_dinding,a.material_lantai,a.kondisi_lantai,a.ventilasi,a.jendela,a.sloof,a.material_balok,a.material_plafon,a.material_rangka_atap,a.material_kolom,a.material_pondasi,a.jenis_kawasan,a.sts_kepemilikan_tanah,a.aset_rumah,a.sts_kepemilikan_rumah,a.penghasilan,a.luas_rumah,d.nama_kota,c.nama_kecamatan,b.nama_kelurahan,a.no_ktp,a.nama_kk,a.jenis_kelamin,a.no_hp,a.pekerjaan  FROM  rtlh a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota where $sqlq";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
    $query=mysqli_query($koneksi, $sql) or die("");
    
}

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
    $nestedData=array();
    $luasrumah=$row['luas_rumah'];
    $nestedData[] = $row["nama_kota"];  
    $nestedData[] = $row["nama_kecamatan"];
    $nestedData[] = $row["nama_kelurahan"];
    $nestedData[] = $row["no_ktp"];
    $nestedData[] = $row["nama_kk"];
    $nestedData[] = $row["jenis_kelamin"];
    $nestedData[] = $row["no_hp"];
    $nestedData[] = $row["pekerjaan"];
    $nestedData[] = $row["penghasilan"];
    $nestedData[] = $row["sts_kepemilikan_rumah"];
    $nestedData[] = $row["aset_rumah"];
    $nestedData[] = $row["sts_kepemilikan_tanah"];
    $nestedData[] = $row["jenis_kawasan"];
    $nestedData[] = $row["material_pondasi"];
    $nestedData[] = $row["material_kolom"];
    $nestedData[] = $row["material_rangka_atap"];
    $nestedData[] = $row["material_plafon"];
    $nestedData[] = $row["material_balok"];
    $nestedData[] = $row["sloof"];
    $nestedData[] = $row["jendela"];
    $nestedData[] = $row["ventilasi"];
    $nestedData[] = $row["kondisi_lantai"];
    $nestedData[] = $row["material_lantai"];
    $nestedData[] = $row["kondisi_dinding"];
    $nestedData[] = $row["material_dinding"];
    $nestedData[] = $row["kondisi_atap"];
    $nestedData[] = $row["material_atap"];
    $nestedData[] = "$luasrumah M2";
    $nestedData[] = $row["jumlah_penghuni"];
    $nestedData[] = $row["sumber_air_minum"];
    $nestedData[] = $row["jarak_tinja"];
    $nestedData[] = $row["jamban"];
    $nestedData[] = $row["jenis_kloset"];
    $nestedData[] = $row["jenis_tpa_tinja"];
    $nestedData[] = $row["tahun_input_data"];
    $data[] = $nestedData;
 
}

$json_data = array(
            "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
            "recordsTotal"    => intval( $totalData ),  // total number of records
            "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data"            => $data   // total data array
            );

echo json_encode($json_data);  // send data as json format

?>
  