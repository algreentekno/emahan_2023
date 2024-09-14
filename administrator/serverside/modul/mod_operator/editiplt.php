
<?php
include "../../../config/koneksi_li.php";
header('Content-Type: application/json');
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
    mysqli_query($koneksi,"UPDATE air_limbah_iplt_temp SET pengelola='" . $input['pengelola'] . "'
    ,kapasitas_rencana='" . $input['kapasitas_rencana'] . "'
    ,kapasitas_realisasi='" . $input['kapasitas_realisasi'] . "'
    ,jum_tersedia='" . $input['jum_tersedia'] . "'
    ,jum_terlayani='" . $input['jum_terlayani'] . "'
    ,sistem_unit='" . $input['sistem_unit'] . "'
    ,status_operasional='" . $input['status_operasional'] . "'
    ,tahun_pembangunan='" . $input['tahun_pembangunan'] . "'
    ,sumber_dana='" . $input['sumber_dana'] . "'
    ,tahun_optimalisasi='" . $input['tahun_optimalisasi'] . "'
    ,sumber_dana_optimalisasi='" . $input['sumber_dana_optimalisasi'] . "'
    ,jum_mobil_sedot_tinja='" . $input['jum_mobil_sedot_tinja'] . "'
    ,status_kondisi_mobil='" . $input['status_kondisi_mobil'] . "'
    ,mou_pengangkut='" . $input['mou_pengangkut'] . "'
    ,latitude='" . $input['latitude'] . "'
    ,longitude='" . $input['longitude'] . "'
    WHERE nomor_urut='" . $input['nomor_urut'] . "'");
} 
echo json_encode($input);
?>