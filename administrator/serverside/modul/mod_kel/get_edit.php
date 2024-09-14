<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from kelurahan where kode_kel='$_POST[Id]'"; 
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
<script>
 $(function(){
  $('#kode_kec1').select2({
    dropdownParent: $('#modaledit')
  });
}); 
</script>
<script language="javascript">
$(document).ready(function() {
	$('#kode_kota1').change(function() { 
		var kode_kota = $("#kode_kota1").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kecamatan.php',
			data: 'kode_kota=' + kode_kota, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kec1').html(response);
                
                
			}
		});
    })
});
</script>
<input type="hidden" class="form-control" id="id1" value="<?php echo $dataout['kode_kel'];?>" required>
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
    <label class="form-label" for="default-01">Nama Kecamatan</label>
    <div class="form-control-wrap">
    <select class="form-select js-select2" id="kode_kec1" data-search="on">
    <?php
                                    
                                    $sql= "SELECT * FROM kecamatan  ORDER BY kode_kec ASC"; 
                                    $hasil = mysqli_query($koneksi,$sql);
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    if ($dataout['kode_kec']==$data['kode_kec']){
                                    ?>

                                    <option value="<?php echo"$data[kode_kec]";?>" selected><?php echo"$data[nama_kecamatan]";?></option>

                                    <?php 
                                        }else{
                                    ?>
                                     <option value="<?php echo"$data[kode_kec]";?>"><?php echo"$data[nama_kecamatan]";?></option>
                                    <?php
                                        }
                                    }
                                        ?>
    </select>    
                                    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Kode Kelurahan/Desa</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kel1" placeholder="" value="<?php echo $dataout['kode_kel'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kelurahan/Desa</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nama_kelurahan1" placeholder="" value="<?php echo $dataout['nama_kelurahan'];?>">
    </div>
</div>

