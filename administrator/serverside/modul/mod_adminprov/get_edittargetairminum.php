<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from air_minum_capaian_target a inner join kota b on a.kode_kota=b.kode_kota where a.Id_air_capaian_target='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="Id_air_capaian_target189" value="<?php echo $dataout['Id_air_capaian_target'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kabupaten</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kota189" placeholder="" value="<?php echo $dataout['nama_kota'];?>" readonly>
    </div>
</div>
<!--
<div class="form-group">
    <label class="form-label" for="default-01">Jumlah Penduduk (KK)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump1189" value="<?php //echo $dataout['jum_penduduk_kk'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jumlah Penduduk (JIWA)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump2189" value="<?php //echo $dataout['jumlah_penduduk_jiwa'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jumlah Penduduk Perdesaan (JIWA)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump3189" value="<?php //echo $dataout['jumlah_penduduk_pedesaan'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jumlah Pendudk Perkotaan (JIWA)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump4189" value="<?php //echo $dataout['jumlah_penduduk_perkotaan'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>
-->
<div class="form-group">
    <label class="form-label" for="default-01">Akses Layak (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai1189" value="<?php echo $dataout['capaian_1'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jaringan Perpipaan (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai3189" value="<?php echo $dataout['capaian_3'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jaringan Non Perpipaan (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai5189" value="<?php echo $dataout['capaian_5'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Aman (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai7189" value="<?php echo $dataout['capaian_7'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>




