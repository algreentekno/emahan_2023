<?php
session_start();
include "../config/koneksi_li.php";
?>
<?php
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
   
    0 => 'Id_air_capaian',
    
  


);

// getting total number records without any search
$sql = "SELECT * from air_minum_capaian a inner join kecamatan d on a.kode_kec=d.kode_kec inner join kelurahan e on a.kode_kel=e.kode_kel inner join kota b on a.kode_kota=b.kode_kota inner join provinsi c on a.kode_prov=c.kode_prov where a.jenis='Kemajuan' order by a.Id_air_capaian";
$query=mysqli_query($koneksi, $sql) or die("");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
    // if there is a search parameter
    $sql = "SELECT * from air_minum_capaian a inner join kecamatan d on a.kode_kec=d.kode_kec inner join kelurahan e on a.kode_kel=e.kode_kel inner join kota b on a.kode_kota=b.kode_kota inner join provinsi c on a.kode_prov=c.kode_prov";
    $sql.=" where (a.jenis='Kemajuan' AND a.tahun LIKE '%".$requestData['search']['value']."%')"; 
    $sql.=" OR (a.jenis='Kemajuan' AND d.nama_kecamatan LIKE '%".$requestData['search']['value']."%')";     // $requestData['search']['value'] contains search parameter
    $sql.=" OR (a.jenis='Kemajuan' AND e.nama_kelurahan LIKE '%".$requestData['search']['value']."%')";     // $requestData['search']['value'] contains search parameter
    $sql.=" OR (a.jenis='Kemajuan' AND b.nama_kota LIKE '%".$requestData['search']['value']."%')";     // $requestData['search']['value'] contains search parameter
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
    
    $query=mysqli_query($koneksi, $sql) or die("");
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
    $query=mysqli_query($koneksi, $sql) or die(""); // again run query with limit
    
} else {    

    $sql = "SELECT * ";
    $sql.=" from air_minum_capaian a inner join kecamatan d on a.kode_kec=d.kode_kec inner join kelurahan e on a.kode_kel=e.kode_kel inner join kota b on a.kode_kota=b.kode_kota inner join provinsi c on a.kode_prov=c.kode_prov where a.jenis='Kemajuan'";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
    $query=mysqli_query($koneksi, $sql) or die("");
    
}

$data = array();

while( $row=mysqli_fetch_array($query) ) {  // preparing an array
    $nestedData=array();
    
    $nestedData[] = $row["nama_kota"]; 
    $nestedData[] = $row["nama_kecamatan"]; 
    $nestedData[] = $row["nama_kelurahan"]; 
    $nestedData[] = $row["klasifikasi"]; 
    $nestedData[] = $row["jum_penduduk"]; 
    $nestedData[] = $row["jum_kk"]; 
    $nestedData[] = $row["akses_layak"]; 
    $nestedData[] = $row["jaringan_perpipaan"]; 
    $nestedData[] = $row["jaringan_non_perpipaan"]; 
    $nestedData[] = $row["akses_aman"]; 
    $nestedData[] = $row["tahun"]; 
    $nestedData[] = '<td><center>
    <a href="#" data-bs-toggle="modal" data-bs-target="#modaledit" data-id="'.$row['Id_air_capaian'].'" class="btn btn-sm btn-round btn-icon btn-success"><em class="icon ni ni-edit"></em></a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#modaledit" data-id="'.$row['Id_air_capaian'].'" class="btn btn-sm btn-round btn-icon btn-info"><em class="icon ni ni-eye"></em></a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#modaledit" data-id="'.$row['Id_air_capaian'].'" class="btn btn-sm btn-round btn-icon btn-danger"><em class="icon ni ni-trash"></em></a>
  
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
  