<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from rtlh where Id_rtlh='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<script>  
 $(document).ready(function(){  
$("#fupload").change(function(){
               var allowedTypes = ['application/pdf'];
               var file = this.files[0];
               var fileType = file.type;
			   var ukuranfile=file.size;
               if(!allowedTypes.includes(fileType)){
                   
				   swal.fire("", "Silakan pilih file yang valid (PDF)", "error"); 
                   $("#fupload").val('');
                   return false;
               }else if(ukuranfile > 2000000 ){

                  swal.fire("", "Ukuran File Kebesaran, Maksimal 2 MB", "error"); 
                  $("#fupload").val('');
                  return false;

}
           });

})  
 </script> 
 		<script>  
 $(document).ready(function(){  
$("#fupload1").change(function(){
               var allowedTypes = ['application/pdf'];
               var file = this.files[0];
               var fileType = file.type;
			   var ukuranfile=file.size;
               if(!allowedTypes.includes(fileType)){
                   
				   swal.fire("", "Silakan pilih file yang valid (PDF)", "error"); 
                   $("#fupload1").val('');
                   return false;
               }else if(ukuranfile > 2000000 ){

                  swal.fire("", "Ukuran File Kebesaran, Maksimal 2 MB", "error"); 
                  $("#fupload1").val('');
                  return false;

}
           });

})  
 </script> 	
 		<script>  
 $(document).ready(function(){  
$("#fupload2").change(function(){
               var allowedTypes = ['application/pdf'];
               var file = this.files[0];
               var fileType = file.type;
			   var ukuranfile=file.size;
               if(!allowedTypes.includes(fileType)){
                   
				   swal.fire("", "Silakan pilih file yang valid (PDF)", "error"); 
                   $("#fupload2").val('');
                   return false;
               }else if(ukuranfile > 2000000 ){

                  swal.fire("", "Ukuran File Kebesaran, Maksimal 2 MB", "error"); 
                  $("#fupload2").val('');
                  return false;

}
           });

})  
 </script> 			
<input type="hidden" class="form-control" id="Id_rtlh" value="<?php echo $dataout['Id_rtlh'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Nomor. KTP</label>
    <div class="form-control-wrap">
    <input type="text" class="form-control" id="no_ktp" value="<?php echo $dataout['no_ktp'];?>" readonly >
   
                                                                 </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kepala Keluarga</label>
    <div class="form-control-wrap">
    <input type="text" class="form-control" id="nama_kepala_keluarga" value="<?php echo $dataout['nama_kk'];?>" readonly>
   
                                                                 </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Alamat</label>
    <div class="form-control-wrap">
    <textarea class="form-control" id="alamat" disabled><?php echo $dataout['alamat_rumah'];?></textarea>
   
                                                                 </div>
</div>

<div class="form-group">
    <label class="form-label" for="default-01">Upload Saldo Rekening</label>
    <div class="form-control-wrap">
        <input type="file" class="form-control" id="fupload">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Upload Bukti Pembelian Material</label>
    <div class="form-control-wrap">
        <input type="file" class="form-control" id="fupload1">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Upload Foto Renovasi Rumah 100%</label>
    <div class="form-control-wrap">
        <input type="file" class="form-control" id="fupload2">
    </div>
</div>


