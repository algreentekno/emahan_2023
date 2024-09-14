<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from rtlh where Id_rtlh='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>

<input type="hidden" class="form-control" id="Id_rtlh" value="<?php echo $dataout['Id_rtlh'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Status Verifikasi</label>
    <div class="form-control-wrap">
    <select class="form-select" id="ket_verifikasi">
                                                            <option value=""> Pilih Salah Satu </option>
                                                            <option value="DIUSULKAN">DIUSULKAN</option>
                                                                    </select>
                                                                 </div>
</div>



