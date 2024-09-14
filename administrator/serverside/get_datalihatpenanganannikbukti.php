<?php
session_start();
include "../config/koneksi_li.php";
$kodekota=$_SESSION['kodekota'];
$level=$_SESSION['level'];
$nik=$_POST['nik'];
$sqlq="a.no_ktp='$nik'";

?>
<?php
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
   
    0 => 'a.id_rtlh',
    
  


);

// getting total number records without any search
$sql = "SELECT a.bukti1,a.bukti2,a.bukti3,a.Id_rtlh,a.tahun_dibantu,a.sumber_dana,a.sts_penanganan,a.tahun_verifikasi,a.sts_verifikasi,d.nama_kota,c.nama_kecamatan,b.nama_kelurahan,a.no_ktp,a.nama_kk,a.luas_rumah,a.alamat_rumah,a.sts_kepemilikan_rumah,a.jenis_kawasan FROM  rtlh a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota where a.sts_verifikasi='Y' and a.sts_penanganan='Y' and $sqlq  order by a.Id_rtlh";
$query=mysqli_query($koneksi, $sql) or die("");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
    // if there is a search parameter
    $sql = "SELECT a.bukti1,a.bukti2,a.bukti3,a.Id_rtlh,a.tahun_dibantu,a.sumber_dana,a.sts_penanganan,a.tahun_verifikasi,a.sts_verifikasi,d.nama_kota,c.nama_kecamatan,b.nama_kelurahan,a.no_ktp,a.nama_kk,a.luas_rumah,a.alamat_rumah,a.sts_kepemilikan_rumah,a.jenis_kawasan FROM  rtlh a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota";
    $sql.=" where (a.sts_verifikasi='Y' and a.sts_penanganan='Y' and $sqlq  and a.nama_kk LIKE '%".$requestData['search']['value']."%')";// $requestData['search']['value'] contains search parameter
    $sql.=" OR (a.sts_verifikasi='Y' and a.sts_penanganan='Y' and $sqlq  and a.no_ktp LIKE '%".$requestData['search']['value']."%')";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
    
    $query=mysqli_query($koneksi, $sql) or die("");
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
    $query=mysqli_query($koneksi, $sql) or die(""); // again run query with limit
    
} else {    

    $sql="SELECT a.bukti1,a.bukti2,a.bukti3,a.Id_rtlh,a.tahun_dibantu,a.sumber_dana,a.sts_penanganan,a.tahun_verifikasi,a.sts_verifikasi,d.nama_kota,c.nama_kecamatan,b.nama_kelurahan,a.no_ktp,a.nama_kk,a.luas_rumah,a.alamat_rumah,a.sts_kepemilikan_rumah,a.jenis_kawasan FROM  rtlh a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota where a.sts_verifikasi='Y' and a.sts_penanganan='Y' and $sqlq ";
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
    $nestedData[] = $row['sts_kepemilikan_rumah'];
    $nestedData[] = $row['jenis_kawasan'];
    $nestedData[] = $row['sts_verifikasi'];
    $nestedData[] = $row['tahun_verifikasi'];
    $nestedData[] = $row['sts_penanganan'];
    $nestedData[] = $row['sumber_dana'];
    $nestedData[] = $row['tahun_dibantu'];
    $nestedData[] = $row['bukti1'];
    $nestedData[] = $row['bukti2'];
    $nestedData[] = $row['bukti3'];
    $nestedData[] = '<td><center>
    <a href="#" data-bs-toggle="modal" data-bs-target="#modaleditbukti" data-id="'.$row['Id_rtlh'].'" class="btn btn-sm btn-round btn-icon btn-success"><em class="icon ni ni-upload"></em></a>
    
    </center></td>';
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
  