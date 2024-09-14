
<?php
include "../../../config/koneksi_li.php";
header('Content-Type: application/json');
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
    mysqli_query($koneksi,"UPDATE perumahan_temp SET lokasi='" . $input['lokasi'] . "'
    ,jum_unit_rumah='" . $input['jum_unit_rumah'] . "'
    ,luas_lahan_perumahan='" . $input['luas_lahan_perumahan'] . "'
    ,nama_pengembang='" . $input['nama_pengembang'] . "'
    ,pengembang='" . $input['pengembang'] . "'
    ,jalan='" . $input['jalan'] . "'
    ,drainase='" . $input['drainase'] . "'
    ,air_limbah='" . $input['air_limbah'] . "'
    ,persampahan='" . $input['persampahan'] . "'
    ,air_minum='" . $input['air_minum'] . "'
    ,rumah_ibadah='" . $input['rumah_ibadah'] . "'
    ,ruang_terbuka_hijau='" . $input['ruang_terbuka_hijau'] . "'
    ,jaringan_listrik='" . $input['jaringan_listrik'] . "'
    ,jaringan_telpon='" . $input['jaringan_telpon'] . "'
    ,persentase_psu='" . $input['persentase_psu'] . "'
    ,latitude='" . $input['latitude'] . "'
    ,longitude='" . $input['longitude'] . "'
    WHERE nomor_urut='" . $input['nomor_urut'] . "'");
} 
echo json_encode($input);
?>