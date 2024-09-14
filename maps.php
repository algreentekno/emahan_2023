<?php
if ($_GET['module']=='petasebaran') {
?>
<style type="text/css">
#map {
height: 400px;

}
</style>

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
    document.getElementById("latitude").value = posisiTitik.lat();
    document.getElementById("longitude").value = posisiTitik.lng();
    
}

//* Fungsi untuk mendapatkan nilai latitude longitude
function updateMarkerPosition(latLng) {
document.getElementById('latitude').value = [latLng.lat()]
document.getElementById('longitude').value = [latLng.lng()]
}
 
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 8,
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
draggable : true
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
<?php
}
?>