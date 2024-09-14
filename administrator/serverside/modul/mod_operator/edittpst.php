
<?php
include "../../../config/koneksi_li.php";
header('Content-Type: application/json');
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
    mysqli_query($koneksi,"UPDATE sampah_layanan_tpst_temp SET jenis='" . $input['jenis'] . "'
    ,lokasi='" . $input['lokasi'] . "'
    ,aktifitas='" . $input['aktifitas'] . "'
    ,sampah_masuk='" . $input['sampah_masuk'] . "'
    ,sampah_terkelola='" . $input['sampah_terkelola'] . "'
    ,tahun_pembangunan='" . $input['tahun_pembangunan'] . "'
    ,sumber_dana='" . $input['sumber_dana'] . "'
    ,status='" . $input['status'] . "'
    ,sarana_prasarana='" . $input['sarana_prasarana'] . "'
    ,jum_sarpras='" . $input['jum_sarpras'] . "'
    ,latitude='" . $input['latitude'] . "'
    ,longitude='" . $input['longitude'] . "'
    WHERE nomor_urut='" . $input['nomor_urut'] . "'");
} 
echo json_encode($input);
?>