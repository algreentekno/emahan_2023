<?php
session_start();
$kodekota=$_SESSION['kodekota'];
include "../config/koneksi_li.php";
?>
<?php
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
   
    0 => 'rdm',
    
  


);

// getting total number records without any search
$sql = "SELECT * FROM  upload_data where kode_kota='$kodekota' order by rdm";
$query=mysqli_query($koneksi, $sql) or die("");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
    // if there is a search parameter
    $sql = "SELECT * FROM  upload_data";
    $sql.=" where kode_kota='$kodekota' and keterangan LIKE '%".$requestData['search']['value']."%'";// $requestData['search']['value'] contains search parameter
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
    
    $query=mysqli_query($koneksi, $sql) or die("");
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
    $query=mysqli_query($koneksi, $sql) or die(""); // again run query with limit
    
} else {    

    $sql ="SELECT * ";
    $sql.="FROM upload_data where kode_kota='$kodekota'";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
    $query=mysqli_query($koneksi, $sql) or die("");
    
}

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
    $nestedData=array();
    if($row['jenis_data']=='1'){
        $jnsdata="SPALD";
    }elseif($row['jenis_data']=='2'){
        $jnsdata="IPLT";
    }
    elseif($row['jenis_data']=='3'){
        $jnsdata="SPAM REGIONAL";
    }elseif($row['jenis_data']=='4'){
        $jnsdata="SPAM KABUPATEN/KOTA";
    }elseif($row['jenis_data']=='5'){
        $jnsdata="SPAM IKK";
    }elseif($row['jenis_data']=='6'){
        $jnsdata="SPAM PERDESAAN";
    }elseif($row['jenis_data']=='7'){
        $jnsdata="TPA";
    }elseif($row['jenis_data']=='8'){
        $jnsdata="TPST-TPS3R";
    }elseif($row['jenis_data']=='9'){
        $jnsdata="TPS";
    }elseif($row['jenis_data']=='10'){
        $jnsdata="KUMUH < 10 Ha";
    }elseif($row['jenis_data']=='11'){
        $jnsdata="KUMUH > 10 Ha";
    }elseif($row['jenis_data']=='12'){
        $jnsdata="PERUMAHAN";
    }elseif($row['jenis_data']=='13'){
        $jnsdata="RTLH";
    }
    if($row['validasi']=='0'){
        $validasi="<span class='badge bg-danger'>Belum Divalidasi</span>";
    }else{
        $validasi="<span class='badge bg-success'>Sudah Divalidasi</span>";
    }
    $nestedData[] = $jnsdata;  
    $nestedData[] = $row["keterangan"];
    $nestedData[] = $row["tanggal_input"];
    $nestedData[] = $row["tahun_data"];
    $nestedData[] = '<center><a href="#" data-bs-toggle="modal" data-bs-target="#modalberitaacara" data-id="'.$row['rdm'].'" class="btn btn-sm btn-round btn-icon btn-info"><em class="icon ni ni-file-pdf"></em></a></center>';
    $nestedData[] = $validasi;
    $nestedData[] = $row["divalidasi"];
    if($row['validasi']=='1'){
        $nestedData[] = '<td><center>
        <a href="#" class="btn btn-sm btn-round btn-icon btn-info"><em class="icon ni ni-check-fill-c"></em></a>
         
        </center></td>';
        
    }else{
        $nestedData[] = '<td><center>
    <a href="#" data-bs-toggle="modal" data-bs-target="#modaledit" data-id="'.$row['rdm'].'" class="btn btn-sm btn-round btn-icon btn-success"><em class="icon ni ni-edit"></em></a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#modallihat" data-id="'.$row['rdm'].'" class="btn btn-sm btn-round btn-icon btn-info"><em class="icon ni ni-eye"></em></a>
    
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
  