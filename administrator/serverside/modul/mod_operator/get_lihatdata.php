<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from upload_data where rdm='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
$rdm=$dataout['rdm'];
?>
<?php
if($dataout['jenis_data']=='1'){
?>
 <script>
  $(document).ready(function() {
var rdm='<?php echo $rdm;?>';
$('.lookup').DataTable({
  
  "columnDefs": [
        { orderable: true, className: 'reorder', targets: 0 },
        { orderable: false, targets: '_all' }
    ],
"processing": true,
"serverSide": true,
"ajax":{
    url :"serverside/modul/mod_operator/get_spald.php", // json datasource
     type: 'POST',
     data: {rdm:rdm}
    
}
});



      });
</script>
<h4>DATA SPALD</h4>
<div class="table-responsive">
                                            <table width="100%" class="lookup nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                      <th width="12%" rowspan="2">No. Urut</th>
                                                    
                                                        <th width="12%" rowspan="2">Kota/Kabupaten</th>
                                                        <th width="9%" rowspan="2">Kecamatan</th>
                                                        <th width="17%" rowspan="2">Kelurahan/Desa</th>
                                                        <th width="12%" rowspan="2">Nama SPALDS</th>
                                                        <th width="14%" rowspan="2">Tahun Pembangunan</th>
                                                        <th colspan="2">Jumlah Sambungan Rumah</th>
                                                        <th width="0%" rowspan="2">Jumlah Pemanfaat (Rumah)</th>
                                                        <th width="0%" rowspan="2">Jenis Sarpas</th>
                                                        <th width="0%" rowspan="2">Status</th>
                                                        <th width="0%" rowspan="2">Kondisi Infrastruktur</th>
                                                        <th width="0%" rowspan="2">Sumber Dana Pembangunan</th>
                                                        <th width="0%" rowspan="2">Latitude</th>
                                                        <th width="0%" rowspan="2">Longitude</th>
                                                    </tr>
                                                    <tr>
                                                      <th>Rencana</th>
                                                      <th>Realisasi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div> 
<?php
}elseif($dataout['jenis_data']=='2'){
?>
 <script>
  $(document).ready(function() {
var rdm='<?php echo $rdm;?>';
$('.lookup').DataTable({
  "columnDefs": [
        { orderable: true, className: 'reorder', targets: 0 },
        { orderable: false, targets: '_all' }
    ],
"processing": true,
"serverSide": true,
"ajax":{
    url :"serverside/modul/mod_operator/get_iplt.php", // json datasource
     type: 'POST',
     data: {rdm:rdm}
    
}

});

      });
</script>
<h4>DATA IPLT</h4>
<div class="table-responsive">
                                            <table width="100%" class="lookup nowrap greyGridTable" data-export-title="Export">
                                                <thead>
                                                    <tr>
                                                      <th width="4%" rowspan="3">No. Urut</th>
                                                   
                                                        <th width="4%" rowspan="3">Kota/Kabupaten</th>
                                                        <th colspan="2">Lokasi IPLT</th>
                                                        <th width="19%" rowspan="3">Nama IPLT</th>
                                                        <th width="3%" rowspan="3">Pengelola</th>
                                                        <th width="3%" rowspan="3">Kapasitas Rencana <br>(M3/Hari)</th>
                                                        <th width="3%" rowspan="3">Kapasitas Realisasi <br>(M3/Hari)</th>
                                                        <th colspan="2">Akses</th>
                                                        <th width="2%" rowspan="3">Sistem Dan Unit IPLT</th>
                                                        <th width="3%" rowspan="3">Status Operasional</th>
                                                        <th width="4%" rowspan="3">Tahun Pembangunan</th>
                                                        <th width="2%" rowspan="3">Sumber Dana</th>
                                                        <th width="3%" rowspan="3">Tahun Optimalisasi</th>
                                                        <th width="2%" rowspan="3">Sumber Dana</th>
                                                        <th width="2%" rowspan="3">Jumlah Mobil Sedot Tinja Milik Pemda</th>
                                                        <th width="2%" rowspan="3">Status Kondisi Mobil</th>
                                                        <th width="4%" rowspan="3">MOU Pengangkutan Dengan Swasta</th>
                                                        <th width="2%" rowspan="3">Latitude</th>
                                                        <th width="2%" rowspan="3">Longitude</th>
                                                    </tr>
                                                    <tr>
                                                      <th width="12%" rowspan="2">Kecamatan</th>
                                                      <th width="11%" rowspan="2">Kelurahan/Desa</th>
                                                      <th width="3%">Jumlah Tersedia</th>
                                                      <th width="3%">Jumlah Terlayani</th>
                                                    </tr>
                                                    <tr>
                                                      <th>Rumah/KK</th>
                                                      <th>Rumah/KK</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
<?php
}
elseif($dataout['jenis_data']=='3'){
    ?>
     <script>
      $(document).ready(function() {
    var rdm='<?php echo $rdm;?>';
    $('.lookup').DataTable({
      "columnDefs": [
            { orderable: true, className: 'reorder', targets: 0 },
            { orderable: false, targets: '_all' }
        ],
    "processing": true,
    "serverSide": true,
    "ajax":{
        url :"serverside/modul/mod_operator/get_spamreg.php", // json datasource
         type: 'POST',
         data: {rdm:rdm}
        
    }
    
    });
    
          });
    </script>
    <h4>DATA SPAM REGIONAL</h4>
    <div class="table-responsive">
                                            <table width="100%" class="lookup nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                      <th>No. Urut</th>
                                                    
                                                        <th>Kota/Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan/Desa</th>
                                                        <th>Nama SPAM</th>
                                                        <th>Nama Pengelola</th>
                                                        <th>Tahun Pembangunan</th>
                                                        <th>Jumlah Layanan</th>
                                                        <th>Jumlah Pemanfaat</th>
                                                        <th>Kapasitas Produksi(Liter/Detik)</th>
                                                        <th>Kapasitas Terpakai(Liter/Detik)</th>
                                                        <th>Idle Capacity</th>
                                                        <th>Daerah Layanan (Kab/Kota)</th>
                                                        <th>Nama Sumber Air</th>
                                                        <th>Lokasi Unit Produksi</th>
                                                        <th>Status</th>
                                                        <th>Latitude</th>
                                                        <th>Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
    <?php
    }
    elseif($dataout['jenis_data']=='4'){
        ?>
         <script>
          $(document).ready(function() {
        var rdm='<?php echo $rdm;?>';
        $('.lookup').DataTable({
          "columnDefs": [
                { orderable: true, className: 'reorder', targets: 0 },
                { orderable: false, targets: '_all' }
            ],
        "processing": true,
        "serverSide": true,
        "ajax":{
            url :"serverside/modul/mod_operator/get_spamkab.php", // json datasource
             type: 'POST',
             data: {rdm:rdm}
            
        }
        
        });
        
              });
        </script>
        <h4>DATA SPAM KABUPATEN/KOTA</h4>
<div class="table-responsive">
                                            <table width="100%" class="lookup nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                      <th>No. Urut</th>
                                                    
                                                        <th>Kota/Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan/Desa</th>
                                                        <th>Nama SPAM</th>
                                                        <th>Nama Pengelola</th>
                                                        <th>Tahun Pembangunan</th>
                                                        <th>Jumlah Layanan</th>
                                                        <th>Kapasitas Produksi(Liter/Detik)</th>
                                                        <th>Kapasitas Terpakai(Liter/Detik)</th>
                                                        <th>Idle Capacity</th>
                                                        <th>Daerah Layanan (Kab/Kota)</th>
                                                        <th>Nama Sumber Air</th>
                                                        <th>Lokasi Unit Produksi</th>
                                                        <th>Status</th>
                                                        <th>Latitude</th>
                                                        <th>Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
        <?php
        }
        elseif($dataout['jenis_data']=='5'){
            ?>
             <script>
              $(document).ready(function() {
            var rdm='<?php echo $rdm;?>';
            $('.lookup').DataTable({
              "columnDefs": [
                    { orderable: true, className: 'reorder', targets: 0 },
                    { orderable: false, targets: '_all' }
                ],
            "processing": true,
            "serverSide": true,
            "ajax":{
                url :"serverside/modul/mod_operator/get_spamikk.php", // json datasource
                 type: 'POST',
                 data: {rdm:rdm}
                
            }
            
            });
            
                  });
            </script>
            <h4>DATA SPAM IKK</h4>
<div class="table-responsive">
                                        <table width="100%" class="lookup nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                      <th>No. Urut</th>
                                                    
                                                        <th>Kota/Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan/Desa</th>
                                                        <th>Nama SPAM</th>
                                                        <th>Nama Pengelola</th>
                                                        <th>Tahun Pembangunan</th>
                                                        <th>Jum Layanan SR Terpasang (UNIT)</th>
                                                        <th>Jum Layanan SR Aktif (UNIT)</th>
                                                        <th>Kapasitas Produksi(Liter/Detik)</th>
                                                        <th>Kapasitas Terpakai(Liter/Detik)</th>
                                                        <th>Idle Capacity</th>
                                                        <th>Daerah Layanan (Kab/Kota)</th>
                                                        <th>Nama Sumber Air</th>
                                                        <th>Lokasi Unit Produksi</th>
                                                        <th>Status</th>
                                                        <th>Latitude</th>
                                                        <th>Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
            <?php
            }
            elseif($dataout['jenis_data']=='6'){
                ?>
                 <script>
                  $(document).ready(function() {
                var rdm='<?php echo $rdm;?>';
                $('.lookup').DataTable({
                  "columnDefs": [
                        { orderable: true, className: 'reorder', targets: 0 },
                        { orderable: false, targets: '_all' }
                    ],
                "processing": true,
                "serverSide": true,
                "ajax":{
                    url :"serverside/modul/mod_operator/get_spampedesaan.php", // json datasource
                     type: 'POST',
                     data: {rdm:rdm}
                    
                }
                
                });
                
                      });
                </script>
                <h4>DATA SPAM PEDESAAN</h4>
<div class="table-responsive">
                                        <table width="100%" class="lookup nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                      <th>No. Urut</th>
                                                    
                                                        <th>Kota/Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan/Desa</th>
                                                        <th>Nama SPAM</th>
                                                        <th>Pengelola</th>
                                                        <th>Nama Pengelola</th>
                                                        <th>No. HP Pengelola</th>
                                                        <th>Tahun Pembangunan</th>
                                                        <th>Sumber Dana</th>
                                                        <th>Jumlah Layanan</th>
                                                        <th>Kapasitas Produksi(Liter/Detik)</th>
                                                        <th>Kapasitas Terpakai(Liter/Detik)</th>
                                                        <th>Idle Capacity</th>
                                                        <th>Daerah Layanan (Kab/Kota)</th>
                                                        <th>Nama Sumber Air</th>
                                                        <th>Lokasi Unit Produksi</th>
                                                        <th>Status</th>
                                                        <th>Latitude</th>
                                                        <th>Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                <?php
                }
                elseif($dataout['jenis_data']=='7'){
                    ?>
                     <script>
                      $(document).ready(function() {
                    var rdm='<?php echo $rdm;?>';
                    $('.lookup').DataTable({
                      "columnDefs": [
                            { orderable: true, className: 'reorder', targets: 0 },
                            { orderable: false, targets: '_all' }
                        ],
                    "processing": true,
                    "serverSide": true,
                    "ajax":{
                        url :"serverside/modul/mod_operator/get_tpa.php", // json datasource
                         type: 'POST',
                         data: {rdm:rdm}
                        
                    }
                    
                    });
                    
                          });
                    </script>
                    <h4>DATA TPA</h4>
                    <div class="table-responsive">
                                            <table width="100%" class="lookup nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                      <th rowspan="2">No. Urut</th>
                                                    <th rowspan="2">Kota/Kabupaten</th>
                                                        <th colspan="2">Lokasi</th>
                                                        <th rowspan="2">Nama TPA</th>
                                                        <th rowspan="2">Pengelola</th>
                                                        <th rowspan="2">Sistem Operasional</th>
                                                        <th rowspan="2">Kapasitas Layanan (Ton/Hari)</th>
                                                        <th rowspan="2">Kapsitas Terpakai</th>
                                                        <th rowspan="2">Idle Capacity</th>
                                                        <th rowspan="2">Sampah Masuk (TON/Tahun)</th>
                                                        <th rowspan="2">Sampah Masuk Landfill (TON/Tahun)</th>
                                                        <th rowspan="2">Tahun Dibangun</th>
                                                        <th rowspan="2">Sumber Dana</th>
                                                        <th rowspan="2">Jumlah Truk Yang Dimiliki</th>
                                                        <th rowspan="2">Jumlah ARM Roll</th>
                                                        <th rowspan="2">Jumlah Alat Berat</th>
                                                        <th rowspan="2">Latitude</th>
                                                        <th rowspan="2">Longitude</th>
                                                    </tr>
                                                    <tr>
                                                      <th>Kecamatan</th>
                                                      <th>Kelurahan/Desa</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                    <?php
                    }
                    elseif($dataout['jenis_data']=='8'){
                        ?>
                         <script>
                          $(document).ready(function() {
                        var rdm='<?php echo $rdm;?>';
                        $('.lookup').DataTable({
                          "columnDefs": [
                                { orderable: true, className: 'reorder', targets: 0 },
                                { orderable: false, targets: '_all' }
                            ],
                        "processing": true,
                        "serverSide": true,
                        "ajax":{
                            url :"serverside/modul/mod_operator/get_tpst.php", // json datasource
                             type: 'POST',
                             data: {rdm:rdm}
                            
                        }
                        
                        });
                        
                              });
                        </script>
                        <h4>DATA TPST-TPS3R</h4>
<div class="table-responsive">
                                            <table width="100%" class="lookup nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                      <th>No. Urut</th>
                                                    <th>Kota/Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan/Desa</th>
                                                        <th>Nama TPST/TPS3R</th>
                                                        <th>Jenis</th>
                                                        <th>Lokasi</th>
                                                        <th>Aktifitas Pengolahan Sampah</th>
                                                        <th>Sampah Masuk (TON/Tahun)</th>
                                                        <th>Sampah Terkelola (TON/Tahun)</th>
                                                        <th>Tahun Dibangun</th>
                                                        <th>Sumber Dana</th>
                                                        <th>Status Operasional</th>
                                                        <th>Sarana Dan Prasarana</th>
                                                        <th>Jumlah Sarpras</th>
                                                        <th>Latitude</th>
                                                        <th>Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                        <?php
                        }
                        elseif($dataout['jenis_data']=='9'){
                            ?>
                             <script>
                              $(document).ready(function() {
                            var rdm='<?php echo $rdm;?>';
                            $('.lookup').DataTable({
                              "columnDefs": [
                                    { orderable: true, className: 'reorder', targets: 0 },
                                    { orderable: false, targets: '_all' }
                                ],
                            "processing": true,
                            "serverSide": true,
                            "ajax":{
                                url :"serverside/modul/mod_operator/get_tps.php", // json datasource
                                 type: 'POST',
                                 data: {rdm:rdm}
                                
                            }
                            
                            });
                            
                                  });
                            </script>
                            <h4>DATA TPS</h4>
                            <div class="table-responsive">
                                            <table width="100%" class="lookup nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                      <th>No. Urut</th>
                                                   
                                                        <th>Kota/Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan/Desa</th>
                                                        <th>Nama TPS</th>
                                                        <th>Latitude</th>
                                                        <th>Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                            <?php
                            }
                            elseif($dataout['jenis_data']=='10'){
                                ?>
                                 <script>
                                  $(document).ready(function() {
                                var rdm='<?php echo $rdm;?>';
                                $('.lookup').DataTable({
                                  "columnDefs": [
                                        { orderable: true, className: 'reorder', targets: 0 },
                                        { orderable: false, targets: '_all' }
                                    ],
                                "processing": true,
                                "serverSide": true,
                                "ajax":{
                                    url :"serverside/modul/mod_operator/get_kumuhdibawah10.php", // json datasource
                                     type: 'POST',
                                     data: {rdm:rdm}
                                    
                                }
                                
                                });
                                
                                      });
                                </script>
                                <h4>DATA KUMUH DIBAWAH 10 Ha</h4>
    <div class="table-responsive">
                                          <table width="100%" class="lookup nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                              <tr>
                                                <th rowspan="2">No. Urut</th>
                                                <th rowspan="2">Kota/Kabupaten</th>
                                                <th rowspan="2">Kecamatan</th>
                                                <th rowspan="2">Kelurahan/Desa</th>
                                                <th colspan="3">Target</th>
                                                <th colspan="3">Luas Penanganan (Ha)</th>
                                                <th rowspan="2">Total Luas Penanganan</th>
                                                <th rowspan="2">Luas Kumuh Tahun 2023 (Ha)</th>
                                              </tr>
                                              <tr>
                                                <th>No. SK Kumuh</th>
                                                <th>Lokasi (LK/RT)</th>
                                                <th>Luas  Kumuh</th>
                                                <th>2020</th>
                                                <th>2021</th>
                                                <th>2022</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                <?php
                                }
                                elseif($dataout['jenis_data']=='11'){
                                    ?>
                                     <script>
                                      $(document).ready(function() {
                                    var rdm='<?php echo $rdm;?>';
                                    $('.lookup').DataTable({
                                      "columnDefs": [
                                            { orderable: true, className: 'reorder', targets: 0 },
                                            { orderable: false, targets: '_all' }
                                        ],
                                    "processing": true,
                                    "serverSide": true,
                                    "ajax":{
                                        url :"serverside/modul/mod_operator/get_kumuhdiatas10.php", // json datasource
                                         type: 'POST',
                                         data: {rdm:rdm}
                                        
                                    }
                                    
                                    });
                                    
                                          });
                                    </script>
                                    <h4>DATA KUMUH DIATAS 10 Ha</h4>
                                     <div class="table-responsive">
                                          <table width="100%" class="lookup nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                              <tr>
                                                <th rowspan="2">No. Urut</th>
                                                <th rowspan="2">Kota/Kabupaten</th>
                                                <th rowspan="2">Kecamatan</th>
                                                <th rowspan="2">Kelurahan/Desa</th>
                                                <th colspan="3">Target</th>
                                                <th colspan="3">Luas Penanganan (Ha)</th>
                                                <th rowspan="2">Total Luas Penanganan</th>
                                                <th rowspan="2">Luas Kumuh Tahun 2023 (Ha)</th>
                                              </tr>
                                              <tr>
                                                <th>No. SK Kumuh</th>
                                                <th>Lokasi (LK/RT)</th>
                                                <th>Luas  Kumuh</th>
                                                <th>2020</th>
                                                <th>2021</th>
                                                <th>2022</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                    <?php
                                    }
                                    elseif($dataout['jenis_data']=='12'){
                                        ?>
                                         <script>
                                          $(document).ready(function() {
                                        var rdm='<?php echo $rdm;?>';
                                        $('.lookup').DataTable({
                                          "columnDefs": [
                                                { orderable: true, className: 'reorder', targets: 0 },
                                                { orderable: false, targets: '_all' }
                                            ],
                                        "processing": true,
                                        "serverSide": true,
                                        "ajax":{
                                            url :"serverside/modul/mod_operator/get_perumahan.php", // json datasource
                                             type: 'POST',
                                             data: {rdm:rdm}
                                            
                                        }
                                        
                                        });
                                        
                                              });
                                        </script>
<h4>DATA PERUMAHAN</h4>
<div class="table-responsive">
                                            <table width="100%" class="lookup nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                      <th rowspan="3">No. Urut</th>
                                                      <th rowspan="3">Kota/Kabupaten</th>
                                                      <th rowspan="3">Kecamatan</th>
                                                      <th rowspan="3">Kelurahan</th>
                                                      <th rowspan="3"> Nama Perumahan</th>
                                                      <th rowspan="3">Lokasi</th>
                                                      <th rowspan="3">Jumlah Unit Rumah</th>
                                                      <th rowspan="3">Luas Lahan Perumahan</th>
                                                      <th colspan="2">Pengembang</th>
                                                      <th colspan="9">Prasarana sarana dan utilitas</th>
                                                      <th rowspan="3">Persentase PSU</th>
                                                      <th rowspan="3">Latitude</th>
                                                      <th rowspan="3">Longitude</th>
                                                    </tr>
                                                    <tr>
                                                      <th rowspan="2">Nama Pengembang</th>
                                                      <th rowspan="2">Pengembang</th>
                                                      <th colspan="5">Prasarana</th>
                                                      <th colspan="2">Sarana</th>
                                                      <th colspan="2">Utilitas</th>
                                                    </tr>
                                                    <tr>
                                                    <th>Jalan (Dengan Perkerasan)</th>
                                                        <th>Drainase</th>
                                                        <th>Air Limbah</th>
                                                        <th>Persampahan</th>
                                                        <th>Air Minum</th>
                                                        <th>Rumah Ibadah</th>
                                                        <th>RTH/RTP</th>
                                                        <th>Jaringan Listrik</th>
                                                        <th>Jaringan Telepon</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php
                                        }
                                        elseif($dataout['jenis_data']=='13'){
                                            ?>
                                             <script>
                                              $(document).ready(function() {
                                            var rdm='<?php echo $rdm;?>';
                                            $('.lookup').DataTable({
                                              "columnDefs": [
                                                    { orderable: true, className: 'reorder', targets: 0 },
                                                    { orderable: false, targets: '_all' }
                                                ],
                                            "processing": true,
                                            "serverSide": true,
                                            "ajax":{
                                                url :"serverside/modul/mod_operator/get_rtlh1.php", // json datasource
                                                 type: 'POST',
                                                 data: {rdm:rdm}
                                                
                                            }
                                            
                                            });
                                            
                                                  });
                                            </script>
                                            <h4>DATA RTLH</h4>
<div class="table-responsive">
                                            <table width="100%" class="lookup nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                      <th rowspan="2">No. Urut</th>
                                                      <th rowspan="2">Kota/Kabupaten</th>
                                                      <th rowspan="2">Kecamatan</th>
                                                      <th rowspan="2">Desa/Kelurahan</th>
                                                      <th colspan="2">Jumlah Rumah</th>
                                                      <th colspan="2">Kegiatan Penanganan</th>
                                                      <th colspan="3">Jumlah Penanganan RTLH(Rumah)</th>
                                                      <th rowspan="2">Total Penanganan(Rumah)</th>
                                                      <th rowspan="2">Capaian (%)</th>
                                                      <th rowspan="2">Jumlah Rumah Layak Huni</th>
                                                      <th rowspan="2">Persentase Rumah Layak Huni</th>
                                                      <th rowspan="2">Data RTLH 2023</th>
                                                    </tr>
                                                    <tr>
                                                    <th>Total Rumah</th>
                                                        <th>RTLH</th>
                                                        <th>Program/Kegiatan</th>
                                                        <th>Sumber Dana</th>
                                                        <th>2020</th>
                                                        <th>2021</th>
                                                        <th>2022</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                            <?php
                                            }
                                            ?>

