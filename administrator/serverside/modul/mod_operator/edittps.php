
<?php
include "../../../config/koneksi_li.php";
header('Content-Type: application/json');
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
    mysqli_query($koneksi,"UPDATE sampah_layanan_tps_temp SET latitude='" . $input['latitude'] . "'
    ,longitude='" . $input['longitude'] . "'
    WHERE nomor_urut='" . $input['nomor_urut'] . "'");
} 
echo json_encode($input);
?>