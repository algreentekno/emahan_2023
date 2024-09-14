<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from air_minum_potensi_air_baku a inner join kota b on a.kode_kota=b.kode_kota inner join kecamatan c on a.kode_kec=c.kode_kec inner join kelurahan d on a.kode_kel=d.kode_kel where a.Id_air_baku='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="Id_air_baku1" value="<?php echo $dataout['Id_air_baku'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kabupaten</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kota1" placeholder="" value="<?php echo $dataout['nama_kota'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kecamatan</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kec1" placeholder="" value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kelurahan</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kel1" placeholder="" value="<?php echo $dataout['nama_kelurahan'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Sumber Air</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nama_sumber_air1" placeholder="" value="<?php echo $dataout['nama_sumber_air'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Debit Air</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="debit1" placeholder="" value="<?php echo $dataout['debit'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Foto</label><br>
    <div class="col-sm-6 col-lg-4">
                                        <div class="gallery card card-bordered">
                                            <a class="gallery-image popup-image" href="../file/<?php echo $dataout['foto'];?>">
                                                <img class="w-100 rounded-top" src="../file/<?php echo $dataout['foto'];?>" alt="">
                                            </a>
                                            
                                        </div>
                                    </div>
    <div class="form-control-wrap">
   
    </div>
</div>
<div id="map"></div>
<style type="text/css">
#map {
height: 400px;

}
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJ7ATf0VMQX0nJS_-tI6oIk80R_3H2pOI&callback=initMap" type="text/javascript"></script>

<script type="text/javascript">
//* Fungsi untuk mendapatkan nilai latitude longitude

 
 var locations = [
    <?php
$sql_lokasi="select *
from air_minum_potensi_air_baku where Id_air_baku='$_POST[Id]'";
$result=mysqli_query($koneksi,$sql_lokasi);
// ambil nama,lat dan lon dari table lokasi dengan menggunakan mysql_fetch_object, sesuaikan file nya yg ditabel.
while($data=mysqli_fetch_array($result)){
?>
['<?php echo $data['Id_air_baku'];?>', '<?php echo $data['latitude'];?>', '<?php echo $data['longitude'];?>'],
<?php
}
?>
];
 
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 14,
// Nilai 5.381281, 95.954826 adalah Nilai Latitude dan Longitude titik kordinat Kota Sigli
center: new google.maps.LatLng(locations[0][1],locations[0][2]),
mapTypeId: google.maps.MapTypeId.ROADMAP 
});
//posisi awal marker
var latLng = new google.maps.LatLng(locations[0][1],locations[0][2]);
 
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
 

</script>
<div class="form-group">
    <label class="form-label" for="default-01">Latitude</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="latitude1" placeholder="" value="<?php echo $dataout['latitude'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Longitude</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="longitude1" placeholder="" value="<?php echo $dataout['longitude'];?>" readonly>
    </div>
</div>



