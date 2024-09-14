<style>
.column {
  float: left;
  width: 25%;
  
  
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: grid;
  clear: both;
  padding: 5px;
 
}
</style>
<script>

function myFunctiondelete(x){

  swal.fire({
      title: '',
      text: "Apakah Anda Benar Ingin Menghapus Data ini!!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya,Hapus!',
      cancelButtonText: "Batalkan !",
		}).then(function (result) {
            if (result.value) {
			
      $.ajax({

type: "POST",
url:"app/modul/mod_frontend/main_act.php?module=galeri&act=hapus",  
data: {id:x},
success: function (resultdata) {


  swal.fire("", "Data Telah Dihapus.", "success");
  $('#modaledit').modal('hide');
 $('.datatable-init-exportgaleri').DataTable().ajax.reload(); 
    
}
});
		  } else {
			swal.fire("", "Anda Membatalkan Aksi Ini", "error");
		  }

		});

 
}

 </script>
<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from galeri_detail where rdm='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
while ($dataout=mysqli_fetch_array($hasil1)){
?>
<div class="column">
  <div class="row">
                                        <div class="gallery card card-bordered">

                                                <img class="w-100 rounded-top" src="../img_galeri/<?php echo $dataout['gbr_galeri'];?>" alt="">
                                            
                                            <div class="gallery-body card-inner align-center gap-2">
                                                
                                               <div align="center">
                                                    <button class="btn btn-primary" onClick="window.location='galeriedit-<?php echo sha1($dataout['gbr_galeri']);?>';"><em class="icon ni ni-edit"></em>
                                                    </button> <button class="btn btn-danger" onclick="myFunctiondelete('<?php echo $dataout['gbr_galeri'];?>')"><em class="icon ni ni-trash"></em></button>
                                               </div> 
                                                
                                            </div>
                                        </div>
                                   
</div>
</div>
<?php
}
?>
