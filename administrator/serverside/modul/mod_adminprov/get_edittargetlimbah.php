<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from air_limbah_akses_target a inner join kota b on a.kode_kota=b.kode_kota where a.Id_limbah_akses_target='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="Id_limbahakses111" value="<?php echo $dataout['Id_limbah_akses_target'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kabupaten</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kota111" placeholder="" value="<?php echo $dataout['nama_kota'];?>" readonly>
    </div>
</div>
<!--
<div class="form-group">
    <label class="form-label" for="default-01">Jumlah Penduduk (KK)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump1111" value="<?php //echo $dataout['jum_penduduk_kk'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jumlah Penduduk (JIWA)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump2111" value="<?php //echo $dataout['jumlah_penduduk_jiwa'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jumlah Penduduk Perdesaan (JIWA)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump3111" value="<?php //echo $dataout['jumlah_penduduk_pedesaan'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jumlah Pendudk Perkotaan (JIWA)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump4111" value="<?php //echo $dataout['jumlah_penduduk_perkotaan'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>
-->
<div class="form-group">
    <label class="form-label" for="default-01">Capaian Akes Aman (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai1111" value="<?php echo $dataout['capaian_1'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Capaian Akes Sanitasi Layak Sendiri (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai2111" value="<?php echo $dataout['capaian_2'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Capaian Akes Sanitasi Layak Bersama (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai3111" value="<?php echo $dataout['capaian_3'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Capaian Akes Sanitasi Belum Layak (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai4111" value="<?php echo $dataout['capaian_4'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Capaian BABS Tertutup (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai5111" value="<?php echo $dataout['capaian_5'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Capaian BABS Terbuka (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai6111" value="<?php echo $dataout['capaian_6'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>



