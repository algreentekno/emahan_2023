
<?php
include "../../../config/koneksi_li.php";
header('Content-Type: application/json');
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
    mysqli_query($koneksi,"UPDATE sampah_layanan_tpa_temp SET pengelola='" . $input['pengelola'] . "'
    ,sistem_operasional='" . $input['sistem_operasional'] . "'
    ,kapasitas_layanan='" . $input['kapasitas_layanan'] . "'
    ,kapasitas_terpakai='" . $input['kapasitas_terpakai'] . "'
    ,idle_capacity='" . $input['idle_capacity'] . "'
    ,sampah_masuk='" . $input['sampah_masuk'] . "'
    ,sampah_masuk_landfill='" . $input['sampah_masuk_landfill'] . "'
    ,tahun_dibangun='" . $input['tahun_dibangun'] . "'
    ,sumber_dana='" . $input['sumber_dana'] . "'
    ,jum_truk='" . $input['jum_truk'] . "'
    ,jum_armroll='" . $input['jum_armroll'] . "'
    ,jum_alatberat='" . $input['jum_alatberat'] . "'
    ,latitude='" . $input['latitude'] . "'
    ,longitude='" . $input['longitude'] . "'
    WHERE nomor_urut='" . $input['nomor_urut'] . "'");
} 
echo json_encode($input);
?>