<?php
session_start();
include "../config/koneksi_li.php";
$username=$_SESSION['namausershped'];
?>
<?php
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
   
    0 => 'a.kode_kel',
    
  


);

// getting total number records without any search
$sql = "SELECT count(a.no_ktp) as jumlahdata,d.nama_kota,c.nama_kecamatan,b.nama_kelurahan,a.kode_kel FROM  rtlh_temp a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota where a.username='$username' GROUP BY a.kode_kel,b.nama_kelurahan,c.nama_kecamatan,d.nama_kota order by a.kode_kel";
$query=mysqli_query($koneksi, $sql) or die("");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
    // if there is a search parameter
    $sql = "SELECT count(a.no_ktp) as jumlahdata,d.nama_kota,c.nama_kecamatan,b.nama_kelurahan,a.kode_kel FROM  rtlh_temp a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota";
    $sql.=" where (a.username='$username' and d.nama_kota LIKE '%".$requestData['search']['value']."%')";// $requestData['search']['value'] contains search parameter
    $sql.=" OR (a.username='$username' and b.nama_kelurahan LIKE '%".$requestData['search']['value']."%')";
    $sql.=" OR (a.username='$username' and c.nama_kecamatan LIKE '%".$requestData['search']['value']."%')";
    $sql.=" GROUP BY a.kode_kel,b.nama_kelurahan,c.nama_kecamatan,d.nama_kota ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
    
    $query=mysqli_query($koneksi, $sql) or die("");
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
    $query=mysqli_query($koneksi, $sql) or die(""); // again run query with limit
    
} else {    

    $sql="SELECT count(a.no_ktp) as jumlahdata,d.nama_kota,c.nama_kecamatan,b.nama_kelurahan,a.kode_kel FROM  rtlh_temp a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota where a.username='$username'";
    $sql.=" GROUP BY a.kode_kel,b.nama_kelurahan,c.nama_kecamatan,d.nama_kota ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
    $query=mysqli_query($koneksi, $sql) or die("");
    
}

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
    $nestedData=array();
    $nestedData[] = $row["nama_kota"];  
    $nestedData[] = $row["nama_kecamatan"];
    $nestedData[] = $row["nama_kelurahan"];
    $nestedData[] = $row["jumlahdata"];
    $nestedData[] = '<td><center>
    <a href="#" onclick="myFunctiondelete(\''.$row['kode_kel'].'\')" class="btn btn-sm btn-round btn-icon btn-success"><em class="icon ni ni-upload"></em></a>
    
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
  