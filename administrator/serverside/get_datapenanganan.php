<?php
session_start();
include "../config/koneksi_li.php";
$kodekota=$_POST['kodekota'];
$kodekec=$_POST['kodekec'];
$kodekel=$_POST['kodekel'];
$tahundata=$_POST['tahundata'];
if($kodekota!='' AND $kodekec=='' AND $kodekel==''){
    $sqlq="a.kode_kota='$kodekota'";
}elseif($kodekota!='' AND $kodekec!='' AND $kodekel==''){
    $sqlq="a.kode_kota='$kodekota' and a.kode_kec='$kodekec'";
}elseif($kodekota!='' AND $kodekec!='' AND $kodekel!=''){
    $sqlq="a.kode_kota='$kodekota' and a.kode_kec='$kodekec' and a.kode_kel='$kodekel'";
}else{
    $sqlq="a.kode_kota='$kodekota' and a.kode_kec='$kodekec' and a.kode_kel='$kodekel'";
}
?>
<?php
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
   
    0 => 'a.id_rtlh',
    
  


);

// getting total number records without any search
$sql = "SELECT a.sts_penanganan,a.tahun_verifikasi,a.ket_verifikasi,a.sts_verifikasi,a.Id_rtlh,a.tahun_dibantu,a.sumber_dana,a.sts_penanganan,a.tahun_verifikasi,a.sts_verifikasi,d.nama_kota,c.nama_kecamatan,b.nama_kelurahan,a.no_ktp,a.nama_kk,a.luas_rumah,a.alamat_rumah,a.sts_kepemilikan_rumah,a.jenis_kawasan FROM  rtlh a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota where $sqlq and a.tahun_verifikasi='$tahundata' and a.sts_verifikasi='Y' and a.sts_penanganan='T' order by a.Id_rtlh";
$query=mysqli_query($koneksi, $sql) or die("");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
    // if there is a search parameter
    $sql = "SELECT a.sts_penanganan,a.tahun_verifikasi,a.ket_verifikasi,a.sts_verifikasi,a.Id_rtlh,a.tahun_dibantu,a.sumber_dana,a.sts_penanganan,a.tahun_verifikasi,a.sts_verifikasi,d.nama_kota,c.nama_kecamatan,b.nama_kelurahan,a.no_ktp,a.nama_kk,a.luas_rumah,a.alamat_rumah,a.sts_kepemilikan_rumah,a.jenis_kawasan FROM  rtlh a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota";
    $sql.=" where (a.sts_verifikasi='Y' and a.sts_penanganan='T' and $sqlq and a.tahun_verifikasi='$tahundata' and a.nama_kk LIKE '%".$requestData['search']['value']."%')";// $requestData['search']['value'] contains search parameter
    $sql.=" OR (a.sts_verifikasi='Y' and a.sts_penanganan='T' and $sqlq and a.tahun_verifikasi='$tahundata' and a.no_ktp LIKE '%".$requestData['search']['value']."%')";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
    
    $query=mysqli_query($koneksi, $sql) or die("");
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
    $query=mysqli_query($koneksi, $sql) or die(""); // again run query with limit
    
} else {    

    $sql="SELECT a.sts_penanganan,a.tahun_verifikasi,a.ket_verifikasi,a.sts_verifikasi,a.Id_rtlh,a.tahun_dibantu,a.sumber_dana,a.sts_penanganan,a.tahun_verifikasi,a.sts_verifikasi,d.nama_kota,c.nama_kecamatan,b.nama_kelurahan,a.no_ktp,a.nama_kk,a.luas_rumah,a.alamat_rumah,a.sts_kepemilikan_rumah,a.jenis_kawasan FROM  rtlh a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota where $sqlq and a.tahun_verifikasi='$tahundata' and a.sts_verifikasi='Y' and a.sts_penanganan='T'";
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
    $nestedData[] = $row["alamat_rumah"];
    $nestedData[] = "$luasrumah M2";
    $nestedData[] = $row["sts_kepemilikan_rumah"];
    $nestedData[] = $row["jenis_kawasan"];
    $nestedData[] = $row["ket_verifikasi"];
    $nestedData[] = $row["tahun_verifikasi"];
    if($row['sts_penanganan']=='Y'){
        $nestedData[] = "SUDAH DALAM PENANGANAN";
    }else{
    $nestedData[] = '<td><center>
    <a href="#" data-bs-toggle="modal" data-bs-target="#modaledit" data-id="'.$row['Id_rtlh'].'" class="btn btn-sm btn-round btn-icon btn-success"><em class="icon ni ni-shield-check-fill"></em></a>
    
    </center></td>';
    }
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
  