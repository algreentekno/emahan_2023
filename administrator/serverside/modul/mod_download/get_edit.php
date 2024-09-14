<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from download where id_download='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<script>
 $(function(){
  $('#id_kategoridownload1').select2({
    dropdownParent: $('#modaledit')
  });
}); 
</script>
<input type="hidden" class="form-control" id="id_download1" value="<?php echo $dataout['id_download'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Judul Data</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="judul1" placeholder="" value="<?php echo $dataout['judul'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Kategori Download</label>
    <div class="form-control-wrap">
    <select class="form-select js-select2" id="id_kategoridownload1" data-search="on">
    <?php
                                    
                                    $sql= "SELECT * FROM kategori_download  ORDER BY id_kategoridownload ASC"; 
                                    $hasil = mysqli_query($koneksi,$sql);
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    if ($dataout['id_kategoridownload']==$data['id_kategoridownload']){
                                    ?>

                                    <option value="<?php echo"$data[id_kategoridownload]";?>" selected><?php echo"$data[nama_kategori]";?></option>

                                    <?php 
                                        }else{
                                    ?>
                                     <option value="<?php echo"$data[id_kategoridownload]";?>"><?php echo"$data[nama_kategori]";?></option>
                                    <?php
                                        }
                                    }
                                        ?>
    </select>    
                                    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">File</label>
    <br><small>* Untuk merubah data, silahkan upload data baru</small><br>
    <div class="form-control-wrap">
    <input type="file" class="form-control" id="nama_file1">
    </div>
</div>
