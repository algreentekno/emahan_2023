<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from perumahan where Id_perumahan='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="Id_perumahan" value="<?php echo $dataout['Id_perumahan'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Foto</label>
    <div class="form-control-wrap">
    <input type="file" class="form-control" id="files" value="">
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
function updateMarkerPosition(latLng) {
document.getElementById('latitude').value = [latLng.lat()]
document.getElementById('longitude').value = [latLng.lng()]
}
 
 var locations = [
    <?php
$sql_lokasi="select *
from perumahan where Id_perumahan='$_POST[Id]'";
$result=mysqli_query($koneksi,$sql_lokasi);
// ambil nama,lat dan lon dari table lokasi dengan menggunakan mysql_fetch_object, sesuaikan file nya yg ditabel.
while($data=mysqli_fetch_array($result)){
?>
['<?php echo $data['Id_perumahan'];?>', '<?php echo $data['latitude'];?>', '<?php echo $data['longitude'];?>'],
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
 
updateMarkerPosition(latLng);
google.maps.event.addListener(marker, 'drag', function() {
// ketika marker di drag, otomatis nilai latitude dan longitude
//menyesuaikan dengan posisi marker
updateMarkerPosition(marker.getPosition());
});
</script>
<div class="form-group">
    <label class="form-label" for="default-01">Latitude</label>
    <div class="form-control-wrap">
    <input type="text" class="form-control" id="latitude" value="">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Longitude</label>
    <div class="form-control-wrap">
    <input type="text" class="form-control" id="longitude" value="">
    </div>
</div>