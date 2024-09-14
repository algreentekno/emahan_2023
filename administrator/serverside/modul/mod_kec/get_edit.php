<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from kecamatan where kode_kec='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<script>
 $(function(){
  $('#kode_kota1').select2({
    dropdownParent: $('#modaledit')
  });
}); 
</script>
<input type="hidden" class="form-control" id="id1" value="<?php echo $dataout['kode_kec'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kabupaten/Kota</label>
    <div class="form-control-wrap">
    <select class="form-select js-select2" id="kode_kota1" data-search="on">
    <?php
                                    
                                    $sql= "SELECT * FROM kota  ORDER BY kode_kota ASC"; 
                                    $hasil = mysqli_query($koneksi,$sql);
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    if ($dataout['kode_kota']==$data['kode_kota']){
                                    ?>

                                    <option value="<?php echo"$data[kode_kota]";?>" selected><?php echo"$data[nama_kota]";?></option>

                                    <?php 
                                        }else{
                                    ?>
                                     <option value="<?php echo"$data[kode_kota]";?>"><?php echo"$data[nama_kota]";?></option>
                                    <?php
                                        }
                                    }
                                        ?>
    </select>    
                                    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Kode Kecamatan</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kec1" placeholder="" value="<?php echo $dataout['kode_kec'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kecamatan</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nama_kecamatan1" placeholder="" value="<?php echo $dataout['nama_kecamatan'];?>">
    </div>
</div>

