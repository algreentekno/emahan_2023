<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from air_minum_capaian a inner join kota b on a.kode_kota=b.kode_kota where a.Id_air_capaian='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="Id_air_capaian1" value="<?php echo $dataout['Id_air_capaian'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kabupaten</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kota1" placeholder="" value="<?php echo $dataout['nama_kota'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Jumlah Penduduk (KK)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump11" value="<?php echo $dataout['jum_penduduk_kk'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jumlah Penduduk (JIWA)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump21" value="<?php echo $dataout['jumlah_penduduk_jiwa'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jumlah Penduduk Perdesaan (JIWA)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump31" value="<?php echo $dataout['jumlah_penduduk_pedesaan'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jumlah Pendudk Perkotaan (JIWA)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump41" value="<?php echo $dataout['jumlah_penduduk_perkotaan'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Akses Layak (KK)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai21" value="<?php echo $dataout['capaian_2'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jaringan Perpipaan (SR)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai41" value="<?php echo $dataout['capaian_4'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jaringan Non Perpipaan (KK)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai61" value="<?php echo $dataout['capaian_6'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>

<div class="form-group">
    <label class="form-label" for="default-01">Aman (KK)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai81" value="<?php echo $dataout['capaian_8'];?>" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>



