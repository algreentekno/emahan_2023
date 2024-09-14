<?php
include "../../../config/koneksi_li.php";
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJ7ATf0VMQX0nJS_-tI6oIk80R_3H2pOI&callback=initMap" type="text/javascript"></script>
<style type="text/css">
#map1 {
height: 400px;

}
</style>
<script type="text/javascript">
//* Fungsi untuk mendapatkan nilai latitude longitude
 
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
 
var map = new google.maps.Map(document.getElementById('map1'), {
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
draggable : false,
icon: 'marker.png'
});
 

</script>
<div id="map1"></div>
