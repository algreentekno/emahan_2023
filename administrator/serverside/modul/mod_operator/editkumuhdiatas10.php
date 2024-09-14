
<?php
include "../../../config/koneksi_li.php";
header('Content-Type: application/json');
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
    mysqli_query($koneksi,"UPDATE kumuh_luas_temp SET luas_kumuh='" . $input['luas_kumuh'] . "'
    ,luas_penanganan_2020='" . $input['luas_penanganan_2020'] . "'
    ,luas_penanganan_2021='" . $input['luas_penanganan_2021'] . "'
    ,luas_penanganan_2022='" . $input['luas_penanganan_2022'] . "'
    ,total_luas_penanganan='" . $input['total_luas_penanganan'] . "'
    ,luas_kumuh_2023='" . $input['luas_kumuh_2023'] . "'
    WHERE nomor_urut='" . $input['nomor_urut'] . "' and klasifikasi_kumuh='2'");
} 
echo json_encode($input);
?>