<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from tahun_data where id_tahun='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="id_tahun1" value="<?php echo $dataout['id_tahun'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Tahun Data</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="tahun_data1" placeholder="" value="<?php echo $dataout['tahun_data'];?>">
    </div>
</div>


