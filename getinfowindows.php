<?php
include('config/koneksi_li.php');
  
$id=$_GET['id'];
    $sql_lokasi="select * 
              from air_limbah_iplt where Id_iplt='$id' ";
              $result=mysqli_query($koneksi,$sql_lokasi);
              while($data=mysqli_fetch_object($result)){
                $content="<div id=\"content\">
    <div id=\"siteNotice\">
    </div>
    <h3 id=\"firstHeading\" class=\"firstHeading\">$data->nama_iplt</h3>
    <div id=\"bodyContent\"> <p>
	Pengelola: $data->pengelola<br>
	<img src=\"img_galeri/$data->foto\" style=\"float:left;margin:0 5px 0 0;\">
    </p>
    </div></div>";
  }  
    echo $content;
?>