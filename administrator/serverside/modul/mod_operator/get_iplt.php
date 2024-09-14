<?php
session_start();
$kodekota=$_SESSION['kodekota'];
$rdm=$_POST['rdm'];
include "../../../config/koneksi_li.php";
?>
<?php
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
   
    0 => 'kode_rdm',
    
  


);

// getting total number records without any search
$sql = "SELECT * from air_limbah_iplt_temp a inner join kecamatan d on a.kode_kec=d.kode_kec inner join kelurahan e on a.kode_kel=e.kode_kel inner join kota b on a.kode_kota=b.kode_kota inner join provinsi c on a.kode_prov=c.kode_prov where a.kode_rdm='$rdm'";
$query=mysqli_query($koneksi, $sql) or die("");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
    // if there is a search parameter
    $sql = "SELECT * from air_limbah_iplt_temp a inner join kecamatan d on a.kode_kec=d.kode_kec inner join kelurahan e on a.kode_kel=e.kode_kel inner join kota b on a.kode_kota=b.kode_kota inner join provinsi c on a.kode_prov=c.kode_prov";
    $sql.=" where a.kode_rdm='$rdm' and (a.nama_iplt LIKE '%".$requestData['search']['value']."%'";
    $sql.=" or a.pengelola LIKE '%".$requestData['search']['value']."%')";     // $requestData['search']['value'] contains search parameter
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
    
    $query=mysqli_query($koneksi, $sql) or die("");
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
    $query=mysqli_query($koneksi, $sql) or die(""); // again run query with limit
    
} else {    

    $sql = "SELECT * ";
    $sql.=" from air_limbah_iplt_temp a inner join kecamatan d on a.kode_kec=d.kode_kec inner join kelurahan e on a.kode_kel=e.kode_kel inner join kota b on a.kode_kota=b.kode_kota inner join provinsi c on a.kode_prov=c.kode_prov where a.kode_rdm='$rdm'";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
    $query=mysqli_query($koneksi, $sql) or die("");
    
}

$data = array();

while( $row=mysqli_fetch_array($query) ) {  // preparing an array
    $nestedData=array();
    $nestedData[] = $row["nomor_urut"];
    $nestedData[] = $row["nama_kota"]; 
    $nestedData[] = $row["nama_kecamatan"]; 
    $nestedData[] = $row["nama_kelurahan"]; 
    $nestedData[] = $row["nama_iplt"]; 
    $nestedData[] = $row["pengelola"]; 
    $nestedData[] = $row["kapasitas_rencana"]; 
    $nestedData[] = $row["kapasitas_realisasi"]; 
    $nestedData[] = $row["jum_tersedia"]; 
    $nestedData[] = $row["jum_terlayani"]; 
    $nestedData[] = $row["sistem_unit"]; 
    $nestedData[] = $row["status_operasional"]; 
    $nestedData[] = $row["tahun_pembangunan"]; 
    $nestedData[] = $row["sumber_dana"]; 
    $nestedData[] = $row["tahun_optimalisasi"]; 
    $nestedData[] = $row["sumber_dana_optimalisasi"]; 
    $nestedData[] = $row["jum_mobil_sedot_tinja"]; 
    $nestedData[] = $row["status_kondisi_mobil"]; 
    $nestedData[] = $row["mou_pengangkut"]; 
    $nestedData[] = $row["latitude"]; 
    $nestedData[] = $row["longitude"]; 
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
  