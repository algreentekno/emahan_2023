<?php
session_start();
include "../config/koneksi_li.php";
$kota=$_SESSION['kodekota'];
?>
<?php
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
   
    0 => 'a.Id_pesan',
    
  


);

// getting total number records without any search
$sql = "SELECT * FROM  pesan_kirim_validasi a inner join kota b on a.kode_kota=b.kode_kota where a.kode_kota='$kota' order by a.Id_pesan";
$query=mysqli_query($koneksi, $sql) or die("");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
    // if there is a search parameter
    $sql = "SELECT * FROM  pesan_kirim_validasi a inner join kota b on a.kode_kota=b.kode_kota";
    $sql.=" where a.kode_kota='$kota' and (a.pesan LIKE '%".$requestData['search']['value']."%')";// $requestData['search']['value'] contains search parameter
    $sql.=" OR (a.tanggal_kirim LIKE '%".$requestData['search']['value']."%')";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
    
    $query=mysqli_query($koneksi, $sql) or die("");
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
    $query=mysqli_query($koneksi, $sql) or die(""); // again run query with limit
    
} else {    

    $sql ="SELECT * ";
    $sql.="FROM pesan_kirim_validasi a inner join kota b on a.kode_kota=b.kode_kota where a.kode_kota='$kota'";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
    $query=mysqli_query($koneksi, $sql) or die("");
    
}

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
    $nestedData=array();
    if($row['baca']=='0'){
        $dt1="<div style='font-weight: bold;'>".$row['nama_kota']."</div>";
        $dt2="<div style='font-weight: bold;'>".$row['jenis_data']."</div>";
        $dt3="<div style='font-weight: bold;'>".$row['tanggal_kirim']."</div>";
    }else{
        $dt1=$row['nama_kota'];
        $dt2=$row['jenis_data'];
        $dt3=$row['tanggal_kirim'];
    }
    $nestedData[] = $dt1;  
    $nestedData[] = $dt2;
    $nestedData[] = $dt3;
    $nestedData[] = '<td><center>
    <a href="#" data-bs-toggle="modal" data-bs-target="#modallihat" data-id="'.$row['Id_pesan'].'" class="btn btn-sm btn-round btn-icon btn-info"><em class="icon ni ni-eye"></em></a>
    <a href="#" onclick="myFunctiondelete(\''.$row['Id_pesan'].'\')" class="btn btn-sm btn-round btn-icon btn-danger"><em class="icon ni ni-trash"></em></a>
    
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
  