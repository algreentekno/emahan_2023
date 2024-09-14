<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
   
    var table = $('.example').DataTable({
     
        autoWidth: true,
         paging:   true,
                info:     true,
                ordering: true,
                searching: true,
                
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'multi',
            selector: 'td:first-child'

        },
        order: [[ 1, 'asc' ]]
    
           });
        
    $('.example tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
    });

   
 
  $('.batal').click( function (e) {
    e.preventDefault();
    var tableData = table.rows('.selected').data().toArray();
    var json_arr = JSON.stringify(tableData);
        $.ajax({
           type: "POST",
           url: 'app/modul/mod_pendataan/main_act.php?module=pendataan&act=bataldata',
           data: {kodedt:json_arr},
           success: function(data){
           
           
           
            swal.fire({
                              title: '',
                              text: "Apakan anda yakin untuk batal verifikasi",
                              icon: 'warning',
                              showCancelButton: true,
                              confirmButtonText: 'Ya, Batalkan !',
                              cancelButtonText: "Tidak !",
                                 }).then(function (result) {
                                      if (result.value) {
                                      
                                        window.location.href = 'batalpendataan';
                                        
                                   } else {
                                      swal.fire("", "Anda Membatalkan Aksi Ini", "error");
                                   }
                            
                                 });
                       
            //$('.example').DataTable().ajax.reload(); 
            //console.log(data);
           }
        });
        // Prevent form submission
       //return false;
    });

});

 </script> 
<?php
session_start();
include "../config/koneksi_li.php";
$kodekota=$_POST['kodekota'];
$kodekec=$_POST['kodekec'];
$kodekel=$_POST['kodekel'];
$tahundata=$_POST['tahundata'];
$lihatdata=$_POST['lihatdata'];
if($kodekota!='' AND $kodekec=='' AND $kodekel==''){
    $sqlq="a.kode_kota='$kodekota'";
}elseif($kodekota!='' AND $kodekec!='' AND $kodekel==''){
    $sqlq="a.kode_kota='$kodekota' and a.kode_kec='$kodekec'";
}elseif($kodekota!='' AND $kodekec!='' AND $kodekel!=''){
    $sqlq="a.kode_kota='$kodekota' and a.kode_kec='$kodekec' and a.kode_kel='$kodekel'";
}else{
    $sqlq="a.kode_kota='$kodekota' and a.kode_kec='$kodekec' and a.kode_kel='$kodekel'";
}
?>


<div class="table-responsive">
<table width="100%"  class="example nowrap greyGridTable" data-export-title="Export" style="margin-top: 10px;">
    <thead>
            <tr>
           
            <th></th>
                <th>Kota/Kabupaten</th>
                <th>Kecamatan</th>
                <th>Kelurahan/Desa</th>
                <th>No. KTP</th>
                <th>Nama Kepala Keluarga</th>
                <th>Jenis Kelamin</th>
                <th>Nomor Handphone</th>
                <th>Pekerjaan</th>
                
            </tr>
        </thead>
        <tbody>
       
         <?php

$sql = "SELECT d.nama_kota,c.nama_kecamatan,b.nama_kelurahan,a.no_ktp,a.nama_kk,a.jenis_kelamin,a.no_hp,a.pekerjaan FROM  rtlh a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota where $sqlq and a.tahun_input_data='$tahundata' and a.sts_verifikasi='Y' and sts_penanganan='T' order by a.Id_rtlh limit $lihatdata";
$query=mysqli_query($koneksi, $sql) or die("");
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
    $luasrumah=$row['luas_rumah'];
    ?>
    <tr>
       
    <td class="nk-tb-col tb-col-md"></td>  
    <td><?php echo $row["nama_kota"];?></td>  
    <td><?php echo $row["nama_kecamatan"];?></td>
    <td><?php echo $row["nama_kelurahan"];?></td>
    <td><?php echo $row["no_ktp"];?></td>
    <td><?php echo $row["nama_kk"];?></td>
    <td><?php echo $row["jenis_kelamin"];?></td>
    <td><?php echo $row["no_hp"];?></td>
    <td><?php echo $row["pekerjaan"];?></td>
    </tr> 
<?php
}
?>
          
        </tbody>
    </table>
</div>
<br>
<button class="btn btn-info batal" style="margin-top: 10px;"><em class="icon ni ni-trash"></em> Batal Verifikasi</button>
                                

  