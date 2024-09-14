<?php
session_start();
include "../config/koneksi_li.php";
if($_SESSION['level']=='0' OR $_SESSION['level']=='1'){
    $kodekota=$_POST['kodekota'];  
    }else{
    $kodekota=$_SESSION['kodekota'];
    }
$Lvl=$_SESSION['level'];
$tahundata=$_POST['tahun'];
?>
<?php
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
   
    0 => 'Id_kumuh_luas',
    
  


);

// getting total number records without any search
if($Lvl=='0' OR $Lvl=='1'){
$sql = "SELECT * from kumuh_luas a inner join kecamatan d on a.kode_kec=d.kode_kec inner join kelurahan e on a.kode_kel=e.kode_kel inner join kota b on a.kode_kota=b.kode_kota inner join provinsi c on a.kode_prov=c.kode_prov where a.klasifikasi_kumuh='1' and a.tahun_data='$tahundata' and a.kode_kota='$kodekota' order by a.Id_kumuh_luas";
}else{
    $sql = "SELECT * from kumuh_luas a inner join kecamatan d on a.kode_kec=d.kode_kec inner join kelurahan e on a.kode_kel=e.kode_kel inner join kota b on a.kode_kota=b.kode_kota inner join provinsi c on a.kode_prov=c.kode_prov where a.tahun_data='$tahundata' and a.klasifikasi_kumuh='1' and a.kode_kota='$kodekota' order by a.Id_kumuh_luas";

}
$query=mysqli_query($koneksi, $sql) or die("");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
    // if there is a search parameter
    if($Lvl=='0' OR $Lvl=='1'){
    $sql = "SELECT * from kumuh_luas a inner join kecamatan d on a.kode_kec=d.kode_kec inner join kelurahan e on a.kode_kel=e.kode_kel inner join kota b on a.kode_kota=b.kode_kota inner join provinsi c on a.kode_prov=c.kode_prov";
    $sql.=" where (a.kode_kota='$kodekota' and a.tahun_data='$tahundata' and a.klasifikasi_kumuh='1' AND a.no_sk LIKE '%".$requestData['search']['value']."%')";
    $sql.=" OR (a.kode_kota='$kodekota' and a.tahun_data='$tahundata' and a.klasifikasi_kumuh='1' AND a.lokasi LIKE '%".$requestData['search']['value']."%')";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
    }else{

        $sql = "SELECT * from kumuh_luas a inner join kecamatan d on a.kode_kec=d.kode_kec inner join kelurahan e on a.kode_kel=e.kode_kel inner join kota b on a.kode_kota=b.kode_kota inner join provinsi c on a.kode_prov=c.kode_prov";
        $sql.=" where (a.tahun_data='$tahundata' and a.klasifikasi_kumuh='1' and a.kode_kota='$kodekota' AND a.no_sk LIKE '%".$requestData['search']['value']."%')";
        $sql.=" OR (a.tahun_data='$tahundata' and a.klasifikasi_kumuh='1' and a.kode_kota='$kodekota' AND a.lokasi LIKE '%".$requestData['search']['value']."%')";
        $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
            
    }
    $query=mysqli_query($koneksi, $sql) or die("");
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 
    $query=mysqli_query($koneksi, $sql) or die(""); // again run query with limit
    
} else {    
    if($Lvl=='0' OR $Lvl=='1'){
    $sql = "SELECT * ";
    $sql.=" from kumuh_luas a inner join kecamatan d on a.kode_kec=d.kode_kec inner join kelurahan e on a.kode_kel=e.kode_kel inner join kota b on a.kode_kota=b.kode_kota inner join provinsi c on a.kode_prov=c.kode_prov where a.klasifikasi_kumuh='1' and a.tahun_data='$tahundata' and a.kode_kota='$kodekota'";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
    }else{
        $sql = "SELECT * ";
        $sql.=" from kumuh_luas a inner join kecamatan d on a.kode_kec=d.kode_kec inner join kelurahan e on a.kode_kel=e.kode_kel inner join kota b on a.kode_kota=b.kode_kota inner join provinsi c on a.kode_prov=c.kode_prov where a.tahun_data='$tahundata' and a.klasifikasi_kumuh='1' and a.kode_kota='$kodekota'";
        $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
            
    }
    $query=mysqli_query($koneksi, $sql) or die("");
    
}

$data = array();

while( $row=mysqli_fetch_array($query) ) {  // preparing an array
    $nestedData=array();
    $nestedData[] = $row["nama_kota"]; 
    $nestedData[] = $row["nama_kecamatan"]; 
    $nestedData[] = $row["nama_kelurahan"]; 
    $nestedData[] = $row["no_sk"];
    $nestedData[] = $row["lokasi"]; 
    $nestedData[] = $row["luas_kumuh"]; 
    $nestedData[] = $row["luas_penanganan_2020"]; 
    $nestedData[] = $row["luas_penanganan_2021"]; 
    $nestedData[] = $row["luas_penanganan_2022"];
    $nestedData[] = $row["total_luas_penanganan"];  
    $nestedData[] = $row["luas_kumuh_2023"];  
    $nestedData[] = $row["peta_kawasan"]; 
    if($Lvl=='3' OR $Lvl=='0'){
        $nestedData[] = '<td><center>
        <a href="#" data-bs-toggle="modal" data-bs-target="#modaledit" data-id="'.$row['Id_kumuh_luas'].'" class="btn btn-sm btn-round btn-icon btn-success"><em class="icon ni ni-edit"></em></a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalfoto" data-id="'.$row['Id_kumuh_luas'].'" class="btn btn-sm btn-round btn-icon btn-warning"><em class="icon ni ni-img"></em></a>
        
        </center></td>';
    }else{
        $nestedData[] = '<td><center>
        
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
  