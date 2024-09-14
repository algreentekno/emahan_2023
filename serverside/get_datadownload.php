<?php
include "../config/koneksi_li.php";
$id_kategoridownload=$_POST['id_kategoridownload'];
?>
<?php
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
   
    0 => 'a.id_download',
    
);

// getting total number records without any search

$sql = "SELECT * from download a inner join kategori_download b on a.id_kategoridownload=b.id_kategoridownload where a.id_kategoridownload='$id_kategoridownload' order by a.id_download";

$query=mysqli_query($koneksi, $sql) or die("");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
    // if there is a search parameter
  

        $sql = "SELECT * download a inner join kategori_download b on a.id_kategoridownload=b.id_kategoridownload";
        $sql.=" where a.id_kategoridownload='$id_kategoridownload' and (a.judul LIKE '%".$requestData['search']['value']."%')";
        $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
            
    
    $query=mysqli_query($koneksi, $sql) or die("");
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
    $query=mysqli_query($koneksi, $sql) or die(""); // again run query with limit
    
} else {    
 
        $sql = "SELECT * ";
        $sql.=" FROM download a inner join kategori_download b on a.id_kategoridownload=b.id_kategoridownload where a.id_kategoridownload='$id_kategoridownload'";
        $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
            
    
    
    $query=mysqli_query($koneksi, $sql) or die("");
    
}

$data = array();

while( $row=mysqli_fetch_array($query) ) {  // preparing an array
    $nestedData=array();
     
  
    $nestedData[] = $row["judul"]; 
    $nestedData[] = $row["nama_file"]; 
    $nestedData[] = $row["tgl_posting"]; 
    $nestedData[] = "<a href='donloattt.php?file=$row[nama_file]'><img src='d.png' width='30' height='30'></a>"; 
    
    
   
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
  