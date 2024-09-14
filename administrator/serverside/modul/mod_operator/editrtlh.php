
<?php
include "../../../config/koneksi_li.php";
header('Content-Type: application/json');
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
    mysqli_query($koneksi,"UPDATE rtlh_temp SET total_rumah='" . $input['total_rumah'] . "'
    ,rtlh='" . $input['rtlh'] . "'
    ,program='" . $input['program'] . "'
    ,sumber_dana='" . $input['sumber_dana'] . "'
    ,jum_penanganan_2020='" . $input['jum_penanganan_2020'] . "'
    ,jum_penanganan_2021='" . $input['jum_penanganan_2021'] . "'
    ,jum_penanganan_2022='" . $input['jum_penanganan_2022'] . "'
    ,total_penanganan='" . $input['total_penanganan'] . "'
    ,capaian='" . $input['capaian'] . "'
    ,jum_rtlh='" . $input['jum_rtlh'] . "'
    ,persentase_rtlh='" . $input['persentase_rtlh'] . "'
    ,rtlh_2023='" . $input['rtlh_2023'] . "'
    WHERE nomor_urut='" . $input['nomor_urut'] . "'");
} 
echo json_encode($input);
?>