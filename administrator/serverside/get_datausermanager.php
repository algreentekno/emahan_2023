<?php
session_start();
include "../config/koneksi_li.php";
?>
<?php
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
   
    0 => 'nip',
    
  


);

// getting total number records without any search
$sql = "SELECT *,a.kode_kota as kdkt FROM  user a left join kota b on a.kode_kota=b.kode_kota order by a.nip";
$query=mysqli_query($koneksi, $sql) or die("");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
    // if there is a search parameter
    $sql = "SELECT *,a.kode_kota as kdkt FROM  user a left join kota b on a.kode_kota=b.kode_kota";
    $sql.=" where (a.username LIKE '%".$requestData['search']['value']."%')";// $requestData['search']['value'] contains search parameter
    $sql.=" OR (a.nip LIKE '%".$requestData['search']['value']."%')";
    $sql.=" OR (a.nama_lengkap LIKE '%".$requestData['search']['value']."%')";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
    
    $query=mysqli_query($koneksi, $sql) or die("");
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
    $query=mysqli_query($koneksi, $sql) or die(""); // again run query with limit
    
} else {    

    $sql ="SELECT *,a.kode_kota as kdkt ";
    $sql.="FROM user a left join kota b on a.kode_kota=b.kode_kota";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
    $query=mysqli_query($koneksi, $sql) or die("");
    
}

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
    if($row['level']=='0'){
        $levl='Administrator';
    }elseif($row['level']=='1'){
        $levl='Operator';
    }elseif($row['level']=='2'){
        $levl='Penanganan';
    }
    if($row['kdkt']=='18'){
        $kdkota='PROVINSI';
    }else{
        $kdkota=$row['nama_kota'];
    }
    $nestedData=array();
    $nestedData[] = $row["nip"];  
    $nestedData[] = $row["username"];
    $nestedData[] = $row["email"];
    $nestedData[] = $row["no_telp"];
    $nestedData[] = $levl;
    $nestedData[] = $kdkota;
    $nestedData[] = '<td><center>
    <a href="#" data-bs-toggle="modal" data-bs-target="#modaledit" data-id="'.$row['username'].'" class="btn btn-sm btn-round btn-icon btn-success"><em class="icon ni ni-edit"></em></a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#modallihat" data-id="'.$row['username'].'" class="btn btn-sm btn-round btn-icon btn-info"><em class="icon ni ni-eye"></em></a>
    <a href="#" onclick="myFunctiondelete(\''.$row['username'].'\')" class="btn btn-sm btn-round btn-icon btn-danger"><em class="icon ni ni-trash"></em></a>
    
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
  