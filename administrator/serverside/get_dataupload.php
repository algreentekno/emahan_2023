<?php
session_start();
include "../config/koneksi_li.php";
$rdm=$_POST['rdm'];
?>
<?php
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
   
    0 => 'a.no_ktp',
    
  


);

// getting total number records without any search
$sql = "SELECT * FROM  rtlh_temp a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota where sha1(a.kode_rdm)='$rdm' order by a.no_ktp";
$query=mysqli_query($koneksi, $sql) or die("");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
    // if there is a search parameter
    $sql = "SELECT * FROM  rtlh_temp a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota";
    $sql.=" where (sha1(a.kode_rdm)='$rdm' and a.nama_kk LIKE '%".$requestData['search']['value']."%')";// $requestData['search']['value'] contains search parameter
    $sql.=" OR (sha1(a.kode_rdm)='$rdm' and a.no_ktp LIKE '%".$requestData['search']['value']."%')";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
    
    $query=mysqli_query($koneksi, $sql) or die("");
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
    $query=mysqli_query($koneksi, $sql) or die(""); // again run query with limit
    
} else {    

    $sql="SELECT * FROM  rtlh_temp a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota where sha1(a.kode_rdm)='$rdm'";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
    $query=mysqli_query($koneksi, $sql) or die("");
    
}

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
    $nestedData=array();
    $ktpr=$row['no_ktp'];
    if($row['sts_ktp']=='1'){
        $ktp="<div style='background-color: red;'>$ktpr</div>";
    }else{
        $ktp="$ktpr";
    }
    $luasrumah=$row['luas_rumah'];
    $nestedData[] = $row["nama_kota"];  
    $nestedData[] = $row["nama_kecamatan"];
    $nestedData[] = $row["nama_kelurahan"];
    $nestedData[] = $ktp;
    $nestedData[] = $row["nama_kk"];
    $nestedData[] = $row["alamat_rumah"];
    $nestedData[] = "$luasrumah M2";
    $nestedData[] = $row["sts_kepemilikan_rumah"];
    $nestedData[] = '<td><center>
    <a href="#" onclick="myFunctiondelete(\''.$row['no_ktp'].'\')" class="btn btn-sm btn-round btn-icon btn-danger"><em class="icon ni ni-trash"></em></a>
    
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
  