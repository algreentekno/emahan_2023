
<?php
include "../../../config/koneksi_li.php";
header('Content-Type: application/json');
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
    mysqli_query($koneksi,"UPDATE air_limbah_spald_temp SET tahun_pembangunan='" . $input['tahun_pembangunan'] . "' 
    ,jum_sambungan_rencana='" . $input['jum_sambungan_rencana'] . "'
    ,jum_sambungan_realisasi='" . $input['jum_sambungan_realisasi'] . "'
    ,jumlah_pemanfaat='" . $input['jumlah_pemanfaat'] . "'
    ,jenis_sarpras='" . $input['jenis_sarpras'] . "'
    ,status='" . $input['status'] . "'
    ,kondisi_infrastruktur='" . $input['kondisi_infrastruktur'] . "'
    ,sumber_dana='" . $input['sumber_dana'] . "'
    ,latitude='" . $input['latitude'] . "'
    ,longitude='" . $input['longitude'] . "'
    WHERE nomor_urut='" . $input['nomor_urut'] . "'");
} 
echo json_encode($input);
?>