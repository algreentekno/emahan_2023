<?php
include "../config/koneksi_li.php";
?>
<script type="text/javascript">
 
(function() {
window.onload = function() {
var map;
 var locations = [
    <?php
$sql_lokasi="select Id_iplt,latitude,longitude
from air_limbah_iplt where  tahun_data='2023'";
$result=mysqli_query($koneksi,$sql_lokasi);
// ambil nama,lat dan lon dari table lokasi dengan menggunakan mysql_fetch_object, sesuaikan file nya yg ditabel.
while($data=mysqli_fetch_array($result)){
?>
['<?php echo $data['Id_iplt'];?>', '<?php echo $data['latitude'];?>', '<?php echo $data['longitude'];?>'],
<?php
}
?>
];
 
//Parameter Google maps
var options = {
zoom: 8, //level zoomin peta
//posisi tengah peta, Kab. Pidie
center: new google.maps.LatLng(-4.3744228,105.1939337),
mapTypeId: google.maps.MapTypeId.ROADMAP
};
 
// Buat peta di
var map = new google.maps.Map(document.getElementById('map'), options);
// Tambahkan Marker
 
var infowindow = new google.maps.InfoWindow();
 
var marker, i;
/* kode untuk menampilkan banyak marker */
for (i = 0; i < locations.length; i++) {
marker = new google.maps.Marker({
position: new google.maps.LatLng(locations[i][1], locations[i][2]),
map: map,
icon: 'marker.png'
});

 
google.maps.event.addListener(marker, 'click', (function(marker, i) {
return function() {
var id= locations[i][0];
 
    $.ajax({
      url : "getinfowindows.php",
      data : "id=" +id ,
      success : function(data) {
          infowindow.setContent(data);
          infowindow.open(map, marker);
      }
    });
}
})(marker, i));
}
 
};
})();
 
</script>
<style type="text/css">
#map {
height: 600px;

}
</style>
<div id="map"></div>
