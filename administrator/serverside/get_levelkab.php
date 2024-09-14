<?php
include "../config/koneksi_li.php";
$level=$_POST['level'];
if($level=='0' OR $level=='2'){   
?>
<input type="hidden" class="form-control" id="kode_kota" value="00">
<?php
}else{
?>
<script>
 $(function(){
  $('#kode_kota').select2({
    dropdownParent: $('#modaltambah')
  });
}); 
</script>
<div class="form-group">
    <label class="form-label" for="default-01">Kabupaten/Kota</label>
    <div class="form-control-wrap">
    <select class="form-select js-select2" id="kode_kota" data-search="on">
    <option value="">PILIH KABUPATEN/KOTA</option>
    <?php
    $tampil=mysqli_query($koneksi,"SELECT * FROM kota order by Id");
    while ($jml=mysqli_fetch_array($tampil)){
    ?>
    <option value="<?php echo $jml['kode_kota'];?>"><?php echo $jml['nama_kota'];?></option>
    <?php
    }
    ?> 
</select>
    </div>
</div>
<?php
}
?>