<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from sampah_akses_target a inner join kota b on a.kode_kota=b.kode_kota where a.Id_sampah_akses_target='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="Id_sampah_akses_target1s" value="<?php echo $dataout['Id_sampah_akses_target'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kabupaten</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kota1s" placeholder="" value="<?php echo $dataout['nama_kota'];?>" readonly>
    </div>
</div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Timbulan Sampah (TON/Tahun) (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai11s" value="<?php echo $dataout['capaian_1'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Penanganan Sampah (TON/Tahun) (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai21s" value="<?php echo $dataout['capaian_2'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Prosentase Penanganan (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai31s" value="<?php echo $dataout['capaian_3'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Pengurangan Sampah (TON/Tahun) (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai41s" value="<?php echo $dataout['capaian_4'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Prosentase Pengurangan (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai51s" value="<?php echo $dataout['capaian_5'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>



