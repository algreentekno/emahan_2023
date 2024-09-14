
<?php
include "../../../config/koneksi_li.php";
header('Content-Type: application/json');
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
    mysqli_query($koneksi,"UPDATE air_minum_pedesaan_temp SET nama_pengelola='" . $input['nama_pengelola'] . "'
    ,no_hp_pengelola='" . $input['no_hp_pengelola'] . "'
    ,pengelola='" . $input['pengelola'] . "'
    ,tahun_pembangunan='" . $input['tahun_pembangunan'] . "'
    ,sumber_dana='" . $input['sumber_dana'] . "'
    ,jum_layanan='" . $input['jum_layanan'] . "'
    ,kapasitas_prod='" . $input['kapasitas_prod'] . "'
    ,kapasitas_terpakai='" . $input['kapasitas_terpakai'] . "'
    ,idle_capacity='" . $input['idle_capacity'] . "'
    ,daerah_layanan='" . $input['daerah_layanan'] . "'
    ,nama_sumber_air='" . $input['nama_sumber_air'] . "'
    ,lokasi_unit_prod='" . $input['lokasi_unit_prod'] . "'
    ,status='" . $input['status'] . "'
    ,latitude='" . $input['latitude'] . "'
    ,longitude='" . $input['longitude'] . "'
    WHERE nomor_urut='" . $input['nomor_urut'] . "'");
} 
echo json_encode($input);
?>