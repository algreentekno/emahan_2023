<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Potensi Air Baku</span></a></div></p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                    <?php
                                    if($_SESSION['level']=='0' OR $_SESSION['level']=='3'){
                                        ?>
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-warning" style="color: black;" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modaltambah"><em class="icon ni ni-note-add-fill-c"></em><span>Tambah Data</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- .toggle-expand-content -->
                                        </div><!-- .toggle-wrap -->
                                    </div><!-- .nk-block-head-content -->
                                    <?php
                                    }
                                    ?>
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                <!-- ------------------------------------------------------------------------------- -->    
                                    
                                    
                                <div class="nk-block nk-block-lg">
                                    
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                        <?php
                                    if($_SESSION['level']=='0' OR $_SESSION['level']=='1'){
                                        ?>
                                         <div class="form-control-wrap mb-3">
                                                                <select class="form-select js-select2" data-ui="md" id="outlined-select1">
                                                                   
                                                                    <?php
                                                                    $tampil=mysqli_query($koneksi,"SELECT * FROM kota order by Id");
                                                                    while ($jml=mysqli_fetch_array($tampil)){
                                                                    ?>
                                                                    <option value="<?php echo $jml['kode_kota'];?>"><?php echo $jml['nama_kota'];?></option>
                                                                    <?php
                                                                    }
                                                                    ?>    
                                                                </select>
                                                                <label class="form-label-outlined" for="outlined-select">FILTER KABUPATEN</label>
                                                            </div>
                                         <div class="form-control-wrap">
                                                                <select class="form-select js-select2" data-ui="md" id="outlined-select2">
                                                                    
                                                                    <?php
                                                                    $now=date('Y');
                                                                    $tahundata1=$tahundata;
                                                                    for ($a=$tahundata1;$a<=$now;$a++)
                                                                    {
                                                                    echo "<option value='".$a."'>".$a."</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <label class="form-label-outlined" for="outlined-select">FILTER TAHUN DATA</label>
                                                            </div>
                                        <?php
                                    }else{
                                        ?>
                                           <!-- ----------------------------------------------------------------- --> 
                                             <div class="form-control-wrap">
                                                                <select class="form-select js-select2" data-ui="md" id="outlined-select">
                                                                   
                                                                    <?php
                                                                    $now=date('Y');
                                                                    $tahundata1=$tahundata;
                                                                    for ($a=$tahundata1;$a<=$now;$a++)
                                                                    {
                                                                    echo "<option value='".$a."'>".$a."</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <label class="form-label-outlined" for="outlined-select">FILTER TAHUN DATA</label>
                                                            </div>
                                            <!-- ----------------------------------------------------------------- --> 
                                        <?php
                                    }
                                    ?>    <div class="table-responsive">
                                            <table width="100%" class="datatable-init-exportpotensiairbaku nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                    <th>Kota/Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan</th>
                                                        <th>Nama Sumber Air</th>
                                                        <th>Debit (l/dtk)</th>
                                                       
                                                        
                                                        <th>Foto</th>
                                                        <th>Titik Kordinat</th>
                                                       
                                                        <th width="6%"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div><!-- .card-preview -->
                                </div> <!-- nk-block -->
                                  
                                    
                                <!-- ------------------------------------------------------------------------------- -->    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- ------------------------------------------------------------------------------- -->

<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modaltambah">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
            </div>
            <div class="modal-body">
                <p><div class="form-group">
    <label class="form-label" for="default-01">Nama Kabupaten/Kota</label>
    <div class="form-control-wrap">
    <select class="form-select js-select2" id="kode_kota" data-search="on">
    <option value="">PILIH KABUPATEN</option>
    <?php
    if($_SESSION['level']=='0' OR $_SESSION['level']=='1'){
    $tampil=mysqli_query($koneksi,"SELECT * FROM kota order by Id");
    }else{
        $tampil=mysqli_query($koneksi,"SELECT * FROM kota where kode_kota='$_SESSION[kodekota]' order by Id");  
    }
    while ($jml=mysqli_fetch_array($tampil)){
    ?>
    <option value="<?php echo $jml['kode_kota'];?>"><?php echo $jml['nama_kota'];?></option>
    <?php
    }
    ?>    
</select>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kecamatan</label>
    <div class="form-control-wrap">
    <select class="form-select js-select2" id="kode_kec" data-search="on">
    <option value="">PILIH KECAMATAN</option>
</select>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kelurahan</label>
    <div class="form-control-wrap">
    <select class="form-select js-select2" id="kode_kel" data-search="on">
    <option value="">PILIH KELURAHAN</option>
</select>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Sumber Air</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nama_sumber_air" placeholder="">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Debit Air</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="debit" placeholder="">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Foto</label>
    <div class="form-control-wrap">
        <input type="file" class="form-control" id="foto" placeholder="">
    </div>
</div>
<div id="map2"></div>
<div class="form-group">
    <label class="form-label" for="default-01">Latitude</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="latitude2" placeholder="">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Longitude</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="longitude2" placeholder="">
    </div>
</div>
<style type="text/css">
#map2 {
height: 400px;

}
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJ7ATf0VMQX0nJS_-tI6oIk80R_3H2pOI&callback=initMap" type="text/javascript"></script>

<script type="text/javascript">


var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("latitude2").value = posisiTitik.lat();
    document.getElementById("longitude2").value = posisiTitik.lng();
    
}

//* Fungsi untuk mendapatkan nilai latitude longitude
function updateMarkerPosition(latLng) {
document.getElementById('latitude2').value = [latLng.lat()]
document.getElementById('longitude2').value = [latLng.lng()]
}
 
var map = new google.maps.Map(document.getElementById('map2'), {
zoom: 11,
// Nilai 5.381281, 95.954826 adalah Nilai Latitude dan Longitude titik kordinat Kota Sigli
center: new google.maps.LatLng(-4.3744228,105.1939337),
mapTypeId: google.maps.MapTypeId.ROADMAP 
});
//posisi awal marker
var latLng = new google.maps.LatLng(-4.3744228,105.1939337);
 
/* buat marker yang bisa di drag lalu
panggil fungsi updateMarkerPosition(latLng)
dan letakan posisi terakhir di id=latitude dan id=longitude
*/
var marker = new google.maps.Marker({
position : latLng,
title : 'lokasi',
map : map,
draggable : true,
icon: 'marker.png'
});
 
updateMarkerPosition(latLng);
google.maps.event.addListener(marker, 'drag', function() {
// ketika marker di drag, otomatis nilai latitude dan longitude
//menyesuaikan dengan posisi marker
updateMarkerPosition(marker.getPosition());
});

google.maps.event.addListener(map, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

</script>

</p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"><a href="#" class="btn btn-success tambah"><em class="icon ni ni-save"></em> Simpan</a></span>
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------------ -->
<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modaledit">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
            </div>
            <div class="modal-body">
                <p><div class="hasil-dataeditpotensi"></div></p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"><span class="sub-text"><a href="#" class="btn btn-success edit"><em class="icon ni ni-save"></em> Simpan</a></span>
            </span>
            </div>
        </div>
    </div>
</div>
<!-- --------------------------------------------------------------- -->
<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modallihat">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Lihat Data</h5>
            </div>
            <div class="modal-body">
                <p><div class="hasil-datadetail"></div></p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"></span>
            </div>
        </div>
    </div>
</div>