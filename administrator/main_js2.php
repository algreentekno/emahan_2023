<?php
if ($_GET['module']=='kab'){ 
    include 'app/modul/mod_frontend/scriptaddkab_js.js';
    include 'app/modul/mod_frontend/scripteditkab_js.js';
?>
<script type="text/javascript">
		$(document).ready(function(){
			$('#modaledit').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_kab/get_edit.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
        <script type="text/javascript">
		$(document).ready(function(){
			$('#modallihat').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_kab/get_detail.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
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
url:"app/modul/mod_frontend/main_act.php?module=kab&act=hapus",  
data: {id:x},
success: function (resultdata) {


  swal.fire("", "Data Telah Dihapus.", "success");
 
  $('.datatable-init-exportkab').DataTable().ajax.reload(); 
    
}
});
		  } else {
			swal.fire("", "Anda Membatalkan Aksi Ini", "error");
		  }

		});

 
}

 </script>
<?php
}elseif ($_GET['module']=='kec'){ 
	include 'app/modul/mod_frontend/scriptaddkec_js.js';
    include 'app/modul/mod_frontend/scripteditkec_js.js';
?>
<script>
 $(function(){
  $('#kode_kota').select2({
    dropdownParent: $('#modaltambah')
  });
}); 
</script>

<script type="text/javascript">
		$(document).ready(function(){
			$('#modaledit').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_kec/get_edit.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
        <script type="text/javascript">
		$(document).ready(function(){
			$('#modallihat').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_kec/get_detail.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
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
url:"app/modul/mod_frontend/main_act.php?module=kec&act=hapus",  
data: {id:x},
success: function (resultdata) {


  swal.fire("", "Data Telah Dihapus.", "success");
 
  $('.datatable-init-exportkec').DataTable().ajax.reload(); 
    
}
});
		  } else {
			swal.fire("", "Anda Membatalkan Aksi Ini", "error");
		  }

		});

 
}

 </script>
<?php
}
elseif ($_GET['module']=='kel'){ 
	include 'app/modul/mod_frontend/scriptaddkel.js';
    include 'app/modul/mod_frontend/scripteditkel.js';
?>
<script language="javascript">
$(document).ready(function() {
	$('#kode_kota').change(function() { 
		var kode_kota = $("#kode_kota").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kecamatan.php',
			data: 'kode_kota=' + kode_kota, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kec').html(response);
                
                
			}
		});
    })
});
</script>
<script>
 $(function(){
  $('#kode_kota').select2({
    dropdownParent: $('#modaltambah')
  });
}); 
</script>


<script type="text/javascript">
		$(document).ready(function(){
			$('#modaledit').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_kel/get_edit.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
        <script type="text/javascript">
		$(document).ready(function(){
			$('#modallihat').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_kel/get_detail.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
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
url:"app/modul/mod_frontend/main_act.php?module=kel&act=hapus",  
data: {id:x},
success: function (resultdata) {


  swal.fire("", "Data Telah Dihapus.", "success");
 
  $('.datatable-init-exportkel').DataTable().ajax.reload(); 
    
}
});
		  } else {
			swal.fire("", "Anda Membatalkan Aksi Ini", "error");
		  }

		});

 
}

 </script>
 <?php
}elseif ($_GET['module']=='identitas'){ 
    include 'app/modul/mod_frontend/scriptaddidentitas_js.js';
    include 'app/modul/mod_frontend/scripteditidentitas_js.js';
?>

<script type="text/javascript">
		$(document).ready(function(){
			$('#modaledit').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_identitas/get_edit.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
        <script type="text/javascript">
		$(document).ready(function(){
			$('#modallihat').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_identitas/get_detail.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
<?php
}
elseif ($_GET['module']=='kategori'){ 
    include 'app/modul/mod_frontend/scriptaddkategori_js.js';
    include 'app/modul/mod_frontend/scripteditkategori_js.js';
?>

<script type="text/javascript">
		$(document).ready(function(){
			$('#modaledit').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_kategori/get_edit.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
        <script type="text/javascript">
		$(document).ready(function(){
			$('#modallihat').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_kategori/get_detail.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
		<?php
}
elseif ($_GET['module']=='informasi'){ 
	include 'app/modul/mod_frontend/scriptaddinformasi_js.js';
    include 'app/modul/mod_frontend/scripteditinformasi_js.js';
?>
<script>
 $(function(){
  $('#id_kategori').select2({
    dropdownParent: $('#modaltambah')
  });
}); 
</script>
<script type="text/javascript">
		$(document).ready(function(){
			$('#modaledit').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_informasi/get_edit.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
		
					}
				});
				
			 });
		});
		</script>
        <script type="text/javascript">
		$(document).ready(function(){
			$('#modallihat').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_informasi/get_detail.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
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
url:"app/modul/mod_frontend/main_act.php?module=informasi&act=hapus",  
data: {id:x},
success: function (resultdata) {


  swal.fire("", "Data Telah Dihapus.", "success");
 
  $('.datatable-init-exportinformasi').DataTable().ajax.reload(); 
    
}
});
		  } else {
			swal.fire("", "Anda Membatalkan Aksi Ini", "error");
		  }

		});

 
}

 </script>
 <script>
  $(document).ready(function(){
    $('.close').click(function(){  
      $('#modaledit').modal('hide');
	  $('#modaltambah').modal('hide');
    })
		});
 </script>
 <?php
}elseif ($_GET['module']=='halaman'){ 
	include 'app/modul/mod_frontend/scriptaddhalaman_js.js';
    include 'app/modul/mod_frontend/scriptedithalaman_js.js';
?>
<script type="text/javascript">
		$(document).ready(function(){
			$('#modaledit').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_halaman/get_edit.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
		
					}
				});
				
			 });
		});
		</script>
        <script type="text/javascript">
		$(document).ready(function(){
			$('#modallihat').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_halaman/get_detail.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
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
url:"app/modul/mod_frontend/main_act.php?module=halaman&act=hapus",  
data: {id:x},
success: function (resultdata) {


  swal.fire("", "Data Telah Dihapus.", "success");
 
  $('.datatable-init-exporthalaman').DataTable().ajax.reload(); 
    
}
});
		  } else {
			swal.fire("", "Anda Membatalkan Aksi Ini", "error");
		  }

		});

 
}

 </script>

<?php
}
elseif ($_GET['module']=='album'){ 
	include 'app/modul/mod_frontend/scriptaddalbum_js.js';
    include 'app/modul/mod_frontend/scripteditalbum_js.js';
?>
<script type="text/javascript">
		$(document).ready(function(){
			$('#modaledit').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_album/get_edit.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
		
					}
				});
				
			 });
		});
		</script>
        <script type="text/javascript">
		$(document).ready(function(){
			$('#modallihat').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_album/get_detail.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
 <?php
}
elseif ($_GET['module']=='galeri'){ 
	include 'app/modul/mod_frontend/scriptaddgaleri_js.js';
    
?>
<script>
 $(function(){
  $('#id_album').select2({
    dropdownParent: $('#modaltambah')
  });
}); 
</script>
<script type="text/javascript">
		$(document).ready(function(){
			$('#modaledit').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_galeri/get_edit.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
		
					}
				});
				
			 });
		});
		</script>
        <script type="text/javascript">
		$(document).ready(function(){
			$('#modallihat').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_galeri/get_detail.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
		
<?php

	}elseif ($_GET['module']=='galeriedit'){ 
	?>
	<script>  
 $(document).ready(function(){  
      $('#editdata').click(function(){  
    
          var formData = new FormData();
          var files = $('#gambar2')[0].files[0];
          formData.append('gambar',files);
          formData.append('id_galeridetail', $('#id_galeridetail2').val());
          
       
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=galeri&act=edit",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $("#editdata").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                        
                        
						Swal.fire({
  title: '',
  text: "Simpan Sukses",
  icon: 'success',
  showCancelButton: false,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'OK'
}).then((result) => {
  if (result.isConfirmed) {
	$('#gambar2').val('');
    window.location.href = 'galeri';
  }
})
                        
                       
                    
                       
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $("#editdata").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
            
      }) 
	  
	  
 })  
 
 </script>

	<?php
	}
	elseif ($_GET['module']=='kategoridownload'){ 
		include 'app/modul/mod_frontend/scriptaddkategoridownload_js.js';
		include 'app/modul/mod_frontend/scripteditkategoridownload_js.js';
	?>
	
	<script type="text/javascript">
			$(document).ready(function(){
				$('#modaledit').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_kategoridownload/get_edit.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
			
						}
					});
				 });
			});
			</script>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#modallihat').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_kategoridownload/get_detail.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
			
						}
					});
				 });
			});
			</script>
			<?php
	}
	elseif ($_GET['module']=='download'){ 
		include 'app/modul/mod_frontend/scriptadddownload_js.js';
		include 'app/modul/mod_frontend/scripteditdownload_js.js';
	?>
	<script>
 $(function(){
  $('#id_kategoridownload').select2({
    dropdownParent: $('#modaltambah')
  });
}); 
</script>
	<script type="text/javascript">
			$(document).ready(function(){
				$('#modaledit').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_download/get_edit.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
			
						}
					});
					
				 });
			});
			</script>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#modallihat').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_download/get_detail.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
			
						}
					});
				 });
			});
			</script>
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
url:"app/modul/mod_frontend/main_act.php?module=download&act=hapus",  
data: {id:x},
success: function (resultdata) {


  swal.fire("", "Data Telah Dihapus.", "success");
 
  $('.datatable-init-exportdownload').DataTable().ajax.reload(); 
    
}
});
		  } else {
			swal.fire("", "Anda Membatalkan Aksi Ini", "error");
		  }

		});

 
}

 </script>
	 <?php
	}
	elseif ($_GET['module']=='link'){ 
		include 'app/modul/mod_frontend/scriptaddlink_js.js';
		include 'app/modul/mod_frontend/scripteditlink_js.js';
	?>
	<script type="text/javascript">
			$(document).ready(function(){
				$('#modaledit').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_link/get_edit.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
			
						}
					});
					
				 });
			});
			</script>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#modallihat').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_link/get_detail.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
			
						}
					});
				 });
			});
			</script>
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
url:"app/modul/mod_frontend/main_act.php?module=link&act=hapus",  
data: {id:x},
success: function (resultdata) {


  swal.fire("", "Data Telah Dihapus.", "success");
 
  $('.datatable-init-exportlink').DataTable().ajax.reload(); 
    
}
});
		  } else {
			swal.fire("", "Anda Membatalkan Aksi Ini", "error");
		  }

		});

 
}

 </script>
	 <?php
	}
	elseif ($_GET['module']=='templatewebsite'){ 
		include 'app/modul/mod_frontend/scriptaddtemplate_js.js';
		include 'app/modul/mod_frontend/scriptedittemplate_js.js';
	?>
	<script type="text/javascript">
			$(document).ready(function(){
				$('#modaledit').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_template/get_edit.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
			
						}
					});
					
				 });
			});
			</script>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#modallihat').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_template/get_detail.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
			
						}
					});
				 });
			});
			</script>
			<script>

function myFunctionaktif(x){

  swal.fire({
      title: '',
      text: "Apakah Anda Benar Ingin Mengaktifkan Template ini !",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya,Aktifkan!',
      cancelButtonText: "Batalkan !",
		}).then(function (result) {
            if (result.value) {
			
      $.ajax({

type: "POST",
url:"app/modul/mod_frontend/main_act.php?module=template&act=aktif",  
data: {id:x},
success: function (resultdata) {


  swal.fire("", "Data Telah Diaktifkan.", "success");
 
  $('.datatable-init-exporttemplate').DataTable().ajax.reload(); 
    
}
});
		  } else {
			swal.fire("", "Anda Membatalkan Aksi Ini", "error");
		  }

		});

 
}

 </script>
	 <?php
	}
	elseif ($_GET['module']=='usermanager'){ 
		include 'app/modul/mod_frontend/scriptadduser_js.js';
		include 'app/modul/mod_frontend/scriptedituser_js.js';
	?>
		<script>
 $(function(){
  $('#level').select2({
    dropdownParent: $('#modaltambah')
  });
}); 
</script>

	<script type="text/javascript">
			$(document).ready(function(){
				$('#modaledit').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_user/get_edit.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
			
						}
					});
					
				 });
			});
			</script>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#modallihat').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_user/get_detail.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
			
						}
					});
				 });
			});
			</script>
			<script>

function myFunctiondelete(x){

  swal.fire({
      title: '',
      text: "Apakah Anda Benar Ingin Menghapus Data ini !",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya, Hapus!',
      cancelButtonText: "Batalkan !",
		}).then(function (result) {
            if (result.value) {
			
      $.ajax({

type: "POST",
url:"app/modul/mod_frontend/main_act.php?module=user&act=hapus",  
data: {id:x},
success: function (resultdata) {


  swal.fire("", "Data Telah Dihapus.", "success");
 
  $('.datatable-init-exportusermanager').DataTable().ajax.reload(); 
    
}
});
		  } else {
			swal.fire("", "Anda Membatalkan Aksi Ini", "error");
		  }

		});

 
}

 </script>
 	<script language="javascript">
$(document).ready(function() {
	$('#level').change(function() { 
		var level = $("#level").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_levelkab.php',
			data: 'level=' + level, 
			dataType: 'html',
			success: function(response) {
				$('.pilihkab').html(response);
                
                
			}
		});
    })
});
</script>					
	 <?php
	}elseif ($_GET['module']=='uploaddataver'){ 

		include 'app/modul/mod_operator/scriptimport_js.js';
?>
<script>  
 $(document).ready(function(){  
$("#template").change(function(){
               var allowedTypes = ['application/vnd.ms-excel','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
               var file = this.files[0];
               var fileType = file.type;
			   var ukuranfile=file.size;
               if(!allowedTypes.includes(fileType)){
                   
				   swal.fire("ERROR", "Silakan pilih file yang valid (.XLS/.XLSX)", "error"); 
                   $("#template").val('');
                   return false;
               }else if(ukuranfile > 5000000 ){

                  swal.fire("ERROR", "Ukuran File Kebesaran, Maksimal 5 MB", "error"); 
                  $("#template").val('');
                  return false;

}
           });

})  
 </script>
 <script>  
 $(document).ready(function(){  
$("#beritaacara").change(function(){
               var allowedTypes = ['application/pdf'];
               var file = this.files[0];
               var fileType = file.type;
			   var ukuranfile=file.size;
               if(!allowedTypes.includes(fileType)){
                   
				   swal.fire("ERROR", "Silakan pilih file yang valid (.PDF)", "error"); 
                   $("#beritaacara").val('');
                   return false;
               }else if(ukuranfile > 500000 ){

                  swal.fire("ERROR", "Ukuran File Kebesaran, Maksimal 500 Kb", "error"); 
                  $("#beritaacara").val('');
                  return false;

}
           });

})  
 </script>
<script type="text/javascript">
    $(document).ready(function(){ 
		
      $('#import_excel').on('submit', function(event){  
       event.preventDefault();
 //=============================================================
       var jenisdata = $("#jenisdata").val();
	   if(jenisdata=='1'){

		$.ajax({  
            url:"serverside/importspald.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,  
            processData:false,
            beforeSend:function(){
              $('#sebentar').html("<div class='alert alert-danger' role='alert'>Mohon Tunggu, Import Data Sedang Berlangsung..</div>");
              $('#process').css('display', 'block');
            },  
            success:function(data){  
             var percentage = 0;

             var timer = setInterval(function(){
               percentage = percentage + 20;
               progress_bar_process(percentage, timer);
             }, 1000);

             console.log(data);
             
           },

           error:function(data){

            $('#sebentar').html("<div class='alert alert-danger' role='alert'>Server Error!</div>");

            console.log(data);

          }  
        }); 
		
	    }else if(jenisdata=='2'){

			$.ajax({  
            url:"serverside/importiplt.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,  
            processData:false,
            beforeSend:function(){
              $('#sebentar').html("<div class='alert alert-danger' role='alert'>Mohon Tunggu, Import Data Sedang Berlangsung..</div>");
              $('#process').css('display', 'block');
            },  
            success:function(data){  
             var percentage = 0;

             var timer = setInterval(function(){
               percentage = percentage + 20;
               progress_bar_process(percentage, timer);
             }, 1000);

             console.log(data);
             
           },

           error:function(data){

            $('#sebentar').html("<div class='alert alert-danger' role='alert'>Server Error!</div>");

            console.log(data);

          }  
        }); 

		}else if(jenisdata=='3'){

			$.ajax({  
            url:"serverside/importspamreg.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,  
            processData:false,
            beforeSend:function(){
              $('#sebentar').html("<div class='alert alert-danger' role='alert'>Mohon Tunggu, Import Data Sedang Berlangsung..</div>");
              $('#process').css('display', 'block');
            },  
            success:function(data){  
             var percentage = 0;

             var timer = setInterval(function(){
               percentage = percentage + 20;
               progress_bar_process(percentage, timer);
             }, 1000);

             console.log(data);
             
           },

           error:function(data){

            $('#sebentar').html("<div class='alert alert-danger' role='alert'>Server Error!</div>");

            console.log(data);

          }  
        }); 

		}else if(jenisdata=='4'){

			$.ajax({  
            url:"serverside/importspamkab.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,  
            processData:false,
            beforeSend:function(){
              $('#sebentar').html("<div class='alert alert-danger' role='alert'>Mohon Tunggu, Import Data Sedang Berlangsung..</div>");
              $('#process').css('display', 'block');
            },  
            success:function(data){  
             var percentage = 0;

             var timer = setInterval(function(){
               percentage = percentage + 20;
               progress_bar_process(percentage, timer);
             }, 1000);

             console.log(data);
             
           },

           error:function(data){

            $('#sebentar').html("<div class='alert alert-danger' role='alert'>Server Error!</div>");

            console.log(data);

          }  
        }); 


		}else if(jenisdata=='5'){

			$.ajax({  
            url:"serverside/importspamikk.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,  
            processData:false,
            beforeSend:function(){
              $('#sebentar').html("<div class='alert alert-danger' role='alert'>Mohon Tunggu, Import Data Sedang Berlangsung..</div>");
              $('#process').css('display', 'block');
            },  
            success:function(data){  
             var percentage = 0;

             var timer = setInterval(function(){
               percentage = percentage + 20;
               progress_bar_process(percentage, timer);
             }, 1000);

             console.log(data);
             
           },

           error:function(data){

            $('#sebentar').html("<div class='alert alert-danger' role='alert'>Server Error!</div>");

            console.log(data);

          }  
        }); 


		}else if(jenisdata=='6'){

			$.ajax({  
            url:"serverside/importspamperdesaan.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,  
            processData:false,
            beforeSend:function(){
              $('#sebentar').html("<div class='alert alert-danger' role='alert'>Mohon Tunggu, Import Data Sedang Berlangsung..</div>");
              $('#process').css('display', 'block');
            },  
            success:function(data){  
             var percentage = 0;

             var timer = setInterval(function(){
               percentage = percentage + 20;
               progress_bar_process(percentage, timer);
             }, 1000);

             console.log(data);
             
           },

           error:function(data){

            $('#sebentar').html("<div class='alert alert-danger' role='alert'>Server Error!</div>");

            console.log(data);

          }  
        }); 

		}else if(jenisdata=='7'){

			$.ajax({  
            url:"serverside/importtpa.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,  
            processData:false,
            beforeSend:function(){
              $('#sebentar').html("<div class='alert alert-danger' role='alert'>Mohon Tunggu, Import Data Sedang Berlangsung..</div>");
              $('#process').css('display', 'block');
            },  
            success:function(data){  
             var percentage = 0;

             var timer = setInterval(function(){
               percentage = percentage + 20;
               progress_bar_process(percentage, timer);
             }, 1000);

             console.log(data);
             
           },

           error:function(data){

            $('#sebentar').html("<div class='alert alert-danger' role='alert'>Server Error!</div>");

            console.log(data);

          }  
        }); 

		}else if(jenisdata=='8'){

			$.ajax({  
            url:"serverside/importtpst.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,  
            processData:false,
            beforeSend:function(){
              $('#sebentar').html("<div class='alert alert-danger' role='alert'>Mohon Tunggu, Import Data Sedang Berlangsung..</div>");
              $('#process').css('display', 'block');
            },  
            success:function(data){  
             var percentage = 0;

             var timer = setInterval(function(){
               percentage = percentage + 20;
               progress_bar_process(percentage, timer);
             }, 1000);

             console.log(data);
             
           },

           error:function(data){

            $('#sebentar').html("<div class='alert alert-danger' role='alert'>Server Error!</div>");

            console.log(data);

          }  
        }); 

		}else if(jenisdata=='9'){

			$.ajax({  
            url:"serverside/importtps.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,  
            processData:false,
            beforeSend:function(){
              $('#sebentar').html("<div class='alert alert-danger' role='alert'>Mohon Tunggu, Import Data Sedang Berlangsung..</div>");
              $('#process').css('display', 'block');
            },  
            success:function(data){  
             var percentage = 0;

             var timer = setInterval(function(){
               percentage = percentage + 20;
               progress_bar_process(percentage, timer);
             }, 1000);

             console.log(data);
             
           },

           error:function(data){

            $('#sebentar').html("<div class='alert alert-danger' role='alert'>Server Error!</div>");

            console.log(data);

          }  
        }); 

		}else if(jenisdata=='10'){

			$.ajax({  
            url:"serverside/importkumuhdibawah10.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,  
            processData:false,
            beforeSend:function(){
              $('#sebentar').html("<div class='alert alert-danger' role='alert'>Mohon Tunggu, Import Data Sedang Berlangsung..</div>");
              $('#process').css('display', 'block');
            },  
            success:function(data){  
             var percentage = 0;

             var timer = setInterval(function(){
               percentage = percentage + 20;
               progress_bar_process(percentage, timer);
             }, 1000);

             console.log(data);
             
           },

           error:function(data){

            $('#sebentar').html("<div class='alert alert-danger' role='alert'>Server Error!</div>");

            console.log(data);

          }  
        }); 

		}else if(jenisdata=='11'){

			$.ajax({  
            url:"serverside/importkumuhdiatas10.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,  
            processData:false,
            beforeSend:function(){
              $('#sebentar').html("<div class='alert alert-danger' role='alert'>Mohon Tunggu, Import Data Sedang Berlangsung..</div>");
              $('#process').css('display', 'block');
            },  
            success:function(data){  
             var percentage = 0;

             var timer = setInterval(function(){
               percentage = percentage + 20;
               progress_bar_process(percentage, timer);
             }, 1000);

             console.log(data);
             
           },

           error:function(data){

            $('#sebentar').html("<div class='alert alert-danger' role='alert'>Server Error!</div>");

            console.log(data);

          }  
        }); 

		}else if(jenisdata=='12'){

			$.ajax({  
            url:"serverside/importperumahan.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,  
            processData:false,
            beforeSend:function(){
              $('#sebentar').html("<div class='alert alert-danger' role='alert'>Mohon Tunggu, Import Data Sedang Berlangsung..</div>");
              $('#process').css('display', 'block');
            },  
            success:function(data){  
             var percentage = 0;

             var timer = setInterval(function(){
               percentage = percentage + 20;
               progress_bar_process(percentage, timer);
             }, 1000);

             console.log(data);
             
           },

           error:function(data){

            $('#sebentar').html("<div class='alert alert-danger' role='alert'>Server Error!</div>");

            console.log(data);

          }  
        }); 

		}else if(jenisdata=='13'){

			$.ajax({  
            url:"serverside/importrtlh.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,  
            processData:false,
            beforeSend:function(){
              $('#sebentar').html("<div class='alert alert-danger' role='alert'>Mohon Tunggu, Import Data Sedang Berlangsung..</div>");
              $('#process').css('display', 'block');
            },  
            success:function(data){  
             var percentage = 0;

             var timer = setInterval(function(){
               percentage = percentage + 20;
               progress_bar_process(percentage, timer);
             }, 1000);

             console.log(data);
             
           },

           error:function(data){

            $('#sebentar').html("<div class='alert alert-danger' role='alert'>Server Error!</div>");

            console.log(data);

          }  
        }); 

		}
       //=======================================================   
        });  

      function progress_bar_process(percentage, timer){
       $('.progress-bar').css('width', percentage + '%');
       if(percentage > 100){
        clearInterval(timer);
        $('#import_excel')[0].reset();
        $('#process').css('display', 'none');
        $('.progress-bar').css('width', '0%');
        $('#pesan').html("<div class='alert alert-primary' role='alert'>Ok, Data berhasil di import, tunggu sebentar halaman sedang dialihkan..</div>");
        $('#sebentar').html("");
        
        setTimeout(function(){
         $('#pesan').html('');
         window.location.href = 'uploaddataver';
       }, 3000);
      }
    }

  });
</script>   
<?php
	}elseif ($_GET['module']=='draftdataver'){ 
?>
<script type="text/javascript">
			$(document).ready(function(){
				$('#modalberitaacara').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_operator/get_beritaacara.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-databeritaacara').html(data);//menampilkan data ke dalam modal
			
						}
					});
				 });
			});
			</script>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#modallihat').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_operator/get_lihatdata.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-datalihat').html(data);//menampilkan data ke dalam modal
			
						}
					});
				 });
			});
			</script>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#modaledit').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_operator/get_lihatdataedit.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-datalihatedit').html(data);//menampilkan data ke dalam modal
			
						}
					});
				 });
			});
			</script>
<?php
	}elseif ($_GET['module']=='downloadkodedesa'){ 
	?>
	<script language="javascript">
$(document).ready(function() {
	$('#kode_kota').change(function() { 
		var kode_kota = $("#kode_kota").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/modul/mod_operator/get_kecamatan.php',
			data: 'kode_kota=' + kode_kota, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kec').html(response);
                
                
			}
		});
    })
});
</script>	
<script language="javascript">
$(document).ready(function() {
	$('#kode_kec').change(function() { 
		var kode_kec = $("#kode_kec").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/modul/mod_operator/get_kodedesa.php',
			data: 'kode_kec=' + kode_kec, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kel').html(response);
                
                
			}
		});
    })
});
</script>
<script>
	$(document).ready(function() {
$('#export').on('click', function() {
	var kode_kota = $("#kode_kota").val();
	var kode_kec = $("#kode_kec").val();
	$.ajax({
url: "serverside/exportkodedesa.php",
type: "POST",
data: {
kode_kota:kode_kota,kode_kec:kode_kec
},
cache: false,
success: function(dataResult){
window.open('serverside/exportkodedesa.php?kode_kota='+kode_kota+'&kode_kec='+kode_kec);
                    }
})
})
	})
</script>
<?php
	}elseif ($_GET['module']=='validasidata'){ 
		include 'app/modul/mod_validator/scriptkirimpesan_js.js';
?>
<script language="javascript">
$(document).ready(function() {
	$('#tahundata').change(function() { 
		var kode_kota = $("#tahundata").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_datadrafvaltahun.php',
			data: 'tahundata=' + tahundata, 
			dataType: 'html',
			success: function(response) {
				$('#tahundatadrafval').html(response);
                
                
			}
		});
    })
});
</script>
<script type="text/javascript">
			$(document).ready(function(){
				$('#modalberitaacara').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_operator/get_beritaacara.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-databeritaacara').html(data);//menampilkan data ke dalam modal
			
						}
					});
				 });
			});
			</script>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#modallihat').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_operator/get_lihatdata.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-datalihat').html(data);//menampilkan data ke dalam modal
			
						}
					});
				 });
			});
			</script>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#modalpesan').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_validator/get_formpesan.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-datalihatpesan').html(data);//menampilkan data ke dalam modal
			
						}
					});
				 });
			});
			</script>
			<script>

function myFunctiondelete(x){

  swal.fire({
      title: '',
      text: "Validasi Data",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya',
      cancelButtonText: "Batalkan !",
		}).then(function (result) {
            if (result.value) {
			
      $.ajax({

type: "POST",
url:"app/modul/mod_validator/main_act.php?module=validasi&act=add",  
data: {id:x},
success: function (resultdata) {


  swal.fire("", "Data Telah Divalidasi.", "success");
 
  $('.datatable-init-exportdraftdataval').DataTable().ajax.reload(); 
    
}
});
		  } else {
			swal.fire("", "Anda Membatalkan Aksi Ini", "error");
		  }

		});

 
}
</script>
<?php
	}elseif ($_GET['module']=='riwayatkirimpesan'){ 
?>
<script>
  $(document).ready(function(){
    $('.tutup').click(function(){  
     
      $('#modallihat').modal('hide');
	  $('.datatable-init-exportriwayatkirimpesan').DataTable().ajax.reload(); 
	  
    })
		});
 </script>
<script type="text/javascript">
			$(document).ready(function(){
				$('#modallihat').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_validator/get_detailpesan.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
			
						}
					});
				 });
			});
			</script>
			<script>

function myFunctiondelete(x){

  swal.fire({
      title: '',
      text: "Apakah Benar Anda Ingin Menghapus Pesan",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya, Hapus',
      cancelButtonText: "Batalkan !",
		}).then(function (result) {
            if (result.value) {
			
      $.ajax({

type: "POST",
url:"app/modul/mod_validator/main_act.php?module=pesan&act=hapus",  
data: {id:x},
success: function (resultdata) {


  swal.fire("", "Data Telah Dihapus.", "success");
 
  $('.datatable-init-exportriwayatkirimpesan').DataTable().ajax.reload(); 
    
}
});
		  } else {
			swal.fire("", "Anda Membatalkan Aksi Ini", "error");
		  }

		});

 
}
</script>
<?php
	}
	elseif ($_GET['module']=='pesanmasuk'){ 
		?>
		<script>
  $(document).ready(function(){
    $('.tutup').click(function(){  
     
      $('#modallihat').modal('hide');
	  $('.datatable-init-exportriwayatkirimpesanval').DataTable().ajax.reload(); 
	  
    })
		});
 </script>
		<script type="text/javascript">
					$(document).ready(function(){
						$('#modallihat').on('show.bs.modal', function (e) {
							var Id = $(e.relatedTarget).data('id');
							$.ajax({
								type :'post',
								url  :'serverside/modul/mod_validator/get_detailpesansys.php',
								data :'Id='+ Id,
								success : function(data){
					
								$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
					
								}
							});
						 });
					});
					</script>
					<script>
		
		function myFunctiondelete(x){
		
		  swal.fire({
			  title: '',
			  text: "Apakah Benar Anda Ingin Menghapus Pesan",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonText: 'Ya, Hapus',
			  cancelButtonText: "Batalkan !",
				}).then(function (result) {
					if (result.value) {
					
			  $.ajax({
		
		type: "POST",
		url:"app/modul/mod_validator/main_act.php?module=pesansys&act=hapus",  
		data: {id:x},
		success: function (resultdata) {
		
		
		  swal.fire("", "Data Telah Dihapus.", "success");
		 
		  $('.datatable-init-exportriwayatkirimpesanval').DataTable().ajax.reload(); 
			
		}
		});
				  } else {
					swal.fire("", "Anda Membatalkan Aksi Ini", "error");
				  }
		
				});
		
		 
		}
		</script>
		<?php
			}
			elseif ($_GET['module']=='pesanmasukval'){ 
				?>
				<script>
  $(document).ready(function(){
    $('.tutup').click(function(){  
     
      $('#modallihat').modal('hide');
	  $('.datatable-init-exportpesanmasukvalidasi').DataTable().ajax.reload(); 

    })
		});
 </script>
				<script type="text/javascript">
							$(document).ready(function(){
								$('#modallihat').on('show.bs.modal', function (e) {
									var Id = $(e.relatedTarget).data('id');
									$.ajax({
										type :'post',
										url  :'serverside/modul/mod_operator/get_detailpesanval.php',
										data :'Id='+ Id,
										success : function(data){
							
										$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
							
										}
									});
								 });
							});
							</script>
							<script>
				
				function myFunctiondelete(x){
				
				  swal.fire({
					  title: '',
					  text: "Apakah Benar Anda Ingin Menghapus Pesan",
					  icon: 'warning',
					  showCancelButton: true,
					  confirmButtonText: 'Ya, Hapus',
					  cancelButtonText: "Batalkan !",
						}).then(function (result) {
							if (result.value) {
							
					  $.ajax({
				
				type: "POST",
				url:"app/modul/mod_operator/main_act.php?module=pesanval&act=hapus",  
				data: {id:x},
				success: function (resultdata) {
				
				
				  swal.fire("", "Data Telah Dihapus.", "success");
				 
				  $('.datatable-init-exportpesanmasukvalidasi').DataTable().ajax.reload(); 
					
				}
				});
						  } else {
							swal.fire("", "Anda Membatalkan Aksi Ini", "error");
						  }
				
						});
				
				 
				}
				</script>
				<?php
					}
					elseif ($_GET['module']=='kelembagaanlimbah'){ 
						include 'app/modul/mod_airlimbah/scriptaddkelembagaan_js.js';
						include 'app/modul/mod_airlimbah/scripteditkelembagaan_js.js';
					?>
					<script type="text/javascript">
							$(document).ready(function(){
								$('#modaledit').on('show.bs.modal', function (e) {
									var Id = $(e.relatedTarget).data('id');
									$.ajax({
										type :'post',
										url  :'serverside/modul/mod_airlimbah/get_edit.php',
										data :'Id='+ Id,
										success : function(data){
							
										$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
							
										}
									});
									
								 });
							});
							</script>
							<script type="text/javascript">
							$(document).ready(function(){
								$('#modallihat').on('show.bs.modal', function (e) {
									var Id = $(e.relatedTarget).data('id');
									$.ajax({
										type :'post',
										url  :'serverside/modul/mod_airlimbah/get_detail.php',
										data :'Id='+ Id,
										success : function(data){
							
										$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
							
										}
									});
								 });
							});
							</script>
							<script>
				
				function myFunctiondelete(x){
				
				  swal.fire({
					  title: '',
					  text: "Apakah Benar Anda Ingin Menghapus Pesan",
					  icon: 'warning',
					  showCancelButton: true,
					  confirmButtonText: 'Ya, Hapus',
					  cancelButtonText: "Batalkan !",
						}).then(function (result) {
							if (result.value) {
							
					  $.ajax({
				
				type: "POST",
				url:"app/modul/mod_airlimbah/main_act.php?module=kelembagaan&act=hapus",  
				data: {id:x},
				success: function (resultdata) {
				
				
				  swal.fire("", "Data Telah Dihapus.", "success");
				 
				  $('.datatable-init-exportlimbah').DataTable().ajax.reload(); 
					
				}
				});
						  } else {
							swal.fire("", "Anda Membatalkan Aksi Ini", "error");
						  }
				
						});
				
				 
				}
				</script>
				<script>
 $(function(){
  $('#kode_kota').select2({
    dropdownParent: $('#modaltambah')
  });
}); 
</script>
<?php
					}
					elseif ($_GET['module']=='kelembagaanairminum'){ 
						include 'app/modul/mod_airminum/scriptaddkelembagaan_js.js';
						include 'app/modul/mod_airminum/scripteditkelembagaan_js.js';
					?>
					<script type="text/javascript">
							$(document).ready(function(){
								$('#modaledit').on('show.bs.modal', function (e) {
									var Id = $(e.relatedTarget).data('id');
									$.ajax({
										type :'post',
										url  :'serverside/modul/mod_airminum/get_edit.php',
										data :'Id='+ Id,
										success : function(data){
							
										$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
							
										}
									});
									
								 });
							});
							</script>
							<script type="text/javascript">
							$(document).ready(function(){
								$('#modallihat').on('show.bs.modal', function (e) {
									var Id = $(e.relatedTarget).data('id');
									$.ajax({
										type :'post',
										url  :'serverside/modul/mod_airminum/get_detail.php',
										data :'Id='+ Id,
										success : function(data){
							
										$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
							
										}
									});
								 });
							});
							</script>
							<script>
				
				function myFunctiondelete(x){
				
				  swal.fire({
					  title: '',
					  text: "Apakah Benar Anda Ingin Menghapus Pesan",
					  icon: 'warning',
					  showCancelButton: true,
					  confirmButtonText: 'Ya, Hapus',
					  cancelButtonText: "Batalkan !",
						}).then(function (result) {
							if (result.value) {
							
					  $.ajax({
				
				type: "POST",
				url:"app/modul/mod_airminum/main_act.php?module=kelembagaan&act=hapus",  
				data: {id:x},
				success: function (resultdata) {
				
				
				  swal.fire("", "Data Telah Dihapus.", "success");
				 
				  $('.datatable-init-exportkelembagaanairminum').DataTable().ajax.reload(); 
					
				}
				});
						  } else {
							swal.fire("", "Anda Membatalkan Aksi Ini", "error");
						  }
				
						});
				
				 
				}
				</script>
				<script>
 $(function(){
  $('#kode_kota').select2({
    dropdownParent: $('#modaltambah')
  });
}); 
</script>
<?php
					}
					elseif ($_GET['module']=='kelembagaansampah'){ 
						include 'app/modul/mod_sampah/scriptaddkelembagaan_js.js';
						include 'app/modul/mod_sampah/scripteditkelembagaan_js.js';
					?>
					<script type="text/javascript">
							$(document).ready(function(){
								$('#modaledit').on('show.bs.modal', function (e) {
									var Id = $(e.relatedTarget).data('id');
									$.ajax({
										type :'post',
										url  :'serverside/modul/mod_sampah/get_edit.php',
										data :'Id='+ Id,
										success : function(data){
							
										$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
							
										}
									});
									
								 });
							});
							</script>
							<script type="text/javascript">
							$(document).ready(function(){
								$('#modallihat').on('show.bs.modal', function (e) {
									var Id = $(e.relatedTarget).data('id');
									$.ajax({
										type :'post',
										url  :'serverside/modul/mod_sampah/get_detail.php',
										data :'Id='+ Id,
										success : function(data){
							
										$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
							
										}
									});
								 });
							});
							</script>
							<script>
				
				function myFunctiondelete(x){
				
				  swal.fire({
					  title: '',
					  text: "Apakah Benar Anda Ingin Menghapus Pesan",
					  icon: 'warning',
					  showCancelButton: true,
					  confirmButtonText: 'Ya, Hapus',
					  cancelButtonText: "Batalkan !",
						}).then(function (result) {
							if (result.value) {
							
					  $.ajax({
				
				type: "POST",
				url:"app/modul/mod_sampah/main_act.php?module=kelembagaan&act=hapus",  
				data: {id:x},
				success: function (resultdata) {
				
				
				  swal.fire("", "Data Telah Dihapus.", "success");
				 
				  $('.datatable-init-exportkelembagaansampah').DataTable().ajax.reload(); 
					
				}
				});
						  } else {
							swal.fire("", "Anda Membatalkan Aksi Ini", "error");
						  }
				
						});
				
				 
				}
				</script>
				<script>
 $(function(){
  $('#kode_kota').select2({
    dropdownParent: $('#modaltambah')
  });
}); 
</script>
<?php
}elseif ($_GET['module']=='rawanair'){ 
	include 'app/modul/mod_airminum/scriptaddrawan_js.js';
	include 'app/modul/mod_airminum/scriptedirawan_js.js';
?>

<script language="javascript">
$(document).ready(function() {
	$('#kode_kota').change(function() { 
		var kode_kota = $("#kode_kota").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kecamatan.php',
			data: 'kode_kota=' + kode_kota, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kec').html(response);
                
                
			}
		});
    })
});
</script>
<script>
 $(function(){
  $('#kode_kota').select2({
    dropdownParent: $('#modaltambah')
  });
}); 
</script>
<script language="javascript">
$(document).ready(function() {
	$('#kode_kec').change(function() { 
		var kode_kec = $("#kode_kec").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kelurahan.php',
			data: 'kode_kec=' + kode_kec, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kel').html(response);
                
                
			}
		});
    })
});
</script>

							<script type="text/javascript">
							$(document).ready(function(){
								$('#modallihat').on('show.bs.modal', function (e) {
									var Id = $(e.relatedTarget).data('id');
									$.ajax({
										type :'post',
										url  :'serverside/modul/mod_airminum/get_detailrawan.php',
										data :'Id='+ Id,
										success : function(data){
							
										$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
							
										}
									});
								 });
							});
							</script>
							<script>
				
				function myFunctiondelete(x){
				
				  swal.fire({
					  title: '',
					  text: "Apakah Benar Anda Ingin Menghapus Pesan",
					  icon: 'warning',
					  showCancelButton: true,
					  confirmButtonText: 'Ya, Hapus',
					  cancelButtonText: "Batalkan !",
						}).then(function (result) {
							if (result.value) {
							
					  $.ajax({
				
				type: "POST",
				url:"app/modul/mod_airminum/main_act.php?module=rawan&act=hapus",  
				data: {id:x},
				success: function (resultdata) {
				
				
				  swal.fire("", "Data Telah Dihapus.", "success");
				 
				  $('.datatable-init-exportrawanair').DataTable().ajax.reload(); 
					
				}
				});
						  } else {
							swal.fire("", "Anda Membatalkan Aksi Ini", "error");
						  }
				
						});
				
				 
				}
				</script>
<?php
					}
					elseif ($_GET['module']=='potensiairbaku'){ 
						include 'app/modul/mod_airminum/scriptaddpotensi_js.js';
						include 'app/modul/mod_airminum/scripteditpotensi_js.js';
					?>
					
					<script language="javascript">
					$(document).ready(function() {
						$('#kode_kota').change(function() { 
							var kode_kota = $("#kode_kota").val();
							$.ajax({
								type: 'POST',
								url: 'serverside/get_kecamatan.php',
								data: 'kode_kota=' + kode_kota, 
								dataType: 'html',
								success: function(response) {
									$('#kode_kec').html(response);
									
									
								}
							});
						})
					});
					</script>
					<script>
					 $(function(){
					  $('#kode_kota').select2({
						dropdownParent: $('#modaltambah')
					  });
					}); 
					</script>
					<script language="javascript">
					$(document).ready(function() {
						$('#kode_kec').change(function() { 
							var kode_kec = $("#kode_kec").val();
							$.ajax({
								type: 'POST',
								url: 'serverside/get_kelurahan.php',
								data: 'kode_kec=' + kode_kec, 
								dataType: 'html',
								success: function(response) {
									$('#kode_kel').html(response);
									
									
								}
							});
						})
					});
					</script>
					<script type="text/javascript">
												$(document).ready(function(){
													$('#modaledit').on('show.bs.modal', function (e) {
														var Id = $(e.relatedTarget).data('id');
														$.ajax({
															type :'post',
															url  :'serverside/modul/mod_airminum/get_editpotensi.php',
															data :'Id='+ Id,
															success : function(data){
												
															$('.hasil-dataeditpotensi').html(data);//menampilkan data ke dalam modal
												
															}
														});
													 });
												});
												</script>
					
												<script type="text/javascript">
												$(document).ready(function(){
													$('#modallihat').on('show.bs.modal', function (e) {
														var Id = $(e.relatedTarget).data('id');
														$.ajax({
															type :'post',
															url  :'serverside/modul/mod_airminum/get_detailpotensi.php',
															data :'Id='+ Id,
															success : function(data){
												
															$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
												
															}
														});
													 });
												});
												</script>
												<script>
									
									function myFunctiondelete(x){
									
									  swal.fire({
										  title: '',
										  text: "Apakah Benar Anda Ingin Menghapus Pesan",
										  icon: 'warning',
										  showCancelButton: true,
										  confirmButtonText: 'Ya, Hapus',
										  cancelButtonText: "Batalkan !",
											}).then(function (result) {
												if (result.value) {
												
										  $.ajax({
									
									type: "POST",
									url:"app/modul/mod_airminum/main_act.php?module=potensi&act=hapus",  
									data: {id:x},
									success: function (resultdata) {
									
									
									  swal.fire("", "Data Telah Dihapus.", "success");
									 
									  $('.datatable-init-exportpotensiairbaku').DataTable().ajax.reload(); 
										
									}
									});
											  } else {
												swal.fire("", "Anda Membatalkan Aksi Ini", "error");
											  }
									
											});
									
									 
									}
									</script>
					<?php
}elseif ($_GET['module']=='akseslimbah'){ 
	include 'app/modul/mod_airlimbah/scriptaddcapaian_js.js';
	include 'app/modul/mod_airlimbah/scripteditcapaian_js.js';
?>
<script>
 $(function(){
  $('#kode_kota').select2({
    dropdownParent: $('#modaltambah')
  });
}); 
</script>
<script type="text/javascript">
												$(document).ready(function(){
													$('#modaledit').on('show.bs.modal', function (e) {
														var Id = $(e.relatedTarget).data('id');
														$.ajax({
															type :'post',
															url  :'serverside/modul/mod_airlimbah/get_editcapaian.php',
															data :'Id='+ Id,
															success : function(data){
												
															$('.hasil-dataeditcapaian').html(data);//menampilkan data ke dalam modal
												
															}
														});
													 });
												});
												</script>
												<script type="text/javascript">
												$(document).ready(function(){
													$('#modallihat').on('show.bs.modal', function (e) {
														var Id = $(e.relatedTarget).data('id');
														$.ajax({
															type :'post',
															url  :'serverside/modul/mod_airlimbah/get_lihatcapaian.php',
															data :'Id='+ Id,
															success : function(data){
												
															$('.hasil-datalihatcapaian').html(data);//menampilkan data ke dalam modal
												
															}
														});
													 });
												});
												</script>
					
<?php
}
elseif ($_GET['module']=='capaianairminum'){ 
	include 'app/modul/mod_airminum/scriptaddcapaian_js.js';
	include 'app/modul/mod_airminum/scripteditcapaian_js.js';
?>
<script>
 $(function(){
  $('#kode_kota').select2({
    dropdownParent: $('#modaltambah')
  });
}); 
</script>
<script type="text/javascript">
												$(document).ready(function(){
													$('#modaledit').on('show.bs.modal', function (e) {
														var Id = $(e.relatedTarget).data('id');
														$.ajax({
															type :'post',
															url  :'serverside/modul/mod_airminum/get_editcapaian.php',
															data :'Id='+ Id,
															success : function(data){
												
															$('.hasil-dataeditcapaian').html(data);//menampilkan data ke dalam modal
												
															}
														});
													 });
												});
												</script>
												<script type="text/javascript">
												$(document).ready(function(){
													$('#modallihat').on('show.bs.modal', function (e) {
														var Id = $(e.relatedTarget).data('id');
														$.ajax({
															type :'post',
															url  :'serverside/modul/mod_airminum/get_lihatcapaian.php',
															data :'Id='+ Id,
															success : function(data){
												
															$('.hasil-datalihatcapaian').html(data);//menampilkan data ke dalam modal
												
															}
														});
													 });
												});
												</script>
					
<?php
}
elseif ($_GET['module']=='aksessampah'){ 
	include 'app/modul/mod_sampah/scriptaddcapaian_js.js';
	include 'app/modul/mod_sampah/scripteditcapaian_js.js';
?>
<script>
 $(function(){
  $('#kode_kota').select2({
    dropdownParent: $('#modaltambah')
  });
}); 
</script>
<script type="text/javascript">
												$(document).ready(function(){
													$('#modaledit').on('show.bs.modal', function (e) {
														var Id = $(e.relatedTarget).data('id');
														$.ajax({
															type :'post',
															url  :'serverside/modul/mod_sampah/get_editcapaian.php',
															data :'Id='+ Id,
															success : function(data){
												
															$('.hasil-dataeditcapaian').html(data);//menampilkan data ke dalam modal
												
															}
														});
													 });
												});
												</script>
												<script type="text/javascript">
												$(document).ready(function(){
													$('#modallihat').on('show.bs.modal', function (e) {
														var Id = $(e.relatedTarget).data('id');
														$.ajax({
															type :'post',
															url  :'serverside/modul/mod_sampah/get_lihatcapaian.php',
															data :'Id='+ Id,
															success : function(data){
												
															$('.hasil-datalihatcapaian').html(data);//menampilkan data ke dalam modal
												
															}
														});
													 });
												});
												</script>
					
<?php
}
elseif ($_GET['module']=='validasidatacapaian'){ 
?>
<script>
									
									function myFunctiondelete1(x){
									
									  swal.fire({
										  title: '',
										  text: "Validasi Data Capaian",
										  icon: 'warning',
										  showCancelButton: true,
										  confirmButtonText: 'Ya',
										  cancelButtonText: "Batalkan !",
											}).then(function (result) {
												if (result.value) {
												
										  $.ajax({
									
									type: "POST",
									url:"app/modul/mod_airlimbah/main_act.php?module=capianval&act=validasi",  
									data: {id:x},
									success: function (resultdata) {
									
									
									  swal.fire("", "Data Telah Divalidasi.", "success");
									 
									  $('.datatable-init-capaian1').DataTable().ajax.reload(); 
										
									}
									});
											  } else {
												swal.fire("", "Anda Membatalkan Aksi Ini", "error");
											  }
									
											});
									
									 
									}
									</script>
<script>
									
									function myFunctiondelete2(x){
									
									  swal.fire({
										  title: '',
										  text: "Validasi Data Capaian",
										  icon: 'warning',
										  showCancelButton: true,
										  confirmButtonText: 'Ya',
										  cancelButtonText: "Batalkan !",
											}).then(function (result) {
												if (result.value) {
												
										  $.ajax({
									
									type: "POST",
									url:"app/modul/mod_airminum/main_act.php?module=capianval&act=validasi",  
									data: {id:x},
									success: function (resultdata) {
									
									
									  swal.fire("", "Data Telah Divalidasi.", "success");
									 
									  $('.datatable-init-capaian2').DataTable().ajax.reload(); 
										
									}
									});
											  } else {
												swal.fire("", "Anda Membatalkan Aksi Ini", "error");
											  }
									
											});
									
									 
									}
									</script>
									<script>
									
									function myFunctiondelete3(x){
									
									  swal.fire({
										  title: '',
										  text: "Validasi Data Capaian",
										  icon: 'warning',
										  showCancelButton: true,
										  confirmButtonText: 'Ya',
										  cancelButtonText: "Batalkan !",
											}).then(function (result) {
												if (result.value) {
												
										  $.ajax({
									
									type: "POST",
									url:"app/modul/mod_sampah/main_act.php?module=capianval&act=validasi",  
									data: {id:x},
									success: function (resultdata) {
									
									
									  swal.fire("", "Data Telah Divalidasi.", "success");
									 
									  $('.datatable-init-capaian3').DataTable().ajax.reload(); 
										
									}
									});
											  } else {
												swal.fire("", "Anda Membatalkan Aksi Ini", "error");
											  }
									
											});
									
									 
									}
									</script>
<script type="text/javascript">
												$(document).ready(function(){
													$('#modallihat1').on('show.bs.modal', function (e) {
														var Id = $(e.relatedTarget).data('id');
														$.ajax({
															type :'post',
															url  :'serverside/modul/mod_airlimbah/get_lihatcapaian.php',
															data :'Id='+ Id,
															success : function(data){
												
															$('.hasil-datalihat1').html(data);//menampilkan data ke dalam modal
												
															}
														});
													 });
												});
												</script>
												<script type="text/javascript">
												$(document).ready(function(){
													$('#modallihat2').on('show.bs.modal', function (e) {
														var Id = $(e.relatedTarget).data('id');
														$.ajax({
															type :'post',
															url  :'serverside/modul/mod_airminum/get_lihatcapaian.php',
															data :'Id='+ Id,
															success : function(data){
												
															$('.hasil-datalihat2').html(data);//menampilkan data ke dalam modal
												
															}
														});
													 });
												});
												</script>

<script type="text/javascript">
												$(document).ready(function(){
													$('#modallihat3').on('show.bs.modal', function (e) {
														var Id = $(e.relatedTarget).data('id');
														$.ajax({
															type :'post',
															url  :'serverside/modul/mod_sampah/get_lihatcapaian.php',
															data :'Id='+ Id,
															success : function(data){
												
															$('.hasil-datalihat3').html(data);//menampilkan data ke dalam modal
												
															}
														});
													 });
												});
												</script>

<?php
}
elseif ($_GET['module']=='menu'){ 
	include 'app/modul/mod_frontend/scriptaddmenu_js.js';
	include 'app/modul/mod_frontend/scripteditmenu_js.js';
?>
<script>
 $(function(){
  $('#id_parent').select2({
    dropdownParent: $('#modaltambah')
  });
}); 
</script>
<script type="text/javascript">
		$(document).ready(function(){
			$('#modaledit').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_menu/get_edit.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
		
					}
				});
				
			 });
		});
		</script>
		<script>

function myFunctiondelete(x){

swal.fire({
  title: '',
  text: "Apakah Anda Benar Ingin Melakukan Aksi Ini !",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Ya !',
  cancelButtonText: "Batalkan !",
	}).then(function (result) {
		if (result.value) {
		
  $.ajax({

type: "POST",
url:"app/modul/mod_frontend/main_act.php?module=menu&act=nonaktifkan",  
data: {id:x},
success: function (resultdata) {


swal.fire("", "Data Telah "+resultdata, "success");

$('.datatable-init-exportmenu').DataTable().ajax.reload(); 

}
});
	  } else {
		swal.fire("", "Anda Membatalkan Aksi Ini", "error");
	  }

	});


}

</script>
 <?php
}
elseif ($_GET['module']=='tahundata'){ 
	include 'app/modul/mod_adminprov/scriptaddtahun_js.js';
	include 'app/modul/mod_adminprov/scriptedittahun_js.js';
?>
<script type="text/javascript">
		$(document).ready(function(){
			$('#modaledit').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_tahun/get_edit.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
		
					}
				});
				
			 });
		});
		</script>
		<?php
}
elseif ($_GET['module']=='rubahpass'){
	include 'app/modul/mod_pass/scripteditpass_js.js'; 
?>
<script type="text/javascript">
      $(document).ready(function($) {
        $('#myPassword').passtrength({
          minChars: 8,
          passwordToggle: true,
          tooltip: true
        });
      });
      </script>
<?php
}
elseif ($_GET['module']=='targetdata'){
	include 'app/modul/mod_adminprov/scriptaddtargetlimbah_js.js';
	include 'app/modul/mod_adminprov/scriptedittargetlimbah_js.js';
	include 'app/modul/mod_adminprov/scriptaddtargetairminum_js.js';
	include 'app/modul/mod_adminprov/scriptedittargetairminum_js.js';
	include 'app/modul/mod_adminprov/scriptaddtargetsampah_js.js';
	include 'app/modul/mod_adminprov/scriptedittargetsampah_js.js';
?>
<script>
 $(function(){
  $('#kode_kota1').select2({
    dropdownParent: $('#modaltambahlimbah')
  });
}); 
</script>
<script>
 $(function(){
  $('#kode_kota29').select2({
    dropdownParent: $('#modaltambahairminum')
  });
}); 
</script>
<script>
 $(function(){
  $('#kode_kota365').select2({
    dropdownParent: $('#modaltambahsampah')
  });
}); 
</script>
<script type="text/javascript">
		$(document).ready(function(){
			$('#modaleditlimbah').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_adminprov/get_edittargetlimbah.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatuslimbah').html(data);//menampilkan data ke dalam modal
		
					}
				});
				
			 });
		});
		</script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#modaleditairminum').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_adminprov/get_edittargetairminum.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatusairminum').html(data);//menampilkan data ke dalam modal
		
					}
				});
				
			 });
		});
		</script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#modaleditsampah').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_adminprov/get_edittargetsampah.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatussampah').html(data);//menampilkan data ke dalam modal
		
					}
				});
				
			 });
		});
		</script>
<?php
}elseif ($_GET['module']=='ipltlimbah'){
	include 'app/modul/mod_airlimbah/scriptedit_js.js';
?>
<script type="text/javascript">
		$(document).ready(function(){
			$('#modaledit').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_airlimbah/get_editfoto.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-edit').html(data);//menampilkan data ke dalam modal
		
					}
				});
				
			 });
		});
		</script>
<script type="text/javascript">
		$(document).ready(function(){
			$('#modalfoto').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_airlimbah/get_fotoiplt.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-foto').html(data);//menampilkan data ke dalam modal
		
					}
				});
				
			 });
		});
		</script>
<script type="text/javascript">
		$(document).ready(function(){
			$('#modalmap').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_airlimbah/get_mapiplt.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-map').html(data);//menampilkan data ke dalam modal
		
					}
				});
				
			 });
		});
		</script>
<?php
}
elseif ($_GET['module']=='spaldlimbah'){
	include 'app/modul/mod_airlimbah/scripteditspald_js.js';
	?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#modaledit').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_airlimbah/get_editfotospald.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-edit').html(data);//menampilkan data ke dalam modal
		
					}
				});
				
			 });
		});
		</script>
	<script type="text/javascript">
			$(document).ready(function(){
				$('#modalfoto').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_airlimbah/get_fotospald.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-foto').html(data);//menampilkan data ke dalam modal
			
						}
					});
					
				 });
			});
			</script>
	<script type="text/javascript">
			$(document).ready(function(){
				$('#modalmap').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_airlimbah/get_mapspald.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-map').html(data);//menampilkan data ke dalam modal
			
						}
					});
					
				 });
			});
			</script>
	<?php
	}elseif ($_GET['module']=='spamreg'){
		include 'app/modul/mod_airminum/scripteditspamreg_js.js';
		?>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#modaledit').on('show.bs.modal', function (e) {
					var Id = $(e.relatedTarget).data('id');
					$.ajax({
						type :'post',
						url  :'serverside/modul/mod_airminum/get_editfotospamreg.php',
						data :'Id='+ Id,
						success : function(data){
			
						$('.hasil-edit').html(data);//menampilkan data ke dalam modal
			
						}
					});
					
				 });
			});
			</script>
		<script type="text/javascript">
				$(document).ready(function(){
					$('#modalfoto').on('show.bs.modal', function (e) {
						var Id = $(e.relatedTarget).data('id');
						$.ajax({
							type :'post',
							url  :'serverside/modul/mod_airminum/get_fotospamreg.php',
							data :'Id='+ Id,
							success : function(data){
				
							$('.hasil-foto').html(data);//menampilkan data ke dalam modal
				
							}
						});
						
					 });
				});
				</script>
		<script type="text/javascript">
				$(document).ready(function(){
					$('#modalmap').on('show.bs.modal', function (e) {
						var Id = $(e.relatedTarget).data('id');
						$.ajax({
							type :'post',
							url  :'serverside/modul/mod_airminum/get_mapsspamreg.php',
							data :'Id='+ Id,
							success : function(data){
				
							$('.hasil-map').html(data);//menampilkan data ke dalam modal
				
							}
						});
						
					 });
				});
				</script>
		<?php
		}elseif ($_GET['module']=='spamkab'){
			include 'app/modul/mod_airminum/scripteditspamkab_js.js';
			?>
			<script type="text/javascript">
				$(document).ready(function(){
					$('#modaledit').on('show.bs.modal', function (e) {
						var Id = $(e.relatedTarget).data('id');
						$.ajax({
							type :'post',
							url  :'serverside/modul/mod_airminum/get_editfotospamkab.php',
							data :'Id='+ Id,
							success : function(data){
				
							$('.hasil-edit').html(data);//menampilkan data ke dalam modal
				
							}
						});
						
					 });
				});
				</script>
			<script type="text/javascript">
					$(document).ready(function(){
						$('#modalfoto').on('show.bs.modal', function (e) {
							var Id = $(e.relatedTarget).data('id');
							$.ajax({
								type :'post',
								url  :'serverside/modul/mod_airminum/get_fotospamkab.php',
								data :'Id='+ Id,
								success : function(data){
					
								$('.hasil-foto').html(data);//menampilkan data ke dalam modal
					
								}
							});
							
						 });
					});
					</script>
			<script type="text/javascript">
					$(document).ready(function(){
						$('#modalmap').on('show.bs.modal', function (e) {
							var Id = $(e.relatedTarget).data('id');
							$.ajax({
								type :'post',
								url  :'serverside/modul/mod_airminum/get_mapsspamkab.php',
								data :'Id='+ Id,
								success : function(data){
					
								$('.hasil-map').html(data);//menampilkan data ke dalam modal
					
								}
							});
							
						 });
					});
					</script>
			<?php
			}elseif ($_GET['module']=='spamikk'){
				include 'app/modul/mod_airminum/scripteditspamikk_js.js';
				?>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#modaledit').on('show.bs.modal', function (e) {
							var Id = $(e.relatedTarget).data('id');
							$.ajax({
								type :'post',
								url  :'serverside/modul/mod_airminum/get_editfotospamikk.php',
								data :'Id='+ Id,
								success : function(data){
					
								$('.hasil-edit').html(data);//menampilkan data ke dalam modal
					
								}
							});
							
						 });
					});
					</script>
				<script type="text/javascript">
						$(document).ready(function(){
							$('#modalfoto').on('show.bs.modal', function (e) {
								var Id = $(e.relatedTarget).data('id');
								$.ajax({
									type :'post',
									url  :'serverside/modul/mod_airminum/get_fotospamikk.php',
									data :'Id='+ Id,
									success : function(data){
						
									$('.hasil-foto').html(data);//menampilkan data ke dalam modal
						
									}
								});
								
							 });
						});
						</script>
				<script type="text/javascript">
						$(document).ready(function(){
							$('#modalmap').on('show.bs.modal', function (e) {
								var Id = $(e.relatedTarget).data('id');
								$.ajax({
									type :'post',
									url  :'serverside/modul/mod_airminum/get_mapsspamikk.php',
									data :'Id='+ Id,
									success : function(data){
						
									$('.hasil-map').html(data);//menampilkan data ke dalam modal
						
									}
								});
								
							 });
						});
						</script>
				<?php
				}elseif ($_GET['module']=='spamperdesaan'){
					include 'app/modul/mod_airminum/scripteditspamdesa_js.js';
					?>
					<script type="text/javascript">
						$(document).ready(function(){
							$('#modaledit').on('show.bs.modal', function (e) {
								var Id = $(e.relatedTarget).data('id');
								$.ajax({
									type :'post',
									url  :'serverside/modul/mod_airminum/get_editfotospamdesa.php',
									data :'Id='+ Id,
									success : function(data){
						
									$('.hasil-edit').html(data);//menampilkan data ke dalam modal
						
									}
								});
								
							 });
						});
						</script>
					<script type="text/javascript">
							$(document).ready(function(){
								$('#modalfoto').on('show.bs.modal', function (e) {
									var Id = $(e.relatedTarget).data('id');
									$.ajax({
										type :'post',
										url  :'serverside/modul/mod_airminum/get_fotospamdesa.php',
										data :'Id='+ Id,
										success : function(data){
							
										$('.hasil-foto').html(data);//menampilkan data ke dalam modal
							
										}
									});
									
								 });
							});
							</script>
					<script type="text/javascript">
							$(document).ready(function(){
								$('#modalmap').on('show.bs.modal', function (e) {
									var Id = $(e.relatedTarget).data('id');
									$.ajax({
										type :'post',
										url  :'serverside/modul/mod_airminum/get_mapsspamdesa.php',
										data :'Id='+ Id,
										success : function(data){
							
										$('.hasil-map').html(data);//menampilkan data ke dalam modal
							
										}
									});
									
								 });
							});
							</script>
					<?php
					}
					elseif ($_GET['module']=='layanantps'){
						include 'app/modul/mod_sampah/scriptedittps_js.js';
						?>
						<script type="text/javascript">
							$(document).ready(function(){
								$('#modaledit').on('show.bs.modal', function (e) {
									var Id = $(e.relatedTarget).data('id');
									$.ajax({
										type :'post',
										url  :'serverside/modul/mod_sampah/get_editfototps.php',
										data :'Id='+ Id,
										success : function(data){
							
										$('.hasil-edit').html(data);//menampilkan data ke dalam modal
							
										}
									});
									
								 });
							});
							</script>
						<script type="text/javascript">
								$(document).ready(function(){
									$('#modalfoto').on('show.bs.modal', function (e) {
										var Id = $(e.relatedTarget).data('id');
										$.ajax({
											type :'post',
											url  :'serverside/modul/mod_sampah/get_fototps.php',
											data :'Id='+ Id,
											success : function(data){
								
											$('.hasil-foto').html(data);//menampilkan data ke dalam modal
								
											}
										});
										
									 });
								});
								</script>
						<script type="text/javascript">
								$(document).ready(function(){
									$('#modalmap').on('show.bs.modal', function (e) {
										var Id = $(e.relatedTarget).data('id');
										$.ajax({
											type :'post',
											url  :'serverside/modul/mod_sampah/get_mapstps.php',
											data :'Id='+ Id,
											success : function(data){
								
											$('.hasil-map').html(data);//menampilkan data ke dalam modal
								
											}
										});
										
									 });
								});
								</script>
						<?php
						}elseif ($_GET['module']=='layanantpst'){
							include 'app/modul/mod_sampah/scriptedittpst_js.js';
							?>
							<script type="text/javascript">
								$(document).ready(function(){
									$('#modaledit').on('show.bs.modal', function (e) {
										var Id = $(e.relatedTarget).data('id');
										$.ajax({
											type :'post',
											url  :'serverside/modul/mod_sampah/get_editfototpst.php',
											data :'Id='+ Id,
											success : function(data){
								
											$('.hasil-edit').html(data);//menampilkan data ke dalam modal
								
											}
										});
										
									 });
								});
								</script>
							<script type="text/javascript">
									$(document).ready(function(){
										$('#modalfoto').on('show.bs.modal', function (e) {
											var Id = $(e.relatedTarget).data('id');
											$.ajax({
												type :'post',
												url  :'serverside/modul/mod_sampah/get_fototpst.php',
												data :'Id='+ Id,
												success : function(data){
									
												$('.hasil-foto').html(data);//menampilkan data ke dalam modal
									
												}
											});
											
										 });
									});
									</script>
							<script type="text/javascript">
									$(document).ready(function(){
										$('#modalmap').on('show.bs.modal', function (e) {
											var Id = $(e.relatedTarget).data('id');
											$.ajax({
												type :'post',
												url  :'serverside/modul/mod_sampah/get_mapstpst.php',
												data :'Id='+ Id,
												success : function(data){
									
												$('.hasil-map').html(data);//menampilkan data ke dalam modal
									
												}
											});
											
										 });
									});
									</script>
							<?php
							}elseif ($_GET['module']=='layanantpa'){
								include 'app/modul/mod_sampah/scriptedittpa_js.js';
								?>
								<script type="text/javascript">
									$(document).ready(function(){
										$('#modaledit').on('show.bs.modal', function (e) {
											var Id = $(e.relatedTarget).data('id');
											$.ajax({
												type :'post',
												url  :'serverside/modul/mod_sampah/get_editfototpa.php',
												data :'Id='+ Id,
												success : function(data){
									
												$('.hasil-edit').html(data);//menampilkan data ke dalam modal
									
												}
											});
											
										 });
									});
									</script>
								<script type="text/javascript">
										$(document).ready(function(){
											$('#modalfoto').on('show.bs.modal', function (e) {
												var Id = $(e.relatedTarget).data('id');
												$.ajax({
													type :'post',
													url  :'serverside/modul/mod_sampah/get_fototpa.php',
													data :'Id='+ Id,
													success : function(data){
										
													$('.hasil-foto').html(data);//menampilkan data ke dalam modal
										
													}
												});
												
											 });
										});
										</script>
								<script type="text/javascript">
										$(document).ready(function(){
											$('#modalmap').on('show.bs.modal', function (e) {
												var Id = $(e.relatedTarget).data('id');
												$.ajax({
													type :'post',
													url  :'serverside/modul/mod_sampah/get_mapstpa.php',
													data :'Id='+ Id,
													success : function(data){
										
													$('.hasil-map').html(data);//menampilkan data ke dalam modal
										
													}
												});
												
											 });
										});
										</script>
								<?php
								}elseif ($_GET['module']=='perumahan'){
									include 'app/modul/mod_perumahan/scripteditperumahan_js.js';
									?>
									<script type="text/javascript">
										$(document).ready(function(){
											$('#modaledit').on('show.bs.modal', function (e) {
												var Id = $(e.relatedTarget).data('id');
												$.ajax({
													type :'post',
													url  :'serverside/modul/mod_perumahan/get_editfotoperumahan.php',
													data :'Id='+ Id,
													success : function(data){
										
													$('.hasil-edit').html(data);//menampilkan data ke dalam modal
										
													}
												});
												
											 });
										});
										</script>
									<script type="text/javascript">
											$(document).ready(function(){
												$('#modalfoto').on('show.bs.modal', function (e) {
													var Id = $(e.relatedTarget).data('id');
													$.ajax({
														type :'post',
														url  :'serverside/modul/mod_perumahan/get_fotoperumahan.php',
														data :'Id='+ Id,
														success : function(data){
											
														$('.hasil-foto').html(data);//menampilkan data ke dalam modal
											
														}
													});
													
												 });
											});
											</script>
									<script type="text/javascript">
											$(document).ready(function(){
												$('#modalmap').on('show.bs.modal', function (e) {
													var Id = $(e.relatedTarget).data('id');
													$.ajax({
														type :'post',
														url  :'serverside/modul/mod_perumahan/get_mapsperumahan.php',
														data :'Id='+ Id,
														success : function(data){
											
														$('.hasil-map').html(data);//menampilkan data ke dalam modal
											
														}
													});
													
												 });
											});
											</script>
									<?php
									}elseif ($_GET['module']=='kawasankumuhdibawah10ha'){
										include 'app/modul/mod_kumuh/scriptedit1_js.js';
										?>
										<script type="text/javascript">
											$(document).ready(function(){
												$('#modaledit').on('show.bs.modal', function (e) {
													var Id = $(e.relatedTarget).data('id');
													$.ajax({
														type :'post',
														url  :'serverside/modul/mod_kumuh/get_edit1.php',
														data :'Id='+ Id,
														success : function(data){
											
														$('.hasil-edit').html(data);//menampilkan data ke dalam modal
											
														}
													});
													
												 });
											});
											</script>
											<script type="text/javascript">
											$(document).ready(function(){
												$('#modalfoto').on('show.bs.modal', function (e) {
													var Id = $(e.relatedTarget).data('id');
													$.ajax({
														type :'post',
														url  :'serverside/modul/mod_kumuh/get_foto1.php',
														data :'Id='+ Id,
														success : function(data){
											
														$('.hasil-foto').html(data);//menampilkan data ke dalam modal
											
														}
													});
													
												 });
											});
											</script>
									<?php
									}elseif ($_GET['module']=='kawasankumuhdiatas10ha'){
										include 'app/modul/mod_kumuh/scriptedit2_js.js';
										?>
										<script type="text/javascript">
											$(document).ready(function(){
												$('#modaledit').on('show.bs.modal', function (e) {
													var Id = $(e.relatedTarget).data('id');
													$.ajax({
														type :'post',
														url  :'serverside/modul/mod_kumuh/get_edit2.php',
														data :'Id='+ Id,
														success : function(data){
											
														$('.hasil-edit').html(data);//menampilkan data ke dalam modal
											
														}
													});
													
												 });
											});
											</script>
											<script type="text/javascript">
											$(document).ready(function(){
												$('#modalfoto').on('show.bs.modal', function (e) {
													var Id = $(e.relatedTarget).data('id');
													$.ajax({
														type :'post',
														url  :'serverside/modul/mod_kumuh/get_foto2.php',
														data :'Id='+ Id,
														success : function(data){
											
														$('.hasil-foto').html(data);//menampilkan data ke dalam modal
											
														}
													});
													
												 });
											});
											</script>
<?php
}elseif($_GET['module']=='pendataan'){
	include 'app/modul/mod_pendataan/scriptaddrtlh_js.js';
?>
<script>  
 $(document).ready(function(){  
$("#foto").change(function(){
               var allowedTypes = ['image/png','image/jpg','image/jpeg'];
               var file = this.files[0];
               var fileType = file.type;
			   var ukuranfile=file.size;
               if(!allowedTypes.includes(fileType)){
                   
				   swal.fire("", "Silakan pilih file yang valid (.jpg,jpeg,.png)", "error"); 
                   $("#foto").val('');
                   return false;
               }else if(ukuranfile > 2000000 ){

                  swal.fire("", "Ukuran File Kebesaran, Maksimal 2 MB", "error"); 
                  $("#foto").val('');
                  return false;

}
           });

})  
 </script> 	
<style type="text/css">
#map {
height: 400px;

}
</style>

<script type="text/javascript">


var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("latitude").value = posisiTitik.lat();
    document.getElementById("longitude").value = posisiTitik.lng();
    
}

//* Fungsi untuk mendapatkan nilai latitude longitude
function updateMarkerPosition(latLng) {
document.getElementById('latitude').value = [latLng.lat()]
document.getElementById('longitude').value = [latLng.lng()]
}
 
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 8,
// Nilai 5.381281, 95.954826 adalah Nilai Latitude dan Longitude titik kordinat Kota Sigli
center: new google.maps.LatLng(-4.4328524,104.7681383),
mapTypeId: google.maps.MapTypeId.ROADMAP 
});
//posisi awal marker
var latLng = new google.maps.LatLng(-4.4328524,104.7681383);
 
/* buat marker yang bisa di drag lalu
panggil fungsi updateMarkerPosition(latLng)
dan letakan posisi terakhir di id=latitude dan id=longitude
*/
var marker = new google.maps.Marker({
position : latLng,
title : 'lokasi',
map : map,
draggable : true
});
 
updateMarkerPosition(latLng);
google.maps.event.addListener(marker, 'drag', function() {
// ketika marker di drag, otomatis nilai latitude dan longitude
//menyesuaikan dengan posisi marker
updateMarkerPosition(marker.getPosition());
});

google.maps.event.addListener(map, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

</script>
<script language="javascript">
$(document).ready(function() {
	$('#kode_kota').change(function() { 
		var kode_kota = $("#kode_kota").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kecamatan2.php',
			data: 'kode_kota=' + kode_kota, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kec').html(response);
                
                
			}
		});
    })
});
</script>	
<script language="javascript">
$(document).ready(function() {
	$('#kode_kec').change(function() { 
		var kode_kec = $("#kode_kec").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kelurahan2.php',
			data: 'kode_kec=' + kode_kec, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kel').html(response);
                
                
			}
		});
    })
});
</script>					
<?php
}
elseif($_GET['module']=='lihatpendataan'){
?>
<script language="javascript">
$(document).ready(function() {
	$('#kode_kota').change(function() { 
		var kode_kota = $("#kode_kota").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kecamatan2.php',
			data: 'kode_kota=' + kode_kota, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kec').html(response);
                
                
			}
		});
    })
});
</script>	
<script language="javascript">
$(document).ready(function() {
	$('#kode_kec').change(function() { 
		var kode_kec = $("#kode_kec").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kelurahan2.php',
			data: 'kode_kec=' + kode_kec, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kel').html(response);
                
                
			}
		});
    })
});
</script>
<script>

function myFunctiondelete(x){

  swal.fire({
      title: '',
      text: "Hapus Data Pendataan",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya',
      cancelButtonText: "Batalkan !",
		}).then(function (result) {
            if (result.value) {
			
      $.ajax({

type: "POST",
url:"app/modul/mod_pendataan/main_act.php?module=pendataan&act=hapus",  
data: {id:x},
success: function (resultdata) {
if(resultdata==1){
  swal.fire("", "Data Telah Dihapus.", "success");
  $('.datatable-init-pendataan').DataTable().ajax.reload(); 
}else{

	swal.fire("", "Data Sudah Terverifikasi.", "error");
  $('.datatable-init-pendataan').DataTable().ajax.reload(); 
}
    
}
});
		  } else {
			swal.fire("", "Anda Membatalkan Aksi Ini", "error");
		  }

		});

 
}
</script>
<script type="text/javascript">
$(document).ready(function(){
$('#modallihat').on('show.bs.modal', function (e) {
var Id = $(e.relatedTarget).data('id');
$.ajax({
type :'post',
url  :'serverside/modul/mod_pendataan/get_data.php',
data :'Id='+ Id,
success : function(data){
$('.hasil-lihat').html(data);//menampilkan data ke dalam modal
}
});
});
});
</script>
<script>
  $(document).ready(function(){
    $('.close').click(function(){  
      $('#modaledit').modal('hide');
	  $('#modallihat').modal('hide');
    })
		});
 </script>		
<?php
}
elseif($_GET['module']=='lihatpendataan1'){
	?>
	
<style type="text/css">
#map1 {
height: 400px;

}
</style>
<script type="text/javascript">
//* Fungsi untuk mendapatkan nilai latitude longitude
 
 var locations = [
    <?php
$sql_lokasi="select * from rtlh where sha1(Id_rtlh)='$key'";
$result=mysqli_query($koneksi,$sql_lokasi);
// ambil nama,lat dan lon dari table lokasi dengan menggunakan mysql_fetch_object, sesuaikan file nya yg ditabel.
while($data=mysqli_fetch_array($result)){
?>
['<?php echo $data['Id_rtlh'];?>', '<?php echo $data['latitude'];?>', '<?php echo $data['longitude'];?>'],
<?php
}
?>
];
 
var map = new google.maps.Map(document.getElementById('map1'), {
zoom: 14,
// Nilai 5.381281, 95.954826 adalah Nilai Latitude dan Longitude titik kordinat Kota Sigli
center: new google.maps.LatLng(locations[0][1],locations[0][2]),
mapTypeId: google.maps.MapTypeId.ROADMAP 
});
//posisi awal marker
var latLng = new google.maps.LatLng(locations[0][1],locations[0][2]);
 
/* buat marker yang bisa di drag lalu
panggil fungsi updateMarkerPosition(latLng)
dan letakan posisi terakhir di id=latitude dan id=longitude
*/
var marker = new google.maps.Marker({
position : latLng,
title : 'lokasi',
map : map,
draggable : false,
animation: google.maps.Animation.DROP,
icon: 'marker1.png'
});
</script>


<?php
}
elseif($_GET['module']=='verifikasi'){
	include 'app/modul/mod_verifikasi/scriptedit_js.js';
	?>
	<script language="javascript">
	$(document).ready(function() {
		$('#kode_kota').change(function() { 
			var kode_kota = $("#kode_kota").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kecamatan2.php',
				data: 'kode_kota=' + kode_kota, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kec').html(response);
					
					
				}
			});
		})
	});
	</script>	
	<script language="javascript">
	$(document).ready(function() {
		$('#kode_kec').change(function() { 
			var kode_kec = $("#kode_kec").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kelurahan2.php',
				data: 'kode_kec=' + kode_kec, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kel').html(response);
					
					
				}
			});
		})
	});
	</script>
	<script type="text/javascript">
$(document).ready(function(){
$('#modaledit').on('show.bs.modal', function (e) {
var Id = $(e.relatedTarget).data('id');
$.ajax({
type :'post',
url  :'serverside/modul/mod_verifikasi/get_dataver.php',
data :'Id='+ Id,
success : function(data){
$('.hasil-lihat').html(data);//menampilkan data ke dalam modal
}
});
});
});
</script>

	<?php
}
elseif($_GET['module']=='lihatverifikasi'){
	?>
	<script language="javascript">
	$(document).ready(function() {
		$('#kode_kota').change(function() { 
			var kode_kota = $("#kode_kota").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kecamatan2.php',
				data: 'kode_kota=' + kode_kota, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kec').html(response);
					
					
				}
			});
		})
	});
	</script>	
	<script language="javascript">
	$(document).ready(function() {
		$('#kode_kec').change(function() { 
			var kode_kec = $("#kode_kec").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kelurahan2.php',
				data: 'kode_kec=' + kode_kec, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kel').html(response);
					
					
				}
			});
		})
	});
	</script>
	<?php
}
elseif($_GET['module']=='lihatpenanganan'){
	?>
	<script language="javascript">
	$(document).ready(function() {
		$('#kode_kota').change(function() { 
			var kode_kota = $("#kode_kota").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kecamatan2.php',
				data: 'kode_kota=' + kode_kota, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kec').html(response);
					
					
				}
			});
		})
	});
	</script>	
	<script language="javascript">
	$(document).ready(function() {
		$('#kode_kec').change(function() { 
			var kode_kec = $("#kode_kec").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kelurahan2.php',
				data: 'kode_kec=' + kode_kec, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kel').html(response);
					
					
				}
			});
		})
	});
	</script>
	<?php
}
elseif($_GET['module']=='penanganan'){
	include 'app/modul/mod_penanganan/scriptedit_js.js';
	?>
	<script language="javascript">
	$(document).ready(function() {
		$('#kode_kota').change(function() { 
			var kode_kota = $("#kode_kota").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kecamatan2.php',
				data: 'kode_kota=' + kode_kota, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kec').html(response);
					
					
				}
			});
		})
	});
	</script>	
	<script language="javascript">
	$(document).ready(function() {
		$('#kode_kec').change(function() { 
			var kode_kec = $("#kode_kec").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kelurahan2.php',
				data: 'kode_kec=' + kode_kec, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kel').html(response);
					
					
				}
			});
		})
	});
	</script>
	<script type="text/javascript">
$(document).ready(function(){
$('#modaledit').on('show.bs.modal', function (e) {
var Id = $(e.relatedTarget).data('id');
$.ajax({
type :'post',
url  :'serverside/modul/mod_penanganan/get_dataver.php',
data :'Id='+ Id,
success : function(data){
$('.hasil-lihat').html(data);//menampilkan data ke dalam modal
}
});
});
});
</script>
	<?php
}
elseif($_GET['module']=='petasebaran'){
?>	
<script language="javascript">
	$(document).ready(function() {
		$('#kode_kota').change(function() { 
			var kode_kota = $("#kode_kota").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kecamatan2.php',
				data: 'kode_kota=' + kode_kota, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kec').html(response);
					
					
				}
			});
		})
	});
	</script>	
	<script language="javascript">
	$(document).ready(function() {
		$('#kode_kec').change(function() { 
			var kode_kec = $("#kode_kec").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kelurahan2.php',
				data: 'kode_kec=' + kode_kec, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kel').html(response);
					
					
				}
			});
		})
	});
	</script>
	    
		<style type="text/css">
#map {
height: 600px;

}
</style>
     <script type="text/javascript">
 $(document).ready(function(){              
var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("latitude").value = posisiTitik.lat();
    document.getElementById("longitude").value = posisiTitik.lng();
    
}

//* Fungsi untuk mendapatkan nilai latitude longitude
function updateMarkerPosition(latLng) {
document.getElementById('latitude').value = [latLng.lat()]
document.getElementById('longitude').value = [latLng.lng()]
}
 
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 8,
// Nilai 5.381281, 95.954826 adalah Nilai Latitude dan Longitude titik kordinat Kota Sigli
center: new google.maps.LatLng(-4.3744228,105.1939337),
mapTypeId: google.maps.MapTypeId.ROADMAP 
});
//posisi awal marker
var latLng = new google.maps.LatLng(-4.3744228,105.1939337);
 
/* buat marker yang bisa di drag lalu
panggil fungsi updateMarkerPosition(latLng)
dan letakan posisi terakhir di id=latitude dan id=longitude
*/
var marker = new google.maps.Marker({
position : latLng,
title : 'lokasi',
map : map,
draggable : true,
icon: 'marker.png'
});
 
updateMarkerPosition(latLng);
google.maps.event.addListener(marker, 'drag', function() {
// ketika marker di drag, otomatis nilai latitude dan longitude
//menyesuaikan dengan posisi marker
updateMarkerPosition(marker.getPosition());
});

google.maps.event.addListener(map, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });
 })
</script>
<script>
      $(document).ready(function(){                                
      $('.caridata').click(function(){
		var kodekota=document.getElementById("kode_kota").value;
		var kodekec=document.getElementById("kode_kec").value;
        var kodekel=document.getElementById("kode_kel").value;
        var tahundata=document.getElementById("tahun_data").value;
      
     
      if(tahundata != '' && kodekota != '' && kodekec != '' && kodekel != '') {
     
       var mapCanvas = document.getElementById('map');      
       // Center maps
       var myLatlng = new google.maps.LatLng(-4.3744228,105.1939337);
       // Map Options    
       var mapOptions = {
         zoom: 8,
         center: myLatlng
       };
       
       // Create the Map
       map = new google.maps.Map(mapCanvas, mapOptions);

       var infoWindow = new google.maps.InfoWindow;
      //var infowindow = new google.maps.InfoWindow();
       //request data from data-maps.php
       $.getJSON( "serverside/data-maps.php?tahun="+tahundata+"&kodekota="+kodekota+"&kodekec="+kodekec+"&kodekel="+kodekel, function( data ) {
         //parsing data json 
         $.each( data, function( i, item ) {

           //set point marker
           var point = new google.maps.LatLng(
                       parseFloat(item.latitude),
                       parseFloat(item.longitude));

                       
            
var contentString = '<div id="content"><div id="siteNotice"></div><h3 id="firstHeading">'+item.nama_kk+'</h3><div id="bodyContent"><p><br><img src="<?php echo $urlmain;?>foto_tempat/'+item.foto+'" width="200" height="150" style="float:left;margin:0 5px 0 0;"></p></div></div>';

var infowindow = new google.maps.InfoWindow({
  content: contentString,
  position: point,
  maxWidth: 400,

});

           //marker option
           var marker = new google.maps.Marker({
               map: map,
               animation: google.maps.Animation.DROP,
               position: point,
               icon: "marker.png"
           });

           marker.addListener('click', function() {
          // tampilkan info window di atas marker
          
          infowindow.open(map, marker);
        });

        /*   marker.addListener('click', function() {

            
              infoWindow.setContent(infowincontent);
              infoWindow.open(map, marker);
            });*/

           

         });
         
       });
       
      
      }

      })       
      })   
      </script>
<?php
}
elseif($_GET['module']=='pendataankumuh'){
	include 'app/modul/mod_pendataan/scriptaddrtlh_js.js';
?>
<style type="text/css">
#map {
height: 400px;

}
</style>

<script type="text/javascript">


var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("latitude").value = posisiTitik.lat();
    document.getElementById("longitude").value = posisiTitik.lng();
    
}

//* Fungsi untuk mendapatkan nilai latitude longitude
function updateMarkerPosition(latLng) {
document.getElementById('latitude').value = [latLng.lat()]
document.getElementById('longitude').value = [latLng.lng()]
}
 
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 8,
// Nilai 5.381281, 95.954826 adalah Nilai Latitude dan Longitude titik kordinat Kota Sigli
center: new google.maps.LatLng(-4.4328524,104.7681383),
mapTypeId: google.maps.MapTypeId.ROADMAP 
});
//posisi awal marker
var latLng = new google.maps.LatLng(-4.4328524,104.7681383);
 
/* buat marker yang bisa di drag lalu
panggil fungsi updateMarkerPosition(latLng)
dan letakan posisi terakhir di id=latitude dan id=longitude
*/
var marker = new google.maps.Marker({
position : latLng,
title : 'lokasi',
map : map,
draggable : true
});
 
updateMarkerPosition(latLng);
google.maps.event.addListener(marker, 'drag', function() {
// ketika marker di drag, otomatis nilai latitude dan longitude
//menyesuaikan dengan posisi marker
updateMarkerPosition(marker.getPosition());
});

google.maps.event.addListener(map, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

</script>
<script language="javascript">
$(document).ready(function() {
	$('#kode_kota').change(function() { 
		var kode_kota = $("#kode_kota").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kecamatan2.php',
			data: 'kode_kota=' + kode_kota, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kec').html(response);
                
                
			}
		});
    })
});
</script>	
<script language="javascript">
$(document).ready(function() {
	$('#kode_kec').change(function() { 
		var kode_kec = $("#kode_kec").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kelurahan2.php',
			data: 'kode_kec=' + kode_kec, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kel').html(response);
                
                
			}
		});
    })
});
</script>
<?php
}elseif($_GET['module']=='editpendataan'){
	include 'app/modul/mod_pendataan/scripteditrtlh_js.js';
?>
<style type="text/css">
#map1 {
height: 400px;

}
</style>
<script type="text/javascript">
//* Fungsi untuk mendapatkan nilai latitude longitude
var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("latitude").value = posisiTitik.lat();
    document.getElementById("longitude").value = posisiTitik.lng();
    
}
function updateMarkerPosition(latLng) {
document.getElementById('latitude').value = [latLng.lat()]
document.getElementById('longitude').value = [latLng.lng()]
}
 var locations = [
    <?php
$sql_lokasi="select * from rtlh where sha1(Id_rtlh)='$key'";
$result=mysqli_query($koneksi,$sql_lokasi);
// ambil nama,lat dan lon dari table lokasi dengan menggunakan mysql_fetch_object, sesuaikan file nya yg ditabel.
while($data=mysqli_fetch_array($result)){
?>
['<?php echo $data['Id_rtlh'];?>', '<?php echo $data['latitude'];?>', '<?php echo $data['longitude'];?>'],
<?php
}
?>
];
 
var map = new google.maps.Map(document.getElementById('map1'), {
zoom: 14,
// Nilai 5.381281, 95.954826 adalah Nilai Latitude dan Longitude titik kordinat Kota Sigli
center: new google.maps.LatLng(locations[0][1],locations[0][2]),
mapTypeId: google.maps.MapTypeId.ROADMAP 
});
//posisi awal marker
var latLng = new google.maps.LatLng(locations[0][1],locations[0][2]);
 
/* buat marker yang bisa di drag lalu
panggil fungsi updateMarkerPosition(latLng)
dan letakan posisi terakhir di id=latitude dan id=longitude
*/
var marker = new google.maps.Marker({
position : latLng,
title : 'lokasi',
map : map,
draggable : true,
animation: google.maps.Animation.DROP,
icon: 'marker1.png',
});

 
updateMarkerPosition(latLng);
google.maps.event.addListener(marker, 'drag', function() {
// ketika marker di drag, otomatis nilai latitude dan longitude
//menyesuaikan dengan posisi marker
updateMarkerPosition(marker.getPosition());
});

google.maps.event.addListener(map, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });
</script>
<?php
}elseif($_GET['module']=='importpendataan'){
	include 'app/modul/mod_pendataan/scriptimport_js.js';
?>
<script>  
 $(document).ready(function(){  
$("#template").change(function(){
               var allowedTypes = ['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet','application/vnd.ms-excel'];
               var file = this.files[0];
               var fileType = file.type;
			   var ukuranfile=file.size;
               if(!allowedTypes.includes(fileType)){
                   
				   swal.fire("", "Silakan pilih file yang valid (.xlsx)", "error"); 
                   $("#template").val('');
                   return false;
               }else if(ukuranfile > 2000000 ){

                  swal.fire("", "Ukuran File Kebesaran, Maksimal 2 MB", "error"); 
                  $("#template").val('');
                  return false;

}
           });

})  
 </script> 
<script type="text/javascript">
    $(document).ready(function(){ 
		var key = $("#rdm1").val();
      $('#import_excel').on('submit', function(event){  
       event.preventDefault();
 //=============================================================
       

		$.ajax({  
            url:"serverside/importpendataan.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,  
            processData:false,
            beforeSend:function(){
              $('#sebentar').html("<div class='alert alert-danger' role='alert'>Mohon Tunggu, Import Data Sedang Berlangsung..</div>");
              $('#process').css('display', 'block');
            },  
            success:function(data){  
             var percentage = 0;

             var timer = setInterval(function(){
               percentage = percentage + 20;
               progress_bar_process(percentage, timer);
             }, 1000);

             console.log(data);
             
           },

           error:function(data){

            $('#sebentar').html("<div class='alert alert-danger' role='alert'>Server Error!</div>");

            console.log(data);

          }  
        }); 
		
	    
       //=======================================================   
        });  

      function progress_bar_process(percentage, timer){
       $('.progress-bar').css('width', percentage + '%');
       if(percentage > 100){
        clearInterval(timer);
        $('#import_excel')[0].reset();
        $('#process').css('display', 'none');
        $('.progress-bar').css('width', '0%');
        $('#pesan').html("<div class='alert alert-primary' role='alert'>Ok, Data berhasil di import, tunggu sebentar halaman sedang dialihkan..</div>");
        $('#sebentar').html("");
        
        setTimeout(function(){
         $('#pesan').html('');
         window.location.href = 'uploaddatapendataan-'+key;
       }, 3000);
      }
    }

  });
</script>
<?php
}elseif($_GET['module']=='uploaddatapendataan'){
	include 'app/modul/mod_pendataan/scriptuploadrtlh_js.js';
?>
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
url:"app/modul/mod_pendataan/main_act.php?module=rtlhtemp&act=hapus",  
data: {id:x},
success: function (resultdata) {


  swal.fire("", "Data Telah Dihapus.", "success");
 
  $('.datatable-init-uploaddata').DataTable().ajax.reload(); 
    
}
});
		  } else {
			swal.fire("", "Anda Membatalkan Aksi Ini", "error");
		  }

		});

 
}

 </script>
<?php
}elseif($_GET['module']=='draftpendataan'){
?>
 <script>

function myFunctiondelete(x){

  swal.fire({
      title: '',
      text: "Apakah Anda Benar Ingin Mengupload Data ini!!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya, Upload Data!',
      cancelButtonText: "Batalkan !",
		}).then(function (result) {
            if (result.value) {
			
      $.ajax({

type: "POST",
url:"app/modul/mod_pendataan/main_act.php?module=rtlhtemp&act=upload2",  
data: {kodekel:x},
success: function (resultdata) {


  swal.fire("", "Data Telah Disimpan.", "success");
 
  $('.datatable-init-draftdata').DataTable().ajax.reload(); 
    
}
});
		  } else {
			swal.fire("", "Anda Membatalkan Aksi Ini", "error");
		  }

		});

 
}

 </script>
<?php
}
elseif($_GET['module']=='lappendataan'){
	?>
	<script language="javascript">
$(document).ready(function() {
	$('#kode_kota').change(function() { 
		var kode_kota = $("#kode_kota").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kecamatan2.php',
			data: 'kode_kota=' + kode_kota, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kec').html(response);
                
                
			}
		});
    })
});
</script>	
<script language="javascript">
$(document).ready(function() {
	$('#kode_kec').change(function() { 
		var kode_kec = $("#kode_kec").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kelurahan2.php',
			data: 'kode_kec=' + kode_kec, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kel').html(response);
                
                
			}
		});
    })
});
</script>
<?php
}
elseif($_GET['module']=='lapverifikasi'){
	?>
	<script language="javascript">
$(document).ready(function() {
	$('#kode_kota').change(function() { 
		var kode_kota = $("#kode_kota").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kecamatan2.php',
			data: 'kode_kota=' + kode_kota, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kec').html(response);
                
                
			}
		});
    })
});
</script>	
<script language="javascript">
$(document).ready(function() {
	$('#kode_kec').change(function() { 
		var kode_kec = $("#kode_kec").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kelurahan2.php',
			data: 'kode_kec=' + kode_kec, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kel').html(response);
                
                
			}
		});
    })
});
</script>
<?php
}
elseif($_GET['module']=='lappenanganan'){
	?>
	<script language="javascript">
$(document).ready(function() {
	$('#kode_kota').change(function() { 
		var kode_kota = $("#kode_kota").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kecamatan2.php',
			data: 'kode_kota=' + kode_kota, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kec').html(response);
                
                
			}
		});
    })
});
</script>	
<script language="javascript">
$(document).ready(function() {
	$('#kode_kec').change(function() { 
		var kode_kec = $("#kode_kec").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kelurahan2.php',
			data: 'kode_kec=' + kode_kec, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kel').html(response);
                
                
			}
		});
    })
});
</script>
<?php
}
elseif($_GET['module']=='uploadfoto'){
	?>
	<script type="text/javascript">

$(document).ready(function(){
	Dropzone.options.myDropzone = {
        autoProcessQueue: false, //This stops auto processing
        acceptedFiles:'image/jpg,image/jpeg', //Change it according to your requirement.
        maxFiles: 10,
		maxFilesize: 1,
    };
});
</script>
<?php
}
elseif($_GET['module']=='batalpendataan'){
?>

<script language="javascript">
$(document).ready(function() {
	$('#kode_kota').change(function() { 
		var kode_kota = $("#kode_kota").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kecamatan2.php',
			data: 'kode_kota=' + kode_kota, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kec').html(response);
                
                
			}
		});
    })
});
</script>	
<script language="javascript">
$(document).ready(function() {
	$('#kode_kec').change(function() { 
		var kode_kec = $("#kode_kec").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kelurahan2.php',
			data: 'kode_kec=' + kode_kec, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kel').html(response);
                
                
			}
		});
    })
});
</script>
<script>
$(document).ready(function (){

	function search(){

         var kodekota=document.getElementById("kode_kota").value;
          var kodekec=document.getElementById("kode_kec").value;
          var kodekel=document.getElementById("kode_kel").value;
          var tahundata=document.getElementById("tahun_data").value;
		  var lihatdata=document.getElementById("lihatdata").value;
	 
	   $.ajax({
		   type:"post",
		   url:"serverside/get_bataldatapendataan.php",
		   data:{tahundata:tahundata,kodekota:kodekota,kodekec:kodekec,kodekel:kodekel,lihatdata:lihatdata},
		   success:function(data){
			 $("#result").html(data);
			
		   }
	   });
 }                                    


$(".caridata").click(function(){
 search();
});



});
</script>
<?php
}elseif($_GET['module']=='lapcapaian'){
?>
<script language="javascript">
$(document).ready(function() {
	$('#kode_kota').change(function() { 
		var kode_kota = $("#kode_kota").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kecamatan2.php',
			data: 'kode_kota=' + kode_kota, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kec').html(response);
                
                
			}
		});
    })
});
</script>	
<script language="javascript">
$(document).ready(function() {
	$('#kode_kec').change(function() { 
		var kode_kec = $("#kode_kec").val();
		$.ajax({
			type: 'POST',
			url: 'serverside/get_kelurahan2.php',
			data: 'kode_kec=' + kode_kec, 
			dataType: 'html',
			success: function(response) {
				$('#kode_kel').html(response);
                
                
			}
		});
    })
});
</script>
<script>
$(document).ready(function (){

	function search(){

         var kodekota=document.getElementById("kode_kota").value;
         var kodekec=document.getElementById("kode_kec").value;
         var kodekel=document.getElementById("kode_kel").value;
         var tahundata=document.getElementById("tahun_data").value;
		 
	 
	   $.ajax({
		   type:"post",
		   url:"serverside/get_datastatistikpenanganan.php",
		   data:{tahundata:tahundata,kodekota:kodekota,kodekec:kodekec,kodekel:kodekel},
		   success:function(data){
			 $(".hasilstatistik").html(data);
			
		   }
	   });
 }                                    


$(".caridata").click(function(){
 search();
});



});
</script>
<script language="javascript">
$(document).ready(function() {
	$(".clear").click(function(){
		$("#kode_kota").val('').trigger('change');
		$("#kode_kec").val('').trigger('change');
		$("#kode_kel").val('').trigger('change');
		
		$(".hasilstatistik").html('');
 
});
})
</script>
<?php
}elseif($_GET['module']=='lapstatistik'){
	?>
	<script language="javascript">
	$(document).ready(function() {
		$('#kode_kota').change(function() { 
			var kode_kota = $("#kode_kota").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kecamatan2.php',
				data: 'kode_kota=' + kode_kota, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kec').html(response);
					
					
				}
			});
		})
	});
	</script>	
	<script language="javascript">
	$(document).ready(function() {
		$('#kode_kec').change(function() { 
			var kode_kec = $("#kode_kec").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kelurahan2.php',
				data: 'kode_kec=' + kode_kec, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kel').html(response);
					
					
				}
			});
		})
	});
	</script>
	<script>
	$(document).ready(function (){
	
		function search(){
	
			 var kodekota=document.getElementById("kode_kota").value;
			 var kodekec=document.getElementById("kode_kec").value;

			 var tahundata=document.getElementById("tahun_data").value;
			 
		 
		   $.ajax({
			   type:"post",
			   url:"serverside/get_datastatistikpendataan.php",
			   data:{tahundata:tahundata,kodekota:kodekota,kodekec:kodekec},
			   success:function(data){
				 $(".hasilstatistik").html(data);
				
			   }
		   });
	 }                                    
	
	
	$(".caridata").click(function(){
	 search();
	});
	
	
	
	});
	</script>
	<script language="javascript">
	$(document).ready(function() {
		$(".clear").click(function(){
			$("#kode_kota").val('').trigger('change');
			$("#kode_kec").val('').trigger('change');
			
			
			$(".hasilstatistik").html('');
	 
	});
	})
	</script>
	<?php
	}
	elseif($_GET['module']=='lapmilik'){
		?>
		<script language="javascript">
		$(document).ready(function() {
			$('#kode_kota').change(function() { 
				var kode_kota = $("#kode_kota").val();
				$.ajax({
					type: 'POST',
					url: 'serverside/get_kecamatan2.php',
					data: 'kode_kota=' + kode_kota, 
					dataType: 'html',
					success: function(response) {
						$('#kode_kec').html(response);
						
						
					}
				});
			})
		});
		</script>	
		<script language="javascript">
		$(document).ready(function() {
			$('#kode_kec').change(function() { 
				var kode_kec = $("#kode_kec").val();
				$.ajax({
					type: 'POST',
					url: 'serverside/get_kelurahan2.php',
					data: 'kode_kec=' + kode_kec, 
					dataType: 'html',
					success: function(response) {
						$('#kode_kel').html(response);
						
						
					}
				});
			})
		});
		</script>
<?php
	}elseif($_GET['module']=='uploadbuktidukung'){
		include 'app/modul/mod_penanganan/scriptuploadbukti_js.js';
		?>
<script language="javascript">
	$(document).ready(function() {
		$('#kode_kota').change(function() { 
			var kode_kota = $("#kode_kota").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kecamatan2.php',
				data: 'kode_kota=' + kode_kota, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kec').html(response);
					
					
				}
			});
		})
	});
	</script>	
	<script language="javascript">
	$(document).ready(function() {
		$('#kode_kec').change(function() { 
			var kode_kec = $("#kode_kec").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kelurahan2.php',
				data: 'kode_kec=' + kode_kec, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kel').html(response);
					
					
				}
			});
		})
	});
	</script>
<script type="text/javascript">
		$(document).ready(function(){
			$('#modaleditbukti').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_penanganan/get_uploadbukti.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
		
<?php
}elseif($_GET['module']=='lihatdatabukti'){
?>
<script type="text/javascript">
		$(document).ready(function(){
			$('#modallihatbukti').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_penanganan/get_lihatbukti.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
<script language="javascript">
	$(document).ready(function() {
		$('#kode_kota').change(function() { 
			var kode_kota = $("#kode_kota").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kecamatan2.php',
				data: 'kode_kota=' + kode_kota, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kec').html(response);
					
					
				}
			});
		})
	});
	</script>	
	<script language="javascript">
	$(document).ready(function() {
		$('#kode_kec').change(function() { 
			var kode_kec = $("#kode_kec").val();
			$.ajax({
				type: 'POST',
				url: 'serverside/get_kelurahan2.php',
				data: 'kode_kec=' + kode_kec, 
				dataType: 'html',
				success: function(response) {
					$('#kode_kel').html(response);
					
					
				}
			});
		})
	});
	</script>
<?php
}elseif ($_GET['module']=='header'){ 
	include 'app/modul/mod_header/scriptadd_js.js';
    include 'app/modul/mod_header/scriptedit_js.js';
?>
<script type="text/javascript">
		$(document).ready(function(){
			$('#modaledit').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_header/get_edit.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datastatus').html(data);//menampilkan data ke dalam modal
		
					}
				});
				
			 });
		});
		</script>
        <script type="text/javascript">
		$(document).ready(function(){
			$('#modallihat').on('show.bs.modal', function (e) {
				var Id = $(e.relatedTarget).data('id');
				$.ajax({
					type :'post',
					url  :'serverside/modul/mod_header/get_detail.php',
					data :'Id='+ Id,
					success : function(data){
		
					$('.hasil-datadetail').html(data);//menampilkan data ke dalam modal
		
					}
				});
			 });
		});
		</script>
		<script>

function myFunctiondelete(x){

swal.fire({
  title: '',
  text: "Apakah Anda Benar Ingin Melakukan Aksi Ini !",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Ya !',
  cancelButtonText: "Batalkan !",
	}).then(function (result) {
		if (result.value) {
		
  $.ajax({

type: "POST",
url:"app/modul/mod_header/main_act.php?module=header&act=nonaktifkan",  
data: {id:x},
success: function (resultdata) {


swal.fire("", "Data Telah "+resultdata, "success");

$('.datatable-init-exportheader').DataTable().ajax.reload(); 

}
});
	  } else {
		swal.fire("", "Anda Membatalkan Aksi Ini", "error");
	  }

	});


}

</script>
<?php
}
?>			
	
		
	
	
